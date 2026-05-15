<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $row = DB::table('pages')->where('slug', 'home')->first();
        if (!$row) return;

        $current = json_decode($row->sections ?? '{}', true) ?: [];

        // Keyword phrases to bold (longer phrases first so they win over shorter overlaps).
        $keywords = [
            'India\'s Trusted Online Football Betting ID Provider',
            'Online Football Betting ID',
            'online Football Betting ID',
            'online football betting ID',
            'Football Betting ID Provider',
            'football betting ID provider',
            'Football Betting WhatsApp number',
            'football betting WhatsApp number',
            'football betting whatsapp number',
            'Live Football Betting ID',
            'live football betting id',
            'Football Exchange ID',
            'football exchange ID',
            'Online Football ID',
            'Football Betting ID',
            'football betting ID',
            'Football Betting IDs',
            'football betting IDs',
            'Lords Exchange ID',
            'Lotus Exchange ID',
            'Sky Exchange ID',
            'Fairplay Exchange ID',
            'Lords Exchange',
            'Lotus Exchange',
            'Sky Exchange',
            'Fairplay Exchange',
            'Fairplay',
            'Online Betting ID',
        ];

        // Only bold within these prose sections. Excludes titles (which are h2/h3
        // and already visually bold via the heading style) and short labels.
        $proseKeys = [
            'hero_slide_1_subtitle',
            'intro_p1', 'intro_p2',
            'why_2026_subtitle', 'why_2026_footer',
            'what_is_p1', 'what_is_p2', 'what_is_p3',
            'why_need_subtitle',
            'why_need_1_text', 'why_need_2_text', 'why_need_3_text',
            'why_need_4_text', 'why_need_5_text', 'why_need_6_text',
            'trust_cta_p1', 'trust_cta_p2',
            'why_1_text', 'why_2_text', 'why_3_text',
            'why_4_text', 'why_5_text', 'why_6_text',
            'how_step_1_text', 'how_step_2_text', 'how_step_3_text',
            'how_step_4_text', 'how_step_5_text', 'how_step_6_text',
            'how_it_works_subtitle',
            'how_id_1_text', 'how_id_2_text', 'how_id_3_text',
            'how_id_4_text', 'how_id_5_text', 'how_id_6_text',
            'how_id_works_subtitle',
            'platforms_subtitle',
            'platform_1_text', 'platform_2_text', 'platform_3_text', 'platform_4_text',
            'care_text',
            'faq_1_a', 'faq_2_a', 'faq_3_a', 'faq_4_a', 'faq_5_a',
            'faq_6_a', 'faq_7_a', 'faq_8_a', 'faq_9_a', 'faq_10_a',
            'benefits_subtitle',
            'benefit_1_text', 'benefit_2_text', 'benefit_3_text',
            'benefit_4_text', 'benefit_5_text',
            'safety_tips_subtitle',
            'safety_tip_1_text', 'safety_tip_2_text', 'safety_tip_3_text',
            'safety_tip_4_text', 'safety_tip_5_text',
        ];

        // Build placeholder map so we don't re-bold inside an existing <strong>...</strong>.
        foreach ($proseKeys as $key) {
            if (!isset($current[$key]) || !is_string($current[$key])) continue;
            $text = $current[$key];

            // Protect existing <strong> blocks first by replacing them with a placeholder.
            $placeholders = [];
            $text = preg_replace_callback('/<strong\b[^>]*>.*?<\/strong>/is', function ($m) use (&$placeholders) {
                $token = "\x00P" . count($placeholders) . "\x00";
                $placeholders[$token] = $m[0];
                return $token;
            }, $text);

            // Apply each keyword (case-sensitive, whole-word, longest first).
            foreach ($keywords as $kw) {
                $pattern = '/(?<![A-Za-z0-9_>])' . preg_quote($kw, '/') . '(?![A-Za-z0-9_<])/';
                $text = preg_replace($pattern, '<strong>' . $kw . '</strong>', $text, 1);
            }

            // Restore protected blocks.
            $text = strtr($text, $placeholders);

            $current[$key] = $text;
        }

        DB::table('pages')
            ->where('slug', 'home')
            ->update([
                'sections'   => json_encode($current),
                'updated_at' => now(),
            ]);
    }

    public function down(): void
    {
        $row = DB::table('pages')->where('slug', 'home')->first();
        if (!$row) return;

        $current = json_decode($row->sections ?? '{}', true) ?: [];

        foreach ($current as $key => $val) {
            if (is_string($val) && str_contains($val, '<strong>')) {
                $current[$key] = preg_replace('/<\/?strong\b[^>]*>/i', '', $val);
            }
        }

        DB::table('pages')
            ->where('slug', 'home')
            ->update([
                'sections'   => json_encode($current),
                'updated_at' => now(),
            ]);
    }
};
