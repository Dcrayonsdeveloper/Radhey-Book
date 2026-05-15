<?php

namespace App\Support;

use App\Models\Page;

class SchemaBuilder
{
    /**
     * Build all JSON-LD schemas that apply to a given page:
     *   - BreadcrumbList  (always, except for the home page)
     *   - WebPage         (always)
     *   - FAQPage         (only when the page has faq_X_q / faq_X_a section keys)
     *
     * Returns an array of associative arrays — the partial will json_encode and
     * emit one <script type="application/ld+json"> per entry.
     */
    public static function forPage(?Page $page, ?string $url = null): array
    {
        if (!$page) {
            return [];
        }

        $url      = $url ?: url()->current();
        $home     = url('/');
        $sections = $page->sections ?? [];

        // ---- per-page schema overrides (admin-editable as section keys) -------
        // Fallback chain: schema_* override → meta_* → page title.
        $webPageName = self::clean(
            ($sections['schema_webpage_name']        ?? null)
            ?: $page->meta_title
            ?: $page->title
        );
        $webPageDesc = self::clean(
            ($sections['schema_webpage_description'] ?? null)
            ?: $page->meta_description
            ?: ''
        );
        $serviceName = self::clean(
            ($sections['schema_service_name']        ?? null)
            ?: ($page->title . ' Service')
        );
        $serviceDesc = self::clean(
            ($sections['schema_service_description'] ?? null)
            ?: $webPageDesc
        );
        // Allow overriding the mainEntity type (e.g. "ItemList" for listing pages).
        // Defaults to "Service" since this site is primarily a service provider.
        $serviceType = trim($sections['schema_mainentity_type'] ?? '') ?: 'Service';

        $schemas = [];

        // --- BreadcrumbList: Home > This Page (skip on the home page itself) ---
        if ($page->slug !== 'home') {
            $breadcrumbName = self::clean(
                ($sections['schema_breadcrumb_name'] ?? null) ?: $page->title
            );
            $schemas[] = [
                '@context' => 'https://schema.org/',
                '@type'    => 'BreadcrumbList',
                'itemListElement' => [
                    [
                        '@type'    => 'ListItem',
                        'position' => 1,
                        'name'     => 'Homepage',
                        'item'     => $home,
                    ],
                    [
                        '@type'    => 'ListItem',
                        'position' => 2,
                        'name'     => $breadcrumbName,
                        'item'     => $url,
                    ],
                ],
            ];
        }

        // --- WebPage with Service mainEntity ---
        $webPage = [
            '@context'    => 'https://schema.org',
            '@type'       => 'WebPage',
            'name'        => $webPageName,
            'description' => $webPageDesc,
            'url'         => $url,
            'publisher'   => [
                '@type' => 'Organization',
                'name'  => 'Radhey Book',
            ],
        ];

        // mainEntity resolution order:
        //   1. Full JSON override (schema_mainentity_json) for complex shapes like HowTo with steps,
        //      Article with headline/mainEntityOfPage, Product, ItemList, etc.
        //   2. Simple Service-style construction from the schema_service_* keys.
        $mainEntityJson = $sections['schema_mainentity_json'] ?? null;
        if (is_string($mainEntityJson) && trim($mainEntityJson) !== '') {
            $decoded = json_decode($mainEntityJson, true);
            if (is_array($decoded) && !empty($decoded)) {
                $webPage['mainEntity'] = $decoded;
            }
        } elseif ($serviceDesc !== '') {
            $entity = [
                '@type'       => $serviceType,
                'name'        => $serviceName,
            ];
            // Optional serviceType qualifier (Schema.org Service field, e.g. "Online Betting ID Service").
            $serviceTypeQualifier = trim($sections['schema_service_servicetype'] ?? '');
            if ($serviceTypeQualifier !== '') {
                $entity['serviceType'] = $serviceTypeQualifier;
            }
            $entity['description'] = $serviceDesc;
            $webPage['mainEntity'] = $entity;
        }

        $schemas[] = $webPage;

        // --- FAQPage built from any faq_N_q / faq_N_a pairs in the page sections ---
        $faqs = self::extractFaqs($page);
        if (!empty($faqs)) {
            $schemas[] = [
                '@context' => 'https://schema.org',
                '@type'    => 'FAQPage',
                'mainEntity' => array_map(function ($f) {
                    return [
                        '@type' => 'Question',
                        'name'  => $f['q'],
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text'  => $f['a'],
                        ],
                    ];
                }, $faqs),
            ];
        }

