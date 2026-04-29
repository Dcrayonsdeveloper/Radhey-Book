<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $row = DB::table('pages')->where('slug', 'home')->first();
        if (!$row) {
            return;
        }

        $current = json_decode($row->sections ?? '{}', true) ?: [];

        // Drop stale keys that no longer have a UI slot.
        unset(
            $current['platform_5_title'], $current['platform_5_text'], $current['platform_5_badge'],
            $current['platform_6_title'], $current['platform_6_text'], $current['platform_6_badge']
        );

        $content = [
            // ---------------- Hero Slide 1 ----------------
            'hero_slide_1_badge'     => "India's #1 Trusted Platform",
            'hero_slide_1_title'     => 'India\'s No.1 Trusted <span class="text-gold">IPL Betting ID</span> Provider',
            'hero_slide_1_subtitle'  => 'Radhey Book connects you directly with verified IPL betting ID agents and exchanges. 100% Trust • 24/7 WhatsApp Support • Fast Withdrawals.',
            'hero_slide_1_btn1_text' => 'Get Your IPL Betting ID Now',
            'hero_slide_1_btn2_text' => 'How It Works',

            // ---------------- Intro ----------------
            'intro_title'    => 'Radhey Book - India\'s Leading <span class="text-gold">Online Betting ID</span> Provider',
            'intro_p1'       => 'Welcome to Radhey Book, India\'s leading online betting platform, where we help people across India to create their IPL betting ID. Without any stressful and hassle process making it smooth for the users to get their IDs. Our main focus is on providing a premium and reliable betting experience to the users who want to place bets on cricket matches, casino, and other sports games. We are known for our secure and trustworthy systems, the platforms we collaborate with are known to be reliable and highly secure, so users can watch live matches and engage in online betting in cricket without any problems or inconveniences.',
            'intro_p2'       => 'No complicated applications and third parties are needed. Users can get a simple, verified online cricket ID via the online betting ID number that gives direct access to major live cricket tournaments, games, and other sports. Deposits and withdrawals are easy with convenient payment options like UPI, Paytm, and Google Pay. If you face any issues while using your cricket ID, our dedicated support team is available 24/7 to assist you promptly.',
            'intro_btn_text' => 'Get Your IPL Betting ID Today',

            // ---------------- Why 2026 ----------------
            'why_2026_title'           => 'Why <span class="text-gold">2026</span> is the Best Year to Start Betting with Online Cricket ID',
            'why_2026_subtitle'        => 'Get your IPL Betting ID & T20 Betting ID now and get ready to bet on IPL 2026 and the T20 World Cup this betting season. One ID gives you seamless access to all major matches for ODIs, Tests, and T20s on a single platform.',
            'why_2026_signup_heading'  => 'Why sign up now?',
            'why_2026_li_1'            => 'Unlimited platform access with one ID',
            'why_2026_li_2'            => 'Real-time odds updated every ball',
            'why_2026_li_3'            => 'Live match streaming synced with betting',
            'why_2026_li_4'            => 'Instant UPI deposits in seconds',
            'why_2026_li_5'            => 'Built-in responsible gaming controls',
            'why_2026_li_6'            => 'AI-powered insights for smarter decisions',
            'why_2026_footer'          => 'No hassle, no time-wasting — all you need is fast access to all the big games. Get your Cricket ID now and stay up to date.',

            // ---------------- What is IPL Betting ID ----------------
            'what_is_title'    => 'What is <span class="text-gold">IPL Betting ID</span>?',
            'what_is_p1'       => 'IPL Betting ID acts as your key to betting platforms, which provides you with one dashboard to see matches, odds, and bets, as well as manage finances.',
            'what_is_p2'       => 'It works across IPL, T20s, international matches and Test cricket and keeps your data safe. A reliable online cricket betting ID simplifies the whole process and makes it well-structured and secure.',
            'what_is_p3'       => 'Whether you are a cricket enthusiast looking for a trusted and reliable online cricket ID or someone who enjoys casino games, getting your ID is the very first step to secure betting in India.',
            'what_is_btn_text' => 'Get Your IPL Betting ID Today',

            // ---------------- Why You Need an IPL Betting ID ----------------
            'why_need_title'    => 'Why Do You Need an <span class="text-gold">IPL Betting ID</span>?',
            'why_need_subtitle' => 'To bet on IPL and any other cricket matches, you need a secure and verified IPL betting ID or online cricket ID — without it, live markets stay locked. Getting your ID with Radhey Book opens doors to top exchanges, sports, games, and platforms safely.',
            'why_need_1_title'  => 'Quick ID Activation',
            'why_need_1_text'   => 'Activate your ID in under 2 minutes and play immediately.',
            'why_need_2_title'  => 'Multiple Cricket Tournaments',
            'why_need_2_text'   => 'Enjoy betting on IPL, T20 World Cup, ODI and Test matches.',
            'why_need_3_title'  => 'Live Matches & Odds',
            'why_need_3_text'   => 'Keep up with real-time matches and live betting odds.',
            'why_need_4_title'  => 'Secure & Safe Platform',
            'why_need_4_text'   => 'Your data is protected with advanced end-to-end encryption.',
            'why_need_5_title'  => 'Instant Withdrawals',
            'why_need_5_text'   => 'Withdraw your winnings within just 5 minutes — no delays.',
            'why_need_6_title'  => 'User-Friendly Dashboard',
            'why_need_6_text'   => 'Experience a simple, clean, and easy-to-use interface.',
            'why_need_btn_text' => 'Get Your IPL Betting ID Now',

            // ---------------- Trusted Provider CTA ----------------
            'trust_cta_title'    => 'Are You Looking For A Secure and Trusted <span class="text-gold">IPL Betting ID Provider</span>?',
            'trust_cta_p1'       => 'Radhey Book is India\'s most trusted IPL Betting ID Provider and delivers 100% secure and verified online cricket IDs via quick WhatsApp setup, secure access, and fast UPI withdrawals. You can bet on IPL 2026, the T20 World Cup, and international matches with ease and comfort.',
            'trust_cta_p2'       => 'With over 200,000 active users, authentic accounts, immediate activation with no delays, and verified user reviews, we are a trustworthy option when it comes to an online betting ID.',
            'trust_cta_btn_text' => 'Get Your Trusted IPL Betting ID Now',

            // ---------------- What Sets Radhey Book Apart ----------------
            'why_choose_title'    => 'What Sets <span class="text-gold">Radhey Book</span> Apart?',
            'why_choose_subtitle' => 'Genuine Features with 24/7 Support — trusted by millions of players across India',
            'why_1_title' => 'Instant ID Activation',
            'why_1_text'  => 'Get your IPL betting ID activated within minutes via WhatsApp. No lengthy registration process.',
            'why_2_title' => '100% Safe & Secure',
            'why_2_text'  => 'Your data and transactions are fully encrypted and protected. We prioritize your privacy.',
            'why_3_title' => '24/7 WhatsApp Support',
            'why_3_text'  => 'Our dedicated support team is available round the clock via the IPL Betting ID Number to assist you with any queries.',
            'why_4_title' => '7 Years Experience',
            'why_4_text'  => 'With 7+ years in the industry, we are one of the most experienced betting ID providers in India.',
            'why_5_title' => 'Fast Withdrawals',
            'why_5_text'  => 'Withdraw your winnings within 5 minutes. We support UPI, GPay, Paytm, PhonePe & Bank Transfer.',
            'why_6_title' => '2 Million+ Players',
            'why_6_text'  => 'Join the community of over 2 million active players who trust Radhey Book.',
            'why_choose_btn_text' => 'Get Your IPL Betting ID Now & Start Betting',

            // ---------------- How to Create an IPL Betting ID ----------------
            'how_it_works_title'    => 'How to Create an <span class="text-gold">IPL Betting ID</span>?',
            'how_it_works_subtitle' => 'Users can create their IPL Betting ID within just a few minutes.',
            'how_step_1_title' => 'Click the WhatsApp Link',
            'how_step_1_text'  => 'Start by clicking the WhatsApp link on Radhey Book to connect directly with the support team.',
            'how_step_2_title' => 'Send a Message',
            'how_step_2_text'  => 'Text "Hi, I want a Radhey Book ID" so the team can process your request quickly.',
            'how_step_3_title' => 'Share Details & Deposit',
            'how_step_3_text'  => 'Enter your basic information and make the initial deposit to open an account.',
            'how_step_4_title' => 'Get Your ID',
            'how_step_4_text'  => 'After verification, your Instant Cricket ID will be created and shared with you.',
            'how_step_5_title' => 'Log In & Start',
            'how_step_5_text'  => 'Log in with your ID and immediately start betting on live matches.',
            'how_step_6_title' => 'Withdraw Winnings',
            'how_step_6_text'  => 'Withdraw your winnings instantly within 5 minutes via UPI, GPay, Paytm, PhonePe or Bank Transfer.',
            'how_it_works_btn_text' => 'Get Your IPL Betting ID Today',

            // ---------------- How Does IPL Betting ID Work ----------------
            'how_id_works_title'    => 'How Does <span class="text-gold">IPL Betting ID</span> Work?',
            'how_id_works_subtitle' => 'Are you new to betting? Here are the steps and full process for your IPL Betting ID — from start to end, deposits to withdrawals.',
            'how_id_1_title' => 'Choose from a Trusted Platform',
            'how_id_1_text'  => 'After you contact the IPL Betting ID Provider on WhatsApp, you will be issued multiple exchange ID options via Radhey Book — Sky Exchange, Lords Exchange, Lotus Exchange, Fairplay etc. Choose one from them.',
            'how_id_2_title' => 'Get Your Login Credentials',
            'how_id_2_text'  => 'After you select your desired platform, you will receive an Online Cricket ID link. Use it to enter the login ID and password provided after your deposit.',
            'how_id_3_title' => 'Deposit Funds into Your Account',
            'how_id_3_text'  => 'You must add funds to your betting account before placing a bet. You can pay with Indian payment options such as Paytm, PhonePe or bank transfer.',
            'how_id_4_title' => 'Choose a Cricket Match',
            'how_id_4_text'  => 'Your Cricket ID dashboard displays various match and tournament options. The "Cricket" option lets you access international tournaments like IPL, T20, Ranji, CPL, DPL and more.',
            'how_id_5_title' => 'Place Your Bet',
            'how_id_5_text'  => 'Select a match (e.g. ENG vs AUS), then choose your bet type — match winner, toss winner, or place a bet on the outcome using Lay and Back options.',
            'how_id_6_title' => 'Track Your Bet',
            'how_id_6_text'  => 'Monitor your bets and winnings live from your dashboard. Withdraw winnings instantly to your preferred Indian payment method.',
            'how_id_works_btn_text' => 'Get Your IPL Betting ID Today',

            // ---------------- Platforms ----------------
            'platforms_title'    => 'Top Betting Platforms — Safe Access to India\'s <span class="text-gold">Best Exchanges</span>',
            'platforms_subtitle' => 'Radhey Book offers instant, secure, and reliable access to India\'s top betting platforms. Each platform is verified, with quick UPI deposits, competitive odds, and 24/7 assistance for Indian users.',
            'platform_1_title' => 'Lords Exchange',
            'platform_1_text'  => 'One of India\'s most popular and established exchanges. High betting limits, quick withdrawals within 5 minutes, and 24/7 support via Lords Exchange support number.',
            'platform_1_badge' => 'Popular',
            'platform_2_title' => 'Lotus Exchange',
            'platform_2_text'  => 'Fastest growing exchange known for speed, trust and reliability. Smooth mobile betting, fast ID activation and 24/7 assistance via Lotus Exchange contact number.',
            'platform_2_badge' => 'Trusted',
            'platform_3_title' => 'Fairplay',
            'platform_3_text'  => 'Global platform with a strong Indian user base. Best odds on short-format matches like IPL, BBL, CPL with fast real-time updates and in-play cash-out options.',
            'platform_3_badge' => 'Fair',
            'platform_4_title' => 'Sky Exchange',
            'platform_4_text'  => 'Well-established and highly trusted platform in India. Strong cricket markets including IPL and international matches, fast transactions and 24/7 support.',
            'platform_4_badge' => 'Top Rated',

            // ---------------- Bonuses ----------------
            'bonuses_title'    => 'Types of Bonuses <span class="text-gold">Radhey Book</span> Offers',
            'bonuses_subtitle' => 'Boost your betting balance with our variety of player-friendly bonuses',
            'bonus_type_1_title' => 'Welcome Bonus',
            'bonus_type_1_text'  => 'Receive an additional bonus on your initial deposit (new users only). Excellent way to begin betting.',
            'bonus_type_2_title' => 'Refill / Reload Bonus',
            'bonus_type_2_text'  => 'Get a small percentage bonus each time you top up your account — perfect for those who bet regularly.',
            'bonus_type_3_title' => 'Referral Bonus',
            'bonus_type_3_text'  => 'Get rewarded by referring someone who joins and deposits with your referral ID.',
            'bonus_type_4_title' => 'Losses Cashback (Limited)',
            'bonus_type_4_text'  => 'Cashback offered to selected users in case of huge losses — to help you recover responsibly.',
            'bonus_type_5_title' => 'Festive & Tournament Offers',
            'bonus_type_5_text'  => 'Special offers during IPL, World Cup, and major cricketing tournaments.',
            'bonuses_btn_text'   => 'Claim Your Bonus Today',

            // ---------------- Customer Care / Contact Support ----------------
            'care_title' => 'How to Contact Radhey Book Support',
            'care_text'  => 'Need help with your account or your Online Betting ID? Our 24/7 support team is reachable via WhatsApp, call support, or live chat for quick assistance with registration, deposits and general queries. Get step-by-step help via the IPL Betting ID number for a smooth, secure, hassle-free betting experience.',
            'care_support_btn_text' => 'Contact Radhey Book Support Now',

            // ---------------- FAQ ----------------
            'faq_title'    => 'Most Asked <span class="text-gold">Questions</span> (FAQs)',
            'faq_subtitle' => 'Got questions? We\'ve got answers.',
            'faq_1_q' => 'How to get Online Cricket ID via Radhey Book?',
            'faq_1_a' => 'To get an Online Cricket ID, simply message us on WhatsApp "Hi, I want to get an Online Cricket Betting ID", or click any button on the website. Our team will respond within 5 minutes.',
            'faq_2_q' => 'What is an Online Cricket ID?',
            'faq_2_a' => 'An Online Cricket ID is a unique login credential that allows you to bet on cricket, football, casino, and other games through any betting exchange platform partnered with Radhey Book. We provide this secure and verified Online Cricket ID via WhatsApp.',
            'faq_3_q' => 'What should I do if I forgot my Radhey Book ID or password?',
            'faq_3_a' => 'No issues if you forgot your Radhey Book ID or password. Just contact us via WhatsApp — our support team is available 24/7 to help you recover your Online Betting ID instantly without any hassle.',
            'faq_4_q' => 'What is Radhey Book\'s Online Betting ID WhatsApp number?',
            'faq_4_a' => 'To contact the Radhey Book support team, reach out via the Online Betting ID WhatsApp Number. You can get the number by clicking on any button on the website.',
            'faq_5_q' => 'What is the minimum deposit to start betting?',
            'faq_5_a' => 'You can start betting with as little as ₹300, and you can access bonuses and start placing bets instantly.',
            'faq_6_q' => 'Is betting with Radhey Book legal in India?',
            'faq_6_a' => 'Radhey Book operates as an intermediary ID provider. While betting laws vary state by state, we encourage all users to check their local regulations before playing.',
            'faq_7_q' => 'Which is the Best Online Cricket ID Provider?',
            'faq_7_a' => 'You\'re in the right place. We provide fully verified cricket betting IDs with instant activation via WhatsApp, seamless UPI withdrawals, and strong security. From IPL 2026 and the T20 World Cup to live international matches, your online cricket ID performs smoothly every time. Trusted by more than 2 lakh players across India.',
            'faq_8_q' => 'What exchange platforms do you support?',
            'faq_8_a' => 'We provide IDs for all major exchange platforms including Lords Exchange, Lotus Exchange, Sky Exchange, and Fairplay.',
        ];

        $merged = array_merge($current, $content);

        DB::table('pages')
            ->where('slug', 'home')
            ->update([
                'meta_title'       => "Radhey Book - Get Your Online Cricket ID - India's No.1 Trusted IPL Betting ID Provider",
                'meta_description' => 'Get your verified and secured online cricket ID instantly with Radhey Book today. Start betting on cricket, casino and other games, with 24/7 customer support, live odds, betting insights, latest updates, and fast deposits and withdrawals.',
                'meta_keywords'    => 'online cricket ID, IPL betting ID, online betting ID, cricket betting ID, radhey book, betting ID provider india, T20 betting ID',
                'sections'         => json_encode($merged),
                'updated_at'       => now(),
            ]);
    }

    public function down(): void
    {
        // No-op. This is a content migration; reverting would mean restoring stale content
        // that the user explicitly replaced. If needed, restore from DB backup.
    }
};
