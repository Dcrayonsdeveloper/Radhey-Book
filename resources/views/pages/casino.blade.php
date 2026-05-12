@extends('layouts.app')

@section('meta_title', $meta_title ?? 'Online Casino ID – Get Instant Online Casino ID in India | Radhey Book')
@section('meta_description', $meta_description ?? 'Get your instant online casino ID via WhatsApp from Radhey Book. Play slots, live casino, card games & more. Fast setup, secure transactions & 24/7 support.')
@section('meta_keywords', $meta_keywords ?? 'online casino ID, instant casino ID, casino betting ID, casino ID whatsapp, casino betting ID whatsapp, whatsapp betting ID, betting ID india')

@section('content')

@php
    $waLink = 'https://linktr.ee/radheybook';
@endphp

{{-- HERO SECTION --}}
<section class="hero-section" id="hero" style="background: url('{{ asset('images/casino banner.png') }}') center/cover no-repeat;">
    <div class="hero-overlay" style="background: rgba(0,0,0,0.55);"></div>
    <div class="hero-content container">
        <div class="hero-badge">
            <span class="badge-pulse"></span>
            {!! $page->section('hero_badge', 'India\'s #1 Casino Platform') !!}
        </div>
        <h1 class="hero-title">{!! $page->section('hero_title', 'Online Casino ID – Get Instant <span class="text-gold">Online Casino ID</span> in India') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'Get your instant casino ID via WhatsApp and start playing slots, live casino, card games & more within minutes. Fast, secure & hassle-free!') !!}</p>
        <div class="hero-cta">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">
                {!! $page->section('hero_btn_text', 'Get Your Casino ID Now') !!}
            </a>
        </div>
    </div>
</section>

{{-- INTRO BLOCK --}}
<section class="section" id="intro">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('intro_title', 'Online Casino ID') !!}</h2>
            <p class="section-subtitle">{!! $page->section('intro_subtitle', 'Get Instant <span class="text-gold">Online Casino ID</span> in India') !!}</p>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('intro_text_1', 'If you are looking to start online casino betting easily and quickly, getting your online casino ID is the first most important step. Today, mostly users prefer platforms that offer fast hassle-free without complicating the registration process. As the need to be convenient is increasing, a great number of individuals are opting to select services that ensure fast onboarding using WhatsApp. This will enable you to start betting without wasting any more time and have an easy time betting.') !!}</p>
                    <p>{!! $page->section('intro_text_2', 'One of the biggest advantages of getting an Online casino ID is the speed and simplicity it offers. You can chat directly via a whatsapp betting ID, request your account and start betting within minutes. This is a growingly popular approach among those seeking a quality betting ID India experience. The websites such as Radhey Book are structured to ensure the process is easy, safe and easy to use so that first time users and those who have used it before can get on with it without any form of confusion.') !!}</p>
                </div>
            </div>
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/TENNIS FOOTBALL AVIATOR/casino_1.png') }}" alt="Online Casino ID" style="width:100%;border-radius:16px;" loading="lazy" decoding="async">
            </div>
        </div>
    </div>
</section>

