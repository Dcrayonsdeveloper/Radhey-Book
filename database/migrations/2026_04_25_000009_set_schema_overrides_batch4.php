<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $overrides = [
            // tennis-betting-id is served by pages/tennis.blade.php (different filename),
            // so the SchemaBuilder can't pick up FAQ defaults from a matching blade file.
            // We persist the 6 FAQs directly into DB sections so both the schema and
            // (eventually) admin-editable page rendering can use them.
            'tennis-betting-id' => [
                'schema_webpage_name'        => 'Tennis Betting ID - Radhey Book',
                'schema_webpage_description' => 'Get your Tennis Betting ID with Radhey Book and access live tennis betting markets, sports wagering platforms, in-play betting, and online gaming services with secure login, fast activation, and 24/7 support.',
                'schema_service_name'        => 'Tennis Betting ID Service',
                'schema_service_description' => 'Radhey Book provides Tennis Betting IDs that allow users to participate in live tennis match betting, tournament wagering, and online sports betting platforms with secure access and quick setup.',
                'faq_1_q' => 'What is a Tennis Betting ID?',
                'faq_1_a' => 'It is your personal betting account that lets you place bets on tennis matches, Grand Slams, ATP and WTA tournaments. You can log in, deposit, bet and withdraw winnings safely.',
                'faq_2_q' => 'How can I get a tennis betting ID online in India?',
                'faq_2_a' => 'Click the WhatsApp button on this page, send your request, make a small deposit and your account is activated within 2 to 5 minutes.',
                'faq_3_q' => 'Who is the best tennis betting ID provider?',
                'faq_3_a' => 'Radhey Book is one of the most trusted providers in India. We offer instant activation, fast withdrawals, safe payments and round the clock WhatsApp support.',
                'faq_4_q' => 'How do I access my tennis betting ID india login?',
                'faq_4_a' => 'After receiving your credentials on WhatsApp, visit the platform, enter your username and password and start betting immediately.',
                'faq_5_q' => 'What is the tennis betting ID contact number?',
                'faq_5_a' => 'Our support is available on WhatsApp 24/7. You can reach out anytime for sign up help, login support, deposits, withdrawals and any account related queries.',
                'faq_6_q' => 'Is my tennis betting ID india account safe?',
                'faq_6_a' => 'Yes, your account from Radhey Book is fully safe. We use SSL encryption and secure payment gateways to protect your data and funds at all times.',
            ],
            // NOTE: user pasted the tennis-betting-id WebPage block here by mistake.
            // Slug-correct title/description applied; mainEntity reworded to fit /tennis-betting (the activity).
            'tennis-betting' => [
                'schema_webpage_name'        => 'Tennis Betting - Radhey Book',
                'schema_webpage_description' => 'Bet on tennis with Radhey Book — live ATP, WTA and Grand Slam matches with real-time odds, in-play markets, secure payments, and 24/7 WhatsApp support.',
                'schema_service_name'        => 'Tennis Betting Service',
                'schema_service_description' => 'Radhey Book offers online tennis betting on ATP, WTA, Grand Slam and other tennis tournaments with live odds, in-play markets, instant deposits and fast withdrawals.',
            ],
        ];

        foreach ($overrides as $slug => $keys) {
            $row = DB::table('pages')->where('slug', $slug)->first();
            if (!$row) {
                continue;
            }
            $current = json_decode($row->sections ?? '{}', true) ?: [];
            $merged  = array_merge($current, $keys);
            DB::table('pages')
                ->where('slug', $slug)
                ->update([
                    'sections'   => json_encode($merged),
                    'updated_at' => now(),
                ]);
        }
    }

    public function down(): void
    {
        $slugs = ['tennis-betting-id', 'tennis-betting'];
        $schemaKeys = [
            'schema_webpage_name', 'schema_webpage_description',
            'schema_service_name', 'schema_service_description',
            'schema_mainentity_type', 'schema_mainentity_json',
        ];
        foreach ($slugs as $slug) {
            $row = DB::table('pages')->where('slug', $slug)->first();
            if (!$row) continue;
            $current = json_decode($row->sections ?? '{}', true) ?: [];
            foreach ($schemaKeys as $key) {
                unset($current[$key]);
            }
            DB::table('pages')->where('slug', $slug)->update([
                'sections'   => json_encode($current),
                'updated_at' => now(),
            ]);
        }
    }
};
