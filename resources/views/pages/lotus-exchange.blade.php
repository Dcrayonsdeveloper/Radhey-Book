@extends('layouts.app')

@section('meta_title', $meta_title ?? 'Lotus Exchange ID – Get Instant Cricket ID on WhatsApp | Radhey Book')
@section('meta_description', $meta_description ?? 'Get your Lotus Exchange ID instantly on WhatsApp via Radhey Book. Quick, secure, hassle-free. Bet on IPL, T20 World Cup, CPL & more with live odds and 24/7 support.')
@section('meta_keywords', $meta_keywords ?? 'lotus exchange, lotus exchange ID, lotus betting ID, lotus 247 login, lotusexch, lotus cricket ID, whatsapp betting ID, instant cricket ID, betting ID india, lotusbook 247')

@section('content')

@php
    $waLink = 'https://linktr.ee/radheybook';
@endphp

{{-- HERO SECTION --}}
<section class="hero-section" id="hero" style="background: url('{{ asset('images/Lotus Exchange banner.png') }}') center/cover no-repeat;">
    <div class="hero-overlay" style="background: rgba(0,0,0,0.55);"></div>
    <div class="hero-content container">
        <div class="hero-badge">
            <span class="badge-pulse"></span>
            {!! $page->section('hero_badge', 'India\'s Most Popular Platform') !!}
        </div>
        <h1 class="hero-title">{!! $page->section('hero_title', 'Get your <span class="text-gold">Lotus Exchange ID</span> Now - On WhatsApp via Radhey Book Today!') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'Contact us on WhatsApp today and get your Lotus Exchange ID within minutes—quick, secure, and hassle-free. Start your winning journey now!') !!}</p>
        <div class="hero-cta">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">
                {!! $page->section('hero_btn_text', 'Get Your Lotus Exchange ID Now') !!}
            </a>
        </div>
    </div>
</section>

{{-- INTRO BLOCK --}}
<section class="section" id="intro">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('intro_title', 'Lotus Exchange ID') !!}</h2>
            <p class="section-subtitle">{!! $page->section('intro_subtitle', 'Access one of India\'s most <span class="text-gold">popular gaming platforms</span>, all in one place.') !!}</p>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('intro_text_1', 'Are you looking for a reliable and fast way to start online cricket betting in India without any hassle? Lotus Exchange is one of the most leading and trusted online betting platforms among the bettors these days to get their instant cricket ID and begin betting instantly. The platform is designed to serve both beginners and professional bettors, offering a seamless experience, quick registration, with multiple games, matches, and tournaments to bet from.') !!}</p>
                    <p>{!! $page->section('intro_text_2', 'Lotus Exchange is primarily beneficial because it is focused on speed and reliability. The users can add funds instantly, make bets on the ongoing matches and take the gains without any unnecessary delays. Moreover, the platform offers live odds, match facts, and various betting options which makes it a complete experience of betting on cricket using one Lotus Exchange ID.') !!}</p>
                </div>
            </div>
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/loutus exchange 1.png') }}" alt="Lotus Exchange" style="width:100%;border-radius:16px;">
            </div>
        </div>
    </div>
</section>

