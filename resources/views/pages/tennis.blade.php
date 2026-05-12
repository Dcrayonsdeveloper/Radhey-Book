@extends('layouts.app')

@section('meta_title', $meta_title ?? 'Tennis Betting ID. Get Instant Tennis Betting ID Online in India. Radhey Book')
@section('meta_description', $meta_description ?? 'Get your tennis betting ID instantly from Radhey Book. Trusted tennis betting ID provider in India with online sign up, secure login and 24/7 WhatsApp support.')
@section('meta_keywords', $meta_keywords ?? 'tennis betting ID, tennis betting ID provider, tennis betting ID india, tennis betting ID india login, tennis betting ID online, tennis betting ID contact number, online tennis id')

@section('content')

@php
    $waLink = 'https://linktr.ee/radheybook';
@endphp

{{-- HERO --}}
<section class="hero-section" id="hero" style="background: url('{{ asset('images/TENNIS FOOTBALL AVIATOR/tennis_banner_2.png') }}') center/cover no-repeat;">
    <div class="hero-overlay" style="background: rgba(0,0,0,0.55);"></div>
    <div class="hero-content container">
        <div class="hero-badge"><span class="badge-pulse"></span> {!! $page->section('hero_badge', 'Trusted Tennis Betting ID Provider') !!}</div>
        <h1 class="hero-title">{!! $page->section('hero_title', 'Get Your <span class="text-gold">Tennis Betting ID</span> Online with Radhey Book') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'Radhey Book is the easiest way to get your tennis betting ID online in India. Enjoy instant activation, secure payments and 24/7 WhatsApp support for every Grand Slam and ATP match.') !!}</p>
        <div class="hero-cta"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('hero_btn_text', 'Get Your Tennis Betting ID Now') !!}</a></div>
    </div>
</section>

{{-- INTRO --}}
<section class="section" id="intro">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('intro_title', '<span class="text-gold">Tennis Betting ID</span> in India') !!}</h2>
            <p class="section-subtitle">{!! $page->section('intro_subtitle', 'Get Your Tennis Betting ID Today and Start Betting on Wimbledon, US Open, French Open and More') !!}</p>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('intro_text_1', 'If you love tennis and want to bet on your favourite players then you need a tennis betting ID that is fast, safe and simple to use. Radhey Book is one of the most trusted names in India for cricket and tennis. With your account you get full access to live matches, the best odds and real time updates for ATP, WTA, Grand Slams and all major tournaments. The whole process is done through WhatsApp so you do not have to fill long forms or go through any hassle.') !!}</p>
                    <p>{!! $page->section('intro_text_2', 'Radhey Book is a leading tennis betting ID provider that has helped thousands of fans get their accounts within minutes. Whether you want to bet on Novak Djokovic, Carlos Alcaraz, Iga Swiatek or any of your favourite players, you get access to every market on every court. You can also bet live while the match is going on and enjoy the best in play odds in India.') !!}</p>
                </div>
            </div>
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/TENNIS FOOTBALL AVIATOR/tennis_1.png') }}" alt="Tennis Betting ID" style="width:100%;border-radius:16px;" onerror="this.src='{{ asset('images/tennis.png') }}'" loading="lazy" decoding="async">
            </div>
        </div>
    </div>
</section>

{{-- WHAT IS --}}
<section class="section section-alt" id="what-is">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('what_is_title', 'What is a <span class="text-gold">Tennis Betting ID</span>?') !!}</h2>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/TENNIS FOOTBALL AVIATOR/tennis_banner_2.png') }}" alt="Tennis Betting" style="width:100%;border-radius:16px;" onerror="this.src='{{ asset('images/tennis.png') }}'" loading="lazy" decoding="async">
            </div>
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('what_is_text_1', 'A tennis betting ID is your personal betting account that gives you access to all matches and tournaments around the world. You can log in from mobile or desktop, deposit funds, place bets on match winners, set winners, handicaps and many more markets. Once your account is ready, your login credentials are shared with you on WhatsApp and you can start placing bets within minutes.') !!}</p>
                    <p>{!! $page->section('what_is_text_2', 'Getting your tennis betting ID online means you can bet on every major event including the Australian Open, French Open, Wimbledon and US Open. The same account gives you access to ATP Masters, WTA Tour and other leagues. You can log in from desktop and mobile so you can bet anytime anywhere without any trouble.') !!}</p>
                </div>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('what_is_btn_text', 'Get Your Tennis Betting ID Today') !!}</a></div>
    </div>
