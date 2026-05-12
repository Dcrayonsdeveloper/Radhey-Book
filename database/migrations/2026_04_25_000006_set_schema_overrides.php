<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // Per-page WebPage + Service schema text, as supplied by the user.
        // These flow through SchemaBuilder via the schema_* section keys.
        $overrides = [
            'cricket-betting-id' => [
                'schema_webpage_name'        => 'Cricket Betting ID - Radhey Book',
                'schema_webpage_description' => 'Get your Cricket Betting ID with Radhey Book and enjoy secure access to online cricket betting markets including IPL, T20, ODI, live betting, casino games, and more. Experience fast withdrawals, 24/7 support, and trusted betting services in India.',
                'schema_service_name'        => 'Cricket Betting ID Service',
                'schema_service_description' => 'Radhey Book provides instant Cricket Betting IDs to access live cricket betting markets, including IPL, international matches, and online casino games with secure transactions and quick account activation.',
            ],
            'online-betting-id' => [
                'schema_webpage_name'        => 'Online Betting ID - Radhey Book',
                'schema_webpage_description' => 'Get your Online Betting ID with Radhey Book and enjoy secure access to online betting markets including cricket, IPL, casino, tennis, football and more. Experience fast withdrawals, 24/7 WhatsApp support, and trusted betting services in India.',
                'schema_service_name'        => 'Online Betting ID Service',
                'schema_service_description' => 'Radhey Book provides instant Online Betting IDs that allow users to access live betting markets across cricket, casino, tennis, football and all major exchange platforms with secure transactions and 24/7 support.',
            ],
            'ipl-betting-id' => [
                'schema_webpage_name'        => 'IPL Betting ID - Radhey Book',
                'schema_webpage_description' => 'Get your IPL Betting ID with Radhey Book and enjoy access to live IPL betting markets, cricket wagering platforms, live casino games, and more. Experience secure account access, fast activation, and 24/7 customer support for seamless betting.',
                'schema_service_name'        => 'IPL Betting ID',
                'schema_service_description' => 'Radhey Book provides IPL Betting IDs that allow users to participate in Indian Premier League betting markets, live match wagering, and online casino gaming with secure and fast account setup.',
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
        $slugs = ['cricket-betting-id', 'online-betting-id', 'ipl-betting-id'];
        foreach ($slugs as $slug) {
            $row = DB::table('pages')->where('slug', $slug)->first();
            if (!$row) {
                continue;
            }
            $current = json_decode($row->sections ?? '{}', true) ?: [];
            foreach (['schema_webpage_name', 'schema_webpage_description', 'schema_service_name', 'schema_service_description'] as $key) {
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
