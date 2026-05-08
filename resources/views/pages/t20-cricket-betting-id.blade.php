@extends('layouts.app')

@section('meta_title', $meta_title ?? 'T20 Cricket Betting ID. Get Free T20 Cricket Betting ID in India. Radhey Book')
@section('meta_description', $meta_description ?? 'Get your T20 cricket betting ID instantly via WhatsApp. Free T20 cricket betting ID from trusted T20 cricket betting ID providers in India with 24/7 support.')
@section('meta_keywords', $meta_keywords ?? 't20 cricket betting ID, t20 cricket betting ID number, t20 cricket betting ID india, t20 betting ID number, t20 cricket betting ID free, t20 cricket betting ID providers, instant cricket ID, whatsapp betting ID, betting ID india')

@section('content')

@php
    $waLink = 'https://linktr.ee/radheybook';
@endphp

{{-- HERO --}}
<section class="hero-section" id="hero" style="background: url('{{ asset('images/Artboard 2 radhe book banner.png') }}') center/cover no-repeat;">
    <div class="hero-overlay" style="background: rgba(0,0,0,0.55);"></div>
    <div class="hero-content container">
        <div class="hero-badge"><span class="badge-pulse"></span> {!! $page->section('hero_badge', 'India\'s Trusted T20 Cricket Betting Platform') !!}</div>
        <h1 class="hero-title">{!! $page->section('hero_title', 'Get Your <span class="text-gold">T20 Cricket Betting ID</span> Instantly with Radhey Book') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'Radhey Book is among the best T20 cricket betting ID providers in India. Get your free T20 cricket betting ID on WhatsApp with instant activation, live odds and 24/7 support.') !!}</p>
        <div class="hero-cta"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('hero_btn_text', 'Get Your Free T20 Cricket Betting ID') !!}</a></div>
    </div>
</section>

{{-- INTRO --}}
<section class="section" id="intro">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('intro_title', '<span class="text-gold">T20 Cricket Betting ID</span> in India') !!}</h2>
            <p class="section-subtitle">{!! $page->section('intro_subtitle', 'Get Your T20 Cricket Betting ID Today and Bet on Every T20 Match') !!}</p>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('intro_text_1', 'T20 cricket has changed the way fans enjoy the game forever. With fast paced action, big sixes and exciting finishes, every match keeps you on the edge of your seat. To make every match even more thrilling, you need a verified t20 cricket betting ID from a trusted provider. Radhey Book gives you instant access to all T20 cricket matches around the world with live odds, session betting and ball by ball markets. Whether it is the IPL, T20 World Cup, Big Bash or The Hundred, your t20 cricket betting ID covers everything.') !!}</p>
                    <p>{!! $page->section('intro_text_2', 'Looking for trusted t20 cricket betting ID providers? Radhey Book is one of the most trusted names in India with over 7 years of experience and millions of satisfied users. We make the entire process simple. Send us a message on WhatsApp, share your details, make your first deposit and your t20 cricket betting ID india account is activated within minutes. The best part is that registration is completely free which means you can get a t20 cricket betting ID free with zero charges.') !!}</p>
                </div>
            </div>
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/TENNIS FOOTBALL AVIATOR/cricket_4.png') }}" alt="T20 Cricket Betting ID" style="width:100%;border-radius:16px;">
            </div>
        </div>
    </div>
</section>

{{-- WHAT IS --}}
<section class="section section-alt" id="what-is">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('what_is_title', 'What is a <span class="text-gold">T20 Cricket Betting ID</span>?') !!}</h2>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/cricket.png') }}" alt="T20 Cricket Betting" style="width:100%;border-radius:16px;">
            </div>
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('what_is_text_1', 'A t20 cricket betting ID is your personal account that gives you access to online betting platforms where you can place bets on all T20 matches worldwide. Once your account is created, your login details are shared with you on WhatsApp so you can manage funds, place bets and withdraw winnings safely. The t20 cricket betting ID number is the dedicated customer care contact you can call or WhatsApp anytime for help with your account. Many users in India save the same support contact as their t20 betting ID number — one number covers help for all formats of cricket.') !!}</p>
                    <p>{!! $page->section('what_is_text_2', 'With your t20 cricket betting ID india account from Radhey Book, you get access to dozens of betting markets for every T20 match. You can bet on match winners, top batsmen, top bowlers, session runs, fancy markets, live ball by ball odds and much more. Your account stays active throughout the year so you never miss a single T20 game.') !!}</p>
                </div>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('what_is_btn_text', 'Get Your T20 Cricket Betting ID Today') !!}</a></div>
    </div>
</section>

