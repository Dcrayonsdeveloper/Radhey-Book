<?php

namespace App\Models;

use App\Support\Keywords;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'slug', 'title', 'meta_title', 'meta_description',
        'meta_keywords', 'noindex', 'canonical_url',
        'sections', 'content_blocks', 'is_active',
    ];

    protected $casts = [
        'sections' => 'array',
        'content_blocks' => 'array',
        'is_active' => 'boolean',
        'noindex' => 'boolean',
    ];

    /**
     * Section keys whose content should NOT have keywords auto-bolded — typically
     * short labels, button text, badges, CTAs, internal hidden config, and toggles.
     * Long-form content (paragraphs, list items, descriptions, FAQ answers) IS bolded.
     */
    private const NO_BOLD_PATTERNS = [
        '/_btn\d*(_|$)/',       // intro_btn_text, hero_btn1_text, get_id_btn_text, …
        '/_button\d*(_|$)/',
        '/_badge(_|$)/',        // platform_X_badge, hero_slide_X_badge
        '/_label(_|$)/',        // stats_X_label
        '/_link(_|$)/',
        '/_url$/',
        '/_phone$/',
        '/_email$/',
        '/_title(_|$)/',        // intro_title, why_X_title, platform_X_title, faq_title …
        '/_heading(_|$)/',      // why_2026_signup_heading
        '/_q(_|$)/',            // faq_X_q (FAQ questions render in a button)
        '/^show_/',             // visibility toggles
        '/^_/',                 // internal keys (e.g. _panel_order)
    ];

    public function section(string $key, $default = '')
    {
        $value = data_get($this->sections, $key);
        $resolved = ($value !== null && $value !== '') ? $value : $default;

        if (!is_string($resolved) || $resolved === '') {
            return $resolved;
        }

        foreach (self::NO_BOLD_PATTERNS as $pattern) {
            if (preg_match($pattern, $key)) {
                return $resolved;
            }
        }

        return Keywords::link($resolved, request()->path(), $key);
    }

    public static function findBySlug(string $slug): ?self
    {
        return static::where('slug', $slug)->where('is_active', true)->first();
    }

    /**
     * Fetch a section value WITHOUT keyword auto-linking. Use inside templates
     * where the field is rendered inside an existing <a> wrapper (e.g. card
     * links) to avoid nested anchor tags, which browsers reject and which
     * break the surrounding flex/grid layout.
     */
    public function raw(string $key, $default = '')
    {
        $value = data_get($this->sections, $key);
        return ($value !== null && $value !== '') ? $value : $default;
    }
}
