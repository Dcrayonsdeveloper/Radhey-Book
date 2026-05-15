@extends('layouts.app')

@section('meta_title', $meta_title ?? 'Online Football Betting ID – Get Instant Football Betting ID in India')
@section('meta_description', $meta_description ?? 'Get your Online Football Betting ID instantly via WhatsApp from Radhey Book. Fast activation, live football odds, FIFA, UEFA, EPL, La Liga betting markets with secure payments and 24/7 support.')
@section('meta_keywords', $meta_keywords ?? 'online football betting ID, instant football betting ID, football betting WhatsApp number, FIFA world cup betting ID, radhey book')

@section('content')

{{-- HERO --}}
<section class="hero-section" id="hero">
    <div class="hero-carousel-wrapper">
        <div class="hero-slides">
            <div class="hero-slide active" style="background: url('{{ asset('images/New folder/banner-football.jpeg') }}') center/cover no-repeat;">
                <div class="hero-slide-overlay" style="background: rgba(0,0,0,0.55);"></div>
                <div class="hero-slide-content container">
                    <div class="hero-badge">
                        <span class="badge-pulse"></span>
                        {!! $page->section('hero_badge', "India's #1 Football Betting ID Provider") !!}
                    </div>
                    <h1 class="hero-title">{!! $page->section('hero_title', 'Online Football Betting ID – Get <span class="text-gold">Instant Football Betting ID</span> in India') !!}</h1>
                    <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'Register via WhatsApp, get activated in minutes, bet on FIFA, UEFA, EPL, La Liga and more.') !!}</p>
                    <div class="hero-cta">
                        <a href="https://wa.me/{{ $siteSettings['whatsapp_number'] ?? '917901712857' }}?text=Hi%20I%20want%20an%20Online%20Football%20Betting%20ID" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('hero_btn1_text', 'Get Your Football Betting ID') !!}</a>
                        <a href="#how-to-get" class="btn btn-outline-gold btn-lg">{!! $page->section('hero_btn2_text', 'How It Works') !!}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- INTRO --}}
<section class="section">
    <div class="container">
        <div class="page-intro">
            <p>{!! $page->section('intro_p1', "Radhey Book offers a convenient solution for obtaining your <strong>Football Betting ID</strong> in just minutes if you're seeking a rapid and reliable means to begin making bets on football online. Registration on WhatsApp is straightforward, activation is swift, and users receive immediate assistance — ensuring they can begin wagering on live football games without enduring cumbersome processes. From international leagues to UEFA matches and FIFA tournaments, Radhey Book offers a seamless betting experience with quick login and secure transactions.") !!}</p>
            <p>{!! $page->section('intro_p2', 'Getting a <strong>football betting ID provider</strong> through WhatsApp is now one of the easiest methods for football fans in India. Users can quickly connect with support, get their account details, make deposits, and start betting from mobile or desktop devices. From live football odds to instant withdrawals, Radhey Book is designed for users who want a reliable and user-friendly betting platform with quick customer assistance.') !!}</p>
        </div>
    </div>
</section>

{{-- WHAT IS --}}
<section class="section what-is-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('what_is_title', 'What is an <span class="text-gold">Online Football Betting ID</span>?') !!}</h2>
        </div>
        <div class="what-is-content">
            <p>{!! $page->section('what_is_p1', 'A <strong>Football Betting ID</strong> is an online betting account where users can bet on football matches and tournaments. This ID is useful for players who want to view betting markets for match winners, total goals, player performance, live betting, halftime scores and more.') !!}</p>
            <p>{!! $page->section('what_is_p2', 'A trusted <strong>football betting panel ID</strong> provides comprehensive access to betting options, live odds, safe wallets, and quick withdrawals. A betting ID can organize all football betting activities from a single location — whether you are interested in Premier League games, Champions League games or international tournaments.') !!}</p>
            <p>{!! $page->section('what_is_p3', 'Given that users will be looking for <strong>instant football betting ID</strong> options, they typically opt for WhatsApp registration as it is quick and offers the convenience of direct support from the betting team.') !!}</p>
            <div class="text-center mt-4">
                <a href="https://wa.me/{{ $siteSettings['whatsapp_number'] ?? '917901712857' }}?text=Hi%20I%20want%20an%20Online%20Football%20Betting%20ID" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('what_is_btn_text', 'Get Your Online Football Betting ID Today') !!}</a>
            </div>
        </div>
    </div>
