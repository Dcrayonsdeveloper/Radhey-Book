@extends('layouts.app')

@section('meta_title', $meta_title ?? 'Online Casino ID. Get Your Online Casino ID Instantly in India. Radhey Book')
@section('meta_description', $meta_description ?? 'Get your online casino ID instantly from Radhey Book. Trusted online casino ID provider in India with instant activation, secure access and 24/7 WhatsApp support.')
@section('meta_keywords', $meta_keywords ?? 'online casino ID, online casino ID generator, online casino ID india, online casino ID provider, online casino ID number, online casino ID number india, instant cricket ID, whatsapp betting ID, betting ID india')

@section('content')

@php
    $waLink = 'https://linktr.ee/radheybook';
@endphp

{{-- HERO --}}
<section class="hero-section" id="hero" style="background: url('{{ asset('images/casino banner.png') }}') center/cover no-repeat;">
    <div class="hero-overlay" style="background: rgba(0,0,0,0.55);"></div>
    <div class="hero-content container">
        <div class="hero-badge"><span class="badge-pulse"></span> {!! $page->section('hero_badge', 'India\'s Trusted Online Casino ID Provider') !!}</div>
        <h1 class="hero-title">{!! $page->section('hero_title', 'Get Your <span class="text-gold">Online Casino ID</span> Instantly on WhatsApp with Radhey Book') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'Radhey Book is the most trusted online casino ID provider in India. Get your online casino ID within minutes on WhatsApp and start playing Teen Patti, Roulette, Blackjack, slots and hundreds of live casino games with instant activation and 24/7 support.') !!}</p>
        <div class="hero-cta"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('hero_btn_text', 'Get Your Online Casino ID Now') !!}</a></div>
    </div>
</section>

{{-- INTRO --}}
<section class="section" id="intro">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('intro_title', '<span class="text-gold">Online Casino ID</span> in India') !!}</h2>
            <p class="section-subtitle">{!! $page->section('intro_subtitle', 'Get Your Online Casino ID Today and Play Hundreds of Casino Games Instantly') !!}</p>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('intro_text_1', 'If you love playing casino games online and want a fast and safe way to get started then you need an online casino ID from a provider you can trust. Radhey Book is the most reliable online casino ID provider in India and we have been helping users access the best casino platforms for over 7 years. With your online casino ID you can play Teen Patti, Roulette, Blackjack, Baccarat, Andar Bahar, Dragon Tiger, Aviator and hundreds of slot games with real live dealers. Getting started is as simple as sending one message on WhatsApp.') !!}</p>
                    <p>{!! $page->section('intro_text_2', 'Many users search for an online casino ID generator to create their accounts quickly and that is exactly what Radhey Book offers. Our WhatsApp based registration works like the fastest online casino ID generator you will find because you simply send a message, share your basic details, make your first deposit and your online casino ID India account is activated within minutes. No forms, no apps, no waiting. This is why thousands of casino fans trust Radhey Book as their preferred online casino ID provider every single day.') !!}</p>
                </div>
            </div>
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/football.png') }}" alt="Online Casino ID" style="width:100%;border-radius:16px;" loading="lazy" decoding="async">
            </div>
        </div>
    </div>
</section>

{{-- WHAT IS --}}
<section class="section section-alt" id="what-is">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('what_is_title', 'What is an <span class="text-gold">Online Casino ID</span>?') !!}</h2>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/tennis.png') }}" alt="Casino Games" style="width:100%;border-radius:16px;" loading="lazy" decoding="async">
            </div>
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('what_is_text_1', 'An online casino ID is your personal account that gives you access to online casino platforms where you can play live casino games, slot machines, card games and table games. It lets you log in, deposit funds, place bets on your favourite games, track your winnings and withdraw money safely. Every user needs a verified online casino ID to start casino gaming safely.') !!}</p>
                    <p>{!! $page->section('what_is_text_2', 'With your online casino ID India from Radhey Book you get access to all major casino games with real live dealers and real time gameplay. Your account also gives you access to cricket betting, football, tennis and other sports through the same ID. This means you do not need separate accounts for different types of betting. One online casino ID from Radhey Book covers everything and your whatsapp betting ID makes the entire process fast and convenient.') !!}</p>
                </div>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('what_is_btn_text', 'Get Your Online Casino ID Today') !!}</a></div>
    </div>
