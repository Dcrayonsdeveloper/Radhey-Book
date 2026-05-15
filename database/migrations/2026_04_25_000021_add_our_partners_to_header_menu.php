<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $items = [
            [
                'label' => 'Home',
                'url' => '/',
                'target' => '_self',
                'children' => [],
            ],
            [
                'label' => 'Cricket',
                'url' => '/cricket',
                'target' => '_self',
                'children' => [
                    ['label' => 'Online Cricket ID',         'url' => '/cricket',                       'target' => '_self'],
                    ['label' => 'Cricket Betting ID',        'url' => '/cricket-betting-id',            'target' => '_self'],
                    ['label' => 'Online Betting ID',         'url' => '/online-betting-id',             'target' => '_self'],
                    ['label' => 'IPL Betting ID',            'url' => '/ipl-betting-id',                'target' => '_self'],
                    ['label' => 'T20 Betting ID',            'url' => '/t20-betting-id',                'target' => '_self'],
                    ['label' => 'T20 Cricket Betting ID',    'url' => '/t20-cricket-betting-id',        'target' => '_self'],
                    ['label' => 'What is IPL Betting ID',    'url' => '/what-is-ipl-betting-id',        'target' => '_self'],
                    ['label' => 'How to Get IPL Betting ID', 'url' => '/how-to-get-ipl-betting-id',     'target' => '_self'],
                    ['label' => 'Best IPL ID Providers',     'url' => '/best-ipl-betting-id-providers', 'target' => '_self'],
                    ['label' => 'WhatsApp Betting ID',       'url' => '/whatsapp-betting-id',           'target' => '_self'],
                ],
            ],
            [
                'label' => 'Casino',
                'url' => '/casino',
                'target' => '_self',
                'children' => [
                    ['label' => 'Casino',            'url' => '/casino',            'target' => '_self'],
                    ['label' => 'Casino Betting ID', 'url' => '/casino-betting-id', 'target' => '_self'],
                    ['label' => 'Online Casino ID',  'url' => '/online-casino-id',  'target' => '_self'],
                    ['label' => 'Aviator',           'url' => '/aviator',           'target' => '_self'],
                ],
            ],
            [
                'label' => 'Football',
                'url' => '/football-betting',
                'target' => '_self',
                'children' => [
                    ['label' => 'Football Betting',           'url' => '/football-betting',           'target' => '_self'],
                    ['label' => 'Football Betting ID',        'url' => '/football-betting-id',        'target' => '_self'],
                    ['label' => 'Online Football Betting ID', 'url' => '/online-football-betting-id', 'target' => '_self'],
                ],
            ],
            [
                'label' => 'Tennis',
                'url' => '/tennis-betting',
                'target' => '_self',
                'children' => [
                    ['label' => 'Tennis Betting',    'url' => '/tennis-betting',    'target' => '_self'],
                    ['label' => 'Tennis Betting ID', 'url' => '/tennis-betting-id', 'target' => '_self'],
                ],
            ],
            [
                'label' => 'Exchanges',
                'url' => '#',
                'target' => '_self',
                'children' => [
                    ['label' => 'Lords Exchange',       'url' => '/lords-exchange',       'target' => '_self'],
                    ['label' => 'Lords Exchange ID',    'url' => '/lords-exchange-id',    'target' => '_self'],
                    ['label' => 'Lotus Exchange',       'url' => '/lotus-exchange',       'target' => '_self'],
                    ['label' => 'Lotus Exchange ID',    'url' => '/lotus-exchange-id',    'target' => '_self'],
                    ['label' => 'Fairplay 369',         'url' => '/fairplay-369',         'target' => '_self'],
                    ['label' => 'Fairplay Exchange ID', 'url' => '/fairplay-exchange-id', 'target' => '_self'],
                    ['label' => 'Sky Exchange',         'url' => '/sky-exchange',         'target' => '_self'],
                    ['label' => 'Sky Exchange ID',      'url' => '/sky-exchange-id',      'target' => '_self'],
                ],
            ],
            [
                'label' => 'Our Partners',
                'url' => '#',
                'target' => '_self',
                'children' => [
                    ['label' => 'Reddy Anna',         'url' => '/reddy-anna',         'target' => '_self'],
                    ['label' => 'Reddy Anna Book ID', 'url' => '/reddy-anna-book-id', 'target' => '_self'],
                    ['label' => 'Mahadev Book',       'url' => '/mahadev-book',       'target' => '_self'],
                    ['label' => 'Mahadev Book ID',    'url' => '/mahadev-book-id',    'target' => '_self'],
                ],
            ],
            [
                'label' => 'Blog',
                'url' => '/blog',
                'target' => '_self',
                'children' => [],
            ],
        ];

        DB::table('menus')
            ->updateOrInsert(
                ['key' => 'header_main'],
                [
                    'label'      => 'Main Header Menu',
                    'items'      => json_encode($items),
                    'updated_at' => now(),
                    'created_at' => now(),
                ]
            );
    }

    public function down(): void
    {
        // No-op: rolling back menu structures is brittle. Re-run an earlier
        // menu migration if you need to revert.
    }
};
