@extends('layouts.app')

@section('meta_title', $meta_title ?? 'Reddy Anna Book ID – Get Instant Online Cricket ID in India | Radhey Book')
@section('meta_description', $meta_description ?? 'Get your Reddy Anna Book ID instantly from Radhey Book. Instant Cricket ID, WhatsApp Betting ID, live betting, real-time updates & 24/7 support.')
@section('meta_keywords', $meta_keywords ?? 'reddy anna book, reddy anna book ID, reddy anna cricket ID, instant cricket ID, whatsapp betting ID, reddy anna demo ID, reddy anna login, radhey book')

@section('content')

{{-- HERO SECTION --}}
<section class="hero-section" id="hero" style="background: url('{{ asset('images/Artboard 3 reddy anna website banner.png') }}') center/cover no-repeat;">
    <div class="hero-overlay" style="background: rgba(0,0,0,0.55);"></div>
    <div class="hero-content container">
        <div class="hero-badge">
            <span class="badge-pulse"></span>
            {!! $page->section('hero_badge', 'Trusted Cricket Betting Platform') !!}
        </div>
        <h1 class="hero-title">{!! $page->section('hero_title', 'Reddy Anna Book ID – Get Instant <span class="text-gold">Online Cricket ID</span> in India') !!}</h1>
        @if($page->section('hero_subtitle'))
        <p class="hero-subtitle">{!! $page->section('hero_subtitle') !!}</p>
        @endif
        <div class="hero-cta">
            <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.5.5 0 00.61.609l4.458-1.495A11.952 11.952 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.319 0-4.476-.682-6.297-1.848l-.44-.292-3.065 1.027 1.027-3.065-.292-.44A9.965 9.965 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                {!! $page->section('hero_btn_text', 'Get Your Instant Betting ID Today') !!}
            </a>
        </div>
    </div>
</section>

{{-- INTRO BLOCK --}}
<section class="section" id="intro">
    <div class="container">
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('intro_text_1', 'Reddy Anna Book is one of the highly trusted online cricket betting platforms that has gained popularity among the Indian audience who want fast, smooth, and easy betting experience. It offers a wide variety of games to bet on with competitive odds, and quick payouts, making it a preferred choice of many bettors. With easy access, simple navigation, and 24/7 customer support, users can enjoy live betting, real-time updates, and competitive odds without any complications.') !!}</p>
                    <p>{!! $page->section('intro_text_2', 'With Radhey Book, getting your Reddy Anna Book ID becomes more stable and fast. The platform provides fully secure and verified Betting IDs that offers quick registration and 24/7 customer support to guide you at every step. Whether you are looking for an Instant Cricket ID or a WhatsApp Betting ID, Radhey Book ensures a hassle-free experience, so you can start betting instantly.') !!}</p>
                </div>
            </div>
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/Reddy Anna-1.png') }}" alt="Reddy Anna Book" style="width:100%;border-radius:16px;">
            </div>
        </div>
    </div>
</section>