</section>

{{-- BENEFITS (5 features) --}}
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('benefits_title', 'Benefits of Getting an Online Football Betting ID via <span class="text-gold">WhatsApp</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('benefits_subtitle', 'Why WhatsApp registration beats traditional sign-up methods') !!}</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.6"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                </div>
                <h3>{!! $page->section('benefit_1_title', 'Fast Registration') !!}</h3>
                <p>{!! $page->section('benefit_1_text', 'Sign up on WhatsApp easily and quickly — no lengthy forms; obtain your <strong>football betting login ID</strong> within minutes.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.6"><path d="M3 18v-6a9 9 0 0118 0v6"/><path d="M21 19a2 2 0 01-2 2h-1v-7h3v5zm-15 0a2 2 0 002 2h1v-7H3v5z"/></svg>
                </div>
                <h3>{!! $page->section('benefit_2_title', 'Instant Customer Support') !!}</h3>
                <p>{!! $page->section('benefit_2_text', 'Communicate directly with support agents about deposits, withdrawals, login and betting tips.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.6"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
                </div>
                <h3>{!! $page->section('benefit_3_title', 'Easy Deposit Process') !!}</h3>
                <p>{!! $page->section('benefit_3_text', 'UPI, bank transfer and online wallets with quick confirmation.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.6"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
                </div>
                <h3>{!! $page->section('benefit_4_title', 'Mobile-Friendly Access') !!}</h3>
                <p>{!! $page->section('benefit_4_text', 'Your <strong>betting ID India</strong> account is optimized for mobile so you can bet live from anywhere.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.6"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                </div>
                <h3>{!! $page->section('benefit_5_title', 'Quick Account Activation') !!}</h3>
                <p>{!! $page->section('benefit_5_text', '<strong>Instant football betting ID</strong> — get your account information within practically no time after verification.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- HOW TO GET (5 steps) --}}
<section class="section how-it-works-section" id="how-to-get">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('how_title', 'How to Get Your <span class="text-gold">Football Betting ID</span> via WhatsApp') !!}</h2>
            <p class="section-subtitle">{!! $page->section('how_subtitle', 'Getting your <strong>online football betting ID</strong> from Radhey Book is very simple — here are the steps.') !!}</p>
        </div>
        <div class="how-steps-grid">
            <div class="how-step">
                <div class="how-step-num">01</div>
                <h4>{!! $page->section('how_step_1_title', 'Click on WhatsApp Message') !!}</h4>
                <p>{!! $page->section('how_step_1_text', 'Click the official Radhey Book WhatsApp support link or message button to connect with the support staff for quick registration.') !!}</p>
            </div>
            <div class="how-step">
                <div class="how-step-num">02</div>
                <h4>{!! $page->section('how_step_2_title', 'Send "Hi, I Want a Football Betting ID"') !!}</h4>
                <p>{!! $page->section('how_step_2_text', 'Send a simple text and ask for your Football Betting ID. The support executive will walk you through the registration procedure.') !!}</p>
            </div>
            <div class="how-step">
                <div class="how-step-num">03</div>
                <h4>{!! $page->section('how_step_3_title', 'Share Basic Details and Make First Deposit') !!}</h4>
                <p>{!! $page->section('how_step_3_text', 'You may be asked for your name and cell number for account setup. Then deposit funds via UPI or Bank Transfer to start betting.') !!}</p>
            </div>
            <div class="how-step">
                <div class="how-step-num">04</div>
                <h4>{!! $page->section('how_step_4_title', 'Receive Your Betting ID') !!}</h4>
                <p>{!! $page->section('how_step_4_text', 'After verification, your <strong>online football betting login ID</strong> and password are sent immediately on WhatsApp.') !!}</p>
            </div>
            <div class="how-step">
                <div class="how-step-num">05</div>
                <h4>{!! $page->section('how_step_5_title', 'Login and Start Betting') !!}</h4>
                <p>{!! $page->section('how_step_5_text', 'Log in and start placing wagers on real-time live football games, leagues, and internationals with live odds.') !!}</p>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="https://wa.me/{{ $siteSettings['whatsapp_number'] ?? '917901712857' }}?text=Hi%20I%20want%20an%20Online%20Football%20Betting%20ID" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('how_btn_text', 'Get Your Online Football Betting ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- WHATSAPP NUMBER CTA --}}
<section class="section">
    <div class="container">
        <div class="wa-cta-card">
            <h2 class="wa-cta-title">{!! $page->section('wa_cta_title', 'Football Betting <span class="text-gold">WhatsApp Number</span>') !!}</h2>
            <p>{!! $page->section('wa_cta_text', 'For those looking for a trusted <strong>football betting WhatsApp number</strong>, Radhey Book provides a fast response for new registrations, deposits, withdrawals and account support. A trusted <strong>football bookie WhatsApp number</strong> enables users to prevent delays and get direct instructions to open a betting account.') !!}</p>
            <a href="https://wa.me/{{ $siteSettings['whatsapp_number'] ?? '917901712857' }}?text=Hi%20I%20want%20a%20Football%20Betting%20ID" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('wa_cta_btn_text', 'Contact via Football Betting WhatsApp Number') !!}</a>
        </div>
    </div>
</section>

{{-- TOURNAMENTS (5 cards) --}}
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('tournaments_title', 'Best <span class="text-gold">Online Football Betting ID</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('tournaments_subtitle', 'For those looking for a reliable <strong>football match betting ID</strong> in India, Radhey Book is a great choice. Access major football tournaments and live betting markets all year round.') !!}</p>
        </div>
        <div class="tournaments-grid">
            <div class="tournament-card">
                <div class="tournament-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.6"><path d="M6 9H4.5a2.5 2.5 0 010-5H6"/><path d="M18 9h1.5a2.5 2.5 0 000-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"/><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"/><path d="M18 2H6v7a6 6 0 0012 0V2z"/></svg>
                </div>
                <h3>{!! $page->section('tournament_1_title', 'FIFA World Cup') !!}</h3>
                <p>{!! $page->section('tournament_1_text', 'Your <strong>FIFA World Cup betting ID</strong> gives complete access to the biggest football tournament in the world. Place bets on match wins, goals, top scorers, penalty outcomes and live in-play odds.') !!}</p>
            </div>
            <div class="tournament-card">
                <div class="tournament-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.6"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <h3>{!! $page->section('tournament_2_title', 'UEFA Champions League') !!}</h3>
                <p>{!! $page->section('tournament_2_text', 'Millions of football fans follow the Champions League each season. Bet on match winners, goal markets, first scorers and half-time results of the most popular clubs.') !!}</p>
            </div>
            <div class="tournament-card">
                <div class="tournament-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.6"><path d="M2 4l3 12h14l3-12-6 7-4-7-4 7-6-7zm3 16h14"/></svg>
                </div>
                <h3>{!! $page->section('tournament_3_title', 'English Premier League') !!}</h3>
                <p>{!! $page->section('tournament_3_text', 'The Premier League is one of the world\'s most popular football leagues. Real-time odds for all major EPL games via Radhey Book.') !!}</p>
            </div>
            <div class="tournament-card">
                <div class="tournament-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.6"><circle cx="12" cy="12" r="10"/><path d="M12 2l3 6 6 1-4 5 1 6-6-3-6 3 1-6-4-5 6-1z"/></svg>
                </div>
                <h3>{!! $page->section('tournament_4_title', 'La Liga') !!}</h3>
                <p>{!! $page->section('tournament_4_text', 'Sports betting on Spain\'s top clubs and players with live betting markets and instant match updates.') !!}</p>
            </div>
            <div class="tournament-card">
                <div class="tournament-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.6"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
                </div>
                <h3>{!! $page->section('tournament_5_title', 'UEFA Euro Cup') !!}</h3>
                <p>{!! $page->section('tournament_5_text', 'Your <strong>trusted football betting ID</strong> gives you access to European international football betting with seamless account access and secure payment assistance.') !!}</p>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="https://wa.me/{{ $siteSettings['whatsapp_number'] ?? '917901712857' }}?text=Hi%20I%20want%20to%20bet%20on%20Football" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('tournaments_btn_text', 'Bet on Football Tournaments Today') !!}</a>
        </div>
    </div>
</section>

{{-- WHY WHATSAPP BETTER THAN FORMS (5 features) --}}
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('why_wa_title', 'Why <span class="text-gold">WhatsApp Registration</span> is Better Than Forms') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.6"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <h3>{!! $page->section('why_wa_1_title', 'Faster Process') !!}</h3>
                <p>{!! $page->section('why_wa_1_text', 'Registration on WhatsApp is much quicker than registering using a traditional signup form.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.6"><path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/></svg>
                </div>
                <h3>{!! $page->section('why_wa_2_title', 'Direct Customer Support') !!}</h3>
                <p>{!! $page->section('why_wa_2_text', 'Users can speak to customer management personnel directly, instead of receiving automated responses.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.6"><path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/></svg>
                </div>
                <h3>{!! $page->section('why_wa_3_title', 'Easy Problem Solving') !!}</h3>
                <p>{!! $page->section('why_wa_3_text', 'Live chat support helps solve issues related to deposits and withdrawals in a timely manner.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.6"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>
                </div>
                <h3>{!! $page->section('why_wa_4_title', 'Better User Experience') !!}</h3>
                <p>{!! $page->section('why_wa_4_text', 'Most users are already familiar with WhatsApp, so it is easy and comfortable for them.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.6"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                </div>
                <h3>{!! $page->section('why_wa_5_title', 'Instant Account Details') !!}</h3>
                <p>{!! $page->section('why_wa_5_text', '<strong>WhatsApp betting ID</strong> credentials are shared straight away with no long wait.') !!}</p>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="https://wa.me/{{ $siteSettings['whatsapp_number'] ?? '917901712857' }}?text=Hi%20I%20want%20a%20Live%20Football%20Betting%20ID" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('why_wa_btn_text', 'Get Your Live Football Betting ID Now') !!}</a>
        </div>
    </div>
</section>

{{-- SECURITY & PRIVACY (5 features) --}}
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('security_title', 'Security and <span class="text-gold">Privacy on WhatsApp</span>') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.6"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                </div>
                <h3>{!! $page->section('security_1_title', 'Secure Communication') !!}</h3>
                <p>{!! $page->section('security_1_text', 'WhatsApp provides encrypted messaging for safer communication during registration.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.6"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3>{!! $page->section('security_2_title', 'Privacy Protection') !!}</h3>
                <p>{!! $page->section('security_2_text', 'Basic user information is used only to set up an account and remains private.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.6"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
                </div>
                <h3>{!! $page->section('security_3_title', 'Safe Payment Assistance') !!}</h3>
                <p>{!! $page->section('security_3_text', 'Support executives help users with secure methods of deposit and withdrawal.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.6"><polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>
                </div>
                <h3>{!! $page->section('security_4_title', 'Quick Verification') !!}</h3>
                <p>{!! $page->section('security_4_text', 'No delay in verifying your account — users get a verified account without cumbersome documentation.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.6"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><polyline points="17 11 19 13 23 9"/></svg>
                </div>
                <h3>{!! $page->section('security_5_title', 'Reliable Customer Support') !!}</h3>
                <p>{!! $page->section('security_5_text', 'A reliable <strong>football betting ID provider</strong> ensures proper management of players and their accounts.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- WITHDRAWAL PROCESS (5 features) --}}
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('withdraw_title', 'Withdrawal Process via <span class="text-gold">WhatsApp</span>') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.6"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                </div>
                <h3>{!! $page->section('withdraw_1_title', 'Simple Withdrawal Requests') !!}</h3>
                <p>{!! $page->section('withdraw_1_text', 'Users can submit a withdrawal request directly via WhatsApp customer support.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.6"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                </div>
                <h3>{!! $page->section('withdraw_2_title', 'Fast Payment Updates') !!}</h3>
                <p>{!! $page->section('withdraw_2_text', 'Quick confirmation and status updates provided by the support team.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.6"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>
                </div>
                <h3>{!! $page->section('withdraw_3_title', 'Multiple Payment Methods') !!}</h3>
                <p>{!! $page->section('withdraw_3_text', 'Various withdrawal options like bank transfer, UPI and digital wallets.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.6"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <h3>{!! $page->section('withdraw_4_title', '24/7 Support Assistance') !!}</h3>
                <p>{!! $page->section('withdraw_4_text', 'If there are any issues with payments, the support team is available 24/7 for your assistance.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.6"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
                </div>
                <h3>{!! $page->section('withdraw_5_title', 'Easy Account Management') !!}</h3>
                <p>{!! $page->section('withdraw_5_text', 'A <strong>football betting panel ID</strong> lets you effortlessly keep track of balances, transactions, and wallet.') !!}</p>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="https://wa.me/{{ $siteSettings['whatsapp_number'] ?? '917901712857' }}?text=Hi%20I%20want%20a%20Football%20Betting%20Panel%20ID" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('withdraw_btn_text', 'Login to Your Football Betting Panel ID Now') !!}</a>
        </div>
    </div>
</section>

{{-- CUSTOMER CARE NUMBER --}}
<section class="section">
    <div class="container">
        <div class="page-intro">
            <h2 class="section-title">{!! $page->section('care_title', 'Football Betting <span class="text-gold">Customer Care Number</span>') !!}</h2>
            <p>{!! $page->section('care_p1', 'A trustworthy <strong>football betting WhatsApp number</strong> is vital for those who wish to get quick responses without the bother of completing lengthy forms or sitting down for an email reply. Users can call for support to get their <strong>football betting login ID</strong>, payment procedures, live betting support and account updates within seconds.') !!}</p>
            <p>{!! $page->section('care_p2', 'With Radhey Book a seamless betting experience is possible — register and access support through WhatsApp messaging. From its hassle-free registration process to the responsive WhatsApp support, Radhey Book ensures you have a seamless betting experience.') !!}</p>
        </div>
    </div>
</section>

{{-- WHY CHOOSE RADHEY BOOK --}}
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('why_choose_title', 'Why Choose <span class="text-gold">Radhey Book</span> for Football Betting?') !!}</h2>
        </div>
        <div class="why-list-card">
            <ul class="why-list">
                <li>{!! $page->section('why_choose_1', 'Quickly register an account with WhatsApp') !!}</li>
                <li>{!! $page->section('why_choose_2', 'Access to live football betting markets') !!}</li>
                <li>{!! $page->section('why_choose_3', 'Secure methods for depositing and withdrawing funds') !!}</li>
                <li>{!! $page->section('why_choose_4', 'Mobile-friendly betting platform') !!}</li>
                <li>{!! $page->section('why_choose_5', '24/7 customer support assistance') !!}</li>
                <li>{!! $page->section('why_choose_6', 'Easy login for all users') !!}</li>
                <li>{!! $page->section('why_choose_7', 'Convenience of international football competitions') !!}</li>
                <li>{!! $page->section('why_choose_8', 'Easy-to-use for beginners and regular bettors') !!}</li>
            </ul>
            <p class="why-list-footer">{!! $page->section('why_choose_footer', 'If you\'re looking for a trustworthy website for placing bets on football, Radhey Book is a great option offering quick customer support and easy account management.') !!}</p>
            <div class="text-center mt-3">
                <a href="https://wa.me/{{ $siteSettings['whatsapp_number'] ?? '917901712857' }}?text=Hi%20I%20want%20a%20Football%20Betting%20ID" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('why_choose_btn_text', 'Get Your Football Betting ID Today via Radhey Book') !!}</a>
            </div>
        </div>
    </div>
</section>

{{-- FAQ --}}
<section class="section faq-section" id="faq">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('faq_title', 'Frequently Asked <span class="text-gold">Questions</span> (FAQs)') !!}</h2>
        </div>
        <div class="faq-list">
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_1_q', 'What is an Online Football Betting ID?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_1_a', 'An <strong>Online Football Betting ID</strong> is an account on a website where you bet on football games, leagues, and tournaments from a live betting platform.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_2_q', 'How can I get an instant football betting ID?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_2_a', 'Reach out via the official <strong>football betting WhatsApp number</strong>, and you can register easily and get your ID instantly.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_3_q', 'Is Radhey Book a trusted football betting site India users can access?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_3_a', 'For football fans seeking a trustworthy <strong>football betting platform in India</strong>, Radhey Book is the perfect option — providing a hassle-free betting experience, secure payment methods, quick support, and live betting markets.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_4_q', 'Can I get support through WhatsApp?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_4_a', 'Yes, users can reach the support team directly via the <strong>football betting WhatsApp number</strong> for registrations, deposits or withdrawals.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_5_q', 'What tournaments can I bet on with my football match betting ID?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_5_a', 'You have access to betting markets for the FIFA World Cup, UEFA Champions League, Premier League, La Liga, Euro Cup and other football events globally.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_6_q', 'Why should I choose a trusted football betting ID provider?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_6_a', 'A trustworthy <strong>football betting ID</strong> gives users enhanced account security, easy withdrawals, swift customer support, and access to live football betting markets without any delays.') !!}</p></div></div>
        </div>
    </div>
</section>

<style>
.page-intro { max-width: 950px; margin: 0 auto; color: rgba(255,255,255,0.85); font-size: 16px; line-height: 1.85; }
.page-intro p { margin-bottom: 18px; }
.page-intro h2 { color: #fff; text-align: center; margin-bottom: 18px; }
.how-steps-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; max-width: 1100px; margin: 0 auto; }
.how-step { padding: 26px 22px; background: rgba(255,255,255,0.03); border: 1px solid rgba(212,175,55,0.18); border-radius: 12px; cursor: pointer; transition: transform 0.25s ease, border-color 0.25s ease; }
.how-step:hover { transform: translateY(-4px); border-color: rgba(212,175,55,0.45); }
.how-step-num { font-family: 'Orbitron', sans-serif; font-size: 26px; color: #d4af37; font-weight: 700; margin-bottom: 10px; }
.how-step h4 { color: #fff; font-size: 17px; margin-bottom: 8px; }
.how-step p { color: rgba(255,255,255,0.78); font-size: 14px; line-height: 1.7; margin: 0; }
@media (max-width: 900px) { .how-steps-grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 600px) { .how-steps-grid { grid-template-columns: 1fr; } }

.wa-cta-card { max-width: 850px; margin: 0 auto; padding: 40px 36px; text-align: center; background: linear-gradient(135deg, rgba(212,175,55,0.08), rgba(212,175,55,0.02)); border: 1px solid rgba(212,175,55,0.25); border-radius: 16px; }
.wa-cta-title { color: #fff; font-size: 28px; margin-bottom: 18px; line-height: 1.3; }
.wa-cta-card p { color: rgba(255,255,255,0.82); font-size: 16px; line-height: 1.75; margin-bottom: 20px; }
@media (max-width: 700px) { .wa-cta-card { padding: 28px 18px; } .wa-cta-title { font-size: 22px; } }

.tournaments-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; max-width: 1100px; margin: 0 auto; }
.tournament-card { padding: 24px 22px; background: rgba(255,255,255,0.03); border: 1px solid rgba(212,175,55,0.2); border-radius: 12px; cursor: pointer; transition: transform 0.25s ease, border-color 0.25s ease; }
.tournament-card:hover { transform: translateY(-4px); border-color: rgba(212,175,55,0.45); }
.tournament-icon { width: 56px; height: 56px; margin-bottom: 14px; display: flex; align-items: center; justify-content: center; background: rgba(212,175,55,0.08); border: 1px solid rgba(212,175,55,0.2); border-radius: 50%; }
.tournament-card h3 { color: #d4af37; font-size: 18px; margin-bottom: 10px; }
.tournament-card p { color: rgba(255,255,255,0.78); font-size: 14px; line-height: 1.7; margin: 0; }
@media (max-width: 900px) { .tournaments-grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 600px) { .tournaments-grid { grid-template-columns: 1fr; } }

.why-list-card { max-width: 850px; margin: 0 auto; padding: 32px 36px; background: rgba(212,175,55,0.04); border: 1px solid rgba(212,175,55,0.18); border-radius: 14px; }
.why-list { list-style: none; padding: 0; margin: 0 0 20px; }
.why-list li { position: relative; padding: 10px 0 10px 32px; color: rgba(255,255,255,0.85); font-size: 16px; border-bottom: 1px solid rgba(255,255,255,0.06); }
.why-list li:last-child { border-bottom: none; }
.why-list li::before { content: '\2713'; position: absolute; left: 0; top: 10px; color: #d4af37; font-weight: 700; font-size: 18px; }
.why-list-footer { color: rgba(255,255,255,0.85); font-style: italic; }
@media (max-width: 700px) { .why-list-card { padding: 24px 18px; } }
</style>

@endsection
