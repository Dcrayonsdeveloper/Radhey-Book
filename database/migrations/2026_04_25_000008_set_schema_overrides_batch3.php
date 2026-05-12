<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $howToJson = json_encode([
            '@type'       => 'HowTo',
            'name'        => 'How to Get an IPL Betting ID',
            'description' => 'Step-by-step guidance on how to obtain an IPL Betting ID through Radhey Book to access live cricket betting markets and online sports wagering platforms.',
            'step' => [
                ['@type' => 'HowToStep', 'name' => 'Contact Provider', 'text' => 'Reach out to Radhey Book support to request an IPL Betting ID.'],
                ['@type' => 'HowToStep', 'name' => 'Provide Details',  'text' => 'Share basic information required for account setup and verification.'],
                ['@type' => 'HowToStep', 'name' => 'Receive ID',       'text' => 'Get your IPL Betting ID activated for access to betting platforms.'],
                ['@type' => 'HowToStep', 'name' => 'Start Betting',    'text' => 'Log in and start participating in IPL betting markets and live games.'],
            ],
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

        $articleJson = json_encode([
            '@type'            => 'Article',
            'headline'         => 'What is IPL Betting ID?',
            'description'      => 'An IPL Betting ID is a digital account that allows users to access online cricket betting platforms, place bets on IPL matches, view live odds, and manage betting activity securely through a single login.',
            'mainEntityOfPage' => 'https://radheybook.com/what-is-ipl-betting-id',
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

        $overrides = [
            'how-to-get-ipl-betting-id' => [
                'schema_webpage_name'        => 'How to Get IPL Betting ID - Radhey Book',
                'schema_webpage_description' => 'Learn how to get an IPL Betting ID with Radhey Book and gain access to online cricket betting platforms, live IPL match wagering, and sports betting services with fast activation and secure account setup.',
                'schema_mainentity_json'     => $howToJson,
            ],
            'what-is-ipl-betting-id' => [
                'schema_webpage_name'        => 'What is IPL Betting ID - Radhey Book',
                'schema_webpage_description' => 'Learn what an IPL Betting ID is, how it works, and how users can access online cricket betting platforms with secure login, live IPL markets, and fast account activation through Radhey Book.',
                'schema_mainentity_json'     => $articleJson,
            ],
            'cricket' => [
                'schema_webpage_name'        => 'Cricket Betting ID - Radhey Book',
                'schema_webpage_description' => 'Get your Cricket Betting ID with Radhey Book and access live cricket betting markets, including IPL, T20 matches, international games, and online sports wagering platforms with secure login, fast activation, and 24/7 support.',
                'schema_service_name'        => 'Cricket Betting ID Service',
                'schema_service_description' => 'Radhey Book provides Cricket Betting IDs that allow users to access live cricket betting markets, match odds, session betting, IPL and T20 leagues, and other online sports gaming services with secure and quick account setup.',
            ],
            // NOTE: user pasted the cricket-betting-id WebPage block here by mistake.
            // Title fixed to "Casino - Radhey Book" to match the slug; description
            // and Service mainEntity were already correctly about casino.
            'casino' => [
                'schema_webpage_name'        => 'Casino - Radhey Book',
                'schema_webpage_description' => 'Access online casino games with Radhey Book including live casino, slots, table games, Teen Patti, Andar Bahar, roulette, and more. Enjoy secure login, instant access through a single ID, fast withdrawals, and 24/7 support.',
                'schema_service_name'        => 'Online Casino Gaming Service',
                'schema_service_description' => 'Radhey Book provides access to online casino games including live dealer tables, slot games, and Indian card games through a single betting ID with secure access, smooth gameplay, and instant account management.',
            ],
            'casino-betting-id' => [
                'schema_webpage_name'        => 'Casino Betting ID - Radhey Book',
                'schema_webpage_description' => 'Get your Casino Betting ID with Radhey Book and access online casino games including live casino, roulette, blackjack, Teen Patti, Andar Bahar, slots, and more. Enjoy secure login, instant activation, and 24/7 support.',
                'schema_service_name'        => 'Casino Betting ID Service',
                'schema_service_description' => 'Radhey Book provides Casino Betting IDs that allow users to access live casino tables, card games, slot machines, and other online gambling platforms with secure access and fast account setup.',
            ],
            // NOTE: user pasted the /casino WebPage block here by mistake. Adapted
            // to be slug-correct (online-casino-id) while preserving casino theme.
            'online-casino-id' => [
                'schema_webpage_name'        => 'Online Casino ID - Radhey Book',
                'schema_webpage_description' => 'Get your Online Casino ID with Radhey Book and access live casino tables, card games, slots, Teen Patti, Andar Bahar, roulette and more. Enjoy secure login, instant activation through WhatsApp, fast withdrawals, and 24/7 support.',
                'schema_service_name'        => 'Online Casino ID Service',
                'schema_service_description' => 'Radhey Book provides Online Casino IDs that give users a single account to play live casino games, slots and Indian card games on trusted platforms with secure access and instant activation.',
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
        $slugs = ['how-to-get-ipl-betting-id', 'what-is-ipl-betting-id', 'cricket', 'casino', 'casino-betting-id', 'online-casino-id'];
        $schemaKeys = [
            'schema_webpage_name', 'schema_webpage_description',
            'schema_service_name', 'schema_service_description',
            'schema_mainentity_type', 'schema_mainentity_json',
        ];
        foreach ($slugs as $slug) {
            $row = DB::table('pages')->where('slug', $slug)->first();
            if (!$row) {
                continue;
            }
            $current = json_decode($row->sections ?? '{}', true) ?: [];
            foreach ($schemaKeys as $key) {
                unset($current[$key]);
            }
            DB::table('pages')
                ->where('slug', $slug)
                ->update([
                    'sections'   => json_encode($current),
                    'updated_at' => now(),
                ]);
        }
    }
};