{{-- WHAT IS REDDY ANNA BOOK --}}
<section class="section section-alt" id="what-is-reddy-anna">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('what_is_title', 'What is a <span class="text-gold">Reddy Anna Book</span>?') !!}</h2>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/Reddy Anna-2.png') }}" alt="Reddy Anna Book" style="width:100%;border-radius:16px;">
            </div>
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('what_is_text_1', 'The Reddy Anna Book is the most popular and trusted online betting platform in India that provides users with access to cricket betting IDs and various other betting markets. It works as the one platform for users who want to enjoy online betting in a convenient and effective way, hassle-free.') !!}</p>
                    <p>{!! $page->section('what_is_text_2', 'With Radhey Book we make the Reddy Anna Book betting experience more user-friendly and trustworthy. Users can place bets on live matches along with the pre-match events. This allows you to have full access and authority to bet anytime, anywhere.') !!}</p>
                    <p>{!! $page->section('what_is_text_3', 'One of the biggest advantages of the Reddy Anna Exchange is its easy set up. Unlike other betting platforms in the market, you don\'t need to go through the long complicated verification steps. It is easy to get your Instant Cricket ID and start betting within just a few minutes.') !!}</p>
                    <p>{!! $page->section('what_is_text_4', 'The platform also provides a wide range of games to bet on like cricket, casino, tennis, football, hockey and more. With betting features like match winner, player performance, total runs, and live betting. Whether you are a beginner or an experienced user, the Reddy Anna Book gives you everything in one place with simple navigation and smooth performance.') !!}</p>
                </div>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('what_is_btn_text', 'Get your Instant Betting ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- BENEFITS OF BETTING WITH REDDY ANNA BOOK --}}
<section class="section" id="benefits">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('benefits_title', 'Benefits of Betting with <span class="text-gold">Reddy Anna Book</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('benefits_subtitle', 'Here are the main benefits of using Reddy Anna Book through Radhey Book') !!}</p>
        </div>
        @php $waLink = 'https://linktr.ee/radheybook'; @endphp
        <div class="features-grid">
            {{-- Benefit 1: Lightning bolt --}}
            <a href="{{ $waLink }}" target="_blank" rel="noopener" class="feature-card" style="text-decoration:none;color:inherit;display:block;">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                </div>
                <h3>{!! $page->section('benefit_1_title', 'Quick ID Activation') !!}</h3>
                <p>{!! $page->section('benefit_1_text', 'Get your Instant Cricket ID within minutes using WhatsApp without long waiting time.') !!}</p>
            </a>
            {{-- Benefit 2: Smiley --}}
            <a href="{{ $waLink }}" target="_blank" rel="noopener" class="feature-card" style="text-decoration:none;color:inherit;display:block;">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>
                </div>
                <h3>{!! $page->section('benefit_2_title', 'Simple and Easy Platform') !!}</h3>
                <p>{!! $page->section('benefit_2_text', 'The interface is clean and easy to understand, perfect for beginners.') !!}</p>
            </a>
            {{-- Benefit 3: Shield --}}
            <a href="{{ $waLink }}" target="_blank" rel="noopener" class="feature-card" style="text-decoration:none;color:inherit;display:block;">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3>{!! $page->section('benefit_3_title', 'Secure Transactions') !!}</h3>
                <p>{!! $page->section('benefit_3_text', 'Every deposit and withdrawal is processed in a secure manner providing you with a reliable experience.') !!}</p>
            </a>
            {{-- Benefit 4: Clock --}}
            <a href="{{ $waLink }}" target="_blank" rel="noopener" class="feature-card" style="text-decoration:none;color:inherit;display:block;">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <h3>{!! $page->section('benefit_4_title', '24/7 Access') !!}</h3>
                <p>{!! $page->section('benefit_4_text', 'You can log in anytime and place bets whenever matches are available.') !!}</p>
            </a>
            {{-- Benefit 5: Monitor --}}
            <a href="{{ $waLink }}" target="_blank" rel="noopener" class="feature-card" style="text-decoration:none;color:inherit;display:block;">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                </div>
                <h3>{!! $page->section('benefit_5_title', 'Live Betting with Real-Time Odds') !!}</h3>
                <p>{!! $page->section('benefit_5_text', 'Enjoy live betting with updated odds and match tracking features.') !!}</p>
            </a>
            {{-- Benefit 6: Chart --}}
            <a href="{{ $waLink }}" target="_blank" rel="noopener" class="feature-card" style="text-decoration:none;color:inherit;display:block;">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
                </div>
                <h3>{!! $page->section('benefit_6_title', 'Multiple Betting Markets') !!}</h3>
                <p>{!! $page->section('benefit_6_text', 'Bet on match winners, player stats, total runs, and more.') !!}</p>
            </a>
            {{-- Benefit 7: Dollar --}}
            <a href="{{ $waLink }}" target="_blank" rel="noopener" class="feature-card" style="text-decoration:none;color:inherit;display:block;">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                </div>
                <h3>{!! $page->section('benefit_7_title', 'Fast Withdrawals') !!}</h3>
                <p>{!! $page->section('benefit_7_text', 'Withdraw your winnings with ease in order to avoid unnecessary delays.') !!}</p>
            </a>
            {{-- Benefit 8: Chat bubble (WhatsApp) --}}
            <a href="{{ $waLink }}" target="_blank" rel="noopener" class="feature-card" style="text-decoration:none;color:inherit;display:block;">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="currentColor" stroke="none"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" style="fill:#d4af37"/></svg>
                </div>
                <h3>{!! $page->section('benefit_8_title', 'WhatsApp-Based Support') !!}</h3>
                <p>{!! $page->section('benefit_8_text', 'Get help quickly via the Reddy Anna Book WhatsApp Number whenever needed.') !!}</p>
            </a>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('benefits_btn_text', 'Get Your Trusted Online Cricket Betting ID') !!}</a>
        </div>
    </div>
</section>

{{-- WHY CHOOSE REDDY ANNA BOOK CRICKET ID --}}
<section class="section section-alt" id="why-choose">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('why_title', 'Why Choose <span class="text-gold">Reddy Anna Book</span> Cricket ID?') !!}</h2>
            <p class="section-subtitle">{!! $page->section('why_subtitle', 'Here\'s why many users prefer the Reddy Anna Book ID on Radhey Book') !!}</p>
        </div>
        <div class="features-grid">
            <a href="{{ $waLink }}" target="_blank" rel="noopener" class="feature-card" style="text-decoration:none;color:inherit;display:block;">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
                <h3>{!! $page->section('why_1_title', 'Instant WhatsApp Process') !!}</h3>
                <p>{!! $page->section('why_1_text', 'You can easily get your Online Betting ID without filling long forms.') !!}</p>
            </a>
            <a href="{{ $waLink }}" target="_blank" rel="noopener" class="feature-card" style="text-decoration:none;color:inherit;display:block;">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div>
                <h3>{!! $page->section('why_2_title', 'Trusted by Indian Users') !!}</h3>
                <p>{!! $page->section('why_2_text', 'A large number of users trust this platform to deliver an uninterrupted and easy betting experience.') !!}</p>
            </a>
            <a href="{{ $waLink }}" target="_blank" rel="noopener" class="feature-card" style="text-decoration:none;color:inherit;display:block;">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
                <h3>{!! $page->section('why_3_title', 'Quick Deposits and Withdrawals') !!}</h3>
                <p>{!! $page->section('why_3_text', 'Transactions are processed quickly, saving your time.') !!}</p>
            </a>
            <a href="{{ $waLink }}" target="_blank" rel="noopener" class="feature-card" style="text-decoration:none;color:inherit;display:block;">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg></div>
                <h3>{!! $page->section('why_4_title', 'Wide Sports Coverage') !!}</h3>
                <p>{!! $page->section('why_4_text', 'Users can bet on other sports betting platforms apart from cricket.') !!}</p>
            </a>
            <a href="{{ $waLink }}" target="_blank" rel="noopener" class="feature-card" style="text-decoration:none;color:inherit;display:block;">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg></div>
                <h3>{!! $page->section('why_5_title', 'Beginner Friendly') !!}</h3>
                <p>{!! $page->section('why_5_text', 'The platform is easy to understand and use even to new users.') !!}</p>
            </a>
            <a href="{{ $waLink }}" target="_blank" rel="noopener" class="feature-card" style="text-decoration:none;color:inherit;display:block;">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg></div>
                <h3>{!! $page->section('why_6_title', 'Real-Time Updates') !!}</h3>
                <p>{!! $page->section('why_6_text', 'Live betting and match updates can assist you in decision-making.') !!}</p>
            </a>
            <a href="{{ $waLink }}" target="_blank" rel="noopener" class="feature-card" style="text-decoration:none;color:inherit;display:block;">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M4 12h16M4 6h16M4 18h16"/></svg></div>
                <h3>{!! $page->section('why_7_title', 'No Complicated Steps') !!}</h3>
                <p>{!! $page->section('why_7_text', 'The process is simple and designed for quick access.') !!}</p>
            </a>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('why_btn_text', 'WhatsApp Now and Get ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- HOW TO GET YOUR REDDY ANNA DEMO ID - STEP BY STEP --}}
<section class="section" id="how-to-get">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('how_title', 'How to Get Your <span class="text-gold">Reddy Anna Demo ID</span>? Step-by-Step Guide') !!}</h2>
            <p class="section-subtitle">{!! $page->section('how_subtitle', 'Follow these simple steps to get your Reddy Anna Book ID') !!}</p>
        </div>
        <div style="max-width:800px;margin:0 auto;display:flex;flex-direction:column;gap:20px;">
            {{-- Step 1 --}}
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:12px;padding:24px 28px;display:flex;gap:20px;align-items:flex-start;">
                <div style="display:flex;gap:20px;align-items:flex-start;">
                    <div style="min-width:48px;height:48px;background:linear-gradient(135deg,#d4af37,#f5d060);border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:20px;color:#1a1a2e;">1</div>
                    <div>
                        <h3 style="color:#d4af37;font-size:18px;margin-bottom:8px;">{!! $page->section('how_step_1_title', 'Click WhatsApp Message') !!}</h3>
                        <p style="color:#b0b0c8;line-height:1.7;">{!! $page->section('how_step_1_text', 'To begin with, click on the WhatsApp link on Radhey Book. This will connect you directly with the support team.') !!}</p>
                    </div>
                </div>
            </a>
            {{-- Step 2 --}}
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:12px;padding:24px 28px;display:flex;gap:20px;align-items:flex-start;">
                <div style="display:flex;gap:20px;align-items:flex-start;">
                    <div style="min-width:48px;height:48px;background:linear-gradient(135deg,#d4af37,#f5d060);border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:20px;color:#1a1a2e;">2</div>
                    <div>
                        <h3 style="color:#d4af37;font-size:18px;margin-bottom:8px;">{!! $page->section('how_step_2_title', 'Send Message "Hi I want a Reddy Anna Book ID"') !!}</h3>
                        <p style="color:#b0b0c8;line-height:1.7;">{!! $page->section('how_step_2_text', 'Send a simple message to ensure that the team understands your request and responds quickly.') !!}</p>
                    </div>
                </div>
            </a>
            {{-- Step 3 --}}
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:12px;padding:24px 28px;display:flex;gap:20px;align-items:flex-start;">
                <div style="display:flex;gap:20px;align-items:flex-start;">
                    <div style="min-width:48px;height:48px;background:linear-gradient(135deg,#d4af37,#f5d060);border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:20px;color:#1a1a2e;">3</div>
                    <div>
                        <h3 style="color:#d4af37;font-size:18px;margin-bottom:8px;">{!! $page->section('how_step_3_title', 'Give Your Details & Make First Deposit') !!}</h3>
                        <p style="color:#b0b0c8;line-height:1.7;">{!! $page->section('how_step_3_text', 'Enter your basic information and make your initial deposit to start your account.') !!}</p>
                    </div>
                </div>
            </a>
            {{-- Step 4 --}}
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:12px;padding:24px 28px;display:flex;gap:20px;align-items:flex-start;">
                <div style="display:flex;gap:20px;align-items:flex-start;">
                    <div style="min-width:48px;height:48px;background:linear-gradient(135deg,#d4af37,#f5d060);border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:20px;color:#1a1a2e;">4</div>
                    <div>
                        <h3 style="color:#d4af37;font-size:18px;margin-bottom:8px;">{!! $page->section('how_step_4_title', 'Get ID') !!}</h3>
                        <p style="color:#b0b0c8;line-height:1.7;">{!! $page->section('how_step_4_text', 'Within 2 to 5 minutes your ID and login credentials will be shared with you. You can start betting.') !!}</p>
                    </div>
                </div>
            </a>
            {{-- Step 5 --}}
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:12px;padding:24px 28px;display:flex;gap:20px;align-items:flex-start;">
                <div style="display:flex;gap:20px;align-items:flex-start;">
                    <div style="min-width:48px;height:48px;background:linear-gradient(135deg,#d4af37,#f5d060);border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:20px;color:#1a1a2e;">5</div>
                    <div>
                        <h3 style="color:#d4af37;font-size:18px;margin-bottom:8px;">{!! $page->section('how_step_5_title', 'Login and Start Betting') !!}</h3>
                        <p style="color:#b0b0c8;line-height:1.7;">{!! $page->section('how_step_5_text', 'Log into your betting account with your betting ID and start betting on live matches immediately.') !!}</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('how_btn_text', 'Get Your Demo ID & Start Betting') !!}</a>
        </div>
    </div>
