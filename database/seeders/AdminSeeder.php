<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\SiteSetting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@radheybook.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('admin123'),
                'is_admin' => true,
            ]
        );

        $defaults = [
            'site_name' => 'Radhey Book',
            'whatsapp_number' => '919876543210',
            'support_email' => 'support@radheybook.com',
            'meta_title' => "Radhey Book | India's #1 Trusted Online Betting ID Provider",
            'meta_description' => 'Get your online betting ID instantly from Radhey Book - India\'s most trusted betting ID provider.',
            'announcement_text' => 'Get your Betting ID instantly via WhatsApp! 100% Welcome Bonus!',
            'welcome_bonus' => '100',
            'min_deposit' => '100',
        ];

        foreach ($defaults as $key => $value) {
            SiteSetting::set($key, $value);
        }
    }
}