</section>

{{-- WHY --}}
<section class="section" id="why-provider">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('provider_title', 'Why Radhey Book is the Best <span class="text-gold">Online Casino ID Provider</span>?') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3>{!! $page->section('provider_1_title', 'Instant Casino ID Activation') !!}</h3><p>{!! $page->section('provider_1_text', 'Your online casino ID is activated within 2 to 5 minutes after payment. Start playing casino games right away with absolutely no delays.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>{!! $page->section('provider_2_title', 'Verified and Secure') !!}</h3><p>{!! $page->section('provider_2_text', 'Every online casino ID we issue is fully verified with secure encryption to protect your personal and financial data at all times.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M12 8v8"/><path d="M8 12h8"/></svg></div><h3>{!! $page->section('provider_3_title', 'Hundreds of Games') !!}</h3><p>{!! $page->section('provider_3_text', 'Access Teen Patti, Roulette, Blackjack, Baccarat, Andar Bahar, Dragon Tiger, Aviator and hundreds of slot games from a single online casino ID.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div><h3>{!! $page->section('provider_4_title', 'Fastest Online Casino ID Generator') !!}</h3><p>{!! $page->section('provider_4_text', 'Our WhatsApp registration works like the fastest online casino ID generator. Send one message and your account is created and ready within minutes.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div><h3>{!! $page->section('provider_5_title', 'Fast Withdrawals') !!}</h3><p>{!! $page->section('provider_5_text', 'Withdraw your casino winnings within 5 minutes directly to your bank account via UPI, Paytm, PhonePe or bank transfer.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div><h3>{!! $page->section('provider_6_title', '24/7 Support') !!}</h3><p>{!! $page->section('provider_6_text', 'Our team is available round the clock via WhatsApp and phone to help you with your online casino ID account anytime you need assistance.') !!}</p></div>
        </div>
    </div>
</section>

{{-- HOW TO GET --}}
<section class="section" id="how-to-get" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('how_title', 'How to Get Your <span class="text-gold">Online Casino ID</span> on WhatsApp?') !!}</h2>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(250px,1fr));">
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">1</span></div><h3>{!! $page->section('how_step_1_title', 'Click on WhatsApp') !!}</h3><p>{!! $page->section('how_step_1_text', 'Click the WhatsApp button on this page to connect directly with our team for your online casino ID.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">2</span></div><h3>{!! $page->section('how_step_2_title', 'Send Your Request') !!}</h3><p>{!! $page->section('how_step_2_text', 'Send a message saying Hi I want an Online Casino ID and our team will respond within seconds with clear instructions.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">3</span></div><h3>{!! $page->section('how_step_3_title', 'Share Details and Deposit') !!}</h3><p>{!! $page->section('how_step_3_text', 'Share your name and contact number then make your first deposit using UPI, Paytm, PhonePe or bank transfer.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">4</span></div><h3>{!! $page->section('how_step_4_title', 'Receive Your ID') !!}</h3><p>{!! $page->section('how_step_4_text', 'Within 2 to 5 minutes your ID and login credentials will be shared with you. You can start betting.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">5</span></div><h3>{!! $page->section('how_step_5_title', 'Login and Start Playing') !!}</h3><p>{!! $page->section('how_step_5_text', 'Log in and explore hundreds of casino games. Play Teen Patti, Roulette, Blackjack, slots, Aviator and more with real live dealers.') !!}</p></div>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('how_btn_text', 'Get Your Online Casino ID on WhatsApp Now') !!}</a></div>
    </div>
</section>

{{-- GAMES --}}
<section class="section" id="games">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('games_title', 'Games You Can Play with Your <span class="text-gold">Online Casino ID</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('games_subtitle', 'Your online casino ID India gives you access to a massive collection of live casino games and slots') !!}</p>
        </div>
        <div class="features-grid">
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="8" cy="8" r="1.5" fill="#d4af37"/><circle cx="16" cy="16" r="1.5" fill="#d4af37"/><circle cx="12" cy="12" r="1.5" fill="#d4af37"/></svg></div><h3>{!! $page->section('game_1_title', 'Teen Patti and Andar Bahar') !!}</h3><p>{!! $page->section('game_1_text', 'India\'s most loved card games with real live dealers. Place bets and experience real casino action from your phone anytime and anywhere.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="3"/></svg></div><h3>{!! $page->section('game_2_title', 'Roulette and Blackjack') !!}</h3><p>{!! $page->section('game_2_text', 'Classic casino table games with live dealers, real time action and multiple betting options. Play like you are sitting in a real casino.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 2L11 13"/><path d="M22 2l-7 20-4-9-9-4 20-7z"/></svg></div><h3>{!! $page->section('game_3_title', 'Slots and Aviator') !!}</h3><p>{!! $page->section('game_3_text', 'Hundreds of slot games with exciting themes and the thrilling Aviator crash game. Big wins with instant payouts directly to your account.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M12 8v8"/><path d="M8 12h8"/></svg></div><h3>{!! $page->section('game_4_title', 'Baccarat and Dragon Tiger') !!}</h3><p>{!! $page->section('game_4_text', 'Popular international casino games available with live dealers. Simple rules and fast gameplay make these games perfect for beginners and experts alike.') !!}</p></div>
        </div>
    </div>
</section>

{{-- ONLINE CASINO ID GENERATOR --}}
<section class="section" id="generator" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('generator_title', 'Fastest <span class="text-gold">Online Casino ID Generator</span> in India') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('generator_text_1', 'Many users look for an online casino ID generator that can create their account quickly without complicated steps. Radhey Book\'s WhatsApp registration system works exactly like the fastest online casino ID generator you will find anywhere. Instead of filling out long registration forms on websites or downloading apps, you simply send a WhatsApp message and our team creates your online casino ID within minutes.') !!}</p>
            <p>{!! $page->section('generator_text_2', 'The process is designed to be as fast and smooth as possible. You share your basic details, make your first deposit and your online casino ID India account is generated and activated instantly. This is why users who are looking for a reliable online casino ID generator choose Radhey Book over any other method. It is quick, it is secure and it works perfectly every single time. Your whatsapp betting ID gives you direct access to our team who handle everything for you.') !!}</p>
        </div>
    </div>
</section>

{{-- SUPPORT --}}
<section class="section" id="support">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('support_title', '<span class="text-gold">Online Casino ID Number</span> for Support and Contact') !!}</h2></div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('support_text_1', 'As a trusted online casino ID provider, Radhey Book offers dedicated WhatsApp and phone support for all users. The online casino ID number on this page connects you directly to our support team for any help you may need with account creation, deposits, withdrawals or specific casino games. Whether you are setting up your online casino ID India for the first time or you have a question while playing, our team is always ready to assist you.') !!}</p>
            <p>{!! $page->section('support_text_2', 'Users from across the country rely on our Online casino ID number india for fast and reliable assistance throughout the day and night. We are committed to making your casino gaming experience smooth and enjoyable from the very first game you play. Save the number, message us anytime and you will get a quick response from our team.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('support_btn_text', 'Contact Support Team Now') !!}</a></div>
    </div>
</section>

{{-- PAYMENTS --}}
<section class="section" id="payments" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('payments_title', 'Secure <span class="text-gold">Payment Methods</span>') !!}</h2></div>
        <div class="features-grid" style="grid-template-columns:repeat(4,1fr);max-width:800px;margin:0 auto;">
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/upi.png') }}" alt="UPI" style="width:48px;height:48px;object-fit:contain;" loading="lazy" decoding="async"></div><h3>UPI</h3></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/bank transfer.png') }}" alt="Bank Transfer" style="width:48px;height:48px;object-fit:contain;" loading="lazy" decoding="async"></div><h3>Bank Transfer</h3></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/paytm.png') }}" alt="Paytm" style="width:48px;height:48px;object-fit:contain;" loading="lazy" decoding="async"></div><h3>Paytm</h3></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/phonepe.png') }}" alt="PhonePe" style="width:48px;height:48px;object-fit:contain;" loading="lazy" decoding="async"></div><h3>PhonePe</h3></div>
        </div>
    </div>
