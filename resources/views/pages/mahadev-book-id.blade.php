@extends('layouts.app')

@section('meta_title', $meta_title ?? 'Mahadev Book ID. Get Your Mahadev Book ID Instantly in India. Radhey Book')
@section('meta_description', $meta_description ?? 'Get your Mahadev Book ID instantly via WhatsApp from Radhey Book. Mahadev betting ID, Mahadev exchange ID, demo ID and cricket ID with instant activation and 24/7 support.')
@section('meta_keywords', $meta_keywords ?? 'mahadev book ID, mahadev book ID mobile number, mahadev book demo ID, mahadev book cricket ID, mahadev book betting ID number, mahadev book betting ID login, mahadev betting ID, mahadev exchange id')

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
            {!! $page->section('hero_badge', 'Trusted Mahadev Book ID Provider') !!}
        </div>
        <h1 class="hero-title">{!! $page->section('hero_title', 'Get Your <span class="text-gold">Mahadev Book ID</span> Instantly on WhatsApp with Radhey Book') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'Radhey Book is the fastest and most trusted way to get your Mahadev Book ID in India. Instant activation, secure transactions and 24/7 WhatsApp support. Get your Mahadev betting ID today and start your winning journey.') !!}</p>
        <div class="hero-cta">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">
                {!! $page->section('hero_btn_text', 'Get Your Mahadev Book ID Now') !!}
            </a>
        </div>
    </div>
</section>

{{-- INTRO --}}
<section class="section" id="intro">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('intro_title', '<span class="text-gold">Mahadev Book ID</span> in India') !!}</h2>
            <p class="section-subtitle">{!! $page->section('intro_subtitle', 'Get Your Mahadev Book ID Today and Start Betting on Cricket, Casino and More') !!}</p>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('intro_text_1', 'If you are looking for a quick and reliable way to get your Mahadev Book ID then Radhey Book is the right place for you. Mahadev Book is one of the most popular betting platforms in India and thousands of users trust it for cricket betting, casino games and live sports betting. With your Mahadev Book ID you get access to all the betting markets available on the platform including IPL, T20 World Cup, live casino and much more. Getting started is as simple as sending a WhatsApp message.') !!}</p>
                    <p>{!! $page->section('intro_text_2', 'Radhey Book makes the process of getting your Mahadev betting ID completely hassle free. You do not need to visit any office or fill out complex paperwork. Simply contact us through the Mahadev Book ID mobile number on WhatsApp, share your basic details, make your first deposit and your Mahadev Book ID is activated within minutes. This is why users across India prefer Radhey Book as their trusted provider for Mahadev exchange ID and all Mahadev related betting accounts.') !!}</p>
                </div>
            </div>
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/TENNIS FOOTBALL AVIATOR/cricket_3.png') }}" alt="Mahadev Book ID" style="width:100%;border-radius:16px;">
            </div>
        </div>
    </div>
</section>

