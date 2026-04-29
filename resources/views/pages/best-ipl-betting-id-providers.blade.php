@extends('layouts.app')

@section('meta_title', $meta_title ?? 'Best IPL Betting ID Providers in India. Get Yours Today. Radhey Book')
@section('meta_description', $meta_description ?? 'Looking for the best IPL betting ID providers in India? Radhey Book offers instant IPL betting ID with WhatsApp support and 24/7 service across Delhi and India.')
@section('meta_keywords', $meta_keywords ?? 'best IPL betting ID providers, best IPL betting ID providers in delhi, best IPL betting ID providers in india, best IPL betting ID providers online, instant cricket ID, whatsapp betting ID, betting ID india')

@section('content')

@php
    $waLink = 'https://wa.me/' . ($siteSettings['whatsapp_number'] ?? '919876543210') . '?text=Hi%20I%20want%20an%20IPL%20Betting%20ID';
@endphp

{{-- HERO --}}
<section class="hero-section" id="hero" style="background: url('{{ asset('images/all banner/ipl banner.png') }}') center/cover no-repeat;">
    <div class="hero-overlay" style="background: rgba(0,0,0,0.55);"></div>
    <div class="hero-content container">
        <div class="hero-badge"><span class="badge-pulse"></span> {!! $page->section('hero_badge', 'India\'s Most Trusted IPL ID Provider') !!}</div>
        <h1 class="hero-title">{!! $page->section('hero_title', 'Best <span class="text-gold">IPL Betting ID Providers</span> in India') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'Radhey Book is rated among the best IPL betting ID providers in India. Get your IPL betting ID instantly on WhatsApp with live odds, fast withdrawals and 24/7 support across every city.') !!}</p>
        <div class="hero-cta"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('hero_btn_text', 'Get Your IPL Betting ID Now') !!}</a></div>
    </div>
</section>

{{-- INTRO --}}
<section class="section" id="intro">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('intro_title', 'Find the <span class="text-gold">Best IPL Betting ID Providers</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('intro_subtitle', 'Why Radhey Book is the Top Choice for IPL Betting in India') !!}</p>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('intro_text_1', 'When the IPL season starts, every cricket fan wants to be a part of the action. The biggest question for users in India is which platform to trust. There are many websites online but only a handful qualify as the best IPL betting ID providers. A trusted provider gives you fast activation, secure transactions, the best odds and reliable customer support throughout the entire season. Radhey Book has earned its place as one of the best IPL betting ID providers in India with over 7 years of experience and millions of satisfied users.') !!}</p>
                    <p>{!! $page->section('intro_text_2', 'Whether you are looking for the best IPL betting ID providers for cricket, casino or live exchange betting, Radhey Book covers everything in one single account. Our process is simple. Send us a message on WhatsApp, share your basic details, make your first deposit and your account is activated within minutes. This is exactly why users across the country call us the best IPL betting ID providers in india every season.') !!}</p>
                </div>
            </div>
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/TENNIS FOOTBALL AVIATOR/cricket_5.png') }}" alt="Best IPL Betting ID Providers" style="width:100%;border-radius:16px;">
            </div>
        </div>
    </div>
</section>

{{-- WHY RADHEY BOOK --}}
<section class="section section-alt" id="why-best">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('why_title', 'What Makes Radhey Book One of the <span class="text-gold">Best IPL Betting ID Providers</span>?') !!}</h2>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/TENNIS FOOTBALL AVIATOR/cricket_6.png') }}" alt="Trusted IPL ID Provider" style="width:100%;border-radius:16px;">
            </div>
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('why_text_1', 'Choosing from the best IPL betting ID providers means looking for trust, speed and consistent service. Radhey Book ticks every box. We have been helping Indian cricket fans get their IDs for over 7 years. Our IPL betting platform offers the best odds in the market on every single match, fast deposits and lightning quick withdrawals. Users from across the country choose us because we deliver what we promise every single time.') !!}</p>
                    <p>{!! $page->section('why_text_2', 'Whether you are searching for the best IPL betting ID providers in delhi or any other city, Radhey Book gives you the same trusted service everywhere. There is no minimum location requirement. As long as you have WhatsApp on your phone, you can get your IPL betting ID in minutes. This city wide accessibility is one of the reasons we are widely known among the best IPL betting ID providers online.') !!}</p>
                </div>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('why_btn_text', 'Get Your IPL Betting ID Today') !!}</a></div>
    </div>
