<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $row = DB::table('pages')->where('slug', 'about')->first();
        if (!$row) return;

        $current = json_decode($row->sections ?? '{}', true) ?: [];

        $content = [
            // ---------------- Hero ----------------
            'hero_badge'             => 'Trusted Since 2017',
            'hero_title'             => 'About <span class="text-gold">Radhey Book</span>',
            'hero_subtitle'          => "Your trusted platform for secure online betting IDs in India — for cricket, football, FIFA World Cup, IPL and more, with hassle-free registration and reliable customer support.",
            'hero_btn_text'          => 'Get Your Betting ID Now',
            'hero_btn_secondary_text'=> 'Our Story',

            // ---------------- Story (3 paragraphs) ----------------
            'story_title'    => 'Our <span class="text-gold">Story</span>',
            'story_subtitle' => 'Building trust in the online betting industry',
            'story_text_1'   => "Welcome to Radhey Book, India's most trusted online betting platform for quick and secure online betting IDs that are hassle-free. Our mission is to make India's sports fans feel safe and comfortable on our betting platform. Whether you're looking for a football betting ID, a FIFA World Cup betting ID, a cricket betting ID, or a trusted ID for online betting, Radhey Book provides a safe environment with access to the best sports betting exchanges seamlessly — with transparency and reliable customer support.",
            'story_text_2'   => "Radhey Book was founded with a simple but powerful vision: to provide sports fans in India with a safer, faster, and more accessible online betting experience. With over 7 years of experience, we have built a reputation for supplying trusted online betting IDs, responsive customer support, and secure user-handling methods across cricket, football and casino markets.",
            'story_text_3'   => "Users often faced platforms that were not user-friendly or reliable, and that did not provide fast cricket ID, football betting ID, or sportsbook access without restrictions. We bridged that gap. With years of experience, we know exactly what today's bettors are looking for — instant activation, secure payments, transparent service, fast withdrawals, reliable exchanges and 24×7 customer assistance.",

            // ---------------- Mission & Vision ----------------
            'mission_vision_title'   => 'Our Mission & <span class="text-gold">Vision</span>',
            'mission_vision_subtitle'=> 'What drives us every day',
            'mission_title'          => 'Our Mission',
            'mission_text'           => 'To provide secure, reliable, and swift online betting ID service across cricket, football, FIFA World Cup, IPL and casino — while upholding the highest levels of user confidence and responsible gaming.',
            'vision_title'           => 'Our Vision',
            'vision_text'            => 'To become India\'s most trusted and transparent online betting ID provider — known for fast service, user safety, reliable exchange access, responsible gaming awareness and long-term customer trust.',

            // ---------------- Stats (4) ----------------
            'stats_title'    => 'Our <span class="text-gold">Numbers</span> Speak',
            'stats_subtitle' => 'The stats that define our success',
            'stat_1_number'  => '7+',
            'stat_1_label'   => 'Years of Experience',
            'stat_1_text'    => 'Serving Indian sports bettors since 2017 with unwavering commitment to quality and trust.',
            'stat_2_number'  => '2M+',
            'stat_2_label'   => 'Happy Players',
            'stat_2_text'    => 'Over 2 million satisfied cricket and football fans trust Radhey Book for their online betting needs.',
            'stat_3_number'  => '24/7',
            'stat_3_label'   => 'Customer Support',
            'stat_3_text'    => 'Round-the-clock WhatsApp, phone and email support — never sleep so you can bet with peace of mind.',
            'stat_4_number'  => '365',
            'stat_4_label'   => 'Days of Service',
            'stat_4_text'    => 'Available every single day of the year including IPL, FIFA World Cup, festivals and weekends.',

            // ---------------- Values (4) ----------------
            'values_title'    => 'Our Core <span class="text-gold">Values</span>',
            'values_subtitle' => 'The principles that guide everything we do',
            'value_1_title'   => 'Trust',
            'value_1_text'    => 'Trust is the foundation of our business. Every interaction, every transaction, and every betting ID we provide is backed by our commitment to honesty. We have built our reputation over 7+ years of consistent, trustworthy service across cricket and football markets.',
            'value_2_title'   => 'Speed',
            'value_2_text'    => 'In the world of live cricket and football betting, time is money. We pride ourselves on instant ID activation, fast deposits and quick withdrawals — from the moment you contact us to the moment you start betting, the process is lightning fast.',
            'value_3_title'   => 'Security',
            'value_3_text'    => 'Your security is our top priority. We use advanced encryption, secure payment channels, and strict privacy policies to ensure your personal and financial information stays protected at all times.',
            'value_4_title'   => 'Support',
            'value_4_text'    => 'We believe in being there for our players at all times. Our dedicated support team works 24/7 to help with ID creation, login assistance, deposit guidance, withdrawal support, technical queries and exchange access.',

            // ---------------- Why Choose (6) ----------------
            'why_title'    => 'Why Users <span class="text-gold">Choose Radhey Book</span>',
            'why_subtitle' => 'What sets us apart from the rest',
            'why_1_title'  => 'Instant ID Activation',
            'why_1_text'   => 'Time is crucial in sporting events. Get your online betting ID without unnecessary waits — streamlined registration and onboarding in just a few minutes.',
            'why_2_title'  => '24×7 Customer Support',
            'why_2_text'   => 'Expert team available round-the-clock for ID creation, login help, deposit guidance, withdrawal support, technical queries and exchange access.',
            'why_3_title'  => 'Secure & Trusted Platform',
            'why_3_text'   => 'Advanced security measures and protected communication channels keep your data and interactions safe — designed to lower risk and build user confidence.',
            'why_4_title'  => 'Multiple Sports & Betting Options',
            'why_4_text'   => 'Cricket, football, FIFA World Cup, IPL, tennis, casino games and live exchange betting — all accessible from a single trusted platform.',
            'why_5_title'  => 'Transparent Service',
            'why_5_text'   => 'Clear communication, fair service practices, fast processing, no hidden conditions and reliable transaction handling — every step of the way.',
            'why_6_title'  => 'Multi-Sport Access via One ID',
            'why_6_text'   => 'A single trusted account that unlocks cricket betting IDs, football betting IDs, FIFA World Cup betting and more — no juggling multiple platforms.',

            // ---------------- CTA ----------------
            'cta_title'         => 'Join <span class="text-gold">Radhey Book</span> Today',
            'cta_text'          => 'Start your sports betting journey with confidence. Get the best football betting ID, IPL betting ID, instant cricket ID or secure online betting ID from India\'s trusted provider.',
            'cta_btn_text'      => 'Get Your Betting ID on WhatsApp',
            'cta_contact_text'  => 'Or call us at <a href="tel:+917901712857" class="text-gold">+91 79017 12857</a> | Email: <a href="mailto:support@radheybook.com" class="text-gold">support@radheybook.com</a>',
        ];

        $merged = array_merge($current, $content);

        DB::table('pages')
            ->where('slug', 'about')
            ->update([
                'meta_title'       => 'About Us – Radhey Book | India\'s Trusted Online Betting ID Provider',
                'meta_description' => 'Learn about Radhey Book — India\'s most trusted online betting ID provider for cricket, football, FIFA World Cup, IPL and more. 7+ years experience, instant activation, 24/7 support.',
                'meta_keywords'    => 'about radhey book, online betting ID provider india, football betting ID, cricket betting ID, FIFA betting ID provider',
                'sections'         => json_encode($merged),
                'updated_at'       => now(),
            ]);
    }

    public function down(): void
    {
        // No-op — reverting would overwrite user-edited About content silently.
    }
};