{{-- WHAT IS MAHADEV BOOK ID --}}
<section class="section section-alt" id="what-is">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('what_is_title', 'What is a <span class="text-gold">Mahadev Book ID</span>?') !!}</h2>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/TENNIS FOOTBALL AVIATOR/cricket_4.png') }}" alt="Mahadev Betting" style="width:100%;border-radius:16px;">
            </div>
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('what_is_text_1', 'A Mahadev Book ID is your personal login account that gives you access to the Mahadev Book betting platform. With this ID you can log in, deposit funds, place bets on cricket matches and casino games, track your winnings and withdraw money safely. Every user needs a unique ID to access the platform and start betting.') !!}</p>
                    <p>{!! $page->section('what_is_text_2', 'Your Mahadev Book cricket ID gives you access to all major cricket tournaments including IPL, T20 World Cup, Big Bash, The Hundred and CPL along with live casino games and other sports. The Mahadev Book betting ID login process is simple and once your account is set up you can start betting immediately. If you want to try the platform before depositing real money you can also request a Mahadev Book demo ID to explore all the features and understand how the platform works.') !!}</p>
                </div>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('what_is_btn_text', 'Get Your Mahadev Book ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- WHY RADHEY BOOK --}}
<section class="section" id="why-provider">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('provider_title', 'Why Get Your <span class="text-gold">Mahadev Book ID</span> from Radhey Book?') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div>
                <h3>{!! $page->section('provider_1_title', 'Instant Activation') !!}</h3>
                <p>{!! $page->section('provider_1_text', 'Your Mahadev Book ID is activated within 2 to 5 minutes after payment. No waiting so you can start betting right away on any match or game.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3>{!! $page->section('provider_2_title', 'Verified and Secure') !!}</h3>
                <p>{!! $page->section('provider_2_text', 'Every Mahadev Book betting ID we provide is fully verified with secure encryption to protect your personal and financial data.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div>
                <h3>{!! $page->section('provider_3_title', 'Free Demo ID Available') !!}</h3>
                <p>{!! $page->section('provider_3_text', 'Want to try before you play? Request a Mahadev Book demo ID and explore the full platform without spending any real money first.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div>
                <h3>{!! $page->section('provider_4_title', 'WhatsApp Registration') !!}</h3>
                <p>{!! $page->section('provider_4_text', 'Contact us on the Mahadev Book ID mobile number via WhatsApp and get your account set up in minutes. No forms and no apps needed.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
                <h3>{!! $page->section('provider_5_title', 'Fast Withdrawals') !!}</h3>
                <p>{!! $page->section('provider_5_text', 'Withdraw your winnings within 5 minutes directly to your bank account via UPI, Paytm, PhonePe or bank transfer.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div>
                <h3>{!! $page->section('provider_6_title', '24/7 Support') !!}</h3>
                <p>{!! $page->section('provider_6_text', 'Our team is available round the clock via WhatsApp and phone to help you with your Mahadev betting ID account anytime you need.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- HOW TO GET --}}
<section class="section" id="how-to-get" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('how_title', 'How to Get Your <span class="text-gold">Mahadev Book ID</span> on WhatsApp?') !!}</h2>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(250px,1fr));">
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">1</span></div>
                <h3>{!! $page->section('how_step_1_title', 'Click on WhatsApp') !!}</h3>
                <p>{!! $page->section('how_step_1_text', 'Click the WhatsApp button on this page to connect directly with our team using the Mahadev Book ID mobile number.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">2</span></div>
                <h3>{!! $page->section('how_step_2_title', 'Send Your Request') !!}</h3>
                <p>{!! $page->section('how_step_2_text', 'Send a message saying Hi I want a Mahadev Book ID and our team will respond within seconds with the next steps.') !!}</p>
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
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('how_btn_text', 'Get Your Mahadev Book ID on WhatsApp Now') !!}</a>
        </div>
    </div>
</section>

{{-- MAHADEV BOOK DEMO ID --}}
<section class="section" id="demo-id">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('demo_title', 'Try the Platform with a <span class="text-gold">Mahadev Book Demo ID</span>') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('demo_text_1', 'If you are not sure whether Mahadev Book is the right platform for you then you can request a Mahadev Book demo ID from Radhey Book. A demo ID lets you explore the entire platform, check out the betting markets, see how the interface works and understand the features without putting any real money at risk. This is especially helpful for beginners who want to get comfortable with online betting before making their first deposit.') !!}</p>
            <p>{!! $page->section('demo_text_2', 'Once you are satisfied with the demo experience you can easily upgrade to a full Mahadev Book ID by making your first deposit. Your account will be activated instantly and you can start betting on live cricket matches, casino games and everything else the platform has to offer. The transition from demo to real account is seamless and our support team is always available to guide you through the process.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('demo_btn_text', 'Get Your Mahadev Book Demo ID Now') !!}</a>
        </div>
    </div>
</section>

{{-- MAHADEV EXCHANGE ID --}}
<section class="section" id="exchange" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('exchange_title', 'What is <span class="text-gold">Mahadev Exchange ID</span>?') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('exchange_text', 'A Mahadev exchange ID gives you access to the Mahadev betting exchange where you can bet against other users instead of a traditional bookmaker. This exchange model often provides better odds and more flexibility in your betting strategy. With your Mahadev exchange ID from Radhey Book you can trade bets on cricket matches, back or lay teams, and take advantage of changing odds during live matches. It is a powerful tool for users who want more control over their betting experience and Radhey Book makes it easy to get your Mahadev exchange ID activated quickly through WhatsApp.') !!}</p>
        </div>
    </div>
</section>

{{-- TOURNAMENTS --}}
<section class="section" id="tournaments">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('tournament_title', 'Bet on Major Tournaments with Your <span class="text-gold">Mahadev Book Cricket ID</span>') !!}</h2>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(300px,1fr));">
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/T-20 World Cup.png') }}" alt="T20 World Cup" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_1_title', 'T20 World Cup') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_1_text', 'The biggest T20 tournament in the world. Bet on match winners, top batsmen, total runs and live ball by ball markets with your Mahadev Book cricket ID.') !!}</p>
                </div>
            </a>
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/the hundred.png') }}" alt="The Hundred" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_2_title', 'The Hundred') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_2_text', 'A fast paced 100 ball cricket format from England. Bet on team performance, player stats and match outcomes using your Mahadev betting ID.') !!}</p>
                </div>
            </a>
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/cpl.png') }}" alt="CPL" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_3_title', 'IPL and CPL') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_3_text', 'The two biggest T20 leagues in cricket. Your instant cricket ID gives you full access to every match with live markets and session bets.') !!}</p>
                </div>
            </a>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('tournament_btn_text', 'Get Your Mahadev Book Cricket ID Now') !!}</a>
        </div>
    </div>
</section>

{{-- PAYMENTS --}}
<section class="section" id="payments" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('payments_title', 'Secure <span class="text-gold">Payment Methods</span> for Your Mahadev Book ID') !!}</h2>
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
<section class="section" id="security">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('security_title', 'Is Your <span class="text-gold">Mahadev Book ID</span> Safe?') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('security_text', 'Absolutely. Every Mahadev Book betting ID we issue is backed by advanced SSL encryption ensuring your personal and financial data are fully protected. Your whatsapp betting ID registration is handled through encrypted channels so your information stays completely private. Always use your Mahadev Book betting ID login through our official WhatsApp number and verified channels. By following simple precautions you enjoy a completely safe betting experience with your Mahadev Book ID from Radhey Book.') !!}</p>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="section" id="cta" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('cta_title', 'Ready to Get Your <span class="text-gold">Mahadev Book ID</span> Today?') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;text-align:center;">
            <p>{!! $page->section('cta_text', 'Join thousands of satisfied users who trust Radhey Book for their Mahadev Book ID. Whether you want a Mahadev Book cricket ID for IPL betting, a Mahadev exchange ID for exchange betting, or a Mahadev Book demo ID to try the platform first, we have got you covered. Get your Mahadev betting ID today with instant activation and 24/7 WhatsApp support. One message is all it takes to get started.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('cta_btn_text', 'Get Your Mahadev Book ID on WhatsApp Now') !!}</a>
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
                <button class="faq-question">{!! $page->section('faq_1_q', 'What is a Mahadev Book ID?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_1_a', 'A Mahadev Book ID is your personal account for accessing the Mahadev Book betting platform. It lets you log in, manage funds, place bets and withdraw winnings securely.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_2_q', 'How can I get a Mahadev Book ID on WhatsApp?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_2_a', 'Click the WhatsApp button on this page, contact us on the Mahadev Book ID mobile number, share your details, make your deposit and your account is activated within minutes.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_3_q', 'Can I get a Mahadev Book demo ID to try the platform?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_3_a', 'Yes, you can request a Mahadev Book demo ID from Radhey Book to explore the platform and understand the features before making your first real deposit.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_4_q', 'What is a Mahadev exchange ID?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_4_a', 'A Mahadev exchange ID gives you access to the Mahadev betting exchange where you can bet against other users with better odds and more flexibility in your betting strategy.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_5_q', 'How do I access my Mahadev Book betting ID login?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_5_a', 'After receiving your Mahadev Book betting ID login credentials on WhatsApp, visit the platform, enter your username and password and start betting immediately.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_6_q', 'Is the Mahadev Book ID safe to use?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_6_a', 'Yes, every Mahadev Book betting ID from Radhey Book is fully verified and protected with SSL encryption. Your data and funds are safe at all times.') !!}</p></div>
            </div>
        </div>
    </div>
</section>

@endsection
