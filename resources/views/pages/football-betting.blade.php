@extends('layouts.app')

@section('meta_title', $meta_title ?? 'Live Football Betting ID. Instant Football Betting ID in India. Radhey Book')
@section('meta_description', $meta_description ?? 'Get your live football betting ID instantly from Radhey Book. Trusted football betting ID provider in India with fast login, safe payments and 24/7 WhatsApp support.')
@section('meta_keywords', $meta_keywords ?? 'live football betting ID, instant football betting ID, football betting ID india, football betting ID india login, football betting ID provider india, football betting ID provider')

@section('content')

@php
    $waLink = 'https://linktr.ee/radheybook';
@endphp

{{-- HERO --}}
<section class="hero-section" id="hero" style="background: url('{{ asset('images/TENNIS FOOTBALL AVIATOR/football_banner_2.png') }}') center/cover no-repeat;">
    <div class="hero-overlay" style="background: rgba(0,0,0,0.55);"></div>
    <div class="hero-content container">
        <div class="hero-badge"><span class="badge-pulse"></span> {!! $page->section('hero_badge', 'Trusted Football Betting ID Provider') !!}</div>
        <h1 class="hero-title">{!! $page->section('hero_title', 'Get Your <span class="text-gold">Live Football Betting ID</span> Instantly with Radhey Book') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'Radhey Book is the fastest way to get your instant football betting ID in India. Bet on Premier League, La Liga, Champions League and every major match with 24/7 WhatsApp support.') !!}</p>
        <div class="hero-cta"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('hero_btn_text', 'Get Your Football Betting ID Now') !!}</a></div>
    </div>
</section>

{{-- INTRO --}}
<section class="section" id="intro">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('intro_title', '<span class="text-gold">Live Football Betting ID</span> in India') !!}</h2>
            <p class="section-subtitle">{!! $page->section('intro_subtitle', 'Bet on every kick of every major football match with the best live odds in India') !!}</p>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('intro_text_1', 'If you follow football and want to bet on every match, you need a live football betting ID that is fast, safe and simple to use. Radhey Book is one of the most trusted names in India for football betting. With your account you get full access to live matches, the best odds and real time updates for the English Premier League, La Liga, Serie A, Bundesliga, UEFA Champions League, FIFA World Cup, Euros and all major leagues.') !!}</p>
                    <p>{!! $page->section('intro_text_2', 'Radhey Book is a leading football betting ID provider that has helped thousands of fans get their accounts within minutes. The whole process is done through WhatsApp so there are no long forms, no document uploads and no app downloads. Just a simple chat with our team and you are ready to bet.') !!}</p>
                </div>
            </div>
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/football.png') }}" alt="Live Football Betting ID" style="width:100%;border-radius:16px;" onerror="this.src='{{ asset('images/gold bet exchange.png') }}'" loading="lazy" decoding="async">
            </div>
        </div>
    </div>
</section>

{{-- WHAT IS --}}
<section class="section section-alt" id="what-is">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('what_is_title', 'What is an <span class="text-gold">Instant Football Betting ID</span>?') !!}</h2>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/the hundred.png') }}" alt="Instant Football Betting ID" style="width:100%;border-radius:16px;" onerror="this.src='{{ asset('images/gold bet exchange.png') }}'" loading="lazy" decoding="async">
            </div>
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('what_is_text_1', 'An instant football betting ID is your personal betting account that is activated in just a few minutes. You can log in from mobile or desktop, deposit funds, place bets on match winners, first goal scorers, total goals, both teams to score, correct score and many more markets. Once your account is ready, your login credentials are shared with you on WhatsApp.') !!}</p>
                    <p>{!! $page->section('what_is_text_2', 'Your football betting ID india account works for every major tournament including the World Cup, Euros, Copa America and all club leagues. You can also bet in play on live matches with real time updated odds.') !!}</p>
                </div>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('what_is_btn_text', 'Get Your Football Betting ID Today') !!}</a></div>
    </div>
</section>

