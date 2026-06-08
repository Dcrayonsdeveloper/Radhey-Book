@extends('layouts.app')

@section('meta_title',       $meta_title       ?? 'Casino Betting ID. Get Instant Casino Betting ID in India. Radhey Book')
@section('meta_description', $meta_description ?? 'Get your instant casino betting ID in India via WhatsApp with Radhey Book. Verified casino betting ID with quick signup, live casino games, cricket markets and 24/7 support.')
@section('meta_keywords',    $meta_keywords    ?? 'casino betting id, casino betting id whatsapp, casino whatsapp number, instant casino id, casino betting id india, online casino betting id')

@section('content')

@php
    $waLink = 'https://linktr.ee/radheybook';
@endphp

{{-- HERO --}}
<section class="hero-section" id="hero" style="background: url('{{ asset('images/casino banner.png') }}') center/cover no-repeat;">
    <div class="hero-overlay" style="background: rgba(0,0,0,0.55);"></div>
    <div class="hero-content container">
        <div class="hero-badge"><span class="badge-pulse"></span> {!! $page->section('hero_badge', 'India\'s Trusted Casino Betting ID Provider') !!}</div>
        <h1 class="hero-title">{!! $page->section('hero_title', 'Get Instant <span class="text-gold">Casino Betting ID</span> in India') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'Free instant <strong>casino betting ID</strong> via WhatsApp. Verified access to live casino games, cricket markets and sports betting from anywhere in India with secure deposits, faster withdrawals and 24/7 support.') !!}</p>
        <div class="hero-cta"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('hero_btn_text', 'Get Your Casino Betting ID Now') !!}</a></div>
    </div>
</section>

{{-- INTRO --}}
<section class="section" id="intro">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('intro_title', '<span class="text-gold">Casino Betting ID</span> &ndash; Get Instant Casino Betting ID in India') !!}</h2>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('intro_text_1', 'Need a quick and safe way to start online casino betting? Free instant <strong>casino betting ID</strong> via WhatsApp messenger and access to live casino games, sports betting markets and live real time odds from anywhere in India. From a beginner to a seasoned bettor, having a verified <strong>casino betting ID</strong> gives you a safer platform to bet on with easy access to login, hassle-free deposits, and faster withdrawals.') !!}</p>
                    <p>{!! $page->section('intro_text_2', 'Today, most users prefer WhatsApp registration because it is simple, direct, and hassle-free. You don\'t need to wait for account verification or wait any longer to receive your <strong>casino betting ID</strong> in mere minutes &mdash; you can connect directly with a support executive on WhatsApp. Your account provides you with full access to the sport, from live casino games to cricket betting, up to date international tournaments, with secure transactions and round the clock support. Whether you are looking for an instant cricket ID, <strong>whatsapp betting ID</strong> or a reliable betting ID India platform, you can easily start with WhatsApp registration.') !!}</p>
                </div>
            </div>
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/casino.png') }}" alt="Casino Betting ID India" style="width:100%;border-radius:16px;" loading="lazy" decoding="async">
            </div>
        </div>
    </div>
</section>

