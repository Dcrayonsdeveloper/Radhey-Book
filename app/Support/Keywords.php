<?php

namespace App\Support;

class Keywords
{
    /**
     * Maximum number of unique URLs we'll auto-link on a single page render.
     * Google penalises pages that look manipulative; 8–14 contextual internal
     * links is the sweet spot per recent SEO guidance. Beyond this cap we
     * stop adding new links even if more keywords match.
     */
    private const MAX_LINKS_PER_PAGE = 14;

    /**
     * Section keys whose content must NEVER be auto-linked. Used to keep the
     * very first body paragraph link-free so Google's crawler reads the
     * page's topic-focus signal before any anchor diverts link equity to
     * another URL.
     *
     * Scope is intentionally narrow: ONLY the first-body-paragraph fields.
     * Heroes/subtitles are short and their rotation/layout role makes them
     * different from an "introduction paragraph" for SEO purposes.
     */
    private const SKIP_LINK_KEYS = [
        'intro_text_1',
        'about_text_1',
    ];

    /**
     * Keyword → internal URL mapping for auto-linking.
     * Order matters: longer / more specific phrases must come BEFORE shorter
     * ones (e.g. "IPL Betting ID" before "Cricket ID") so we link the most
     * specific landing page first.
     */
    private const KEYWORD_URLS = [
        // Longest, most specific first
        'Online Cricket Betting ID'  => '/cricket-betting-id',
        'Online Betting ID Provider' => '/online-betting-id',
        'IPL Betting ID Provider'    => '/best-ipl-betting-id-providers',
        'T20 Cricket Betting ID'     => '/t20-cricket-betting-id',
        'How to Get IPL Betting ID'  => '/how-to-get-ipl-betting-id',
        'What is IPL Betting ID'     => '/what-is-ipl-betting-id',
        'Reddy Anna Book ID'         => '/reddy-anna-book-id',
        'Mahadev Book ID'            => '/mahadev-book-id',
        'Fairplay Exchange ID'       => '/fairplay-exchange-id',
        'Lords Exchange ID'          => '/lords-exchange-id',
        'Lotus Exchange ID'          => '/lotus-exchange-id',
        'Sky Exchange ID'            => '/sky-exchange-id',
        'WhatsApp Betting ID'        => '/whatsapp-betting-id',
        'Online Betting ID'          => '/online-betting-id',
        'Online Cricket ID'          => '/cricket',
        'Cricket Betting ID'         => '/cricket-betting-id',
        'Casino Betting ID'          => '/casino',
        'Tennis Betting ID'          => '/tennis-betting-id',
        'Football Betting ID'        => '/football-betting-id',
        'Online Casino ID'           => '/casino',
        'Tennis Betting'             => '/tennis-betting',
        'Football Betting'           => '/football-betting',
        'IPL Betting ID'             => '/ipl-betting-id',
        'T20 Betting ID'             => '/t20-betting-id',
        'Lords Exchange'             => '/lord-exchange',
        'Lotus Exchange'             => '/lotus-exchange',
        'Sky Exchange'               => '/sky-exchange',
        'Reddy Anna'                 => '/reddy-anna',
        'Mahadev Book'               => '/mahadev-book',
        'Cricket ID'                 => '/cricket-betting-id',
        'Casino ID'                  => '/casino',
    ];

    /**
     * URLs auto-linked so far on the current request. Shared across all
     * Keywords::link() calls during one page render so that:
     *   - same URL is never auto-linked twice on a page (Google's first-link
     *     priority rule means duplicate internal links waste link equity);
     *   - distinct keywords pointing to the SAME URL only produce one link.
     *
     * @var array<string,bool>
     */
    private static array $linkedUrls = [];

    /**
     * Reset per-request state. Static class state is naturally reset between
     * requests under PHP-FPM (Hostinger), so this is mostly defensive — call
     * it from a middleware or service provider if you ever switch to a
     * long-running runtime like Laravel Octane.
     */
    public static function resetRequestState(): void
    {
        self::$linkedUrls = [];
    }

