@extends('layouts.app')

@section('meta_title', $meta_title ?? 'WhatsApp Betting ID. Get Your WhatsApp Betting ID Instantly in India. Radhey Book')
@section('meta_description', $meta_description ?? 'Get your WhatsApp betting ID instantly from Radhey Book. Cricket betting, casino betting and live betting ID via WhatsApp. Instant activation and 24/7 support in India.')
@section('meta_keywords', $meta_keywords ?? 'whatsapp betting ID, whatsapp betting ID india, whatsapp betting ID india login, cricket betting whatsapp link, whatsapp cricket betting ID, whatsapp casino betting ID, whatsapp live betting ID, instant cricket ID, betting ID india')

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
            {!! $page->section('hero_badge', 'India\'s Fastest WhatsApp Betting ID Provider') !!}
        </div>
        <h1 class="hero-title">{!! $page->section('hero_title', 'Get Your <span class="text-gold">WhatsApp Betting ID</span> Instantly with Radhey Book') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'Radhey Book is the fastest way to get your WhatsApp betting ID in India. One message on WhatsApp and your betting account is activated within minutes. Cricket, casino, live betting and more. Start your winning journey today.') !!}</p>
        <div class="hero-cta">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">
                {!! $page->section('hero_btn_text', 'Get Your WhatsApp Betting ID Now') !!}
            </a>
        </div>
    </div>
</section>

{{-- INTRO --}}
<section class="section" id="intro">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('intro_title', '<span class="text-gold">WhatsApp Betting ID</span> in India') !!}</h2>
            <p class="section-subtitle">{!! $page->section('intro_subtitle', 'The Easiest Way to Get Your Betting ID. Just One Message on WhatsApp') !!}</p>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('intro_text_1', 'Getting a WhatsApp betting ID has become the most popular way for Indian users to start online betting. Instead of going through complicated registration forms and lengthy verification processes, you can simply send a message on WhatsApp and have your betting account ready within minutes. This is exactly why millions of users across India now prefer the WhatsApp method over any other registration process. It is fast, it is simple and it works perfectly every single time.') !!}</p>
                    <p>{!! $page->section('intro_text_2', 'Radhey Book is the most trusted provider of WhatsApp betting ID India accounts. We have been helping users get their betting IDs through WhatsApp for over 7 years and our process is designed to be as smooth as possible. Whether you want a whatsapp cricket betting ID for IPL and international matches, a whatsapp casino betting ID for live table games and slots, or a whatsapp live betting ID for real time in play betting, we have got everything covered with just one WhatsApp message.') !!}</p>
                </div>
            </div>
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/casino.png') }}" alt="WhatsApp Betting ID" style="width:100%;border-radius:16px;">
            </div>
        </div>
    </div>
</section>

