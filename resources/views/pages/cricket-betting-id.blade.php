@extends('layouts.app')

@section('meta_title', $meta_title ?? 'Cricket Betting ID. Get Instant Online Cricket Betting ID in India. Radhey Book')
@section('meta_description', $meta_description ?? 'Get your cricket betting ID instantly from Radhey Book. Trusted online cricket betting ID provider in India for IPL, T20 World Cup and all major matches with WhatsApp support.')
@section('meta_keywords', $meta_keywords ?? 'cricket betting ID, online cricket betting ID, online cricket betting ID india, cricket betting ID provider, cricket betting ID provider IPL, cricket betting ID provider india, instant cricket ID, whatsapp betting id')

@section('content')

@php
    $waLink = 'https://wa.me/' . ($siteSettings['whatsapp_number'] ?? '919876543210') . '?text=Hi%20I%20want%20a%20Cricket%20Betting%20ID';
@endphp

{{-- HERO --}}
<section class="hero-section" id="hero" style="background: url('{{ asset('images/Artboard 2 radhe book banner.png') }}') center/cover no-repeat;">
    <div class="hero-overlay" style="background: rgba(0,0,0,0.55);"></div>
    <div class="hero-content container">
        <div class="hero-badge"><span class="badge-pulse"></span> {!! $page->section('hero_badge', 'Trusted Cricket Betting ID Provider') !!}</div>
        <h1 class="hero-title">{!! $page->section('hero_title', 'Get Your <span class="text-gold">Cricket Betting ID</span> Instantly with Radhey Book') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'Radhey Book is the easiest way to get your online cricket betting ID in India. Enjoy instant activation, secure payments and 24/7 WhatsApp support for IPL, T20 World Cup and every major match.') !!}</p>
        <div class="hero-cta"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('hero_btn_text', 'Get Your Cricket Betting ID Now') !!}</a></div>
    </div>
</section>

{{-- INTRO --}}
<section class="section" id="intro">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('intro_title', '<span class="text-gold">Cricket Betting ID</span> in India') !!}</h2>
            <p class="section-subtitle">{!! $page->section('intro_subtitle', 'Get Your Cricket Betting ID Today and Bet on IPL, T20 World Cup, BBL and Every Match Live') !!}</p>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('intro_text_1', 'If you love cricket and want to bet on every match, you need a cricket betting ID that is fast, safe and simple to use. Radhey Book is one of the most trusted names in India for cricket betting. With your account from Radhey Book you get full access to live matches, the best odds and real time updates for IPL, T20 World Cup, ODI series and all international and domestic tournaments. The whole process is done through WhatsApp so there are no long forms and no hassle.') !!}</p>
                    <p>{!! $page->section('intro_text_2', 'Radhey Book is a leading cricket betting ID provider that has helped lakhs of fans get their accounts within minutes. Whether you want to bet on Mumbai Indians, Chennai Super Kings, RCB or any team you love, you get access to every market on every match.') !!}</p>
                </div>
            </div>
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/TENNIS FOOTBALL AVIATOR/cricket_3.png') }}" alt="Cricket Betting ID" style="width:100%;border-radius:16px;" onerror="this.src='{{ asset('images/cricket.png') }}'">
            </div>
        </div>
    </div>
</section>

{{-- WHAT IS --}}
<section class="section section-alt" id="what-is">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('what_is_title', 'What is a <span class="text-gold">Cricket Betting ID</span>?') !!}</h2>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/TENNIS FOOTBALL AVIATOR/cricket_4.png') }}" alt="Cricket Betting" style="width:100%;border-radius:16px;" onerror="this.src='{{ asset('images/cricket.png') }}'">
            </div>
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('what_is_text_1', 'A cricket betting ID is your personal betting account that gives you access to every cricket match around the world. You can log in from your mobile or desktop, deposit funds, place bets on match winners, top run scorers, top wicket takers, session markets, fancy markets and many more options. Once your account is ready, your login credentials are shared with you on WhatsApp and you can start placing bets within minutes.') !!}</p>
                    <p>{!! $page->section('what_is_text_2', 'Getting your online cricket betting ID means you can bet on IPL, T20 World Cup, ODI World Cup, Asia Cup, Big Bash League, Pakistan Super League, England Test series and every other tournament. The same account works on desktop and mobile so you can bet anytime, anywhere without any trouble.') !!}</p>
                </div>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('what_is_btn_text', 'Get Your Cricket Betting ID Today') !!}</a></div>
    </div>
</section>

