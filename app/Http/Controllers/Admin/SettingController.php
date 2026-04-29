<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    public function index()
    {
        $keys = [
            'site_name', 'logo_text', 'whatsapp_number', 'phone', 'support_email',
            'welcome_bonus', 'min_deposit', 'announcement_text', 'bonus_label',
            'facebook_url', 'twitter_url', 'instagram_url', 'telegram_url', 'youtube_url',
            'footer_text',
        ];

        $defaults = [
            'site_name' => 'Radhey Book',
            'logo_text' => 'RADHEY',
            'whatsapp_number' => '919876543210',
            'phone' => '919876543210',
            'support_email' => 'support@radheybook.com',
            'welcome_bonus' => '100',
            'min_deposit' => '100',
            'announcement_text' => 'Get your Betting ID instantly via WhatsApp!',
            'bonus_label' => 'Bonus Offer Ends in',
            'facebook_url' => '',
            'twitter_url' => '',
            'instagram_url' => '',
            'telegram_url' => '',
            'youtube_url' => '',
            'footer_text' => '© 2025 Radhey Book. All Rights Reserved.',
        ];

        $settings = [];
        foreach ($keys as $key) {
            $settings[$key] = SiteSetting::get($key, $defaults[$key] ?? '');
        }

        return view('admin.settings', compact('settings'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'site_name'         => 'nullable|string|max:255',
            'logo_text'         => 'nullable|string|max:50',
            'whatsapp_number'   => 'nullable|string|max:20|regex:/^[0-9+\- ]+$/',
            'phone'             => 'nullable|string|max:20|regex:/^[0-9+\- ]+$/',
            'support_email'     => 'nullable|email|max:255',
            'welcome_bonus'     => 'nullable|numeric|min:0|max:1000000',
            'min_deposit'       => 'nullable|numeric|min:0|max:1000000',
            'announcement_text' => 'nullable|string|max:500',
            'bonus_label'       => 'nullable|string|max:100',
            'facebook_url'      => 'nullable|url|max:500',
            'twitter_url'       => 'nullable|url|max:500',
            'instagram_url'     => 'nullable|url|max:500',
            'telegram_url'      => 'nullable|url|max:500',
            'youtube_url'       => 'nullable|url|max:500',
            'footer_text'       => 'nullable|string|max:500',
        ]);

        foreach ($validated as $field => $value) {
            SiteSetting::set($field, $value ?? '');
        }

        return redirect()->route('admin.settings')->with('success', 'Settings updated successfully.');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        if (!Hash::check($request->current_password, auth()->user()->password)) {
            return back()->with('error', 'Current password is incorrect.');
        }

        auth()->user()->update(['password' => Hash::make($request->password)]);

        return redirect()->route('admin.settings')->with('success', 'Password changed successfully.');
    }
}
