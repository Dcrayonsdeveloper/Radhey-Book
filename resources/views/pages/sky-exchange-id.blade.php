@extends('layouts.app')

@section('meta_title', $meta_title ?? 'Sky Exchange ID. Sign Up and Get Instant Sky Exchange ID. Radhey Book')
@section('meta_description', $meta_description ?? 'Get your Sky Exchange ID instantly via WhatsApp from Radhey Book. Sky Exchange ID sign up, contact number and betting account in India with 24/7 support.')
@section('meta_keywords', $meta_keywords ?? 'sky exchange ID, sky exchange ID contact number, sky exchange ID contact number india, sky exchange ID sign up, sky exchange betting ID, sky exchange betting ID number, sky exchange betting ID india, sky exchange betting ID login, sky exchange ID provider')

@section('content')

@php
    $waLink = 'https://linktr.ee/radheybook';
@endphp

{{-- HERO --}}
<section class="hero-section" id="hero" style="background: url('{{ asset('images/TENNIS FOOTBALL AVIATOR/aviator_banner_2.png') }}') center/cover no-repeat;">
    <div class="hero-overlay" style="background: rgba(0,0,0,0.55);"></div>
    <div class="hero-content container">
        <div class="hero-badge"><span class="badge-pulse"></span> {!! $page->section('hero_badge', 'Trusted Sky Exchange ID Provider') !!}</div>
        <h1 class="hero-title">{!! $page->section('hero_title', 'Get Your <span class="text-gold">Sky Exchange ID</span> Instantly on WhatsApp with Radhey Book') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'Radhey Book is the fastest way to complete your Sky Exchange ID sign up in India. Get your account in minutes with instant activation, secure transactions and 24/7 support.') !!}</p>
        <div class="hero-cta"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('hero_btn_text', 'Get Your Sky Exchange ID Now') !!}</a></div>
    </div>
</section>

{{-- INTRO --}}
<section class="section" id="intro">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('intro_title', '<span class="text-gold">Sky Exchange ID</span> in India') !!}</h2>
            <p class="section-subtitle">{!! $page->section('intro_subtitle', 'Get Your Sky Exchange ID Today and Start Betting on Cricket, Casino and More') !!}</p>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('intro_text_1', 'If you are looking for a fast and reliable way to get your sky exchange ID then Radhey Book is the right place for you. Sky Exchange is one of the most popular betting platforms in India and lakhs of users trust it for cricket betting, casino games and live sports. With your sky exchange ID from Radhey Book you get access to all betting markets, live odds and real time updates throughout the day. The whole process is done through WhatsApp which makes the Sky Exchange ID sign up quick and easy for everyone.') !!}</p>
                    <p>{!! $page->section('intro_text_2', 'Whether you want a sky exchange betting ID for IPL, World Cup or any cricket tournament, Radhey Book gives you instant access. Simply contact us on WhatsApp, share your basic details, make your first deposit and your account is activated within minutes. There are no long forms and no apps to download. This simple approach is why thousands of cricket fans across India trust us for their sky exchange ID every season.') !!}</p>
                </div>
            </div>
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/sky exchange.png') }}" alt="Sky Exchange ID" style="width:100%;border-radius:16px;">
            </div>
        </div>
    </div>
</section>

{{-- WHAT IS --}}
<section class="section section-alt" id="what-is">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('what_is_title', 'What is a <span class="text-gold">Sky Exchange ID</span>?') !!}</h2>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/aviator.png') }}" alt="Sky Exchange Betting" style="width:100%;border-radius:16px;">
            </div>
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('what_is_text_1', 'A sky exchange ID is your personal login account that gives you access to the Sky Exchange betting platform. With this ID you can log in, deposit funds, place bets on cricket and other sports, play casino games, track your winnings and withdraw money safely. Every user needs a unique ID to access the platform and start placing bets.') !!}</p>
                    <p>{!! $page->section('what_is_text_2', 'Your sky exchange betting ID works across all betting options on the platform. You can use it for cricket betting on IPL, T20 World Cup and international matches as well as for live casino games and exchange betting. For any help with your account, the sky exchange betting ID number is the dedicated customer care contact you can call or WhatsApp 24/7. Many users keep their account active throughout the year for cricket, casino and other sports betting.') !!}</p>
                </div>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('what_is_btn_text', 'Get Your Sky Exchange ID Today') !!}</a></div>
    </div>
