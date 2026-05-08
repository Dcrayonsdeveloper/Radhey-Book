@extends('layouts.app')

@section('meta_title', $meta_title ?? 'Casino Betting ID. Get Your Trusted Casino Betting ID in India. Radhey Book')
@section('meta_description', $meta_description ?? 'Get your trusted casino betting ID from Radhey Book. Online casino betting ID provider in India with instant activation, legal access and 24/7 WhatsApp support.')
@section('meta_keywords', $meta_keywords ?? 'casino betting ID, trusted casino betting ID, online casino betting ID, online betting ID casino, online casino betting ID provider, casino betting ID provider, legal casino betting ID india')

@section('content')

@php
    $waLink = 'https://linktr.ee/radheybook';
@endphp

{{-- HERO --}}
<section class="hero-section" id="hero" style="background: url('{{ asset('images/casino banner.png') }}') center/cover no-repeat;">
    <div class="hero-overlay" style="background: rgba(0,0,0,0.55);"></div>
    <div class="hero-content container">
        <div class="hero-badge"><span class="badge-pulse"></span> {!! $page->section('hero_badge', 'India\'s Trusted Casino Betting ID Provider') !!}</div>
        <h1 class="hero-title">{!! $page->section('hero_title', 'Get Your <span class="text-gold">Casino Betting ID</span> Instantly on WhatsApp with Radhey Book') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'Radhey Book is the most trusted casino betting ID provider in India. Get your online casino betting ID within minutes on WhatsApp with instant activation, secure transactions and 24/7 support. Play Teen Patti, Roulette, Blackjack and more today.') !!}</p>
        <div class="hero-cta"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('hero_btn_text', 'Get Your Casino Betting ID Now') !!}</a></div>
    </div>
</section>

