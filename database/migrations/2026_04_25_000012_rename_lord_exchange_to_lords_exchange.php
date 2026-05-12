<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // 1) Rename the page slug from "lord-exchange" -> "lords-exchange"
        DB::table('pages')
            ->where('slug', 'lord-exchange')
            ->update([
                'slug'       => 'lords-exchange',
                'updated_at' => now(),
            ]);

        // 2) Update any menu items that point to the old URL so users go to the
        //    canonical URL directly, no redirect hop.
        $menus = DB::table('menus')->get();
        foreach ($menus as $menu) {
            $items = json_decode($menu->items ?? '[]', true);
            if (!is_array($items)) {
                continue;
            }
            $items = $this->rewriteUrls($items, '/lord-exchange', '/lords-exchange');
            DB::table('menus')
                ->where('id', $menu->id)
                ->update([
                    'items'      => json_encode($items),
                    'updated_at' => now(),
                ]);
        }
    }

    public function down(): void
    {
        DB::table('pages')
            ->where('slug', 'lords-exchange')
            ->update([
                'slug'       => 'lord-exchange',
                'updated_at' => now(),
            ]);

        $menus = DB::table('menus')->get();
        foreach ($menus as $menu) {
            $items = json_decode($menu->items ?? '[]', true);
            if (!is_array($items)) continue;
            $items = $this->rewriteUrls($items, '/lords-exchange', '/lord-exchange');
            DB::table('menus')
                ->where('id', $menu->id)
                ->update(['items' => json_encode($items), 'updated_at' => now()]);
        }
    }

    /**
     * Index-based walk over the menu tree, replacing any matching url at top level
     * or one level deep. Avoids the foreach+reference-on-temporary pitfall.
     */
    private function rewriteUrls(array $items, string $from, string $to): array
    {
        foreach ($items as $i => $item) {
            if (($item['url'] ?? '') === $from) {
                $items[$i]['url'] = $to;
            }
            if (isset($item['children']) && is_array($item['children'])) {
                foreach ($item['children'] as $j => $child) {
                    if (($child['url'] ?? '') === $from) {
                        $items[$i]['children'][$j]['url'] = $to;
                    }
                }
            }
        }
        return $items;
    }
};
