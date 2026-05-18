<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

/**
 * Round 2 of meta_title shortening. A May 18 Semrush "title element is
 * too long" report flagged additional pages not caught by migration 022.
 * All updates here bring the title under 60 characters while keeping the
 * primary keyword first.
 */
return new class extends Migration
{
    public function up(): void
    {
        $updates = [
            'cricket'                => 'Online Cricket ID | Cricket Betting | Radhey Book',
            'sky-exchange'           => 'Sky Exchange ID | Cricket ID via WhatsApp | Radhey Book',
            'ipl-betting-id'         => 'IPL Betting ID | Get Your ID Instantly | Radhey Book',
            'mahadev-book-id'        => 'Mahadev Book ID | Secure Online Betting | Radhey Book',
            'whatsapp-betting-id'    => 'WhatsApp Betting ID | Fast Signup | Radhey Book',
            'what-is-ipl-betting-id' => 'What is IPL Betting ID? Complete Guide | Radhey Book',
            'tennis-betting'         => 'Tennis Match Betting ID in India | Radhey Book',
            'football-betting'       => 'Live Football Betting ID in India | Radhey Book',
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
        // No-op — earlier migrations carry the previous values if a revert
        // is genuinely needed.
    }
};