</section>

{{-- CUSTOMER SUPPORT SECTION --}}
<section class="section section-alt" id="customer-support">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('support_title', 'Reddy Anna Book <span class="text-gold">Customer Support</span>') !!}</h2>
        </div>
        <div style="max-width:800px;margin:0 auto;background:linear-gradient(135deg,rgba(212,175,55,0.06),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.15);border-radius:16px;padding:40px;">
            <p style="color:#b0b0c8;line-height:1.8;font-size:16px;margin-bottom:16px;">{!! $page->section('support_text_1', 'On our Radhey Book, the platform Reddy Anna Book offers strong customer support available 24/7 to ensure users have a smooth experience. If you face any issues regarding your registration process, deposits, withdrawals, or the betting process. Always feel free to reach out to our Reddy Anna Book Customer Support team via WhatsApp.') !!}</p>
            <p style="color:#b0b0c8;line-height:1.8;font-size:16px;">{!! $page->section('support_text_2', 'The support team is highly active and responsive, and helps users solve their problems without any delay. Making it easier for the users to trust the platform and continue using their Online Betting ID.') !!}</p>
            <div class="text-center" style="margin-top:24px;">
                <a href="https://linktr.ee/radheybook" class="btn btn-gold" target="_blank" rel="noopener">{!! $page->section('support_btn_text', 'Get Instant 24/7 Customer Support Today') !!}</a>
            </div>
        </div>
    </div>
