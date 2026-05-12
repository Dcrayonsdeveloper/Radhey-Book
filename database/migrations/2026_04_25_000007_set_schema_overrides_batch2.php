<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $overrides = [
            't20-betting-id' => [
                'schema_webpage_name'        => 'T20 Betting ID - Radhey Book',
                'schema_webpage_description' => 'Get your T20 Betting ID with Radhey Book and access live T20 cricket betting markets, online sports wagering platforms, live casino games, and more. Enjoy secure account access, fast ID activation, and 24/7 customer support.',
                'schema_service_name'        => 'T20 Betting ID Service',
                'schema_service_description' => 'Radhey Book provides T20 Betting IDs that allow users to participate in T20 cricket betting markets, live match wagering, and online gaming platforms with secure access and quick setup.',
            ],
            'whatsapp-betting-id' => [
                'schema_webpage_name'        => 'WhatsApp Betting ID - Radhey Book',
                'schema_webpage_description' => 'Get your WhatsApp Betting ID with Radhey Book and enjoy instant access to online betting services, cricket betting markets, casino games, and live wagering updates directly through WhatsApp. Fast activation and 24/7 support available.',
                'schema_service_name'        => 'WhatsApp Betting ID Service',
                'schema_service_description' => 'Radhey Book provides WhatsApp Betting IDs that allow users to receive betting updates, manage accounts, and access online betting services through WhatsApp with secure and quick activation.',
            ],
            'best-ipl-betting-id-providers' => [
                'schema_webpage_name'        => 'Best IPL Betting ID Providers - Radhey Book',
                'schema_webpage_description' => 'Explore the best IPL Betting ID providers with Radhey Book. Get secure and instant cricket betting IDs for IPL matches, live betting markets, T20 leagues, and online sports wagering with fast activation and 24/7 support.',
                'schema_service_name'        => 'Top IPL Betting ID Providers List',
                'schema_service_description' => 'A curated list of trusted IPL betting ID providers offering instant access to cricket betting platforms, live odds, and secure online wagering services.',
                'schema_mainentity_type'     => 'ItemList',
            ],
            't20-cricket-betting-id' => [
                'schema_webpage_name'        => 'T20 Cricket Betting ID - Radhey Book',
                'schema_webpage_description' => 'Get your T20 Cricket Betting ID with Radhey Book and access live T20 match betting markets, online cricket wagering platforms, casino games, and real-time sports betting with secure login and fast activation.',
                'schema_service_name'        => 'T20 Cricket Betting ID Service',
                'schema_service_description' => 'Radhey Book provides T20 Cricket Betting IDs that allow users to participate in live T20 cricket betting, match odds markets, and online gaming platforms with secure access and instant account setup.',
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
        $slugs = ['t20-betting-id', 'whatsapp-betting-id', 'best-ipl-betting-id-providers', 't20-cricket-betting-id'];
        $schemaKeys = [
            'schema_webpage_name', 'schema_webpage_description',
            'schema_service_name', 'schema_service_description',
            'schema_mainentity_type',
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
