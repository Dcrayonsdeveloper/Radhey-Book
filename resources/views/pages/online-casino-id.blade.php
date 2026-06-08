@extends('layouts.app')

@section('meta_title',       $meta_title       ?? 'Online Casino ID. Get Instant Online Casino ID in India. Radhey Book')
@section('meta_description', $meta_description ?? 'Get your online casino ID instantly via WhatsApp with Radhey Book. Trusted online casino ID in India with quick signup, secure access and 24/7 customer support.')
@section('meta_keywords',    $meta_keywords    ?? 'online casino ID, online casino id whatsapp, casino id whatsapp number, instant casino id, casino betting id whatsapp, online casino id india')

@section('content')

@php
    $waLink = 'https://linktr.ee/radheybook';
@endphp

{{-- HERO --}}
<section class="hero-section" id="hero" style="background: url('{{ asset('images/casino banner.png') }}') center/cover no-repeat;">
    <div class="hero-overlay" style="background: rgba(0,0,0,0.55);"></div>
    <div class="hero-content container">
        <div class="hero-badge"><span class="badge-pulse"></span> {!! $page->section('hero_badge', 'India\'s Trusted Online Casino ID Provider') !!}</div>
        <h1 class="hero-title">{!! $page->section('hero_title', 'Get Instant <span class="text-gold">Online Casino ID</span> in India') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'Get your verified <strong>online casino ID</strong> via WhatsApp with Radhey Book. Quick signup, live casino games, cricket betting, secure transactions and 24/7 customer support.') !!}</p>
        <div class="hero-cta"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('hero_btn_text', 'Get Your Online Casino ID Now') !!}</a></div>
    </div>
</section>

{{-- 1. INTRO --}}
<section class="section" id="intro">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('intro_title', '<span class="text-gold">Online casino ID</span> &ndash; Get Instant Online Casino ID in India') !!}</h2>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('intro_text_1', 'Are you also looking for a reliable and quick means to get your <strong>online casino ID</strong> in India? Then you are at the right place, with radhey book we make the process simple, secure, and quick. For the users interested in live casino betting, cricket betting, IPL betting, and T20 betting can sign up without any lengthy process. With a verified <strong>casino betting ID</strong>, users can start betting on multiple betting options, with live odds, casino games, 24/7 customer support, and quick withdrawals from the platform.') !!}</p>
                    <p>{!! $page->section('intro_text_2', 'Radhey Book is the platform design for the users who want to enjoy hassle-free online betting experience with quick customer support, easy account access, and more. One of the <strong>trusted betting ID</strong> platforms to get <strong>casino betting ID</strong> hassle-free via whatsapp. Users can expect a seamless experience with instant and real-time customer support. Whether you are a seasoned or a new player, you can get your id easily with <strong>whatsapp betting id</strong> process.') !!}</p>
                </div>
            </div>
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/casino.png') }}" alt="Online Casino ID India" style="width:100%;border-radius:16px;" loading="lazy" decoding="async">
            </div>
        </div>
    </div>
</section>

