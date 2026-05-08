@extends('layouts.app')

@section('meta_title', $meta_title ?? 'Online Cricket ID. Get Instant Cricket Bookie WhatsApp Number. Radhey Book')
@section('meta_description', $meta_description ?? 'Get your online cricket ID instantly from Radhey Book. Trusted cricket bookie WhatsApp number, online cricket satta ID and 24/7 customer care for every match across India.')
@section('meta_keywords', $meta_keywords ?? 'online cricket ID, cricket betting ID, cricket bookie whatsapp number, online cricket satta ID, cricket betting customer care number, cricket betting customer ID provider')

@section('content')

@php
    $waLink = 'https://linktr.ee/radheybook';
@endphp

{{-- HERO --}}
<section class="hero-section" id="hero" style="background: url('{{ asset('images/Artboard 2 radhe book banner.png') }}') center/cover no-repeat;">
    <div class="hero-overlay" style="background: rgba(0,0,0,0.55);"></div>
    <div class="hero-content container">
        <div class="hero-badge"><span class="badge-pulse"></span> {!! $page->section('hero_badge', 'Trusted Online Cricket ID Provider') !!}</div>
        <h1 class="hero-title">{!! $page->section('hero_title', 'Get Your <span class="text-gold">Online Cricket ID</span> Instantly with Radhey Book') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'Radhey Book is the easiest way to get your online cricket ID in India. Reach our cricket bookie WhatsApp number for instant activation, secure payments and 24/7 customer care.') !!}</p>
        <div class="hero-cta"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('hero_btn_text', 'Get Your Online Cricket ID Now') !!}</a></div>
    </div>
</section>

{{-- INTRO --}}
<section class="section" id="intro">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('intro_title', '<span class="text-gold">Online Cricket ID</span> in India') !!}</h2>
            <p class="section-subtitle">{!! $page->section('intro_subtitle', 'Bet on every cricket match with the best odds and 24/7 customer care') !!}</p>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('intro_text_1', 'If you love cricket and want to bet on every match, you need an online cricket ID that is fast, safe and easy to use. Radhey Book is one of the most trusted names in India for cricket betting. With your account from Radhey Book you get full access to live matches, the best odds and real time updates for IPL, T20 World Cup, ODI series and all international and domestic tournaments.') !!}</p>
                    <p>{!! $page->section('intro_text_2', 'Just send a message to our cricket bookie whatsapp number and our team will set you up within minutes. There are no long forms, no document uploads and no app downloads. Whether you want to bet on Mumbai Indians, Chennai Super Kings, RCB or any team you love, your account gives you access to every market on every match.') !!}</p>
                </div>
            </div>
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/TENNIS FOOTBALL AVIATOR/cricket_1.png') }}" alt="Online Cricket ID" style="width:100%;border-radius:16px;" onerror="this.src='{{ asset('images/cricket.png') }}'">
            </div>
        </div>
    </div>
</section>

{{-- WHAT IS --}}
<section class="section section-alt" id="what-is">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('what_is_title', 'What is an <span class="text-gold">Online Cricket Satta ID</span>?') !!}</h2>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/TENNIS FOOTBALL AVIATOR/cricket_2.png') }}" alt="Online Cricket Satta ID" style="width:100%;border-radius:16px;" onerror="this.src='{{ asset('images/cricket.png') }}'">
            </div>
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('what_is_text_1', 'An online cricket satta ID is your personal betting account that gives you access to every cricket match around the world. You can log in from your mobile or desktop, deposit funds, place bets on match winners, top run scorers, top wicket takers, session markets, fancy markets and many more options. Once your account is ready, your login credentials are shared with you on WhatsApp and you can start placing bets within minutes.') !!}</p>
                    <p>{!! $page->section('what_is_text_2', 'Your account also doubles as a cricket betting ID for IPL, T20 World Cup, ODI World Cup, Asia Cup, Big Bash League, Pakistan Super League, England Test series and every other tournament. The same account works on desktop and mobile so you can bet anytime, anywhere without any trouble.') !!}</p>
                </div>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('what_is_btn_text', 'Get Your Online Cricket ID Today') !!}</a></div>
    </div>
</section>