{{-- INTRO --}}
<section class="section" id="intro">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('intro_title', '<span class="text-gold">Casino Betting ID</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('intro_subtitle', 'Get Your Trusted Casino Betting ID Today and Play Hundreds of Casino Games') !!}</p>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('intro_text_1', 'If you love casino games and want to play them online safely then you need a casino betting ID from a provider you can trust. Radhey Book is the most reliable casino betting ID provider in India and we have been helping users access the best online casino platforms for over 7 years. With your casino betting ID from Radhey Book you can play Teen Patti, Roulette, Blackjack, Baccarat, Andar Bahar, Dragon Tiger and hundreds of slot games with real live dealers. All it takes is one simple WhatsApp message to get started.') !!}</p>
                    <p>{!! $page->section('intro_text_2', 'What makes Radhey Book the preferred online casino betting ID provider is our simple and fast WhatsApp registration. You do not need to fill forms or download apps. Contact us on WhatsApp, share your basic details, make your first deposit and your trusted casino betting ID is activated within minutes. Whether you are a first time casino player or an experienced gambler, getting your legal casino betting ID India through Radhey Book is the safest and fastest way to start playing online casino games in India.') !!}</p>
                </div>
            </div>
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/casino.png') }}" alt="Casino Betting ID" style="width:100%;border-radius:16px;">
            </div>
        </div>
    </div>
</section>

{{-- WHAT IS --}}
<section class="section section-alt" id="what-is">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('what_is_title', 'What is a <span class="text-gold">Casino Betting ID</span>?') !!}</h2>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/aviator.png') }}" alt="Casino Betting" style="width:100%;border-radius:16px;">
            </div>
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('what_is_text_1', 'A casino betting ID is your personal account that gives you access to online casino platforms where you can play live casino games, slot machines and card games. It lets you log in, deposit funds, place bets on your favourite games, track your winnings and withdraw money safely. Every user needs a trusted casino betting ID to start casino gaming safely.') !!}</p>
                    <p>{!! $page->section('what_is_text_2', 'With an online casino betting ID from Radhey Book you get access to all major casino games including Teen Patti, Roulette, Blackjack, Baccarat, Andar Bahar, Dragon Tiger and hundreds of slot games with real live dealers. Your online betting ID casino account also gives you access to cricket betting and other sports so you get complete value from a single ID. As a legal casino betting ID India provider, Radhey Book ensures all accounts are verified and secure.') !!}</p>
                </div>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('what_is_btn_text', 'Get Your Casino Betting ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- WHY --}}
<section class="section" id="why-provider">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('provider_title', 'Why Radhey Book is the Best <span class="text-gold">Casino Betting ID Provider</span>?') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3>{!! $page->section('provider_1_title', 'Instant Activation') !!}</h3><p>{!! $page->section('provider_1_text', 'Your casino betting ID is activated within 2 to 5 minutes after payment. Start playing casino games right away with no delays.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>{!! $page->section('provider_2_title', 'Trusted and Verified') !!}</h3><p>{!! $page->section('provider_2_text', 'Every trusted casino betting ID we issue is fully verified with secure encryption to protect your personal and financial data at all times.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M12 8v8"/><path d="M8 12h8"/></svg></div><h3>{!! $page->section('provider_3_title', 'Hundreds of Games') !!}</h3><p>{!! $page->section('provider_3_text', 'Access Teen Patti, Roulette, Blackjack, Baccarat, Andar Bahar, Dragon Tiger, Aviator and hundreds of slot games from a single online casino betting ID.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div><h3>{!! $page->section('provider_4_title', 'WhatsApp Registration') !!}</h3><p>{!! $page->section('provider_4_text', 'Get your casino betting ID entirely through WhatsApp. No forms, no downloads. Just send a message and our team handles everything for you.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div><h3>{!! $page->section('provider_5_title', 'Fast Withdrawals') !!}</h3><p>{!! $page->section('provider_5_text', 'Withdraw your casino winnings within 5 minutes directly to your bank account via UPI, Paytm, PhonePe or bank transfer.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div><h3>{!! $page->section('provider_6_title', 'Legal Casino Betting ID India') !!}</h3><p>{!! $page->section('provider_6_text', 'We provide legal casino betting ID India accounts that are fully compliant with trusted and verified platforms ensuring a safe gaming experience.') !!}</p></div>
        </div>
    </div>
</section>

{{-- HOW TO GET --}}
<section class="section" id="how-to-get" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('how_title', 'How to Get Your <span class="text-gold">Casino Betting ID</span> on WhatsApp?') !!}</h2>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(250px,1fr));">
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">1</span></div><h3>{!! $page->section('how_step_1_title', 'Click on WhatsApp') !!}</h3><p>{!! $page->section('how_step_1_text', 'Click the WhatsApp button on this page to connect directly with our team for your casino betting ID.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">2</span></div><h3>{!! $page->section('how_step_2_title', 'Send Your Request') !!}</h3><p>{!! $page->section('how_step_2_text', 'Send a message saying Hi I want a Casino Betting ID and our team will respond within seconds with clear instructions.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">3</span></div><h3>{!! $page->section('how_step_3_title', 'Share Details and Deposit') !!}</h3><p>{!! $page->section('how_step_3_text', 'Share your name and contact number then make your first deposit using UPI, Paytm, PhonePe or bank transfer.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">4</span></div><h3>{!! $page->section('how_step_4_title', 'Receive Your ID') !!}</h3><p>{!! $page->section('how_step_4_text', 'Within 2 to 5 minutes your ID and login credentials will be shared with you. You can start betting.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">5</span></div><h3>{!! $page->section('how_step_5_title', 'Login and Start Playing') !!}</h3><p>{!! $page->section('how_step_5_text', 'Log in and start playing your favourite casino games right away.') !!}</p></div>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('how_btn_text', 'Get Your Casino Betting ID on WhatsApp Now') !!}</a></div>
    </div>
</section>

{{-- GAMES --}}
<section class="section" id="games">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('games_title', 'Games You Can Play with Your <span class="text-gold">Casino Betting ID</span>') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="8" cy="8" r="1.5" fill="#d4af37"/><circle cx="16" cy="16" r="1.5" fill="#d4af37"/><circle cx="12" cy="12" r="1.5" fill="#d4af37"/></svg></div><h3>{!! $page->section('game_1_title', 'Teen Patti and Andar Bahar') !!}</h3><p>{!! $page->section('game_1_text', 'India\'s most loved card games with real live dealers. Place bets and experience the thrill of real casino action from your phone.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="3"/></svg></div><h3>{!! $page->section('game_2_title', 'Roulette and Blackjack') !!}</h3><p>{!! $page->section('game_2_text', 'Classic casino table games with live dealers, real time action and multiple betting options. Play like you are in a real casino.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><h3>{!! $page->section('game_3_title', 'Slots and Aviator') !!}</h3><p>{!! $page->section('game_3_text', 'Hundreds of slot games with exciting themes and the thrilling Aviator crash game. Big wins with instant payouts every time.') !!}</p></div>
        </div>
    </div>
</section>

{{-- SUPPORT --}}
<section class="section" id="support" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('support_title', '<span class="text-gold">Casino Betting ID</span> WhatsApp and Phone Support') !!}</h2></div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('support_text', 'As a trusted casino betting ID provider, Radhey Book offers dedicated WhatsApp and phone support for all users. Whether you need help getting your online casino betting ID set up, have questions about deposits or withdrawals, or want to know about specific casino games, our team provides fast and accurate answers every single time. We are committed to making your online betting ID casino experience smooth and enjoyable from start to finish.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('support_btn_text', 'Contact Support Team Now') !!}</a></div>
    </div>
</section>

{{-- PAYMENTS --}}
<section class="section" id="payments">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('payments_title', 'Secure <span class="text-gold">Payment Methods</span>') !!}</h2></div>
        <div class="features-grid" style="grid-template-columns:repeat(4,1fr);max-width:800px;margin:0 auto;">
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/upi.png') }}" alt="UPI" style="width:48px;height:48px;object-fit:contain;"></div><h3>UPI</h3></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/bank transfer.png') }}" alt="Bank Transfer" style="width:48px;height:48px;object-fit:contain;"></div><h3>Bank Transfer</h3></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/paytm.png') }}" alt="Paytm" style="width:48px;height:48px;object-fit:contain;"></div><h3>Paytm</h3></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/phonepe.png') }}" alt="PhonePe" style="width:48px;height:48px;object-fit:contain;"></div><h3>PhonePe</h3></div>
        </div>
    </div>