{{-- 2. WHAT IS --}}
<section class="section section-alt" id="what-is" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('what_is_title', 'What is an <span class="text-gold">Instant Casino ID</span>?') !!}</h2>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/aviator.png') }}" alt="Instant Casino ID" style="width:100%;border-radius:16px;" loading="lazy" decoding="async">
            </div>
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('what_is_text_1', 'An instant casino ID is the one that allows users to gain access to online casino games, sporting activities, and live video games without needing extended approvals. Users can easily get their <strong>Online casino ID</strong> on WhatsApp support and start netting within just a few minutes.') !!}</p>
                    <p>{!! $page->section('what_is_text_2', 'This betting ID is popular among users who want a fast and simple registration process. Instead of filling out long forms, users can directly connect with support, share basic details, complete their first deposit, and receive login credentials quickly. The instant ID also provides players with access to live casinos, slots, cricket betting, and other online games all at one platform.') !!}</p>
                </div>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('what_is_btn_text', 'Get Your Online Casino ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- 3. BENEFITS (5 items) --}}
<section class="section" id="benefits">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('benefits_title', 'Benefits of Getting <span class="text-gold">Online Casino Betting ID</span> via WhatsApp') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div>
                <h3>{!! $page->section('benefit_1_title', '1. Quick Registration Process') !!}</h3>
                <p>{!! $page->section('benefit_1_text', 'The sign-up process of WhatsApp is much quicker than the normal sign-up process. It lets users reach out to support and receive their ID in mere minutes without hefty verification procedures.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div>
                <h3>{!! $page->section('benefit_2_title', '2. Easy Communication') !!}</h3>
                <p>{!! $page->section('benefit_2_text', 'The WhatsApp support will enable users to touch base and obtain prompt responses, whenever they have queries. That makes it easy for novices to use web-based betting web pages.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div>
                <h3>{!! $page->section('benefit_3_title', '3. Instant Customer Support') !!}</h3>
                <p>{!! $page->section('benefit_3_text', 'In case of any problem with logging in, deposits, or withdrawals, the support team is on hand to assist you promptly via WhatsApp chat.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3>{!! $page->section('benefit_4_title', '4. Safe and Simple Process') !!}</h3>
                <p>{!! $page->section('benefit_4_text', 'WhatsApp sign-up is simple to comprehend and does not require technical expertise. All the tasks can be accomplished directly from the user\'s cell phone.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M12 8v8"/><path d="M8 12h8"/></svg></div>
                <h3>{!! $page->section('benefit_5_title', '5. Fast Access to Betting Markets') !!}</h3>
                <p>{!! $page->section('benefit_5_text', 'After <strong>casino betting ID</strong> is issued, you will be able to access all casino games, sports betting and live cricket markets.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- 4. HOW TO GET --}}
<section class="section section-alt" id="how-to-get" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('how_title', 'How to Get Your <span class="text-gold">Online casino ID</span> via WhatsApp') !!}</h2>
            <p class="section-subtitle">{!! $page->section('how_subtitle', 'Getting your <strong>Online casino ID</strong> through WhatsApp with Radhey Book is simple and beginner-friendly. The process is designed to help users start quickly without lengthy paperwork or confusing registration forms.') !!}</p>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(250px,1fr));">
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">1</span></div>
                <h3>{!! $page->section('how_step_1_title', 'Step 1: Click on WhatsApp Message') !!}</h3>
                <p>{!! $page->section('how_step_1_text', 'Obtaining your <strong>Online casino ID</strong> via WhatsApp from Radhey Book is easy and easy. The process is intended to enable users to start betting.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">2</span></div>
                <h3>{!! $page->section('how_step_2_title', 'Step 2: Send Message &ndash; "Hi, I Want an Online casino ID"') !!}</h3>
                <p>{!! $page->section('how_step_2_text', 'First of all, click the Radhey Book official WhatsApp support button. This will directly link you with the ID creation support team.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">3</span></div>
                <h3>{!! $page->section('how_step_3_title', 'Step 3: Share Basic Details and Make First Deposit') !!}</h3>
                <p>{!! $page->section('how_step_3_text', 'You may be asked to provide simple details like your name and mobile number. After that, complete your first deposit to activate your account smoothly.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">4</span></div>
                <h3>{!! $page->section('how_step_4_title', 'Step 4: Get Your ID and Password') !!}</h3>
                <p>{!! $page->section('how_step_4_text', 'Once verified you will get your login ID and password directly on WhatsApp. This typically only requires a couple of minutes.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">5</span></div>
                <h3>{!! $page->section('how_step_5_title', 'Step 5: Login and Start Betting') !!}</h3>
                <p>{!! $page->section('how_step_5_text', 'Use your login details to access the platform and start exploring casino games, live betting markets, and sports events instantly.') !!}</p>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('how_btn_text', 'Get Your Online Casino ID on WhatsApp Now') !!}</a>
        </div>
    </div>
</section>

{{-- 5. SUPPORT (24/7 WhatsApp Number) — MOVED HERE FROM POSITION 10 --}}
<section class="section" id="support-247">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('support_247_title', '<span class="text-gold">Online Casino ID Whatsapp Number</span> for 24/7 Support') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('support_247_text_1', 'Looking for a reliable <strong>casino ID whatsapp number</strong>? Radhey Book is there to help new players get instant access to their casino accounts. Users can easily ask for their <strong>online casino ID whatsapp support</strong> and receive all the instructions that they need to register, deposit and activate their casino account through the official WhatsApp service.') !!}</p>
            <p>{!! $page->section('support_247_text_2', 'One of the easiest steps to take in online betting in India is to use a verified <strong>casino ID whatsapp number</strong>. Users can chat with support executives without getting approvals via email or filling out lengthy forms, and get their account details fast. Simple, secure, and user-friendly process.') !!}</p>
        </div>
    </div>
</section>

{{-- 6. TOURNAMENTS (4 items) --}}
<section class="section section-alt" id="tournaments" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('tournaments_title', '<span class="text-gold">Online Casino ID</span> for Upcoming Cricket Tournaments') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 010 20M12 2a15.3 15.3 0 000 20"/></svg></div>
                <h3>{!! $page->section('tour_1_title', 'T-20 World Cup') !!}</h3>
                <p>{!! $page->section('tour_1_text', 'Your Radhey Book ID provides you with 100% access to T-20 World Cup betting markets and live updates about the matches. Players can bet on the winner of the game, best batsman, run scoring and live over-by-overs.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
                <h3>{!! $page->section('tour_2_title', 'The Hundred') !!}</h3>
                <p>{!! $page->section('tour_2_text', 'With quick matchups and top international players, the Hundred is one of the most exciting short-format cricket tournaments. Using your <strong>Online casino ID</strong>, you will have the opportunity to participate in live betting during the entire tournament.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 2L11 13"/><path d="M22 2l-7 20-4-9-9-4 20-7z"/></svg></div>
                <h3>{!! $page->section('tour_3_title', 'CPL') !!}</h3>
                <p>{!! $page->section('tour_3_text', 'The Caribbean Premier League features high-scoring games and exciting cricket action. During the CPL season, users with a <strong>casino betting ID</strong> can participate in the live betting markets, player performance bets and special match odds.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="8" cy="8" r="1.5" fill="#d4af37"/><circle cx="16" cy="16" r="1.5" fill="#d4af37"/><circle cx="12" cy="12" r="1.5" fill="#d4af37"/></svg></div>
                <h3>{!! $page->section('tour_4_title', 'Other Live Cricket Events') !!}</h3>
                <p>{!! $page->section('tour_4_text', 'Betting on international, T20 league, ODI, and domestic cricket is also allowed in Radhey Book. For users seeking a quick cricket ID, there\'s no hassle with accessing the live cricket betting markets at any time.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- 7. WHY WHATSAPP VS FORMS (5 items) --}}
<section class="section" id="whatsapp-vs-forms">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('vs_title', 'Why <span class="text-gold">WhatsApp Registration</span> is Better Than Forms') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3>{!! $page->section('vs_1_title', '1. Faster Approval') !!}</h3>
                <p>{!! $page->section('vs_1_text', 'Signing up for WhatsApp entails a lot less manual verification, waiting periods or time than registration via email.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg></div>
                <h3>{!! $page->section('vs_2_title', '2. Easy for Mobile Users') !!}</h3>
                <p>{!! $page->section('vs_2_text', 'A majority of users prefer mobile processes. Registration is possible directly on the smartphone in a few simple steps on WhatsApp.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div>
                <h3>{!! $page->section('vs_3_title', '3. Direct Human Support') !!}</h3>
                <p>{!! $page->section('vs_3_text', 'Unlike online forms, WhatsApp offers immediate communication with support executives, who can resolve issues at once.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M9 12l2 2 4-4"/></svg></div>
                <h3>{!! $page->section('vs_4_title', '4. Less Confusing Process') !!}</h3>
                <p>{!! $page->section('vs_4_text', 'Traditional forms can be lengthy and difficult for beginners. WhatsApp registration keeps everything simple and user-friendly.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div>
                <h3>{!! $page->section('vs_5_title', '5. Instant Updates') !!}</h3>
                <p>{!! $page->section('vs_5_text', 'The users get instant information about their account\'s activation, deposits, logins, and the access to bets in the chat.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- 8. SECURITY (5 items — now as feature cards, NOT paragraphs) --}}
<section class="section section-alt" id="security" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('security_title', '<span class="text-gold">Security and Privacy</span> on WhatsApp') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div>
                <h3>{!! $page->section('sec_1_title', '1. Private Communication') !!}</h3>
                <p>{!! $page->section('sec_1_text', 'Direct communication between user and support executive regarding any registration matters, for better privacy.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3>{!! $page->section('sec_2_title', '2. Secure Login Sharing') !!}</h3>
                <p>{!! $page->section('sec_2_text', 'You\'re able to share your account information securely via trusted support channels, minimizing the threat of unauthorized access.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3>{!! $page->section('sec_3_title', '3. Fast Issue Resolution') !!}</h3>
                <p>{!! $page->section('sec_3_text', 'Users can report suspicious activity or login problems in a matter of seconds via WhatsApp support for fast help.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M9 12l2 2 4-4"/><path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9c2.5 0 4.76 1 6.4 2.6"/></svg></div>
                <h3>{!! $page->section('sec_4_title', '4. Safer Than Unknown Platforms') !!}</h3>
                <p>{!! $page->section('sec_4_text', 'Official <strong>casino ID whatsapp number</strong> lowers the danger of bogus registrations and untrustworthy agents.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div>
                <h3>{!! $page->section('sec_5_title', '5. Reliable Customer Support') !!}</h3>
                <p>{!! $page->section('sec_5_text', 'Users can keep communication with the platform up for deposits, withdrawals and account-related assistance any time with WhatsApp support.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- 9. WITHDRAWAL PROCESS (5 items) --}}
<section class="section" id="withdrawals">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('withdraw_title', '<span class="text-gold">Withdrawal Process</span> via WhatsApp') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
                <h3>{!! $page->section('withdraw_1_title', '1. Simple Withdrawal Request') !!}</h3>
                <p>{!! $page->section('withdraw_1_text', 'Users can send a withdrawal request directly through WhatsApp support without complicated steps.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3>{!! $page->section('withdraw_2_title', '2. Quick Processing') !!}</h3>
                <p>{!! $page->section('withdraw_2_text', 'Most withdrawals are processed quickly once the request is verified by the support team.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M9 12l2 2 4-4"/><path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9c2.5 0 4.76 1 6.4 2.6"/></svg></div>
                <h3>{!! $page->section('withdraw_3_title', '3. Easy Account Verification') !!}</h3>
                <p>{!! $page->section('withdraw_3_text', 'If verification is needed, users can complete it directly on WhatsApp with basic details.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div>
                <h3>{!! $page->section('withdraw_4_title', '4. Instant Support During Withdrawals') !!}</h3>
                <p>{!! $page->section('withdraw_4_text', 'Withdrawals are processed almost immediately after a request is verified by the support team.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/></svg></div>
                <h3>{!! $page->section('withdraw_5_title', '5. Smooth Banking Assistance') !!}</h3>
                <p>{!! $page->section('withdraw_5_text', 'The support team advises users on their banking information and assists them to ensure a smooth transaction process.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- 10. CUSTOMER CARE — actual source section (replaces the made-up CTA) --}}
<section class="section section-alt" id="customer-care" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('care_title', '<span class="text-gold">Online Casino ID Whatsapp</span> Customer Care Number') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('care_text_1', 'The Radhey Book support team is available to users who want to get rapid help, via the official <strong>online casino ID whatsapp</strong> service. Customer care team is available to assist you in every aspect of your login, deposits, withdrawal and ID activation.') !!}</p>
            <p>{!! $page->section('care_text_2', 'The <strong>casino ID whatsapp number</strong> also allows the user to stay clear of delays and fake agents. The process is quick, user friendly and it supports everyone in the sports betting and live casino industries. One of the simplest ways to get an <strong>Online casino ID</strong> is with instant support via WhatsApp.') !!}</p>
            <p>{!! $page->section('care_text_3', 'Radhey Book is known for its user-friendliness and provides a streamlined customer support system for users looking for <strong>casino betting ID</strong>, and <strong>trusted betting ID</strong> India services, ensuring their needs are met quickly and effectively') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('care_btn_text', 'Contact Support Team Now') !!}</a>
        </div>
    </div>
</section>

{{-- PAYMENTS — design infra, kept from existing page design --}}
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

{{-- 11. FAQ --}}
<section class="section section-alt" id="faq" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('faq_title', '<span class="text-gold">FAQs</span>') !!}</h2>
        </div>
        <div class="faq-list" style="max-width:800px;margin:0 auto;">
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_1_q', '1. How can I get an instant casino ID whatsapp account?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_1_a', 'The Radhey Book support team can be reached via WhatsApp, give all the required information, make your first deposit and get your ID in no time.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_2_q', '2. Is the casino betting ID whatsapp process fast?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_2_a', 'The WhatsApp procedure is set up to ensure it\'s fast and informal, enabling users to register and get support right away, so they can start betting without delay.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_3_q', '3. What games can I access with an Online casino ID?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_3_a', 'The users can play live casino, cricket betting, sports betting, slots and other online games options.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_4_q', '4. Is WhatsApp registration safe for betting IDs?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_4_a', 'An official support number ensures a smoother process with direct support from the user.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_5_q', '5. Can I use my ID for cricket betting?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_5_a', 'Yes, you can play in the cricket tournament using this account, as well as live matches and sport betting markets.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_6_q', '6. What should I do if I face login or withdrawal issues?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_6_a', 'For any account or payment-related problems, you can contact the Radhey book WhatsApp customer support team for any quick help.') !!}</p></div></div>
        </div>
    </div>
</section>

@endsection
