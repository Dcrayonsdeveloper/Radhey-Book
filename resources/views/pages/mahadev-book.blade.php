@extends('layouts.app')

@section('meta_title', $meta_title ?? 'Mahadev Book – Get Instant Online Cricket ID in India | Radhey Book')
@section('meta_description', $meta_description ?? 'Get your Mahadev Book instant cricket ID within minutes. Bet on live matches, tournaments & 1000+ games. 24/7 WhatsApp support, fast deposits & quick withdrawals.')
@section('meta_keywords', $meta_keywords ?? 'mahadev book, mahadev online book, instant cricket ID, whatsapp betting ID, mahadev betting ID, betting ID india, mahadev exchange, mahadev demo id')

@section('content')

@php
    $waLink = 'https://linktr.ee/radheybook';
@endphp

{{-- HERO SECTION --}}
<section class="hero-section" id="hero" style="background: url('{{ asset('images/Artboard 3 reddy anna website banner.png') }}') center/cover no-repeat;">
    <div class="hero-overlay" style="background: rgba(0,0,0,0.55);"></div>
    <div class="hero-content container">
        <div class="hero-badge">
            <span class="badge-pulse"></span>
            {!! $page->section('hero_badge', 'India\'s Trusted Betting Platform') !!}
        </div>
        <h1 class="hero-title">{!! $page->section('hero_title', 'Mahadev Book – Get Instant <span class="text-gold">Online Cricket ID</span> in India') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'Get your instant cricket ID within minutes and start betting on live matches, tournaments, and 1000+ games. Fast deposits, quick withdrawals & 24/7 support.') !!}</p>
        <div class="hero-cta">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">
                {!! $page->section('hero_btn_text', 'Get Your Instant Betting ID Today') !!}
            </a>
        </div>
    </div>
</section>

{{-- INTRO BLOCK --}}
<section class="section" id="intro">
    <div class="container" style="max-width:900px;">
        <div class="content-block">
            <p>{!! $page->section('intro_text_1', 'If you are searching for a fast, simple, safe, and reliable way to start betting? Then you are at the right place Mahadev Book is one of India\'s most trusted online betting platforms. It allows users to get an instant cricket ID within just a few minutes and start betting instantly on live matches, tournaments, and games without any hassle. The platform is easy to navigate with 24/7 customer support, real-time betting, and 1000+ games to bet on.') !!}</p>
            <p>{!! $page->section('intro_text_2', 'With mahadev online book, users can easily get their whatsapp betting ID and access multiple betting markets instantly. Whether you are new to betting or already experienced, the platform offers fast deposits to quick withdrawals. It ensures a hassle-free experience for anyone looking for a trusted betting in India.') !!}</p>
        </div>
    </div>
</section>

{{-- WHAT IS MAHADEV BOOK --}}
<section class="section section-alt" id="what-is-mahadev">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('what_is_title', 'What is <span class="text-gold">Mahadev Book</span>?') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('what_is_text_1', 'Mahadev Book is an online betting platform that provides users with access to cricket betting along with the other sports. It is built for users who want quick and effective ways to place bets with real-time updates. The platform is known for its fast signup process, allowing users to get an instant cricket ID without long waiting times.') !!}</p>
            <p>{!! $page->section('what_is_text_2', 'The main highlight of mahadev online book is its easy registration through WhatsApp. It takes only a few steps to start betting and the user can request their whatsapp betting ID and connect quickly. The platform uses various types of betting including match betting, session betting and live betting. This also renders it an appropriate choice to any person who wants to have a relaxed and trusted betting ID India.') !!}</p>
            <p>{!! $page->section('what_is_text_3', 'Another important aspect of Mahadev book is its user-friendly system. Although maybe you have not bet online before, it is easy to learn how to bet and maintain your account. The platform is aimed at delivering a hassle-free experience with as few hitches as possible.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('what_is_btn_text', 'Get your Instant Betting ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- BENEFITS OF BETTING WITH MAHADEV --}}
