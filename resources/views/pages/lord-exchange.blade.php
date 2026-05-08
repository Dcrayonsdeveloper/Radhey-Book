@extends('layouts.app')

@section('meta_title', $meta_title ?? 'Lords Exchange ID – Get Instant Cricket ID on WhatsApp | Radhey Book')
@section('meta_description', $meta_description ?? 'Get your Lords Exchange ID instantly on WhatsApp with Radhey Book. Quick setup, 100% secure, fast deposits & withdrawals. Start your winning journey today!')
@section('meta_keywords', $meta_keywords ?? 'lords exchange, lords exchange ID, lord exchange login, lord exchange betting ID, instant cricket ID, whatsapp betting ID, betting ID india, lordsexch, lords exchange support number')

@section('content')

@php
    $waLink = 'https://linktr.ee/radheybook';
@endphp

{{-- HERO SECTION --}}
<section class="hero-section" id="hero" style="background: url('{{ asset('images/lord-banner.png') }}') center/cover no-repeat;">
    <div class="hero-overlay" style="background: rgba(0,0,0,0.55);"></div>
    <div class="hero-content container">
        <div class="hero-badge">
            <span class="badge-pulse"></span>
            {!! $page->section('hero_badge', 'India\'s Most In-Demand Platform') !!}
        </div>
        <h1 class="hero-title">{!! $page->section('hero_title', 'Get Your <span class="text-gold">Lords Exchange ID</span>') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'Instantly on WhatsApp with Radhey Book Today') !!}</p>
        <div class="hero-cta">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">
                {!! $page->section('hero_btn_text', 'Get Your Lords Exchange ID Now') !!}
            </a>
        </div>
    </div>
</section>