</section>

{{-- CRICKET BETTING WITH YOUR REDDY ANNA BOOK ID --}}
<section class="section" id="cricket-betting">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('cricket_title', 'Cricket Betting with Your <span class="text-gold">Reddy Anna Book ID</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('cricket_subtitle', 'With your Reddy Anna Book ID, you can easily get access to the top cricket tournaments and exciting betting markets.') !!}</p>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(300px,1fr));">
            {{-- T-20 World Cup --}}
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/T-20 World Cup.png') }}" alt="T-20 World Cup" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_1_title', 'T-20 World Cup') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_1_text', 'With your Reddy Anna Book ID, you can access T-20 World Cup betting matches which is one of the biggest cricket events globally. Users can bet on matches, top batsmen, number of wickets, highest run scorers, and much more with updated odds in real-time.') !!}</p>
                </div>
            </a>
            {{-- The Hundred --}}
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/the hundred.png') }}" alt="The Hundred" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_2_title', 'The Hundred') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_2_text', 'The Hundred is one of the fastest and most exciting cricket tournaments. Users can bet with their Instant Cricket ID on team performance, match outcomes, and player stats.') !!}</p>
                </div>
            </a>
            {{-- CPL --}}
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/cpl.png') }}" alt="CPL" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_3_title', 'CPL (Caribbean Premier League)') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_3_text', 'Using your WhatsApp Betting ID, you can access CPL betting markets. This is a tournament with international players and it provides several betting services such as match results and live betting.') !!}</p>
                </div>
            </a>
        </div>
        <p class="text-center" style="color:#b0b0c8;margin-top:24px;font-size:15px;">{!! $page->section('cricket_footer', 'These tournaments provide great opportunities for users to enjoy betting and make the most of their Betting ID in India experience.') !!}</p>
        <div class="text-center" style="margin-top:20px;">
            <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('cricket_btn_text', 'Get Your Instant Reddy Anna Book ID Now') !!}</a>
        </div>
    </div>
