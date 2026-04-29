@extends('admin.layouts.app')
@section('title', 'Settings')

@section('content')
<div class="panel">
    <div class="panel-header">
        <h3 class="panel-title">Site Settings</h3>
    </div>
    <div class="panel-body">
        <form method="POST" action="{{ route('admin.settings.update') }}">
            @csrf
            <div class="form-grid">
                {{-- General --}}
                <div class="form-group full-width" style="border-bottom: 1px solid rgba(255,255,255,0.06); padding-bottom: 12px; margin-bottom: 12px;">
                    <label style="color: #d4af37; font-size: 14px; font-weight: 600;">General</label>
                </div>

                <div class="form-group">
                    <label>Site Name</label>
                    <input type="text" name="site_name" class="form-control" value="{{ $settings['site_name'] }}">
                </div>

                <div class="form-group">
                    <label>Logo Text</label>
                    <input type="text" name="logo_text" class="form-control" value="{{ $settings['logo_text'] }}">
                    <span class="form-hint">Displayed in navbar and sidebar</span>
                </div>

                <div class="form-group">
                    <label>WhatsApp Number</label>
                    <input type="text" name="whatsapp_number" class="form-control" value="{{ $settings['whatsapp_number'] }}">
                    <span class="form-hint">Format: 919876543210 (country code + number, no +)</span>
                </div>

                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" name="phone" class="form-control" value="{{ $settings['phone'] }}">
                    <span class="form-hint">For tel: links and display</span>
                </div>

                <div class="form-group">
                    <label>Support Email</label>
                    <input type="email" name="support_email" class="form-control" value="{{ $settings['support_email'] }}">
                </div>

                {{-- Business --}}
                <div class="form-group full-width" style="border-top: 1px solid rgba(255,255,255,0.06); padding-top: 20px; margin-top: 8px; border-bottom: 1px solid rgba(255,255,255,0.06); padding-bottom: 12px; margin-bottom: 12px;">
                    <label style="color: #d4af37; font-size: 14px; font-weight: 600;">Business</label>
                </div>

                <div class="form-group">
                    <label>Welcome Bonus %</label>
                    <input type="text" name="welcome_bonus" class="form-control" value="{{ $settings['welcome_bonus'] }}">
                </div>

                <div class="form-group">
                    <label>Minimum Deposit (Rs.)</label>
                    <input type="text" name="min_deposit" class="form-control" value="{{ $settings['min_deposit'] }}">
                </div>

                <div class="form-group full-width">
                    <label>Announcement Bar Text</label>
                    <input type="text" name="announcement_text" class="form-control" value="{{ $settings['announcement_text'] }}">
                </div>

                <div class="form-group full-width">
                    <label>Bonus Popup Label</label>
                    <input type="text" name="bonus_label" class="form-control" value="{{ $settings['bonus_label'] }}">
                    <span class="form-hint">Text shown above the countdown in the bonus popup (e.g. "Bonus Offer Ends in")</span>
                </div>

                {{-- Social Media --}}
                <div class="form-group full-width" style="border-top: 1px solid rgba(255,255,255,0.06); padding-top: 20px; margin-top: 8px; border-bottom: 1px solid rgba(255,255,255,0.06); padding-bottom: 12px; margin-bottom: 12px;">
                    <label style="color: #d4af37; font-size: 14px; font-weight: 600;">Social Media Links</label>
                </div>

                <div class="form-group">
                    <label>Facebook URL</label>
                    <input type="url" name="facebook_url" class="form-control" value="{{ $settings['facebook_url'] }}" placeholder="https://facebook.com/...">
                </div>

                <div class="form-group">
                    <label>Twitter / X URL</label>
                    <input type="url" name="twitter_url" class="form-control" value="{{ $settings['twitter_url'] }}" placeholder="https://twitter.com/...">
                </div>

                <div class="form-group">
                    <label>Instagram URL</label>
                    <input type="url" name="instagram_url" class="form-control" value="{{ $settings['instagram_url'] }}" placeholder="https://instagram.com/...">
                </div>

                <div class="form-group">
                    <label>Telegram URL</label>
                    <input type="url" name="telegram_url" class="form-control" value="{{ $settings['telegram_url'] }}" placeholder="https://t.me/...">
                </div>

                <div class="form-group">
                    <label>YouTube URL</label>
                    <input type="url" name="youtube_url" class="form-control" value="{{ $settings['youtube_url'] }}" placeholder="https://youtube.com/...">
                </div>

                {{-- Footer --}}
                <div class="form-group full-width" style="border-top: 1px solid rgba(255,255,255,0.06); padding-top: 20px; margin-top: 8px; border-bottom: 1px solid rgba(255,255,255,0.06); padding-bottom: 12px; margin-bottom: 12px;">
                    <label style="color: #d4af37; font-size: 14px; font-weight: 600;">Footer</label>
                </div>

                <div class="form-group full-width">
                    <label>Footer Copyright Text</label>
                    <input type="text" name="footer_text" class="form-control" value="{{ $settings['footer_text'] }}">
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-gold">Save Settings</button>
            </div>
        </form>
    </div>
</div>

<div class="panel">
    <div class="panel-header">
        <h3 class="panel-title">Change Password</h3>
    </div>
    <div class="panel-body">
        <form method="POST" action="{{ route('admin.settings.password') }}">
            @csrf
            <div class="form-grid">
                <div class="form-group">
                    <label>Current Password</label>
                    <input type="password" name="current_password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>New Password</label>
                    <input type="password" name="password" class="form-control" required minlength="8">
                    <span class="form-hint">Minimum 8 characters</span>
                </div>
                <div class="form-group">
                    <label>Confirm New Password</label>
                    <input type="password" name="password_confirmation" class="form-control" required>
                </div>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-gold">Change Password</button>
            </div>
        </form>
    </div>
</div>
@endsection
