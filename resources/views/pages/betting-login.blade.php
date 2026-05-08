@extends('layouts.app')

@section('meta_title', $meta_title ?? 'Betting ID Login Guide | How to Login to Your Betting Account - Radhey')
@section('meta_description', $meta_description ?? 'Complete guide on how to login to your betting ID. Step-by-step login instructions for all platforms, troubleshooting tips, and 24/7 support from Radhey Book.')
@section('meta_keywords', $meta_keywords ?? 'betting ID login, online betting login, cricket betting login, casino login, how to login betting ID, radhey betting ID login')

@section('content')

{{-- HERO SECTION --}}
<section class="hero-section" id="hero">
    <div class="hero-overlay"></div>
    <div class="hero-content container">
        <div class="hero-badge">
            <span class="badge-pulse"></span>
            {!! $page->section('hero_badge', 'Login Guide') !!}
        </div>
        <h1 class="hero-title">{!! $page->section('hero_title', 'Betting ID <span class="text-gold">Login Guide</span>') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'Learn how to login to your betting ID on any platform. Step-by-step instructions, troubleshooting tips, and 24/7 support if you need help.') !!}</p>
        <div class="hero-cta">
            <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.5.5 0 00.61.609l4.458-1.495A11.952 11.952 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.319 0-4.476-.682-6.297-1.848l-.44-.292-3.065 1.027 1.027-3.065-.292-.44A9.965 9.965 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                {!! $page->section('hero_btn_text', 'Get Help With Login') !!}
            </a>
            <a href="#how-to-login" class="btn btn-outline-gold btn-lg">{!! $page->section('hero_btn2_text', 'Login Steps') !!}</a>
        </div>
    </div>
</section>

{{-- HOW TO LOGIN --}}
<section class="section" id="how-to-login">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('login_title', 'How to <span class="text-gold">Login</span> to Your Betting ID') !!}</h2>
            <p class="section-subtitle">{!! $page->section('login_subtitle', 'Simple steps to access your betting account') !!}</p>
        </div>
        <div style="max-width: 800px; margin: 0 auto;">
            <div class="feature-card" style="margin-bottom: 20px;">
                <div style="display: flex; align-items: flex-start; gap: 20px;">
                    <span style="font-size: 2em; color: #d4af37; font-weight: 700; min-width: 50px;">1</span>
                    <div>
                        <h3>{!! $page->section('login_step_1_title', 'Open the Login Link') !!}</h3>
                        <p>{!! $page->section('login_step_1_text', 'When you receive your betting ID from us on WhatsApp, we also send you the login link for your specific platform. Open this link in your mobile browser (Chrome, Safari, or any browser).') !!}</p>
                    </div>
                </div>
            </div>
            <div class="feature-card" style="margin-bottom: 20px;">
                <div style="display: flex; align-items: flex-start; gap: 20px;">
                    <span style="font-size: 2em; color: #d4af37; font-weight: 700; min-width: 50px;">2</span>
                    <div>
                        <h3>{!! $page->section('login_step_2_title', 'Enter Your Credentials') !!}</h3>
                        <p>{!! $page->section('login_step_2_text', 'On the login page, enter your Username (Betting ID) and Password that were provided to you by our team. Make sure there are no extra spaces before or after the credentials.') !!}</p>
                    </div>
                </div>
            </div>
            <div class="feature-card" style="margin-bottom: 20px;">
                <div style="display: flex; align-items: flex-start; gap: 20px;">
                    <span style="font-size: 2em; color: #d4af37; font-weight: 700; min-width: 50px;">3</span>
                    <div>
                        <h3>{!! $page->section('login_step_3_title', 'Click Login') !!}</h3>
                        <p>{!! $page->section('login_step_3_text', 'Click the "Login" or "Sign In" button. You will be redirected to your betting dashboard where you can see your balance, available markets, and all features.') !!}</p>
                    </div>
                </div>
            </div>
            <div class="feature-card" style="margin-bottom: 20px;">
                <div style="display: flex; align-items: flex-start; gap: 20px;">
                    <span style="font-size: 2em; color: #d4af37; font-weight: 700; min-width: 50px;">4</span>
                    <div>
                        <h3>{!! $page->section('login_step_4_title', 'Change Your Password') !!}</h3>
                        <p>{!! $page->section('login_step_4_text', 'For security, we strongly recommend changing your password immediately after your first login. Go to Settings or Profile and update your password to something only you know.') !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- PLATFORM-SPECIFIC LOGIN GUIDES --}}
