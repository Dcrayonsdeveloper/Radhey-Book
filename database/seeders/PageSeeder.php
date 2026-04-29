<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        $pages = [
            [
                'slug' => 'home',
                'title' => 'Home Page',
                'meta_title' => "Radhey Book | India's #1 Trusted Online Betting ID Provider",
                'meta_description' => "Get your online betting ID instantly from Radhey Book - India's most trusted betting ID provider. Cricket, Casino, Tennis, Football betting IDs with 24/7 WhatsApp support.",
                'meta_keywords' => 'online betting id, cricket betting id, radhey book, betting id provider india, online cricket id',
                'sections' => [
                    'hero_slide_1_badge' => "India's #1 Trusted Platform",
                    'hero_slide_1_title' => 'We Are India\'s Leading <span class="text-gold">Online Betting ID</span> Provider',
                    'hero_slide_1_subtitle' => 'Get your Cricket, Casino, Tennis & Football Betting ID in just 2 minutes. Trusted by 2 Million+ players across India.',
                    'hero_slide_2_badge' => 'IPL 2026 Season Live',
                    'hero_slide_2_title' => 'Get Your <span class="text-gold">IPL Betting ID</span> Now',
                    'hero_slide_2_subtitle' => 'Live IPL odds, session betting, fancy markets & more. Best odds guaranteed with instant withdrawals.',
                    'hero_slide_3_badge' => 'Casino & Live Games',
                    'hero_slide_3_title' => 'Play <span class="text-gold">Live Casino Games</span> Online',
                    'hero_slide_3_subtitle' => 'Teen Patti, Roulette, Blackjack, Aviator & more. Instant deposits, fast withdrawals within 5 minutes.',
                    'stats_players' => '2M+',
                    'stats_experience' => '7+',
                    'stats_support' => '24/7',
                    'stats_withdrawal' => '5 Min',
                ],
            ],
            [
                'slug' => 'about',
                'title' => 'About Us',
                'meta_title' => 'About Radhey Book | Trusted Betting ID Provider Since 2020',
                'meta_description' => "Learn about Radhey Book - India's most trusted online betting ID provider. We offer secure, instant betting IDs for cricket, casino, tennis & football.",
                'meta_keywords' => 'about radhey book, trusted betting id provider, online betting id company, betting id provider history',
                'sections' => [
                    'hero_badge' => 'Trusted Since 2017',
                    'hero_title' => 'About <span class="text-gold">Radhey Book</span>',
                    'hero_subtitle' => "India's most trusted online betting ID provider serving 2 million+ happy players.",
                ],
            ],
            [
                'slug' => 'contact',
                'title' => 'Contact Us',
                'meta_title' => 'Contact Radhey Book | 24/7 WhatsApp Support & Customer Care',
                'meta_description' => 'Contact Radhey Book for instant support. Get your betting ID via WhatsApp, phone, or email. 24/7 customer care available for all queries.',
                'meta_keywords' => 'contact radhey book, betting id whatsapp number, betting id customer care, betting id support',
                'sections' => [
                    'hero_badge' => '24/7 Support Available',
                    'hero_title' => 'Contact <span class="text-gold">Radhey Book</span>',
                    'hero_subtitle' => 'Get instant support via WhatsApp, phone, or email. Our team is available 24/7 to help you.',
                ],
            ],
            [
                'slug' => 'privacy-policy',
                'title' => 'Privacy Policy',
                'meta_title' => 'Privacy Policy | Radhey Book - Your Data is Safe With Us',
                'meta_description' => 'Read the privacy policy of Radhey Book. We ensure complete data protection and confidentiality for all our users.',
                'meta_keywords' => 'radhey book privacy policy, betting id data protection, online betting privacy, user data safety',
                'sections' => [
                    'hero_title' => 'Privacy <span class="text-gold">Policy</span>',
                    'hero_subtitle' => 'Your privacy and data security are our top priorities.',
                ],
            ],
            [
                'slug' => 'terms-and-conditions',
                'title' => 'Terms & Conditions',
                'meta_title' => 'Terms & Conditions | Radhey Book - Rules & Guidelines',
                'meta_description' => 'Read the terms and conditions for using Radhey Book services. Understand our rules, guidelines, deposit & withdrawal policies.',
                'meta_keywords' => 'radhey book terms, betting id conditions, online betting rules, betting id guidelines',
                'sections' => [
                    'hero_title' => 'Terms & <span class="text-gold">Conditions</span>',
                    'hero_subtitle' => 'Please read our terms and conditions carefully before using our services.',
                ],
            ],
            [
                'slug' => 'responsible-gaming',
                'title' => 'Responsible Gaming',
                'meta_title' => 'Responsible Gaming | Radhey Book - Play Safe & Smart',
                'meta_description' => 'Radhey Book promotes responsible gaming. Learn about safe betting practices, setting limits, and how to enjoy online betting responsibly.',
                'meta_keywords' => 'responsible gaming, safe betting, betting limits, responsible betting, gambling awareness',
                'sections' => [
                    'hero_title' => 'Responsible <span class="text-gold">Gaming</span>',
                    'hero_subtitle' => 'We promote safe and responsible betting practices for all our users.',
                ],
            ],
            [
                'slug' => 'get-betting-id',
                'title' => 'Get Betting ID',
                'meta_title' => 'Get Online Betting ID Instantly | Radhey Book - Start in 2 Minutes',
                'meta_description' => 'Get your online betting ID in just 2 minutes from Radhey Book. Instant ID creation, minimum deposit, and 24/7 WhatsApp support.',
                'meta_keywords' => 'get betting id, online betting id registration, create betting id, instant betting id, betting id online',
                'sections' => [
                    'hero_badge' => 'Instant Activation',
                    'hero_title' => 'Get Your <span class="text-gold">Betting ID</span> Now',
                    'hero_subtitle' => 'Get your online betting ID in just 2 minutes. Start betting on cricket, casino & more with instant activation.',
                ],
            ],
            [
                'slug' => 'cricket-betting-id',
                'title' => 'Cricket Betting ID',
                'meta_title' => 'Cricket Betting ID | Online Cricket ID Provider - Radhey Book',
                'meta_description' => 'Get your cricket betting ID from Radhey Book. Bet on IPL, T20 World Cup, ODI & Test matches. Best odds, live cricket betting, and instant withdrawals.',
                'meta_keywords' => 'cricket betting id, online cricket id, ipl betting id, cricket id provider, cricket betting online',
                'sections' => [
                    'hero_badge' => '#1 Cricket Betting Platform',
                    'hero_title' => 'Cricket <span class="text-gold">Betting ID</span>',
                    'hero_subtitle' => 'Bet on IPL, International, T20 & more with the best cricket odds in India.',
                ],
            ],
            [
                'slug' => 'casino',
                'title' => 'Casino',
                'meta_title' => 'Online Casino ID | Play Live Casino Games - Radhey Book',
                'meta_description' => 'Get your online casino ID from Radhey Book. Play live roulette, blackjack, teen patti, andar bahar & more.',
                'meta_keywords' => 'online casino id, live casino betting, casino id provider, teen patti id, roulette betting id',
                'sections' => [
                    'hero_badge' => 'Live Casino Games',
                    'hero_title' => 'Online <span class="text-gold">Casino ID</span>',
                    'hero_subtitle' => 'Play Teen Patti, Roulette, Blackjack & more with live dealers and instant payouts.',
                ],
            ],
            [
                'slug' => 'tennis-betting-id',
                'title' => 'Tennis Betting ID',
                'meta_title' => 'Tennis Betting ID | Online Tennis Betting - Radhey Book',
                'meta_description' => 'Get your tennis betting ID from Radhey Book. Bet on Grand Slams, ATP, WTA matches with the best odds.',
                'meta_keywords' => 'tennis betting id, online tennis betting, tennis id provider, grand slam betting, atp betting id',
                'sections' => [
                    'hero_badge' => 'Tennis Betting',
                    'hero_title' => 'Tennis <span class="text-gold">Betting ID</span>',
                    'hero_subtitle' => 'Bet on Grand Slams, ATP, WTA matches with competitive odds and live betting.',
                ],
            ],
            [
                'slug' => 'football-betting-id',
                'title' => 'Football Betting ID',
                'meta_title' => 'Football Betting ID | Online Football Betting - Radhey Book',
                'meta_description' => 'Get your football betting ID from Radhey Book. Bet on Premier League, La Liga, Champions League & more.',
                'meta_keywords' => 'football betting id, online football betting, football id provider, premier league betting',
                'sections' => [
                    'hero_badge' => 'Football Betting',
                    'hero_title' => 'Football <span class="text-gold">Betting ID</span>',
                    'hero_subtitle' => 'Bet on Premier League, La Liga, Champions League & more with best football odds.',
                ],
            ],
            [
                'slug' => 'aviator',
                'title' => 'Aviator Game',
                'meta_title' => 'Aviator Game ID | Play Aviator Online - Radhey Book',
                'meta_description' => 'Play Aviator game with Radhey Book. Crash game with high multipliers, auto cash-out & instant withdrawals.',
                'meta_keywords' => 'aviator game id, play aviator online, aviator betting id, crash game id',
                'sections' => [
                    'hero_badge' => 'Crash Game',
                    'hero_title' => 'Aviator <span class="text-gold">Game ID</span>',
                    'hero_subtitle' => 'Play the exciting Aviator crash game with high multipliers and instant payouts.',
                ],
            ],
            [
                'slug' => 'lord-exchange',
                'title' => 'Lord Exchange',
                'meta_title' => 'Lord Exchange ID | Get Lord Exchange Betting ID - Radhey Book',
                'meta_description' => 'Get your Lord Exchange ID from Radhey Book. Lord Exchange offers the best cricket and casino betting experience.',
                'meta_keywords' => 'lord exchange id, lord exchange betting id, lord exchange login, lord exchange registration',
                'sections' => [
                    'hero_badge' => 'Premium Exchange Platform',
                    'hero_title' => 'Lord <span class="text-gold">Exchange</span> ID',
                    'hero_subtitle' => 'Get your Lord Exchange betting ID with instant activation and 24/7 support.',
                ],
            ],
            [
                'slug' => 'lotus-exchange',
                'title' => 'Lotus Exchange',
                'meta_title' => 'Lotus Exchange ID | Get Lotus Exchange Betting ID - Radhey Book',
                'meta_description' => 'Get your Lotus Exchange ID from Radhey Book. Lotus Exchange provides premium betting experience.',
                'meta_keywords' => 'lotus exchange id, lotus exchange betting id, lotus exchange login',
                'sections' => [
                    'hero_badge' => 'Premium Exchange',
                    'hero_title' => 'Lotus <span class="text-gold">Exchange</span> ID',
                    'hero_subtitle' => 'Premium exchange with best odds and instant withdrawals.',
                ],
            ],
            [
                'slug' => 'fairplay-369',
                'title' => 'Fairplay 369',
                'meta_title' => 'Fairplay 369 ID | Get Fairplay Exchange Betting ID - Radhey Book',
                'meta_description' => 'Get your Fairplay 369 ID from Radhey Book. Fairplay Exchange offers secure cricket and casino betting.',
                'meta_keywords' => 'fairplay 369 id, fairplay exchange id, fairplay betting id',
                'sections' => [
                    'hero_badge' => 'Trusted Exchange',
                    'hero_title' => 'Fairplay <span class="text-gold">369</span> ID',
                    'hero_subtitle' => 'Secure cricket and casino betting with the best odds.',
                ],
            ],
            [
                'slug' => 'sky-exchange',
                'title' => 'Sky Exchange',
                'meta_title' => 'Sky Exchange ID | Get Sky Exchange Betting ID - Radhey Book',
                'meta_description' => 'Get your Sky Exchange ID from Radhey Book. Top-tier betting on cricket, football, tennis & casino.',
                'meta_keywords' => 'sky exchange id, sky exchange betting id, sky exchange login',
                'sections' => [
                    'hero_badge' => 'Top Exchange',
                    'hero_title' => 'Sky <span class="text-gold">Exchange</span> ID',
                    'hero_subtitle' => 'Top-tier betting on cricket, football, tennis & casino.',
                ],
            ],
            [
                'slug' => 'reddy-anna',
                'title' => 'Reddy Anna',
                'meta_title' => 'Reddy Anna Book Alternative | Better Betting ID - Radhey Book',
                'meta_description' => 'Looking for Reddy Anna Book alternative? Radhey Book offers better odds, faster withdrawals, and 24/7 support.',
                'meta_keywords' => 'reddy anna book, reddy anna id, reddy anna alternative, reddy anna betting id',
                'sections' => [
                    'hero_badge' => 'Better Alternative',
                    'hero_title' => 'Reddy Anna Book <span class="text-gold">Alternative</span>',
                    'hero_subtitle' => 'Looking for a better alternative? Radhey Book offers superior odds, faster withdrawals, and complete transparency.',
                ],
            ],
            [
                'slug' => 'mahadev-book',
                'title' => 'Mahadev Book',
                'meta_title' => 'Mahadev Book Alternative | Trusted Betting ID - Radhey Book',
                'meta_description' => 'Looking for Mahadev Book alternative? Radhey Book is a safer, trusted option with instant withdrawals.',
                'meta_keywords' => 'mahadev book, mahadev book id, mahadev book alternative, mahadev betting id',
                'sections' => [
                    'hero_badge' => 'Trusted Alternative',
                    'hero_title' => 'Mahadev Book <span class="text-gold">Alternative</span>',
                    'hero_subtitle' => 'Radhey Book is a safer, trusted option with instant withdrawals and better odds.',
                ],
            ],
            [
                'slug' => 'how-to-get-betting-id',
                'title' => 'How to Get Betting ID',
                'meta_title' => 'How to Get Online Betting ID | Step-by-Step Guide - Radhey Book',
                'meta_description' => 'Learn how to get your online betting ID in 3 simple steps.',
                'meta_keywords' => 'how to get betting id, betting id registration process, create betting id steps',
                'sections' => [
                    'hero_badge' => 'Step-by-Step Guide',
                    'hero_title' => 'How to Get <span class="text-gold">Betting ID</span>',
                    'hero_subtitle' => 'Get your online betting ID in just 3 simple steps. Quick & easy registration via WhatsApp.',
                ],
            ],
            [
                'slug' => 'betting-id-login',
                'title' => 'Betting ID Login',
                'meta_title' => 'Betting ID Login | Access Your Betting Account - Radhey Book',
                'meta_description' => 'Login to your Radhey Book account. Access your cricket, casino, and sports betting dashboard.',
                'meta_keywords' => 'betting id login, online betting login, cricket id login, casino id login',
                'sections' => [
                    'hero_badge' => 'Account Access',
                    'hero_title' => 'Betting ID <span class="text-gold">Login</span>',
                    'hero_subtitle' => 'Access your betting dashboard securely.',
                ],
            ],
            [
                'slug' => 'withdrawal-proof',
                'title' => 'Withdrawal Proof',
                'meta_title' => 'Withdrawal Proof | Verified Payouts - Radhey Book',
                'meta_description' => 'See real withdrawal proofs from Radhey Book users. We guarantee instant withdrawals within 5 minutes.',
                'meta_keywords' => 'betting id withdrawal proof, betting payout proof, instant withdrawal betting',
                'sections' => [
                    'hero_badge' => 'Verified Payouts',
                    'hero_title' => 'Withdrawal <span class="text-gold">Proof</span>',
                    'hero_subtitle' => '100% verified payout screenshots from real customers.',
                ],
            ],
            [
                'slug' => 'bonus-offers',
                'title' => 'Bonus Offers',
                'meta_title' => 'Bonus Offers & Promotions | Get Extra Benefits - Radhey Book',
                'meta_description' => 'Check out the latest bonus offers from Radhey Book. Welcome bonus, deposit bonus, referral bonus & more.',
                'meta_keywords' => 'betting id bonus, betting offers, welcome bonus betting, deposit bonus',
                'sections' => [
                    'hero_badge' => 'Exclusive Offers',
                    'hero_title' => 'Bonus <span class="text-gold">Offers</span>',
                    'hero_subtitle' => 'Maximize your winnings with our exclusive promotions and bonuses.',
                ],
            ],
            [
                'slug' => 'demo-id',
                'title' => 'Demo ID',
                'meta_title' => 'Demo Betting ID | Try Free Demo Account - Radhey Book',
                'meta_description' => 'Try our free demo betting ID before you start. Practice with virtual credits.',
                'meta_keywords' => 'demo betting id, free betting id, demo cricket id, practice betting account',
                'sections' => [
                    'hero_badge' => 'Free Demo',
                    'hero_title' => 'Demo <span class="text-gold">Betting ID</span>',
                    'hero_subtitle' => 'Practice cricket betting, casino games & more with virtual credits. No deposit required.',
                ],
            ],
            [
                'slug' => 'live-betting',
                'title' => 'Live Betting',
                'meta_title' => 'Live Betting | In-Play Cricket & Sports Betting - Radhey Book',
                'meta_description' => 'Experience live in-play betting with Radhey Book. Bet on live cricket, football, tennis matches.',
                'meta_keywords' => 'live betting, in play betting, live cricket betting, live sports betting',
                'sections' => [
                    'hero_badge' => 'In-Play Betting',
                    'hero_title' => 'Live <span class="text-gold">Betting</span>',
                    'hero_subtitle' => 'Bet on live cricket, football, tennis matches with real-time odds.',
                ],
            ],
            [
                'slug' => 'secure-payments',
                'title' => 'Secure Payments',
                'meta_title' => 'Secure Payments | Safe Deposit & Withdrawal - Radhey Book',
                'meta_description' => 'Radhey Book offers secure payment methods including UPI, bank transfer, Paytm, PhonePe & Google Pay.',
                'meta_keywords' => 'secure betting payments, betting id upi payment, safe deposit betting',
                'sections' => [
                    'hero_badge' => 'Safe & Secure',
                    'hero_title' => 'Secure <span class="text-gold">Payments</span>',
                    'hero_subtitle' => 'Encrypted transactions with instant processing via UPI, Paytm, PhonePe & more.',
                ],
            ],
            [
                'slug' => 'trusted-provider',
                'title' => 'Trusted Provider',
                'meta_title' => 'Trusted Betting ID Provider | Why Choose Radhey Book',
                'meta_description' => "Radhey Book is India's most trusted betting ID provider. 50,000+ happy customers, instant withdrawals.",
                'meta_keywords' => 'trusted betting id provider, reliable betting id, best betting id provider india',
                'sections' => [
                    'hero_badge' => 'Trusted & Verified',
                    'hero_title' => 'Trusted <span class="text-gold">Provider</span>',
                    'hero_subtitle' => "India's most trusted betting ID provider with 2M+ happy customers.",
                ],
            ],
        ];

        foreach ($pages as $pageData) {
            Page::updateOrCreate(
                ['slug' => $pageData['slug']],
                $pageData
            );
        }
    }
}
