@extends('layouts.app')

@section('meta_title', $meta_title ?? 'Online Betting ID. Get Instant Online Betting ID in India. Radhey Book')
@section('meta_description', $meta_description ?? 'Get your online betting ID instantly via WhatsApp from Radhey Book. Trusted online betting ID provider in India. Free registration, instant access and 24/7 support.')
@section('meta_keywords', $meta_keywords ?? 'online betting ID, online cricket betting ID, online betting ID provider, online betting ID india, online betting ID whatsapp, free online betting ID, betting ID registration online, online betting ID phone number, online betting ID number, instant cricket ID, whatsapp betting ID, betting ID india')

@section('content')

@php
    $waLink = 'https://linktr.ee/radheybook';
@endphp

{{-- HERO SECTION --}}
<section class="hero-section" id="hero" style="background: url('{{ asset('images/Artboard 1 copy radhey book banner 1.png') }}') center/cover no-repeat;">
    <div class="hero-overlay" style="background: rgba(0,0,0,0.55);"></div>
    <div class="hero-content container">
        <div class="hero-badge">
            <span class="badge-pulse"></span>
            {!! $page->section('hero_badge', 'India\'s Most Trusted Online Betting ID Provider') !!}
        </div>
        <h1 class="hero-title">{!! $page->section('hero_title', 'Get Your <span class="text-gold">Online Betting ID</span> Instantly on WhatsApp with Radhey Book') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'Radhey Book is a trusted online betting ID provider in India offering free online betting ID registration with instant activation and 24/7 WhatsApp support. Message us now and start your winning journey today.') !!}</p>
        <div class="hero-cta">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">
                {!! $page->section('hero_btn_text', 'Get Your Free Online Betting ID Now') !!}
            </a>
        </div>
    </div>
</section>

{{-- INTRO BLOCK --}}
<section class="section" id="intro">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('intro_title', '<span class="text-gold">Online Betting ID</span> in India') !!}</h2>
            <p class="section-subtitle">{!! $page->section('intro_subtitle', 'Get Your Instant Online Betting ID Today. Fast, Secure and Completely Hassle Free') !!}</p>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('intro_text_1', 'Having an online betting ID is the very first step to enjoy sports betting in India. Whether you want to bet on cricket, football, tennis or casino games, a verified online betting ID gives you access to all major betting platforms. Users across India now prefer trusted providers that offer betting ID registration online through WhatsApp because it removes complicated forms and long verification steps. You simply send a message and your account is ready within minutes.') !!}</p>
                    <p>{!! $page->section('intro_text_2', 'Radhey Book is a leading online betting ID provider that has made the process simple for Indian users. Reach out on our online betting ID WhatsApp number, share your basic details, make your first deposit and your online betting ID gets activated instantly. This is why Radhey Book is the preferred choice for anyone who wants a reliable and free online betting ID with instant activation. Whether you are new to betting or experienced, getting your betting ID India through us is smooth and easy for everyone.') !!}</p>
                </div>
            </div>
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/TENNIS FOOTBALL AVIATOR/cricket_3.png') }}" alt="Online Betting ID" style="width:100%;border-radius:16px;" loading="lazy" decoding="async">
            </div>
        </div>
    </div>
</section>

