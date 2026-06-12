@extends('layouts.app')

@section('meta_title', $meta_title ?? "Radhey Book - Get Your Online Cricket ID - India's No.1 Trusted IPL Betting ID Provider")
@section('meta_description', $meta_description ?? "Get your verified and secured online cricket ID instantly with Radhey Book today. Start betting on cricket, casino and other games, with 24/7 customer support, live odds, betting insights, latest updates, and fast deposits and withdrawals.")
@section('meta_keywords', $meta_keywords ?? 'online cricket ID, IPL betting ID, online betting ID, cricket betting ID, radhey book, betting ID provider india, T20 betting ID')

@push('preload')
    {{-- Preload the active hero slide image to dramatically improve LCP.
         Without this the browser only discovers the URL after CSS parses,
         delaying first paint of the hero by hundreds of ms. --}}
    <link rel="preload" as="image" href="{{ asset('images/all banner/t20 betting id.jpg') }}" fetchpriority="high">
@endpush

@section('content')

{{-- HERO SECTION WITH CAROUSEL --}}
<section class="hero-section" id="hero">
    <div class="hero-carousel-wrapper">
        <div class="hero-slides">
            <div class="hero-slide active" style="background: url('{{ asset('images/all banner/t20 betting id.jpg') }}') center/cover no-repeat;">
                <div class="hero-slide-overlay" style="background: rgba(0,0,0,0.5);"></div>
                <div class="hero-slide-content container">
                    <div class="hero-badge">
                        <span class="badge-pulse"></span>
                        {!! $page->section('hero_slide_2_badge', "T20 Women's World Cup 2026 Live") !!}
                    </div>
                    <h2 class="hero-title">{!! $page->section('hero_slide_2_title', 'Get Your <span class="text-gold">T20 Betting ID</span> Now') !!}</h2>
                    <p class="hero-subtitle">{!! $page->section('hero_slide_2_subtitle', "Start Betting on T20 Women's World Cup 2026 Today. Get best odds with instant withdrawals, 24/7 customer support, and more!") !!}</p>
                    <div class="hero-cta">
                        <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{{ strip_tags($page->section('hero_slide_2_btn1_text', 'Get T20 Betting ID')) }}</a>
                        <a href="{!! $page->section('hero_slide_2_btn2_link', '/t20-betting-id') !!}" class="btn btn-outline-gold btn-lg">{{ strip_tags($page->section('hero_slide_2_btn2_text', 'Cricket Markets')) }}</a>
                    </div>
                </div>
            </div>
            <div class="hero-slide" data-bg="{{ asset('images/New folder/banner-football.webp') }}" style="background-color: #1a1a2e;">
                <div class="hero-slide-overlay" style="background: rgba(0,0,0,0.5);"></div>
                <div class="hero-slide-content container">
                    <div class="hero-badge">
                        <span class="badge-pulse"></span>
                        {!! $page->section('hero_slide_1_badge', "India's #1 Trusted Platform") !!}
                    </div>
                    <h2 class="hero-title">{!! $page->section('hero_slide_1_title', 'India\'s No.1 Trusted <span class="text-gold">IPL Betting ID</span> Provider') !!}</h2>
                    <p class="hero-subtitle">{!! $page->section('hero_slide_1_subtitle', 'Radhey Book connects you directly with verified IPL betting ID agents and exchanges. 100% Trust • 24/7 WhatsApp Support • Fast Withdrawals.') !!}</p>
                    <div class="hero-cta">
                        <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{{ strip_tags($page->section('hero_slide_1_btn1_text', 'Get Your FREE Betting ID Now')) }}</a>
                        <a href="{!! $page->section('hero_slide_1_btn2_link', '#how-it-works') !!}" class="btn btn-outline-gold btn-lg">{{ strip_tags($page->section('hero_slide_1_btn2_text', 'How It Works')) }}</a>
                    </div>
                </div>
            </div>
            <div class="hero-slide" data-bg="{{ asset('images/casino banner.webp') }}" style="background-color: #1a1a2e;">
                <div class="hero-slide-overlay" style="background: rgba(0,0,0,0.5);"></div>
                <div class="hero-slide-content container">
                    <div class="hero-badge">
                        <span class="badge-pulse"></span>
                        {!! $page->section('hero_slide_3_badge', 'Casino &amp; Live Games') !!}
                    </div>
                    <h2 class="hero-title">{!! $page->section('hero_slide_3_title', 'Play <span class="text-gold">Live Casino Games</span> & Win Real Money') !!}</h2>
                    <p class="hero-subtitle">{!! $page->section('hero_slide_3_subtitle', 'Teen Patti, Roulette, Blackjack, Aviator & more. Instant deposits, fast withdrawals within 5 minutes.') !!}</p>
                    <div class="hero-cta">
                        <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{{ strip_tags($page->section('hero_slide_3_btn1_text', 'Get Casino ID Now')) }}</a>
                        <a href="{!! $page->section('hero_slide_3_btn2_link', '/casino') !!}" class="btn btn-outline-gold btn-lg">{{ strip_tags($page->section('hero_slide_3_btn2_text', 'Casino Games')) }}</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="hero-slide-btn hero-prev" aria-label="Previous slide">&#10094;</button>
        <button class="hero-slide-btn hero-next" aria-label="Next slide">&#10095;</button>
        <div class="hero-dots">
            <button class="hero-dot active" data-slide="0"></button>
            <button class="hero-dot" data-slide="1"></button>
            <button class="hero-dot" data-slide="2"></button>
        </div>
    </div>
    <div class="hero-stats-bar">
        <div class="container">
            <div class="hero-stats">
                <div class="stat-item">
                    <span class="stat-number">{!! $page->section('stats_1_number', '2.0M+') !!}</span>
                    <span class="stat-label">{!! $page->section('stats_1_label', 'Active Players') !!}</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">{!! $page->section('stats_2_number', '7+') !!}</span>
                    <span class="stat-label">{!! $page->section('stats_2_label', 'Years Experience') !!}</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">{!! $page->section('stats_3_number', '365') !!}</span>
                    <span class="stat-label">{!! $page->section('stats_3_label', 'Days Service') !!}</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">{!! $page->section('stats_4_number', '24/7') !!}</span>
                    <span class="stat-label">{!! $page->section('stats_4_label', 'Customer Care') !!}</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Defer hero slides 2-3 background load until after first paint --}}
<script>
(function() {
    function loadDeferredBgs() {
        document.querySelectorAll('.hero-slide[data-bg]').forEach(function(el) {
            var url = el.getAttribute('data-bg');
            if (url) {
                el.style.background = "url('" + url + "') center/cover no-repeat, #1a1a2e";
                el.removeAttribute('data-bg');
            }
        });
    }
    if ('requestIdleCallback' in window) {
        requestIdleCallback(loadDeferredBgs, { timeout: 1500 });
    } else {
        window.addEventListener('load', function() { setTimeout(loadDeferredBgs, 200); });
    }
})();
</script>

{{-- TRUST BADGES --}}
@if($page->section('show_trust_badges', '1') !== '0')
<section class="trust-badges-section">
    <div class="container">
        <div class="trust-badges-grid">
            <div class="trust-badge">
                <div class="trust-badge-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#feba0b" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <div class="trust-badge-text">
                    {!! $page->section('trust_1_title', '100% Secure') !!}
                    <span>{!! $page->section('trust_1_text', 'Encrypted Payments') !!}</span>
                </div>
            </div>
            <div class="trust-badge">
                <div class="trust-badge-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#feba0b" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <div class="trust-badge-text">
                    {!! $page->section('trust_2_title', '24/7 Support') !!}
                    <span>{!! $page->section('trust_2_text', 'Always Available') !!}</span>
                </div>
            </div>
            <div class="trust-badge">
                <div class="trust-badge-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#feba0b" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                </div>
                <div class="trust-badge-text">
                    {!! $page->section('trust_3_title', '7+ Years Trusted') !!}
                    <span>{!! $page->section('trust_3_text', 'Since 2017') !!}</span>
                </div>
            </div>
            <div class="trust-badge">
                <div class="trust-badge-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#4ade80" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                </div>
                <div class="trust-badge-text">
                    {!! $page->section('trust_4_title', 'Instant Withdrawal') !!}
                    <span>{!! $page->section('trust_4_text', 'Within 5 Minutes') !!}</span>
                </div>
            </div>
            <div class="trust-badge">
                <div class="trust-badge-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#feba0b" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                </div>
                <div class="trust-badge-text">
                    {!! $page->section('trust_5_title', '2M+ Players') !!}
                    <span>{!! $page->section('trust_5_text', 'Active Community') !!}</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

{{-- ABOUT / INTRO SECTION --}}
@if($page->section('show_intro', '1') !== '0')
<section class="section intro-section" id="about-radhey">
    <div class="container">
        <div class="section-header">
            <h1 class="section-title">{!! $page->section('intro_title', 'Radhey Book - India\'s Leading <span class="text-gold">Online Betting ID</span> Provider') !!}</h1>
        </div>
        <div class="split-row image-left">
            <div class="split-media">
                <img src="{{ asset('images/t20-cricket-betting-id.jpg') }}" alt="T20 Cricket Betting ID" width="736" height="1046" loading="lazy" decoding="async">
            </div>
            <div class="split-content">
                <div class="intro-content">
                    <p>{!! $page->section('intro_p1', 'Welcome to Radhey Book, India\'s leading online betting platform, where we help people across India to create their <strong>Online football betting ID</strong>. Without any stressful and hassle process making it smooth for the users to get their IDs. Our main focus is on providing a premium and reliable betting experience to the users who want to place bets on various football betting tournaments. We are known for our secure and trustworthy systems, the platforms we collaborate with are known to be reliable and highly secure, so users can watch live matches and engage in online betting without any problems or inconveniences.') !!}</p>
                    <p>{!! $page->section('intro_p2', 'No complicated applications and third parties are needed. Users can get a simple, verified <strong>football exchange ID</strong> via the <strong>football betting whatsapp number</strong> that gives direct access to major live football, cricket, and other tournaments. Deposits and withdrawals are easy with convenient payment options like UPI, Paytm, and Google Pay. If you face any issues while using your Football Betting ID, our dedicated support team is available 24/7 to assist you promptly.') !!}</p>
                    <div class="intro-pillars">
                        <span>100% Trust</span>
                        <span>24/7 WhatsApp Support</span>
                        <span>Fast Withdrawal</span>
                    </div>
                    <div class="mt-4">
                        <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('intro_btn_text', 'Get Your IPL Betting ID Today') !!}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

{{-- WHY 2026 IS THE BEST YEAR --}}
@if($page->section('show_why_2026', '1') !== '0')
<section class="section why-2026-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('why_2026_title', 'Why <span class="text-gold">2026</span> is the Best Year to Start Betting with Online Cricket ID') !!}</h2>
            <p class="section-subtitle">{!! $page->section('why_2026_subtitle', 'The football season in 2026 will be a huge season for football supporters and bookmakers around the globe. As football tournaments like FIFA, UEFA, international tournaments, football leagues, and football exchange betting are catching up in the game, it is the ideal time to obtain your <strong>football betting ID</strong> and savor undisturbed live football betting markets.') !!}</p>
        </div>
        <div class="split-row image-right">
            <div class="split-media">
                <img src="{{ asset('images/t20-cricket-betting-id-provider.jpg') }}" alt="T20 Cricket Betting ID Provider" width="473" height="475" loading="lazy" decoding="async">
            </div>
            <div class="split-content">
                <div class="why-2026-card">
                    <h3 class="why-2026-heading">{!! $page->section('why_2026_signup_heading', 'Why sign up now?') !!}</h3>
                    <ul class="why-2026-list">
                        <li>{!! $page->section('why_2026_li_1', 'Unlimited platform access with one ID') !!}</li>
                        <li>{!! $page->section('why_2026_li_2', 'Real-time odds updated every ball') !!}</li>
                        <li>{!! $page->section('why_2026_li_3', 'Live match streaming synced with betting') !!}</li>
                        <li>{!! $page->section('why_2026_li_4', 'Instant UPI deposits in seconds') !!}</li>
                        <li>{!! $page->section('why_2026_li_5', 'Built-in responsible gaming controls') !!}</li>
                        <li>{!! $page->section('why_2026_li_6', 'AI-powered insights for smarter decisions') !!}</li>
                    </ul>
                    <p class="why-2026-footer">{!! $page->section('why_2026_footer', 'No hassle, no time-wasting — all you need is fast access to all the big games. <strong>Get your online football betting ID now and stay up to date.</strong>') !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

{{-- WHAT IS IPL BETTING ID --}}
@if($page->section('show_what_is', '1') !== '0')
<section class="section what-is-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('what_is_title', 'What is <span class="text-gold">IPL Betting ID</span>?') !!}</h2>
        </div>
        <div class="split-row image-left">
            <div class="split-media">
                <img src="{{ asset('images/cricket-betting-id.jpg') }}" alt="Cricket Betting ID" width="473" height="475" loading="lazy" decoding="async">
            </div>
            <div class="split-content">
                <div class="what-is-content">
                    <p>{!! $page->section('what_is_p1', 'A <strong>football betting ID</strong> is a safe login ID that provides users with access to football exchange platforms and wager on football matches, FIFA tournaments, and live football markets.') !!}</p>
                    <p>{!! $page->section('what_is_p2', 'A secure <strong>online football betting ID</strong> streamlines football betting and offers a safe betting environment for players to enjoy football betting globally.') !!}</p>
                    <p>{!! $page->section('what_is_p3', 'If you are looking to engage in FIFA live betting, UEFA matches, or even domestic football leagues, a trusted <strong>football exchange ID</strong> is a crucial initial step towards a secure football betting experience.') !!}</p>
                    <div class="mt-4">
                        <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('what_is_btn_text', 'Get Your IPL Betting ID Today') !!}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