{{-- WHAT IS LOTUS EXCHANGE ID --}}
<section class="section section-alt" id="what-is">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('what_is_title', 'What is <span class="text-gold">Lotus Exchange ID</span>?') !!}</h2>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/loutus exchange 2.png') }}" alt="Lotus Exchange" style="width:100%;border-radius:16px;">
            </div>
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('what_is_text_1', 'The Lotus Exchange ID is a unique account credential that enables you to log in to the platform and use all the features. You can easily place bets on live cricket matches, monitor real-time scores, odds and manage your account securely once you have your ID.') !!}</p>
                    <p>{!! $page->section('what_is_text_2', 'This ID is not just a login credential—it represents your identity on the platform. The Lotus Exchange ID is used for account verification, deposits, withdrawals, and communication with the support team. With this ID, your WhatsApp betting ID is activated, enabling instant assistance and guidance for new and existing users. Using your betting ID India, you can enjoy uninterrupted betting on popular cricket events like the IPL, T20 World Cup, and CPL.') !!}</p>
                    <p>{!! $page->section('what_is_text_3', 'Having a Lotus Exchange ID makes you confident of accessing all features safely. It secures your personal data and allows solving any problems that you might have quickly. All your betting activities on the site are linked with your ID that ensures transparency and security.') !!}</p>
                </div>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('what_is_btn_text', 'Get Your Lotus Exchange ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- BENEFITS --}}
<section class="section" id="benefits">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('benefits_title', 'Benefits of Betting with <span class="text-gold">Lotus Exchange</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('benefits_subtitle', 'Betting with Lotus Exchange comes with a variety of advantages, making it a top choice for cricket fans') !!}</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                </div>
                <h3>{!! $page->section('benefit_1_title', 'Quick Registration') !!}</h3>
                <p>{!! $page->section('benefit_1_text', 'Obtaining your instant cricket ID takes minutes without any complex paperwork or time wastage.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg>
                </div>
                <h3>{!! $page->section('benefit_2_title', 'Wide Range of Betting Markets') !!}</h3>
                <p>{!! $page->section('benefit_2_text', 'Bet on local and international leagues, T20 tournaments, and other major events.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <h3>{!! $page->section('benefit_3_title', 'Live Betting') !!}</h3>
                <p>{!! $page->section('benefit_3_text', 'Place bets in real-time while matches are ongoing with continuously updated odds.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                </div>
                <h3>{!! $page->section('benefit_4_title', 'Secure Transactions') !!}</h3>
                <p>{!! $page->section('benefit_4_text', 'All deposit and withdrawal operations are safe and encrypted.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                </div>
                <h3>{!! $page->section('benefit_5_title', 'User-Friendly Interface') !!}</h3>
                <p>{!! $page->section('benefit_5_text', 'Navigate the platform easily, whether you are a beginner or an expert bettor.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                </div>
                <h3>{!! $page->section('benefit_6_title', '24/7 Customer Support') !!}</h3>
                <p>{!! $page->section('benefit_6_text', 'Access to the support team is available 24/7 with any questions about logging in, creating an account, or making a bet.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/><line x1="4" y1="22" x2="4" y2="15"/></svg>
                </div>
                <h3>{!! $page->section('benefit_7_title', 'Comprehensive Betting Options') !!}</h3>
                <p>{!! $page->section('benefit_7_text', 'Bet on match winners, top batsmen, highest run scorers, total runs, and more.') !!}</p>
            </div>
        </div>
        <p class="text-center" style="color:#b0b0c8;margin-top:24px;font-size:15px;">{!! $page->section('benefits_footer', 'These advantages will guarantee an easy and pleasant visit to the platform. Lotus Exchange is one of the online betting sites in India that offer a combination of speed, security and variety which makes it stand out from the other online betting websites.') !!}</p>
        <div class="text-center" style="margin-top:20px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('benefits_btn_text', 'Get Your Lotus Exchange ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- WHY CHOOSE LOTUS EXCHANGE --}}
<section class="section" id="why-choose" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('why_title', 'Why Choose <span class="text-gold">Lotus Exchange</span>?') !!}</h2>
            <p class="section-subtitle">{!! $page->section('why_subtitle', 'Cricket bettors choose Lotus Exchange over other platforms due to a number of reasons') !!}</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3>{!! $page->section('why_1_title', 'Trusted Platform') !!}</h3>
                <p>{!! $page->section('why_1_text', 'Known for reliability, fast payouts, and consistent performance.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg></div>
                <h3>{!! $page->section('why_2_title', 'Mobile-Friendly Access') !!}</h3>
                <p>{!! $page->section('why_2_text', 'Log in and place bets on smartphones or tablets anytime, anywhere.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
                <h3>{!! $page->section('why_3_title', 'Multiple Payment Options') !!}</h3>
                <p>{!! $page->section('why_3_text', 'Secure, easy and quick deposits and withdrawals.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
                <h3>{!! $page->section('why_4_title', 'Updated Betting Markets') !!}</h3>
                <p>{!! $page->section('why_4_text', 'Updated betting markets with real-time match statistics and current odds so that you can bet wisely.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div>
                <h3>{!! $page->section('why_5_title', 'Secure Betting ID India') !!}</h3>
                <p>{!! $page->section('why_5_text', 'Keeps your information, personal and financial, safe when betting online.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div>
                <h3>{!! $page->section('why_6_title', 'Ideal for Beginners and Experts') !!}</h3>
                <p>{!! $page->section('why_6_text', 'Easy to use simple interface for beginners and advanced features for seasoned bettors.') !!}</p>
            </div>
        </div>
        <p class="text-center" style="color:#b0b0c8;margin-top:24px;font-size:15px;">{!! $page->section('why_footer', 'By betting with Lotus Exchange, you will be certain to bet on a safe and reliable platform, and you will have full access to the Indian cricket markets.') !!}</p>
        <div class="text-center" style="margin-top:20px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('why_btn_text', 'Start Betting With Lotus Exchange ID Now') !!}</a>
        </div>
    </div>
</section>

{{-- HOW TO GET YOUR LOTUS EXCHANGE ID --}}
<section class="section" id="how-to-get">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('how_title', 'How to Get Your <span class="text-gold">Lotus Exchange ID</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('how_subtitle', 'Getting your Lotus Exchange ID is quick and straightforward. Follow these steps:') !!}</p>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(250px,1fr));">
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">1</span></div>
                <h3>{!! $page->section('how_step_1_title', 'Click WhatsApp Message') !!}</h3>
                <p>{!! $page->section('how_step_1_text', 'Go to the official Lotus Exchange platform and select the WhatsApp chat feature to begin your registration.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">2</span></div>
                <h3>{!! $page->section('how_step_2_title', 'Send Message') !!}</h3>
                <p>{!! $page->section('how_step_2_text', 'Send "Hi, I want a Lotus Exchange ID" to notify the support team that you want to register.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">3</span></div>
                <h3>{!! $page->section('how_step_3_title', 'Provide Details & Deposit') !!}</h3>
                <p>{!! $page->section('how_step_3_text', 'Provide simple details such as your name and contact number and deposit a little to get your account active.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">4</span></div>
                <h3>{!! $page->section('how_step_4_title', 'Get Your ID') !!}</h3>
                <p>{!! $page->section('how_step_4_text', 'Within 2 to 5 minutes your ID and login credentials will be shared with you. You can start betting.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">5</span></div>
                <h3>{!! $page->section('how_step_5_title', 'Login and Start Betting') !!}</h3>
                <p>{!! $page->section('how_step_5_text', 'Log in and start placing bets on your favourite matches and games right away.') !!}</p>
            </div>
        </div>
        <p class="text-center" style="color:#b0b0c8;margin-top:20px;font-size:15px;">{!! $page->section('how_footer', 'This is a very easy procedure and you are able to bet instantly and not to wait days to verify your account.') !!}</p>
        <div class="text-center" style="margin-top:20px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('how_btn_text', 'Get your Lotus Exchange ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- BONUS OFFERS --}}
<section class="section" id="bonus" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('bonus_title', 'Enjoy Exclusive <span class="text-gold">Lotus Exchange Bonus Offers</span> Only with Radhey Book') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
                <h3>{!! $page->section('bonus_1_title', 'Reload Bonus') !!}</h3>
                <p>{!! $page->section('bonus_1_text', 'Returning players get extra balance and rewards to use on their next deposits. The bonus can be different according to what is occurring on that day.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div>
                <h3>{!! $page->section('bonus_2_title', 'Free Demo ID Option') !!}</h3>
                <p>{!! $page->section('bonus_2_text', 'Radhey Book provides a free Lotus Exchange Demo ID, which allows you to navigate the platform and test it with no real money until you make a choice.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
                <h3>{!! $page->section('bonus_3_title', 'Welcome Bonus') !!}</h3>
                <p>{!! $page->section('bonus_3_text', 'New users can get a 100% bonus on their first deposit. This bonus is automatically credited after completing the activation process.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div>
                <h3>{!! $page->section('bonus_4_title', 'Referral Bonus') !!}</h3>
                <p>{!! $page->section('bonus_4_text', 'Get commissions via sharing of your referral code. The bigger your network, the bigger your bonus is as your friends deposit and play.') !!}</p>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('bonus_btn_text', 'Get your Free Bonus & Demo ID') !!}</a>
        </div>
    </div>
</section>

{{-- LOTUS EXCHANGE SUPPORT --}}
<section class="section" id="support">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('support_title', 'Lotus Exchange <span class="text-gold">Support Number</span>') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('support_text', 'The Lotus Exchange support number is available 24/7 and can be contacted in case of any account or betting related questions. It could be either you have a problem with your Lotus 247 login, account validation, deposit problem, or you need help with the support team. Close access to support makes betting experience easier and more convenient.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('support_btn_text', 'Reach Out Support Team Today') !!}</a>
        </div>
    </div>
</section>

{{-- CRICKET BETTING WITH LOTUSBOOK 247 ID --}}
<section class="section" id="cricket-betting" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('cricket_title', 'Cricket Betting with <span class="text-gold">Lotusbook 247 ID</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('cricket_subtitle', 'There are various cricket tournaments and betting opportunities you can access with a Lotus Exchange ID') !!}</p>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(300px,1fr));">
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/T-20 World Cup.png') }}" alt="T20 World Cup" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_1_title', 'T20 World Cup') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_1_text', 'One of the most interesting world cricket championships. Bets on match-winners, leading batsmen, aggregate runs and live ball-by-ball.') !!}</p>
                </div>
            </a>
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/the hundred.png') }}" alt="The Hundred" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_2_title', 'The Hundred') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_2_text', 'A fast-paced UK cricket tournament. Place bets on team performance, highest scorers, and match outcomes.') !!}</p>
                </div>
            </a>
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/cpl.png') }}" alt="CPL" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_3_title', 'CPL (Caribbean Premier League)') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_3_text', 'Betting on the Caribbean teams in real time with the results on the field, the live odds, and the statistics of the players.') !!}</p>
                </div>
            </a>
        </div>
        <p class="text-center" style="color:#b0b0c8;margin-top:24px;font-size:15px;">{!! $page->section('cricket_footer', 'You have your Lotus Exchange ID which will allow you to take part in these tournaments and enjoy the best live updates, match statistics and betting options.') !!}</p>
        <div class="text-center" style="margin-top:20px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('cricket_btn_text', 'Get Your Cricket Betting ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- IS LOTUS EXCHANGE SAFE --}}
<section class="section" id="safety">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('safety_title', 'Is Lotus Exchange ID <span class="text-gold">Safe to Use</span>?') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('safety_text', 'Yes, your Lotus Exchange ID is absolutely secure to Indian users. The platform has an enhanced encryption system that keeps your personal and financial data safe. It is a safe place to have your betting ID India as all transactions are encrypted, such as deposits and withdrawals. You are able to bet on cricket online without having to worry about your account being compromised.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('safety_btn_text', 'Bet with Lotus Exchange ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- PAYMENT OPTIONS --}}
<section class="section" id="payments" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('payments_title', 'Payment Options Available in <span class="text-gold">Lotus Exchange ID</span>') !!}</h2>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(4,1fr);max-width:800px;margin:0 auto;">
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/upi.png') }}" alt="UPI" style="width:48px;height:48px;object-fit:contain;"></div>
                <h3>{!! $page->section('payment_1_title', 'UPI Payments') !!}</h3>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/bank transfer.png') }}" alt="Net Banking" style="width:48px;height:48px;object-fit:contain;"></div>
                <h3>{!! $page->section('payment_2_title', 'Net Banking') !!}</h3>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/paytm.png') }}" alt="Paytm" style="width:48px;height:48px;object-fit:contain;"></div>
                <h3>{!! $page->section('payment_3_title', 'Paytm & Wallets') !!}</h3>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/bank transfer.png') }}" alt="Bank Transfer" style="width:48px;height:48px;object-fit:contain;"></div>
                <h3>{!! $page->section('payment_4_title', 'Bank Transfers') !!}</h3>
            </div>
        </div>
        <p class="text-center" style="color:#b0b0c8;margin-top:24px;font-size:15px;">{!! $page->section('payments_footer', 'These alternatives will make your transaction of WhatsApp betting ID fast, safe, and convenient, with full control of your money.') !!}</p>
        <div class="text-center" style="margin-top:20px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('payments_btn_text', 'Claim Your WhatsApp Betting ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- CONTACT NUMBER --}}
<section class="section" id="contact">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('contact_title', 'Lotus Exchange ID <span class="text-gold">Contact Number</span>') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('contact_text', 'For queries related to Lotus Exchange ID, you can contact the support team through the official Lotus Exchange contact number. The Lotus foreign exchange contact number also assists users with login issues and transaction problems. Support is available for issues related to Lotus 247 login, deposits, withdrawals, and account verification, ensuring uninterrupted access to your betting account.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('contact_btn_text', 'Contact Lotus Exchange ID Contact Number Now') !!}</a>
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
                <button class="faq-question">{!! $page->section('faq_1_q', 'What is Lotus Exchange ID?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_1_a', 'A Lotus Exchange ID is your unique login credential for accessing the platform, placing bets, and tracking live cricket matches.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_2_q', 'How can I get a Lotus Betting ID?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_2_a', 'Send a WhatsApp message requesting an account, provide your details, make the first deposit, and receive your WhatsApp betting ID instantly.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_3_q', 'How do I register on Lotus Exchange com login registration?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_3_a', 'Click the WhatsApp link on the official website, send "Hi, I want a Lotus Exchange ID," provide your details, make a deposit, and receive your ID.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_4_q', 'Can I use Lotus Cricket ID for IPL betting?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_4_a', 'Yes, your Lotus Cricket ID gives full access to IPL markets, including match winners, top scorers, and live odds.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_5_q', 'What is Lotusexch?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_5_a', 'Lotusexch refers to the Lotus Exchange platform where users can create an instant cricket ID, place bets, and enjoy live cricket betting in India.') !!}</p></div>
            </div>
        </div>
    </div>
</section>

@endsection
