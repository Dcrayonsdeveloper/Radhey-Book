@extends('layouts.app')

@section('meta_title', $meta_title ?? 'Fairplay ID – Get Instant Cricket ID on WhatsApp | Radhey Book')
@section('meta_description', $meta_description ?? 'Secure your Fairplay ID today on WhatsApp via Radhey Book. Fast, convenient, hassle-free cricket betting, live markets & 24/7 support.')
@section('meta_keywords', $meta_keywords ?? 'fairplay, fairplay ID, fairplay 369, fairplay 369 login, fairplay cricket ID, fairplay customer care number, whatsapp betting ID, instant cricket ID, betting ID india')

@section('content')

@php
    $waLink = 'https://wa.me/' . ($siteSettings['whatsapp_number'] ?? '919876543210') . '?text=Hi%20I%20want%20a%20Fairplay%20ID';
@endphp

{{-- HERO SECTION --}}
<section class="hero-section" id="hero" style="background: url('{{ asset('images/fairplay banner.png') }}') center/cover no-repeat;">
    <div class="hero-overlay" style="background: rgba(0,0,0,0.55);"></div>
    <div class="hero-content container">
        <div class="hero-badge">
            <span class="badge-pulse"></span>
            {!! $page->section('hero_badge', 'India\'s Trusted Platform') !!}
        </div>
        <h1 class="hero-title">{!! $page->section('hero_title', 'Secure your <span class="text-gold">Fairplay ID</span> today — fast and convenient via WhatsApp with Radhey Book.') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'Reach out to us on WhatsApp today and receive your Fairplay ID within minutes — quick, secure, and hassle-free. Begin your winning journey now with smooth access and instant support!') !!}</p>
        <div class="hero-cta">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">
                {!! $page->section('hero_btn_text', 'Get Your Fairplay ID Now') !!}
            </a>
        </div>
    </div>
</section>

{{-- INTRO BLOCK --}}
<section class="section" id="intro">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('intro_title', 'Fairplay ID') !!}</h2>
            <p class="section-subtitle">{!! $page->section('intro_subtitle', 'Your gateway to one of India\'s most <span class="text-gold">popular gaming platforms</span>, all in one place.') !!}</p>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('intro_text_1', 'If you are looking for a trusted and easy way to start online cricket betting, fair play is one of the most popular choices among users in India. It offers a smooth platform where you can quickly access betting markets without complicated registration steps. With the rising demand for fast and reliable platforms, many users now prefer services that provide an instant cricket ID and quick onboarding.') !!}</p>
                    <p>{!! $page->section('intro_text_2', 'The biggest advantage of fair play is its simple process to get started using a whatsapp betting ID. You don\'t need to go through lengthy verification or wait for approvals. Within minutes, you can get your ID and start exploring different betting options. This makes it a preferred option for users searching for a convenient and fast betting ID India experience. The platform focuses on ease of use, speed, and secure access, making it suitable for both beginners and experienced users.') !!}</p>
                </div>
            </div>
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/fairplay 1.png') }}" alt="Fairplay" style="width:100%;border-radius:16px;">
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('intro_btn_text', 'Start Betting with Fairplay ID Now') !!}</a>
        </div>
    </div>
</section>