{{-- WHY CHOOSE --}}
<section class="section" id="why-choose" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('why_title', 'Why Radhey Book is the Best <span class="text-gold">Cricket Betting ID Provider</span>?') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3>{!! $page->section('why_1_title', 'Instant Activation') !!}</h3><p>{!! $page->section('why_1_text', 'Your account is activated within 2 to 5 minutes after payment. No waiting so you can bet on the very next match.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>{!! $page->section('why_2_title', 'Verified and Secure') !!}</h3><p>{!! $page->section('why_2_text', 'Every account we provide is fully verified with secure encryption to protect your personal and financial data at all times.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><h3>{!! $page->section('why_3_title', 'Best Cricket Odds') !!}</h3><p>{!! $page->section('why_3_text', 'We offer the best cricket odds in India for every match so you always get great value on every bet you place.') !!}</p></div>
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
            <h2 class="section-title">{!! $page->section('steps_title', 'How to Get Your <span class="text-gold">Online Cricket Betting ID India</span>?') !!}</h2>
            <p class="section-subtitle">{!! $page->section('steps_subtitle', 'The fastest way to get your account in India is through WhatsApp') !!}</p>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(250px,1fr));">
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">1</span></div><h3>{!! $page->section('step_1_title', 'Click on WhatsApp') !!}</h3><p>{!! $page->section('step_1_text', 'Click the WhatsApp button on this page to connect directly with our support team.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">2</span></div><h3>{!! $page->section('step_2_title', 'Send Your Request') !!}</h3><p>{!! $page->section('step_2_text', 'Send a simple message saying Hi I want a Cricket Betting ID and our team will respond within seconds.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">3</span></div><h3>{!! $page->section('step_3_title', 'Share Details and Deposit') !!}</h3><p>{!! $page->section('step_3_text', 'Share your name and contact number then make your first deposit using UPI, Paytm, PhonePe or bank transfer.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">4</span></div><h3>{!! $page->section('step_4_title', 'Receive Your ID') !!}</h3><p>{!! $page->section('step_4_text', 'Within 2 to 5 minutes your ID and login credentials will be shared with you. You can start betting.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">5</span></div><h3>{!! $page->section('step_5_title', 'Login and Start Betting') !!}</h3><p>{!! $page->section('step_5_text', 'Log in with your credentials and start placing bets on live matches.') !!}</p></div>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('steps_btn_text', 'Start My Cricket Betting ID Now') !!}</a></div>
    </div>
</section>

{{-- IPL FOCUS --}}
<section class="section section-alt" id="ipl">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('ipl_title', '<span class="text-gold">Cricket Betting ID Provider IPL</span>') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('ipl_text_1', 'IPL is the biggest cricket league in India and lakhs of fans look for a trusted cricket betting ID provider IPL every season. Radhey Book has been serving IPL fans for over 7 years with the fastest sign up, the best odds and full WhatsApp support during every match. From the first ball of the season to the final of the playoffs, you can place bets on match winners, top batsmen, total fours, total sixes, fall of wickets and many more markets.') !!}</p>
            <p>{!! $page->section('ipl_text_2', 'During IPL season our team is online 24/7 to help with sign ups, deposits and withdrawals. There is no waiting and no missed matches. You get instant access to every game so you never miss the action of your favourite team.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('ipl_btn_text', 'Get Your IPL Account Now') !!}</a></div>
    </div>
</section>

{{-- INDIA --}}
<section class="section" id="india">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('india_title', '<span class="text-gold">Cricket Betting ID Provider India</span>') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('india_text_1', 'As a leading cricket betting ID provider india, Radhey Book understands what Indian users want. Every account works in INR and supports all the popular payment methods like UPI, Paytm, PhonePe, Google Pay and bank transfer. Our customer support team speaks Hindi, English and many regional languages so you can get help whenever you need it.') !!}</p>
            <p>{!! $page->section('india_text_2', 'We serve users across every state in India including Maharashtra, Delhi, Karnataka, Tamil Nadu, Uttar Pradesh, West Bengal, Gujarat, Rajasthan and the rest. The whole process is designed for Indian users which is why thousands of new players trust us every month.') !!}</p>
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

{{-- SECURITY --}}
<section class="section" id="security">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('security_title', 'Is Your <span class="text-gold">Cricket Betting ID</span> Safe?') !!}</h2></div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('security_text', 'Yes. Every account we provide is backed by SSL encryption ensuring your personal and financial data are fully protected. We use secure payment gateways for every transaction and never store sensitive banking details. Always reach us through our official WhatsApp channels for any account related help. By following these simple precautions you enjoy a completely safe and fun cricket betting experience with Radhey Book.') !!}</p>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="section" id="cta" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('cta_title', 'Ready to Get Your <span class="text-gold">Cricket Betting ID</span>?') !!}</h2></div>
        <div class="content-block" style="max-width:900px;margin:0 auto;text-align:center;">
            <p>{!! $page->section('cta_text', 'Join thousands of cricket fans who trust Radhey Book as their preferred betting partner. Whether you want an account for IPL, T20 World Cup, BBL or any other tournament, we have got you covered. Get your account today with instant activation and 24/7 WhatsApp support. One simple message is all it takes to get started.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('cta_btn_text', 'Get Your Cricket Betting ID Now') !!}</a></div>
    </div>
</section>

{{-- FAQ --}}
<section class="section" id="faq">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('faq_title', 'Frequently Asked <span class="text-gold">Questions</span>') !!}</h2></div>
        <div class="faq-list" style="max-width:800px;margin:0 auto;">
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_1_q', 'What is a Cricket Betting ID?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_1_a', 'It is your personal betting account that lets you bet on IPL, T20 World Cup, ODI series and every cricket tournament. You can log in, deposit, place bets and withdraw winnings safely.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_2_q', 'How can I get an online cricket betting ID in India?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_2_a', 'Getting your online cricket betting ID india is very simple. Click the WhatsApp button on this page, send your request, make a small deposit and your account is activated within 2 to 5 minutes.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_3_q', 'Who is the best cricket betting ID provider?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_3_a', 'Radhey Book is one of the most trusted providers in India with 7+ years of service. We offer instant activation, fast withdrawals, safe payments and round the clock WhatsApp support.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_4_q', 'Are you a trusted cricket betting ID provider IPL season?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_4_a', 'Yes. We are a trusted cricket betting ID provider IPL partner for thousands of users every season. Our support team is online 24/7 during IPL to help with sign ups, deposits and withdrawals.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_5_q', 'Why choose a cricket betting ID provider india like Radhey Book?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_5_a', 'A trusted cricket betting ID provider india like Radhey Book offers INR support, local payment methods, Hindi customer care and fast UPI withdrawals. You get the best experience tailored for Indian users.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_6_q', 'Is my account safe with Radhey Book?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_6_a', 'Yes. Every account is backed by SSL encryption and secure payment gateways so your data and funds are fully protected. We have served users for over 7 years without any issues.') !!}</p></div></div>
        </div>
    </div>
</section>

@endsection