{{-- WHY CHOOSE --}}
<section class="section" id="why-choose" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('why_title', 'Why Radhey Book is the Best <span class="text-gold">Cricket Betting Customer ID Provider</span>?') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3>{!! $page->section('why_1_title', 'Instant Activation') !!}</h3><p>{!! $page->section('why_1_text', 'Your account is activated within 2 to 5 minutes after payment. No waiting so you can bet on the very next match.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>{!! $page->section('why_2_title', 'Verified and Secure') !!}</h3><p>{!! $page->section('why_2_text', 'Every account is fully verified with secure encryption to protect your personal and financial data at all times.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><h3>{!! $page->section('why_3_title', 'Best Cricket Odds') !!}</h3><p>{!! $page->section('why_3_text', 'We offer the best cricket odds in India for every match so you always get great value on every bet you place.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div><h3>{!! $page->section('why_4_title', 'WhatsApp Sign Up') !!}</h3><p>{!! $page->section('why_4_text', 'Sign up through WhatsApp. No forms, no app downloads. Just a simple chat with our team.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div><h3>{!! $page->section('why_5_title', 'Fast Withdrawals') !!}</h3><p>{!! $page->section('why_5_text', 'Withdraw your winnings within 5 minutes to your bank account via UPI, Paytm, PhonePe or bank transfer.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div><h3>{!! $page->section('why_6_title', '24/7 Customer Care') !!}</h3><p>{!! $page->section('why_6_text', 'Our team is available round the clock via WhatsApp and phone to help you with your account anytime.') !!}</p></div>
        </div>
    </div>
</section>

{{-- WHATSAPP NUMBER --}}
<section class="section" id="whatsapp">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('whatsapp_title', '<span class="text-gold">Cricket Bookie WhatsApp Number</span>') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('whatsapp_text', 'Our cricket bookie whatsapp number is your fastest way to get a new account, request a deposit, place a bet or get login help. The team is online 24/7 and every message is answered within seconds. You can also use the same number for withdrawals, bonus claims and any other account related query. No forms, no waiting, just a simple chat.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('whatsapp_btn_text', 'Chat on WhatsApp Now') !!}</a></div>
    </div>
</section>

{{-- STEPS --}}
<section class="section section-alt" id="steps">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('steps_title', 'How to Get Your <span class="text-gold">Online Cricket ID</span>?') !!}</h2>
            <p class="section-subtitle">{!! $page->section('steps_subtitle', 'The fastest way to get your account in India is through WhatsApp') !!}</p>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(250px,1fr));">
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">1</span></div><h3>{!! $page->section('step_1_title', 'Click on WhatsApp') !!}</h3><p>{!! $page->section('step_1_text', 'Click the WhatsApp button on this page to connect directly with our support team.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">2</span></div><h3>{!! $page->section('step_2_title', 'Send Your Request') !!}</h3><p>{!! $page->section('step_2_text', 'Send a simple message saying Hi I want an Online Cricket ID and our team will respond within seconds.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">3</span></div><h3>{!! $page->section('step_3_title', 'Share Details and Deposit') !!}</h3><p>{!! $page->section('step_3_text', 'Share your name and contact number then make your first deposit using UPI, Paytm, PhonePe or bank transfer.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">4</span></div><h3>{!! $page->section('step_4_title', 'Receive Your ID') !!}</h3><p>{!! $page->section('step_4_text', 'Within 2 to 5 minutes your ID and login credentials will be shared with you. You can start betting.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">5</span></div><h3>{!! $page->section('step_5_title', 'Login and Start Betting') !!}</h3><p>{!! $page->section('step_5_text', 'Log in with your credentials and start placing bets on live matches.') !!}</p></div>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('steps_btn_text', 'Start My Online Cricket ID Now') !!}</a></div>
    </div>
</section>

{{-- CUSTOMER CARE --}}
<section class="section" id="care">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('care_title', '<span class="text-gold">Cricket Betting Customer Care Number</span>') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('care_text_1', 'Our cricket betting customer care number is available 24 hours a day, 7 days a week. Whether you need help with sign up, login, deposits, withdrawals, bonus claims or any other account related query, our team is just one message away. Every concern is resolved in minutes so you never miss a match.') !!}</p>
            <p>{!! $page->section('care_text_2', 'As a trusted cricket betting customer ID provider, Radhey Book has helped lakhs of users across India enjoy safe and fast cricket betting. The same support number works during big match days, IPL season, World Cup nights and every regular fixture in between.') !!}</p>
        </div>
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

{{-- CTA --}}
<section class="section" id="cta">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('cta_title', 'Ready for Your <span class="text-gold">Online Cricket ID</span>?') !!}</h2></div>
        <div class="content-block" style="max-width:900px;margin:0 auto;text-align:center;">
            <p>{!! $page->section('cta_text', 'Join thousands of cricket fans who trust Radhey Book as their preferred betting partner. Whether you want an account for IPL, T20 World Cup, BBL or any other tournament, we have got you covered. Get your account today with instant activation and 24/7 WhatsApp support.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('cta_btn_text', 'Get Your Online Cricket ID Now') !!}</a></div>
    </div>
</section>

{{-- FAQ --}}
<section class="section" id="faq">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('faq_title', 'Frequently Asked <span class="text-gold">Questions</span>') !!}</h2></div>
        <div class="faq-list" style="max-width:800px;margin:0 auto;">
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_1_q', 'What is an online cricket ID?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_1_a', 'It is your personal betting account that lets you bet on IPL, T20 World Cup, ODI series and every cricket tournament. You can log in, deposit, place bets and withdraw winnings safely.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_2_q', 'How do I get a cricket betting ID?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_2_a', 'Click the WhatsApp button on this page, send your request, make a small deposit and your account is activated within 2 to 5 minutes.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_3_q', 'What is the cricket bookie WhatsApp number?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_3_a', 'Our cricket bookie WhatsApp number is available on this page 24/7. Reach out anytime for sign ups, deposits, withdrawals and any account related help.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_4_q', 'Is an online cricket satta ID safe?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_4_a', 'Yes. Every online cricket satta ID from Radhey Book is backed by SSL encryption and secure payment gateways. Your data and funds are fully protected.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_5_q', 'How can I reach the cricket betting customer care number?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_5_a', 'Our cricket betting customer care number is available on WhatsApp 24/7. You can also reach the team via phone for any urgent help.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_6_q', 'Are you a trusted cricket betting customer ID provider?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_6_a', 'Yes. Radhey Book is one of the most trusted cricket betting customer ID provider options in India with 7+ years of safe and fast service.') !!}</p></div></div>
        </div>
    </div>
</section>

@endsection
