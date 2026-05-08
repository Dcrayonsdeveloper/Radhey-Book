@extends('layouts.app')

@section('meta_title', $meta_title ?? 'IPL Betting ID. Get Your IPL Betting ID Instantly in India. Radhey Book')
@section('meta_description', $meta_description ?? 'Get your IPL betting ID instantly via WhatsApp from Radhey Book. Trusted IPL betting ID provider in India. Bet on IPL 2026 with live odds, fast deposits and instant withdrawals.')
@section('meta_keywords', $meta_keywords ?? 'ipl betting ID, IPL cricket betting ID, online IPL betting ID, IPL betting ID provider, IPL betting ID india, IPL betting ID whatsapp, IPL betting ID phone number, IPL betting ID number, instant cricket ID, whatsapp betting ID, betting ID india')

@section('content')

@php
    $waLink = 'https://linktr.ee/radheybook';
@endphp

{{-- HERO SECTION --}}
<section class="hero-section" id="hero" style="background: url('{{ asset('images/all banner/ipl banner.png') }}') center/cover no-repeat;">
    <div class="hero-overlay" style="background: rgba(0,0,0,0.55);"></div>
    <div class="hero-content container">
        <div class="hero-badge">
            <span class="badge-pulse"></span>
            {!! $page->section('hero_badge', 'India\'s Most Trusted IPL Betting ID Provider') !!}
        </div>
        <h1 class="hero-title">{!! $page->section('hero_title', 'Get Your <span class="text-gold">IPL Betting ID</span> Instantly on WhatsApp with Radhey Book') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'The IPL season is here and Radhey Book is the most trusted IPL betting ID provider in India. Get your IPL betting ID within minutes on WhatsApp with instant activation, live odds and 24/7 support.') !!}</p>
        <div class="hero-cta">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">
                {!! $page->section('hero_btn_text', 'Get Your IPL Betting ID Now') !!}
            </a>
        </div>
    </div>
</section>

{{-- INTRO BLOCK --}}
<section class="section" id="intro">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('intro_title', '<span class="text-gold">IPL Betting ID</span> in India') !!}</h2>
            <p class="section-subtitle">{!! $page->section('intro_subtitle', 'Get Your <span class="text-gold">IPL Betting ID</span> Today and Bet on Every Match of IPL 2026') !!}</p>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('intro_text_1', 'The Indian Premier League is the biggest cricket tournament in the world and millions of fans look forward to it every year. If you want to make the season even more thrilling by placing bets on your favourite teams and players then you need a trusted IPL betting ID to get started. With a verified IPL betting ID from Radhey Book you get instant access to all IPL matches, live odds, session betting and real time updates for every ball of every match.') !!}</p>
                    <p>{!! $page->section('intro_text_2', 'Radhey Book is a leading IPL betting ID provider that makes it easy for Indian users to get their IPL betting ID through WhatsApp. No long forms and no complicated steps. Message us on our IPL betting ID WhatsApp number, share your details, make your deposit and your account is ready in minutes. Whether you are a die hard cricket fan or new to betting, getting your betting ID India through us is smooth and easy for everyone.') !!}</p>
                </div>
            </div>
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/TENNIS FOOTBALL AVIATOR/cricket_5.png') }}" alt="IPL Betting ID" style="width:100%;border-radius:16px;">
            </div>
        </div>
    </div>
</section>