        return $schemas;
    }

    private static array $bladeFaqCache = [];

    /**
     * Resolve the FAQ list for a page. We MERGE two sources, with DB values winning:
     *   1. Blade-template defaults — every `$page->section('faq_N_q', '...')` /
     *      matching `_a` extracted from the page's view file.
     *   2. Saved sections in the DB (admin-edited values) override blade defaults.
     *
     * Merging — rather than short-circuiting on first source — handles the
     * realistic case where an admin edited a single FAQ via the admin panel
     * (so only that one key exists in the DB), while the other Q&A pairs
     * still live as blade defaults.
     */
    private static function extractFaqs(Page $page): array
    {
        // Start with blade defaults indexed by position number.
        $byIndex = self::extractFromBladeIndexed($page->slug);

        // Overlay DB-stored values: any saved faq_N_q / faq_N_a wins.
        $sections = $page->sections ?? [];
        for ($i = 1; $i <= 50; $i++) {
            $q = $sections["faq_{$i}_q"] ?? null;
            $a = $sections["faq_{$i}_a"] ?? null;
            if (is_string($q) && trim($q) !== '') {
                $byIndex[$i]['q'] = $q;
            }
            if (is_string($a) && trim($a) !== '') {
                $byIndex[$i]['a'] = $a;
            }
        }

        ksort($byIndex);

        $faqs = [];
        foreach ($byIndex as $row) {
            if (!empty($row['q']) && !empty($row['a'])) {
                $faqs[] = ['q' => self::clean($row['q']), 'a' => self::clean($row['a'])];
            }
        }
        return $faqs;
    }

    /**
     * Read the page's blade template and pull defaults out of
     * `$page->section('faq_N_q', '…')` / `_a` pairs. Returns rows keyed by index
     * (1..N) so callers can overlay DB overrides per index. Cached per request.
     */
    private static function extractFromBladeIndexed(string $slug): array
    {
        if (isset(self::$bladeFaqCache[$slug])) {
            return self::$bladeFaqCache[$slug];
        }

        $path = resource_path("views/pages/{$slug}.blade.php");
        if (!file_exists($path)) {
            return self::$bladeFaqCache[$slug] = [];
        }
        $content = file_get_contents($path);
        if ($content === false) {
            return self::$bladeFaqCache[$slug] = [];
        }

        $defaults = [];
        // Captures the default value passed as 2nd arg to section('faq_N_q'|'faq_N_a', '<default>').
        // The 4th group handles escaped single quotes (\') inside the PHP string.
        $pattern = "/section\(\s*'(faq_(\d+)_([qa]))'\s*,\s*'((?:\\\\.|[^'\\\\])*)'\s*\)/";
        if (preg_match_all($pattern, $content, $matches, PREG_SET_ORDER)) {
            foreach ($matches as $m) {
                $idx  = (int) $m[2];
                $part = $m[3];                              // 'q' or 'a'
                $val  = stripcslashes($m[4]);               // un-escape \' \\ \n etc.
                $defaults[$idx][$part] = $val;
            }
        }

        return self::$bladeFaqCache[$slug] = $defaults;
    }

    /**
     * Strip HTML tags, decode entities, and collapse whitespace. Search engines
     * want plain text inside JSON-LD strings — any markup is an error.
     */
    private static function clean(string $value): string
    {
        $value = strip_tags($value);
        $value = html_entity_decode($value, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $value = preg_replace('/\s+/u', ' ', $value);
        return trim($value);
    }
}