{{-- INTRO BLOCK --}}
<section class="section" id="intro">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('intro_title', 'Lords Exchange ID') !!}</h2>
            <p class="section-subtitle">{!! $page->section('intro_subtitle', 'Get access to one of India\'s most <span class="text-gold">in-demand gaming platforms</span>, all in one place.') !!}</p>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('intro_message', 'Message us today on whatsapp to get your lords exchange ID within just a few minutes. Without any hassle, 100% trust, security, and safety. And start your winning journey today!') !!}</p>
                    <p>{!! $page->section('intro_text_1', 'If you are looking for a safe, secure, and reliable online betting platform to start your betting journey on. Then you are at the right place, lords exchange is one of the most preferred platforms today among the users. It is designed to give users a smooth experience with quick access, real-time betting markets, and easy-to-use interface. The platform is chosen by many users since they can start betting within minutes because it removes complicated steps and allows them to begin betting within minutes.') !!}</p>
                    <p>{!! $page->section('intro_text_2', 'With a quick and hassle-free setup process, you can get your lords exchange ID and start exploring live matches without any delay. The platform also provides a fast and secure way to receive your whatsapp betting ID, making registration even more convenient. Whether you are a betting expert or just starting, this platform works well for anyone looking for a trusted betting ID india with easy access and fast performance.') !!}</p>
                </div>
            </div>
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/lord-1.png') }}" alt="Lords Exchange" style="width:100%;border-radius:16px;">
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('intro_btn_text', 'Get your Lords Exchange ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- WHAT IS LORDS EXCHANGE ID --}}
<section class="section section-alt" id="what-is">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('what_is_title', 'What is <span class="text-gold">Lords Exchange ID</span>?') !!}</h2>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/lord-2.png') }}" alt="Lords Exchange" style="width:100%;border-radius:16px;">
            </div>
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('what_is_text_1', 'Lords exchange ID is your personal login access that allows you to enter the platform and bet on cricket and other sports. You are able to log in and manage your account once you receive your ID and place bets instantly. It does not require complicated steps, making it ideal for users who want to get started fast.') !!}</p>
                    <p>{!! $page->section('what_is_text_2', 'The platform offers different types of betting options, including match betting, session betting, and live betting. Users can make more informed decisions when making bets because of real-time updates and varying odds. The system is designed in a way that it is easy to guess how it operates and a beginner can easily learn to operate it without any difficulties.') !!}</p>
                </div>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('what_is_btn_text', 'Get your Lords Exchange ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- BENEFITS --}}
<section class="section" id="benefits">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('benefits_title', 'Benefits of Betting with <span class="text-gold">Lords Exchange</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('benefits_subtitle', 'There are a number of positive things about using lords exchange which enhance your betting experience') !!}</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                </div>
                <h3>{!! $page->section('benefit_1_title', 'Quick ID Setup') !!}</h3>
                <p>{!! $page->section('benefit_1_text', 'You can get started fast with an instant cricket ID without long waiting times.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                </div>
                <h3>{!! $page->section('benefit_2_title', 'Easy to Use Interface') !!}</h3>
                <p>{!! $page->section('benefit_2_text', 'The interface is user friendly and is therefore appropriate to both new and experienced users.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                </div>
                <h3>{!! $page->section('benefit_3_title', 'Fast Transactions') !!}</h3>
                <p>{!! $page->section('benefit_3_text', 'Deposits and withdrawals are processed quickly, helping you manage your funds easily.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <h3>{!! $page->section('benefit_4_title', 'Live Betting Access') !!}</h3>
                <p>{!! $page->section('benefit_4_text', 'Bet during matches with real-time updates and changing odds.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/><line x1="4" y1="22" x2="4" y2="15"/></svg>
                </div>
                <h3>{!! $page->section('benefit_5_title', 'Multiple Betting Options') !!}</h3>
                <p>{!! $page->section('benefit_5_text', 'You can choose from match betting, sessions, and other formats.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
                </div>
                <h3>{!! $page->section('benefit_6_title', 'Flexible Access') !!}</h3>
                <p>{!! $page->section('benefit_6_text', 'Use your whatsapp betting ID anytime and from anywhere.') !!}</p>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('benefits_btn_text', 'Get Your Lords Exchange ID') !!}</a>
        </div>
    </div>
</section>

{{-- WHY CHOOSE LORDS EXCHANGE --}}
<section class="section" id="why-choose" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('why_title', 'Why Choose <span class="text-gold">Lords Exchange</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('why_subtitle', 'Here are some key reasons why users prefer lords exchange') !!}</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3>{!! $page->section('why_1_title', 'Reliable Platform') !!}</h3>
                <p>{!! $page->section('why_1_text', 'This is the preferred platform among many users who want to experience a smooth and consistent betting ID India experience.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                </div>
                <h3>{!! $page->section('why_2_title', 'Fast Registration Process') !!}</h3>
                <p>{!! $page->section('why_2_text', 'It is easy to get your lords exchange ID and it only takes a few minutes.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                </div>
                <h3>{!! $page->section('why_3_title', 'Safe Transactions') !!}</h3>
                <p>{!! $page->section('why_3_text', 'Payments are handled with proper care to ensure security.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg>
                </div>
                <h3>{!! $page->section('why_4_title', 'Wide Match Coverage') !!}</h3>
                <p>{!! $page->section('why_4_text', 'You can bet on a variety of cricket matches from different leagues.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                </div>
                <h3>{!! $page->section('why_5_title', 'Quick Login Access') !!}</h3>
                <p>{!! $page->section('why_5_text', 'You can start betting instantly, with your instant cricket ID.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                </div>
                <h3>{!! $page->section('why_6_title', 'Simple System') !!}</h3>
                <p>{!! $page->section('why_6_text', 'The platform avoids unnecessary complexity, making it easy to use.') !!}</p>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('why_btn_text', 'Start Betting With Lords Exchange ID Now') !!}</a>
        </div>
    </div>
</section>

{{-- HOW TO GET YOUR LORDS EXCHANGE ID --}}
<section class="section" id="how-to-get">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('how_title', 'How to Get Your <span class="text-gold">Lords Exchange ID</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('how_subtitle', 'Follow these steps to get your lords exchange id') !!}</p>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(250px,1fr));">
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon">
                    <span style="font-size:2em;color:#d4af37;font-weight:700;">1</span>
                </div>
                <h3>{!! $page->section('how_step_1_title', 'Click WhatsApp Message') !!}</h3>
                <p>{!! $page->section('how_step_1_text', 'Start by clicking on the WhatsApp link to connect with the support team directly.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon">
                    <span style="font-size:2em;color:#d4af37;font-weight:700;">2</span>
                </div>
                <h3>{!! $page->section('how_step_2_title', 'Send Message') !!}</h3>
                <p>{!! $page->section('how_step_2_text', 'Send a simple request message "Hi I Want a Lords Exchange ID" so the team can begin your registration process.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon">
                    <span style="font-size:2em;color:#d4af37;font-weight:700;">3</span>
                </div>
                <h3>{!! $page->section('how_step_3_title', 'Give Details & Deposit') !!}</h3>
                <p>{!! $page->section('how_step_3_text', 'Enter your general information and make your initial deposit to open your account.') !!}</p>
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
                <p>{!! $page->section('how_step_5_text', 'Use your ID to log in and begin betting on live matches and available markets.') !!}</p>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('how_btn_text', 'Get Instant Lords Exchange ID Now') !!}</a>
        </div>
    </div>
</section>

{{-- BONUS OFFERS --}}
<section class="section" id="bonus" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('bonus_title', 'Enjoy Surprise <span class="text-gold">Lordexchange Bonus Offers</span> Only with Radhey Book') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                </div>
                <h3>{!! $page->section('bonus_1_title', 'Reload Bonus') !!}</h3>
                <p>{!! $page->section('bonus_1_text', 'Returning players with extra balance and rewards which they can use on their upcoming deposits. The bonus amount will change based on the events which occur on that specific day.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                </div>
                <h3>{!! $page->section('bonus_2_title', 'Free Demo ID Option') !!}</h3>
                <p>{!! $page->section('bonus_2_text', 'Radhey Book provides a free Lords Exchange Demo ID which allows you to test the Lords platform without spending actual money if you need help making your decision.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <h3>{!! $page->section('bonus_3_title', 'Welcome Bonus') !!}</h3>
                <p>{!! $page->section('bonus_3_text', 'New users can receive a 100% bonus which applies to their first deposit. The system will automatically add this bonus after users complete their activation process.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                </div>
                <h3>{!! $page->section('bonus_4_title', 'Referral Bonus') !!}</h3>
                <p>{!! $page->section('bonus_4_text', 'You can earn commissions through your referral code when your friends make deposits and play your games. Your bonus amount increases as you expand your network.') !!}</p>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('bonus_btn_text', 'Get your Free Bonus & Demo ID') !!}</a>
        </div>
    </div>
</section>

{{-- LORDS EXCHANGE SUPPORT --}}
<section class="section" id="support">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('support_title', 'Lords Exchange <span class="text-gold">Support Number</span>') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('support_text_1', 'If you need help or assistance at any stage along the way, the lords exchange support number is available to assist you. Whether you have a problem with logging in, payment or a general inquiry, you can find the support without any difficulties.') !!}</p>
            <p>{!! $page->section('support_text_2', 'We also have WhatsApp and you can use your whatsapp betting ID and communicate easily and quickly. The support team makes sure that every user can control his/her account without any delays and without breaks in betting.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('support_btn_text', 'Reach Out Support Team Today') !!}</a>
        </div>
    </div>
</section>

{{-- CRICKET BETTING WITH LORDS EXCHANGE ID --}}
<section class="section" id="cricket-betting" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('cricket_title', 'Cricket Betting with <span class="text-gold">Lords Exchange ID</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('cricket_subtitle', 'With your lords exchange ID, you can access some of the biggest cricket tournaments and betting markets') !!}</p>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(300px,1fr));">
            {{-- T-20 World Cup --}}
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/T-20 World Cup.png') }}" alt="T-20 World Cup" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_1_title', 'T-20 World Cup') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_1_text', 'This is one of the most popular cricket tournaments worldwide. You are able to bet on the match winners, the best batsmen, the number of runs, and even on a ball by ball result with instant updates.') !!}</p>
                </div>
            </a>
            {{-- The Hundred --}}
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/the hundred.png') }}" alt="The Hundred" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_2_title', 'The Hundred') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_2_text', 'It is a quick and thrilling game with 100 balls in a format that provides special betting. You can gamble on the performance of the team, player statistics and match outcomes.') !!}</p>
                </div>
            </a>
            {{-- CPL --}}
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/cpl.png') }}" alt="CPL" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_3_title', 'CPL (Caribbean Premier League)') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_3_text', 'CPL is known to have energetic matches, and it offers several betting options to its users such as live markets and session betting.') !!}</p>
                </div>
            </a>
        </div>
        <p class="text-center" style="color:#b0b0c8;margin-top:24px;font-size:15px;">{!! $page->section('cricket_footer', 'Such tournaments ensure that the platform is active and provide the user with ongoing opportunities to bet and remain active.') !!}</p>
        <div class="text-center" style="margin-top:20px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('cricket_btn_text', 'Get Your Instant Betting ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- IS LORDS EXCHANGE SAFE --}}
<section class="section" id="safety">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('safety_title', 'Is Lords Exchange ID <span class="text-gold">Safe to Use</span>?') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('safety_text_1', 'Yes, it is usually safe to use a lords exchange ID provided that you observe the right guidelines. The site has secured systems to manage user information and transactions. This is to safeguard your personal information and make sure that your finances are not wasted.') !!}</p>
            <p>{!! $page->section('safety_text_2', 'One should always be responsible in the use of the platform and follow the correct process for deposits and withdrawals. When used correctly, it can become a good alternative to people seeking a safe betting ID India experience.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('safety_btn_text', 'Start Betting with Lords Exchange ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- PAYMENT OPTIONS --}}
<section class="section" id="payments" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('payments_title', 'Payment Options Available in <span class="text-gold">Lords Exchange ID</span>') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('payments_text_1', 'The platform supports multiple payment options to make transactions easy for users. You can deposit funds using bank transfer, UPI, and other common digital methods.') !!}</p>
            <p>{!! $page->section('payments_text_2', 'Withdrawals are also done quickly and users are able to receive their winnings without delays. It would be easy to manage your money the moment your account is active and the whole procedure would be comfortable and hassle-free.') !!}</p>
        </div>
    </div>
</section>

{{-- CUSTOMER CARE --}}
<section class="section" id="customer-care">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('care_title', 'Lords Exchange <span class="text-gold">Customer Care Number</span> India') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('care_text_1', 'For any assistance, the lords exchange customer care number india helps users connect with the support team instantly within just a few minutes. The support number is useful in solving issues related to the account, registration, login, payments, or netting queries.') !!}</p>
            <p>{!! $page->section('care_text_2', 'Users can also rely on the lords exchange support number for quick responses and guidance. This is to make sure that any issues are managed effectively and users are not interrupted in using the platform.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('care_btn_text', 'Contact Support Team Now') !!}</a>
        </div>
    </div>
</section>

{{-- CTA / CONCLUSION --}}
<section class="section" id="cta" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('cta_title', 'Start Easily with Lords Exchange – Get Your <span class="text-gold">Instant Cricket ID</span>') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;text-align:center;">
            <p>{!! $page->section('cta_text', 'In conclusion, lords exchange provides a simple and effective way to start online cricket betting. With quick registration, easy access, and multiple betting options, it offers a smooth experience for users. Whether you are new or experienced, getting started with an instant cricket ID and using a reliable betting ID india can help you enjoy betting in a more convenient way.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('cta_btn_text', 'Get Instant Cricket ID Now') !!}</a>
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
                <button class="faq-question">{!! $page->section('faq_1_q', 'How to complete Lord exchange sign up?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_1_a', 'You can complete lord exchange sign up by connecting through WhatsApp, sharing your details, and getting your ID quickly.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_2_q', 'How to Solve Lords Exchange Login Issues?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_2_a', 'If you face any problems with lords exchange login, the support team is available to help 24/7. They assist with account access, password recovery, and other login-related queries to ensure a smooth betting experience.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_3_q', 'Is the Lords exchange support number 24 hours available?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_3_a', 'Yes, the Lords exchange support number 24 hours is available to assist users whenever needed.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_4_q', 'What is a Lords exchange ID?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_4_a', 'A lords exchange ID is your login credential that allows you to access the platform and start betting.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_5_q', 'What is Lordsexch?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_5_a', 'Lordsexch is another name used for the same platform, commonly used by users.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_6_q', 'How to contact Lords Exchange?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_6_a', 'You can contact support using the lords exchange support number india or through WhatsApp for quick help.') !!}</p></div>
            </div>
        </div>
    </div>
</section>

@endsection
