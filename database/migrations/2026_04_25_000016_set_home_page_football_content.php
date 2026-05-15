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

        $content = [
            // ---------------- Hero Slide 1 (pivoted to football) ----------------
            'hero_slide_1_badge'     => "India's #1 Trusted Platform",
            'hero_slide_1_title'     => 'Get Trusted <span class="text-gold">FIFA World Cup</span> Betting ID with Instant Withdrawal',
            'hero_slide_1_subtitle'  => 'Radhey Book connects you directly with verified Football Betting ID providers and exchanges. 100% Trusted • Instant Activation • Fast Withdrawal • 24/7 WhatsApp Support.',
            'hero_slide_1_btn1_text' => 'Get Your Football Betting ID Now',
            'hero_slide_1_btn2_text' => 'How It Works',

            // ---------------- Intro ----------------
            'intro_title'    => 'India\'s Trusted <span class="text-gold">Online Football Betting ID</span> Provider',
            'intro_p1'       => 'Welcome to Radhey Book, India\'s leading online betting platform, where we help people across India to create their Online Football Betting ID — without any stressful or hassle process, making it smooth for users to get their IDs. Our main focus is on providing a premium and reliable betting experience for users who want to place bets on various football tournaments. We are known for our secure and trustworthy systems; the platforms we collaborate with are reliable and highly secure, so users can watch live matches and engage in online betting without any problems or inconveniences.',
            'intro_p2'       => 'No complicated applications and third parties are needed. Users can get a simple, verified football exchange ID via the football betting WhatsApp number that gives direct access to major live football, cricket, and other tournaments. Deposits and withdrawals are easy with convenient payment options like UPI, Paytm, and Google Pay. If you face any issues while using your Football Betting ID, our dedicated support team is available 24/7 to assist you promptly.',
            'intro_btn_text' => 'Get Your Football Betting ID Today',

            // ---------------- Why 2026 ----------------
            'why_2026_title'           => 'Why <span class="text-gold">2026</span> is the Best Year to Start FIFA World Cup Betting',
            'why_2026_subtitle'        => 'The football season in 2026 will be a huge year for football supporters and bookmakers around the globe. With tournaments like FIFA, UEFA, international leagues, and football exchange betting heating up, it is the ideal time to obtain your Football Betting ID and savor uninterrupted live football betting markets.',
            'why_2026_signup_heading'  => 'Why sign up now?',
            'why_2026_li_1'            => 'Unlimited platform access with one ID',
            'why_2026_li_2'            => 'Real-time football odds updated every minute',
            'why_2026_li_3'            => 'Live match streaming synced with betting',
            'why_2026_li_4'            => 'Instant UPI deposits in seconds',
            'why_2026_li_5'            => 'Built-in responsible gaming controls',
            'why_2026_li_6'            => 'AI-powered insights for smarter decisions',
            'why_2026_footer'          => 'No hassle, no time-wasting — all you need is fast access to all the big games. Get your Online Football Betting ID now and stay up to date.',

            // ---------------- What is a Football Betting ID? ----------------
            'what_is_title'    => 'What is a <span class="text-gold">Football Betting ID</span>?',
            'what_is_p1'       => 'A Football Betting ID is a safe login credential that provides users with access to football exchange platforms and lets you wager on football matches, FIFA tournaments, and live football markets.',
            'what_is_p2'       => 'A secure online Football Betting ID streamlines football betting and offers a safe betting environment for players to enjoy football betting globally.',
            'what_is_p3'       => 'Whether you are looking to engage in FIFA live betting, UEFA matches, or even domestic football leagues, a trusted football exchange ID is a crucial first step toward a secure football betting experience.',
            'what_is_btn_text' => 'Get Your Online Football Betting ID Today',

            // ---------------- Why You Need a Football Exchange ID (6 features) ----------------
            'why_need_title'    => 'Why Do You Need a <span class="text-gold">Football Exchange ID</span>?',
            'why_need_subtitle' => 'Players must have a trusted and legitimate football exchange ID to enter live football betting markets and FIFA World Cup betting platforms. Football betting markets are only accessible when the ID is active.',
            'why_need_1_title'  => 'Instant Football Betting Access',
            'why_need_1_text'   => 'Activate your football betting ID within minutes and start betting immediately.',
            'why_need_2_title'  => 'Major Football Leagues',
            'why_need_2_text'   => 'Access betting markets for FIFA World Cup, UEFA Champions League, EPL, Bundesliga and more.',
            'why_need_3_title'  => 'Live Football Odds',
            'why_need_3_text'   => 'Keep up to date on football betting odds and place your bets in real time.',
            'why_need_4_title'  => 'Safe & Secure Transactions',
            'why_need_4_text'   => 'Advanced security systems protect your data and transactions end-to-end.',
            'why_need_5_title'  => 'Instant Withdrawal Betting ID',
            'why_need_5_text'   => 'Make rapid withdrawals with reliable Indian payment options.',
            'why_need_6_title'  => 'Easy-to-Use Betting Dashboard',
            'why_need_6_text'   => 'A user-friendly interface that ensures a seamless football wagering experience.',
            'why_need_btn_text' => 'Get Your Football Betting ID Now',

            // ---------------- Trusted Provider CTA ----------------
            'trust_cta_title'    => 'Looking for a <span class="text-gold">Trusted Football Betting ID Provider</span>?',
            'trust_cta_p1'       => 'One of the crucial factors in safe football betting is finding a secure and reliable football betting ID provider. We offer trustworthy and authentic football exchange IDs that are activated immediately and have safe football betting access — FIFA World Cup betting, live football betting, instant withdrawals, safe transactions, secure login systems and 24/7 customer support.',
            'trust_cta_p2'       => 'Fast activation, secure systems and reliable customer assistance are some of the factors that make our football exchange services trustworthy and preferred by thousands of football bettors across India.',
            'trust_cta_btn_text' => 'Get Your Trusted Football Betting ID Now',

            // ---------------- What Sets Radhey Book Apart (6 features) ----------------
            'why_choose_title'    => 'What Sets <span class="text-gold">Radhey Book</span> Apart?',
            'why_choose_subtitle' => 'Genuine Features with 24/7 Support — trusted by millions of football fans across India',
            'why_1_title' => 'Instant Football Betting ID Activation',
            'why_1_text'  => 'Receive your football exchange ID within minutes through WhatsApp support.',
            'why_2_title' => '100% Secure & Trusted',
            'why_2_text'  => 'We prioritize user safety and ensure all financial transactions remain protected.',
            'why_3_title' => '24/7 WhatsApp Support',
            'why_3_text'  => 'Our dedicated support team is available round the clock via Live Football Betting ID number to help you anytime.',
            'why_4_title' => 'Fast Withdrawal System',
            'why_4_text'  => 'Withdraw your winnings within 5 minutes. We support UPI, GPay, Paytm, PhonePe and Bank Transfer.',
            'why_5_title' => 'Live Football Betting Experience',
            'why_5_text'  => 'Enjoy uninterrupted FIFA live betting and football exchange access.',
            'why_6_title' => '2 Million+ Players',
            'why_6_text'  => 'Join the community of over 2 million active players who trust Radhey Book.',
            'why_choose_btn_text' => 'Get Your Live Football Betting ID Now & Start Betting',

            // ---------------- How to Create a Football Betting ID (5 steps) ----------------
            'how_it_works_title'    => 'How to Create a <span class="text-gold">Football Betting ID</span>?',
            'how_it_works_subtitle' => 'Creating your Football Betting ID is simple and fast — just a few minutes from start to finish.',
            'how_step_1_title' => 'Contact Support on WhatsApp',
            'how_step_1_text'  => 'Start by clicking the WhatsApp link on Radhey Book to connect directly with the support team.',
            'how_step_2_title' => 'Send a Message',
            'how_step_2_text'  => 'Text "Hi, I want a Radhey Book ID" so the team can process your request quickly.',
            'how_step_3_title' => 'Complete Basic Verification',
            'how_step_3_text'  => 'Enter your basic information and make the initial deposit to open an account.',
            'how_step_4_title' => 'Receive Your Football Exchange ID',
            'how_step_4_text'  => 'After verification, your Instant Football Betting ID will be created and shared with you.',
            'how_step_5_title' => 'Start FIFA Live Betting',
            'how_step_5_text'  => 'Log in and begin betting on live football matches immediately.',
            'how_step_6_title' => 'Withdraw Winnings',
            'how_step_6_text'  => 'Withdraw your winnings instantly within 5 minutes via UPI, GPay, Paytm, PhonePe or Bank Transfer.',
            'how_it_works_btn_text' => 'Get Your Football Betting ID Today',

            // ---------------- How Does FIFA Live Betting Work? (6 process cards) ----------------
            'how_id_works_title'    => 'How Does <span class="text-gold">FIFA Live Betting</span> Work?',
            'how_id_works_subtitle' => 'New to football betting? Here is the full process for your Football Betting ID — clearly explained step-by-step from start to end, deposits to withdrawals.',
            'how_id_1_title' => 'Choose a Football Exchange Platform',
            'how_id_1_text'  => 'After you contact the team on WhatsApp, you will be issued multiple exchange ID options via Radhey Book — Sky Exchange, Lords Exchange, Lotus Exchange, Fairplay etc. Choose one from them.',
            'how_id_2_title' => 'Get Your Login Credentials',
            'how_id_2_text'  => 'After you select your desired platform, you will receive an Online Football ID link. Use it to enter the login ID and password provided after your deposit.',
            'how_id_3_title' => 'Deposit Funds',
            'how_id_3_text'  => 'You must add funds to your betting account before placing a bet. You can pay with Indian payment options such as Paytm, PhonePe or bank transfer.',
            'how_id_4_title' => 'Select a Football Match',
            'how_id_4_text'  => 'Your Football ID dashboard displays various match and tournament options. The "Football" option lets you access international tournaments including World Cup matches, EPL, La Liga and other international football matches.',
            'how_id_5_title' => 'Place Your Bet',
            'how_id_5_text'  => 'Select a match (e.g. Real Madrid CF vs Manchester City FC), then choose your bet type — match winner, total goals, or place a bet on the outcome using Lay and Back options.',
            'how_id_6_title' => 'Track Your Bets Live',
            'how_id_6_text'  => 'Monitor your bets and winnings live from your dashboard. Withdraw winnings instantly to your preferred Indian payment method.',
            'how_id_works_btn_text' => 'Get Your Football Betting ID Today',

            // ---------------- Platforms (4 — football-themed descriptions) ----------------
            'platforms_title'    => 'Top Betting Platforms — Safe Access to India\'s <span class="text-gold">Best Exchanges</span>',
            'platforms_subtitle' => 'Radhey Book offers instant, secure, and reliable access to India\'s top betting platforms. Each platform is verified, with quick UPI deposits, competitive odds, and 24/7 assistance for Indian users.',
            'platform_1_title' => 'Lords Exchange',
            'platform_1_text'  => 'One of India\'s most popular and established exchanges. High football betting limits, fast withdrawals, live football odds, FIFA World Cup betting support and 24/7 support via Lords Exchange support number.',
            'platform_1_badge' => 'Popular',
            'platform_2_title' => 'Lotus Exchange',
            'platform_2_text'  => 'Fastest growing exchange known for speed, trust and reliability. Instant football betting ID activation, smooth mobile experience, fast UPI withdrawals and 24/7 assistance via Lotus Exchange contact number.',
            'platform_2_badge' => 'Trusted',
            'platform_3_title' => 'Sky Exchange',
            'platform_3_text'  => 'Well-established and highly trusted platform in India. Strong football market coverage, live football betting access, stable interface, fast transactions and 24/7 support.',
            'platform_3_badge' => 'Top Rated',
            'platform_4_title' => 'Fairplay Exchange',
            'platform_4_text'  => 'Global platform with a strong Indian user base. Real-time football updates, fast betting interface, in-play options, competitive odds and round-the-clock support.',
            'platform_4_badge' => 'Fair',

            // ---------------- Bonuses (5) ----------------
            'bonuses_title'    => 'Types of Bonuses <span class="text-gold">Available</span>',
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
            'bonus_type_5_text'  => 'Special offers during IPL, FIFA, World Cup and other major sporting tournaments.',
            'bonuses_btn_text'   => 'Claim Your Bonus Today',

            // ---------------- Customer Care / Contact Support ----------------
            'care_title' => 'How to Contact Radhey Book Support',
            'care_text'  => 'Need help with your account or your Online Football Betting ID? Our 24/7 support team is reachable via WhatsApp, call support, or live chat for quick assistance with registration, deposits and general queries. Get step-by-step help via the Football Betting WhatsApp number for a smooth, secure, hassle-free betting experience.',
            'care_support_btn_text' => 'Contact Radhey Book Support Now',

            // ---------------- FAQ (10 questions) ----------------
            'faq_title'    => 'Frequently Asked <span class="text-gold">Questions</span> (FAQs)',
            'faq_subtitle' => 'Got questions? We\'ve got answers.',
            'faq_1_q' => 'How can I get a Football Betting ID?',
            'faq_1_a' => 'To get a Football Betting ID, simply message us on WhatsApp "Hi, I want to get an Online Betting ID" or click any button on the website. Our team will respond within 5 minutes.',
            'faq_2_q' => 'What is an Online Football Betting ID?',
            'faq_2_a' => 'It is a safe login credential that customers use to access football betting exchanges and place wagers on football games.',
            'faq_3_q' => 'Can I use one Football Exchange ID for multiple tournaments?',
            'faq_3_a' => 'Yes, all football betting IDs are valid for betting on the FIFA World Cup, UEFA games, EPL, and other major football events.',
            'faq_4_q' => 'What is the minimum deposit amount?',
            'faq_4_a' => 'Football betting can begin with a minimum of ₹300 for users.',
            'faq_5_q' => 'Are withdrawals instant?',
            'faq_5_a' => 'Yes, the withdrawal process is fast and smooth for UPI, Google Pay, Paytm, PhonePe and bank transfer.',
            'faq_6_q' => 'Is my Football Betting ID secure?',
            'faq_6_a' => 'Yes, all football betting IDs are protected with high-level security measures, SSL encryption and secure payment gateways.',
            'faq_7_q' => 'Which is the Best Football Betting ID Provider?',
            'faq_7_a' => 'We offer trusted and fast football betting IDs, secure access to football exchanges, instant support for live betting on FIFA games, and fast withdrawal systems trusted by thousands of football fans in India.',
            'faq_8_q' => 'Is FIFA World Cup Betting Available?',
            'faq_8_a' => 'Yes, you can place wagers on the FIFA World Cup as well as on all other major football events worldwide.',
            'faq_9_q' => 'Can Beginners Use a Football Betting ID?',
            'faq_9_a' => 'Yes, it is easy to use and beginner-friendly.',
            'faq_10_q' => 'Do you offer Live Football Betting?',
            'faq_10_a' => 'Yes, users can place bets on live football betting markets during games.',
        ];

        $merged = array_merge($current, $content);

        DB::table('pages')
            ->where('slug', 'home')
            ->update([
                'meta_title'       => 'Football Betting ID – Get Trusted FIFA World Cup Betting ID with Instant Withdrawal',
                'meta_description' => 'Get your verified and secured football betting ID instantly with Radhey Book today. Start betting on football, cricket, casino and other games with 24/7 customer support, live odds, fast deposits and withdrawals.',
                'meta_keywords'    => 'football betting ID, FIFA World Cup betting ID, online football betting, football exchange ID, radhey book',
                'sections'         => json_encode($merged),
                'updated_at'       => now(),
            ]);
    }

    public function down(): void
    {
        // Re-running migration 2026_04_25_000003 would restore the previous IPL/cricket
        // homepage content. We leave this no-op to avoid silent content reverts.
    }
};
