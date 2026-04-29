@extends('layouts.app')

@section('meta_title', $meta_title ?? 'Fairplay Exchange ID. Sign Up and Get Instant Fairplay Exchange ID. Radhey Book')
@section('meta_description', $meta_description ?? 'Get your Fairplay Exchange ID instantly via WhatsApp from Radhey Book. Fairplay exchange ID sign up, login and number support across India with 24/7 service.')
@section('meta_keywords', $meta_keywords ?? 'fairplay exchange ID, fairplay exchange ID number, fairplay exchange ID login, fairplay exchange ID sign up, fairplay exchange ID provider, fairplay exchange ID india, instant cricket ID, whatsapp betting id')

@section('content')

@php
    $waLink = 'https://wa.me/' . ($siteSettings['whatsapp_number'] ?? '919876543210') . '?text=Hi%20I%20want%20a%20Fairplay%20Exchange%20ID';
@endphp

{{-- HERO --}}
<section class="hero-section" id="hero" style="background: url('{{ asset('images/fairplay banner.png') }}') center/cover no-repeat;">
    <div class="hero-overlay" style="background: rgba(0,0,0,0.55);"></div>
    <div class="hero-content container">
        <div class="hero-badge"><span class="badge-pulse"></span> {!! $page->section('hero_badge', 'Trusted Fairplay Exchange ID Provider') !!}</div>
        <h1 class="hero-title">{!! $page->section('hero_title', 'Get Your <span class="text-gold">Fairplay Exchange ID</span> Instantly with Radhey Book') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'Radhey Book is the fastest way to complete your Fairplay exchange ID sign up in India. Get your account in minutes with instant activation, secure transactions and 24/7 support.') !!}</p>
        <div class="hero-cta"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('hero_btn_text', 'Get Your Fairplay Exchange ID Now') !!}</a></div>
    </div>
</section>

{{-- INTRO --}}
<section class="section" id="intro">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('intro_title', '<span class="text-gold">Fairplay Exchange ID</span> in India') !!}</h2>
            <p class="section-subtitle">{!! $page->section('intro_subtitle', 'Get Your Fairplay Exchange ID Today and Start Betting on Cricket, Casino and More') !!}</p>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('intro_text_1', 'If you are looking for a fast and reliable way to get your fairplay exchange ID then Radhey Book is the right place for you. Fairplay is one of the most trusted betting exchange platforms in India and lakhs of users rely on it for cricket betting, casino games and live sports. With your fairplay exchange ID from Radhey Book you get access to all betting markets, the best odds and real time updates throughout the day. The whole process happens through WhatsApp which makes the Fairplay exchange ID sign up quick and easy for everyone.') !!}</p>
                    <p>{!! $page->section('intro_text_2', 'As a leading Fairplay exchange ID provider in India, Radhey Book has helped thousands of users get their accounts in just minutes. Whether you want to bet on IPL, World Cup, T20 leagues or live casino games, your fairplay exchange ID india account gives you access to everything in one place. There is no waiting and no complicated paperwork. Just send us a message and we handle the rest.') !!}</p>
                </div>
            </div>
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/fairplay.png') }}" alt="Fairplay Exchange ID" style="width:100%;border-radius:16px;">
            </div>
        </div>
    </div>
</section>

{{-- WHAT IS --}}
<section class="section section-alt" id="what-is">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('what_is_title', 'What is a <span class="text-gold">Fairplay Exchange ID</span>?') !!}</h2>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/tiger exchange.png') }}" alt="Fairplay Betting" style="width:100%;border-radius:16px;">
            </div>
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('what_is_text_1', 'A fairplay exchange ID is your personal account that gives you access to the Fairplay betting exchange platform. With this ID you can log in, deposit funds, place bets on cricket and other sports, play casino games, track your winnings and withdraw money safely. Once your account is created, your login credentials are shared with you on WhatsApp. The fairplay exchange ID number is the dedicated customer care contact you can call or WhatsApp anytime for help with your account.') !!}</p>
                    <p>{!! $page->section('what_is_text_2', 'Your fairplay exchange ID india account works across all betting options on the platform. You can use it for cricket betting on IPL, T20 World Cup and international matches. The same fairplay exchange ID login credentials let you access live casino games, exchange betting and other sports. The platform is user friendly and works smoothly on both desktop and mobile.') !!}</p>
                </div>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('what_is_btn_text', 'Get Your Fairplay Exchange ID Today') !!}</a></div>
    </div>
