@extends('layouts.app')

@section('meta_title', $meta_title ?? 'Lords Exchange ID. Get Your Lords Exchange ID Instantly in India. Radhey Book')
@section('meta_description', $meta_description ?? 'Get your Lords Exchange ID instantly via WhatsApp from Radhey Book. Lords exchange betting ID, cricket ID with instant activation, fast withdrawals and 24/7 support in India.')
@section('meta_keywords', $meta_keywords ?? 'lords exchange ID, lords exchange betting ID, lords exchange ID india, lords exchange betting ID number, lords exchange betting ID india, lords exchange betting ID login, lords exchange ID provider, lords exchange cricket id')

@section('content')

@php
    $waLink = 'https://wa.me/' . ($siteSettings['whatsapp_number'] ?? '919876543210') . '?text=Hi%20I%20want%20a%20Lords%20Exchange%20ID';
@endphp

{{-- HERO SECTION --}}
<section class="hero-section" id="hero" style="background: url('{{ asset('images/lord-banner.png') }}') center/cover no-repeat;">
    <div class="hero-overlay" style="background: rgba(0,0,0,0.55);"></div>
    <div class="hero-content container">
        <div class="hero-badge">
            <span class="badge-pulse"></span>
            {!! $page->section('hero_badge', 'Trusted Lords Exchange ID Provider') !!}
        </div>
        <h1 class="hero-title">{!! $page->section('hero_title', 'Get Your <span class="text-gold">Lords Exchange ID</span> Instantly on WhatsApp with Radhey Book') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'Radhey Book is the fastest and most trusted lords exchange ID provider in India. Get your Lords Exchange ID within minutes on WhatsApp with instant activation, best odds and 24/7 support. Start betting today.') !!}</p>
        <div class="hero-cta">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">
                {!! $page->section('hero_btn_text', 'Get Your Lords Exchange ID Now') !!}
            </a>
        </div>
    </div>
</section>

{{-- INTRO --}}
<section class="section" id="intro">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('intro_title', '<span class="text-gold">Lords Exchange ID</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('intro_subtitle', 'Get Your Lords Exchange ID Today and Access India\'s Most Popular Betting Exchange') !!}</p>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('intro_text_1', 'If you are looking for a trusted way to get your Lords Exchange ID then Radhey Book is the right place for you. Lords Exchange is one of the most popular and reliable betting exchange platforms in India and thousands of users depend on it for cricket betting, live sports and casino games. With your Lords Exchange ID you get access to the best odds in the market, real time betting on live matches and a smooth user experience that makes online betting enjoyable and simple.') !!}</p>
                    <p>{!! $page->section('intro_text_2', 'As a trusted lords exchange ID provider, Radhey Book has made the registration process completely hassle free. You do not need to fill forms or download apps. Simply contact us on WhatsApp, share your basic details, make your first deposit and your Lords Exchange ID India account is activated within minutes. Whether you want a lords exchange cricket ID for IPL and World Cup or access to casino and live betting markets, everything is available through one single account.') !!}</p>
                </div>
            </div>
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/lords exchange.png') }}" alt="Lords Exchange ID" style="width:100%;border-radius:16px;">
            </div>
        </div>
    </div>
</section>

