@extends('layouts.app')

@section('meta_title', $meta_title ?? 'How to Get IPL Betting ID. Instant IPL Betting ID in India Online. Radhey Book')
@section('meta_description', $meta_description ?? 'Learn how to get IPL betting ID in India online in minutes. Radhey Book shares step by step sign up, how to get IPL betting ID number and secure deposits on WhatsApp.')
@section('meta_keywords', $meta_keywords ?? 'how to get IPL betting ID, how to get IPL betting ID in india, how to get IPL betting ID online, how to get IPL betting ID number, how to get IPL betting ID cricket online, IPL betting id')

@section('content')

@php
    $waLink = 'https://linktr.ee/radheybook';
@endphp

{{-- HERO --}}
<section class="hero-section" id="hero" style="background: url('{{ asset('images/Artboard 2 radhe book banner.png') }}') center/cover no-repeat;">
    <div class="hero-overlay" style="background: rgba(0,0,0,0.55);"></div>
    <div class="hero-content container">
        <div class="hero-badge"><span class="badge-pulse"></span> {!! $page->section('hero_badge', 'Step By Step IPL Betting ID Guide') !!}</div>
        <h1 class="hero-title">{!! $page->section('hero_title', '<span class="text-gold">How to Get IPL Betting ID</span> Online in India') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'A simple and quick guide on how to get IPL betting ID in India. Get your account within minutes on WhatsApp with Radhey Book and start betting on every IPL match.') !!}</p>
        <div class="hero-cta"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('hero_btn_text', 'Get My IPL Betting ID Now') !!}</a></div>
    </div>
</section>

{{-- INTRO --}}
<section class="section" id="intro">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('intro_title', '<span class="text-gold">How to Get IPL Betting ID</span> with Radhey Book') !!}</h2>
            <p class="section-subtitle">{!! $page->section('intro_subtitle', 'Your complete guide to getting an IPL Betting ID online in minutes') !!}</p>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('intro_text_1', 'Every cricket fan in India wants to enjoy IPL season with real money betting and the first question that comes to mind is how to get IPL betting ID quickly and safely. Radhey Book makes this process very easy. With our simple WhatsApp process you can get your account ready within 2 to 5 minutes. There is no long form, no document upload and no app download.') !!}</p>
                    <p>{!! $page->section('intro_text_2', 'Whether you are new to cricket betting or you have been looking for a better provider, we will show you exactly how it works. Radhey Book has been trusted by thousands of users across India for IPL, T20 World Cup, BBL, PSL and international matches. Every account comes with secure payments, the best odds and 24/7 support so you can focus on the cricket and enjoy every match.') !!}</p>
                </div>
            </div>
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/virat.jpg') }}" alt="How to Get IPL Betting ID" style="width:100%;border-radius:16px;" onerror="this.src='{{ asset('images/cricket.png') }}'">
            </div>
        </div>
    </div>
</section>

{{-- STEPS --}}
<section class="section section-alt" id="steps">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('steps_title', '<span class="text-gold">How to Get IPL Betting ID</span> in 5 Simple Steps') !!}</h2>
            <p class="section-subtitle">{!! $page->section('steps_subtitle', 'Follow these steps to get your IPL Betting ID online in minutes') !!}</p>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(250px,1fr));">
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">1</span></div><h3>{!! $page->section('step_1_title', 'Click on WhatsApp') !!}</h3><p>{!! $page->section('step_1_text', 'Click the WhatsApp button on this page to directly connect with our team for your IPL betting ID.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">2</span></div><h3>{!! $page->section('step_2_title', 'Send Your Request') !!}</h3><p>{!! $page->section('step_2_text', 'Send a simple message saying Hi I want an IPL Betting ID and our team will respond within seconds.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">3</span></div><h3>{!! $page->section('step_3_title', 'Share Details and Deposit') !!}</h3><p>{!! $page->section('step_3_text', 'Share your name and contact number then make your first deposit using UPI, Paytm, PhonePe or bank transfer.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">4</span></div><h3>{!! $page->section('step_4_title', 'Receive Your ID') !!}</h3><p>{!! $page->section('step_4_text', 'Within 2 to 5 minutes your ID and login credentials will be shared with you. You can start betting.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">5</span></div><h3>{!! $page->section('step_5_title', 'Start IPL Betting') !!}</h3><p>{!! $page->section('step_5_text', 'Use your login credentials to access the platform and start placing bets on every IPL match live.') !!}</p></div>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('steps_btn_text', 'Start My IPL Betting ID Now') !!}</a></div>
    </div>
</section>

{{-- HOW TO GET IN INDIA --}}
<section class="section" id="in-india">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('india_title', '<span class="text-gold">How to Get IPL Betting ID in India</span>') !!}</h2>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/T-20 World Cup.png') }}" alt="How to Get IPL Betting ID in India" style="width:100%;border-radius:16px;" onerror="this.src='{{ asset('images/cricket.png') }}'">
            </div>
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('india_text_1', 'Many users want to know how to get IPL betting ID in india without any confusion. The answer is very simple. All you need is a smartphone with WhatsApp and a valid Indian mobile number. You do not need a passport, PAN card or any long verification. Even first time users can complete the process in just a few minutes.') !!}</p>
                    <p>{!! $page->section('india_text_2', 'Once you message our team and complete your deposit, your account is activated. You will receive your username and password on WhatsApp. You can then log in from any device and start betting on IPL matches, fantasy leagues, live in play markets and more. The whole process is designed for Indian users which is why Radhey Book is trusted across the country.') !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- HOW TO GET ONLINE --}}