</section>

{{-- SIGN UP STEPS --}}
<section class="section" id="sign-up">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('signup_title', 'How to Complete Your <span class="text-gold">Fairplay Exchange ID Sign Up</span>?') !!}</h2>
            <p class="section-subtitle">{!! $page->section('signup_subtitle', 'The fastest way to register and get your Fairplay Exchange ID is through WhatsApp') !!}</p>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(250px,1fr));">
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">1</span></div><h3>{!! $page->section('how_step_1_title', 'Click on WhatsApp') !!}</h3><p>{!! $page->section('how_step_1_text', 'Click the WhatsApp button on this page to connect directly with our team for your Fairplay exchange ID sign up.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">2</span></div><h3>{!! $page->section('how_step_2_title', 'Send Your Request') !!}</h3><p>{!! $page->section('how_step_2_text', 'Send a simple message saying Hi I want a Fairplay Exchange ID and our team will respond within seconds.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">3</span></div><h3>{!! $page->section('how_step_3_title', 'Share Details and Deposit') !!}</h3><p>{!! $page->section('how_step_3_text', 'Share your name and contact number then make your first deposit using UPI, Paytm, PhonePe or bank transfer.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">4</span></div><h3>{!! $page->section('how_step_4_title', 'Receive Your ID') !!}</h3><p>{!! $page->section('how_step_4_text', 'Within 2 to 5 minutes your ID and login credentials will be shared with you. You can start betting.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">5</span></div><h3>{!! $page->section('how_step_5_title', 'Login and Start Betting') !!}</h3><p>{!! $page->section('how_step_5_text', 'Use your fairplay exchange ID login credentials to access the platform and start placing bets.') !!}</p></div>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('how_btn_text', 'Start Your Fairplay Exchange ID Sign Up Now') !!}</a></div>
    </div>
</section>

{{-- WHY CHOOSE --}}
<section class="section" id="why-choose" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('why_title', 'Why Radhey Book is the Best <span class="text-gold">Fairplay Exchange ID Provider</span>?') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3>{!! $page->section('why_1_title', 'Instant Activation') !!}</h3><p>{!! $page->section('why_1_text', 'Your Fairplay Exchange ID is activated within 2 to 5 minutes after payment. No waiting so you can start betting on the very next match.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>{!! $page->section('why_2_title', 'Verified and Secure') !!}</h3><p>{!! $page->section('why_2_text', 'Every account we provide is fully verified with secure encryption to protect your personal and financial data at all times.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><h3>{!! $page->section('why_3_title', 'Best Market Odds') !!}</h3><p>{!! $page->section('why_3_text', 'Fairplay offers competitive odds for every match. We ensure you always get great value on every bet you place.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div><h3>{!! $page->section('why_4_title', 'WhatsApp Sign Up') !!}</h3><p>{!! $page->section('why_4_text', 'Complete your Fairplay exchange ID sign up entirely through WhatsApp. No forms, no app downloads. Just a simple chat.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div><h3>{!! $page->section('why_5_title', 'Fast Withdrawals') !!}</h3><p>{!! $page->section('why_5_text', 'Withdraw your winnings within 5 minutes directly to your bank account via UPI, Paytm, PhonePe or bank transfer.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div><h3>{!! $page->section('why_6_title', '24/7 Support') !!}</h3><p>{!! $page->section('why_6_text', 'Our team is available round the clock via WhatsApp and phone to help you with your fairplay exchange ID account anytime.') !!}</p></div>
        </div>
    </div>
</section>

{{-- LOGIN HELP --}}
<section class="section" id="login-help">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('login_title', '<span class="text-gold">Fairplay Exchange ID Login</span> Help and Support') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('login_text_1', 'Once you have your account, the fairplay exchange ID login process is simple. Just visit the Fairplay platform, enter your username and password and you are in. Your fairplay exchange ID number can also be used to track your account history and balance. If you ever face any issue with your login, our support team is just one WhatsApp message away. We help with password recovery, account verification and any other login related queries.') !!}</p>
            <p>{!! $page->section('login_text_2', 'As a trusted Fairplay exchange ID provider, we make sure that your login details are shared securely on WhatsApp and remain confidential. We always recommend that you keep your password safe and never share it with anyone. By following these simple steps you can keep your account secure throughout the year.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('login_btn_text', 'Get Login Help on WhatsApp') !!}</a></div>
    </div>
</section>

{{-- PAYMENTS --}}
<section class="section" id="payments" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('payments_title', 'Secure <span class="text-gold">Payment Methods</span>') !!}</h2></div>
        <div class="features-grid" style="grid-template-columns:repeat(4,1fr);max-width:800px;margin:0 auto;">
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/upi.png') }}" alt="UPI" style="width:48px;height:48px;object-fit:contain;"></div><h3>UPI</h3></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/bank transfer.png') }}" alt="Bank Transfer" style="width:48px;height:48px;object-fit:contain;"></div><h3>Bank Transfer</h3></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/paytm.png') }}" alt="Paytm" style="width:48px;height:48px;object-fit:contain;"></div><h3>Paytm</h3></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/phonepe.png') }}" alt="PhonePe" style="width:48px;height:48px;object-fit:contain;"></div><h3>PhonePe</h3></div>
        </div>
    </div>
</section>

{{-- SECURITY --}}
<section class="section" id="security">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('security_title', 'Is Your <span class="text-gold">Fairplay Exchange ID</span> Safe?') !!}</h2></div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('security_text', 'Yes. Every fairplay exchange ID we provide is backed by SSL encryption ensuring your personal and financial data are fully protected. We use secure payment gateways for every transaction and never store sensitive banking details. Always reach us through our official WhatsApp number and verified channels for any account related help. By following these simple precautions you enjoy a completely safe betting experience.') !!}</p>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="section" id="cta" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('cta_title', 'Ready for Your <span class="text-gold">Fairplay Exchange ID Sign Up</span>?') !!}</h2></div>
        <div class="content-block" style="max-width:900px;margin:0 auto;text-align:center;">
            <p>{!! $page->section('cta_text', 'Join thousands of users who trust Radhey Book as their preferred Fairplay exchange ID provider. Whether you want a fairplay exchange ID india account for cricket, casino or live exchange markets, we have got you covered. Get your account today with instant activation and 24/7 WhatsApp support. One simple message is all it takes to get started.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('cta_btn_text', 'Get Your Fairplay Exchange ID Now') !!}</a></div>
    </div>
</section>

{{-- FAQ --}}
<section class="section" id="faq">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('faq_title', 'Frequently Asked <span class="text-gold">Questions</span>') !!}</h2></div>
        <div class="faq-list" style="max-width:800px;margin:0 auto;">
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_1_q', 'What is a Fairplay Exchange ID?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_1_a', 'A fairplay exchange ID is your personal account for accessing the Fairplay betting exchange. It lets you log in, manage funds, place bets on cricket and casino, and withdraw winnings securely.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_2_q', 'How do I complete my Fairplay exchange ID sign up?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_2_a', 'Click the WhatsApp button on this page to start your Fairplay exchange ID sign up. Send your request, share your details, make your deposit and your account is activated within minutes.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_3_q', 'How do I access my fairplay exchange ID login?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_3_a', 'After receiving your fairplay exchange ID login credentials on WhatsApp, visit the platform, enter your username and password and start betting immediately.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_4_q', 'How do I contact the fairplay exchange ID number?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_4_a', 'The fairplay exchange ID number is the customer care contact for your account. Click the WhatsApp button on this page or save the number to reach our support team 24/7 for sign up help, deposits, withdrawals or any account related query.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_5_q', 'Is fairplay exchange ID india safe to use?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_5_a', 'Yes, your fairplay exchange ID india account from Radhey Book is completely safe. We use SSL encryption and secure payment gateways to protect your data and funds at all times.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_6_q', 'Who is the best Fairplay exchange ID provider in India?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_6_a', 'Radhey Book is one of the most trusted Fairplay exchange ID provider options in India with 7+ years of experience, instant activation, fast withdrawals and 24/7 WhatsApp support.') !!}</p></div></div>
        </div>
    </div>
</section>

@endsection
