@extends('layouts.app')

@section('meta_title', $meta_title ?? 'T20 Betting ID. Get Your T20 Betting ID Instantly in India. Radhey Book')
@section('meta_description', $meta_description ?? 'Get your T20 betting ID instantly via WhatsApp from Radhey Book. Trusted T20 betting ID provider in India. Bet on T20 World Cup, IPL and all T20 cricket matches.')
@section('meta_keywords', $meta_keywords ?? 't20 betting ID, t20 betting ID provider, t20 betting ID number, t20 betting ID india, t20 cricket betting, t20 cricket betting ID number, t20 cricket betting ID login, instant cricket ID, whatsapp betting ID, betting ID india')

@section('content')

@php
    $waLink = 'https://linktr.ee/radheybook';
@endphp

{{-- HERO SECTION --}}
<section class="hero-section" id="hero" style="background: url('{{ asset('images/all banner/t20 betting id.jpg') }}') center/cover no-repeat;">
    <div class="hero-overlay" style="background: rgba(0,0,0,0.55);"></div>
    <div class="hero-content container">
        <div class="hero-badge">
            <span class="badge-pulse"></span>
            {!! $page->section('hero_badge', 'T20 World Cup 2026 Live') !!}
        </div>
        <h1 class="hero-title">{!! $page->section('hero_title', 'Get Your <span class="text-gold">T20 Betting ID</span> Now') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'Live T20 odds, session betting, fancy markets &amp; more. Best odds guaranteed with instant withdrawals.') !!}</p>
        <div class="hero-cta">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">
                {!! $page->section('hero_btn_text', 'Get T20 Betting ID') !!}
            </a>
            <a href="#markets" class="btn btn-outline btn-lg">
                {!! $page->section('hero_btn_secondary_text', 'Cricket Markets') !!}
            </a>
        </div>
    </div>
</section>

{{-- INTRO --}}
<section class="section" id="intro">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('intro_title', '<span class="text-gold">T20 Betting ID</span> in India') !!}</h2>
            <p class="section-subtitle">{!! $page->section('intro_subtitle', 'Get Your T20 Betting ID Today and Bet on Every T20 Match Worldwide') !!}</p>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('intro_text_1', 'T20 cricket has taken the world by storm and it is now the most popular format among cricket fans in India. If you want to enjoy the thrill of T20 cricket betting on matches like the T20 World Cup, IPL, Big Bash, The Hundred and CPL then you need a verified T20 betting ID to get started. With a T20 betting ID from Radhey Book you get instant access to all T20 matches around the world with live odds, session betting, fancy markets and real time updates for every ball of every match.') !!}</p>
                    <p>{!! $page->section('intro_text_2', 'Radhey Book is a trusted T20 betting ID provider that has made it incredibly easy for users to get their T20 cricket betting ID through WhatsApp. There are no long forms and no complicated steps. Simply message us, share your basic details, make your first deposit and your T20 betting ID India account is activated within minutes. Whether you are a cricket fanatic or someone who is new to online betting, getting your betting ID India through Radhey Book is designed to be smooth and easy for everyone.') !!}</p>
                </div>
            </div>
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/TENNIS FOOTBALL AVIATOR/cricket_3.png') }}" alt="T20 Betting ID" style="width:100%;border-radius:16px;" loading="lazy" decoding="async">
            </div>
        </div>
    </div>
</section>