</section>

{{-- SECURITY --}}
<section class="section" id="security">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('security_title', 'Is Your <span class="text-gold">Online Casino ID</span> Safe?') !!}</h2></div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('security_text', 'Absolutely. Every online casino ID we issue is backed by advanced SSL encryption ensuring your personal and financial data are fully protected. As a responsible online casino ID provider, we use secure payment gateways and never store sensitive banking details. Always access your online casino ID India through our official WhatsApp number and verified channels. By following simple precautions you enjoy a completely safe casino gaming experience with Radhey Book.') !!}</p>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="section" id="cta" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('cta_title', 'Ready to Get Your <span class="text-gold">Online Casino ID</span> Today?') !!}</h2></div>
        <div class="content-block" style="max-width:900px;margin:0 auto;text-align:center;">
            <p>{!! $page->section('cta_text', 'Join thousands of satisfied users who trust Radhey Book as their preferred online casino ID provider. Whether you want to play Teen Patti, Roulette, Blackjack, slots or Aviator, your online casino ID gives you full access to everything. Looking for the fastest online casino ID generator in India? That is exactly what our WhatsApp registration provides. Get your online casino ID India today with instant activation, zero fees and 24/7 support. One message is all it takes.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('cta_btn_text', 'Get Your Online Casino ID on WhatsApp Now') !!}</a></div>
    </div>
</section>

{{-- FAQ --}}
<section class="section" id="faq">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('faq_title', 'Frequently Asked <span class="text-gold">Questions</span>') !!}</h2></div>
        <div class="faq-list" style="max-width:800px;margin:0 auto;">
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_1_q', 'What is an online casino ID?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_1_a', 'An online casino ID is your personal account for accessing online casino platforms. It lets you log in, play casino games, manage funds and withdraw winnings securely.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_2_q', 'Is there an online casino ID generator?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_2_a', 'Yes, Radhey Book\'s WhatsApp registration works like the fastest online casino ID generator. Send one message and your account is created within minutes without any complicated steps.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_3_q', 'How can I get an online casino ID India?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_3_a', 'Click the WhatsApp button on this page, send your request, share details, make your deposit and your online casino ID India is activated within minutes.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_4_q', 'Can I use my online casino ID for cricket betting too?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_4_a', 'Yes, your online casino ID also gives you access to cricket betting, football, tennis and all major exchange platforms from the same account.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_5_q', 'Who is the best online casino ID provider?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_5_a', 'Radhey Book is India\'s most trusted online casino ID provider with 7+ years experience, instant activation, hundreds of games and 24/7 WhatsApp support.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_6_q', 'Is my online casino ID safe to use?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_6_a', 'Yes, every online casino ID from Radhey Book is fully verified and protected with SSL encryption. Your data and funds are safe at all times.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_7_q', 'How do I contact the online casino ID number for help?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_7_a', 'You can reach our team through the online casino ID number shown on this page or via WhatsApp. Our support team is available 24/7 to help with any query about your account, deposits or withdrawals.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_8_q', 'Is the Online casino ID number india available 24 hours?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_8_a', 'Yes, our Online casino ID number india is available round the clock for users from all parts of the country. You can call or message us anytime and our team will respond quickly.') !!}</p></div></div>
        </div>
    </div>
</section>
@endsection