<section class="section section-alt" id="online">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('online_title', '<span class="text-gold">How to Get IPL Betting ID Online</span>') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('online_text_1', 'Learning how to get IPL betting ID online has never been easier. We have moved the entire sign up process to WhatsApp which means you can complete everything from your phone. There is no website form to fill and no identity upload required. You simply chat with our team, share your basic details and your account is live.') !!}</p>
            <p>{!! $page->section('online_text_2', 'For cricket lovers across India, this is the fastest way to get started. Within minutes you have a full account that works on all devices, gives you access to every IPL market and lets you deposit or withdraw money using UPI, Paytm, PhonePe and bank transfer. No other provider in India makes it this simple.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('online_btn_text', 'Get My IPL Betting ID Online') !!}</a></div>
    </div>
</section>

{{-- ID NUMBER --}}
<section class="section" id="id-number">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('number_title', '<span class="text-gold">How to Get IPL Betting ID Number</span>') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('number_text', 'Many users ask how to get IPL betting ID number meaning the trusted contact number they can call or message to request an IPL betting ID. With Radhey Book it is very simple. Our official WhatsApp number is the fastest way to do exactly that. Save the number from this page, send a quick message, and our team will guide you through every step from sign up to deposit. The same number is available 24/7 during IPL season, weekends and late night matches so you never miss the action. Reach out anytime for sign up help, login support, deposits, withdrawals or any account related query.') !!}</p>
        </div>
    </div>
</section>

{{-- WHY CHOOSE --}}
<section class="section" id="why-choose" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('why_title', 'Why Choose Radhey Book for Your <span class="text-gold">IPL Betting ID</span>?') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3>{!! $page->section('why_1_title', 'Instant Activation') !!}</h3><p>{!! $page->section('why_1_text', 'Your IPL Betting ID is activated in 2 to 5 minutes. No waiting so you never miss a match.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>{!! $page->section('why_2_title', 'Fully Verified and Safe') !!}</h3><p>{!! $page->section('why_2_text', 'Every account is fully verified with secure encryption to keep your personal and financial data protected.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><h3>{!! $page->section('why_3_title', 'Best IPL Odds') !!}</h3><p>{!! $page->section('why_3_text', 'We offer the best IPL odds in India so you always get great value on every bet you place.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div><h3>{!! $page->section('why_4_title', 'WhatsApp Sign Up') !!}</h3><p>{!! $page->section('why_4_text', 'Complete the entire sign up through WhatsApp. No forms, no app downloads. Just a simple chat.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div><h3>{!! $page->section('why_5_title', 'Fast Withdrawals') !!}</h3><p>{!! $page->section('why_5_text', 'Withdraw winnings within 5 minutes to your bank account via UPI, Paytm, PhonePe or bank transfer.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div><h3>{!! $page->section('why_6_title', '24/7 Support') !!}</h3><p>{!! $page->section('why_6_text', 'Our team is available round the clock via WhatsApp and phone to help you with your account anytime.') !!}</p></div>
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
        <div class="section-header"><h2 class="section-title">{!! $page->section('cta_title', 'Ready to Get Your <span class="text-gold">IPL Betting ID</span>?') !!}</h2></div>
        <div class="content-block" style="max-width:900px;margin:0 auto;text-align:center;">
            <p>{!! $page->section('cta_text', 'Now that you know the process, do not wait any longer. Join thousands of happy users who trust Radhey Book for their IPL betting. One simple WhatsApp message is all it takes to get your account today with instant activation and full 24/7 support.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('cta_btn_text', 'Get My IPL Betting ID Now') !!}</a></div>
    </div>
</section>

{{-- FAQ --}}
<section class="section" id="faq">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('faq_title', 'Frequently Asked <span class="text-gold">Questions</span>') !!}</h2></div>
        <div class="faq-list" style="max-width:800px;margin:0 auto;">
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_1_q', 'How to get IPL betting ID in just a few minutes?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_1_a', 'Click the WhatsApp button, send your request, share your details and make a small deposit. Your account is live within 2 to 5 minutes.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_2_q', 'How to get IPL betting ID in india without documents?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_2_a', 'The process with Radhey Book does not require any document uploads. You only need a working Indian mobile number and WhatsApp to get started.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_3_q', 'How to get IPL betting ID online using WhatsApp?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_3_a', 'Everything is done on WhatsApp. You chat with our team, confirm your details and pay. You never need to fill any website form.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_4_q', 'How to get IPL betting ID number for support?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_4_a', 'Our official WhatsApp number on this page is the fastest way to get an IPL betting ID and any related help. Save the number, send a message and our team will respond within seconds, 24/7.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_5_q', 'How to get IPL betting ID cricket online in India?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_5_a', 'The process with Radhey Book takes less than 5 minutes. You send a WhatsApp message and our team guides you through every step.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_6_q', 'Is my IPL Betting ID safe with Radhey Book?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_6_a', 'Yes. Every account from Radhey Book is backed by SSL encryption and secure payment gateways so your data and funds are fully protected at all times.') !!}</p></div></div>
        </div>
    </div>
</section>

@endsection