{{-- WHAT IS T20 BETTING ID --}}
<section class="section section-alt" id="what-is">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('what_is_title', 'What is a <span class="text-gold">T20 Betting ID</span>?') !!}</h2>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/cricket.png') }}" alt="T20 Cricket Betting" style="width:100%;border-radius:16px;" loading="lazy" decoding="async">
            </div>
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('what_is_text_1', 'A T20 betting ID is your personal account that gives you access to online betting platforms where you can place bets on all T20 cricket matches worldwide. Every user needs a unique ID to log in, deposit funds, place bets, track winnings and withdraw money safely. With T20 cricket betting becoming more popular every year, having a trusted ID is the first step to enjoying the action.') !!}</p>
                    <p>{!! $page->section('what_is_text_2', 'When you get your T20 cricket betting ID from Radhey Book you unlock access to dozens of betting markets for every T20 match. You can bet on match winners, top batsmen, session runs, live ball by ball odds and much more. The T20 cricket betting ID login process is simple and your account stays active throughout the year so you never miss a single T20 match. Many users also use this same ID as their instant cricket ID to bet on ODIs, Test matches and other formats.') !!}</p>
                </div>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('what_is_btn_text', 'Get Your T20 Betting ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- WHY RADHEY BOOK --}}
<section class="section" id="why-provider">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('provider_title', 'Why Radhey Book is the Best <span class="text-gold">T20 Betting ID Provider</span>?') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div>
                <h3>{!! $page->section('provider_1_title', 'Instant T20 ID Activation') !!}</h3>
                <p>{!! $page->section('provider_1_text', 'Your T20 betting ID is activated within 2 to 5 minutes after payment. No waiting so you can bet on the very next T20 match.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3>{!! $page->section('provider_2_title', '100% Safe and Verified') !!}</h3>
                <p>{!! $page->section('provider_2_text', 'Every T20 betting ID we issue is fully verified with secure encryption to keep your data safe at all times.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
                <h3>{!! $page->section('provider_3_title', 'Best T20 Cricket Odds') !!}</h3>
                <p>{!! $page->section('provider_3_text', 'We offer the most competitive odds for every T20 match so you always get maximum value on your bets whether it is IPL or World Cup.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div>
                <h3>{!! $page->section('provider_4_title', 'WhatsApp Registration') !!}</h3>
                <p>{!! $page->section('provider_4_text', 'Get your whatsapp betting ID for T20 matches in minutes. No forms and no downloads. Just a simple message and our team handles everything.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
                <h3>{!! $page->section('provider_5_title', 'Fast Withdrawals') !!}</h3>
                <p>{!! $page->section('provider_5_text', 'Withdraw your T20 winnings within 5 minutes directly to your bank account via UPI, Paytm, PhonePe or bank transfer.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div>
                <h3>{!! $page->section('provider_6_title', '24/7 Support') !!}</h3>
                <p>{!! $page->section('provider_6_text', 'Our team is available round the clock via WhatsApp and phone to help you with your T20 betting ID account anytime.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- T20 BETTING MARKETS --}}
<section class="section" id="markets" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('markets_title', 'What Can You Bet on with Your <span class="text-gold">T20 Betting ID</span>?') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M8 12l3 3 5-5"/></svg></div>
                <h3>{!! $page->section('market_1_title', 'Match Winner') !!}</h3>
                <p>{!! $page->section('market_1_text', 'Predict which team will win the T20 match. The most popular and straightforward betting market loved by all cricket fans.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M6 9H4.5a2.5 2.5 0 010-5H6"/><path d="M18 9h1.5a2.5 2.5 0 000-5H18"/><path d="M4 22h16"/><path d="M18 2H6v7a6 6 0 0012 0V2z"/></svg></div>
                <h3>{!! $page->section('market_2_title', 'Top Batsman and Bowler') !!}</h3>
                <p>{!! $page->section('market_2_text', 'Bet on which player will score the most runs or take the most wickets in a T20 match. Great for fans who follow player form closely.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
                <h3>{!! $page->section('market_3_title', 'Session and Fancy Betting') !!}</h3>
                <p>{!! $page->section('market_3_text', 'Bet on runs scored in a specific over or session. T20 matches are fast paced which makes session betting extremely exciting.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3>{!! $page->section('market_4_title', 'Live Ball by Ball Betting') !!}</h3>
                <p>{!! $page->section('market_4_text', 'Place bets on what happens on the very next ball. Boundary, wicket or dot ball. The most thrilling way to enjoy T20 cricket betting.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- HOW TO GET --}}
<section class="section" id="how-to-get">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('how_title', 'How to Get Your <span class="text-gold">T20 Betting ID</span> on WhatsApp?') !!}</h2>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(250px,1fr));">
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">1</span></div>
                <h3>{!! $page->section('how_step_1_title', 'Click on WhatsApp') !!}</h3>
                <p>{!! $page->section('how_step_1_text', 'Click the WhatsApp button on this page to connect directly with our support team for your T20 betting ID.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">2</span></div>
                <h3>{!! $page->section('how_step_2_title', 'Send Your Request') !!}</h3>
                <p>{!! $page->section('how_step_2_text', 'Send a message saying Hi I want a T20 Betting ID and our team will respond within seconds with the next steps.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">3</span></div>
                <h3>{!! $page->section('how_step_3_title', 'Share Details and Deposit') !!}</h3>
                <p>{!! $page->section('how_step_3_text', 'Share your name and contact number then make your first deposit using UPI, Paytm, PhonePe or bank transfer.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">4</span></div>
                <h3>{!! $page->section('how_step_4_title', 'Receive Your ID') !!}</h3>
                <p>{!! $page->section('how_step_4_text', 'Within 2 to 5 minutes your ID and login credentials will be shared with you. You can start betting.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">5</span></div>
                <h3>{!! $page->section('how_step_5_title', 'Login and Start Betting') !!}</h3>
                <p>{!! $page->section('how_step_5_text', 'Log in and start placing bets on your favourite matches and games right away.') !!}</p>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('how_btn_text', 'Get Your T20 Betting ID on WhatsApp Now') !!}</a>
        </div>
    </div>
</section>

{{-- TOURNAMENTS --}}
<section class="section" id="tournaments" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('tournament_title', 'Major T20 Tournaments You Can Bet on with Your <span class="text-gold">T20 Betting ID</span>') !!}</h2>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(300px,1fr));">
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/T-20 World Cup.png') }}" alt="T20 World Cup" style="width:100%;height:100%;object-fit:cover;" loading="lazy" decoding="async">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_1_title', 'T20 World Cup') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_1_text', 'The biggest T20 tournament on the planet. Bet on match winners, top batsmen, total runs and live ball by ball markets with your T20 betting ID.') !!}</p>
                </div>
            </a>
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/the hundred.png') }}" alt="The Hundred" style="width:100%;height:100%;object-fit:cover;" loading="lazy" decoding="async">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_2_title', 'The Hundred and Big Bash') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_2_text', 'Fast paced T20 formats from England and Australia with unique betting markets. Bet on team performance, player stats and dynamic match outcomes.') !!}</p>
                </div>
            </a>
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/cpl.png') }}" alt="CPL" style="width:100%;height:100%;object-fit:cover;" loading="lazy" decoding="async">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_3_title', 'IPL and CPL') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_3_text', 'The two biggest T20 leagues in cricket. Your instant cricket ID gives you access to every match with live markets and session bets throughout the season.') !!}</p>
                </div>
            </a>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('tournament_btn_text', 'Get Your T20 Betting ID Now') !!}</a>
        </div>
    </div>
</section>

{{-- SUPPORT --}}
<section class="section" id="support">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('support_title', '<span class="text-gold">T20 Betting ID</span> WhatsApp and Phone Support') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('support_text', 'As a trusted T20 betting ID provider, Radhey Book offers dedicated WhatsApp and phone support for all users. Whether you need help getting your T20 cricket betting ID set up, have questions about your T20 cricket betting ID login, or want to know about specific T20 betting markets, our team provides fast and accurate answers every single time. We understand that during live T20 matches every minute counts which is why our support is instant and reliable. A great T20 cricket betting ID provider is about being there whenever you need help and that is exactly what Radhey Book delivers.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('support_btn_text', 'Contact Support Team Now') !!}</a>
        </div>
    </div>
</section>

{{-- PAYMENTS --}}
<section class="section" id="payments" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('payments_title', 'Secure <span class="text-gold">Payment Methods</span> for Your T20 Betting ID') !!}</h2>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(4,1fr);max-width:800px;margin:0 auto;">
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/upi.png') }}" alt="UPI" style="width:48px;height:48px;object-fit:contain;" loading="lazy" decoding="async"></div>
                <h3>UPI</h3>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/bank transfer.png') }}" alt="Bank Transfer" style="width:48px;height:48px;object-fit:contain;" loading="lazy" decoding="async"></div>
                <h3>Bank Transfer</h3>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/paytm.png') }}" alt="Paytm" style="width:48px;height:48px;object-fit:contain;" loading="lazy" decoding="async"></div>
                <h3>Paytm</h3>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/phonepe.png') }}" alt="PhonePe" style="width:48px;height:48px;object-fit:contain;" loading="lazy" decoding="async"></div>
                <h3>PhonePe</h3>
            </div>
        </div>
    </div>
</section>

{{-- SECURITY --}}
<section class="section" id="security">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('security_title', 'Is Your <span class="text-gold">T20 Betting ID</span> Safe?') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('security_text', 'Absolutely. Every T20 betting ID we issue is backed by advanced SSL encryption ensuring your personal and financial data are fully protected. Your whatsapp betting ID registration is handled through encrypted channels so your data stays private. Always access your T20 cricket betting ID login through our official WhatsApp number and verified channels. By following simple precautions you enjoy a completely safe T20 cricket betting experience with your instant cricket ID from Radhey Book.') !!}</p>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="section" id="cta" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('cta_title', 'Ready to Get Your <span class="text-gold">T20 Betting ID</span> Today?') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;text-align:center;">
            <p>{!! $page->section('cta_text', 'Join over 2 Million users who trust Radhey Book as their preferred T20 betting ID provider. Whether you want to bet on T20 World Cup, IPL, Big Bash, The Hundred or CPL, your T20 betting ID India gives you full access to everything. Get your T20 betting ID today with instant activation, zero registration fees and 24/7 WhatsApp support. One message is all it takes to start your T20 cricket betting journey.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('cta_btn_text', 'Get Your T20 Betting ID on WhatsApp Now') !!}</a>
        </div>
    </div>
</section>

{{-- FAQ --}}
<section class="section" id="faq">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('faq_title', 'Frequently Asked <span class="text-gold">Questions</span>') !!}</h2>
        </div>
        <div class="faq-list" style="max-width:800px;margin:0 auto;">
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_1_q', 'What is a T20 betting ID?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_1_a', 'A T20 betting ID is your personal account for betting on all T20 cricket matches. It is your unique ID that lets you log in, manage funds and place bets on every T20 game.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_2_q', 'How can I get a T20 betting ID on WhatsApp?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_2_a', 'Click the WhatsApp button on this page, send your request, share your details, make your deposit and your T20 betting ID is activated within minutes.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_3_q', 'Is the T20 betting ID India safe to use?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_3_a', 'Yes, your T20 betting ID India from Radhey Book is completely safe. We use SSL encryption and secure payment gateways to protect your data and funds.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_4_q', 'How do I access my T20 cricket betting ID login?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_4_a', 'After receiving your T20 cricket betting ID login credentials on WhatsApp, simply visit the platform, enter your username and password and start betting on T20 matches immediately.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_5_q', 'What is my T20 cricket betting ID used for?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_5_a', 'Your T20 cricket betting ID is your unique account identifier used for logging in, managing deposits, placing bets and withdrawing winnings from your account.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_6_q', 'Who is the best T20 betting ID provider in India?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_6_a', 'Radhey Book is India\'s best T20 betting ID provider with 7+ years experience, 2 Million+ users, best T20 odds and 24/7 WhatsApp support for every T20 season.') !!}</p></div>
            </div>
        </div>
    </div>
</section>

@endsection