</section>

{{-- SECURITY --}}
<section class="section" id="security" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('security_title', 'Is Your <span class="text-gold">Casino Betting ID</span> Safe?') !!}</h2></div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('security_text', 'Absolutely. Every trusted casino betting ID we issue is backed by advanced SSL encryption ensuring your personal and financial data are fully protected. As a responsible online casino betting ID provider and legal casino betting ID India provider, we use secure payment gateways and never store sensitive banking details. Always access your casino betting ID through our official WhatsApp number to ensure maximum security.') !!}</p>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="section" id="cta">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('cta_title', 'Ready to Get Your <span class="text-gold">Casino Betting ID</span> Today?') !!}</h2></div>
        <div class="content-block" style="max-width:900px;margin:0 auto;text-align:center;">
            <p>{!! $page->section('cta_text', 'Join thousands of satisfied users who trust Radhey Book as their preferred casino betting ID provider. Whether you want to play Teen Patti, Roulette, Blackjack, slots or Aviator, your online casino betting ID gives you full access to everything. Get your trusted casino betting ID today with instant activation, zero fees and 24/7 WhatsApp support. One message is all it takes.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('cta_btn_text', 'Get Your Casino Betting ID on WhatsApp Now') !!}</a></div>
    </div>
</section>

{{-- FAQ --}}
<section class="section" id="faq" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('faq_title', 'Frequently Asked <span class="text-gold">Questions</span>') !!}</h2></div>
        <div class="faq-list" style="max-width:800px;margin:0 auto;">
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_1_q', 'What is a casino betting ID?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_1_a', 'A casino betting ID is your personal account for accessing online casino platforms. It lets you log in, play casino games, manage funds and withdraw winnings securely.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_2_q', 'How can I get a trusted casino betting ID?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_2_a', 'Contact Radhey Book on WhatsApp, share your details, make your deposit and your trusted casino betting ID is activated within minutes. Zero registration charges.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_3_q', 'Is this a legal casino betting ID India?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_3_a', 'Yes, Radhey Book provides legal casino betting ID India accounts that are fully verified with trusted and secure platforms ensuring a safe gaming experience.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_4_q', 'Can I use my casino betting ID for cricket too?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_4_a', 'Yes, your online betting ID casino account also gives you access to cricket betting, football, tennis and all major exchange platforms from a single ID.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_5_q', 'Who is the best online casino betting ID provider?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_5_a', 'Radhey Book is India\'s most trusted online casino betting ID provider with 7+ years experience, instant activation, fast withdrawals and 24/7 WhatsApp support.') !!}</p></div></div>
        </div>
    </div>
</section>
@endsection