<section class="section" id="platform-guides" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('platform_title', 'Login Guide by <span class="text-gold">Platform</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('platform_subtitle', 'Specific instructions for each platform') !!}</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg>
                </div>
                <h3>{!! $page->section('platform_1_title', 'Cricket Betting Login') !!}</h3>
                <p>{!! $page->section('platform_1_text', 'Open the cricket platform link provided. Enter your cricket betting ID and password. Access live cricket matches, pre-match odds, and all cricket betting markets.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
                </div>
                <h3>{!! $page->section('platform_2_title', 'Casino Login') !!}</h3>
                <p>{!! $page->section('platform_2_text', 'Visit the casino platform URL. Enter your casino ID credentials. Browse live dealer games, slots, roulette, blackjack, teen patti, and all casino games.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/></svg>
                </div>
                <h3>{!! $page->section('platform_3_title', 'Sports Betting Login') !!}</h3>
                <p>{!! $page->section('platform_3_text', 'Open the sports platform link. Log in with your sports betting ID. Access football, tennis, basketball, kabaddi, and all other sports betting markets.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                </div>
                <h3>{!! $page->section('platform_4_title', 'Reddy Anna Login') !!}</h3>
                <p>{!! $page->section('platform_4_text', 'Go to the Reddy Anna Book login page. Enter your Reddy Anna ID and password. Access all Reddy Anna betting markets including cricket, casino, and sports.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3>{!! $page->section('platform_5_title', 'Mahadev Book Login') !!}</h3>
                <p>{!! $page->section('platform_5_text', 'Navigate to the Mahadev Book login URL. Enter your Mahadev credentials. Explore all available betting markets and casino games on the platform.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <h3>{!! $page->section('platform_6_title', 'Exchange Login') !!}</h3>
                <p>{!! $page->section('platform_6_text', 'Open your exchange platform (Sky Exchange, Lotus Exchange, etc.). Log in with your exchange ID. Start trading and betting on all available markets.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- TROUBLESHOOTING --}}
<section class="section" id="troubleshooting">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('trouble_title', 'Troubleshooting <span class="text-gold">Login Issues</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('trouble_subtitle', 'Common problems and how to fix them') !!}</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                </div>
                <h3>{!! $page->section('trouble_1_q', 'Wrong Password') !!}</h3>
                <p>{!! $page->section('trouble_1_a', 'Double-check that you are entering the exact password provided. Passwords are case-sensitive. If you have changed your password and forgotten it, contact us on WhatsApp for a reset.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                </div>
                <h3>{!! $page->section('trouble_2_q', 'Account Locked') !!}</h3>
                <p>{!! $page->section('trouble_2_a', 'Too many failed login attempts can temporarily lock your account. Wait 15-30 minutes and try again, or contact our support team to unlock your account immediately.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                </div>
                <h3>{!! $page->section('trouble_3_q', 'Page Not Loading') !!}</h3>
                <p>{!! $page->section('trouble_3_a', 'Try clearing your browser cache and cookies, or use a different browser. Make sure you have a stable internet connection. The platform works best on Chrome or Safari.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
                </div>
                <h3>{!! $page->section('trouble_4_q', 'Mobile Compatibility') !!}</h3>
                <p>{!! $page->section('trouble_4_a', 'If the platform does not display correctly on your phone, try rotating to landscape mode or use the "Desktop Site" option in your browser. All platforms are mobile-optimized.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                </div>
                <h3>{!! $page->section('trouble_5_q', 'Forgot Username') !!}</h3>
                <p>{!! $page->section('trouble_5_a', 'Check your WhatsApp chat with us - your username was sent when your ID was created. If you cannot find it, message us on WhatsApp and we will resend your credentials.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3>{!! $page->section('trouble_6_q', 'Security Warning') !!}</h3>
                <p>{!! $page->section('trouble_6_a', 'If you see a security warning, make sure you are using the correct login link provided by us. Do not login through links from unknown sources. Contact us if you are unsure.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- FAQ --}}
<section class="section" id="faq" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('faq_title', 'Frequently Asked <span class="text-gold">Questions</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('faq_subtitle', 'Common login questions answered') !!}</p>
        </div>
        <div class="faq-list" style="max-width: 800px; margin: 0 auto;">
            <div class="faq-item">
                <div class="faq-question">
                    <span>{!! $page->section('faq_1_q', 'Where do I find my login link?') !!}</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>{!! $page->section('faq_1_a', 'Your login link is sent to you on WhatsApp along with your betting ID and password when your account is created. Check your chat history with us. If you cannot find it, message us and we will resend it.') !!}</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>{!! $page->section('faq_2_q', 'Can I login from multiple devices?') !!}</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>{!! $page->section('faq_2_a', 'Yes, you can login from any device - phone, tablet, or computer. However, most platforms allow only one active session at a time. Logging in from a new device will log you out from the previous one.') !!}</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>{!! $page->section('faq_3_q', 'How do I reset my password?') !!}</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>{!! $page->section('faq_3_a', 'Contact us on WhatsApp at +91 79017 12857 and request a password reset. We will verify your identity and provide you with a new password within minutes. You can then change it to something of your choice.') !!}</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>{!! $page->section('faq_4_q', 'Is it safe to save my password in the browser?') !!}</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>{!! $page->section('faq_4_a', 'We recommend not saving your password in the browser, especially on shared devices. For personal devices with proper security (fingerprint, face ID), it is generally safe. Always use a strong, unique password.') !!}</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>{!! $page->section('faq_5_q', 'What if my account shows zero balance after login?') !!}</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>{!! $page->section('faq_5_a', 'If your balance shows zero after login, it could be a temporary sync issue. Wait a moment and refresh the page. If the issue persists, contact our support team immediately on WhatsApp for quick resolution.') !!}</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>{!! $page->section('faq_6_q', 'Can I change my username?') !!}</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>{!! $page->section('faq_6_a', 'Usernames are typically fixed once assigned. However, if you need a new username, contact us and we can create a new account for you with your preferred username while transferring your balance.') !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA SECTION --}}
<section class="section" id="cta">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('cta_title', 'Need <span class="text-gold">Login Help</span>?') !!}</h2>
            <p class="section-subtitle">{!! $page->section('cta_text', 'Our support team is available 24/7 to help you with any login issues. Do not have a betting ID yet? Get one now!') !!}</p>
        </div>
        <div class="text-center">
            <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.5.5 0 00.61.609l4.458-1.495A11.952 11.952 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.319 0-4.476-.682-6.297-1.848l-.44-.292-3.065 1.027 1.027-3.065-.292-.44A9.965 9.965 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                {!! $page->section('cta_btn_text', 'Contact Support on WhatsApp') !!}
            </a>
        </div>
        <div class="text-center" style="margin-top: 15px;">
            <p style="opacity: 0.7;">{!! $page->section('cta_contact_text', 'Or call us at <a href="tel:+' . ($siteSettings['whatsapp_number'] ?? '917901712857') . '" class="text-gold">+91 79017 12857</a> | Email: <a href="mailto:support@radheybettingid.com" class="text-gold">support@radheybettingid.com</a>') !!}</p>
        </div>
    </div>
</section>

@endsection
