<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

/**
 * Title tags should stay <= 60 chars so Google does not truncate in SERPs.
 * Audit flagged 20 over-length titles; this migration trims the ones stored
 * in the pages table. Side effect on online-football-betting-id: trimmed
 * title now differs from H1, resolving the "duplicate H1 + title" warning.
 */
return new class extends Migration
{
    public function up(): void
    {
        $updates = [
            'home'                          => 'Football Betting ID — Trusted FIFA World Cup Betting ID',
            'about'                         => 'About Radhey Book — Online Betting ID Provider India',
            'get-betting-id'                => 'Get Online Betting ID Instantly | Radhey Book',
            'cricket-betting-id'            => 'Cricket Betting ID | Online Cricket ID | Radhey Book',
            'lords-exchange'                => 'Lord Exchange ID | Betting ID Provider | Radhey Book',
            'lotus-exchange'                => 'Lotus Exchange ID | Betting ID Provider | Radhey Book',
            'fairplay-369'                  => 'Fairplay 369 | Exchange Betting ID | Radhey Book',
            'reddy-anna'                    => 'Reddy Anna Book Alternative | Radhey Book',
            'how-to-get-betting-id'         => 'How to Get Online Betting ID | Radhey Book Guide',
            'live-betting'                  => 'Live Betting | In-Play Cricket & Sports | Radhey Book',
            'online-betting-id'             => 'Instant Online Betting ID | Secure Access | Radhey Book',
            'online-casino-id'              => 'Online Casino ID via WhatsApp | Radhey Book',
            'best-ipl-betting-id-providers' => 'Best IPL Betting ID Providers in India | Radhey Book',
            'online-football-betting-id'    => 'Online Football Betting ID in India | Radhey Book',
        ];

        foreach ($updates as $slug => $title) {
            DB::table('pages')
                ->where('slug', $slug)
                ->update([
                    'meta_title' => $title,
                    'updated_at' => now(),
                ]);
        }
    }

    public function down(): void
    {
        // No-op: previous over-length titles are preserved in earlier
        // migrations (e.g. 2026_04_25_000016_set_home_page_football_content
        // for the home page). Re-run those if you need to roll back.
    }
};
