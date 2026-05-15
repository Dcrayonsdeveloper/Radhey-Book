<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $overrides = [
            'mahadev-book' => [
                'schema_webpage_name'         => 'Mahadev Book Betting ID - Radhey Book',
                'schema_webpage_description'  => 'Get your Mahadev Book Betting ID through Radhey Book and access online cricket betting, IPL markets, football, tennis, casino games, and live sports wagering platforms with secure login, instant activation, and 24/7 support.',
                'schema_service_name'         => 'Mahadev Book Betting ID Service',
                'schema_service_servicetype'  => 'Online Betting ID Service',
                'schema_service_description'  => 'Radhey Book provides Mahadev Book betting IDs that enable users to access multiple online sports betting markets including cricket, IPL, football, tennis, casino games, and live wagering platforms with secure and fast account setup.',
                'faq_1_q' => 'What is the mahadev book contact number?',
                'faq_1_a' => 'The mahadev book contact number is usually shared via WhatsApp once you connect with the support team for registration.',
                'faq_2_q' => 'How can I get Mahadev Book WhatsApp number?',
                'faq_2_a' => 'To obtain the Mahadev Book WhatsApp number, you have to press the official WhatsApp link to register an ID.',
                'faq_3_q' => 'What is Mahadev exchange?',
                'faq_3_a' => 'Mahadev exchange is the platform where users can access different betting markets and place bets with live odds.',
                'faq_4_q' => 'How to get Mahadev Book demo ID?',
                'faq_4_a' => 'To receive a Mahadev Book demo ID, you have to request it via WhatsApp and then complete a few easy steps suggested by support.',
                'faq_5_q' => 'How to Contact Mahadev Book?',
                'faq_5_a' => 'To Contact Mahadev Book, you can use the WhatsApp support option for quick and direct communication.',
                'faq_6_q' => 'Is Mahadev Book safe to use?',
                'faq_6_a' => 'Yes, mahadev online book is designed to provide a safe betting environment where transactions are safe and the support is reliable.',
            ],
            'mahadev-book-id' => [
                'schema_webpage_name'         => 'Mahadev Book ID - Radhey Book',
                'schema_webpage_description'  => 'Get your Mahadev Book ID with Radhey Book and access online cricket betting, IPL matches, football, tennis, casino games, and live sports wagering platforms with secure login, instant activation, and 24/7 support.',
                'schema_service_name'         => 'Mahadev Book ID Service',
                'schema_service_servicetype'  => 'Online Betting ID Service',
                'schema_service_description'  => 'Radhey Book provides Mahadev Book IDs that allow users to access multiple online betting markets including cricket, IPL, football, tennis, casino games, and live wagering platforms with secure and fast account setup.',
                'faq_1_q' => 'What is a Mahadev Book ID?',
                'faq_1_a' => 'A Mahadev Book ID is your personal account for accessing the Mahadev Book betting platform. It lets you log in, manage funds, place bets and withdraw winnings securely.',
                'faq_2_q' => 'How can I get a Mahadev Book ID on WhatsApp?',
                'faq_2_a' => 'Click the WhatsApp button on this page, contact us on the Mahadev Book ID mobile number, share your details, make your deposit and your account is activated within minutes.',
                'faq_3_q' => 'Can I get a Mahadev Book demo ID to try the platform?',
                'faq_3_a' => 'Yes, you can request a Mahadev Book demo ID from Radhey Book to explore the platform and understand the features before making your first real deposit.',
                'faq_4_q' => 'What is a Mahadev exchange ID?',
                'faq_4_a' => 'A Mahadev exchange ID gives you access to the Mahadev betting exchange where you can bet against other users with better odds and more flexibility in your betting strategy.',
                'faq_5_q' => 'How do I access my Mahadev Book betting ID login?',
                'faq_5_a' => 'After receiving your Mahadev Book betting ID login credentials on WhatsApp, visit the platform, enter your username and password and start betting immediately.',
                'faq_6_q' => 'Is the Mahadev Book ID safe to use?',
                'faq_6_a' => 'Yes, every Mahadev Book betting ID from Radhey Book is fully verified and protected with SSL encryption. Your data and funds are safe at all times.',
            ],
            // NOTE: user pasted the lord-exchange WebPage block here by mistake.
            // Slug-correct content applied for the actual /lords-exchange-id page.
            'lords-exchange-id' => [
                'schema_webpage_name'         => 'Lords Exchange ID - Radhey Book',
                'schema_webpage_description'  => 'Get your Lords Exchange ID with Radhey Book and access live cricket betting markets, IPL session betting, football, tennis, casino games, and live wagering platforms with secure login, fast activation, and 24/7 support.',
                'schema_service_name'         => 'Lords Exchange ID Service',
                'schema_service_servicetype'  => 'Online Betting ID Service',
                'schema_service_description'  => 'Radhey Book provides Lords Exchange IDs that allow users to access live cricket betting markets, IPL leagues, casino games, football and tennis wagering with secure access and instant account setup.',
                'faq_1_q' => 'What is a Lords Exchange ID?',
                'faq_1_a' => 'A Lords Exchange ID is your personal account for accessing the Lords Exchange betting platform. It lets you log in, manage funds, place bets and withdraw winnings securely.',
                'faq_2_q' => 'How can I get a Lords Exchange ID on WhatsApp?',
                'faq_2_a' => 'Click the WhatsApp button on this page, send your request, share your details, make your deposit and your Lords Exchange ID is activated within minutes.',
                'faq_3_q' => 'How do I access Lords Exchange betting ID login?',
                'faq_3_a' => 'After receiving your Lords Exchange betting ID login credentials on WhatsApp, visit the platform, enter your username and password and start betting immediately.',
                'faq_4_q' => 'Is Lords Exchange ID India safe to use?',
                'faq_4_a' => 'Yes, your Lords Exchange ID India from Radhey Book is completely safe. We use SSL encryption and secure payment gateways to protect your data and funds.',
                'faq_5_q' => 'Can I use Lords Exchange cricket ID for IPL?',
                'faq_5_a' => 'Yes, your lords exchange cricket ID gives you full access to all IPL matches with the best odds, live betting and session markets throughout the season.',
                'faq_6_q' => 'Who is the best Lords Exchange ID provider?',
                'faq_6_a' => 'Radhey Book is the most trusted lords exchange ID provider with 7+ years experience, instant activation, fastest withdrawals and 24/7 WhatsApp support for all users.',
            ],
            'lotus-exchange' => [
                'schema_webpage_name'         => 'Lotus Exchange - Radhey Book',
                'schema_webpage_description'  => 'Get access to Lotus Exchange betting ID services through Radhey Book and explore online sports betting markets including cricket, IPL, football, tennis, casino games, and live wagering platforms with secure login, fast activation, and 24/7 support.',
                'schema_service_name'         => 'Lotus Exchange Betting ID Service',
                'schema_service_servicetype'  => 'Online Betting ID Service',
                'schema_service_description'  => 'Radhey Book provides Lotus Exchange betting IDs that allow users to access multiple online sports betting markets including cricket, IPL, football, tennis, casino games, and live wagering platforms with secure and instant account setup.',
                'faq_1_q' => 'What is Lotus Exchange ID?',
                'faq_1_a' => 'A Lotus Exchange ID is your unique login credential for accessing the platform, placing bets, and tracking live cricket matches.',
                'faq_2_q' => 'How can I get a Lotus Betting ID?',
                'faq_2_a' => 'Send a WhatsApp message requesting an account, provide your details, make the first deposit, and receive your WhatsApp betting ID instantly.',
                'faq_3_q' => 'How do I register on Lotus Exchange com login registration?',
                'faq_3_a' => 'Click the WhatsApp link on the official website, send "Hi, I want a Lotus Exchange ID," provide your details, make a deposit, and receive your ID.',
                'faq_4_q' => 'Can I use Lotus Cricket ID for IPL betting?',
                'faq_4_a' => 'Yes, your Lotus Cricket ID gives full access to IPL markets, including match winners, top scorers, and live odds.',
                'faq_5_q' => 'What is Lotusexch?',
                'faq_5_a' => 'Lotusexch refers to the Lotus Exchange platform where users can create an instant cricket ID, place bets, and enjoy live cricket betting in India.',
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
        $slugs = ['mahadev-book', 'mahadev-book-id', 'lords-exchange-id', 'lotus-exchange'];
        $schemaKeys = [
            'schema_breadcrumb_name',
            'schema_webpage_name', 'schema_webpage_description',
            'schema_service_name', 'schema_service_description', 'schema_service_servicetype',
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