</section>

{{-- SKY EXCHANGE ID SIGN UP --}}
<section class="section" id="sign-up">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('signup_title', 'How to Complete Your <span class="text-gold">Sky Exchange ID Sign Up</span>?') !!}</h2>
            <p class="section-subtitle">{!! $page->section('signup_subtitle', 'The fastest way to register and get your Sky Exchange ID is through WhatsApp') !!}</p>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(250px,1fr));">
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">1</span></div><h3>{!! $page->section('how_step_1_title', 'Click on WhatsApp') !!}</h3><p>{!! $page->section('how_step_1_text', 'Click the WhatsApp button on this page to connect directly with our team for your Sky Exchange ID sign up.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">2</span></div><h3>{!! $page->section('how_step_2_title', 'Send Your Request') !!}</h3><p>{!! $page->section('how_step_2_text', 'Send a simple message saying Hi I want a Sky Exchange ID and our team will respond within seconds.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">3</span></div><h3>{!! $page->section('how_step_3_title', 'Share Details and Deposit') !!}</h3><p>{!! $page->section('how_step_3_text', 'Share your name and contact number then make your first deposit using UPI, Paytm, PhonePe or bank transfer.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">4</span></div><h3>{!! $page->section('how_step_4_title', 'Receive Your ID') !!}</h3><p>{!! $page->section('how_step_4_text', 'Within 2 to 5 minutes your ID and login credentials will be shared with you. You can start betting.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">5</span></div><h3>{!! $page->section('how_step_5_title', 'Login and Start Betting') !!}</h3><p>{!! $page->section('how_step_5_text', 'Log in and start placing bets on your favourite matches and games right away.') !!}</p></div>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('how_btn_text', 'Start Your Sky Exchange ID Sign Up Now') !!}</a></div>
    </div>
</section>

{{-- WHY CHOOSE --}}
<section class="section" id="why-choose" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('why_title', 'Why Choose Radhey Book for Your <span class="text-gold">Sky Exchange ID</span>?') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3>{!! $page->section('why_1_title', 'Instant Activation') !!}</h3><p>{!! $page->section('why_1_text', 'Your Sky Exchange ID is activated within 2 to 5 minutes after payment. No waiting so you can start betting on the very next match.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>{!! $page->section('why_2_title', 'Verified and Secure') !!}</h3><p>{!! $page->section('why_2_text', 'Every account we provide is fully verified with secure encryption to protect your personal and financial data at all times.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><h3>{!! $page->section('why_3_title', 'Best Market Odds') !!}</h3><p>{!! $page->section('why_3_text', 'Sky Exchange offers competitive odds for every match. We ensure you always get great value on every bet you place.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div><h3>{!! $page->section('why_4_title', 'WhatsApp Sign Up') !!}</h3><p>{!! $page->section('why_4_text', 'Complete your Sky Exchange ID sign up entirely through WhatsApp. No forms, no app downloads. Just a simple chat.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div><h3>{!! $page->section('why_5_title', 'Fast Withdrawals') !!}</h3><p>{!! $page->section('why_5_text', 'Withdraw your winnings within 5 minutes directly to your bank account via UPI, Paytm, PhonePe or bank transfer.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div><h3>{!! $page->section('why_6_title', '24/7 Support') !!}</h3><p>{!! $page->section('why_6_text', 'Our team is available round the clock via WhatsApp and phone to help you with your sky exchange betting ID account anytime.') !!}</p></div>
        </div>
    </div>
</section>

{{-- CONTACT NUMBER --}}
<section class="section" id="contact-number">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('contact_title', '<span class="text-gold">Sky Exchange ID Contact Number</span> for Support') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('contact_text_1', 'Need help with your account? Our Sky Exchange ID contact number connects you directly to our support team on WhatsApp. Whether you are setting up your account, making a deposit or facing any login issue, our team is ready to help. The Sky exchange ID contact number india is available for users from every state and city across the country.') !!}</p>
            <p>{!! $page->section('contact_text_2', 'You can use the same Sky Exchange ID contact number for queries about deposits, withdrawals, account verification or general questions about betting markets. Our support team responds quickly and walks you through any process step by step. This is what makes us a top choice among Sky Exchange users in India.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('contact_btn_text', 'Contact Us Now') !!}</a></div>
    </div>
</section>

{{-- ALSO PROVIDE SKY --}}
<section class="section" id="sky" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('sky_title', 'We Also Provide <span class="text-gold">Sky Exchange Betting ID</span>') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('sky_text_1', 'Apart from Sky Exchange, Radhey Book is also a trusted sky exchange ID provider in India. If you want a sky exchange betting ID india account along with your Sky Exchange ID, we can set up both for you in one quick WhatsApp chat. The sky exchange betting ID login credentials are shared on WhatsApp once your account is activated and you can use them right away.') !!}</p>
            <p>{!! $page->section('sky_text_2', 'Many users prefer having multiple exchange accounts because each platform has its own special markets and odds. Whether you want Sky Exchange, Sky Exchange or both, Radhey Book gives you everything you need from a single trusted source.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('sky_btn_text', 'Get Both IDs Today') !!}</a></div>
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
        <div class="section-header"><h2 class="section-title">{!! $page->section('security_title', 'Is Your <span class="text-gold">Sky Exchange ID</span> Safe?') !!}</h2></div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('security_text', 'Yes. Every sky exchange ID we issue is backed by SSL encryption ensuring your personal and financial data are fully protected. We use secure payment gateways for every transaction and never store sensitive banking details. Always reach us through our official Sky Exchange ID contact number on WhatsApp and verified channels. By following these simple precautions you enjoy a completely safe betting experience.') !!}</p>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="section" id="cta">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('cta_title', 'Ready for Your <span class="text-gold">Sky Exchange ID Sign Up</span>?') !!}</h2></div>
        <div class="content-block" style="max-width:900px;margin:0 auto;text-align:center;">
            <p>{!! $page->section('cta_text', 'Join thousands of users who trust Radhey Book for their sky exchange ID. Whether you want a sky exchange betting ID for cricket, casino or live exchange markets, we have got you covered. You can also pair it with a sky exchange betting ID india account for double the action. Get your account today with instant activation and 24/7 WhatsApp support.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('cta_btn_text', 'Get Your Sky Exchange ID Now') !!}</a></div>
    </div>
</section>

{{-- FAQ --}}
<section class="section" id="faq" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('faq_title', 'Frequently Asked <span class="text-gold">Questions</span>') !!}</h2></div>
        <div class="faq-list" style="max-width:800px;margin:0 auto;">
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_1_q', 'What is a Sky Exchange ID?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_1_a', 'A sky exchange ID is your personal account for accessing the Sky Exchange betting platform. It lets you log in, manage funds, place bets on cricket and casino, and withdraw winnings securely.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_2_q', 'How do I complete my Sky Exchange ID sign up?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_2_a', 'Click the WhatsApp button on this page to start your Sky Exchange ID sign up. Send your request, share your details, make your deposit and your account is activated within minutes.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_3_q', 'How do I find the Sky Exchange ID contact number?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_3_a', 'You can reach our team through the Sky Exchange ID contact number shown on this page or via the WhatsApp button. Our support team is available 24/7 for any help you need.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_4_q', 'Is the Sky exchange ID contact number india available 24 hours?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_4_a', 'Yes, our Sky exchange ID contact number india is available round the clock for users from all parts of the country. You can call or message anytime for fast support.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_5_q', 'How do I contact the sky exchange betting ID number?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_5_a', 'The sky exchange betting ID number is the customer care contact for your account. Click the WhatsApp button on this page or save the number to reach our support team 24/7 for sign up help, deposits, withdrawals or any account related query.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_6_q', 'Can I get a Sky Exchange account along with my Sky Exchange ID?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_6_a', 'Yes, as a trusted sky exchange ID provider, we can set up your sky exchange betting ID india account along with your Sky Exchange ID. Both accounts can be created in the same WhatsApp chat.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_7_q', 'How do I access my sky exchange betting ID login?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_7_a', 'After receiving your sky exchange betting ID login credentials on WhatsApp, visit the platform, enter your username and password and start betting immediately.') !!}</p></div></div>
        </div>
    </div>
</section>

@endsection
