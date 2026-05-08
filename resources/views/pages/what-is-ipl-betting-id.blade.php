@extends('layouts.app')

@section('meta_title', $meta_title ?? 'What is IPL Betting ID. Complete Guide to IPL Betting ID in India. Radhey Book')
@section('meta_description', $meta_description ?? 'What is IPL betting ID and how does it work? A complete guide to IPL betting ID number, IPL betting ID in India and IPL betting ID WhatsApp sign up with Radhey Book.')
@section('meta_keywords', $meta_keywords ?? 'what is IPL betting ID, what is IPL betting ID number, what is IPL betting ID in india, IPL betting ID whatsapp, IPL betting ID, IPL online id')

@section('content')

@php
    $waLink = 'https://linktr.ee/radheybook';
@endphp

{{-- HERO --}}
<section class="hero-section" id="hero" style="background: url('{{ asset('images/Artboard 1 copy radhey book banner 1.png') }}') center/cover no-repeat;">
    <div class="hero-overlay" style="background: rgba(0,0,0,0.55);"></div>
    <div class="hero-content container">
        <div class="hero-badge"><span class="badge-pulse"></span> {!! $page->section('hero_badge', 'IPL Betting ID Complete Guide') !!}</div>
        <h1 class="hero-title">{!! $page->section('hero_title', '<span class="text-gold">What is IPL Betting ID</span> and How Does It Work?') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'Everything you need to know about IPL betting ID, IPL betting ID number and IPL betting ID in India. Get yours instantly on WhatsApp from Radhey Book.') !!}</p>
        <div class="hero-cta"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('hero_btn_text', 'Get My IPL Betting ID Now') !!}</a></div>
    </div>
</section>

{{-- INTRO --}}
<section class="section" id="intro">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('intro_title', '<span class="text-gold">What is IPL Betting ID</span>?') !!}</h2>
            <p class="section-subtitle">{!! $page->section('intro_subtitle', 'Your complete guide to understanding the IPL Betting ID and how it works in India') !!}</p>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('intro_text_1', 'Every IPL season, lakhs of cricket fans across India search for answers to one simple question what is IPL betting ID and how can they get one. It is a personal betting account that gives you full access to live IPL matches, all betting markets and real time odds on your favourite teams. Whether you want to bet on Mumbai Indians, Chennai Super Kings, RCB or any other team, you need an account like this to place your bets safely.') !!}</p>
                    <p>{!! $page->section('intro_text_2', 'Radhey Book is a trusted name in India that helps you get your account within minutes. There is no long form to fill, no website sign up and no identity upload. You simply chat with our team on WhatsApp, share your details, deposit your amount and your account is live. Lakhs of users across India trust us every IPL season for fast activation, secure payments and the best betting odds.') !!}</p>
                </div>
            </div>
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/TENNIS FOOTBALL AVIATOR/cricket_1.png') }}" alt="What is IPL Betting ID" style="width:100%;border-radius:16px;" onerror="this.src='{{ asset('images/cricket.png') }}'">
            </div>
        </div>
    </div>
</section>

{{-- WHAT IS IPL BETTING ID NUMBER --}}
<section class="section section-alt" id="id-number">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('number_title', '<span class="text-gold">What is IPL Betting ID Number</span>?') !!}</h2>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/TENNIS FOOTBALL AVIATOR/cricket_2.png') }}" alt="IPL Betting ID Number" style="width:100%;border-radius:16px;" onerror="this.src='{{ asset('images/cricket.png') }}'">
            </div>
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('number_text_1', 'The next question users often ask is what is IPL betting ID number. It is the dedicated customer care contact number you can call or WhatsApp for any help related to your IPL betting account. Save the number from this page and reach our team anytime for sign up assistance, deposits, withdrawals, login support or any other account related query. Think of it as your direct line to Radhey Book — available 24/7 throughout the IPL season and beyond.') !!}</p>
                    <p>{!! $page->section('number_text_2', 'The same IPL betting ID number works as the official Radhey Book customer care contact for all your needs. Whether you are a new user looking to sign up, an existing user needing help with a deposit or withdrawal, or someone with a quick question during a live match, our team responds within seconds. Save the number from this page and use it whenever you need support — that is what the IPL betting ID number is for.') !!}</p>
                </div>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('number_btn_text', 'Get My IPL Betting ID Number') !!}</a></div>
    </div>
</section>

{{-- IN INDIA --}}
<section class="section" id="in-india">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('india_title', '<span class="text-gold">What is IPL Betting ID in India</span>?') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('india_text_1', 'Many users want to know what is IPL betting ID in india and how it is different from other betting accounts. It is a betting account tailored for Indian users with INR support, local payment methods and full Hindi support if needed. Radhey Book makes sure that every user can easily sign up, deposit, bet and withdraw without any hassle.') !!}</p>
            <p>{!! $page->section('india_text_2', 'All our accounts come with UPI, Paytm, PhonePe, Google Pay and bank transfer options which are the most popular payment methods in India. You can deposit and withdraw money within minutes. The customer support team speaks Hindi, English and many regional languages which makes it easy for users from every state to get help whenever they need.') !!}</p>
        </div>
    </div>
</section>