{{-- WHAT IS --}}
<section class="section section-alt" id="what-is" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('what_is_title', 'What is a <span class="text-gold">Casino Betting ID</span>?') !!}</h2>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/aviator.png') }}" alt="What is a Casino Betting ID" style="width:100%;border-radius:16px;" loading="lazy" decoding="async">
            </div>
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('what_is_text_1', 'A <strong>casino betting ID</strong> is a verified online betting account that enables users to play casino games, bet on live markets, and bet on sports platforms without lengthy verification delays. This process of creating an account, making the initial deposit and then getting onto the game takes a matter of minutes with a quick WhatsApp process.') !!}</p>
                    <p>{!! $page->section('what_is_text_2', 'An instant casino ID is especially useful for players who want quick access during major cricket tournaments or live casino events. Instead of waiting hours for manual approval, users can receive their login credentials instantly through WhatsApp support. A trusted <strong>casino betting ID</strong> also enables you to gain access to secure payment options, live betting alternatives, and customer support as required.') !!}</p>
                </div>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('what_is_btn_text', 'Get Your Casino Betting ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- BENEFITS --}}
<section class="section" id="benefits">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('benefits_title', 'Benefits of Getting <span class="text-gold">Casino Betting ID</span> via WhatsApp') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div>
                <h3>{!! $page->section('benefit_1_title', 'Quick Registration Process') !!}</h3>
                <p>{!! $page->section('benefit_1_text', 'The users can now use WhatsApp to eliminate long registration procedures and get their <strong>casino betting ID</strong> in just a few minutes. You can send a message to the support team available 24/7 and they\'ll help you right away.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div>
                <h3>{!! $page->section('benefit_2_title', 'Easy Communication') !!}</h3>
                <p>{!! $page->section('benefit_2_text', 'Users can talk with the customer support directly and receive support to establish accounts, guidance about the process of deposit, and support with the bets without waiting for the email reply or phone call back.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
                <h3>{!! $page->section('benefit_3_title', 'Fast Deposits and Withdrawals') !!}</h3>
                <p>{!! $page->section('benefit_3_text', 'A WhatsApp-based system helps users complete payment verification quickly. This makes deposits and withdrawals smoother and faster for regular betting activity.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3>{!! $page->section('benefit_4_title', 'Secure and Verified Access') !!}</h3>
                <p>{!! $page->section('benefit_4_text', 'Trusted betting providers use strong verification methods while keeping login credentials shared privately. That way access to your account and your betting wallet feels more safer, and more controlled.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div>
                <h3>{!! $page->section('benefit_5_title', 'Convenient for New Users') !!}</h3>
                <p>{!! $page->section('benefit_5_text', 'People who are just starting and still not familiar with online betting platforms often find WhatsApp support easier. Especially when compared to confusing registration forms, and extra technical steps that can feel a bit much.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- HOW TO GET --}}
<section class="section section-alt" id="how-to-get" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('how_title', 'How to Get Your <span class="text-gold">Casino Betting ID</span> via WhatsApp') !!}</h2>
            <p class="section-subtitle">{!! $page->section('how_subtitle', 'Casino betting ID via WhatsApp is simple, hassle-free, and perfect for beginners. Users don\'t have to go through the lengthy registration pages, they can directly reach support executives and finish in a few easy steps.') !!}</p>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(250px,1fr));">
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">1</span></div>
                <h3>{!! $page->section('how_step_1_title', 'Click on WhatsApp Message') !!}</h3>
                <p>{!! $page->section('how_step_1_text', 'Click the WhatsApp button on this page to connect directly with our team for your <strong>casino betting ID</strong>.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">2</span></div>
                <h3>{!! $page->section('how_step_2_title', 'Send a Message &ndash; "Hi, I Want a Casino Betting ID"') !!}</h3>
                <p>{!! $page->section('how_step_2_text', 'Send a message saying "Hi, I want a <strong>Casino Betting ID</strong>" and our team will respond within seconds with clear instructions.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">3</span></div>
                <h3>{!! $page->section('how_step_3_title', 'Share Basic Details and Make Your First Deposit') !!}</h3>
                <p>{!! $page->section('how_step_3_text', 'Share your name and contact number then make your first deposit using UPI, Paytm, PhonePe or bank transfer.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">4</span></div>
                <h3>{!! $page->section('how_step_4_title', 'Receive Your Betting ID') !!}</h3>
                <p>{!! $page->section('how_step_4_text', 'After successful verification and deposit confirmation, your login information and account details are directly shared without any risk in WhatsApp.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">5</span></div>
                <h3>{!! $page->section('how_step_5_title', 'Login and Start Betting') !!}</h3>
                <p>{!! $page->section('how_step_5_text', 'Log in instantly with the provided username and password and enjoy live casino games, cricket betting markets and various online betting options.') !!}</p>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('how_btn_text', 'Get Your Casino Betting ID on WhatsApp Now') !!}</a>
        </div>
    </div>
</section>

{{-- CASINO BETTING WHATSAPP NUMBER --}}
<section class="section" id="whatsapp-number">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('wa_number_title', 'Casino Betting <span class="text-gold">WhatsApp Number</span>') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('wa_number_text_1', 'Choosing the best <strong>casino betting WhatsApp number</strong> is important as it ensures that you have access to safe betting choices and are able to make safe transactions. A verified WhatsApp support line assists users to create their account fast, resolve payment problems and get immediate support whenever needed.') !!}</p>
            <p>{!! $page->section('wa_number_text_2', 'Most of the betting enthusiasts prefer getting their online <strong>casino betting ID</strong> via WhatsApp for a quick and hassle-free signup process. The support team is available to assist you 24/7 with any login information, deposits, withdrawals, or betting markets. A trusted WhatsApp betting ID service also provides smooth communication and quick activation of users in India.') !!}</p>
        </div>
    </div>
</section>

{{-- TOURNAMENTS --}}
<section class="section section-alt" id="tournaments" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('tournaments_title', '<span class="text-gold">Casino Betting ID</span> for Upcoming Cricket Tournaments') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 010 20M12 2a15.3 15.3 0 000 20"/></svg></div>
                <h3>{!! $page->section('tour_1_title', 'T-20 World Cup') !!}</h3>
                <p>{!! $page->section('tour_1_text', 'This <strong>casino betting ID</strong> allows you to play in the largest cricket betting competition in the world. Place a bet on match winners, highest run scorers, top wicket taker, live innings markets and ball-by-ball odds as the tournament progresses.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
                <h3>{!! $page->section('tour_2_title', 'The Hundred') !!}</h3>
                <p>{!! $page->section('tour_2_text', 'The Hundred is a thrilling style of cricket that\'s both entertaining and exciting to watch and bet on per game. Throughout the tournament, you can enjoy betting on the tournament via your <strong>betting ID India</strong>, betting on total boundaries, betting on player performances, and betting on team predictions.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 2L11 13"/><path d="M22 2l-7 20-4-9-9-4 20-7z"/></svg></div>
                <h3>{!! $page->section('tour_3_title', 'CPL') !!}</h3>
                <p>{!! $page->section('tour_3_text', 'T20 cricket with explosive action and plenty of runs is the hallmark of the Caribbean Premier League. With <strong>instant cricket ID</strong>, you can bet on ongoing matches, top batsmen, total sixes and all other exciting betting markets with changing odds.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- WHY WHATSAPP VS FORMS --}}
<section class="section" id="whatsapp-vs-forms">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('vs_title', 'Why <span class="text-gold">WhatsApp Registration</span> is Better Than Forms') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3>{!! $page->section('vs_1_title', 'Faster Approval') !!}</h3>
                <p>{!! $page->section('vs_1_text', 'Traditional forms can take hours to verify, whereas WhatsApp registration process typically approves and communicates instantly.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div>
                <h3>{!! $page->section('vs_2_title', 'Personalized Assistance') !!}</h3>
                <p>{!! $page->section('vs_2_text', 'Our customer service team is available around the clock and offers individual support to ensure that customers fully understand how deposits are made.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M9 12l2 2 4-4"/></svg></div>
                <h3>{!! $page->section('vs_3_title', 'Less Confusing for Beginners') !!}</h3>
                <p>{!! $page->section('vs_3_text', 'Registration forms are often confusing to many users. Getting your online ID via WhatsApp makes it easy to create an account, as it walks the user through the procedure step-by-step.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div>
                <h3>{!! $page->section('vs_4_title', 'Real-Time Customer Support') !!}</h3>
                <p>{!! $page->section('vs_4_text', 'In case of any problems with sign-up or payment, users will be able to reach support instantly, rather than having to wait for a potential delayed email response.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg></div>
                <h3>{!! $page->section('vs_5_title', 'User-friendly on Mobile Devices') !!}</h3>
                <p>{!! $page->section('vs_5_text', 'As most users are accessing the betting sites on their mobile phones, signing up through WhatsApp is more convenient and mobile-friendly unlike the lengthy forms.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- SECURITY --}}
<section class="section section-alt" id="security" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('security_title', '<span class="text-gold">Security and Privacy</span> on WhatsApp') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div>
                <h3>{!! $page->section('sec_1_title', 'Private Communication') !!}</h3>
                <p>{!! $page->section('sec_1_text', 'WhatsApp conversations remain encrypted, and helps users to communicate securely while discussing account setup and betting tips.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3>{!! $page->section('sec_2_title', 'Safe Sharing of Login Details') !!}</h3>
                <p>{!! $page->section('sec_2_text', 'The trusted betting providers ensure that the credentials are shared in private chats, not public or any insecure ways.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M9 12l2 2 4-4"/><path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9c2.5 0 4.76 1 6.4 2.6"/></svg></div>
                <h3>{!! $page->section('sec_3_title', 'Better Verification Process') !!}</h3>
                <p>{!! $page->section('sec_3_text', 'With the help of WhatsApp support, users can easily verify their accounts, which minimizes fake registrations and unauthorized access.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/></svg></div>
                <h3>{!! $page->section('sec_4_title', 'Secure Transaction Guidance') !!}</h3>
                <p>{!! $page->section('sec_4_text', 'Users are provided with a clear guidance on deposits and withdrawals so that they do not enter a wrong payment detail or make any payments mistake.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"/></svg></div>
                <h3>{!! $page->section('sec_5_title', 'Reduced Spam and Fraud Risks') !!}</h3>
                <p>{!! $page->section('sec_5_text', 'Unlike random websites or unknown registration portals, verified WhatsApp support channels offer a safer experience.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- WITHDRAWAL PROCESS --}}
<section class="section" id="withdrawals">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('withdraw_title', '<span class="text-gold">Withdrawal Process</span> via WhatsApp') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
                <h3>{!! $page->section('withdraw_1_title', 'Quick Withdrawal Requests') !!}</h3>
                <p>{!! $page->section('withdraw_1_text', 'Users can directly contact the support executives on WhatsApp to make the request for withdrawal without going through a lengthy process.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3>{!! $page->section('withdraw_2_title', 'Faster Payment Verification') !!}</h3>
                <p>{!! $page->section('withdraw_2_text', 'The support team quickly verifies transactions and account details to speed up withdrawal processing.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M9 12l2 2 4-4"/><path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9c2.5 0 4.76 1 6.4 2.6"/></svg></div>
                <h3>{!! $page->section('withdraw_3_title', 'Easy Tracking of Payment Status') !!}</h3>
                <p>{!! $page->section('withdraw_3_text', 'The support team quickly verifies transactions and account details to speed up withdrawal processing.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div>
                <h3>{!! $page->section('withdraw_4_title', 'Assistance for Banking Issues') !!}</h3>
                <p>{!! $page->section('withdraw_4_text', 'Customer support can address and resolve withdrawal-related issues instantly if the user is experiencing some delay or technical problem.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div>
                <h3>{!! $page->section('withdraw_5_title', 'Smooth Process for Regular Bettors') !!}</h3>
                <p>{!! $page->section('withdraw_5_text', 'Regular users can enjoy a simplified process with faster withdrawal times following account verification and regular activity.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- CUSTOMER CARE --}}
<section class="section section-alt" id="customer-care" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('care_title', '<span class="text-gold">Casino Betting ID</span> WhatsApp Customer Care Number') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('care_text_1', 'A <strong>casino betting ID</strong> WhatsApp support service is a crucial part in ensuring an easy betting experience for the users. Customer care support on WhatsApp provides instant assistance, from account creation to recovering login details or making deposits, and understanding betting markets.') !!}</p>
            <p>{!! $page->section('care_text_2', 'Many users specifically search for a reliable <strong>casino WhatsApp number</strong> because it provides direct communication without delays. Instead of waiting for email responses or complicated support tickets, WhatsApp customer care helps users resolve issues quickly and continue betting without interruption. A responsive support team enhances the user experience, from assisting novice players in setting up their <strong>casino betting ID</strong> to supporting advanced users with withdrawal requests and live betting access.') !!}</p>
            <p>{!! $page->section('care_text_3', 'This professional support system also helps in creating trust among users looking for a safe and secure betting ID India platform. Today, with online casino and cricket betting gaining popularity, the registration process on WhatsApp has become more appealing because of its reliable customer service, fast response rates, and secure communication.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('care_btn_text', 'Contact Support Team Now') !!}</a>
        </div>
    </div>
</section>

{{-- PAYMENTS --}}
<section class="section" id="payments">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('payments_title', 'Secure <span class="text-gold">Payment Methods</span>') !!}</h2>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(4,1fr);max-width:800px;margin:0 auto;">
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/upi.png') }}" alt="UPI" style="width:48px;height:48px;object-fit:contain;" loading="lazy" decoding="async"></div><h3>UPI</h3></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/bank transfer.png') }}" alt="Bank Transfer" style="width:48px;height:48px;object-fit:contain;" loading="lazy" decoding="async"></div><h3>Bank Transfer</h3></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/paytm.png') }}" alt="Paytm" style="width:48px;height:48px;object-fit:contain;" loading="lazy" decoding="async"></div><h3>Paytm</h3></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/phonepe.png') }}" alt="PhonePe" style="width:48px;height:48px;object-fit:contain;" loading="lazy" decoding="async"></div><h3>PhonePe</h3></div>
        </div>
    </div>
</section>

{{-- FAQ --}}
<section class="section section-alt" id="faq" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('faq_title', 'Frequently Asked <span class="text-gold">Questions</span>') !!}</h2>
        </div>
        <div class="faq-list" style="max-width:800px;margin:0 auto;">
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_1_q', 'How can I get an instant casino ID WhatsApp account?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_1_a', 'You can obtain a <strong>casino ID WhatsApp</strong> account right after you reach out to the support team by WhatsApp, provide some basic information and complete your initial deposit. After you have been verified, your login details are immediately shared.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_2_q', 'Is it safe to get a casino betting ID WhatsApp account?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_2_a', 'Yes, if you get a <strong>casino betting ID WhatsApp</strong> account from a trusted provider, it is safe as the registration procedure is done by private communication, secure account verification and payment assistance.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_3_q', 'What is an Online Casino ID?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_3_a', 'An <strong>Online Casino ID</strong> is a betting account that lets players access live casino games, cricket wagering markets, sports betting and other types of online betting in style using a single login platform.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_4_q', 'How long does it take to receive an instant casino ID WhatsApp login?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_4_a', 'Users get the details of their betting account within a few minutes after registering and making their first deposit via WhatsApp support.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_5_q', 'Can beginners use the casino betting ID WhatsApp service easily?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_5_a', 'Yes, WhatsApp registration is simple because it helps users register an account, fund the account, log in and access betting options very easily.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_6_q', 'What games can I access with an Online Casino ID?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_6_a', 'An Online Casino ID can be used to access live casino games, cricket betting, T20 leagues, roulette, blackjack, poker, teen patti, slots and various live sports betting markets.') !!}</p></div></div>
        </div>
    </div>
</section>

@endsection
