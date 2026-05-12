<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $aviatorGameJson = json_encode([
            '@type'         => 'Game',
            'name'          => 'Aviator Crash Game',
            'description'   => 'Aviator is a fast-paced crash-style online betting game where players cash out before a multiplier crashes. Radhey Book provides access through secure betting IDs for real-time gameplay and wagering.',
            'gameItemType'  => 'Online Casino Game',
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

        $overrides = [
            // /football-betting-id is served by football.blade.php — different filename, so
            // SchemaBuilder can't auto-read its FAQ defaults from a slug-matched blade.
            // We persist FAQs directly into DB sections (and they'll also override the
            // existing blade defaults when the page renders).
            'football-betting-id' => [
                'schema_webpage_name'        => 'Football Betting ID - Radhey Book',
                'schema_webpage_description' => 'Get your Football Betting ID with Radhey Book and access live football betting markets, match odds, in-play wagering, leagues, tournaments, and online sports betting platforms with secure login, fast activation, and 24/7 support.',
                'schema_service_name'        => 'Football Betting ID Service',
                'schema_service_description' => 'Radhey Book provides Football Betting IDs that allow users to participate in live football betting, international leagues, match predictions, and online wagering platforms with secure access and quick setup.',
                'faq_1_q' => 'How do I get a Football Betting ID?',
                'faq_1_a' => 'Click the WhatsApp button on this page and send us a message. Our team will create your Football Betting ID within minutes. Deposit funds, and you are ready to start betting on football matches from leagues around the world.',
                'faq_2_q' => 'What football leagues can I bet on?',
                'faq_2_a' => 'You can bet on the English Premier League, Spanish La Liga, Italian Serie A, German Bundesliga, French Ligue 1, UEFA Champions League, UEFA Europa League, FIFA World Cup, and over 100 other domestic and international football competitions.',
                'faq_3_q' => 'Can I bet on football matches live?',
                'faq_3_a' => 'Yes, we offer comprehensive live in-play betting on football. You can bet on match result, next goal, total goals, corners, cards, and many other markets while the match is in progress. Odds are updated in real time based on match events.',
                'faq_4_q' => 'What is Over/Under 2.5 goals?',
                'faq_4_a' => 'Over 2.5 goals means you are betting that there will be 3 or more goals in the match. Under 2.5 goals means you are betting there will be 0, 1 or 2 goals. It is one of the most popular football betting markets because you do not need to pick a winner.',
                'faq_5_q' => 'What is Asian Handicap betting?',
                'faq_5_a' => 'Asian Handicap gives one team a virtual goal advantage or disadvantage to level the playing field. For example, if you bet on a team at -1.5, they need to win by 2 or more goals for your bet to win. It eliminates the draw option and often provides better odds than the standard 1X2 market.',
                'faq_6_q' => 'How quickly are football bets settled?',
                'faq_6_a' => 'Football bets are settled within minutes of the final whistle. Once a match ends, all markets are settled quickly, winnings are credited to your account, and you can withdraw immediately to your bank account with no delays or hidden charges.',
            ],
            'football-betting' => [
                'schema_webpage_name'        => 'Football Betting - Radhey Book',
                'schema_webpage_description' => 'Explore football betting with Radhey Book and access live football match odds, in-play betting markets, league tournaments, and online sports wagering platforms with secure login, fast updates, and 24/7 support.',
                'schema_service_name'        => 'Football Betting Service',
                'schema_service_description' => 'Radhey Book provides access to football betting markets including live match wagering, league odds, tournament betting, and online sports betting services with secure and fast account access.',
                'faq_1_q' => 'What is a live football betting ID?',
                'faq_1_a' => 'It is your personal betting account that lets you bet on live football matches in Premier League, La Liga, Champions League and every major tournament.',
                'faq_2_q' => 'How fast is the instant football betting ID setup?',
                'faq_2_a' => 'Your account is ready within 2 to 5 minutes after you send a WhatsApp message and complete your deposit.',
                'faq_3_q' => 'How do I get a football betting ID india account?',
                'faq_3_a' => 'Just click the WhatsApp button on this page, send your request and pay a small deposit. Your account is activated within minutes.',
                'faq_4_q' => 'How does football betting ID india login work?',
                'faq_4_a' => 'Use the username and password we send you on WhatsApp to log in on any device. Our team is online 24/7 for any login help you may need.',
                'faq_5_q' => 'Who is the best football betting ID provider india?',
                'faq_5_a' => 'Radhey Book is one of the most trusted providers in India with 7+ years of service. We offer instant activation, fast withdrawals and 24/7 WhatsApp support.',
                'faq_6_q' => 'Is my account safe with Radhey Book?',
                'faq_6_a' => 'Yes. Every account is backed by SSL encryption and secure payment gateways so your data and funds are fully protected at all times.',
            ],
            // Aviator uses a new mainEntity type — Game with gameItemType — so we
            // use the schema_mainentity_json override for the full nested object.
            'aviator' => [
                'schema_webpage_name'        => 'Aviator Game Betting ID - Radhey Book',
                'schema_webpage_description' => 'Get your Aviator Betting ID with Radhey Book and access the popular crash game Aviator, live multiplier betting, online casino gaming, and real-time wagering platforms with secure login, instant activation, and 24/7 support.',
                'schema_mainentity_json'     => $aviatorGameJson,
                'faq_1_q' => 'What is the Aviator game?',
                'faq_1_a' => 'Aviator is a crash-style game where a virtual plane takes off and a multiplier increases as it flies. You place a bet and must cash out before the plane crashes. If you cash out in time, you win your bet multiplied by the current multiplier. If the plane crashes before you cash out, you lose your bet.',
                'faq_2_q' => 'Is the Aviator game fair?',
                'faq_2_a' => "Yes, Aviator uses provably fair technology. Each round's outcome is determined by a cryptographic algorithm using server and client seeds. You can verify the fairness of every round after it ends. The results cannot be manipulated by anyone, including the game provider.",
                'faq_3_q' => 'What is the maximum multiplier in Aviator?',
                'faq_3_a' => 'There is no fixed maximum multiplier. The plane can theoretically fly to very high multipliers — rounds reaching 100x, 200x or even higher do occur, though they are rare. Most rounds crash between 1x and 10x, with occasional high-multiplier rounds providing massive payout opportunities.',
                'faq_4_q' => 'Can I play Aviator on my mobile phone?',
                'faq_4_a' => 'Absolutely. Aviator is fully optimized for mobile play. The game runs smoothly on Android and iOS devices with responsive controls, fast loading and the same features available on desktop. You can play on your phone anytime, anywhere with a stable internet connection.',
                'faq_5_q' => 'What is the minimum bet in Aviator?',
                'faq_5_a' => 'The minimum bet to play Aviator on our platform starts from just Rs 10. This makes it accessible for all players regardless of budget. You can also place two simultaneous bets per round with different amounts for a more strategic approach.',
                'faq_6_q' => 'How do I withdraw my Aviator winnings?',
                'faq_6_a' => 'Withdrawals are instant at Radhey Book. After you win in Aviator, your funds are immediately available in your account balance. You can withdraw to your bank account at any time with no processing delay, no minimum withdrawal limit, and no hidden fees.',
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
        $slugs = ['football-betting-id', 'football-betting', 'aviator'];
        $schemaKeys = [
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