<section class="section" id="benefits">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('benefits_title', 'Benefits of Betting with <span class="text-gold">Mahadev Online Book</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('benefits_subtitle', 'Choosing mahadev online book offers several benefits that make the betting experience easy and convenient') !!}</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                </div>
                <h3>{!! $page->section('benefit_1_title', 'Instant ID Access') !!}</h3>
                <p>{!! $page->section('benefit_1_text', 'Users can quickly get their instant cricket ID without going through lengthy processes, saving time and effort.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                </div>
                <h3>{!! $page->section('benefit_2_title', 'Simple and Easy to Use') !!}</h3>
                <p>{!! $page->section('benefit_2_text', 'The interface of the platform is clean and user-friendly, and it is easy to navigate and to place bets.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                </div>
                <h3>{!! $page->section('benefit_3_title', 'Quick Deposits and Withdrawals') !!}</h3>
                <p>{!! $page->section('benefit_3_text', 'Transactions are also very quick, and one can deposit and withdraw winnings without wasting time.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <h3>{!! $page->section('benefit_4_title', 'Live Betting Experience') !!}</h3>
                <p>{!! $page->section('benefit_4_text', 'It allows you to bet in real time and with live odds on live matches.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/><line x1="4" y1="22" x2="4" y2="15"/></svg>
                </div>
                <h3>{!! $page->section('benefit_5_title', 'Multiple Betting Options') !!}</h3>
                <p>{!! $page->section('benefit_5_text', 'Offering match betting, session and fancy markets, users have a range of choice to make.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                </div>
                <h3>{!! $page->section('benefit_6_title', '24/7 Access') !!}</h3>
                <p>{!! $page->section('benefit_6_text', 'The platform works round the clock, so users can bet anytime using their whatsapp betting ID.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
                </div>
                <h3>{!! $page->section('benefit_7_title', 'Mobile-Friendly Platform') !!}</h3>
                <p>{!! $page->section('benefit_7_text', 'You can easily access mahadev book on your mobile device without any issues.') !!}</p>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('benefits_btn_text', 'Get your Mahadev Book ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- WHY CHOOSE MAHADEV BOOK --}}
<section class="section" id="why-choose" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('why_title', 'Why Choose <span class="text-gold">Mahadev Book</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('why_subtitle', 'There are many platforms available, but mahadev book stands out due to its reliability and ease of use') !!}</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3>{!! $page->section('why_1_title', 'Trusted by Users') !!}</h3>
                <p>{!! $page->section('why_1_text', 'People seeking a reliable betting ID India are frequent users of the platform.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                </div>
                <h3>{!! $page->section('why_2_title', 'Quick WhatsApp Process') !!}</h3>
                <p>{!! $page->section('why_2_text', 'It is easy to get your whatsapp betting ID which only takes a few minutes.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                </div>
                <h3>{!! $page->section('why_3_title', 'Secure Transactions') !!}</h3>
                <p>{!! $page->section('why_3_text', 'Your withdrawals and deposits are handled securely with well-established systems.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg>
                </div>
                <h3>{!! $page->section('why_4_title', 'Wide Cricket Coverage') !!}</h3>
                <p>{!! $page->section('why_4_text', 'Users have the option of betting in international or domestic matches.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                </div>
                <h3>{!! $page->section('why_5_title', 'Fast Login and Access') !!}</h3>
                <p>{!! $page->section('why_5_text', 'With your instant cricket ID, you can log in quickly and start betting immediately.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                </div>
                <h3>{!! $page->section('why_6_title', 'No Complicated Steps') !!}</h3>
                <p>{!! $page->section('why_6_text', 'The entire process from registration to betting is simple and straightforward.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <h3>{!! $page->section('why_7_title', 'Regular Updates') !!}</h3>
                <p>{!! $page->section('why_7_text', 'Real time odds and match data are provided to make correct betting decisions.') !!}</p>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('why_btn_text', 'Get Your Trusted Online Cricket Betting ID') !!}</a>
        </div>
    </div>
</section>

{{-- HOW TO GET MAHADEV BOOK DEMO ID --}}
<section class="section" id="how-to-get">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('how_title', 'How to Get Your <span class="text-gold">Mahadev Book Demo ID</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('how_subtitle', 'Getting started with mahadev online book is quick and easy. Follow these steps:') !!}</p>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(250px,1fr));">
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon">
                    <span style="font-size:2em;color:#d4af37;font-weight:700;">1</span>
                </div>
                <h3>{!! $page->section('how_step_1_title', 'Click on the WhatsApp CTA') !!}</h3>
                <p>{!! $page->section('how_step_1_text', 'Begin by clicking on the WhatsApp link available on the website to connect directly with our support team.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon">
                    <span style="font-size:2em;color:#d4af37;font-weight:700;">2</span>
                </div>
                <h3>{!! $page->section('how_step_2_title', 'Send Message') !!}</h3>
                <p>{!! $page->section('how_step_2_text', 'When redirected to WhatsApp send a message "Hi, I want to get a Mahadev Book ID" to start the process without any delay.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon">
                    <span style="font-size:2em;color:#d4af37;font-weight:700;">3</span>
                </div>
                <h3>{!! $page->section('how_step_3_title', 'Give Details & Deposit') !!}</h3>
                <p>{!! $page->section('how_step_3_text', 'Provide basic details as required like your name, age, etc and complete your first deposit to activate your account.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon">
                    <span style="font-size:2em;color:#d4af37;font-weight:700;">4</span>
                </div>
                <h3>{!! $page->section('how_step_4_title', 'Get ID') !!}</h3>
                <p>{!! $page->section('how_step_4_text', 'Within 2 to 5 minutes your ID and login credentials will be shared with you. You can start betting.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon">
                    <span style="font-size:2em;color:#d4af37;font-weight:700;">5</span>
                </div>
                <h3>{!! $page->section('how_step_5_title', 'Login and Start Betting') !!}</h3>
                <p>{!! $page->section('how_step_5_text', 'Log in and start placing bets on your favourite matches and games right away.') !!}</p>
            </div>
        </div>
        <p class="text-center" style="color:#b0b0c8;margin-top:20px;font-size:15px;">{!! $page->section('how_footer', 'This process is designed to be quick so that users can start betting without unnecessary delays.') !!}</p>
        <div class="text-center" style="margin-top:20px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('how_btn_text', 'Get Your Betting ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- MAHADEV BOOK SUPPORT --}}
<section class="section" id="support" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('support_title', 'Mahadev Book <span class="text-gold">Support Contact Number</span>') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('support_text_1', 'Mahadev book offers reliable support via the Mahadev Book Support Phone Number to facilitate easy customer experience. In case you have any problems with your account, deposits, and withdrawals, you can reach the support team via WhatsApp and get a fast response.') !!}</p>
            <p>{!! $page->section('support_text_2', 'With the mahadev book customer care number, users can easily reach out and resolve their queries without waiting for long hours. The support team responds quickly and helps users manage their betting ID india efficiently. This makes the platform more user-friendly and trustworthy for both new and experienced users.') !!}</p>
        </div>
    </div>
</section>

{{-- CRICKET BETTING WITH YOUR MAHADEV BOOK ID --}}
<section class="section" id="cricket-betting">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('cricket_title', 'Cricket Betting with Your <span class="text-gold">Mahadev Book ID</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('cricket_subtitle', 'You have access to various betting markets and tournaments of cricket with your mahadev book ID.') !!}</p>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(300px,1fr));">
            {{-- T-20 World Cup --}}
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/T-20 World Cup.png') }}" alt="T-20 World Cup" style="width:100%;height:100%;object-fit:cover;" loading="lazy" decoding="async">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_1_title', 'T-20 World Cup') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_1_text', 'T-20 World Cup is a large-scale cricket tournament in the world. You can bet on the match winners, best batsmen, total runs on your mahadev book cricket ID and bet on the live match results with real time odds.') !!}</p>
                </div>
            </a>
            {{-- The Hundred --}}
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/the hundred.png') }}" alt="The Hundred" style="width:100%;height:100%;object-fit:cover;" loading="lazy" decoding="async">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_2_title', 'The Hundred') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_2_text', 'This is a one-of-a-kind 100-ball event that provides a high-speed action. You can also bet on team performance, player statistics and overall scores using your instant cricket ID.') !!}</p>
                </div>
            </a>
            {{-- CPL --}}
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/cpl.png') }}" alt="CPL" style="width:100%;height:100%;object-fit:cover;" loading="lazy" decoding="async">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_3_title', 'CPL (Caribbean Premier League)') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_3_text', 'CPL is characterized by T20 matches that are thrilling. You can also use your whatsapp betting ID to select among the various types of bets like session bets and live markets.') !!}</p>
                </div>
            </a>
        </div>
        <p class="text-center" style="color:#b0b0c8;margin-top:24px;font-size:15px;">{!! $page->section('cricket_footer', 'The tournaments offer round the clock betting options hence allowing the users not to get bored because they can bet on other games during the season.') !!}</p>
        <div class="text-center" style="margin-top:20px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('cricket_btn_text', 'Get Your Mahadev Book Cricket ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- CTA / CONCLUSION --}}
<section class="section" id="cta" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('cta_title', 'Start Easily with Mahadev Book - Get Your <span class="text-gold">Instant Cricket ID</span>') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;text-align:center;">
            <p>{!! $page->section('cta_text_1', 'In conclusion, mahadev book is a strong option for users who want a fast and simple way to start online cricket betting. With easy access to an instant cricket ID, quick WhatsApp registration, and multiple betting markets, it provides a smooth and convenient experience.') !!}</p>
            <p>{!! $page->section('cta_text_2', 'Whether you are placing your first bet or already experienced, mahadev online book gives you everything you need to get started with a reliable betting ID india.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('cta_btn_text', 'Trusted Online Cricket Betting ID') !!}</a>
        </div>
    </div>
</section>

{{-- FAQ SECTION --}}
<section class="section" id="faq">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('faq_title', 'Frequently Asked <span class="text-gold">Questions</span>') !!}</h2>
        </div>
        <div class="faq-list" style="max-width:800px;margin:0 auto;">
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_1_q', 'What is the mahadev book contact number?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_1_a', 'The mahadev book contact number is usually shared via WhatsApp once you connect with the support team for registration.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_2_q', 'How can I get Mahadev Book WhatsApp number?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_2_a', 'To obtain the Mahadev Book WhatsApp number, you have to press the official WhatsApp link to register an ID.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_3_q', 'What is Mahadev exchange?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_3_a', 'Mahadev exchange is the platform where users can access different betting markets and place bets with live odds.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_4_q', 'How to get Mahadev Book demo ID?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_4_a', 'To receive a Mahadev Book demo ID, you have to request it via WhatsApp and then complete a few easy steps suggested by support.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_5_q', 'How to Contact Mahadev Book?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_5_a', 'To Contact Mahadev Book, you can use the WhatsApp support option for quick and direct communication.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_6_q', 'Is Mahadev Book safe to use?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_6_a', 'Yes, mahadev online book is designed to provide a safe betting environment where transactions are safe and the support is reliable.') !!}</p></div>
            </div>
        </div>
    </div>
</section>

@endsection