{{-- WHAT IS FAIRPLAY ID --}}
<section class="section section-alt" id="what-is">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('what_is_title', 'What is <span class="text-gold">Fairplay ID</span>?') !!}</h2>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/fairplay 2 .png') }}" alt="Fairplay" style="width:100%;border-radius:16px;">
            </div>
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('what_is_text_1', 'A fairplay ID is your personal betting account that allows you to access the platform and place bets on cricket and other sports. Once you receive your ID, you can log in, add funds, and start betting on live matches and tournaments.') !!}</p>
                    <p>{!! $page->section('what_is_text_2', 'This ID will assist you in managing your account, betting history and balance. Users can have real-time betting, updated odds and choices of markets in a single place with a fairplay ID. It will streamline the process of betting, and make it both secure and efficient.') !!}</p>
                </div>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('what_is_btn_text', 'Get Your Fairplay Cricket ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- BENEFITS --}}
<section class="section" id="benefits">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('benefits_title', 'Benefits of Betting with <span class="text-gold">Fairplay</span>') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div>
                <h3>{!! $page->section('benefit_1_title', 'Quick Account Setup') !!}</h3>
                <p>{!! $page->section('benefit_1_text', 'You can be up and running in a few minutes without a time-consuming registration process.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg></div>
                <h3>{!! $page->section('benefit_2_title', 'Simple User Interface') !!}</h3>
                <p>{!! $page->section('benefit_2_text', 'The platform is easy to use, making it suitable even for beginners.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg></div>
                <h3>{!! $page->section('benefit_3_title', 'Multiple Betting Markets') !!}</h3>
                <p>{!! $page->section('benefit_3_text', 'The users have a choice of betting on cricket and all other sports.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div>
                <h3>{!! $page->section('benefit_4_title', 'Secure Transactions') !!}</h3>
                <p>{!! $page->section('benefit_4_text', 'To ensure the safety of user data, deposits and withdrawals are done safely.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3>{!! $page->section('benefit_5_title', 'Live Betting Experience') !!}</h3>
                <p>{!! $page->section('benefit_5_text', 'Live match updates and odds in real time assist the users to make informed betting choices.') !!}</p>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('benefits_btn_text', 'Start Betting With Fairplay ID Now') !!}</a>
        </div>
    </div>
</section>

{{-- WHY CHOOSE FAIRPLAY --}}
<section class="section" id="why-choose" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('why_title', 'Why Choose <span class="text-gold">Fairplay Cricket ID</span>?') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div>
                <h3>{!! $page->section('why_1_title', 'Instant ID Generation') !!}</h3>
                <p>{!! $page->section('why_1_text', 'Get your ID quickly and start betting without delays.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3>{!! $page->section('why_2_title', '24/7 Access') !!}</h3>
                <p>{!! $page->section('why_2_text', 'The platform is available any time, and one can make bets at any time they desire.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3>{!! $page->section('why_3_title', 'Reliable Platform') !!}</h3>
                <p>{!! $page->section('why_3_text', 'It is reliable among many users as they have a stable and smooth betting experience.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
                <h3>{!! $page->section('why_4_title', 'Flexible Payment Options') !!}</h3>
                <p>{!! $page->section('why_4_text', 'Various ways of making payments make things simple and convenient.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div>
                <h3>{!! $page->section('why_5_title', 'Responsive Support Team') !!}</h3>
                <p>{!! $page->section('why_5_text', 'Assistance is available whenever users face issues or have questions.') !!}</p>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('why_btn_text', 'Get Your Online Betting ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- HOW TO GET YOUR FAIRPLAY CRICKET ID --}}
<section class="section" id="how-to-get">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('how_title', 'How to Get Your <span class="text-gold">Fairplay Cricket ID</span>') !!}</h2>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(250px,1fr));">
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">1</span></div>
                <h3>{!! $page->section('how_step_1_title', 'Click WhatsApp Message') !!}</h3>
                <p>{!! $page->section('how_step_1_text', 'To get in direct contact with the provider, just start by clicking on the WhatsApp option.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">2</span></div>
                <h3>{!! $page->section('how_step_2_title', 'Send Message') !!}</h3>
                <p>{!! $page->section('how_step_2_text', 'Send a simple message "Hi, I want to get a Fairplay ID" to request your ID and begin the process.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">3</span></div>
                <h3>{!! $page->section('how_step_3_title', 'Give Details & Deposit') !!}</h3>
                <p>{!! $page->section('how_step_3_text', 'Give simple information and finish your initial deposit to get your account on.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">4</span></div>
                <h3>{!! $page->section('how_step_4_title', 'Get ID') !!}</h3>
                <p>{!! $page->section('how_step_4_text', 'Within 2 to 5 minutes your ID and login credentials will be shared with you. You can start betting.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">5</span></div>
                <h3>{!! $page->section('how_step_5_title', 'Login and Start Betting') !!}</h3>
                <p>{!! $page->section('how_step_5_text', 'Log in and start placing bets on your favourite matches and games right away.') !!}</p>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('how_btn_text', 'Bet With Fairplay Login Today') !!}</a>
        </div>
    </div>
</section>

{{-- CUSTOMER SUPPORT --}}
<section class="section" id="customer-care" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('care_title', 'Fairplay <span class="text-gold">Customer Support</span>') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('care_text_1', 'The fairplay customer support system is set to assist users with any form of queries such as account setups, deposits, withdrawals and troubles with logins. You can simply contact anyone to help you in case of any problem.') !!}</p>
            <p>{!! $page->section('care_text_2', 'The fairplay contact number India helps users to contact the organization and get prompt assistance to solve their problem. With a good support system, you can be sure that it will be smooth sailing when it comes to betting.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('care_btn_text', 'Ask for Help via Fairplay Customer Support') !!}</a>
        </div>
    </div>
</section>

{{-- CRICKET BETTING WITH FAIRPLAY CRICKET ID --}}
<section class="section" id="cricket-betting">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('cricket_title', 'Cricket Betting with <span class="text-gold">Fairplay Cricket ID</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('cricket_subtitle', 'Using fairplay cricket ID, users access major cricket tournaments and have a huge variety of betting markets. This will enable you to have a full betting experience with real-time updates.') !!}</p>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(300px,1fr));">
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/T-20 World Cup.png') }}" alt="T-20 World Cup" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_1_title', 'T-20 World Cup') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_1_text', 'It is among the largest cricket tournaments in the world, with the best international teams. You can bet on match winners, best batsmen, total runs and live ball-by-ball markets on updated odds using your ID.') !!}</p>
                </div>
            </a>
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/the hundred.png') }}" alt="The Hundred" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_2_title', 'The Hundred') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_2_text', 'The Hundred is a fast and dynamic format, with its quick-match format and dynamic betting. Users will have an opportunity to discover some unique betting and experience a new form of cricket.') !!}</p>
                </div>
            </a>
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/cpl.png') }}" alt="CPL" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_3_title', 'CPL (Caribbean Premier League)') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_3_text', 'CPL offers various betting markets, as it is known to have entertaining matches. You can gamble on the results of matches, player performances and on live matches.') !!}</p>
                </div>
            </a>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('cricket_btn_text', 'Start Betting With Fairplay Cricket ID') !!}</a>
        </div>
    </div>
</section>

{{-- IS FAIRPLAY 369 SAFE --}}
<section class="section" id="safety" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('safety_title', 'Is <span class="text-gold">Fairplay 369 Login</span> Safe to Use?') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('safety_text_1', 'Yes, fairplay 369 login is usually secure to use by people who desire to have a trusted betting experience. The site is dedicated to safe systems to safeguard user information and transactions.') !!}</p>
            <p>{!! $page->section('safety_text_2', 'It is also advisable to access your account only with trusted sources and also not to share personal information with strangers. Simple safety measures will guarantee a safe and hassle free betting experience.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('safety_btn_text', 'Bet With Fairplay 369 Login') !!}</a>
        </div>
    </div>
</section>

{{-- PAYMENT OPTIONS --}}
<section class="section" id="payments">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('payments_title', 'Payment Options Available in <span class="text-gold">Fairplay 369 Login</span>') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('payments_text_1', 'The platform provides multiple payment options to ensure customers can easily make deposits and withdrawals. Such a flexibility enables the users to adopt a way that is convenient to them.') !!}</p>
            <p>{!! $page->section('payments_text_2', 'Typical payment options are bank transfers and UPI, among other digital payment methods. These are the fastest ways to deposit, withdraw money and are useful in letting the users manage their finances. Rapid transactions enhance the entire user experience, and make betting more convenient.') !!}</p>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(4,1fr);max-width:800px;margin:30px auto 0;">
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/upi.png') }}" alt="UPI" style="width:48px;height:48px;object-fit:contain;"></div>
                <h3>{!! $page->section('payment_1_title', 'UPI') !!}</h3>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/bank transfer.png') }}" alt="Bank Transfer" style="width:48px;height:48px;object-fit:contain;"></div>
                <h3>{!! $page->section('payment_2_title', 'Bank Transfer') !!}</h3>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/paytm.png') }}" alt="Paytm" style="width:48px;height:48px;object-fit:contain;"></div>
                <h3>{!! $page->section('payment_3_title', 'Paytm') !!}</h3>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/phonepe.png') }}" alt="PhonePe" style="width:48px;height:48px;object-fit:contain;"></div>
                <h3>{!! $page->section('payment_4_title', 'PhonePe') !!}</h3>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('payments_btn_text', 'Click Here to Get Your Cricket ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- CUSTOMER CARE NUMBER --}}
<section class="section" id="contact" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('contact_title', 'Fairplay 369 <span class="text-gold">Customer Care Number</span>') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('contact_text_1', 'The fairplay 369 customer care number is important for users who need direct support. Whether you are facing issues with your account or need help with transactions, assistance is easily available.') !!}</p>
            <p>{!! $page->section('contact_text_2', 'You may also call the fairplay customer care number with general queries, or the fairplay contact number India with the quick fix. The availability of support will enhance the reliability and usability of the platform, as it will ensure that the user can keep on betting without any interruption.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('contact_btn_text', 'Reach Out Team Now') !!}</a>
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
                <button class="faq-question">{!! $page->section('faq_1_q', 'What is fairplay customer support chat?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_1_a', 'The Fairplay customer support chat enables customers to receive immediate response to account, log in and transaction related queries.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_2_q', 'How can I contact fairplay customer support?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_2_a', 'Use fairplay customer support via WhatsApp or fairplay contact number India to get quick customer support.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_3_q', 'What is the fairplay 369 customer care number?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_3_a', 'The fairplay 369 customer care number is used to resolve issues related to deposits, withdrawals, and account access.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_4_q', 'Is there a fairplay customer care number India available?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_4_a', 'Yes, the fairplay customer care number India can be used by the users to take assistance on their queries.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_5_q', 'Can I get an instant cricket ID on Fairplay?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_5_a', 'Yes, WhatsApp allows users to create an instant cricket ID and bet easily.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_6_q', 'Is Fairplay suitable for betting ID India users?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_6_a', 'It is a favorite with users who prefer a secure betting ID India that is easily accessible and can deal with transactions quickly.') !!}</p></div>
            </div>
        </div>
    </div>
</section>

@endsection
