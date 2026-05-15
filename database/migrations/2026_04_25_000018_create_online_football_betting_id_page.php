<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // 1) Create the page row. Blade defaults already carry the marketing copy,
        //    plus seed the schema_* override keys so SEO output matches the spec.
        $sections = [
            'schema_webpage_name'         => 'Online Football Betting ID - Radhey Book',
            'schema_webpage_description'  => 'Get your Online Football Betting ID instantly via WhatsApp from Radhey Book. Fast activation, FIFA, UEFA, EPL, La Liga betting markets with secure payments and 24/7 support.',
            'schema_service_name'         => 'Online Football Betting ID Service',
            'schema_service_servicetype'  => 'Online Betting ID Service',
            'schema_service_description'  => 'Radhey Book provides Online Football Betting IDs via WhatsApp registration that allow users to bet on FIFA World Cup, UEFA Champions League, EPL, La Liga and other major football tournaments with live odds, secure payments and instant activation.',
        ];

        // Only insert if it doesn't exist (re-run safe).
        if (!DB::table('pages')->where('slug', 'online-football-betting-id')->exists()) {
            DB::table('pages')->insert([
                'slug'             => 'online-football-betting-id',
                'title'            => 'Online Football Betting ID',
                'meta_title'       => 'Online Football Betting ID – Get Instant Football Betting ID in India',
                'meta_description' => 'Get your Online Football Betting ID instantly via WhatsApp from Radhey Book. Fast activation, live football odds, FIFA, UEFA, EPL, La Liga betting markets with secure payments and 24/7 support.',
                'meta_keywords'    => 'online football betting ID, instant football betting ID, football betting WhatsApp number, FIFA world cup betting ID, radhey book',
                'sections'         => json_encode($sections),
                'is_active'        => 1,
                'created_at'       => now(),
                'updated_at'       => now(),
            ]);
        }

        // 2) Add as a child item under the existing "Sports" dropdown in header_main.
        $menu = DB::table('menus')->where('key', 'header_main')->first();
        if (!$menu) return;

        $items = json_decode($menu->items ?? '[]', true);
        if (!is_array($items)) return;

        $newChild = [
            'label'  => 'Online Football Betting ID',
            'url'    => '/online-football-betting-id',
            'target' => '_self',
        ];

        foreach ($items as $i => $item) {
            if (strcasecmp($item['label'] ?? '', 'Sports') !== 0) {
                continue;
            }
            $children = $item['children'] ?? [];
            // Avoid duplicate if migration is re-run.
            $alreadyThere = false;
            foreach ($children as $child) {
                if (($child['url'] ?? '') === '/online-football-betting-id') {
                    $alreadyThere = true;
                    break;
                }
            }
            if (!$alreadyThere) {
                $children[] = $newChild;
                $items[$i]['children'] = $children;
            }
            break;
        }

        DB::table('menus')->where('id', $menu->id)->update([
            'items'      => json_encode($items),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        // Remove the menu link
        $menu = DB::table('menus')->where('key', 'header_main')->first();
        if ($menu) {
            $items = json_decode($menu->items ?? '[]', true);
            if (is_array($items)) {
                foreach ($items as $i => $item) {
                    if (strcasecmp($item['label'] ?? '', 'Sports') !== 0) continue;
                    $items[$i]['children'] = array_values(array_filter(
                        $item['children'] ?? [],
                        fn($c) => ($c['url'] ?? '') !== '/online-football-betting-id'
                    ));
                    break;
                }
                DB::table('menus')->where('id', $menu->id)->update([
                    'items'      => json_encode($items),
                    'updated_at' => now(),
                ]);
            }
        }

        // Remove the page
        DB::table('pages')->where('slug', 'online-football-betting-id')->delete();
    }
};
