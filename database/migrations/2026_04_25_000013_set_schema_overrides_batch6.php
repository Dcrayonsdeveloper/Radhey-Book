<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $overrides = [
            'reddy-anna' => [
                'schema_breadcrumb_name'     => 'Reddy Anna Book',
                'schema_webpage_name'        => 'Reddy Anna - Radhey Book',
                'schema_webpage_description' => 'Get access to Reddy Anna betting ID services with Radhey Book and explore online sports betting platforms including cricket, IPL, football, tennis, casino games, and live wagering with secure login, fast activation, and 24/7 support.',
                'schema_service_name'        => 'Reddy Anna Betting ID Service',
                'schema_service_description' => 'Radhey Book provides Reddy Anna betting IDs that allow users to access multiple online betting markets, live sports wagering, casino games, and digital gaming platforms with secure and instant account setup.',
                'faq_1_q' => 'How can I connect with the Reddy Anna Book Support?',
                'faq_1_a' => 'Users can connect with the Reddy Anna Book Support via the Reddy Anna Book Contact Number shared through the official WhatsApp Support on Radhey Book.',
                'faq_2_q' => 'How can I join the Reddy Anna WhatsApp Group?',
                'faq_2_a' => 'To join the WhatsApp group you need to contact the support team via the Reddy Anna WhatsApp group number. They will guide you with the correct joining link.',
                'faq_3_q' => 'How can I get the Reddy Anna Demo ID?',
                'faq_3_a' => 'Contact support on WhatsApp and request for a demo. Share basic details, and you will receive your Reddy Anna Demo ID quickly.',
                'faq_4_q' => 'How can I contact Reddy Anna?',
                'faq_4_a' => 'You can Contact Reddy Anna through WhatsApp or via Reddy Anna Book Contact Number. Simply send a message and the support team will assist you.',
                'faq_5_q' => 'Is Reddy Anna Book ID safe to use?',
                'faq_5_a' => 'Yes, the Reddy Anna Book ID is safe when accessed through trusted platforms like Radhey Book.',
                'faq_6_q' => 'How quickly can I get my Reddy Anna Book ID?',
                'faq_6_a' => 'You can get your Instant Cricket ID within minutes after completing the steps through WhatsApp.',
            ],
            'reddy-anna-book-id' => [
                'schema_webpage_name'        => 'Reddy Anna Book ID - Radhey Book',
                'schema_webpage_description' => 'Get your Reddy Anna Book ID with Radhey Book and access online cricket betting platforms, live sports markets including IPL, T20, football, tennis, casino games, and real-time wagering with secure login, fast activation, and 24/7 support.',
                'schema_service_name'        => 'Reddy Anna Book ID Service',
                'schema_service_description' => 'Radhey Book provides Reddy Anna Book IDs that allow users to access multiple online betting markets including cricket, IPL, casino games, and live sports wagering platforms with secure entry and instant account setup.',
                'faq_1_q' => 'What is a Reddy Anna Book ID?',
                'faq_1_a' => 'A Reddy Anna Book ID is your personal account for accessing the Reddy Anna Book betting platform. It lets you log in, manage funds, place bets on cricket and casino and withdraw winnings securely.',
                'faq_2_q' => 'How can I get a Reddy Anna Book ID on WhatsApp?',
                'faq_2_a' => 'Click the WhatsApp button on this page, send your request, share your details, make your deposit and your Reddy Anna Book ID is activated within minutes.',
                'faq_3_q' => 'How do I access Reddy Anna Book ID login India?',
                'faq_3_a' => 'After receiving your Reddy Anna Book ID login India credentials on WhatsApp, visit the platform, enter your username and password and start betting immediately.',
                'faq_4_q' => 'What is a Reddy Anna exchange ID?',
                'faq_4_a' => 'A Reddy Anna exchange ID gives you access to exchange betting where you bet against other users with better odds and more flexibility in your betting strategy.',
                'faq_5_q' => 'Can I use Reddy Anna casino betting ID for live games?',
                'faq_5_a' => 'Yes, your Reddy Anna casino betting ID gives you access to live casino games including Teen Patti, Roulette, Blackjack, Baccarat and hundreds of slot games with real dealers.',
                'faq_6_q' => 'Who is the best Reddy Anna ID provider?',
                'faq_6_a' => 'Radhey Book is the most trusted Reddy Anna ID provider with 7+ years experience, instant activation, fast withdrawals and 24/7 WhatsApp support for all users across India.',
            ],
        ];

        foreach ($overrides as $slug => $keys) {
            $row = DB::table('pages')->where('slug', $slug)->first();
            if (!$row) continue;
            $current = json_decode($row->sections ?? '{}', true) ?: [];
            $merged  = array_merge($current, $keys);
            DB::table('pages')->where('slug', $slug)->update([
                'sections'   => json_encode($merged),
                'updated_at' => now(),
            ]);
        }
    }

    public function down(): void
    {
        $slugs = ['reddy-anna', 'reddy-anna-book-id'];
        $schemaKeys = [
            'schema_breadcrumb_name',
            'schema_webpage_name', 'schema_webpage_description',
            'schema_service_name', 'schema_service_description',
            'schema_mainentity_type', 'schema_mainentity_json',
            'faq_1_q', 'faq_1_a', 'faq_2_q', 'faq_2_a', 'faq_3_q', 'faq_3_a',
            'faq_4_q', 'faq_4_a', 'faq_5_q', 'faq_5_a', 'faq_6_q', 'faq_6_a',
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