</section>

{{-- FINAL CTA SECTION --}}
<section class="section" id="cta">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('cta_title', 'Start Your Cricket Betting Journey with <span class="text-gold">Reddy Anna Book ID</span>') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;text-align:center;">
            <p>{!! $page->section('cta_text_1', 'One of the simplest and quickest methods of beginning to bet online cricket in India is by getting your Reddy Anna Book ID through Radhey Book. It is one of the most secure, smooth, and user-friendly experiences for all types of users.') !!}</p>
            <p>{!! $page->section('cta_text_2', 'With quick WhatsApp access, simple steps, and reliable support, users can start betting without any confusion. Whether you are interested in major tournaments or live betting, the Reddy Anna Book gives you complete access to exciting markets.') !!}</p>
            <p>{!! $page->section('cta_text_3', 'If you are looking for a trusted Betting ID platform with fast setup and easy use, then getting your WhatsApp Betting ID through Radhey Book is a smart choice.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.5.5 0 00.61.609l4.458-1.495A11.952 11.952 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.319 0-4.476-.682-6.297-1.848l-.44-.292-3.065 1.027 1.027-3.065-.292-.44A9.965 9.965 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                {!! $page->section('cta_btn_text', 'Get Your Cricket ID Now on WhatsApp') !!}
            </a>
        </div>
    </div>
</section>

{{-- FAQ SECTION --}}
<section class="section section-alt" id="faq">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('faq_title', 'Frequently Asked <span class="text-gold">Questions</span>') !!}</h2>
        </div>
        <div class="faq-list" style="max-width:800px;margin:0 auto;">
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_1_q', 'How can I connect with the Reddy Anna Book Support?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer">
                    <p>{!! $page->section('faq_1_a', 'Users can connect with the Reddy Anna Book Support via the Reddy Anna Book Contact Number shared through the official WhatsApp Support on Radhey Book.') !!}</p>
                    <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-sm" target="_blank" rel="noopener" style="margin-top:10px;">Get Customer Support Instantly</a>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_2_q', 'How can I join the Reddy Anna WhatsApp Group?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer">
                    <p>{!! $page->section('faq_2_a', 'To join the WhatsApp group you need to contact the support team via the Reddy Anna WhatsApp group number. They will guide you with the correct joining link.') !!}</p>
                    <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-sm" target="_blank" rel="noopener" style="margin-top:10px;">Join WhatsApp Group Now</a>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_3_q', 'How can I get the Reddy Anna Demo ID?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer">
                    <p>{!! $page->section('faq_3_a', 'Contact support on WhatsApp and request for a demo. Share basic details, and you will receive your Reddy Anna Demo ID quickly.') !!}</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_4_q', 'How can I contact Reddy Anna?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer">
                    <p>{!! $page->section('faq_4_a', 'You can Contact Reddy Anna through WhatsApp or via Reddy Anna Book Contact Number. Simply send a message and the support team will assist you.') !!}</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_5_q', 'Is Reddy Anna Book ID safe to use?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer">
                    <p>{!! $page->section('faq_5_a', 'Yes, the Reddy Anna Book ID is safe when accessed through trusted platforms like Radhey Book.') !!}</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_6_q', 'How quickly can I get my Reddy Anna Book ID?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer">
                    <p>{!! $page->section('faq_6_a', 'You can get your Instant Cricket ID within minutes after completing the steps through WhatsApp.') !!}</p>
                </div>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('faq_btn_text', 'Get Your Reddy Anna Book ID Today') !!}</a>
        </div>
    </div>
</section>

@endsection