{{-- WHAT IS WHATSAPP BETTING ID --}}
<section class="section section-alt" id="what-is">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('what_is_title', 'What is a <span class="text-gold">WhatsApp Betting ID</span>?') !!}</h2>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/cricket.png') }}" alt="WhatsApp Betting" style="width:100%;border-radius:16px;">
            </div>
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('what_is_text_1', 'A WhatsApp betting ID is a betting account that you create and manage entirely through WhatsApp. Instead of filling online forms or downloading apps, you simply message the provider on WhatsApp, share your basic details, make your first deposit and receive your login credentials on the same chat. It is the fastest and most convenient way to get started with online betting in India.') !!}</p>
                    <p>{!! $page->section('what_is_text_2', 'With your WhatsApp betting ID India from Radhey Book you can access all major betting platforms and markets. This includes cricket betting on IPL, T20 World Cup and all international matches along with casino games like Teen Patti, Roulette and Blackjack plus live sports betting with real time odds. Your WhatsApp betting ID India login credentials work across all these platforms so you only need one account to enjoy everything. The cricket betting whatsapp link on this page connects you directly to our team to get started.') !!}</p>
                </div>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('what_is_btn_text', 'Get Your WhatsApp Betting ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- TYPES OF WHATSAPP BETTING ID --}}
<section class="section" id="types">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('types_title', 'Types of <span class="text-gold">WhatsApp Betting ID</span> You Can Get') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M8 12l3 3 5-5"/></svg></div>
                <h3>{!! $page->section('type_1_title', 'WhatsApp Cricket Betting ID') !!}</h3>
                <p>{!! $page->section('type_1_text', 'Get your whatsapp cricket betting ID and bet on IPL, T20 World Cup, ODI series, Big Bash, The Hundred and every domestic and international cricket match with live odds and session betting.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M12 8v8"/><path d="M8 12h8"/></svg></div>
                <h3>{!! $page->section('type_2_title', 'WhatsApp Casino Betting ID') !!}</h3>
                <p>{!! $page->section('type_2_text', 'Get your whatsapp casino betting ID and play Teen Patti, Roulette, Blackjack, Baccarat, Andar Bahar, Dragon Tiger and hundreds of slot games with real live dealers.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3>{!! $page->section('type_3_title', 'WhatsApp Live Betting ID') !!}</h3>
                <p>{!! $page->section('type_3_text', 'Get your whatsapp live betting ID and place bets in real time while matches are happening. Live odds update every second giving you the most exciting betting experience possible.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- WHY WHATSAPP --}}
<section class="section" id="why-whatsapp" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('why_title', 'Why Get Your Betting ID Through <span class="text-gold">WhatsApp</span>?') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div>
                <h3>{!! $page->section('why_1_title', 'Ready in Minutes') !!}</h3>
                <p>{!! $page->section('why_1_text', 'Your WhatsApp betting ID is activated within 2 to 5 minutes. No waiting for email confirmations or manual approvals. You send a message and you get your ID.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3>{!! $page->section('why_2_title', 'No Forms or Downloads') !!}</h3>
                <p>{!! $page->section('why_2_text', 'You do not need to fill any registration forms or download any apps. Everything happens through a simple WhatsApp chat that you already use every day.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div>
                <h3>{!! $page->section('why_3_title', 'Direct Human Support') !!}</h3>
                <p>{!! $page->section('why_3_text', 'You chat with real people who guide you through every step. No bots and no automated responses. Just genuine help from our experienced team.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div>
                <h3>{!! $page->section('why_4_title', 'Secure and Private') !!}</h3>
                <p>{!! $page->section('why_4_text', 'WhatsApp chats are encrypted which means your personal details and payment information stay private and protected throughout the process.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
                <h3>{!! $page->section('why_5_title', 'Easy Deposits and Withdrawals') !!}</h3>
                <p>{!! $page->section('why_5_text', 'Deposit using UPI, Paytm, PhonePe or bank transfer. Withdraw your winnings within 5 minutes directly to your bank account.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div>
                <h3>{!! $page->section('why_6_title', 'Available 24/7') !!}</h3>
                <p>{!! $page->section('why_6_text', 'Our WhatsApp support team is available round the clock so you can get your betting ID or resolve any issue at any time of day or night.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- HOW TO GET --}}
<section class="section" id="how-to-get">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('how_title', 'How to Get Your <span class="text-gold">WhatsApp Betting ID</span>?') !!}</h2>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(250px,1fr));">
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">1</span></div>
                <h3>{!! $page->section('how_step_1_title', 'Click the WhatsApp Button') !!}</h3>
                <p>{!! $page->section('how_step_1_text', 'Click the cricket betting whatsapp link on this page. It connects you directly to our support team on WhatsApp instantly.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">2</span></div>
                <h3>{!! $page->section('how_step_2_title', 'Send Your Request') !!}</h3>
                <p>{!! $page->section('how_step_2_text', 'Send a message saying Hi I want a WhatsApp Betting ID and our team will respond within seconds with clear instructions.') !!}</p>
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
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('how_btn_text', 'Get Your WhatsApp Betting ID Now') !!}</a>
        </div>
    </div>
</section>

{{-- TOURNAMENTS --}}
<section class="section" id="tournaments" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('tournament_title', 'Bet on Major Tournaments with Your <span class="text-gold">WhatsApp Cricket Betting ID</span>') !!}</h2>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(300px,1fr));">
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/T-20 World Cup.png') }}" alt="T20 World Cup" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_1_title', 'T20 World Cup') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_1_text', 'The biggest T20 tournament in the world. Use your whatsapp cricket betting ID to bet on match winners, top batsmen and live ball by ball markets.') !!}</p>
                </div>
            </a>
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/the hundred.png') }}" alt="The Hundred" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_2_title', 'The Hundred and Big Bash') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_2_text', 'Fast paced cricket formats with unique betting markets. Bet on team performance, player stats and match outcomes with your whatsapp live betting ID.') !!}</p>
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
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('tournament_btn_text', 'Get Your WhatsApp Cricket Betting ID Now') !!}</a>
        </div>
    </div>
</section>

{{-- PAYMENTS --}}
<section class="section" id="payments">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('payments_title', 'Secure <span class="text-gold">Payment Methods</span> for Your WhatsApp Betting ID') !!}</h2>
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
            <h2 class="section-title">{!! $page->section('security_title', 'Is Your <span class="text-gold">WhatsApp Betting ID</span> Safe?') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('security_text', 'Absolutely. Every WhatsApp betting ID we issue is backed by advanced SSL encryption ensuring your personal and financial data are fully protected. WhatsApp itself provides end to end encryption on all messages which means your registration details stay private. We never store sensitive banking information and all transactions are processed through secure payment gateways. Always use the official cricket betting whatsapp link on our website to make sure you are connecting with our verified team. By following these simple precautions you enjoy a completely safe WhatsApp betting ID India experience with Radhey Book.') !!}</p>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="section" id="cta">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('cta_title', 'Ready to Get Your <span class="text-gold">WhatsApp Betting ID</span> Today?') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;text-align:center;">
            <p>{!! $page->section('cta_text', 'Join over 2 Million users who trust Radhey Book for their WhatsApp betting ID. Whether you want a whatsapp cricket betting ID for IPL and World Cup, a whatsapp casino betting ID for live table games, or a whatsapp live betting ID for real time in play betting, one message is all it takes. Get your WhatsApp betting ID India today with instant activation, zero fees and 24/7 support.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('cta_btn_text', 'Get Your WhatsApp Betting ID Now') !!}</a>
        </div>
    </div>
</section>

{{-- FAQ --}}
<section class="section" id="faq" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('faq_title', 'Frequently Asked <span class="text-gold">Questions</span>') !!}</h2>
        </div>
        <div class="faq-list" style="max-width:800px;margin:0 auto;">
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_1_q', 'What is a WhatsApp betting ID?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_1_a', 'A WhatsApp betting ID is your personal betting account that you create and manage entirely through WhatsApp. It gives you access to cricket betting, casino games and live betting platforms.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_2_q', 'How can I get a WhatsApp betting ID India?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_2_a', 'Click the cricket betting whatsapp link on this page, send your request, share your details, make your deposit and your WhatsApp betting ID India is activated within minutes.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_3_q', 'Can I get a WhatsApp cricket betting ID for IPL?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_3_a', 'Yes, your whatsapp cricket betting ID gives you full access to all IPL matches with live odds, session betting and ball by ball markets throughout the season.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_4_q', 'What is a WhatsApp casino betting ID?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_4_a', 'A whatsapp casino betting ID gives you access to live casino games including Teen Patti, Roulette, Blackjack, Baccarat and hundreds of slot games with real dealers.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_5_q', 'How do I login with my WhatsApp betting ID India?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_5_a', 'After receiving your WhatsApp betting ID India login credentials on WhatsApp, visit the betting platform, enter your username and password and start betting immediately.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_6_q', 'Is WhatsApp betting ID safe to use?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_6_a', 'Yes, your WhatsApp betting ID from Radhey Book is completely safe. We use SSL encryption, secure payments and WhatsApp\'s own end to end encryption to protect your data.') !!}</p></div>
            </div>
        </div>
    </div>
</section>

@endsection