{{-- WHAT IS IPL BETTING ID --}}
<section class="section section-alt" id="what-is">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('what_is_title', 'What is an <span class="text-gold">IPL Betting ID</span>?') !!}</h2>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/TENNIS FOOTBALL AVIATOR/cricket_6.png') }}" alt="IPL Betting" style="width:100%;border-radius:16px;">
            </div>
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('what_is_text_1', 'An IPL betting ID is your personal account that gives you access to betting platforms where you can place bets on all IPL matches. It lets you log in, deposit money, bet on live matches, track winnings and withdraw earnings safely. Every user needs a unique ID to bet on IPL matches.') !!}</p>
                    <p>{!! $page->section('what_is_text_2', 'When you get an IPL cricket betting ID from Radhey Book you unlock access to every IPL match with dozens of betting markets including match winners, top batsmen, session runs and live ball by ball odds. Getting your online IPL betting ID is done through WhatsApp in just minutes. No downloads, no complex steps. Many users also use this same ID as their instant cricket ID to bet on other tournaments throughout the year.') !!}</p>
                </div>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('what_is_btn_text', 'Get Your IPL Betting ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- WHY CHOOSE RADHEY BOOK --}}
<section class="section" id="why-provider">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('provider_title', 'Why Radhey Book is the Best <span class="text-gold">IPL Betting ID Provider</span>?') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div>
                <h3>{!! $page->section('provider_1_title', 'Instant IPL ID Activation') !!}</h3>
                <p>{!! $page->section('provider_1_text', 'Your IPL betting ID is activated within 2 to 5 minutes after payment. No waiting so you can bet on the very next IPL match.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3>{!! $page->section('provider_2_title', '100% Safe and Verified') !!}</h3>
                <p>{!! $page->section('provider_2_text', 'Every IPL betting ID we issue is fully verified and protected with secure encryption throughout the entire season.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
                <h3>{!! $page->section('provider_3_title', 'Best IPL Odds') !!}</h3>
                <p>{!! $page->section('provider_3_text', 'We offer the most competitive odds for every IPL match so you always get maximum value on match winner, top batsman and session bets.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div>
                <h3>{!! $page->section('provider_4_title', 'WhatsApp Registration') !!}</h3>
                <p>{!! $page->section('provider_4_text', 'Get your IPL betting ID WhatsApp registration done in minutes. No forms and no apps. Just send a message and we handle everything.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
                <h3>{!! $page->section('provider_5_title', 'Fast Withdrawals') !!}</h3>
                <p>{!! $page->section('provider_5_text', 'Withdraw your IPL winnings within 5 minutes directly to your bank account via UPI, Paytm, PhonePe or bank transfer.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div>
                <h3>{!! $page->section('provider_6_title', '24/7 IPL Season Support') !!}</h3>
                <p>{!! $page->section('provider_6_text', 'Our team is available round the clock via the IPL betting ID phone number and WhatsApp throughout the entire season.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- IPL BETTING MARKETS --}}
<section class="section" id="ipl-markets" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('markets_title', 'What Can You Bet on with Your <span class="text-gold">IPL Betting ID</span>?') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M8 12l3 3 5-5"/></svg></div>
                <h3>{!! $page->section('market_1_title', 'Match Winner') !!}</h3>
                <p>{!! $page->section('market_1_text', 'Predict which team will win the match. The most popular and straightforward IPL betting market.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M6 9H4.5a2.5 2.5 0 010-5H6"/><path d="M18 9h1.5a2.5 2.5 0 000-5H18"/><path d="M4 22h16"/><path d="M18 2H6v7a6 6 0 0012 0V2z"/></svg></div>
                <h3>{!! $page->section('market_2_title', 'Top Batsman and Bowler') !!}</h3>
                <p>{!! $page->section('market_2_text', 'Bet on which player will score the most runs or take the most wickets in a match.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
                <h3>{!! $page->section('market_3_title', 'Session and Fancy Betting') !!}</h3>
                <p>{!! $page->section('market_3_text', 'Bet on runs scored in a specific over or session. These markets change rapidly and offer high excitement.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3>{!! $page->section('market_4_title', 'Live Ball by Ball Betting') !!}</h3>
                <p>{!! $page->section('market_4_text', 'Place bets on what happens on the very next ball. Boundary, wicket or dot ball. The most thrilling way to bet on IPL.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/><line x1="4" y1="22" x2="4" y2="15"/></svg></div>
                <h3>{!! $page->section('market_5_title', 'Tournament Winner and Orange Cap') !!}</h3>
                <p>{!! $page->section('market_5_text', 'Place long term bets on which team wins the IPL or who finishes as the highest run scorer of the season.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div>
                <h3>{!! $page->section('market_6_title', 'Powerplay and Total Runs') !!}</h3>
                <p>{!! $page->section('market_6_text', 'Bet on powerplay scores, total match runs, first innings total and more throughout every IPL match.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- HOW TO GET YOUR IPL BETTING ID --}}
<section class="section" id="how-to-get">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('how_title', 'How to Get Your <span class="text-gold">IPL Betting ID</span> on WhatsApp?') !!}</h2>
            <p class="section-subtitle">{!! $page->section('how_subtitle', 'Getting your whatsapp betting ID for IPL takes just a few minutes with Radhey Book') !!}</p>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(250px,1fr));">
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">1</span></div>
                <h3>{!! $page->section('how_step_1_title', 'Click on WhatsApp') !!}</h3>
                <p>{!! $page->section('how_step_1_text', 'Click the WhatsApp button on this page to connect directly with our IPL betting ID WhatsApp support team.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">2</span></div>
                <h3>{!! $page->section('how_step_2_title', 'Send Your Request') !!}</h3>
                <p>{!! $page->section('how_step_2_text', 'Send a message saying Hi I want an IPL Betting ID and our team will respond within seconds.') !!}</p>
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
                <h3>{!! $page->section('how_step_5_title', 'Login and Start Betting on IPL') !!}</h3>
                <p>{!! $page->section('how_step_5_text', 'Log in and start placing bets on your favourite matches and games right away.') !!}</p>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('how_btn_text', 'Get Your IPL Betting ID on WhatsApp Now') !!}</a>
        </div>
    </div>
</section>

{{-- SUPPORT --}}
<section class="section" id="whatsapp-support" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('wa_support_title', '<span class="text-gold">IPL Betting ID WhatsApp</span> and Phone Support') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('wa_support_text', 'During the IPL season things move fast and you need reliable support. At Radhey Book we offer dedicated IPL betting ID WhatsApp support for account creation, deposits, withdrawals and any issues. Our IPL betting ID phone number is also available for users who prefer direct calls. Whether you need help setting up your online IPL betting ID or have questions about specific betting markets, our team provides fast answers every time. A great IPL betting ID provider is about being there for you throughout the tournament and that is exactly what Radhey Book delivers.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('wa_support_btn_text', 'Contact Our IPL Support Team Now') !!}</a>
        </div>
    </div>
</section>

{{-- PAYMENT METHODS --}}
<section class="section" id="payments">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('payments_title', 'Secure <span class="text-gold">Payment Methods</span> for Your IPL Betting ID') !!}</h2>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(4,1fr);max-width:800px;margin:0 auto;">
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/upi.png') }}" alt="UPI" style="width:48px;height:48px;object-fit:contain;"></div>
                <h3>UPI</h3>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/bank transfer.png') }}" alt="Bank Transfer" style="width:48px;height:48px;object-fit:contain;"></div>
                <h3>Bank Transfer</h3>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/paytm.png') }}" alt="Paytm" style="width:48px;height:48px;object-fit:contain;"></div>
                <h3>Paytm</h3>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/phonepe.png') }}" alt="PhonePe" style="width:48px;height:48px;object-fit:contain;"></div>
                <h3>PhonePe</h3>
            </div>
        </div>
    </div>
</section>

{{-- SECURITY --}}
<section class="section" id="security" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('security_title', 'Is Your <span class="text-gold">IPL Betting ID</span> Safe?') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('security_text', 'Absolutely. Every IPL betting ID we issue is backed by advanced SSL encryption ensuring your personal and financial data are fully protected. Your whatsapp betting ID registration is handled through encrypted channels. Always access your IPL betting ID through our official IPL betting ID WhatsApp number and verified channels. By following simple precautions you enjoy a completely safe IPL betting experience with your instant cricket ID from Radhey Book.') !!}</p>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="section" id="cta">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('cta_title', 'Ready to Get Your <span class="text-gold">IPL Betting ID</span> Today?') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;text-align:center;">
            <p>{!! $page->section('cta_text', 'The IPL season does not wait and neither should you. Join over 2 Million users who trust Radhey Book as their IPL betting ID provider every year. Whether you want to bet on match winners, session runs or live ball by ball, your IPL cricket betting ID gives you full access. Get your IPL betting ID today with instant activation and 24/7 WhatsApp support.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('cta_btn_text', 'Get Your IPL Betting ID on WhatsApp Now') !!}</a>
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
                <button class="faq-question">{!! $page->section('faq_1_q', 'What is an IPL betting ID?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_1_a', 'An IPL betting ID is your personal account for betting on all IPL matches. It is your unique ID that lets you log in, manage funds and place bets on every IPL game.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_2_q', 'How can I get an IPL betting ID on WhatsApp?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_2_a', 'Click the WhatsApp button on this page, request your IPL betting ID WhatsApp registration, share your details, make your deposit and your account is activated within minutes.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_3_q', 'Is the IPL betting ID India safe to use?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_3_a', 'Yes, your IPL betting ID India from Radhey Book is completely safe. We use SSL encryption and secure payment gateways to protect your data and funds.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_4_q', 'Can I use my IPL betting ID for other sports too?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_4_a', 'Yes, your IPL cricket betting ID also works as an instant cricket ID for other tournaments, football, tennis, casino and all exchange platforms.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_5_q', 'What is the IPL betting ID phone number for support?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_5_a', 'Reach our team through the IPL betting ID phone number or WhatsApp for instant help with your account, deposits and withdrawals. Available 24/7 throughout the IPL season.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_6_q', 'Who is the best IPL betting ID provider in India?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_6_a', 'Radhey Book is India\'s best IPL betting ID provider with 7+ years experience, 2 Million+ users, best IPL odds and 24/7 WhatsApp support every season.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_7_q', 'Can I get an online IPL betting ID for free?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_7_a', 'Yes, getting your online IPL betting ID from Radhey Book is completely free. Zero registration charges. You only pay for your betting deposits.') !!}</p></div>
            </div>
        </div>
    </div>
</section>

@endsection