{{-- WHATSAPP --}}
<section class="section section-alt" id="whatsapp">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('whatsapp_title', '<span class="text-gold">IPL Betting ID WhatsApp</span> Sign Up') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('whatsapp_text_1', 'The best part about Radhey Book is that the whole sign up is done on WhatsApp. Our IPL betting ID whatsapp process is the fastest way to get an account in India. There is no website form, no app download and no long waiting. You just click the WhatsApp button on this page and our team guides you through every step in real time.') !!}</p>
            <p>{!! $page->section('whatsapp_text_2', 'You can get your account ready in 2 to 5 minutes, even during busy match days. You can also reach us on the same WhatsApp number for deposits, withdrawals, login help and any account related query. This makes Radhey Book one of the most user friendly IPL betting providers in India.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('whatsapp_btn_text', 'Start on WhatsApp Now') !!}</a></div>
    </div>
</section>

{{-- HOW TO USE --}}
<section class="section" id="how-to-use">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('use_title', 'How to Use Your <span class="text-gold">IPL Betting ID</span>?') !!}</h2>
            <p class="section-subtitle">{!! $page->section('use_subtitle', '5 simple steps to start using your IPL Betting ID after activation') !!}</p>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(250px,1fr));">
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">1</span></div><h3>{!! $page->section('use_1_title', 'Log In') !!}</h3><p>{!! $page->section('use_1_text', 'Use your account number and password to log in from mobile or desktop.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">2</span></div><h3>{!! $page->section('use_2_title', 'Check Live Matches') !!}</h3><p>{!! $page->section('use_2_text', 'View all live IPL matches, team lineups and real time odds from your dashboard.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">3</span></div><h3>{!! $page->section('use_3_title', 'Place Your Bets') !!}</h3><p>{!! $page->section('use_3_text', 'Select your market, enter your stake and confirm the bet in a few taps.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">4</span></div><h3>{!! $page->section('use_4_title', 'Track Winnings') !!}</h3><p>{!! $page->section('use_4_text', 'Track your bets, balance and winnings in real time from your account dashboard.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">5</span></div><h3>{!! $page->section('use_5_title', 'Withdraw Money') !!}</h3><p>{!! $page->section('use_5_text', 'Withdraw winnings within 5 minutes to your bank account via UPI, Paytm or PhonePe.') !!}</p></div>
        </div>
    </div>
</section>

{{-- WHY CHOOSE --}}
<section class="section" id="why-choose" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('why_title', 'Why Get Your <span class="text-gold">IPL Betting ID</span> from Radhey Book?') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3>{!! $page->section('why_1_title', 'Instant Activation') !!}</h3><p>{!! $page->section('why_1_text', 'Your IPL Betting ID is activated within 2 to 5 minutes. No waiting so you never miss a match.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>{!! $page->section('why_2_title', 'Verified and Secure') !!}</h3><p>{!! $page->section('why_2_text', 'Every account is fully verified with secure encryption to keep your data protected at all times.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><h3>{!! $page->section('why_3_title', 'Best IPL Odds') !!}</h3><p>{!! $page->section('why_3_text', 'Get the best IPL odds in India on every match so you always get great value on your bets.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div><h3>{!! $page->section('why_4_title', 'WhatsApp Sign Up') !!}</h3><p>{!! $page->section('why_4_text', 'Complete the entire sign up on WhatsApp. No forms, no app downloads. Just a simple chat.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div><h3>{!! $page->section('why_5_title', 'Fast Withdrawals') !!}</h3><p>{!! $page->section('why_5_text', 'Withdraw your winnings within 5 minutes to your bank via UPI, Paytm, PhonePe or bank transfer.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div><h3>{!! $page->section('why_6_title', '24/7 WhatsApp Support') !!}</h3><p>{!! $page->section('why_6_text', 'Our team is available round the clock via WhatsApp to help you with your account anytime.') !!}</p></div>
        </div>
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

{{-- CTA --}}
<section class="section" id="cta" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('cta_title', 'Ready for Your <span class="text-gold">IPL Betting ID</span>?') !!}</h2></div>
        <div class="content-block" style="max-width:900px;margin:0 auto;text-align:center;">
            <p>{!! $page->section('cta_text', 'Now that you know how it works, do not wait any longer. Join thousands of happy users who trust Radhey Book for their IPL betting in India. One simple WhatsApp message is all it takes to get your account today with instant activation and 24/7 support.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('cta_btn_text', 'Get My IPL Betting ID Now') !!}</a></div>
    </div>
</section>

{{-- FAQ --}}
<section class="section" id="faq">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('faq_title', 'Frequently Asked <span class="text-gold">Questions</span>') !!}</h2></div>
        <div class="faq-list" style="max-width:800px;margin:0 auto;">
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_1_q', 'What is IPL betting ID in simple words?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_1_a', 'It is a personal betting account that gives you full access to IPL matches, all betting markets and real time odds. You can place bets, track winnings and withdraw money safely.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_2_q', 'What is IPL betting ID number used for?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_2_a', 'It is the official customer care contact number for your IPL betting account. You call or WhatsApp this number to reach our support team for sign up help, deposits, withdrawals, login issues and any other account related query.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_3_q', 'What is IPL betting ID in india for new users?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_3_a', 'An account from Radhey Book is tailored for Indian users with INR support, local payment methods like UPI and Paytm, and Hindi language support for easy use.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_4_q', 'How does IPL betting ID whatsapp sign up work?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_4_a', 'The WhatsApp sign up takes only 2 to 5 minutes. You message our team, share your details, make a small deposit and your account is activated. No form filling required.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_5_q', 'Is my IPL betting ID safe with Radhey Book?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_5_a', 'Yes. Every account is backed by SSL encryption and secure payment gateways. Your data and funds are fully protected. We have been serving users for over 7 years without any issues.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_6_q', 'Can I use my IPL Betting ID for other cricket matches?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_6_a', 'Yes. The same account works for all cricket matches including IPL, T20 World Cup, BBL, PSL, international series and domestic cricket. One account for all your cricket betting needs.') !!}</p></div></div>
        </div>
    </div>
</section>

@endsection