{{-- WHY DO YOU NEED AN IPL BETTING ID --}}
@if($page->section('show_why_need', '1') !== '0')
<section class="section why-need-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('why_need_title', 'Why Do You Need an <span class="text-gold">IPL Betting ID</span>?') !!}</h2>
            <p class="section-subtitle">{!! $page->section('why_need_subtitle', 'Players must have a trusted and legitimate <strong>football exchange ID</strong> to enter into the live football betting market and FIFA World Cup betting platforms. Football betting markets are only accessible when the ID is active. A trusted <strong>football betting ID</strong> offers several advantages.') !!}</p>
        </div>
        <div class="why-need-carousel" id="whyNeedCarousel">
            <button class="why-need-carousel-btn why-need-carousel-prev" type="button" aria-label="Previous">&#10094;</button>
            <div class="why-need-carousel-viewport">
                <div class="features-grid why-need-carousel-track">
                    <div class="feature-card why-need-carousel-slide">
                        <div class="feature-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#feba0b" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                        </div>
                        <h3>{!! $page->section('why_need_1_title', 'Quick ID Activation') !!}</h3>
                        <p>{!! $page->section('why_need_1_text', 'Activate your ID in under 2 minutes and play immediately.') !!}</p>
                    </div>
                    <div class="feature-card why-need-carousel-slide">
                        <div class="feature-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#feba0b" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        </div>
                        <h3>{!! $page->section('why_need_2_title', 'Multiple Cricket Tournaments') !!}</h3>
                        <p>{!! $page->section('why_need_2_text', 'Enjoy betting on IPL, T20 World Cup, ODI and Test matches.') !!}</p>
                    </div>
                    <div class="feature-card why-need-carousel-slide">
                        <div class="feature-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#feba0b" stroke-width="1.5"><path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/></svg>
                        </div>
                        <h3>{!! $page->section('why_need_3_title', 'Live Matches & Odds') !!}</h3>
                        <p>{!! $page->section('why_need_3_text', 'Keep up with real-time matches and live betting odds.') !!}</p>
                    </div>
                    <div class="feature-card why-need-carousel-slide">
                        <div class="feature-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#feba0b" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        </div>
                        <h3>{!! $page->section('why_need_4_title', 'Secure & Safe Platform') !!}</h3>
                        <p>{!! $page->section('why_need_4_text', 'Your data is protected with advanced end-to-end encryption.') !!}</p>
                    </div>
                    <div class="feature-card why-need-carousel-slide">
                        <div class="feature-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#feba0b" stroke-width="1.5"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
                        </div>
                        <h3>{!! $page->section('why_need_5_title', 'Instant Withdrawals') !!}</h3>
                        <p>{!! $page->section('why_need_5_text', 'Withdraw your winnings within just 5 minutes — no delays.') !!}</p>
                    </div>
                    <div class="feature-card why-need-carousel-slide">
                        <div class="feature-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#feba0b" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/></svg>
                        </div>
                        <h3>{!! $page->section('why_need_6_title', 'User-Friendly Dashboard') !!}</h3>
                        <p>{!! $page->section('why_need_6_text', 'Experience a simple, clean, and easy-to-use interface.') !!}</p>
                    </div>
                </div>
            </div>
            <button class="why-need-carousel-btn why-need-carousel-next" type="button" aria-label="Next">&#10095;</button>
            <div class="why-need-carousel-dots" id="whyNeedCarouselDots"></div>
        </div>
        <style>
            .why-need-carousel { position: relative; }
            .why-need-carousel-viewport { overflow: visible; }
            .why-need-carousel-btn, .why-need-carousel-dots { display: none; }
            @media (max-width: 768px) {
                .why-need-carousel { padding: 0 36px; }
                .why-need-carousel-viewport { overflow: hidden !important; width: 100%; }
                .why-need-carousel-track,
                .why-need-carousel .features-grid {
                    display: flex !important;
                    flex-wrap: nowrap !important;
                    grid-template-columns: none !important;
                    gap: 16px !important;
                    margin: 0 !important;
                    padding: 0 !important;
                    transition: transform 0.45s cubic-bezier(0.4, 0, 0.2, 1);
                    will-change: transform;
                }
                .why-need-carousel-slide {
                    box-sizing: border-box;
                }
                .why-need-carousel-btn {
                    display: flex !important;
                    position: absolute;
                    top: 50%;
                    transform: translateY(-50%);
                    width: 36px;
                    height: 36px;
                    border-radius: 50%;
                    background: linear-gradient(135deg, #d4af37, #f5d060);
                    color: #1a1a2e;
                    border: none;
                    cursor: pointer;
                    font-size: 14px;
                    font-weight: 700;
                    align-items: center;
                    justify-content: center;
                    box-shadow: 0 4px 15px rgba(212,175,55,0.35);
                    z-index: 2;
                }
                .why-need-carousel-prev { left: 0; }
                .why-need-carousel-next { right: 0; }
                .why-need-carousel-dots {
                    display: flex !important;
                    flex-wrap: wrap;
                    justify-content: center;
                    gap: 8px;
                    margin-top: 20px;
                    max-width: 260px;
                    margin-left: auto;
                    margin-right: auto;
                }
                .why-need-carousel-dots button {
                    width: 9px;
                    height: 9px;
                    border-radius: 50%;
                    padding: 0;
                    background: rgba(212,175,55,0.3);
                    border: none;
                    cursor: pointer;
                    transition: background 0.3s, transform 0.3s;
                }
                .why-need-carousel-dots button.is-active {
                    background: #d4af37;
                    transform: scale(1.3);
                }
            }
        </style>
        <script>
            (function() {
                var root = document.getElementById('whyNeedCarousel');
                if (!root) return;
                var viewport = root.querySelector('.why-need-carousel-viewport');
                var track = root.querySelector('.why-need-carousel-track');
                var slides = root.querySelectorAll('.why-need-carousel-slide');
                var prev = root.querySelector('.why-need-carousel-prev');
                var next = root.querySelector('.why-need-carousel-next');
                var dotsWrap = document.getElementById('whyNeedCarouselDots');
                var total = slides.length;
                var index = 0;
                var autoTimer;
                var GAP = 16;

                function isMobile() { return window.innerWidth <= 768; }

                function applySizes() {
                    if (!isMobile()) {
                        slides.forEach(function(s) {
                            s.style.width = '';
                            s.style.minWidth = '';
                            s.style.maxWidth = '';
                            s.style.flex = '';
                        });
                        track.style.width = '';
                        track.style.transform = '';
                        return;
                    }
                    var w = viewport.clientWidth;
                    slides.forEach(function(s) {
                        s.style.width = w + 'px';
                        s.style.minWidth = w + 'px';
                        s.style.maxWidth = w + 'px';
                        s.style.flex = '0 0 ' + w + 'px';
                    });
                    track.style.width = (w * total + GAP * (total - 1)) + 'px';
                }

                function render() {
                    applySizes();
                    if (!isMobile()) return;
                    var w = viewport.clientWidth;
                    var offset = index * (w + GAP);
                    track.style.transform = 'translateX(-' + offset + 'px)';
                    dotsWrap.querySelectorAll('button').forEach(function(d, i) { d.classList.toggle('is-active', i === index); });
                }

                function buildDots() {
                    dotsWrap.innerHTML = '';
                    for (var i = 0; i < total; i++) {
                        (function(i) {
                            var b = document.createElement('button');
                            b.type = 'button';
                            b.setAttribute('aria-label', 'Go to feature ' + (i + 1));
                            b.addEventListener('click', function() { index = i; render(); resetAuto(); });
                            dotsWrap.appendChild(b);
                        })(i);
                    }
                }

                function go(delta) {
                    index = index + delta;
                    if (index >= total) index = 0;
                    if (index < 0) index = total - 1;
                    render();
                }

                function resetAuto() {
                    clearInterval(autoTimer);
                    if (!isMobile()) return;
                    autoTimer = setInterval(function() { go(1); }, 6000);
                }

                var touchStartX = 0;
                var touchEndX = 0;
                viewport.addEventListener('touchstart', function(e) { touchStartX = e.changedTouches[0].screenX; }, { passive: true });
                viewport.addEventListener('touchend', function(e) {
                    touchEndX = e.changedTouches[0].screenX;
                    var diff = touchStartX - touchEndX;
                    if (Math.abs(diff) > 40) { go(diff > 0 ? 1 : -1); resetAuto(); }
                }, { passive: true });

                prev.addEventListener('click', function() { go(-1); resetAuto(); });
                next.addEventListener('click', function() { go(1); resetAuto(); });
                window.addEventListener('resize', function() { render(); resetAuto(); });

                buildDots();
                render();
                window.addEventListener('load', function() { render(); resetAuto(); });
            })();
        </script>
        <div class="text-center mt-4">
            <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('why_need_btn_text', 'Get Your IPL Betting ID Now') !!}</a>
        </div>
    </div>
</section>
@endif

{{-- TRUSTED PROVIDER CTA --}}
@if($page->section('show_trust_cta', '1') !== '0')
<section class="section trust-cta-section">
    <div class="container">
        <div class="trust-cta-card">
            <div class="split-row image-right">
                <div class="split-media">
                    <img src="{{ asset('images/homepage img.webp') }}" alt="Trusted IPL Betting ID Provider" loading="lazy" decoding="async">
                </div>
                <div class="split-content">
                    <div class="trust-cta-content">
                        <h2 class="trust-cta-title">{!! $page->section('trust_cta_title', 'Are You Looking For A Secure and Trusted <span class="text-gold">IPL Betting ID Provider</span>?') !!}</h2>
                        <p>{!! $page->section('trust_cta_p1', 'One of the crucial factors in safe football betting is finding a secure and reliable <strong>football betting ID provider</strong>. We offer trustworthy and authentic football exchange IDs that are activated immediately and have safe football betting access.') !!}</p>
                        <p>{!! $page->section('trust_cta_p2', 'Fast activation process, secure systems and reliable customer assistance are some of the factors that make our football exchange services trustworthy and preferred by thousands of football bettors across India.') !!}</p>
                        <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('trust_cta_btn_text', 'Get Your Trusted IPL Betting ID Now') !!}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<style>
