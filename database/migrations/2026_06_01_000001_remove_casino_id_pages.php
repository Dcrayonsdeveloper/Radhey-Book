<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

/**
 * Permanently removes the /casino-betting-id and /online-casino-id pages.
 *
 * Cleanup performed:
 *  - Delete page rows (cascades to JSON sections, meta, schema overrides).
 *  - Remove header-menu entries pointing to those URLs.
 *  - Seed 301 redirects to /casino (suitable parent topic page).
 */
return new class extends Migration
{
    private const REMOVED_SLUGS = ['casino-betting-id', 'online-casino-id'];
    private const REMOVED_PATHS = ['/casino-betting-id', '/online-casino-id'];
    private const REPLACEMENT_PATH = '/casino';

    public function up(): void
    {
        DB::table('pages')->whereIn('slug', self::REMOVED_SLUGS)->delete();

        $this->pruneMenuItems('header_main');

        foreach (self::REMOVED_PATHS as $path) {
            DB::table('redirects')->updateOrInsert(
                ['from_path' => $path],
                [
                    'to_path'     => self::REPLACEMENT_PATH,
                    'status_code' => 301,
                    'is_active'   => true,
                    'updated_at'  => now(),
                    'created_at'  => now(),
                ]
            );
        }
    }

    public function down(): void
    {
        // No-op: page content is destroyed by up(). To restore, re-run the
        // schema-override migrations that seeded the original sections, or
        // recreate the pages manually via the admin.
        DB::table('redirects')->whereIn('from_path', self::REMOVED_PATHS)->delete();
    }

    private function pruneMenuItems(string $menuKey): void
    {
        $row = DB::table('menus')->where('key', $menuKey)->first();
        if (!$row) {
            return;
        }

        $items = json_decode($row->items ?? '[]', true) ?: [];

        foreach ($items as &$item) {
            if (!empty($item['children']) && is_array($item['children'])) {
                $item['children'] = array_values(array_filter(
                    $item['children'],
                    fn ($child) => !in_array(($child['url'] ?? ''), self::REMOVED_PATHS, true)
                ));
            }
        }
        unset($item);

        DB::table('menus')->where('id', $row->id)->update([
            'items'      => json_encode($items),
            'updated_at' => now(),
        ]);
    }
};