</section>

{{-- FEATURES --}}
<section class="section" id="features">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('features_title', 'Features That Make Us the <span class="text-gold">Best IPL Betting ID Providers</span>') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div>
                <h3>{!! $page->section('feature_1_title', 'Instant Activation') !!}</h3>
                <p>{!! $page->section('feature_1_text', 'Your IPL betting ID is activated within 2 to 5 minutes after payment. No long forms and no waiting. Start betting on the next IPL match right away.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
                <h3>{!! $page->section('feature_2_title', 'Best IPL Odds') !!}</h3>
                <p>{!! $page->section('feature_2_text', 'We offer the most competitive odds for every IPL match. From match winners to session runs, you always get maximum value with us.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3>{!! $page->section('feature_3_title', '100% Verified and Secure') !!}</h3>
                <p>{!! $page->section('feature_3_text', 'Every account we provide is fully verified and protected with SSL encryption. Your data and funds are safe with the best IPL betting ID providers in India.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
                <h3>{!! $page->section('feature_4_title', 'Fast Withdrawals') !!}</h3>
                <p>{!! $page->section('feature_4_text', 'Won big on the last IPL match? Withdraw your winnings within 5 minutes directly to your bank account via UPI, Paytm, PhonePe or bank transfer.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div>
                <h3>{!! $page->section('feature_5_title', 'WhatsApp Registration') !!}</h3>
                <p>{!! $page->section('feature_5_text', 'No forms and no app downloads. Just message us on WhatsApp and our team handles everything from start to finish.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div>
                <h3>{!! $page->section('feature_6_title', '24/7 Support') !!}</h3>
                <p>{!! $page->section('feature_6_text', 'Our team is available round the clock through WhatsApp and phone throughout the entire IPL season for any help you may need.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- HOW TO GET --}}
<section class="section" id="how-to-get" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('how_title', 'How to Get an ID from the <span class="text-gold">Best IPL Betting ID Providers</span>?') !!}</h2>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(250px,1fr));">
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">1</span></div><h3>{!! $page->section('how_step_1_title', 'Click on WhatsApp') !!}</h3><p>{!! $page->section('how_step_1_text', 'Click the WhatsApp button on this page to connect directly with our support team.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">2</span></div><h3>{!! $page->section('how_step_2_title', 'Send Your Request') !!}</h3><p>{!! $page->section('how_step_2_text', 'Send a simple message saying Hi I want an IPL Betting ID and our team will respond within seconds.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">3</span></div><h3>{!! $page->section('how_step_3_title', 'Share Details and Deposit') !!}</h3><p>{!! $page->section('how_step_3_text', 'Share your name and contact number then make your first deposit using UPI, Paytm, PhonePe or bank transfer.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">4</span></div><h3>{!! $page->section('how_step_4_title', 'Receive Your ID') !!}</h3><p>{!! $page->section('how_step_4_text', 'Within 2 to 5 minutes your ID and login credentials will be shared with you. You can start betting.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">5</span></div><h3>{!! $page->section('how_step_5_title', 'Login and Start Betting') !!}</h3><p>{!! $page->section('how_step_5_text', 'Log in and start placing bets on your favourite IPL matches and games right away.') !!}</p></div>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('how_btn_text', 'Get Your IPL Betting ID on WhatsApp Now') !!}</a></div>
    </div>
</section>

{{-- DELHI SECTION --}}
<section class="section" id="delhi">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('delhi_title', '<span class="text-gold">Best IPL Betting ID Providers in Delhi</span>') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('delhi_text_1', 'Cricket fans in Delhi take their IPL very seriously. Whether you support Delhi Capitals or your favourite players from other teams, having access to the best IPL betting ID providers in delhi makes the season even more exciting. Radhey Book has thousands of users from Delhi who trust us every season for their IPL betting accounts. Our service is fast, secure and works perfectly for users across all parts of the city.') !!}</p>
            <p>{!! $page->section('delhi_text_2', 'You do not need to visit any office or meet anyone in person. The entire process happens through WhatsApp from the comfort of your home or office. This is what makes us stand out among the best IPL betting ID providers serving Delhi users. Whether you are in Connaught Place, Dwarka, Gurgaon, Noida or any other area, we deliver the same fast and reliable service to everyone.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('delhi_btn_text', 'Get Your Delhi IPL ID Now') !!}</a></div>
    </div>
</section>

{{-- ONLINE SECTION --}}
<section class="section" id="online" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('online_title', 'Why We Are Among the <span class="text-gold">Best IPL Betting ID Providers Online</span>?') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('online_text_1', 'The internet is full of websites claiming to offer IPL betting accounts but very few qualify as the best IPL betting ID providers online. What sets Radhey Book apart is our complete online presence and reliability. Every step of getting your IPL ID happens online through WhatsApp. There are no offline visits required and no paperwork to fill. This makes us the perfect choice for users who want everything done quickly and digitally.') !!}</p>
            <p>{!! $page->section('online_text_2', 'Our platform is mobile friendly so you can manage your account, place bets and request withdrawals all from your phone. With over 2 Million satisfied users and growing every season, we have built a reputation as one of the most trusted names in the industry. Whether you are betting on IPL, T20 World Cup, ODIs or domestic cricket, our service is consistent and reliable throughout the year.') !!}</p>
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

{{-- SECURITY --}}
<section class="section" id="security" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('security_title', 'Your Security is Our <span class="text-gold">Top Priority</span>') !!}</h2></div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('security_text', 'Being one of the best IPL betting ID providers means we take security very seriously. Every account we create is backed by advanced SSL encryption. We use secure payment gateways for every transaction and never store sensitive banking details. Always reach us through our official WhatsApp number and verified channels. By following these simple precautions you enjoy a completely safe IPL betting experience throughout the season with your whatsapp betting ID from Radhey Book.') !!}</p>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="section" id="cta">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('cta_title', 'Ready to Choose the <span class="text-gold">Best IPL Betting ID Providers</span>?') !!}</h2></div>
        <div class="content-block" style="max-width:900px;margin:0 auto;text-align:center;">
            <p>{!! $page->section('cta_text', 'The IPL season does not wait for anyone. Join over 2 Million users who trust Radhey Book as one of the best IPL betting ID providers in india. Whether you are looking for the best IPL betting ID providers in delhi or any other city, we deliver the same quality service everywhere. Get your IPL betting ID today with instant activation, zero registration fees and 24/7 WhatsApp support. One message is all it takes to start your betting ID india journey.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('cta_btn_text', 'Get Your IPL Betting ID Now') !!}</a></div>
    </div>
</section>

{{-- FAQ --}}
<section class="section" id="faq" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('faq_title', 'Frequently Asked <span class="text-gold">Questions</span>') !!}</h2></div>
        <div class="faq-list" style="max-width:800px;margin:0 auto;">
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_1_q', 'Who are the best IPL betting ID providers in India?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_1_a', 'Radhey Book is widely regarded as one of the best IPL betting ID providers in india with over 7 years of experience, instant activation, the best odds and 24/7 WhatsApp support throughout every IPL season.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_2_q', 'How do I find the best IPL betting ID providers in delhi?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_2_a', 'Radhey Book serves users across Delhi as one of the best IPL betting ID providers in delhi. Simply contact us on WhatsApp and your account is activated within minutes regardless of which area of Delhi you are in.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_3_q', 'Are there really best IPL betting ID providers online?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_3_a', 'Yes, Radhey Book is one of the most trusted best IPL betting ID providers online. The entire process from registration to withdrawal happens through WhatsApp making it convenient and fast for everyone.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_4_q', 'How quickly can I get my IPL betting ID?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_4_a', 'Your IPL betting ID is activated within 2 to 5 minutes after payment confirmation. We are known for the fastest activation among best IPL betting ID providers in the market.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_5_q', 'Is my account safe with the best IPL betting ID providers?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_5_a', 'Absolutely. Every account from Radhey Book is fully verified and protected with SSL encryption. Your personal and financial data are safe at all times with the best IPL betting ID providers.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_6_q', 'Can I bet on cricket year round with this ID?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_6_a', 'Yes, your IPL betting ID also works as an instant cricket ID for T20 World Cup, ODIs, Test matches, Big Bash, CPL and all other cricket tournaments throughout the year.') !!}</p></div></div>
        </div>
    </div>
</section>

@endsection
