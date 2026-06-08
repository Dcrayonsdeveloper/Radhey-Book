<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

/**
 * Re-introduces the /casino-betting-id page (removed on 2026-06-01) with a new
 * content brief, following the same pattern as 2026_06_01_000002 for
 * /online-casino-id.
 *
 * Steps:
 *  1) Remove the stale 301 redirect (/casino-betting-id -> /casino) so the
 *     new route can fire — HandleRedirects middleware runs before routing.
 *  2) Insert the page row. Sections JSON is left empty; the blade carries the
 *     content as $page->section('key', 'default') defaults so admin can later
 *     override individual fields without a re-deploy.
 *  3) Append "Casino Betting ID" as a child of the Casino dropdown in
 *     header_main, placed immediately after "Casino" to restore the original
 *     menu order from 2026_04_25_000020_restructure_header_menu_by_sport
 *     (Casino → Casino Betting ID → Online Casino ID → Aviator).
 */
return new class extends Migration
{
    private const SLUG = 'casino-betting-id';
    private const URL  = '/casino-betting-id';

    public function up(): void
    {
        // 1) Drop the redirect that was seeded when the old page was removed.
        DB::table('redirects')->where('from_path', self::URL)->delete();

        // 2) Create the page row (idempotent).
        if (!DB::table('pages')->where('slug', self::SLUG)->exists()) {
            DB::table('pages')->insert([
                'slug'             => self::SLUG,
                'title'            => 'Casino Betting ID',
                'meta_title'       => 'Casino Betting ID. Get Instant Casino Betting ID in India. Radhey Book',
                'meta_description' => 'Get your instant casino betting ID in India via WhatsApp with Radhey Book. Verified casino betting ID with quick signup, live casino games, cricket markets and 24/7 support.',
                'meta_keywords'    => 'casino betting id, casino betting id whatsapp, casino whatsapp number, instant casino id, casino betting id india, online casino betting id',
                'sections'         => json_encode(new \stdClass()),
                'is_active'        => 1,
                'created_at'       => now(),
                'updated_at'       => now(),
            ]);
        }

        // 3) Append menu entry under the Casino dropdown, immediately after /casino.
        $menu = DB::table('menus')->where('key', 'header_main')->first();
        if (!$menu) {
            return;
        }

        $items = json_decode($menu->items ?? '[]', true);
        if (!is_array($items)) {
            return;
        }

        $newChild = [
            'label'  => 'Casino Betting ID',
            'url'    => self::URL,
            'target' => '_self',
        ];

        foreach ($items as $i => $item) {
            if (strcasecmp($item['label'] ?? '', 'Casino') !== 0) {
                continue;
            }

            $children = $item['children'] ?? [];
            foreach ($children as $child) {
                if (($child['url'] ?? '') === self::URL) {
                    return; // already present
                }
            }

            // Insert right after the top-level "/casino" overview link so the
            // dropdown reads Casino → Casino Betting ID → Online Casino ID → Aviator.
            $inserted = false;
            $rebuilt  = [];
            foreach ($children as $child) {
                $rebuilt[] = $child;
                if (!$inserted && ($child['url'] ?? '') === '/casino') {
                    $rebuilt[]  = $newChild;
                    $inserted   = true;
                }
            }
            if (!$inserted) {
                $rebuilt[] = $newChild;
            }

            $items[$i]['children'] = $rebuilt;
            break;
        }

        DB::table('menus')->where('id', $menu->id)->update([
            'items'      => json_encode($items),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        // Restore the redirect that this migration removed.
        DB::table('redirects')->updateOrInsert(
            ['from_path' => self::URL],
            [
                'to_path'     => '/casino',
                'status_code' => 301,
                'is_active'   => true,
                'updated_at'  => now(),
                'created_at'  => now(),
            ]
        );

        DB::table('pages')->where('slug', self::SLUG)->delete();

        $menu = DB::table('menus')->where('key', 'header_main')->first();
        if (!$menu) return;
        $items = json_decode($menu->items ?? '[]', true);
        if (!is_array($items)) return;
        foreach ($items as $i => $item) {
            if (strcasecmp($item['label'] ?? '', 'Casino') !== 0) continue;
            $items[$i]['children'] = array_values(array_filter(
                $item['children'] ?? [],
                fn ($c) => ($c['url'] ?? '') !== self::URL
            ));
            break;
        }
        DB::table('menus')->where('id', $menu->id)->update([
            'items'      => json_encode($items),
            'updated_at' => now(),
        ]);
    }
};