    /**
     * Wrap the first occurrence of each known keyword in <a href="..."> to its
     * target page, with these SEO-aware safeguards:
     *
     *  - Page-wide deduplication: each target URL is auto-linked AT MOST ONCE
     *    per page render (not once per content block). Honours Google's
     *    first-link priority and prevents internal-link bloat.
     *  - Hard cap: stop adding new auto-links after MAX_LINKS_PER_PAGE.
     *  - Self-link skip: never link to the page the visitor is already on.
     *  - Existing-anchor safe: text inside <a>...</a> is skipped so manually
     *    added links and entire-card-as-link wrappers remain untouched.
     *  - Adds title="" attribute on each generated link for accessibility
     *    and a small contextual SEO/UX win.
     */
    public static function link(?string $html, ?string $currentPath = null, ?string $sectionKey = null): string
    {
        if ($html === null || $html === '') {
            return (string) $html;
        }

        // Skip auto-linking entirely on configured "first paragraph" keys.
        // Keeps the intro content link-free for SEO topic-focus signals.
        if ($sectionKey !== null && in_array($sectionKey, self::SKIP_LINK_KEYS, true)) {
            return $html;
        }

        // Normalize current path for self-link detection
        $currentNorm = $currentPath !== null ? trim($currentPath, '/') : null;

        // Split into tag and text segments. PREG_SPLIT_DELIM_CAPTURE keeps the
        // delimiters (the tags themselves) in the resulting array.
        $parts = preg_split('/(<[^>]+>)/', $html, -1, PREG_SPLIT_DELIM_CAPTURE);
        if ($parts === false) {
            return $html;
        }

        $aDepth = 0;

        foreach ($parts as $i => $part) {
            if ($part === '' || $part === null) {
                continue;
            }

            // Tag — track <a> nesting, skip processing
            if (str_starts_with($part, '<')) {
                if (preg_match('/^<\s*a\b/i', $part)) {
                    $aDepth++;
                } elseif (preg_match('/^<\s*\/\s*a\s*>/i', $part)) {
                    $aDepth = max(0, $aDepth - 1);
                }
                continue;
            }

            // Text segment — skip if currently inside <a>
            if ($aDepth > 0) {
                continue;
            }

            // Hit the page-wide cap? Stop processing further text segments.
            if (count(self::$linkedUrls) >= self::MAX_LINKS_PER_PAGE) {
                continue;
            }

            // Collect all replacements in the ORIGINAL text first, then apply
            // them in one pass at the end. Searching always happens in $part
            // (untouched), never in a modified string — this prevents the
            // matcher from finding keywords inside <a> tags it just inserted
            // (e.g. matching "Cricket ID" inside title="Online Cricket ID").
            //
            // Each replacement records [offset, length, htmlReplacement].
            // We track $usedRanges so two keywords can't overlap.
            $replacements = [];
            $usedRanges   = [];

            foreach (self::KEYWORD_URLS as $keyword => $url) {
                // Per-page deduplication.
                if (isset(self::$linkedUrls[$url])) {
                    continue;
                }
                // Don't self-link.
                if ($currentNorm !== null && trim($url, '/') === $currentNorm) {
                    continue;
                }
                // Cap reached mid-iteration — stop trying more keywords.
                if (count(self::$linkedUrls) >= self::MAX_LINKS_PER_PAGE) {
                    break;
                }

                $pattern = '/\b' . preg_quote($keyword, '/') . '\b/i';
                $searchOffset = 0;
                while (preg_match($pattern, $part, $m, PREG_OFFSET_CAPTURE, $searchOffset)) {
                    $matched    = $m[0][0];
                    $matchStart = $m[0][1];
                    $matchEnd   = $matchStart + strlen($matched);

                    // Skip if this match overlaps a range already claimed by
                    // a longer/earlier keyword.
                    $overlap = false;
                    foreach ($usedRanges as [$rs, $re]) {
                        if (!($matchEnd <= $rs || $matchStart >= $re)) {
                            $overlap = true;
                            break;
                        }
                    }
                    if ($overlap) {
                        $searchOffset = $matchEnd;
                        continue;
                    }

                    $hrefAttr  = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
                    $titleAttr = htmlspecialchars($keyword, ENT_QUOTES, 'UTF-8');
                    $replacementHtml = '<a href="' . $hrefAttr . '" title="' . $titleAttr . '">' . $matched . '</a>';

                    $replacements[]   = [$matchStart, strlen($matched), $replacementHtml];
                    $usedRanges[]     = [$matchStart, $matchEnd];
                    self::$linkedUrls[$url] = true;
                    break; // First occurrence only.
                }
            }

            if (empty($replacements)) {
                continue;
            }

            // Apply replacements right-to-left so earlier offsets stay valid.
            usort($replacements, fn ($a, $b) => $b[0] <=> $a[0]);
            $modified = $part;
            foreach ($replacements as [$off, $len, $repl]) {
                $modified = substr($modified, 0, $off) . $repl . substr($modified, $off + $len);
            }
            $parts[$i] = $modified;
        }

        return implode('', $parts);
    }

    /**
     * Backwards-compatible no-op kept so older call sites don't break.
     * Auto-bolding is no longer applied; auto-linking via link() is the
     * replacement for in-content keyword highlighting.
     */
    public static function bold(?string $html): string
    {
        return $html ?? '';
    }
}