{{-- T20 BETTING ID FREE --}}
<section class="section" id="free">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('free_title', 'Get Your <span class="text-gold">T20 Cricket Betting ID Free</span> from Radhey Book') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('free_text_1', 'Many users wonder if they can get a t20 cricket betting ID free without paying any registration charges. The answer is yes. Radhey Book offers free T20 cricket betting ID registration with absolutely no fees. You only pay for your betting deposits and that money goes directly into your account balance. There are no hidden charges and no setup fees of any kind. This is what makes us one of the most trusted t20 cricket betting ID providers in India.') !!}</p>
            <p>{!! $page->section('free_text_2', 'When you choose Radhey Book for your t20 cricket betting ID, you get instant activation, the best odds in the market and 24/7 customer support throughout the entire T20 season. Your money stays safe with verified accounts, secure encryption and trusted payment methods. Getting started is as simple as sending one WhatsApp message.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('free_btn_text', 'Get Your Free T20 Cricket Betting ID') !!}</a></div>
    </div>
</section>

{{-- WHY CHOOSE --}}
<section class="section" id="why-choose" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('why_title', 'Why Radhey Book is Among the Best <span class="text-gold">T20 Cricket Betting ID Providers</span>?') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3>{!! $page->section('why_1_title', 'Instant Activation') !!}</h3><p>{!! $page->section('why_1_text', 'Your T20 cricket betting ID is activated within 2 to 5 minutes after payment. No waiting so you can bet on the very next T20 match.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>{!! $page->section('why_2_title', 'Verified and Secure') !!}</h3><p>{!! $page->section('why_2_text', 'Every account we provide is fully verified with secure encryption to protect your personal and financial data at all times.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><h3>{!! $page->section('why_3_title', 'Best T20 Odds') !!}</h3><p>{!! $page->section('why_3_text', 'We offer the most competitive odds for every T20 match. Whether it is IPL, World Cup or Big Bash, you always get maximum value.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div><h3>{!! $page->section('why_4_title', 'Free Registration') !!}</h3><p>{!! $page->section('why_4_text', 'Get your T20 cricket betting ID free with zero registration fees. You only pay for your actual betting deposits, nothing else.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div><h3>{!! $page->section('why_5_title', 'Fast Withdrawals') !!}</h3><p>{!! $page->section('why_5_text', 'Withdraw your T20 winnings within 5 minutes directly to your bank account via UPI, Paytm, PhonePe or bank transfer.') !!}</p></div>
            <div class="feature-card"><div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div><h3>{!! $page->section('why_6_title', '24/7 Support') !!}</h3><p>{!! $page->section('why_6_text', 'Our team is available round the clock via WhatsApp and phone throughout every T20 season for any help you need.') !!}</p></div>
        </div>
    </div>
</section>

{{-- HOW TO GET --}}
<section class="section" id="how-to-get">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('how_title', 'How to Get Your <span class="text-gold">T20 Cricket Betting ID</span> on WhatsApp?') !!}</h2>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(250px,1fr));">
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">1</span></div><h3>{!! $page->section('how_step_1_title', 'Click on WhatsApp') !!}</h3><p>{!! $page->section('how_step_1_text', 'Click the WhatsApp button on this page to connect directly with our support team.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">2</span></div><h3>{!! $page->section('how_step_2_title', 'Send Your Request') !!}</h3><p>{!! $page->section('how_step_2_text', 'Send a simple message saying Hi I want a T20 Cricket Betting ID and our team will respond within seconds.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">3</span></div><h3>{!! $page->section('how_step_3_title', 'Share Details and Deposit') !!}</h3><p>{!! $page->section('how_step_3_text', 'Share your name and contact number then make your first deposit using UPI, Paytm, PhonePe or bank transfer.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">4</span></div><h3>{!! $page->section('how_step_4_title', 'Receive Your ID') !!}</h3><p>{!! $page->section('how_step_4_text', 'Within 2 to 5 minutes your ID and login credentials will be shared with you. You can start betting.') !!}</p></div>
            <div class="feature-card" style="text-align:center;"><div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">5</span></div><h3>{!! $page->section('how_step_5_title', 'Login and Start Betting') !!}</h3><p>{!! $page->section('how_step_5_text', 'Log in and start placing bets on your favourite T20 matches and games right away.') !!}</p></div>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('how_btn_text', 'Get Your T20 Cricket Betting ID Now') !!}</a></div>
    </div>
</section>

{{-- TOURNAMENTS --}}
<section class="section" id="tournaments" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('tournament_title', 'Bet on Major T20 Tournaments with Your <span class="text-gold">T20 Cricket Betting ID</span>') !!}</h2>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(300px,1fr));">
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;"><img src="{{ asset('images/T-20 World Cup.png') }}" alt="T20 World Cup" style="width:100%;height:100%;object-fit:cover;"></div>
                <div style="padding:24px 30px;"><h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_1_title', 'T20 World Cup') !!}</h3><p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_1_text', 'The biggest T20 tournament on the planet. Use your t20 cricket betting ID to bet on match winners, top batsmen and live ball by ball markets.') !!}</p></div>
            </a>
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;"><img src="{{ asset('images/the hundred.png') }}" alt="The Hundred" style="width:100%;height:100%;object-fit:cover;"></div>
                <div style="padding:24px 30px;"><h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_2_title', 'The Hundred and Big Bash') !!}</h3><p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_2_text', 'Fast paced T20 formats from England and Australia with unique betting markets. Bet on team performance and dynamic match outcomes.') !!}</p></div>
            </a>
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;"><img src="{{ asset('images/cpl.png') }}" alt="CPL" style="width:100%;height:100%;object-fit:cover;"></div>
                <div style="padding:24px 30px;"><h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_3_title', 'IPL and CPL') !!}</h3><p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_3_text', 'The two biggest T20 leagues in cricket. Your instant cricket ID gives you full access to every match with live markets and session bets.') !!}</p></div>
            </a>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('tournament_btn_text', 'Get Your T20 Cricket Betting ID Now') !!}</a></div>
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
        <div class="section-header"><h2 class="section-title">{!! $page->section('security_title', 'Is Your <span class="text-gold">T20 Cricket Betting ID</span> Safe?') !!}</h2></div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('security_text', 'Yes. Every t20 cricket betting ID we provide is backed by SSL encryption ensuring your personal and financial data are fully protected. We use secure payment gateways and never store sensitive banking details. Always reach us through our official WhatsApp number and verified channels. By following these simple precautions you enjoy a completely safe betting experience with your whatsapp betting ID from Radhey Book.') !!}</p>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="section" id="cta">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('cta_title', 'Ready to Get Your <span class="text-gold">T20 Cricket Betting ID</span> Today?') !!}</h2></div>
        <div class="content-block" style="max-width:900px;margin:0 auto;text-align:center;">
            <p>{!! $page->section('cta_text', 'Join thousands of cricket fans who trust Radhey Book as one of the best t20 cricket betting ID providers in India. Whether you want to bet on T20 World Cup, IPL, Big Bash or any other T20 league, your t20 cricket betting ID india account gives you complete access. Get your t20 cricket betting ID free today with instant activation and 24/7 WhatsApp support.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;"><a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('cta_btn_text', 'Get Your T20 Cricket Betting ID Now') !!}</a></div>
    </div>
</section>

{{-- FAQ --}}
<section class="section" id="faq" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header"><h2 class="section-title">{!! $page->section('faq_title', 'Frequently Asked <span class="text-gold">Questions</span>') !!}</h2></div>
        <div class="faq-list" style="max-width:800px;margin:0 auto;">
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_1_q', 'What is a T20 cricket betting ID?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_1_a', 'A t20 cricket betting ID is your personal account for betting on all T20 cricket matches. It lets you log in, manage funds and place bets on every T20 game throughout the season.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_2_q', 'Can I really get a T20 cricket betting ID free?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_2_a', 'Yes, your t20 cricket betting ID free registration is completely free at Radhey Book. There are zero charges. You only pay for your betting deposits and that goes into your account balance.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_3_q', 'How can I get a T20 cricket betting ID india?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_3_a', 'Click the WhatsApp button on this page, send your request, share your details, make your deposit and your t20 cricket betting ID india account is activated within minutes.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_4_q', 'How do I contact T20 cricket betting ID number?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_4_a', 'To contact the T20 cricket betting ID number please click on the WhatsApp button available throughout the website.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_5_q', 'Can I use the T20 betting ID number for help with other cricket formats too?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_5_a', 'Yes, the t20 betting ID number is the same Radhey Book customer care contact for all cricket formats. Reach out for help with ODIs, Test matches, T20 leagues or any other cricket betting query — one number covers everything.') !!}</p></div></div>
            <div class="faq-item"><button class="faq-question">{!! $page->section('faq_6_q', 'Who are the best t20 cricket betting ID providers in India?') !!}<span class="faq-toggle">+</span></button><div class="faq-answer"><p>{!! $page->section('faq_6_a', 'Radhey Book is widely trusted as one of the best t20 cricket betting ID providers in India with over 7 years of experience, instant activation, free registration and 24/7 WhatsApp support throughout every season.') !!}</p></div></div>
        </div>
    </div>
</section>

@endsection