</section>

{{-- WHY CHOOSE --}}
<section class="section" id="why-choose" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('why_title', 'Why Radhey Book is the Best <span class="text-gold">Tennis Betting ID Provider</span>?') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3>{!! $page->section('why_1_title', 'Instant Activation') !!}</h3><p>{!! $page->section('why_1_text', 'Your Tennis Betting ID is activated within 2 to 5 minutes after payment. No waiting so you can start betting on the very next match.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>{!! $page->section('why_2_title', 'Verified and Secure') !!}</h3><p>{!! $page->section('why_2_text', 'Every account we provide is fully verified with secure encryption to protect your personal and financial data at all times.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><h3>{!! $page->section('why_3_title', 'Best Tennis Odds') !!}</h3><p>{!! $page->section('why_3_text', 'We offer the best tennis odds in India for every tournament so you always get great value on every bet you place.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div><h3>{!! $page->section('why_4_title', 'WhatsApp Sign Up') !!}</h3><p>{!! $page->section('why_4_text', 'Sign up through WhatsApp. No forms, no app downloads. Just a simple chat with our team.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div><h3>{!! $page->section('why_5_title', 'Fast Withdrawals') !!}</h3><p>{!! $page->section('why_5_text', 'Withdraw your winnings within 5 minutes directly to your bank account via UPI, Paytm, PhonePe or bank transfer.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div><h3>{!! $page->section('why_6_title', '24/7 Support') !!}</h3><p>{!! $page->section('why_6_text', 'Our team is available round the clock via WhatsApp and phone to help you with your account anytime.') !!}</p></div>
        </div>
    </div>
</section>

{{-- STEPS --}}
<section class="section" id="steps">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('steps_title', 'How to Get Your <span class="text-gold">Tennis Betting ID Online</span>?') !!}</h2>
            <p class="section-subtitle">{!! $page->section('steps_subtitle', 'The fastest way to get your Tennis Betting ID in India is through WhatsApp') !!}</p>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(250px,1fr));">
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">1</span></div><h3>{!! $page->section('step_1_title', 'Click on WhatsApp') !!}</h3><p>{!! $page->section('step_1_text', 'Click the WhatsApp button on this page to connect directly with our support team.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">2</span></div><h3>{!! $page->section('step_2_title', 'Send Your Request') !!}</h3><p>{!! $page->section('step_2_text', 'Send a simple message saying Hi I want a Tennis Betting ID and our team will respond within seconds.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">3</span></div><h3>{!! $page->section('step_3_title', 'Share Details and Deposit') !!}</h3><p>{!! $page->section('step_3_text', 'Share your name and contact number then make your first deposit using UPI, Paytm, PhonePe or bank transfer.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">4</span></div><h3>{!! $page->section('step_4_title', 'Receive Your ID') !!}</h3><p>{!! $page->section('step_4_text', 'Within 2 to 5 minutes your ID and login credentials will be shared with you. You can start betting.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">5</span></div><h3>{!! $page->section('step_5_title', 'Login and Start Betting') !!}</h3><p>{!! $page->section('step_5_text', 'Log in with your credentials and start placing bets on live matches.') !!}</p></div>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('steps_btn_text', 'Get Your Tennis Betting ID Online Now') !!}</a></div>
    </div>
</section>

{{-- LOGIN HELP --}}
<section class="section" id="login-help">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('login_title', '<span class="text-gold">Tennis Betting ID India Login</span> Help') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('login_text_1', 'Once you have your account, the tennis betting ID india login process is simple. Just visit the platform, enter your username and password and you are in. Your dashboard shows you live matches, upcoming tournaments, your bet history and your balance. If you ever face any issue, our support team is just one WhatsApp message away. We help with password recovery, account verification and any other login related queries so you never miss a match.') !!}</p>
            <p>{!! $page->section('login_text_2', 'We make sure your login details are shared securely on WhatsApp and remain confidential. You can reset your password anytime by reaching out to our support on the tennis betting ID contact number. We always recommend that you keep your password safe and never share it with anyone. By following these simple steps you can keep your account secure all year round.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('login_btn_text', 'Get Login Help on WhatsApp') !!}</a></div>
    </div>
</section>

{{-- PAYMENTS --}}
<section class="section" id="payments" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('payments_title', 'Secure <span class="text-gold">Payment Methods</span>') !!}</h2></div>
        <div class="features-grid" style="grid-template-columns:repeat(4,1fr);max-width:800px;margin:0 auto;">
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/upi.png') }}" alt="UPI" style="width:48px;height:48px;object-fit:contain;" loading="lazy" decoding="async"></div><h3>UPI</h3></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/bank transfer.png') }}" alt="Bank Transfer" style="width:48px;height:48px;object-fit:contain;" loading="lazy" decoding="async"></div><h3>Bank Transfer</h3></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/paytm.png') }}" alt="Paytm" style="width:48px;height:48px;object-fit:contain;" loading="lazy" decoding="async"></div><h3>Paytm</h3></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/phonepe.png') }}" alt="PhonePe" style="width:48px;height:48px;object-fit:contain;" loading="lazy" decoding="async"></div><h3>PhonePe</h3></div>
        </div>
    </div>
</section>

{{-- SECURITY --}}
<section class="section" id="security">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('security_title', 'Is Your <span class="text-gold">Tennis Betting ID</span> Safe?') !!}</h2></div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('security_text', 'Yes. Every account we provide is backed by SSL encryption ensuring your personal and financial data are fully protected. We use secure payment gateways for every transaction and never store sensitive banking details. Always reach us through our official WhatsApp channels for any account related help. By following these simple precautions you enjoy a completely safe and fun tennis betting experience with Radhey Book.') !!}</p>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="section" id="cta" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('cta_title', 'Ready to Get Your <span class="text-gold">Tennis Betting ID Online</span>?') !!}</h2></div>
        <div class="content-block" style="max-width:900px;margin:0 auto;text-align:center;">
            <p>{!! $page->section('cta_text', 'Join thousands of fans who trust Radhey Book as their preferred betting partner. Whether you want an account for Wimbledon, Australian Open, French Open or US Open, we have got you covered. Get your account today with instant activation and 24/7 WhatsApp support. One simple message is all it takes to get started.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('cta_btn_text', 'Get Your Tennis Betting ID Now') !!}</a></div>
    </div>
</section>

{{-- FAQ --}}
<section class="section" id="faq">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('faq_title', 'Frequently Asked <span class="text-gold">Questions</span>') !!}</h2></div>
        <div class="faq-list" style="max-width:800px;margin:0 auto;">
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_1_q', 'What is a Tennis Betting ID?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_1_a', 'It is your personal betting account that lets you place bets on tennis matches, Grand Slams, ATP and WTA tournaments. You can log in, deposit, bet and withdraw winnings safely.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_2_q', 'How can I get a tennis betting ID online in India?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_2_a', 'Click the WhatsApp button on this page, send your request, make a small deposit and your account is activated within 2 to 5 minutes.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_3_q', 'Who is the best tennis betting ID provider?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_3_a', 'Radhey Book is one of the most trusted providers in India. We offer instant activation, fast withdrawals, safe payments and round the clock WhatsApp support.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_4_q', 'How do I access my tennis betting ID india login?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_4_a', 'After receiving your credentials on WhatsApp, visit the platform, enter your username and password and start betting immediately.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_5_q', 'What is the tennis betting ID contact number?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_5_a', 'Our support is available on WhatsApp 24/7. You can reach out anytime for sign up help, login support, deposits, withdrawals and any account related queries.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_6_q', 'Is my tennis betting ID india account safe?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_6_a', 'Yes, your account from Radhey Book is fully safe. We use SSL encryption and secure payment gateways to protect your data and funds at all times.') !!}</p></div></div>
        </div>
    </div>
</section>

@endsection