{{-- WHAT IS INSTANT CASINO ID --}}
<section class="section section-alt" id="what-is">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('what_is_title', 'What is <span class="text-gold">Instant Casino ID</span>?') !!}</h2>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/TENNIS FOOTBALL AVIATOR/casino_2.png') }}" alt="Casino Betting" style="width:100%;border-radius:16px;" loading="lazy" decoding="async">
            </div>
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('what_is_text_1', 'An instant casino ID provides instant access to online casino games and betting sites. You can log in, add money and begin playing without having to go through lengthy approval procedures.') !!}</p>
                    <p>{!! $page->section('what_is_text_2', 'Users are able to play a variety of casino games such as slots, live casino tables and card games with an instant casino ID. It also assists in balancing, monitoring transactions and accessing various features in a single location. The idea is to have a fast, hassle free and a smooth betting experience for users.') !!}</p>
                </div>
            </div>
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
                <h3>{!! $page->section('benefit_1_title', 'Quick and Easy Setup') !!}</h3>
                <p>{!! $page->section('benefit_1_text', 'You can request your ID within minutes without filling lengthy forms.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3>{!! $page->section('benefit_2_title', 'Instant Access') !!}</h3>
                <p>{!! $page->section('benefit_2_text', 'Get your account quickly and start playing without delays.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div>
                <h3>{!! $page->section('benefit_3_title', 'Beginner-Friendly Process') !!}</h3>
                <p>{!! $page->section('benefit_3_text', 'The WhatsApp method is simple and easy to follow for everyone.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div>
                <h3>{!! $page->section('benefit_4_title', 'Direct Communication') !!}</h3>
                <p>{!! $page->section('benefit_4_text', 'You can chat directly and get quick responses to your queries.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3>{!! $page->section('benefit_5_title', 'Convenient and Reliable') !!}</h3>
                <p>{!! $page->section('benefit_5_text', 'The process is smooth and designed for user comfort.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- HOW TO GET VIA WHATSAPP --}}
<section class="section" id="how-whatsapp" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('how_wa_title', 'How to Get <span class="text-gold">Casino Betting ID</span> via WhatsApp') !!}</h2>
            <p class="section-subtitle">{!! $page->section('how_wa_subtitle', 'One of the easiest methods to start with is by getting your Online casino ID via WhatsApp. It eliminates complex procedures and provides speedy access.') !!}</p>
        </div>
    </div>
</section>

{{-- HOW TO GET YOUR ONLINE CASINO ID --}}
<section class="section" id="how-to-get">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('how_title', 'How to Get Your <span class="text-gold">Online Casino ID</span>') !!}</h2>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(250px,1fr));">
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">1</span></div>
                <h3>{!! $page->section('how_step_1_title', 'Click WhatsApp Message') !!}</h3>
                <p>{!! $page->section('how_step_1_text', 'Click on the WhatsApp option offered. This puts you in touch with the provider and initiates the process immediately.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">2</span></div>
                <h3>{!! $page->section('how_step_2_title', 'Send Message') !!}</h3>
                <p>{!! $page->section('how_step_2_text', 'Send "Hi I want an Online casino ID" to have your ID. This will assist the team in knowing what you need and reacting fast.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">3</span></div>
                <h3>{!! $page->section('how_step_3_title', 'Give Details & Deposit') !!}</h3>
                <p>{!! $page->section('how_step_3_text', 'Supply some basic information and make your initial deposit. This enables your account to be active and trouble-free.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">4</span></div>
                <h3>{!! $page->section('how_step_4_title', 'Get ID') !!}</h3>
                <p>{!! $page->section('how_step_4_text', 'Within 2 to 5 minutes your ID and login credentials will be shared with you. You can start betting.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">5</span></div>
                <h3>{!! $page->section('how_step_5_title', 'Login and Start Betting') !!}</h3>
                <p>{!! $page->section('how_step_5_text', 'Log in with your credentials and begin to explore casino games and betting options.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- CASINO ID WHATSAPP NUMBER --}}
<section class="section" id="whatsapp-number" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('wa_number_title', 'Casino ID <span class="text-gold">WhatsApp Number</span>') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('wa_number_text_1', 'Your betting account can be fastened through the casino ID whatsapp number. Rather than undergoing lengthy registration procedures, the user just needs to get on WhatsApp and demand their ID.') !!}</p>
            <p>{!! $page->section('wa_number_text_2', 'Through the casino ID whatsapp number, you can also seek assistance in deposits, withdrawals, and queries about your account. This direct communication will make the process more convenient and fast to the users.') !!}</p>
        </div>
    </div>
</section>

{{-- CASINO BETTING ID FOR MAJOR TOURNAMENTS --}}
<section class="section" id="tournaments">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('tournament_title', 'Casino Betting ID for <span class="text-gold">Major Tournaments</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('tournament_subtitle', 'By having a casino betting ID, you can not only have fun with casino games but can also access betting of the major cricket tournaments.') !!}</p>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(300px,1fr));">
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/T-20 World Cup.png') }}" alt="T-20 World Cup" style="width:100%;height:100%;object-fit:cover;" loading="lazy" decoding="async">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_1_title', 'T-20 World Cup') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_1_text', 'An international competition where users have the option of betting on match winners, top performers and live match markets with real-time odds.') !!}</p>
                </div>
            </a>
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/the hundred.png') }}" alt="The Hundred" style="width:100%;height:100%;object-fit:cover;" loading="lazy" decoding="async">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_2_title', 'The Hundred') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_2_text', 'A fast-paced cricket format offering quick betting opportunities and dynamic gameplay.') !!}</p>
                </div>
            </a>
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/cpl.png') }}" alt="CPL" style="width:100%;height:100%;object-fit:cover;" loading="lazy" decoding="async">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_3_title', 'CPL (Caribbean Premier League)') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_3_text', 'An event that is well-known and has exciting games where users can find various betting opportunities.') !!}</p>
                </div>
            </a>
        </div>
    </div>
</section>

{{-- WHY WHATSAPP REGISTRATION IS BETTER --}}
<section class="section" id="why-whatsapp" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('why_wa_title', 'Why WhatsApp Registration is <span class="text-gold">Better Than Forms</span>') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3>{!! $page->section('why_wa_1_title', 'Saves Time') !!}</h3>
                <p>{!! $page->section('why_wa_1_text', 'No need to fill long forms, making the process much faster.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div>
                <h3>{!! $page->section('why_wa_2_title', 'Instant Replies') !!}</h3>
                <p>{!! $page->section('why_wa_2_text', 'You can get quick responses to your queries.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
                <h3>{!! $page->section('why_wa_3_title', 'Simple Process') !!}</h3>
                <p>{!! $page->section('why_wa_3_text', 'Easy steps that anyone can follow without confusion.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div>
                <h3>{!! $page->section('why_wa_4_title', 'Faster Approval') !!}</h3>
                <p>{!! $page->section('why_wa_4_text', 'IDs are generated quickly compared to traditional methods.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div>
                <h3>{!! $page->section('why_wa_5_title', 'Better User Experience') !!}</h3>
                <p>{!! $page->section('why_wa_5_text', 'The process feels more natural and convenient.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- SECURITY AND PRIVACY --}}
<section class="section" id="security">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('security_title', 'Security and Privacy on <span class="text-gold">WhatsApp</span>') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div>
                <h3>{!! $page->section('security_1_title', 'Private Communication') !!}</h3>
                <p>{!! $page->section('security_1_text', 'Chats remain personal and secure.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3>{!! $page->section('security_2_title', 'Limited Data Sharing') !!}</h3>
                <p>{!! $page->section('security_2_text', 'Only necessary details are shared during the process.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
                <h3>{!! $page->section('security_3_title', 'Trusted Access') !!}</h3>
                <p>{!! $page->section('security_3_text', 'Always connect through verified sources.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
                <h3>{!! $page->section('security_4_title', 'Safe Transactions') !!}</h3>
                <p>{!! $page->section('security_4_text', 'Payments are handled carefully with proper guidance.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg></div>
                <h3>{!! $page->section('security_5_title', 'User Control') !!}</h3>
                <p>{!! $page->section('security_5_text', 'You have control over your information and activity.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- WITHDRAWAL PROCESS --}}
<section class="section" id="withdrawal" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('withdrawal_title', 'Withdrawal Process via <span class="text-gold">WhatsApp</span>') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div>
                <h3>{!! $page->section('withdraw_1_title', 'Simple Request System') !!}</h3>
                <p>{!! $page->section('withdraw_1_text', 'Users can request withdrawals directly through chat.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div>
                <h3>{!! $page->section('withdraw_2_title', 'Quick Processing') !!}</h3>
                <p>{!! $page->section('withdraw_2_text', 'Most requests are handled without delays.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div>
                <h3>{!! $page->section('withdraw_3_title', 'Guided Assistance') !!}</h3>
                <p>{!! $page->section('withdraw_3_text', 'Support helps you complete the process smoothly.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
                <h3>{!! $page->section('withdraw_4_title', 'Flexible Payment Methods') !!}</h3>
                <p>{!! $page->section('withdraw_4_text', 'Withdraw funds using convenient options.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3>{!! $page->section('withdraw_5_title', 'Real-Time Updates') !!}</h3>
                <p>{!! $page->section('withdraw_5_text', 'Track your withdrawal status easily through WhatsApp.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- CUSTOMER CARE --}}
<section class="section" id="customer-care">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('care_title', 'Casino Betting ID WhatsApp <span class="text-gold">Customer Care Number</span>') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('care_text_1', 'The casino betting ID whatsapp customer care number is important for users who need quick support. Whether it is related to account setup, deposits, or withdrawals, help is always available.') !!}</p>
            <p>{!! $page->section('care_text_2', 'You can connect through the casino ID whatsapp number for fast communication and assistance. If you have any issue while using your casino betting ID whatsapp, support ensures that your problem is resolved quickly. This improves trust and makes the overall experience smooth and reliable.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('care_btn_text', 'Contact Customer Care Now') !!}</a>
        </div>
    </div>
</section>

{{-- FAQ SECTION --}}
<section class="section" id="faq" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('faq_title', 'Frequently Asked <span class="text-gold">Questions</span>') !!}</h2>
        </div>
        <div class="faq-list" style="max-width:800px;margin:0 auto;">
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_1_q', 'How can I get an instant casino ID whatsapp?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_1_a', 'You can get an instant casino ID whatsapp by sending a simple message and following the quick steps provided.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_2_q', 'What is casino betting ID whatsapp?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_2_a', 'A casino betting ID whatsapp allows you to request and manage your betting account directly through WhatsApp.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_3_q', 'What is an Online casino ID?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_3_a', 'An Online casino ID is your personal account that gives access to casino games and betting platforms.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_4_q', 'Is it safe to use WhatsApp for casino ID?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_4_a', 'Yes, if you use trusted and verified contacts, the process is safe and secure.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_5_q', 'How fast can I start betting after getting an ID?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_5_a', 'You can start immediately after receiving your ID and logging into your account.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_6_q', 'Can beginners use Online casino ID easily?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_6_a', 'Yes, the process is simple and designed for both beginners and experienced users.') !!}</p></div>
            </div>
        </div>
    </div>
</section>

@endsection