.intro-section .intro-content { color: rgba(255,255,255,0.85); font-size: 16px; line-height: 1.85; }
.intro-section .intro-content p { margin-bottom: 18px; }
.intro-pillars { display: flex; flex-wrap: wrap; gap: 14px 28px; margin: 28px 0 8px; padding: 18px 20px; background: rgba(212,175,55,0.06); border: 1px solid rgba(212,175,55,0.18); border-radius: 12px; }
.intro-pillars span { color: #f5d060; font-size: 15px; }
.why-2026-section .why-2026-card { padding: 32px 36px; background: rgba(212,175,55,0.04); border: 1px solid rgba(212,175,55,0.18); border-radius: 14px; }
.why-2026-heading { color: #d4af37; font-size: 22px; margin-bottom: 18px; }
.why-2026-list { list-style: none; padding: 0; margin: 0 0 20px; }
.why-2026-list li { position: relative; padding: 10px 0 10px 32px; color: rgba(255,255,255,0.85); font-size: 16px; border-bottom: 1px solid rgba(255,255,255,0.06); }
.why-2026-list li:last-child { border-bottom: none; }
.why-2026-list li::before { content: '\2713'; position: absolute; left: 0; top: 10px; color: #d4af37; font-weight: 700; font-size: 18px; }
.why-2026-footer { color: rgba(255,255,255,0.75); font-style: italic; margin: 0; }
.what-is-section .what-is-content { color: rgba(255,255,255,0.85); font-size: 16px; line-height: 1.85; }
.what-is-content p { margin-bottom: 18px; }
.trust-cta-section .trust-cta-card { padding: 40px 36px; background: linear-gradient(135deg, rgba(212,175,55,0.08), rgba(212,175,55,0.02)); border: 1px solid rgba(212,175,55,0.25); border-radius: 16px; }
.trust-cta-title { color: #fff; font-size: 30px; margin-bottom: 22px; line-height: 1.3; }
.trust-cta-content p { color: rgba(255,255,255,0.82); font-size: 16px; line-height: 1.8; margin-bottom: 16px; }

/* Reusable two-column image + text rows */
.split-row { display: flex; align-items: stretch; gap: 48px; max-width: 1100px; margin: 0 auto; }
.split-row .split-media { flex: 1 1 45%; min-width: 0; display: flex; }
.split-row .split-media img { width: 100%; height: 100%; min-height: 340px; object-fit: cover; border-radius: 16px; box-shadow: 0 12px 40px rgba(0,0,0,0.35); border: 1px solid rgba(212,175,55,0.18); display: block; }
.split-row .split-content { flex: 1 1 55%; min-width: 0; display: flex; flex-direction: column; justify-content: center; }
.split-row.image-right { flex-direction: row-reverse; }
.split-row.image-left  { flex-direction: row; }
@media (max-width: 900px) {
    .split-row, .split-row.image-right, .split-row.image-left { flex-direction: column; gap: 28px; align-items: stretch; }
    .split-row .split-media img { border-radius: 12px; min-height: 240px; max-height: 360px; }
    .split-row .split-content { justify-content: flex-start; }
}

@media (max-width: 700px) {
    .intro-pillars { gap: 10px 16px; padding: 14px; }
    .why-2026-section .why-2026-card { padding: 24px 18px; }
    .trust-cta-section .trust-cta-card { padding: 28px 18px; }
    .trust-cta-title { font-size: 22px; }
}
</style>

{{-- LIVE ODDS TABLE --}}
@if(false && $page->section('show_live_odds', '1') !== '0')
<section class="section live-odds-section" id="live-odds">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">LIVE</span>
            <h2 class="section-title">Live Cricket <span class="text-gold">Matches</span></h2>
            <p class="section-subtitle">Real-time odds updated every 3 seconds</p>
        </div>
        <div class="odds-table-wrapper">
            <table class="odds-table" id="liveOddsTable">
                <thead>
                    <tr>
                        <th>Match</th>
                        <th>Status</th>
                        <th>Date/Time</th>
                        <th>1</th>
                        <th>X</th>
                        <th>2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="match-teams">
                            <span class="team">India</span>
                            <span class="vs">vs</span>
                            <span class="team">Australia</span>
                        </td>
                        <td><span class="status-live">LIVE</span></td>
                        <td>Today, 2:30 PM</td>
                        <td class="odds-cell"><span class="odd" data-odd="1.85">1.85</span></td>
                        <td class="odds-cell"><span class="odd" data-odd="3.40">3.40</span></td>
                        <td class="odds-cell"><span class="odd" data-odd="2.10">2.10</span></td>
                    </tr>
                    <tr>
                        <td class="match-teams">
                            <span class="team">Mumbai Indians</span>
                            <span class="vs">vs</span>
                            <span class="team">Chennai Super Kings</span>
                        </td>
                        <td><span class="status-live">LIVE</span></td>
                        <td>Today, 7:30 PM</td>
                        <td class="odds-cell"><span class="odd" data-odd="1.95">1.95</span></td>
                        <td class="odds-cell"><span class="odd" data-odd="3.20">3.20</span></td>
                        <td class="odds-cell"><span class="odd" data-odd="1.90">1.90</span></td>
                    </tr>
                    <tr>
                        <td class="match-teams">
                            <span class="team">RCB</span>
                            <span class="vs">vs</span>
                            <span class="team">KKR</span>
                        </td>
                        <td><span class="status-upcoming">UPCOMING</span></td>
                        <td>Tomorrow, 3:30 PM</td>
                        <td class="odds-cell"><span class="odd" data-odd="2.05">2.05</span></td>
                        <td class="odds-cell"><span class="odd" data-odd="3.50">3.50</span></td>
                        <td class="odds-cell"><span class="odd" data-odd="1.80">1.80</span></td>
                    </tr>
                    <tr>
                        <td class="match-teams">
                            <span class="team">Rajasthan Royals</span>
                            <span class="vs">vs</span>
                            <span class="team">Delhi Capitals</span>
                        </td>
                        <td><span class="status-upcoming">UPCOMING</span></td>
                        <td>Tomorrow, 7:30 PM</td>
                        <td class="odds-cell"><span class="odd" data-odd="1.75">1.75</span></td>
                        <td class="odds-cell"><span class="odd" data-odd="3.60">3.60</span></td>
                        <td class="odds-cell"><span class="odd" data-odd="2.20">2.20</span></td>
                    </tr>
                    <tr>
                        <td class="match-teams">
                            <span class="team">England</span>
                            <span class="vs">vs</span>
                            <span class="team">South Africa</span>
                        </td>
                        <td><span class="status-result">RESULT</span></td>
                        <td>Yesterday</td>
                        <td class="odds-cell"><span class="odd" data-odd="1.60">1.60</span></td>
                        <td class="odds-cell"><span class="odd" data-odd="3.80">3.80</span></td>
                        <td class="odds-cell"><span class="odd" data-odd="2.45">2.45</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endif

{{-- GET YOUR ID SECTION --}}
@if($page->section('show_get_id', '1') !== '0')
<section class="section get-id-section" id="get-id">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('get_id_title', 'Get Your <span class="text-gold">Betting ID</span> in 2 Minutes') !!}</h2>
            <p class="section-subtitle">{!! $page->section('get_id_subtitle', 'Simple, fast, and secure. Start betting in just 2 easy steps.') !!}</p>
        </div>
        <div class="get-id-steps">
            <div class="step-card">
                <div class="step-number">1</div>
                <div class="step-icon">
                    <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#feba0b" stroke-width="1.5"><path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/></svg>
                </div>
                <h3>{!! $page->section('get_id_step_1_title', 'Contact Us on WhatsApp') !!}</h3>
                <p>{!! $page->section('get_id_step_1_text', 'Send us a simple "Hi" on WhatsApp and our team will respond instantly.') !!}</p>
            </div>
            <div class="step-connector">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="#feba0b"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </div>
            <div class="step-card">
                <div class="step-number">2</div>
                <div class="step-icon">
                    <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#feba0b" stroke-width="1.5"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                </div>
                <h3>{!! $page->section('get_id_step_2_title', 'Get Your FREE Betting ID') !!}</h3>
                <p>{!! $page->section('get_id_step_2_text', 'Receive your verified betting ID within minutes. Start playing immediately!') !!}</p>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('get_id_btn_text', 'Get Your ID Now') !!}</a>
        </div>
    </div>
</section>
@endif

{{-- BONUS TIMER SECTION --}}
@if($page->section('show_bonus', '1') !== '0')
<section class="section bonus-section" id="bonus">
    <div class="container">
        <div class="bonus-card">
            <div class="bonus-content">
                <span class="bonus-badge">{!! $page->section('bonus_badge', 'LIMITED TIME OFFER') !!}</span>
                <h2 class="bonus-title">{!! $page->section('bonus_title', 'Get <span class="text-gold">Welcome Bonus</span> on First Deposit!') !!}</h2>
                <p class="bonus-text">{!! $page->section('bonus_text', 'Sign up today and double your first deposit. Don\'t miss out on this exclusive offer!') !!}</p>
                <div class="countdown-timer" id="bonusTimer">
                    <div class="timer-block">
                        <span class="timer-value" id="hours">23</span>
                        <span class="timer-label">Hours</span>
                    </div>
                    <div class="timer-separator">:</div>
                    <div class="timer-block">
                        <span class="timer-value" id="minutes">59</span>
                        <span class="timer-label">Minutes</span>
                    </div>
                    <div class="timer-separator">:</div>
                    <div class="timer-block">
                        <span class="timer-value" id="seconds">59</span>
                        <span class="timer-label">Seconds</span>
                    </div>
                </div>
                <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('bonus_btn_text', 'Claim Your Bonus Now') !!}</a>
            </div>
        </div>
    </div>
</section>
@endif

{{-- WHY CHOOSE US --}}
@if($page->section('show_why_choose', '1') !== '0')
<section class="section why-choose-section" id="why-choose">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('why_choose_title', 'What Sets <span class="text-gold">Radhey Book</span> Apart?') !!}</h2>
            <p class="section-subtitle">{!! $page->section('why_choose_subtitle', 'Genuine Features with 24/7 Support — trusted by millions of players across India') !!}</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#feba0b" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                </div>
                <h3>{!! $page->section('why_1_title', 'Instant ID Activation') !!}</h3>
                <p>{!! $page->section('why_1_text', 'Users can receive their <strong>football exchange ID</strong> within minutes through WhatsApp support. No lengthy registration process.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#feba0b" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3>{!! $page->section('why_2_title', '100% Safe & Secure') !!}</h3>
                <p>{!! $page->section('why_2_text', 'Your data and transactions are fully encrypted and protected. We prioritize your privacy.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#feba0b" stroke-width="1.5"><path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/></svg>
                </div>
                <h3>{!! $page->section('why_3_title', '24/7 WhatsApp Support') !!}</h3>
                <p>{!! $page->section('why_3_text', 'Our dedicated support team is available round the clock via <strong>live football betting id</strong> to assist you with any queries.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#feba0b" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <h3>{!! $page->section('why_4_title', '7 Years Experience') !!}</h3>
                <p>{!! $page->section('why_4_text', 'With 7+ years in the industry, we are one of the most experienced betting ID providers in India.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#feba0b" stroke-width="1.5"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
                </div>
                <h3>{!! $page->section('why_5_title', 'Fast Withdrawals') !!}</h3>
                <p>{!! $page->section('why_5_text', 'Withdraw your winnings within 5 minutes. We support UPI, GPay, Paytm, PhonePe & Bank Transfer.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#feba0b" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                </div>
                <h3>{!! $page->section('why_6_title', '2 Million+ Players') !!}</h3>
                <p>{!! $page->section('why_6_text', 'Join the community of over 2 million active players who trust Radhey Book.') !!}</p>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('why_choose_btn_text', 'Get Your IPL Betting ID Now & Start Betting') !!}</a>
        </div>
    </div>
</section>
@endif

{{-- HOW IT WORKS --}}
@if($page->section('show_how_it_works', '1') !== '0')
<section class="section how-it-works-section" id="how-it-works">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('how_it_works_title', 'How to Create an <span class="text-gold">IPL Betting ID</span>?') !!}</h2>
            <p class="section-subtitle">{!! $page->section('how_it_works_subtitle', 'Users can create their IPL Betting ID within just a few minutes.') !!}</p>
        </div>
        <div class="steps-carousel" id="stepsCarousel">
            <button class="steps-carousel-btn steps-carousel-prev" type="button" aria-label="Previous">&#10094;</button>
            <div class="steps-carousel-viewport">
                <div class="steps-carousel-track">
                    <div class="step-item steps-carousel-slide">
                        <div class="step-num">01</div>
                        <h4>{!! $page->section('how_step_1_title', 'Click the WhatsApp Link') !!}</h4>
                        <p>{!! $page->section('how_step_1_text', 'Start by clicking the WhatsApp link on Radhey Book to connect directly with the support team.') !!}</p>
                    </div>
                    <div class="step-item steps-carousel-slide">
                        <div class="step-num">02</div>
                        <h4>{!! $page->section('how_step_2_title', 'Send a Message') !!}</h4>
                        <p>{!! $page->section('how_step_2_text', 'Text "Hi, I want a Radhey Book ID" so the team can process your request quickly.') !!}</p>
                    </div>
                    <div class="step-item steps-carousel-slide">
                        <div class="step-num">03</div>
                        <h4>{!! $page->section('how_step_3_title', 'Share Details & Deposit') !!}</h4>
                        <p>{!! $page->section('how_step_3_text', 'Enter your basic information and make the initial deposit to open an account.') !!}</p>
                    </div>
                    <div class="step-item steps-carousel-slide">
                        <div class="step-num">04</div>
                        <h4>{!! $page->section('how_step_4_title', 'Get Your ID') !!}</h4>
                        <p>{!! $page->section('how_step_4_text', 'After verification, your <strong>Football Exchange ID</strong> will be created and shared with you.') !!}</p>
                    </div>
                    <div class="step-item steps-carousel-slide">
                        <div class="step-num">05</div>
                        <h4>{!! $page->section('how_step_5_title', 'Log In & Start') !!}</h4>
                        <p>{!! $page->section('how_step_5_text', 'Log in with your ID and immediately start betting on live matches.') !!}</p>
                    </div>
                    <div class="step-item steps-carousel-slide">
                        <div class="step-num">06</div>
                        <h4>{!! $page->section('how_step_6_title', 'Withdraw Winnings') !!}</h4>
                        <p>{!! $page->section('how_step_6_text', 'Withdraw your winnings instantly within 5 minutes via UPI, GPay, Paytm, PhonePe or Bank Transfer.') !!}</p>
                    </div>
                </div>
            </div>
            <button class="steps-carousel-btn steps-carousel-next" type="button" aria-label="Next">&#10095;</button>
            <div class="steps-carousel-dots" id="stepsCarouselDots"></div>
        </div>
        <style>
            .steps-carousel { position: relative; }
            .steps-carousel-viewport { overflow: hidden; }
            .steps-carousel-track { display: flex; gap: 24px; transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1); }
            .steps-carousel-slide { min-width: 0; margin: 0; }
            .steps-carousel-btn {
                position: absolute; top: 50%; transform: translateY(-50%);
                width: 40px; height: 40px; border-radius: 50%;
                background: linear-gradient(135deg, #d4af37, #f5d060);
                color: #1a1a2e; border: none; cursor: pointer;
                font-size: 16px; font-weight: 700;
                display: flex; align-items: center; justify-content: center;
                box-shadow: 0 4px 15px rgba(212,175,55,0.35);
                transition: transform 0.2s ease, box-shadow 0.2s ease; z-index: 2;
            }
            .steps-carousel-btn:hover { transform: translateY(-50%) scale(1.1); box-shadow: 0 6px 22px rgba(212,175,55,0.55); }
            .steps-carousel-prev { left: 0; }
            .steps-carousel-next { right: 0; }
            .steps-carousel-dots { display: flex; justify-content: center; gap: 10px; margin-top: 25px; }
            .steps-carousel-dots button {
                width: 10px; height: 10px; border-radius: 50%; padding: 0;
                background: rgba(212,175,55,0.3); border: none; cursor: pointer;
                transition: background 0.3s ease, transform 0.3s ease;
            }
            .steps-carousel-dots button.is-active { background: #d4af37; transform: scale(1.3); }
            /* Desktop: show all 6 as a 3-col grid, no carousel */
            @media (min-width: 901px) {
                .steps-carousel { padding: 0; }
                .steps-carousel .steps-carousel-btn,
                .steps-carousel .steps-carousel-dots { display: none !important; }
                .steps-carousel-viewport { overflow: visible; }
                .steps-carousel-track { display: grid !important; grid-template-columns: repeat(3, 1fr); gap: 24px; transform: none !important; }
                .steps-carousel-slide { flex: none !important; }
            }
            /* Tablet */
            @media (max-width: 900px) {
                .steps-carousel { padding: 0 40px; }
                .steps-carousel-slide { flex: 0 0 calc((100% - 24px) / 2); }
            }
            /* Mobile */
            @media (max-width: 600px) {
                .steps-carousel { padding: 0 36px; }
                .steps-carousel-slide { flex: 0 0 100%; }
                .steps-carousel-btn { width: 36px; height: 36px; font-size: 14px; }
            }
        </style>
        <script>
            (function() {
                var root = document.getElementById('stepsCarousel');
                if (!root) return;
                var track = root.querySelector('.steps-carousel-track');
                var slides = root.querySelectorAll('.steps-carousel-slide');
                var prev = root.querySelector('.steps-carousel-prev');
                var next = root.querySelector('.steps-carousel-next');
                var dotsWrap = document.getElementById('stepsCarouselDots');
                var total = slides.length;
                var index = 0;
                var autoTimer;

                function isCarousel() { return window.innerWidth <= 900; }

                function visibleCount() {
                    var w = window.innerWidth;
                    if (w <= 600) return 1;
                    return 2;
                }

                function maxIndex() { return Math.max(0, total - visibleCount()); }

                function render() {
                    if (!isCarousel()) {
                        track.style.transform = '';
                        slides.forEach(function(s) { s.style.flexBasis = ''; });
                        return;
                    }
                    var vc = visibleCount();
                    var gap = 24;
                    var trackWidth = track.parentElement.clientWidth;
                    var slideWidth = (trackWidth - gap * (vc - 1)) / vc;
                    slides.forEach(function(s) { s.style.flexBasis = slideWidth + 'px'; });
                    var offset = (slideWidth + gap) * index;
                    track.style.transform = 'translateX(-' + offset + 'px)';
                    dotsWrap.querySelectorAll('button').forEach(function(d, i) { d.classList.toggle('is-active', i === index); });
                }

                function buildDots() {
                    dotsWrap.innerHTML = '';
                    var pages = maxIndex() + 1;
                    for (var i = 0; i < pages; i++) {
                        (function(i) {
                            var b = document.createElement('button');
                            b.type = 'button';
                            b.setAttribute('aria-label', 'Go to step ' + (i + 1));
                            b.addEventListener('click', function() { index = i; render(); resetAuto(); });
                            dotsWrap.appendChild(b);
                        })(i);
                    }
                }

                function go(delta) {
                    var m = maxIndex();
                    index = index + delta;
                    if (index > m) index = 0;
                    if (index < 0) index = m;
                    render();
                }

                function resetAuto() {
                    clearInterval(autoTimer);
                    if (!isCarousel()) return;
                    autoTimer = setInterval(function() { go(1); }, 4500);
                }

                prev.addEventListener('click', function() { go(-1); resetAuto(); });
                next.addEventListener('click', function() { go(1); resetAuto(); });
                root.addEventListener('mouseenter', function() { clearInterval(autoTimer); });
                root.addEventListener('mouseleave', resetAuto);
                window.addEventListener('resize', function() {
                    var m = maxIndex();
                    if (index > m) index = m;
                    buildDots();
                    render();
                });

                buildDots();
                render();
                resetAuto();
            })();
        </script>
        <div class="text-center mt-4">
            <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('how_it_works_btn_text', 'Get Your IPL Betting ID Today') !!}</a>
        </div>
    </div>
</section>
@endif

{{-- HOW DOES IPL BETTING ID WORK --}}
@if($page->section('show_how_id_works', '1') !== '0')
<section class="section how-id-works-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('how_id_works_title', 'How Does <span class="text-gold">IPL Betting ID</span> Work?') !!}</h2>
            <p class="section-subtitle">{!! $page->section('how_id_works_subtitle', 'Are you new to betting? Here are the steps and full process for your IPL Betting ID — from start to end, deposits to withdrawals.') !!}</p>
        </div>
        <div class="how-id-works-grid">
            <div class="how-id-works-card">
                <div class="how-id-works-num">01</div>
                <h4>{!! $page->section('how_id_1_title', 'Choose from a Trusted Platform') !!}</h4>
                <p>{!! $page->section('how_id_1_text', 'After you contact the team on WhatsApp, you will be issued multiple exchange ID options via Radhey Book like <strong>Sky Exchange</strong>, <strong>Lords Exchange</strong>, <strong>Lotus Exchange</strong>, <strong>Fairplay</strong> etc. You need to choose one from them.') !!}</p>
            </div>
            <div class="how-id-works-card">
                <div class="how-id-works-num">02</div>
                <h4>{!! $page->section('how_id_2_title', 'Get Your Login Credentials') !!}</h4>
                <p>{!! $page->section('how_id_2_text', 'After you select your desired platform to bet on, you will receive an <strong>Online Football ID</strong> link. You can use it to enter the login ID and password provided by the <strong>football betting ID provider</strong> after your deposit.') !!}</p>
            </div>
            <div class="how-id-works-card">
                <div class="how-id-works-num">03</div>
                <h4>{!! $page->section('how_id_3_title', 'Deposit Funds into Your Account') !!}</h4>
                <p>{!! $page->section('how_id_3_text', 'You must add funds to your betting account before placing a bet. You can pay with Indian payment options such as Paytm, PhonePe or bank transfer.') !!}</p>
            </div>
            <div class="how-id-works-card">
                <div class="how-id-works-num">04</div>
                <h4>{!! $page->section('how_id_4_title', 'Select a Football Match') !!}</h4>
                <p>{!! $page->section('how_id_4_text', 'Your Football ID dashboard displays various match and tournament options for your selection. The "Football" option allows users to access international tournaments which include World Cup matches, EPL, La Liga, and other International football matches.') !!}</p>
            </div>
            <div class="how-id-works-card">
                <div class="how-id-works-num">05</div>
                <h4>{!! $page->section('how_id_5_title', 'Place Your Bet') !!}</h4>
                <p>{!! $page->section('how_id_5_text', 'Select a match, for example Real Madrid CF vs Manchester City FC. Then choose your bet type such as match winner or toss winner, or simply place a bet on the match outcome using Lay and Back options.') !!}</p>
            </div>
            <div class="how-id-works-card">
                <div class="how-id-works-num">06</div>
                <h4>{!! $page->section('how_id_6_title', 'Track Your Bet') !!}</h4>
                <p>{!! $page->section('how_id_6_text', 'Monitor your bets and winnings live from your dashboard. Withdraw winnings instantly to your preferred Indian payment method.') !!}</p>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('how_id_works_btn_text', 'Get Your IPL Betting ID Today') !!}</a>
        </div>
    </div>
</section>
<style>
.how-id-works-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; }
.how-id-works-card { padding: 26px 22px; background: rgba(255,255,255,0.03); border: 1px solid rgba(212,175,55,0.18); border-radius: 12px; transition: transform 0.25s ease, border-color 0.25s ease; cursor: pointer; }
.how-id-works-card:hover { transform: translateY(-4px); border-color: rgba(212,175,55,0.45); }
.how-id-works-num { font-family: 'Orbitron', sans-serif; font-size: 28px; color: #d4af37; font-weight: 700; margin-bottom: 10px; }
.how-id-works-card h4 { color: #fff; font-size: 18px; margin-bottom: 10px; }
.how-id-works-card p { color: rgba(255,255,255,0.78); font-size: 14.5px; line-height: 1.7; margin: 0; }
@media (max-width: 900px) { .how-id-works-grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 600px) { .how-id-works-grid { grid-template-columns: 1fr; gap: 16px; } }
</style>
@endif

{{-- OUR SERVICES --}}
@if($page->section('show_services', '1') !== '0')
<section class="section services-section" id="services">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('services_title', 'Our <span class="text-gold">Services</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('services_subtitle', 'We provide betting IDs for all major sports and casino games') !!}</p>
        </div>
        <div class="services-grid">
            <a href="{{ route('cricket') }}" class="service-card service-card--has-image">
                <div class="service-card-image">
                    <img src="{{ asset('images/cricket.png') }}" alt="Cricket Betting" loading="lazy" decoding="async">
                </div>
                <div class="service-card-body">
                    <h3>{!! $page->section('service_1_title', 'Cricket Betting ID') !!}</h3>
                    <p>{!! $page->section('service_1_text', 'IPL, International matches, T20 leagues - bet on all cricket events with live odds.') !!}</p>
                    <span class="service-link">{!! $page->section('service_link_text', 'Learn More') !!} &rarr;</span>
                </div>
            </a>
            <a href="{{ route('tennis') }}" class="service-card service-card--has-image">
                <div class="service-card-image">
                    <img src="{{ asset('images/tennis.png') }}" alt="Tennis Betting" loading="lazy" decoding="async">
                </div>
                <div class="service-card-body">
                    <h3>{!! $page->section('service_2_title', 'Tennis Betting ID') !!}</h3>
                    <p>{!! $page->section('service_2_text', 'Bet on Grand Slams, ATP, WTA matches with competitive odds and live betting.') !!}</p>
                    <span class="service-link">{!! $page->section('service_link_text', 'Learn More') !!} &rarr;</span>
                </div>
            </a>
            <a href="{{ route('casino') }}" class="service-card service-card--has-image">
                <div class="service-card-image">
                    <img src="{{ asset('images/casino.png') }}" alt="Casino Games" loading="lazy" decoding="async">
                </div>
                <div class="service-card-body">
                    <h3>{!! $page->section('service_3_title', 'Casino ID') !!}</h3>
                    <p>{!! $page->section('service_3_text', 'Play Teen Patti, Roulette, Blackjack, Baccarat and more casino games online.') !!}</p>
                    <span class="service-link">{!! $page->section('service_link_text', 'Learn More') !!} &rarr;</span>
                </div>
            </a>
            <a href="{{ route('football') }}" class="service-card service-card--has-image">
                <div class="service-card-image">
                    <img src="{{ asset('images/football.png') }}" alt="Football Betting" loading="lazy" decoding="async">
                </div>
                <div class="service-card-body">
                    <h3>{!! $page->section('service_4_title', 'Football Betting ID') !!}</h3>
                    <p>{!! $page->section('service_4_text', 'Premier League, La Liga, Champions League - bet on all football leagues worldwide.') !!}</p>
                    <span class="service-link">{!! $page->section('service_link_text', 'Learn More') !!} &rarr;</span>
                </div>
            </a>
            <a href="{{ route('aviator') }}" class="service-card service-card--has-image">
                <div class="service-card-image">
                    <img src="{{ asset('images/aviator.png') }}" alt="Aviator Game" loading="lazy" decoding="async">
                </div>
                <div class="service-card-body">
                    <h3>{!! $page->section('service_5_title', 'Aviator Game') !!}</h3>
                    <p>{!! $page->section('service_5_text', 'Play the exciting Aviator crash game with high multipliers and instant payouts.') !!}</p>
                    <span class="service-link">{!! $page->section('service_link_text', 'Learn More') !!} &rarr;</span>
                </div>
            </a>
        </div>
    </div>
</section>
@endif

{{-- EXCHANGE PLATFORMS --}}
@if($page->section('show_platforms', '1') !== '0')
<section class="section platforms-section" id="platforms">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('platforms_title', 'Top Betting Platforms — Safe Access to India\'s <span class="text-gold">Best Exchanges</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('platforms_subtitle', 'Radhey Book offers instant, secure, and reliable access to India\'s top betting platforms. Each platform is verified, with quick UPI deposits, competitive odds, and 24/7 assistance for Indian users.') !!}</p>
        </div>
        <div class="platforms-carousel" id="platformsCarousel">
            <button class="platforms-carousel-btn platforms-carousel-prev" type="button" aria-label="Previous">&#10094;</button>
            <div class="platforms-carousel-viewport">
                <div class="platforms-grid platforms-carousel-track">
                    <a href="{{ route('lords-exchange') }}" class="platform-card platform-card--has-image platforms-carousel-slide">
                        <div class="platform-card-image">
                            <img src="{{ asset('images/lords exchange.png') }}" alt="Lord Exchange" loading="lazy" decoding="async">
                        </div>
                        <div class="platform-card-body">
                            <h3>{!! $page->section('platform_1_title', 'Lords Exchange') !!}</h3>
                            <p>{!! $page->raw('platform_1_text', 'One of India\'s most popular and established exchanges. High betting limits, quick withdrawals within 5 minutes, and 24/7 support via Lords Exchange support number.') !!}</p>
                            <span class="platform-badge">{!! $page->raw('platform_1_badge', 'Popular') !!}</span>
                        </div>
                    </a>
                    <a href="{{ route('lotus-exchange') }}" class="platform-card platform-card--has-image platforms-carousel-slide">
                        <div class="platform-card-image">
                            <img src="{{ asset('images/lotus exchange.png') }}" alt="Lotus Exchange" loading="lazy" decoding="async">
                        </div>
                        <div class="platform-card-body">
                            <h3>{!! $page->section('platform_2_title', 'Lotus Exchange') !!}</h3>
                            <p>{!! $page->raw('platform_2_text', 'Fastest growing exchange known for speed, trust and reliability. Smooth mobile betting, fast ID activation and 24/7 assistance via Lotus Exchange contact number.') !!}</p>
                            <span class="platform-badge">{!! $page->raw('platform_2_badge', 'Trusted') !!}</span>
                        </div>
                    </a>
                    <a href="{{ route('sky-exchange') }}" class="platform-card platform-card--has-image platforms-carousel-slide">
                        <div class="platform-card-image">
                            <img src="{{ asset('images/sky exchange.png') }}" alt="Sky Exchange" loading="lazy" decoding="async">
                        </div>
                        <div class="platform-card-body">
                            <h3>{!! $page->section('platform_3_title', 'Sky Exchange') !!}</h3>
                            <p>{!! $page->raw('platform_3_text', 'Well-established and highly trusted platform in India. Strong cricket markets including IPL and international matches, fast transactions and 24/7 support via Sky Exchange Contact Number.') !!}</p>
                            <span class="platform-badge">{!! $page->raw('platform_3_badge', 'Top Rated') !!}</span>
                        </div>
                    </a>
                    <a href="{{ route('fairplay') }}" class="platform-card platform-card--has-image platforms-carousel-slide">
                        <div class="platform-card-image">
                            <img src="{{ asset('images/fairplay.png') }}" alt="Fairplay" loading="lazy" decoding="async">
                        </div>
                        <div class="platform-card-body">
                            <h3>{!! $page->section('platform_4_title', 'Fairplay') !!}</h3>
                            <p>{!! $page->raw('platform_4_text', 'Global platform with a strong Indian user base. Best odds on short-format matches like IPL, BBL, CPL with fast real-time updates and in-play cash-out options.') !!}</p>
                            <span class="platform-badge">{!! $page->raw('platform_4_badge', 'Fair') !!}</span>
                        </div>
                    </a>
                    <a href="{{ route('mahadev-book') }}" class="platform-card platform-card--has-image platforms-carousel-slide">
                        <div class="platform-card-image">
                            <img src="{{ asset('images/mahadev 1.png') }}" alt="Mahadev Book" loading="lazy" decoding="async">
                        </div>
                        <div class="platform-card-body">
                            <h3>{!! $page->section('platform_5_title', 'Mahadev Book') !!}</h3>
                            <p>{!! $page->raw('platform_5_text', 'Renowned site with a significant following among Indian users. Coverage of cricket, football, tennis and casino with a wide range of markets, live streaming on select events, exciting bonuses and instant support via Mahadev Book Contact Number.') !!}</p>
                            <span class="platform-badge">{!! $page->raw('platform_5_badge', 'Popular') !!}</span>
                        </div>
                    </a>
                    <a href="{{ route('reddy-anna') }}" class="platform-card platform-card--has-image platforms-carousel-slide">
                        <div class="platform-card-image">
                            <img src="{{ asset('images/Reddy Anna-1.png') }}" alt="Reddy Anna Book" loading="lazy" decoding="async">
                        </div>
                        <div class="platform-card-body">
                            <h3>{!! $page->section('platform_6_title', 'Reddy Anna') !!}</h3>
                            <p>{!! $page->raw('platform_6_text', 'Well-known platform with a large user base in India. Coverage of cricket, football and other sports with fast real-time updates, in-play cash-out options, exciting bonuses for new and existing users, and reliable Reddy Anna Book contact support.') !!}</p>
                            <span class="platform-badge">{!! $page->raw('platform_6_badge', 'Trusted') !!}</span>
                        </div>
                    </a>
                </div>
            </div>
            <button class="platforms-carousel-btn platforms-carousel-next" type="button" aria-label="Next">&#10095;</button>
            <div class="platforms-carousel-dots" id="platformsCarouselDots"></div>
        </div>
        <style>
            .platforms-carousel { position: relative; }
            .platforms-carousel-viewport { overflow: visible; }
            .platforms-carousel-btn, .platforms-carousel-dots { display: none; }
            @media (max-width: 768px) {
                .platforms-carousel { padding: 0 36px; }
                .platforms-carousel-viewport { overflow: hidden; }
                .platforms-carousel-track { display: flex !important; flex-wrap: nowrap !important; grid-template-columns: none !important; gap: 16px; transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1); }
                .platforms-carousel-slide { flex: 0 0 100%; min-width: 0; }
                .platforms-carousel-btn {
                    display: flex; position: absolute; top: 50%; transform: translateY(-50%);
                    width: 36px; height: 36px; border-radius: 50%;
                    background: linear-gradient(135deg, #d4af37, #f5d060);
                    color: #1a1a2e; border: none; cursor: pointer;
                    font-size: 14px; font-weight: 700;
                    align-items: center; justify-content: center;
                    box-shadow: 0 4px 15px rgba(212,175,55,0.35); z-index: 2;
                }
                .platforms-carousel-prev { left: 0; }
                .platforms-carousel-next { right: 0; }
                .platforms-carousel-dots { display: flex; justify-content: center; gap: 8px; margin-top: 20px; }
                .platforms-carousel-dots button {
                    width: 9px; height: 9px; border-radius: 50%; padding: 0;
                    background: rgba(212,175,55,0.3); border: none; cursor: pointer;
                    transition: background 0.3s ease, transform 0.3s ease;
                }
                .platforms-carousel-dots button.is-active { background: #d4af37; transform: scale(1.3); }
            }
        </style>
        <script>
            (function() {
                var root = document.getElementById('platformsCarousel');
                if (!root) return;
                var track = root.querySelector('.platforms-carousel-track');
                var slides = root.querySelectorAll('.platforms-carousel-slide');
                var prev = root.querySelector('.platforms-carousel-prev');
                var next = root.querySelector('.platforms-carousel-next');
                var dotsWrap = document.getElementById('platformsCarouselDots');
                var total = slides.length;
                var index = 0;
                var autoTimer;

                function isMobile() { return window.innerWidth <= 768; }

                function render() {
                    if (!isMobile()) { track.style.transform = ''; return; }
                    var w = track.parentElement.clientWidth;
                    var offset = (w + 16) * index;
                    track.style.transform = 'translateX(-' + offset + 'px)';
                    dotsWrap.querySelectorAll('button').forEach(function(d, i) { d.classList.toggle('is-active', i === index); });
                }

                function buildDots() {
                    dotsWrap.innerHTML = '';
                    for (var i = 0; i < total; i++) {
                        (function(i) {
                            var b = document.createElement('button');
                            b.type = 'button';
                            b.setAttribute('aria-label', 'Go to platform ' + (i + 1));
                            b.addEventListener('click', function(e) { e.preventDefault(); index = i; render(); resetAuto(); });
                            dotsWrap.appendChild(b);
                        })(i);
                    }
                }

                function go(delta) {
                    index = index + delta;
                    if (index >= total) index = 0;
                    if (index < 0) index = total - 1;
                    render();
                }

                function resetAuto() {
                    clearInterval(autoTimer);
                    if (!isMobile()) return;
                    autoTimer = setInterval(function() { go(1); }, 4500);
                }

                prev.addEventListener('click', function(e) { e.preventDefault(); go(-1); resetAuto(); });
                next.addEventListener('click', function(e) { e.preventDefault(); go(1); resetAuto(); });
                root.addEventListener('mouseenter', function() { clearInterval(autoTimer); });
                root.addEventListener('mouseleave', resetAuto);
                window.addEventListener('resize', function() { render(); resetAuto(); });

                buildDots();
                render();
                resetAuto();
            })();
        </script>
    </div>
</section>
@endif

{{-- TYPES OF BONUSES --}}
@if($page->section('show_bonuses', '1') !== '0')
<section class="section bonuses-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('bonuses_title', 'Types of Bonuses <span class="text-gold">Radhey Book</span> Offers') !!}</h2>
            <p class="section-subtitle">{!! $page->section('bonuses_subtitle', 'Boost your betting balance with our variety of player-friendly bonuses') !!}</p>
        </div>
        <div class="bonuses-grid">
            <div class="bonus-type-card">
                <div class="bonus-type-num">1</div>
                <h4>{!! $page->section('bonus_type_1_title', 'Welcome Bonus') !!}</h4>
                <p>{!! $page->section('bonus_type_1_text', 'Receive an additional bonus on your initial deposit (new users only). Excellent way to begin betting.') !!}</p>
            </div>
            <div class="bonus-type-card">
                <div class="bonus-type-num">2</div>
                <h4>{!! $page->section('bonus_type_2_title', 'Refill / Reload Bonus') !!}</h4>
                <p>{!! $page->section('bonus_type_2_text', 'Get a small percentage bonus each time you top up your account — perfect for those who bet regularly.') !!}</p>
            </div>
            <div class="bonus-type-card">
                <div class="bonus-type-num">3</div>
                <h4>{!! $page->section('bonus_type_3_title', 'Referral Bonus') !!}</h4>
                <p>{!! $page->section('bonus_type_3_text', 'Get rewarded by referring someone who joins and deposits with your referral ID.') !!}</p>
            </div>
            <div class="bonus-type-card">
                <div class="bonus-type-num">4</div>
                <h4>{!! $page->section('bonus_type_4_title', 'Losses Cashback (Limited)') !!}</h4>
                <p>{!! $page->section('bonus_type_4_text', 'Cashback offered to selected users in case of huge losses — to help you recover responsibly.') !!}</p>
            </div>
            <div class="bonus-type-card">
                <div class="bonus-type-num">5</div>
                <h4>{!! $page->section('bonus_type_5_title', 'Festive & Tournament Offers') !!}</h4>
                <p>{!! $page->section('bonus_type_5_text', 'Special offers during IPL, World Cup, and major cricketing tournaments.') !!}</p>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('bonuses_btn_text', 'Claim Your Bonus Today') !!}</a>
        </div>
    </div>
</section>
<style>
.bonuses-grid { display: grid; grid-template-columns: repeat(5, 1fr); gap: 18px; }
.bonus-type-card { padding: 24px 18px; background: linear-gradient(180deg, rgba(212,175,55,0.06), rgba(212,175,55,0.02)); border: 1px solid rgba(212,175,55,0.2); border-radius: 12px; text-align: center; transition: transform 0.25s ease, border-color 0.25s ease; cursor: pointer; }
.bonus-type-card:hover { transform: translateY(-5px); border-color: rgba(212,175,55,0.5); }
.bonus-type-num { width: 38px; height: 38px; line-height: 38px; margin: 0 auto 12px; border-radius: 50%; background: linear-gradient(135deg, #d4af37, #f5d060); color: #1a1a2e; font-weight: 800; font-family: 'Orbitron', sans-serif; }
.bonus-type-card h4 { color: #fff; font-size: 16px; margin-bottom: 10px; }
.bonus-type-card p { color: rgba(255,255,255,0.78); font-size: 13.5px; line-height: 1.65; margin: 0; }
@media (max-width: 1024px) { .bonuses-grid { grid-template-columns: repeat(3, 1fr); } }
@media (max-width: 700px) { .bonuses-grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 480px) { .bonuses-grid { grid-template-columns: 1fr; } }
</style>
@endif

{{-- BENEFITS OF USING AN ONLINE FOOTBALL BETTING ID --}}
@if($page->section('show_benefits', '1') !== '0')
<section class="section benefits-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('benefits_title', 'Benefits of Using an <span class="text-gold">Online Football Betting ID</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('benefits_subtitle', 'There are several benefits of using a trusted football betting ID for football enthusiasts.') !!}</p>
        </div>
        <div class="benefits-grid">
            <div class="benefits-card">
                <div class="benefits-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.6"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h4>{!! $page->section('benefit_1_title', 'Safe Betting Environment') !!}</h4>
                <p>{!! $page->section('benefit_1_text', 'Secure systems provide protection for user information and transactions.') !!}</p>
            </div>
            <div class="benefits-card">
                <div class="benefits-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.6"><polyline points="13 17 18 12 13 7"/><polyline points="6 17 11 12 6 7"/></svg>
                </div>
                <h4>{!! $page->section('benefit_2_title', 'Fast Deposits & Withdrawals') !!}</h4>
                <p>{!! $page->section('benefit_2_text', 'Quick payment processing means users enjoy a seamless football betting experience.') !!}</p>
            </div>
            <div class="benefits-card">
                <div class="benefits-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.6"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
                </div>
                <h4>{!! $page->section('benefit_3_title', 'Access to Global Football Matches') !!}</h4>
                <p>{!! $page->section('benefit_3_text', 'Bet on football tournaments worldwide — FIFA, UEFA, EPL, La Liga and more.') !!}</p>
            </div>
            <div class="benefits-card">
                <div class="benefits-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.6"><polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/></svg>
                </div>
                <h4>{!! $page->section('benefit_4_title', 'Live Football Betting') !!}</h4>
                <p>{!! $page->section('benefit_4_text', 'Enjoy live football exchange betting in real-time during matches.') !!}</p>
            </div>
            <div class="benefits-card">
                <div class="benefits-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.6"><path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/></svg>
                </div>
                <h4>{!! $page->section('benefit_5_title', '24/7 Support') !!}</h4>
                <p>{!! $page->section('benefit_5_text', 'Customer support remains available anytime — registration, deposits, withdrawals.') !!}</p>
            </div>
        </div>
    </div>
</section>
<style>
.benefits-grid { display: grid; grid-template-columns: repeat(5, 1fr); gap: 18px; }
.benefits-card { padding: 22px 18px; background: rgba(255,255,255,0.03); border: 1px solid rgba(212,175,55,0.18); border-radius: 12px; text-align: center; transition: transform 0.25s ease, border-color 0.25s ease; cursor: pointer; }
.benefits-card:hover { transform: translateY(-4px); border-color: rgba(212,175,55,0.45); }
.benefits-icon { margin: 0 auto 12px; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; background: rgba(212,175,55,0.08); border-radius: 50%; }
.benefits-card h4 { color: #fff; font-size: 15px; margin-bottom: 8px; }
.benefits-card p { color: rgba(255,255,255,0.75); font-size: 13.5px; line-height: 1.65; margin: 0; }
@media (max-width: 1024px) { .benefits-grid { grid-template-columns: repeat(3, 1fr); } }
@media (max-width: 700px)  { .benefits-grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 480px)  { .benefits-grid { grid-template-columns: 1fr; } }
</style>
@endif

{{-- TIPS FOR SAFE FOOTBALL BETTING --}}
@if($page->section('show_safety_tips', '1') !== '0')
<section class="section safety-tips-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('safety_tips_title', 'Tips for <span class="text-gold">Safe Football Betting</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('safety_tips_subtitle', 'When betting on football, always do it responsibly.') !!}</p>
        </div>
        <div class="safety-tips-list">
            <div class="safety-tip-item">
                <div class="safety-tip-num">01</div>
                <div>
                    <h4>{!! $page->section('safety_tip_1_title', 'Set a Budget') !!}</h4>
                    <p>{!! $page->section('safety_tip_1_text', 'Don\'t use money that you can\'t afford to spend.') !!}</p>
                </div>
            </div>
            <div class="safety-tip-item">
                <div class="safety-tip-num">02</div>
                <div>
                    <h4>{!! $page->section('safety_tip_2_title', 'Avoid Emotional Betting') !!}</h4>
                    <p>{!! $page->section('safety_tip_2_text', 'Never make an emotional bet while watching a game.') !!}</p>
                </div>
            </div>
            <div class="safety-tip-item">
                <div class="safety-tip-num">03</div>
                <div>
                    <h4>{!! $page->section('safety_tip_3_title', 'Analyze Football Statistics') !!}</h4>
                    <p>{!! $page->section('safety_tip_3_text', 'Spend time researching teams, form, and head-to-head stats before betting.') !!}</p>
                </div>
            </div>
            <div class="safety-tip-item">
                <div class="safety-tip-num">04</div>
                <div>
                    <h4>{!! $page->section('safety_tip_4_title', 'Use Trusted Football Betting IDs') !!}</h4>
                    <p>{!! $page->section('safety_tip_4_text', 'Only use verified and secure football exchange IDs.') !!}</p>
                </div>
            </div>
            <div class="safety-tip-item">
                <div class="safety-tip-num">05</div>
                <div>
                    <h4>{!! $page->section('safety_tip_5_title', 'Take Breaks') !!}</h4>
                    <p>{!! $page->section('safety_tip_5_text', 'Bet responsibly and avoid excessive or back-to-back betting sessions.') !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
.safety-tips-list { display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; max-width: 1000px; margin: 0 auto; }
.safety-tip-item { display: flex; gap: 16px; align-items: flex-start; padding: 20px 22px; background: rgba(255,255,255,0.03); border: 1px solid rgba(212,175,55,0.18); border-radius: 12px; transition: border-color 0.25s ease; }
.safety-tip-item:hover { border-color: rgba(212,175,55,0.45); }
.safety-tip-num { flex: 0 0 auto; width: 38px; height: 38px; line-height: 38px; text-align: center; border-radius: 10px; background: linear-gradient(135deg, #d4af37, #f5d060); color: #1a1a2e; font-family: 'Orbitron', sans-serif; font-weight: 800; font-size: 14px; }
.safety-tip-item h4 { color: #fff; font-size: 16px; margin: 2px 0 6px; }
.safety-tip-item p { color: rgba(255,255,255,0.78); font-size: 14px; line-height: 1.65; margin: 0; }
@media (max-width: 768px) { .safety-tips-list { grid-template-columns: 1fr; } }
</style>
@endif

{{-- FREEZE BUTTON / CUSTOMER CARE --}}
@if($page->section('show_customer_care', '1') !== '0')
<section class="section customer-care-section" id="customer-care">
    <div class="container">
        <div class="care-grid">
            <div class="care-card freeze-card">
                <div class="freeze-icon">
                    <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#60a5fa" stroke-width="1.5"><path d="M12 2v20M2 12h20M4.93 4.93l14.14 14.14M19.07 4.93L4.93 19.07"/></svg>
                </div>
                <h3>{!! $page->section('freeze_title', 'Instant Freeze Button') !!}</h3>
                <p>{!! $page->section('freeze_text', 'Freeze your account instantly anytime you want. Your funds are always safe with us. One-click security for complete peace of mind.') !!}</p>
                <button class="btn btn-freeze" id="freezeBtn">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M2 12h20"/></svg>
                    {!! $page->section('freeze_btn_text', 'Freeze Account') !!}
                </button>
            </div>
            <div class="care-card support-card">
                <div class="care-icon">
                    <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#feba0b" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
                </div>
                <h3>{!! $page->section('care_title', 'How to Contact Radhey Book Support') !!}</h3>
                <p>{!! $page->section('care_text', 'If you need help with your account or with your <strong>Online Betting ID</strong>, users can contact the support team available 24/7 via the <strong>football betting whatsapp number</strong>. Radhey Book support is available through multiple channels — WhatsApp, call support, or live chat for quick assistance with registration, deposits, and general queries anytime. For users with a <strong>Football Betting ID</strong> looking for assistance, you can reach out to the support team via the <strong>betting ID number</strong>. They provide quick and reliable help, guide you step-by-step, and resolve issues efficiently to ensure a smooth, secure, and hassle-free betting experience at all times.') !!}</p>
                <div class="care-contact">
                    <span class="care-phone">{!! $page->section('care_phone', '+91 79017 12857') !!}</span>
                    <span class="care-email">{!! $page->section('care_email', 'support@radheybook.com') !!}</span>
                </div>
                <a href="https://linktr.ee/radheybook" class="btn btn-gold" target="_blank" rel="noopener">{!! $page->section('care_support_btn_text', 'Contact Radhey Book Support Now') !!}</a>
            </div>
        </div>
    </div>
</section>
@endif

{{-- COMPARISON TABLE --}}
@if($page->section('show_comparison', '1') !== '0')
<section class="section comparison-section" id="comparison">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('comparison_title', 'Why <span class="text-gold">Radhey</span> is Better?') !!}</h2>
            <p class="section-subtitle">{!! $page->section('comparison_subtitle', 'See how we compare with other betting ID providers') !!}</p>
        </div>
        <div class="comparison-table-wrapper">
            <table class="comparison-table">
                <thead>
                    <tr>
                        <th>Feature</th>
                        <th class="highlight-col">Radhey Book</th>
                        <th>Others</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>{!! $page->section('comp_row_1', 'Instant ID Activation') !!}</td><td class="highlight-col">&#10003;</td><td>&#10007;</td></tr>
                    <tr><td>{!! $page->section('comp_row_2', '24/7 WhatsApp Support') !!}</td><td class="highlight-col">&#10003;</td><td>&#10007;</td></tr>
                    <tr><td>{!! $page->section('comp_row_3', 'Welcome Bonus') !!}</td><td class="highlight-col">&#10003;</td><td>&#10007;</td></tr>
                    <tr><td>{!! $page->section('comp_row_4', '5-Minute Withdrawals') !!}</td><td class="highlight-col">&#10003;</td><td>&#10007;</td></tr>
                    <tr><td>{!! $page->section('comp_row_5', 'Multiple Payment Methods') !!}</td><td class="highlight-col">&#10003;</td><td>&#10003;</td></tr>
                    <tr><td>{!! $page->section('comp_row_6', 'Live Cricket Odds') !!}</td><td class="highlight-col">&#10003;</td><td>&#10003;</td></tr>
                    <tr><td>{!! $page->section('comp_row_7', 'Casino Games') !!}</td><td class="highlight-col">&#10003;</td><td>&#10003;</td></tr>
                    <tr><td>{!! $page->section('comp_row_8', 'Demo ID Available') !!}</td><td class="highlight-col">&#10003;</td><td>&#10007;</td></tr>
                    <tr><td>{!! $page->section('comp_row_9', 'Freeze Button') !!}</td><td class="highlight-col">&#10003;</td><td>&#10007;</td></tr>
                    <tr><td>{!! $page->section('comp_row_10', '7+ Years Experience') !!}</td><td class="highlight-col">&#10003;</td><td>&#10007;</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endif

{{-- PAYMENT METHODS --}}
@if($page->section('show_payments', '1') !== '0')
<section class="section payments-section" id="payments">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('payments_title', 'Secure <span class="text-gold">Payment Methods</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('payments_subtitle', 'Fast deposits and instant withdrawals within 5 minutes') !!}</p>
        </div>
        <div class="payments-grid">
            <div class="payment-methods-row">
                <div class="payment-card">
                    <div class="payment-icon">
                        <img src="{{ asset('images/Untitled design (2) (1)/bank transfer.png') }}" alt="Bank Transfer" style="width:40px;height:40px;object-fit:contain;" loading="lazy" decoding="async">
                    </div>
                    <span>Bank Transfer</span>
                </div>
                <div class="payment-card">
                    <div class="payment-icon">
                        <img src="{{ asset('images/Untitled design (2) (1)/upi.png') }}" alt="UPI" style="width:40px;height:40px;object-fit:contain;" loading="lazy" decoding="async">
                    </div>
                    <span>UPI</span>
                </div>
                <div class="payment-card">
                    <div class="payment-icon">
                        <img src="{{ asset('images/Untitled design (2) (1)/gpay.png') }}" alt="Google Pay" style="width:40px;height:40px;object-fit:contain;" loading="lazy" decoding="async">
                    </div>
                    <span>Google Pay</span>
                </div>
                <div class="payment-card">
                    <div class="payment-icon">
                        <img src="{{ asset('images/Untitled design (2) (1)/paytm.png') }}" alt="Paytm" style="width:40px;height:40px;object-fit:contain;" loading="lazy" decoding="async">
                    </div>
                    <span>Paytm</span>
                </div>
                <div class="payment-card">
                    <div class="payment-icon">
                        <img src="{{ asset('images/Untitled design (2) (1)/phonepe.png') }}" alt="PhonePe" style="width:40px;height:40px;object-fit:contain;" loading="lazy" decoding="async">
                    </div>
                    <span>PhonePe</span>
                </div>
            </div>
        </div>
        <div class="deposit-withdraw-grid">
            <div class="dw-card">
                <h3>{!! $page->section('deposit_title', 'Fast Deposits') !!}</h3>
                <ul>
                    <li>{!! $page->section('deposit_item_1', 'Minimum deposit: Rs. 100') !!}</li>
                    <li>{!! $page->section('deposit_item_2', 'Instant credit to your account') !!}</li>
                    <li>{!! $page->section('deposit_item_3', 'All UPI apps supported') !!}</li>
                    <li>{!! $page->section('deposit_item_4', 'Bank transfer available') !!}</li>
                    <li>{!! $page->section('deposit_item_5', '100% safe & encrypted') !!}</li>
                </ul>
            </div>
            <div class="dw-card">
                <h3>{!! $page->section('withdraw_title', 'Instant Withdrawals') !!}</h3>
                <ul>
                    <li>{!! $page->section('withdraw_item_1', 'Withdraw within 5 minutes') !!}</li>
                    <li>{!! $page->section('withdraw_item_2', 'Minimum withdrawal: Rs. 500') !!}</li>
                    <li>{!! $page->section('withdraw_item_3', 'Direct to bank account') !!}</li>
                    <li>{!! $page->section('withdraw_item_4', 'No hidden charges') !!}</li>
                    <li>{!! $page->section('withdraw_item_5', '24/7 withdrawal support') !!}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endif

{{-- WINNER PROOF --}}
@if($page->section('show_proof', '1') !== '0')
<section class="section proof-section" id="proof">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('proof_title', 'Withdrawal <span class="text-gold">Proof</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('proof_subtitle', 'Real withdrawals from our real players') !!}</p>
        </div>
        <div class="proof-carousel" id="proofCarousel">
            <button class="proof-carousel-btn proof-carousel-prev" type="button" aria-label="Previous">&#10094;</button>
            <div class="proof-carousel-viewport">
                <div class="proof-grid proof-carousel-track" style="display:flex;flex-wrap:wrap;gap:20px;justify-content:center;align-items:flex-start;">
                    <div class="proof-card proof-carousel-slide" style="padding:0;overflow:hidden;background:transparent;border:none;flex:1 1 220px;max-width:300px;">
                        <img src="{{ asset('images/ss/ss11.png') }}" alt="Withdrawal Proof 1" style="width:100%;height:auto;display:block;border-radius:12px;object-fit:contain;" loading="lazy" decoding="async">
                    </div>
                    <div class="proof-card proof-carousel-slide" style="padding:0;overflow:hidden;background:transparent;border:none;flex:1 1 220px;max-width:300px;">
                        <img src="{{ asset('images/ss/ss22.png') }}" alt="Withdrawal Proof 2" style="width:100%;height:auto;display:block;border-radius:12px;object-fit:contain;" loading="lazy" decoding="async">
                    </div>
                    <div class="proof-card proof-carousel-slide" style="padding:0;overflow:hidden;background:transparent;border:none;flex:1 1 220px;max-width:300px;">
                        <img src="{{ asset('images/ss/ss33.png') }}" alt="Withdrawal Proof 3" style="width:100%;height:auto;display:block;border-radius:12px;object-fit:contain;" loading="lazy" decoding="async">
                    </div>
                    <div class="proof-card proof-carousel-slide" style="padding:0;overflow:hidden;background:transparent;border:none;flex:1 1 220px;max-width:300px;">
                        <img src="{{ asset('images/ss/ss44.png') }}" alt="Withdrawal Proof 4" style="width:100%;height:auto;display:block;border-radius:12px;object-fit:contain;" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
            <button class="proof-carousel-btn proof-carousel-next" type="button" aria-label="Next">&#10095;</button>
            <div class="proof-carousel-dots" id="proofCarouselDots"></div>
        </div>
        <style>
            .proof-carousel { position: relative; }
            .proof-carousel-viewport { overflow: visible; }
            .proof-carousel-btn, .proof-carousel-dots { display: none; }
            /* Phone only: activate carousel */
            @media (max-width: 768px) {
                .proof-carousel { padding: 0 36px; }
                .proof-carousel-viewport { overflow: hidden !important; width: 100%; }
                .proof-carousel-track,
                .proof-carousel .proof-grid { display: flex !important; flex-wrap: nowrap !important; justify-content: flex-start !important; align-items: center !important; gap: 16px !important; margin: 0 !important; padding: 0 !important; transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1); }
                .proof-carousel-slide,
                .proof-carousel .proof-card { flex-shrink: 0; box-sizing: border-box; }
                .proof-carousel-slide img { display: block; width: 100%; height: auto; max-width: 100%; margin: 0 auto; }
                .proof-carousel-btn {
                    display: flex; position: absolute; top: 50%; transform: translateY(-50%);
                    width: 36px; height: 36px; border-radius: 50%;
                    background: linear-gradient(135deg, #d4af37, #f5d060);
                    color: #1a1a2e; border: none; cursor: pointer;
                    font-size: 14px; font-weight: 700;
                    align-items: center; justify-content: center;
                    box-shadow: 0 4px 15px rgba(212,175,55,0.35); z-index: 2;
                }
                .proof-carousel-prev { left: 0; }
                .proof-carousel-next { right: 0; }
                .proof-carousel-dots { display: flex; justify-content: center; gap: 8px; margin-top: 20px; }
                .proof-carousel-dots button {
                    width: 9px; height: 9px; border-radius: 50%; padding: 0;
                    background: rgba(212,175,55,0.3); border: none; cursor: pointer;
                    transition: background 0.3s ease, transform 0.3s ease;
                }
                .proof-carousel-dots button.is-active { background: #d4af37; transform: scale(1.3); }
            }
        </style>
        <script>
            (function() {
                var root = document.getElementById('proofCarousel');
                if (!root) return;
                var viewport = root.querySelector('.proof-carousel-viewport');
                var track = root.querySelector('.proof-carousel-track');
                var slides = root.querySelectorAll('.proof-carousel-slide');
                var prev = root.querySelector('.proof-carousel-prev');
                var next = root.querySelector('.proof-carousel-next');
                var dotsWrap = document.getElementById('proofCarouselDots');
                var total = slides.length;
                var index = 0;
                var autoTimer;
                var GAP = 16;

                var origSlideStyles = [];
                slides.forEach(function(s, i) { origSlideStyles[i] = s.getAttribute('style') || ''; });
                var origTrackStyle = track.getAttribute('style') || '';

                function isMobile() { return window.innerWidth <= 768; }

                function applySizes() {
                    if (!isMobile()) {
                        slides.forEach(function(s, i) {
                            if (origSlideStyles[i]) s.setAttribute('style', origSlideStyles[i]);
                            else s.removeAttribute('style');
                        });
                        if (origTrackStyle) track.setAttribute('style', origTrackStyle);
                        else track.removeAttribute('style');
                        return;
                    }
                    var w = viewport.clientWidth;
                    slides.forEach(function(s) {
                        s.style.width = w + 'px';
                        s.style.minWidth = w + 'px';
                        s.style.maxWidth = w + 'px';
                        s.style.flex = '0 0 ' + w + 'px';
                    });
                    track.style.width = (w * total + GAP * (total - 1)) + 'px';
                }

                function render() {
                    applySizes();
                    if (!isMobile()) return;
                    var w = viewport.clientWidth;
                    var offset = index * (w + GAP);
                    track.style.transform = 'translateX(-' + offset + 'px)';
                    dotsWrap.querySelectorAll('button').forEach(function(d, i) { d.classList.toggle('is-active', i === index); });
                }

                function buildDots() {
                    dotsWrap.innerHTML = '';
                    for (var i = 0; i < total; i++) {
                        (function(i) {
                            var b = document.createElement('button');
                            b.type = 'button';
                            b.setAttribute('aria-label', 'Go to proof ' + (i + 1));
                            b.addEventListener('click', function() { index = i; render(); resetAuto(); });
                            dotsWrap.appendChild(b);
                        })(i);
                    }
                }

                function go(delta) {
                    index = index + delta;
                    if (index >= total) index = 0;
                    if (index < 0) index = total - 1;
                    render();
                }

                function resetAuto() {
                    clearInterval(autoTimer);
                    if (!isMobile()) return;
                    autoTimer = setInterval(function() { go(1); }, 5000);
                }

                prev.addEventListener('click', function() { go(-1); resetAuto(); });
                next.addEventListener('click', function() { go(1); resetAuto(); });
                root.addEventListener('mouseenter', function() { clearInterval(autoTimer); });
                root.addEventListener('mouseleave', resetAuto);
                window.addEventListener('resize', function() { render(); resetAuto(); });

                buildDots();
                render();
                window.addEventListener('load', function() { render(); resetAuto(); });
            })();
        </script>
    </div>
</section>
@endif

{{-- TESTIMONIALS --}}
@if($page->section('show_testimonials', '1') !== '0')
<section class="section testimonials-section" id="testimonials">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('testimonials_title', 'What Our <span class="text-gold">Players Say</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('testimonials_subtitle', 'Trusted by millions of players across India') !!}</p>
        </div>
        <div class="testimonials-carousel-wrapper">
            <div class="testimonials-carousel">
                <div class="testimonials-track">
                    <div class="testimonial-card">
                        <div class="rating">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                        <p class="testimonial-text">{!! $page->section('testimonial_1_text', '"Got my betting ID from Radhey in less than a minute! The WhatsApp support is incredibly fast. Highly recommended for anyone looking for a trusted provider."') !!}</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">{!! $page->section('testimonial_1_avatar', 'RM') !!}</div>
                            <div class="author-info">
                                <h5>{!! $page->section('testimonial_1_name', 'Rahul Mehta') !!}</h5>
                                <span>{!! $page->section('testimonial_1_location', 'Mumbai') !!} &bull; {!! $page->section('testimonial_1_time', '2 days ago') !!}</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="rating">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                        <p class="testimonial-text">{!! $page->section('testimonial_2_text', '"Very trusted and genuine service. I\'ve been using Radhey Book for over 2 years now. Withdrawals are always fast and the customer support is excellent."') !!}</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">{!! $page->section('testimonial_2_avatar', 'SV') !!}</div>
                            <div class="author-info">
                                <h5>{!! $page->section('testimonial_2_name', 'Sanjay Verma') !!}</h5>
                                <span>{!! $page->section('testimonial_2_location', 'Jaipur') !!} &bull; {!! $page->section('testimonial_2_time', '5 days ago') !!}</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="rating">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                        <p class="testimonial-text">{!! $page->section('testimonial_3_text', '"Best IPL betting ID provider! Got my ID within 60 seconds and the bonus was credited instantly. The odds are always competitive."') !!}</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">{!! $page->section('testimonial_3_avatar', 'AD') !!}</div>
                            <div class="author-info">
                                <h5>{!! $page->section('testimonial_3_name', 'Amit Desai') !!}</h5>
                                <span>{!! $page->section('testimonial_3_location', 'Ahmedabad') !!} &bull; {!! $page->section('testimonial_3_time', '1 week ago') !!}</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="rating">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                        <p class="testimonial-text">{!! $page->section('testimonial_4_text', '"I was skeptical at first but Radhey proved me wrong. Their service is top-notch and I\'ve already withdrawn over 2 lakhs without any issues."') !!}</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">{!! $page->section('testimonial_4_avatar', 'PK') !!}</div>
                            <div class="author-info">
                                <h5>{!! $page->section('testimonial_4_name', 'Pradeep Kumar') !!}</h5>
                                <span>{!! $page->section('testimonial_4_location', 'Delhi') !!} &bull; {!! $page->section('testimonial_4_time', '3 days ago') !!}</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="rating">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                        <p class="testimonial-text">{!! $page->section('testimonial_5_text', '"The casino section is amazing! I love playing Teen Patti and Roulette on Radhey\'s platform. Smooth experience and instant payouts."') !!}</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">{!! $page->section('testimonial_5_avatar', 'NS') !!}</div>
                            <div class="author-info">
                                <h5>{!! $page->section('testimonial_5_name', 'Neha Singh') !!}</h5>
                                <span>{!! $page->section('testimonial_5_location', 'Lucknow') !!} &bull; {!! $page->section('testimonial_5_time', '1 week ago') !!}</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="rating">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                        <p class="testimonial-text">{!! $page->section('testimonial_6_text', '"24/7 support is really 24/7! I contacted them at 3 AM and got my issue resolved within minutes. That\'s what I call real customer service."') !!}</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">{!! $page->section('testimonial_6_avatar', 'VR') !!}</div>
                            <div class="author-info">
                                <h5>{!! $page->section('testimonial_6_name', 'Vikram Rathore') !!}</h5>
                                <span>{!! $page->section('testimonial_6_location', 'Pune') !!} &bull; {!! $page->section('testimonial_6_time', '4 days ago') !!}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-nav carousel-prev" aria-label="Previous">&#10094;</button>
            <button class="carousel-nav carousel-next" aria-label="Next">&#10095;</button>
            <div class="carousel-dots"></div>
        </div>
    </div>
</section>
@endif

{{-- BETTING TIPS --}}
@if($page->section('show_tips', '1') !== '0')
<section class="section tips-section" id="tips">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('tips_title', 'Top 10 <span class="text-gold">Betting Tips</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('tips_subtitle', 'Expert strategies to improve your winning chances') !!}</p>
        </div>
        <div class="tips-carousel" id="tipsCarousel">
            <button class="tips-carousel-btn tips-carousel-prev" type="button" aria-label="Previous">&#10094;</button>
            <div class="tips-carousel-viewport">
                <div class="tips-grid tips-carousel-track">
                    <div class="tip-card tips-carousel-slide"><span class="tip-num">01</span><h4>{!! $page->section('tip_1_title', 'Analyze Team Form') !!}</h4><p>{!! $page->section('tip_1_text', 'Study recent performances, head-to-head records, and team composition before placing bets.') !!}</p></div>
                    <div class="tip-card tips-carousel-slide"><span class="tip-num">02</span><h4>{!! $page->section('tip_2_title', 'Study Pitch & Weather') !!}</h4><p>{!! $page->section('tip_2_text', 'Pitch conditions and weather play a crucial role in cricket match outcomes.') !!}</p></div>
                    <div class="tip-card tips-carousel-slide"><span class="tip-num">03</span><h4>{!! $page->section('tip_3_title', 'Follow Player Performance') !!}</h4><p>{!! $page->section('tip_3_text', 'Track individual player form, injuries, and match-up statistics.') !!}</p></div>
                    <div class="tip-card tips-carousel-slide"><span class="tip-num">04</span><h4>{!! $page->section('tip_4_title', 'Understand the Odds') !!}</h4><p>{!! $page->section('tip_4_text', 'Learn how odds work and identify value bets for better returns.') !!}</p></div>
                    <div class="tip-card tips-carousel-slide"><span class="tip-num">05</span><h4>{!! $page->section('tip_5_title', 'Start Small') !!}</h4><p>{!! $page->section('tip_5_text', 'Begin with smaller bets and gradually increase as you gain experience.') !!}</p></div>
                    <div class="tip-card tips-carousel-slide"><span class="tip-num">06</span><h4>{!! $page->section('tip_6_title', 'Use Live Betting') !!}</h4><p>{!! $page->section('tip_6_text', 'Take advantage of in-play betting to react to match situations in real-time.') !!}</p></div>
                    <div class="tip-card tips-carousel-slide"><span class="tip-num">07</span><h4>{!! $page->section('tip_7_title', 'Avoid Emotional Betting') !!}</h4><p>{!! $page->section('tip_7_text', 'Don\'t bet on your favorite team just because you support them.') !!}</p></div>
                    <div class="tip-card tips-carousel-slide"><span class="tip-num">08</span><h4>{!! $page->section('tip_8_title', 'Focus on One Market') !!}</h4><p>{!! $page->section('tip_8_text', 'Specialize in one betting market to improve your expertise and win rate.') !!}</p></div>
                    <div class="tip-card tips-carousel-slide"><span class="tip-num">09</span><h4>{!! $page->section('tip_9_title', 'Manage Your Bankroll') !!}</h4><p>{!! $page->section('tip_9_text', 'Set a budget and never bet more than you can afford to lose.') !!}</p></div>
                    <div class="tip-card tips-carousel-slide"><span class="tip-num">10</span><h4>{!! $page->section('tip_10_title', 'Choose Trusted Platforms') !!}</h4><p>{!! $page->section('tip_10_text', 'Always use verified and trusted betting ID providers like Radhey.') !!}</p></div>
                </div>
            </div>
            <button class="tips-carousel-btn tips-carousel-next" type="button" aria-label="Next">&#10095;</button>
            <div class="tips-carousel-dots" id="tipsCarouselDots"></div>
        </div>
        <style>
            .tips-carousel { position: relative; }
            .tips-carousel-viewport { overflow: visible; }
            .tips-carousel-btn, .tips-carousel-dots { display: none; }
            @media (max-width: 768px) {
                .tips-carousel { padding: 0 36px; }
                .tips-carousel-viewport { overflow: hidden !important; width: 100%; }
                .tips-carousel-track,
                .tips-carousel .tips-grid {
                    display: flex !important;
                    flex-wrap: nowrap !important;
                    grid-template-columns: none !important;
                    gap: 16px !important;
                    margin: 0 !important;
                    padding: 0 !important;
                    overflow: visible !important;
                    overflow-x: visible !important;
                    scroll-snap-type: none !important;
                    transition: transform 0.45s cubic-bezier(0.4, 0, 0.2, 1);
                    will-change: transform;
                }
                .tips-carousel-slide,
                .tips-carousel .tip-card {
                    box-sizing: border-box;
                    scroll-snap-align: none !important;
                }
                .tips-carousel-btn {
                    display: flex !important;
                    position: absolute;
                    top: 50%;
                    transform: translateY(-50%);
                    width: 36px;
                    height: 36px;
                    border-radius: 50%;
                    background: linear-gradient(135deg, #d4af37, #f5d060);
                    color: #1a1a2e;
                    border: none;
                    cursor: pointer;
                    font-size: 14px;
                    font-weight: 700;
                    align-items: center;
                    justify-content: center;
                    box-shadow: 0 4px 15px rgba(212,175,55,0.35);
                    z-index: 2;
                }
                .tips-carousel-prev { left: 0; }
                .tips-carousel-next { right: 0; }
                .tips-carousel-dots {
                    display: flex !important;
                    flex-wrap: wrap;
                    justify-content: center;
                    gap: 8px;
                    margin-top: 20px;
                    max-width: 260px;
                    margin-left: auto;
                    margin-right: auto;
                }
                .tips-carousel-dots button {
                    width: 9px;
                    height: 9px;
                    border-radius: 50%;
                    padding: 0;
                    background: rgba(212,175,55,0.3);
                    border: none;
                    cursor: pointer;
                    transition: background 0.3s, transform 0.3s;
                }
                .tips-carousel-dots button.is-active {
                    background: #d4af37;
                    transform: scale(1.3);
                }
            }
        </style>
        <script>
            (function() {
                var root = document.getElementById('tipsCarousel');
                if (!root) return;
                var viewport = root.querySelector('.tips-carousel-viewport');
                var track = root.querySelector('.tips-carousel-track');
                var slides = root.querySelectorAll('.tips-carousel-slide');
                var prev = root.querySelector('.tips-carousel-prev');
                var next = root.querySelector('.tips-carousel-next');
                var dotsWrap = document.getElementById('tipsCarouselDots');
                var total = slides.length;
                var index = 0;
                var autoTimer;
                var GAP = 16;

                function isMobile() { return window.innerWidth <= 768; }

                function applySizes() {
                    if (!isMobile()) {
                        slides.forEach(function(s) {
                            s.style.width = '';
                            s.style.minWidth = '';
                            s.style.maxWidth = '';
                            s.style.flex = '';
                        });
                        track.style.width = '';
                        track.style.transform = '';
                        return;
                    }
                    var w = viewport.clientWidth;
                    slides.forEach(function(s) {
                        s.style.width = w + 'px';
                        s.style.minWidth = w + 'px';
                        s.style.maxWidth = w + 'px';
                        s.style.flex = '0 0 ' + w + 'px';
                    });
                    track.style.width = (w * total + GAP * (total - 1)) + 'px';
                }

                function render() {
                    applySizes();
                    if (!isMobile()) return;
                    var w = viewport.clientWidth;
                    var offset = index * (w + GAP);
                    track.style.transform = 'translateX(-' + offset + 'px)';
                    dotsWrap.querySelectorAll('button').forEach(function(d, i) { d.classList.toggle('is-active', i === index); });
                }

                function buildDots() {
                    dotsWrap.innerHTML = '';
                    for (var i = 0; i < total; i++) {
                        (function(i) {
                            var b = document.createElement('button');
                            b.type = 'button';
                            b.setAttribute('aria-label', 'Go to tip ' + (i + 1));
                            b.addEventListener('click', function() { index = i; render(); resetAuto(); });
                            dotsWrap.appendChild(b);
                        })(i);
                    }
                }

                function go(delta) {
                    index = index + delta;
                    if (index >= total) index = 0;
                    if (index < 0) index = total - 1;
                    render();
                }

                function resetAuto() {
                    clearInterval(autoTimer);
                    if (!isMobile()) return;
                    autoTimer = setInterval(function() { go(1); }, 6000);
                }

                // Touch swipe support
                var touchStartX = 0;
                var touchEndX = 0;
                viewport.addEventListener('touchstart', function(e) { touchStartX = e.changedTouches[0].screenX; }, { passive: true });
                viewport.addEventListener('touchend', function(e) {
                    touchEndX = e.changedTouches[0].screenX;
                    var diff = touchStartX - touchEndX;
                    if (Math.abs(diff) > 40) { go(diff > 0 ? 1 : -1); resetAuto(); }
                }, { passive: true });

                prev.addEventListener('click', function() { go(-1); resetAuto(); });
                next.addEventListener('click', function() { go(1); resetAuto(); });
                window.addEventListener('resize', function() { render(); resetAuto(); });

                buildDots();
                render();
                window.addEventListener('load', function() { render(); resetAuto(); });
            })();
        </script>
    </div>
</section>
@endif

{{-- CTA SECTION --}}
@if($page->section('show_cta', '1') !== '0')
<section class="section cta-section" id="cta">
    <div class="container">
        <div class="cta-content">
            <h2>{!! $page->section('cta_title', 'Ready to Get Your <span class="text-gold">Betting ID</span>?') !!}</h2>
            <p>{!! $page->section('cta_text', 'Join 2 million+ players who trust Radhey Book. Get instant activation via WhatsApp with Welcome Bonus!') !!}</p>
            <div class="cta-buttons">
                <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.5.5 0 00.61.609l4.458-1.495A11.952 11.952 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.319 0-4.476-.682-6.297-1.848l-.44-.292-3.065 1.027 1.027-3.065-.292-.44A9.965 9.965 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                    {!! $page->section('cta_btn_text', 'Get Your ID on WhatsApp') !!}
                </a>
            </div>
        </div>
    </div>
</section>
@endif

{{-- BLOG SECTION --}}
@if($page->section('show_blog', '1') !== '0')
<section class="section blog-section" id="blog">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('blog_title', 'Latest <span class="text-gold">News & Tips</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('blog_subtitle', 'Stay updated with the latest cricket news and betting tips') !!}</p>
        </div>
        <div class="blog-grid">
            <div class="blog-card">
                <div class="blog-image" style="background: linear-gradient(135deg, #1a1a2e, #2d1b4e);"></div>
                <div class="blog-content">
                    <span class="blog-date">March 23, 2026</span>
                    <h3><a href="{{ route('blog.show', 'what-is-betting-ID-complete-guide') }}">What is a Betting ID? Complete Beginner Guide 2026</a></h3>
                    <p>Learn everything about online betting IDs - what they are, how they work, and why you need one.</p>
                    <a href="{{ route('blog.show', 'what-is-betting-ID-complete-guide') }}" class="blog-link">Read More &rarr;</a>
                </div>
            </div>
            <div class="blog-card">
                <div class="blog-image" style="background: linear-gradient(135deg, #1a2e1a, #1b4e2d);"></div>
                <div class="blog-content">
                    <span class="blog-date">March 20, 2026</span>
                    <h3><a href="{{ route('blog.show', 'why-trusted-betting-ID-provider') }}">Why You Need a Trusted Betting ID Provider in India</a></h3>
                    <p>Discover why choosing a trusted betting ID provider is crucial for safe and successful betting.</p>
                    <a href="{{ route('blog.show', 'why-trusted-betting-ID-provider') }}" class="blog-link">Read More &rarr;</a>
                </div>
            </div>
            <div class="blog-card">
                <div class="blog-image" style="background: linear-gradient(135deg, #2e1a1a, #4e1b1b);"></div>
                <div class="blog-content">
                    <span class="blog-date">March 17, 2026</span>
                    <h3><a href="{{ route('blog.show', 'top-features-online-betting-id') }}">Top Features to Look for in an Online Betting ID</a></h3>
                    <p>A comprehensive guide to the key features that make a great online betting ID platform.</p>
                    <a href="{{ route('blog.show', 'top-features-online-betting-id') }}" class="blog-link">Read More &rarr;</a>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('blog') }}" class="btn btn-outline-gold">View All Posts &rarr;</a>
        </div>
    </div>
</section>
@endif

{{-- FAQ SECTION --}}
@if($page->section('show_faq', '1') !== '0')
<section class="section faq-section" id="faq">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('faq_title', 'Most Asked <span class="text-gold">Questions</span> (FAQs)') !!}</h2>
            <p class="section-subtitle">{!! $page->section('faq_subtitle', 'Got questions? We\'ve got answers.') !!}</p>
        </div>
        <div class="faq-list">
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_1_q', 'How to get Online Cricket ID via Radhey Book?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_1_a', 'To get an Online Cricket ID, simply message us on WhatsApp "Hi, I want to get an Online Cricket Betting ID", just click on any button on the website. Our team will respond to you within 5 minutes. Our team will get back to you.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_2_q', 'What is an Online Cricket ID?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_2_a', 'An Online Cricket ID is a unique login credential that allows you to bet on cricket, football, casino, and other games through any betting exchange platform partnered with Radhey Book. We provide this secure and verified Online Cricket ID via WhatsApp.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_3_q', 'What should I do if I forgot my Radhey Book ID or password?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_3_a', 'No issues, if you forgot your Radhey Book ID or password. Just contact us via WhatsApp. Our support team is available 24/7 to help you recover your Online Betting ID instantly without any hassle.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_4_q', 'What is Radhey Book Online betting ID WhatsApp number?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_4_a', 'To contact the Radhey Book support team. Reach out the team via online betting ID WhatsApp Number. Users can get the number by clicking on any button on the website.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_5_q', 'What is the minimum deposit to start betting?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_5_a', 'You can start betting with as little as ₹300, and you can access bonuses and start placing bets instantly.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_6_q', 'Is betting with Radhey Book legal in India?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_6_a', 'Radhey Book operates as an intermediary ID provider. While betting laws vary state by state, we encourage all users to check their local regulations before playing.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_7_q', 'Is betting with Radhey Book legal in India?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_7_a', 'Radhey Book operates as an intermediary ID provider. While betting laws vary state by state, we encourage all users to check their local regulations before playing.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_8_q', 'Which is the Best Online Cricket ID Provider?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_8_a', 'You\'re in the right place. We provide fully verified cricket betting IDs with instant activation via WhatsApp, seamless UPI withdrawals, and strong security you can rely on. From IPL 2026 and the T20 World Cup to live international matches, your online cricket ID performs smoothly every time. Trusted by more than 2 lakhs players across India, we ensure safe access, support, and authentic accounts.') !!}</p></div>
            </div>
        </div>
    </div>
</section>
@endif

@endsection