{{-- WHAT IS ONLINE BETTING ID --}}
<section class="section section-alt" id="what-is">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('what_is_title', 'What is an <span class="text-gold">Online Betting ID</span>?') !!}</h2>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/TENNIS FOOTBALL AVIATOR/cricket_4.png') }}" alt="Online Betting" style="width:100%;border-radius:16px;" loading="lazy" decoding="async">
            </div>
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('what_is_text_1', 'An online betting ID is your personal account that allows you to access betting platforms and place bets on sports events, casino games and live matches. It lets you log in, deposit funds, place bets, track your winnings and withdraw money safely. Every user needs a unique ID to start betting safely.') !!}</p>
                    <p>{!! $page->section('what_is_text_2', 'With an online cricket betting ID from Radhey Book you get access to IPL betting, T20 World Cup, live casino games and much more. Your online betting ID is connected to your payment methods ensuring all transactions are secure and winnings go directly to your bank account. The entire betting ID registration online process is completed through WhatsApp in just a few minutes. No downloads, no complex steps. Just a simple chat and you are ready to bet.') !!}</p>
                </div>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('what_is_btn_text', 'Get Your Online Betting ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- WHY CHOOSE RADHEY BOOK --}}
<section class="section" id="why-provider">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('provider_title', 'Why Radhey Book is the Best <span class="text-gold">Online Betting ID Provider</span>?') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div>
                <h3>{!! $page->section('provider_1_title', 'Instant ID Activation') !!}</h3>
                <p>{!! $page->section('provider_1_text', 'Your online betting ID is activated within 2 to 5 minutes after payment confirmation. No waiting, no delays so you can start betting immediately.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3>{!! $page->section('provider_2_title', '100% Safe and Verified') !!}</h3>
                <p>{!! $page->section('provider_2_text', 'Every online betting ID we issue is fully verified with secure encryption to protect your personal and financial data at all times.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
                <h3>{!! $page->section('provider_3_title', 'Free Online Betting ID') !!}</h3>
                <p>{!! $page->section('provider_3_text', 'We do not charge any registration fees. Get your free online betting ID and only pay for your betting deposits. No hidden charges of any kind.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div>
                <h3>{!! $page->section('provider_4_title', 'WhatsApp Registration') !!}</h3>
                <p>{!! $page->section('provider_4_text', 'Complete your betting ID registration online entirely through WhatsApp. No forms, no apps. Just send us a message and we handle everything.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
                <h3>{!! $page->section('provider_5_title', 'Fast Withdrawals') !!}</h3>
                <p>{!! $page->section('provider_5_text', 'Withdraw your winnings within 5 minutes directly to your bank account. We support UPI, Paytm, PhonePe, Google Pay and bank transfers.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div>
                <h3>{!! $page->section('provider_6_title', '24/7 Customer Support') !!}</h3>
                <p>{!! $page->section('provider_6_text', 'Our team is available round the clock via the online betting ID phone number and WhatsApp to resolve any queries instantly.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- HOW TO GET YOUR ONLINE BETTING ID --}}
<section class="section" id="how-to-get" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('how_title', 'How to Get Your <span class="text-gold">Online Betting ID</span> on WhatsApp?') !!}</h2>
            <p class="section-subtitle">{!! $page->section('how_subtitle', 'Getting your whatsapp betting ID through Radhey Book is the fastest way to complete your betting ID registration online') !!}</p>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(250px,1fr));">
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">1</span></div>
                <h3>{!! $page->section('how_step_1_title', 'Click on WhatsApp') !!}</h3>
                <p>{!! $page->section('how_step_1_text', 'Click the WhatsApp button on this page to connect directly with our online betting ID WhatsApp support team.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">2</span></div>
                <h3>{!! $page->section('how_step_2_title', 'Send Your Request') !!}</h3>
                <p>{!! $page->section('how_step_2_text', 'Send a message saying Hi I want an Online Betting ID and our team will respond within seconds with the next steps.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">3</span></div>
                <h3>{!! $page->section('how_step_3_title', 'Share Details and Deposit') !!}</h3>
                <p>{!! $page->section('how_step_3_text', 'Share your name and contact number then make your first deposit using UPI, Paytm, PhonePe or bank transfer to activate your account.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">4</span></div>
                <h3>{!! $page->section('how_step_4_title', 'Receive Your ID') !!}</h3>
                <p>{!! $page->section('how_step_4_text', 'Within 2 to 5 minutes your ID and login credentials will be shared with you. You can start betting.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">5</span></div>
                <h3>{!! $page->section('how_step_5_title', 'Login and Start Betting') !!}</h3>
                <p>{!! $page->section('how_step_5_text', 'Log in and explore cricket betting, casino games, football, tennis and more. Place your first bet and start your winning journey.') !!}</p>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('how_btn_text', 'Start Your Betting ID Registration Online Now') !!}</a>
        </div>
    </div>
</section>

{{-- WHAT CAN YOU BET ON --}}
<section class="section" id="betting-types">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('types_title', 'What Can You Bet on with Your <span class="text-gold">Online Betting ID</span>?') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M8 12l3 3 5-5"/></svg></div>
                <h3>{!! $page->section('type_1_title', 'Online Cricket Betting ID') !!}</h3>
                <p>{!! $page->section('type_1_text', 'Bet on IPL, T20 World Cup, ODI series, Big Bash and every cricket match with live odds and session betting.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/></svg></div>
                <h3>{!! $page->section('type_2_title', 'Football Betting') !!}</h3>
                <p>{!! $page->section('type_2_text', 'Access Premier League, Champions League, La Liga and ISL markets with competitive odds and live betting.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M12 8v8"/><path d="M8 12h8"/></svg></div>
                <h3>{!! $page->section('type_3_title', 'Live Casino Games') !!}</h3>
                <p>{!! $page->section('type_3_text', 'Play Teen Patti, Roulette, Blackjack, Baccarat, Andar Bahar and hundreds of slot games with live dealers.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 2L11 13"/><path d="M22 2l-7 20-4-9-9-4 20-7z"/></svg></div>
                <h3>{!! $page->section('type_4_title', 'Aviator and Exchange Platforms') !!}</h3>
                <p>{!! $page->section('type_4_text', 'Play Aviator crash game and access Lord Exchange, Lotus Exchange, Fairplay 369 and Sky Exchange all from one instant cricket ID.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- SUPPORT --}}
<section class="section" id="whatsapp-support" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('wa_support_title', '<span class="text-gold">Online Betting ID WhatsApp</span> and Phone Support') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('wa_support_text', 'At Radhey Book we offer dedicated online betting ID WhatsApp support where you can reach our team instantly for account creation, deposits, withdrawals or any technical issues. Our online betting ID phone number is also available for users who prefer direct calls. Whether you need help with your betting ID registration online or have questions about betting markets, our team provides fast and accurate assistance. We believe that exceptional customer service is what sets a great online betting ID provider apart and we are committed to delivering that to every user.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('wa_support_btn_text', 'Contact Our Support Team Now') !!}</a>
        </div>
    </div>
</section>

{{-- MAJOR TOURNAMENTS --}}
<section class="section" id="tournaments">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('tournament_title', 'Bet on Major Tournaments with Your <span class="text-gold">Online Cricket Betting ID</span>') !!}</h2>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(300px,1fr));">
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/T-20 World Cup.png') }}" alt="T20 World Cup" style="width:100%;height:100%;object-fit:cover;" loading="lazy" decoding="async">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_1_title', 'T20 World Cup') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_1_text', 'The most watched cricket tournament globally. Bet on match winners, top batsmen, total runs and live ball by ball markets with real time odds.') !!}</p>
                </div>
            </a>
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/the hundred.png') }}" alt="The Hundred" style="width:100%;height:100%;object-fit:cover;" loading="lazy" decoding="async">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_2_title', 'The Hundred') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_2_text', 'A revolutionary 100 ball cricket format from England with fast paced action. Use your online betting ID India to bet on team performance and match outcomes.') !!}</p>
                </div>
            </a>
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/cpl.png') }}" alt="CPL" style="width:100%;height:100%;object-fit:cover;" loading="lazy" decoding="async">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_3_title', 'CPL Caribbean Premier League') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_3_text', 'Explosive T20 cricket with international stars. Your whatsapp betting ID gives you access to live betting markets and session bets throughout the tournament.') !!}</p>
                </div>
            </a>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('tournament_btn_text', 'Get Your Online Cricket Betting ID Now') !!}</a>
        </div>
    </div>
</section>

{{-- PAYMENT METHODS --}}
<section class="section" id="payments" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('payments_title', 'Secure <span class="text-gold">Payment Methods</span> for Your Online Betting ID') !!}</h2>
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
            <h2 class="section-title">{!! $page->section('security_title', 'Is Your <span class="text-gold">Online Betting ID</span> Safe?') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('security_text', 'Absolutely. Every online betting ID we issue is backed by advanced SSL encryption ensuring your personal information and financial data are fully protected. We use secure payment gateways and never store sensitive banking details. Always access your online betting ID through our official online betting ID WhatsApp number and verified channels. By following simple precautions you can enjoy a completely safe betting experience with your free online betting ID from Radhey Book.') !!}</p>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="section" id="cta" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('cta_title', 'Ready to Get Your <span class="text-gold">Online Betting ID</span>?') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;text-align:center;">
            <p>{!! $page->section('cta_text', 'Join over 2 Million satisfied users who trust Radhey Book as their preferred online betting ID provider. Whether you want an online cricket betting ID, casino ID or access to top exchange platforms, we have got you covered. Get your free online betting ID today with instant activation and 24/7 WhatsApp support. Your winning journey starts with one message.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('cta_btn_text', 'Get Your Free Online Betting ID on WhatsApp') !!}</a>
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
                <button class="faq-question">{!! $page->section('faq_1_q', 'What is an online betting ID?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_1_a', 'An online betting ID is your personal account that gives you access to betting platforms. It is your unique ID that allows you to log in, manage funds and place bets securely.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_2_q', 'How can I get a free online betting ID?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_2_a', 'Contact us on WhatsApp with zero registration charges. Share your details, make your first deposit and your free online betting ID is activated within minutes.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_3_q', 'How do I contact the online betting ID WhatsApp number?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_3_a', 'Click the WhatsApp button on this page to connect directly with our support team for instant betting ID registration online.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_4_q', 'Is the online betting ID India safe to use?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_4_a', 'Yes, your online betting ID India from Radhey Book is completely safe. We use SSL encryption and secure payment gateways to protect your data and funds.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_5_q', 'Can I use my online betting ID for cricket and casino both?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_5_a', 'Yes, your online betting ID gives you access to all markets including online cricket betting ID features, live casino, football, tennis and all exchange platforms.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_6_q', 'Who is the best online betting ID provider in India?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_6_a', 'Radhey Book is India\'s best online betting ID provider with 7+ years experience, 2 Million+ users, instant activation and 24/7 WhatsApp support.') !!}</p></div>
            </div>
        </div>
    </div>
</section>

@endsection
