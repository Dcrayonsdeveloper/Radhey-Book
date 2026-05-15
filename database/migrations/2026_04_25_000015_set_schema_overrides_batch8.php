<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $overrides = [
            'lotus-exchange-id' => [
                'schema_webpage_name'         => 'Lotus Exchange ID - Radhey Book',
                'schema_webpage_description'  => 'Get your Lotus Exchange ID with Radhey Book and access online sports betting platforms including cricket, IPL, football, tennis, casino games, and live wagering markets with secure login, instant activation, and 24/7 support.',
                'schema_service_name'         => 'Get Lotus Exchange ID Today',
                'schema_service_servicetype'  => 'Online Betting ID Service',
                'schema_service_description'  => 'Radhey Book provides Lotus Exchange IDs that allow users to participate in multiple online betting markets including live sports betting, casino games, and real-time wagering with secure and fast account setup.',
                'faq_1_q' => 'What is a Lotus Exchange ID?',
                'faq_1_a' => 'A Lotus Exchange ID is your personal account for accessing the Lotus Exchange betting platform. It lets you log in, manage funds, place bets and withdraw winnings securely.',
                'faq_2_q' => 'How can I get a Lotus Exchange ID on WhatsApp?',
                'faq_2_a' => 'Click the WhatsApp button, send your request, share details, make your deposit and your Lotus Exchange ID is activated within minutes.',
                'faq_3_q' => 'How do I access Lotus Exchange betting ID login?',
                'faq_3_a' => 'After receiving your Lotus Exchange betting ID login credentials on WhatsApp, visit the platform, enter your username and password and start betting.',
                'faq_4_q' => 'Is Lotus Exchange ID India safe?',
                'faq_4_a' => 'Yes, your Lotus Exchange ID India from Radhey Book is completely safe with SSL encryption and secure payment gateways.',
                'faq_5_q' => 'Can I use Lotus Exchange cricket ID for IPL?',
                'faq_5_a' => 'Yes, your lotus exchange cricket ID gives you full access to all IPL matches with live betting and session markets.',
                'faq_6_q' => 'Who is the best Lotus Exchange ID provider?',
                'faq_6_a' => 'Radhey Book is the most trusted lotus exchange ID provider with 7+ years experience, instant activation, fast withdrawals and 24/7 WhatsApp support.',
            ],
            'fairplay-exchange-id' => [
                'schema_webpage_name'         => 'Fairplay Exchange ID - Radhey Book',
                'schema_webpage_description'  => 'Get your Fairplay Exchange ID with Radhey Book and access online sports betting platforms including cricket, IPL, football, tennis, casino games, and live wagering markets with secure login, fast activation, and 24/7 support.',
                'schema_service_name'         => 'Fairplay Exchange ID Service',
                'schema_service_servicetype'  => 'Online Betting ID Service',
                'schema_service_description'  => 'Radhey Book provides Fairplay Exchange IDs that allow users to access multiple online betting markets including live sports betting, casino games, and real-time wagering platforms with secure and instant account setup.',
                'faq_1_q' => 'What is a Fairplay Exchange ID?',
                'faq_1_a' => 'A fairplay exchange ID is your personal account for accessing the Fairplay betting exchange. It lets you log in, manage funds, place bets on cricket and casino, and withdraw winnings securely.',
                'faq_2_q' => 'How do I complete my Fairplay exchange ID sign up?',
                'faq_2_a' => 'Click the WhatsApp button on this page to start your Fairplay exchange ID sign up. Send your request, share your details, make your deposit and your account is activated within minutes.',
                'faq_3_q' => 'How do I access my fairplay exchange ID login?',
                'faq_3_a' => 'After receiving your fairplay exchange ID login credentials on WhatsApp, visit the platform, enter your username and password and start betting immediately.',
                'faq_4_q' => 'How do I contact the fairplay exchange ID number?',
                'faq_4_a' => 'The fairplay exchange ID number is the customer care contact for your account. Click the WhatsApp button on this page or save the number to reach our support team 24/7 for sign up help, deposits, withdrawals or any account related query.',
                'faq_5_q' => 'Is fairplay exchange ID india safe to use?',
                'faq_5_a' => 'Yes, your fairplay exchange ID india account from Radhey Book is completely safe. We use SSL encryption and secure payment gateways to protect your data and funds at all times.',
                'faq_6_q' => 'Who is the best Fairplay exchange ID provider in India?',
                'faq_6_a' => 'Radhey Book is one of the most trusted Fairplay exchange ID provider options in India with 7+ years of experience, instant activation, fast withdrawals and 24/7 WhatsApp support.',
            ],
            'sky-exchange' => [
                'schema_webpage_name'         => 'Sky Exchange - Radhey Book',
                'schema_webpage_description'  => 'Get access to Sky Exchange betting ID services through Radhey Book and explore online sports betting markets including cricket, IPL, football, tennis, casino games, and live wagering platforms with secure login, fast activation, and 24/7 support.',
                'schema_service_name'         => 'Sky Exchange Betting ID Service',
                'schema_service_servicetype'  => 'Online Betting ID Service',
                'schema_service_description'  => 'Radhey Book provides Sky Exchange betting IDs that allow users to access multiple online sports betting markets including live cricket, IPL, football, tennis, casino games, and real-time wagering platforms with secure and instant account setup.',
                'faq_1_q' => 'What is the sky exchange customer care number?',
                'faq_1_a' => 'The support on account issues, login problems, and queries related to transactions are offered by the sky exchange customer care number.',
                'faq_2_q' => 'How can I use the sky exchange deposit number?',
                'faq_2_a' => 'The sky exchange deposit number assists you in reaching out to the support to verify deposits and address issues related to payments.',
                'faq_3_q' => 'What is a sky exchange cricket ID?',
                'faq_3_a' => 'A sky exchange cricket ID is your own account that enables you to bet on cricket matches and under various betting markets.',
                'faq_4_q' => 'How do I access skyexchange login?',
                'faq_4_a' => 'Skyexchange login using your credentials and begin betting on the live matches immediately.',
                'faq_5_q' => 'What is a skyexchange master ID?',
                'faq_5_a' => 'A skyexchange master ID will grant complete access to every betting option, such as advanced markets and a variety of sports.',
                'faq_6_q' => 'Can I get an instant cricket ID on skyexchange?',
                'faq_6_a' => 'Yes, with WhatsApp, users can easily obtain an instant cricket ID and begin betting after a few minutes.',
            ],
            'sky-exchange-id' => [
                'schema_webpage_name'         => 'Sky Exchange ID - Radhey Book',
                'schema_webpage_description'  => 'Get your Sky Exchange ID with Radhey Book and access online sports betting platforms including cricket, IPL, football, tennis, casino games, and live wagering markets with secure login, instant activation, and 24/7 customer support.',
                'schema_service_name'         => 'Sky Exchange ID Service',
                'schema_service_servicetype'  => 'Online Betting ID Service',
                'schema_service_description'  => 'Radhey Book provides Sky Exchange IDs that allow users to access live sports betting markets, casino games, and real-time wagering platforms with secure access and fast account setup.',
                'faq_1_q' => 'What is a Sky Exchange ID?',
                'faq_1_a' => 'A sky exchange ID is your personal account for accessing the Sky Exchange betting platform. It lets you log in, manage funds, place bets on cricket and casino, and withdraw winnings securely.',
                'faq_2_q' => 'How do I complete my Sky Exchange ID sign up?',
                'faq_2_a' => 'Click the WhatsApp button on this page to start your Sky Exchange ID sign up. Send your request, share your details, make your deposit and your account is activated within minutes.',
                'faq_3_q' => 'How do I find the Sky Exchange ID contact number?',
                'faq_3_a' => 'You can reach our team through the Sky Exchange ID contact number shown on this page or via the WhatsApp button. Our support team is available 24/7 for any help you need.',
                'faq_4_q' => 'Is the Sky exchange ID contact number india available 24 hours?',
                'faq_4_a' => 'Yes, our Sky exchange ID contact number india is available round the clock for users from all parts of the country. You can call or message anytime for fast support.',
                'faq_5_q' => 'How do I contact the sky exchange betting ID number?',
                'faq_5_a' => 'The sky exchange betting ID number is the customer care contact for your account. Click the WhatsApp button on this page or save the number to reach our support team 24/7 for sign up help, deposits, withdrawals or any account related query.',
                'faq_6_q' => 'Can I get a Sky Exchange account along with my Sky Exchange ID?',
                'faq_6_a' => 'Yes, as a trusted sky exchange ID provider, we can set up your sky exchange betting ID india account along with your Sky Exchange ID. Both accounts can be created in the same WhatsApp chat.',
                'faq_7_q' => 'How do I access my sky exchange betting ID login?',
                'faq_7_a' => 'After receiving your sky exchange betting ID login credentials on WhatsApp, visit the platform, enter your username and password and start betting immediately.',
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
        $slugs = ['lotus-exchange-id', 'fairplay-exchange-id', 'sky-exchange', 'sky-exchange-id'];
        $schemaKeys = [
            'schema_breadcrumb_name',
            'schema_webpage_name', 'schema_webpage_description',
            'schema_service_name', 'schema_service_description', 'schema_service_servicetype',
            'schema_mainentity_type', 'schema_mainentity_json',
        ];
        for ($i = 1; $i <= 8; $i++) {
            $schemaKeys[] = "faq_{$i}_q";
            $schemaKeys[] = "faq_{$i}_a";
        }
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