{{-- WHAT IS --}}
<section class="section section-alt" id="what-is">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('what_is_title', 'What is a <span class="text-gold">Lords Exchange ID</span>?') !!}</h2>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/cricket.png') }}" alt="Lords Exchange Betting" style="width:100%;border-radius:16px;">
            </div>
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('what_is_text_1', 'A Lords Exchange ID is your personal login account that gives you access to the Lords Exchange betting platform. With this ID you can log in, deposit funds, place bets on cricket and other sports, play casino games, track your winnings and withdraw money safely. Every user needs a unique ID to access the platform and start placing bets on live matches and events.') !!}</p>
                    <p>{!! $page->section('what_is_text_2', 'Your lords exchange betting ID works across all betting options available on the platform. You can use it for cricket betting on IPL, T20 World Cup and international matches. You can use the same Lords Exchange betting ID login for live casino games and exchange betting where you bet against other users for better odds. The Lords Exchange betting ID India credentials you receive from Radhey Book give you complete access to everything the platform offers and many users also rely on it as their instant cricket ID for year round cricket betting.') !!}</p>
                </div>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('what_is_btn_text', 'Get Your Lords Exchange ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- WHY RADHEY BOOK --}}
<section class="section" id="why-provider">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('provider_title', 'Why Radhey Book is the Best <span class="text-gold">Lords Exchange ID Provider</span>?') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div>
                <h3>{!! $page->section('provider_1_title', 'Instant Activation') !!}</h3>
                <p>{!! $page->section('provider_1_text', 'Your Lords Exchange ID is activated within 2 to 5 minutes after payment. No waiting so you can start betting on the very next match.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3>{!! $page->section('provider_2_title', 'Verified and Secure') !!}</h3>
                <p>{!! $page->section('provider_2_text', 'Every Lords Exchange betting ID we provide is fully verified with secure encryption to protect your personal and financial data.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
                <h3>{!! $page->section('provider_3_title', 'Best Market Odds') !!}</h3>
                <p>{!! $page->section('provider_3_text', 'Lords Exchange consistently offers the best odds in the market. As a trusted lords exchange ID provider we ensure you always get maximum value on every bet.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div>
                <h3>{!! $page->section('provider_4_title', 'WhatsApp Registration') !!}</h3>
                <p>{!! $page->section('provider_4_text', 'Get your Lords Exchange ID entirely through WhatsApp. No forms and no downloads needed. Just send a message and our team handles everything.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
                <h3>{!! $page->section('provider_5_title', 'Fastest Withdrawals') !!}</h3>
                <p>{!! $page->section('provider_5_text', 'Lords Exchange is known for the fastest withdrawals. Get your winnings within minutes directly to your bank account via UPI, Paytm or bank transfer.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div>
                <h3>{!! $page->section('provider_6_title', '24/7 Support') !!}</h3>
                <p>{!! $page->section('provider_6_text', 'Our team is available round the clock via WhatsApp and phone to help you with your lords exchange betting ID account anytime you need.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- HOW TO GET --}}
<section class="section" id="how-to-get" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('how_title', 'How to Get Your <span class="text-gold">Lords Exchange ID</span> on WhatsApp?') !!}</h2>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(250px,1fr));">
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">1</span></div>
                <h3>{!! $page->section('how_step_1_title', 'Click on WhatsApp') !!}</h3>
                <p>{!! $page->section('how_step_1_text', 'Click the WhatsApp button on this page to connect directly with our team for your Lords Exchange ID.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">2</span></div>
                <h3>{!! $page->section('how_step_2_title', 'Send Your Request') !!}</h3>
                <p>{!! $page->section('how_step_2_text', 'Send a message saying Hi I want a Lords Exchange ID and our team will respond within seconds with clear instructions.') !!}</p>
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
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('how_btn_text', 'Get Your Lords Exchange ID on WhatsApp Now') !!}</a>
        </div>
    </div>
</section>

{{-- WHAT YOU CAN DO --}}
<section class="section" id="types">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('types_title', 'What You Can Do with Your <span class="text-gold">Lords Exchange ID</span>') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;margin-bottom:30px;">
            <p>{!! $page->section('types_text', 'Your Lords Exchange ID is not just for one type of betting. It gives you access to a complete range of betting options all from a single account. Whether you want to bet on live cricket, play casino games or trade bets on the exchange for better odds, your lords exchange betting ID covers everything. This is what makes Lords Exchange one of the most versatile platforms available and why Radhey Book is the preferred lords exchange ID provider for users across India.') !!}</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M8 12l3 3 5-5"/></svg></div>
                <h3>{!! $page->section('type_1_title', 'Lords Exchange Cricket ID') !!}</h3>
                <p>{!! $page->section('type_1_text', 'Use your lords exchange cricket ID to bet on IPL, T20 World Cup, ODI series, Big Bash, The Hundred and every cricket match with live odds and session betting.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M12 8v8"/><path d="M8 12h8"/></svg></div>
                <h3>{!! $page->section('type_2_title', 'Casino and Live Games') !!}</h3>
                <p>{!! $page->section('type_2_text', 'Play Teen Patti, Roulette, Blackjack, Baccarat, Andar Bahar and hundreds of slot games with real live dealers using the same Lords Exchange ID.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
                <h3>{!! $page->section('type_3_title', 'Exchange Betting') !!}</h3>
                <p>{!! $page->section('type_3_text', 'Access the Lords Exchange betting exchange where you bet against other users for better odds and more flexibility in your betting strategy.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- TOURNAMENTS --}}
<section class="section" id="tournaments" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('tournament_title', 'Bet on Major Tournaments with Your <span class="text-gold">Lords Exchange Cricket ID</span>') !!}</h2>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(300px,1fr));">
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/T-20 World Cup.png') }}" alt="T20 World Cup" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_1_title', 'T20 World Cup') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_1_text', 'The biggest T20 tournament in the world. Use your lords exchange cricket ID to bet on match winners, top batsmen and live ball by ball markets with the best odds.') !!}</p>
                </div>
            </a>
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/the hundred.png') }}" alt="The Hundred" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_2_title', 'The Hundred and Big Bash') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_2_text', 'Fast paced cricket formats with unique betting markets. Bet on team performance, player stats and match outcomes with your Lords Exchange betting ID India.') !!}</p>
                </div>
            </a>
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/cpl.png') }}" alt="CPL" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_3_title', 'IPL and CPL') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_3_text', 'The two biggest T20 leagues in cricket. Your instant cricket ID gives you full access to every match with live markets and session bets throughout the season.') !!}</p>
                </div>
            </a>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('tournament_btn_text', 'Get Your Lords Exchange Cricket ID Now') !!}</a>
        </div>
    </div>
</section>

{{-- SUPPORT --}}
<section class="section" id="support">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('support_title', '<span class="text-gold">Lords Exchange ID</span> WhatsApp and Phone Support') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('support_text', 'As a trusted lords exchange ID provider, Radhey Book offers dedicated WhatsApp and phone support for all users. Whether you need help getting your Lords Exchange ID India set up, have questions about your Lords Exchange betting ID login, or want to know about specific betting markets, our team provides fast and accurate answers every single time. We understand that during live matches every minute counts which is why our support is instant and reliable throughout the year.') !!}</p>
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
            <h2 class="section-title">{!! $page->section('payments_title', 'Secure <span class="text-gold">Payment Methods</span> for Your Lords Exchange ID') !!}</h2>
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
            <h2 class="section-title">{!! $page->section('security_title', 'Is Your <span class="text-gold">Lords Exchange ID</span> Safe?') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('security_text', 'Absolutely. Every Lords Exchange betting ID we issue is backed by advanced SSL encryption ensuring your personal and financial data are fully protected. Your whatsapp betting ID registration is handled through encrypted channels so your information stays completely private. Always use your Lords Exchange betting ID login through our official WhatsApp number and verified channels. As a responsible lords exchange ID provider, we ensure maximum security for every user across India.') !!}</p>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="section" id="cta" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('cta_title', 'Ready to Get Your <span class="text-gold">Lords Exchange ID</span> Today?') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;text-align:center;">
            <p>{!! $page->section('cta_text', 'Join thousands of satisfied users who trust Radhey Book as their preferred lords exchange ID provider. Whether you want a lords exchange cricket ID for IPL and World Cup, access to casino games, or exchange betting with the best odds, your Lords Exchange ID gives you full access to everything. Get your Lords Exchange betting ID India today with instant activation, zero fees and 24/7 WhatsApp support. One message is all it takes to start your betting ID India journey.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('cta_btn_text', 'Get Your Lords Exchange ID on WhatsApp Now') !!}</a>
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
                <button class="faq-question">{!! $page->section('faq_1_q', 'What is a Lords Exchange ID?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_1_a', 'A Lords Exchange ID is your personal account for accessing the Lords Exchange betting platform. It lets you log in, manage funds, place bets and withdraw winnings securely.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_2_q', 'How can I get a Lords Exchange ID on WhatsApp?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_2_a', 'Click the WhatsApp button on this page, send your request, share your details, make your deposit and your Lords Exchange ID is activated within minutes.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_3_q', 'How do I access Lords Exchange betting ID login?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_3_a', 'After receiving your Lords Exchange betting ID login credentials on WhatsApp, visit the platform, enter your username and password and start betting immediately.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_4_q', 'Is Lords Exchange ID India safe to use?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_4_a', 'Yes, your Lords Exchange ID India from Radhey Book is completely safe. We use SSL encryption and secure payment gateways to protect your data and funds.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_5_q', 'Can I use Lords Exchange cricket ID for IPL?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_5_a', 'Yes, your lords exchange cricket ID gives you full access to all IPL matches with the best odds, live betting and session markets throughout the season.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_6_q', 'Who is the best Lords Exchange ID provider?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_6_a', 'Radhey Book is the most trusted lords exchange ID provider with 7+ years experience, instant activation, fastest withdrawals and 24/7 WhatsApp support for all users.') !!}</p></div>
            </div>
        </div>
    </div>
</section>

@endsection