{{-- WHY CHOOSE --}}
<section class="section" id="why-choose" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('why_title', 'Why Radhey Book is the Best <span class="text-gold">Football Betting ID Provider</span>?') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3>{!! $page->section('why_1_title', 'Instant Activation') !!}</h3><p>{!! $page->section('why_1_text', 'Your account is activated within 2 to 5 minutes after payment. No waiting so you can bet on the next kickoff.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>{!! $page->section('why_2_title', 'Verified and Secure') !!}</h3><p>{!! $page->section('why_2_text', 'Every account is fully verified with secure encryption to protect your personal and financial data at all times.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><h3>{!! $page->section('why_3_title', 'Best Football Odds') !!}</h3><p>{!! $page->section('why_3_text', 'We offer the best football odds in India for every match so you always get great value on every bet you place.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div><h3>{!! $page->section('why_4_title', 'WhatsApp Sign Up') !!}</h3><p>{!! $page->section('why_4_text', 'Sign up through WhatsApp. No forms, no app downloads. Just a simple chat with our team.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div><h3>{!! $page->section('why_5_title', 'Fast Withdrawals') !!}</h3><p>{!! $page->section('why_5_text', 'Withdraw your winnings within 5 minutes to your bank account via UPI, Paytm, PhonePe or bank transfer.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div><h3>{!! $page->section('why_6_title', '24/7 Support') !!}</h3><p>{!! $page->section('why_6_text', 'Our team is available round the clock via WhatsApp and phone to help you with your account anytime.') !!}</p></div>
        </div>
    </div>
</section>

{{-- LOGIN --}}
<section class="section" id="login">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('login_title', '<span class="text-gold">Football Betting ID India Login</span>') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('login_text_1', 'Once your account is ready, the football betting ID india login process is very simple. Visit the platform, enter your username and password and you are in. Your dashboard shows live matches, upcoming fixtures, your bet history and your balance. If you ever face any issue our support team is just one WhatsApp message away.') !!}</p>
            <p>{!! $page->section('login_text_2', 'We help with password recovery, account verification and any other login related queries so you never miss a match. You can reset your password anytime by reaching out to our support on WhatsApp. Always keep your password safe and never share it with anyone to keep your account secure.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('login_btn_text', 'Get Login Help on WhatsApp') !!}</a></div>
    </div>
</section>

{{-- INDIA PROVIDER --}}
<section class="section section-alt" id="india">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('india_title', '<span class="text-gold">Football Betting ID Provider India</span>') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('india_text_1', 'As a leading football betting ID provider india, Radhey Book understands what Indian fans want. Every account works in INR and supports UPI, Paytm, PhonePe, Google Pay and bank transfer. Our customer support speaks Hindi, English and many regional languages so you can get help whenever you need it.') !!}</p>
            <p>{!! $page->section('india_text_2', 'We serve users across every state in India including Maharashtra, Delhi, Karnataka, Tamil Nadu, Uttar Pradesh, West Bengal, Gujarat, Rajasthan and the rest. The whole process is designed for Indian users which is why thousands of new players trust us every month.') !!}</p>
        </div>
    </div>
</section>

{{-- STEPS --}}
<section class="section" id="steps">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('steps_title', 'How to Get Your <span class="text-gold">Football Betting ID</span>?') !!}</h2>
            <p class="section-subtitle">{!! $page->section('steps_subtitle', 'The fastest way to get your account in India is through WhatsApp') !!}</p>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(250px,1fr));">
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">1</span></div><h3>{!! $page->section('step_1_title', 'Click on WhatsApp') !!}</h3><p>{!! $page->section('step_1_text', 'Click the WhatsApp button on this page to connect directly with our support team.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">2</span></div><h3>{!! $page->section('step_2_title', 'Send Your Request') !!}</h3><p>{!! $page->section('step_2_text', 'Send a simple message saying Hi I want a Football Betting ID and our team will respond within seconds.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">3</span></div><h3>{!! $page->section('step_3_title', 'Share Details and Deposit') !!}</h3><p>{!! $page->section('step_3_text', 'Share your name and contact number then make your first deposit using UPI, Paytm, PhonePe or bank transfer.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">4</span></div><h3>{!! $page->section('step_4_title', 'Receive Your ID') !!}</h3><p>{!! $page->section('step_4_text', 'Within 2 to 5 minutes your ID and login credentials will be shared with you. You can start betting.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">5</span></div><h3>{!! $page->section('step_5_title', 'Login and Start Betting') !!}</h3><p>{!! $page->section('step_5_text', 'Log in with your credentials and start placing bets on live matches.') !!}</p></div>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('steps_btn_text', 'Start My Football Betting ID Now') !!}</a></div>
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

{{-- CTA --}}
<section class="section" id="cta">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('cta_title', 'Ready for Your <span class="text-gold">Live Football Betting ID</span>?') !!}</h2></div>
        <div class="content-block" style="max-width:900px;margin:0 auto;text-align:center;">
            <p>{!! $page->section('cta_text', 'Join thousands of fans who trust Radhey Book as their preferred betting partner. Whether you want an account for Premier League, La Liga, Champions League or the World Cup, we have got you covered. Get your account today with instant activation and 24/7 WhatsApp support.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('cta_btn_text', 'Get Your Football Betting ID Now') !!}</a></div>
    </div>
</section>

{{-- FAQ --}}
<section class="section" id="faq">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('faq_title', 'Frequently Asked <span class="text-gold">Questions</span>') !!}</h2></div>
        <div class="faq-list" style="max-width:800px;margin:0 auto;">
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_1_q', 'What is a live football betting ID?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_1_a', 'It is your personal betting account that lets you bet on live football matches in Premier League, La Liga, Champions League and every major tournament.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_2_q', 'How fast is the instant football betting ID setup?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_2_a', 'Your account is ready within 2 to 5 minutes after you send a WhatsApp message and complete your deposit.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_3_q', 'How do I get a football betting ID india account?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_3_a', 'Just click the WhatsApp button on this page, send your request and pay a small deposit. Your account is activated within minutes.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_4_q', 'How does football betting ID india login work?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_4_a', 'Use the username and password we send you on WhatsApp to log in on any device. Our team is online 24/7 for any login help you may need.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_5_q', 'Who is the best football betting ID provider india?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_5_a', 'Radhey Book is one of the most trusted providers in India with 7+ years of service. We offer instant activation, fast withdrawals and 24/7 WhatsApp support.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_6_q', 'Is my account safe with Radhey Book?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_6_a', 'Yes. Every account is backed by SSL encryption and secure payment gateways so your data and funds are fully protected at all times.') !!}</p></div></div>
        </div>
    </div>
</section>

@endsection
