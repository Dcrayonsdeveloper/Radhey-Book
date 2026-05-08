@extends('layouts.app')

@section('meta_title', $meta_title ?? 'Sky Exchange ID – Get Instant Cricket ID on WhatsApp | Radhey Book')
@section('meta_description', $meta_description ?? 'Get your Sky Exchange ID instantly on WhatsApp via Radhey Book. Fast, secure, hassle-free access to cricket betting, live markets & 24/7 support.')
@section('meta_keywords', $meta_keywords ?? 'sky exchange, sky exchange ID, skyexchange, sky 99 exch, skyexchange master ID, sky exchange cricket ID, sky exchange customer care number, whatsapp betting ID, instant cricket ID, betting ID india')

@section('content')

@php
    $waLink = 'https://linktr.ee/radheybook';
@endphp

{{-- HERO SECTION --}}
<section class="hero-section" id="hero" style="background: url('{{ asset('images/TENNIS FOOTBALL AVIATOR/aviator_banner_2.png') }}') center/cover no-repeat;">
    <div class="hero-overlay" style="background: rgba(0,0,0,0.55);"></div>
    <div class="hero-content container">
        <div class="hero-badge">
            <span class="badge-pulse"></span>
            {!! $page->section('hero_badge', 'India\'s Most Popular Platform') !!}
        </div>
        <h1 class="hero-title">{!! $page->section('hero_title', 'Grab your <span class="text-gold">Sky Exchange ID</span> today – Quick & easy on WhatsApp with Radhey Book') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'Contact us on WhatsApp today and get your SkyExchange ID in minutes—fast, secure, and completely hassle-free. Kickstart your winning journey now with seamless access and instant support!') !!}</p>
        <div class="hero-cta">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">
                {!! $page->section('hero_btn_text', 'Get Your Sky Exchange ID Now') !!}
            </a>
        </div>
    </div>
</section>

{{-- INTRO BLOCK --}}
<section class="section" id="intro">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('intro_title', 'Sky Exchange ID') !!}</h2>
            <p class="section-subtitle">{!! $page->section('intro_subtitle', 'Your gateway to one of India\'s most <span class="text-gold">popular gaming platforms</span>, all in one place.') !!}</p>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('intro_text_1', 'If you are searching for a fast, simple, and reliable way to start online betting, skyexchange is one of the most preferred platforms in India. It is designed for users who want quick access to cricket betting and other sports markets without going through long and complicated signup processes. With the increasing demand for instant cricket ID, platforms like this are becoming the first choice for users who value speed and convenience.') !!}</p>
            <p>{!! $page->section('intro_text_2', 'What makes skyexchange stand out is its easy onboarding system. You don\'t need to fill long forms or wait for approvals. With the help of a whatsapp betting ID, you can get started within minutes. This method is highly popular among users looking for a smooth and hassle-free betting ID India experience. The platform focuses on providing fast access, simple navigation, and a reliable betting environment, making it suitable for both beginners and experienced users.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('intro_btn_text', 'Start Betting with Sky Exchange ID Now') !!}</a>
        </div>
    </div>
</section>

{{-- WHAT IS SKY EXCHANGE ID --}}
<section class="section section-alt" id="what-is">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('what_is_title', 'What is <span class="text-gold">Sky Exchange ID</span>?') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('what_is_text_1', 'A sky exchange ID is an individual account that enables you to log in to the betting platform and begin betting on different sporting events. It acts as your gateway to all the features available, including live betting, account balance management, and transaction history.') !!}</p>
            <p>{!! $page->section('what_is_text_2', 'After getting your sky exchange ID, you will be able to log in and explore various betting markets like cricket, football, and others. The ID assists you to control your money as well as monitor your bets and bet in real-time with updated odds. It is easy, safe and made to provide the users with an easy time betting.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('what_is_btn_text', 'Get Your Sky Exchange ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- BENEFITS --}}
<section class="section" id="benefits">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('benefits_title', 'Benefits of Betting with <span class="text-gold">Sky Exchange</span>') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                </div>
                <h3>{!! $page->section('benefit_1_title', 'Instant Access to Betting Platform') !!}</h3>
                <p>{!! $page->section('benefit_1_text', 'Quick ID production enables users to bet rapidly without wasting time, which is perfect for people who prefer fast access.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                </div>
                <h3>{!! $page->section('benefit_2_title', 'Easy to Use Interface') !!}</h3>
                <p>{!! $page->section('benefit_2_text', 'The platform is user-friendly and easy to navigate. It does not confuse its users as they can easily navigate and make bets.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg>
                </div>
                <h3>{!! $page->section('benefit_3_title', 'Multiple Sports Options') !!}</h3>
                <p>{!! $page->section('benefit_3_text', 'Other than in cricket, users have the chance to bet in other sports with different market choices.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                </div>
                <h3>{!! $page->section('benefit_4_title', 'Secure Transactions') !!}</h3>
                <p>{!! $page->section('benefit_4_text', 'Withdrawals and deposits are done with security to ensure that user information and money are secure.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <h3>{!! $page->section('benefit_5_title', 'Real-Time Betting Experience') !!}</h3>
                <p>{!! $page->section('benefit_5_text', 'Live bets allow users to make live bets with constantly changing odds, thus improving decision-making in matches.') !!}</p>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('benefits_btn_text', 'Start Betting with Sky Exchange ID Now') !!}</a>
        </div>
    </div>
</section>

{{-- WHY CHOOSE SKY EXCHANGE --}}
<section class="section" id="why-choose" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('why_title', 'Why Choose <span class="text-gold">Sky Exchange Betting ID</span>?') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div>
                <h3>{!! $page->section('why_1_title', 'Quick and Simple Registration') !!}</h3>
                <p>{!! $page->section('why_1_text', 'The process is straightforward, saving time and effort for new users.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3>{!! $page->section('why_2_title', 'Available 24/7') !!}</h3>
                <p>{!! $page->section('why_2_text', 'You can access your account and place bets anytime without restrictions.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3>{!! $page->section('why_3_title', 'Trusted by Many Users') !!}</h3>
                <p>{!! $page->section('why_3_text', 'The platform has gained popularity for providing a stable and consistent experience.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
                <h3>{!! $page->section('why_4_title', 'Flexible Payment Methods') !!}</h3>
                <p>{!! $page->section('why_4_text', 'Multiple payment options make transactions smooth and convenient.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div>
                <h3>{!! $page->section('why_5_title', 'Responsive Support System') !!}</h3>
                <p>{!! $page->section('why_5_text', 'Assistance is available whenever users need help with their accounts or transactions.') !!}</p>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('why_btn_text', 'Get Your Instant Cricket ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- HOW TO GET YOUR SKY EXCHANGE DEMO ID --}}
<section class="section" id="how-to-get">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('how_title', 'How to Get Your <span class="text-gold">Sky Exchange Demo ID</span>') !!}</h2>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(250px,1fr));">
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">1</span></div>
                <h3>{!! $page->section('how_step_1_title', 'Click WhatsApp Message') !!}</h3>
                <p>{!! $page->section('how_step_1_text', 'Begin by clicking on the WhatsApp option that is offered to get in touch with the service provider.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">2</span></div>
                <h3>{!! $page->section('how_step_2_title', 'Send Message') !!}</h3>
                <p>{!! $page->section('how_step_2_text', 'Send "Hi I want a sky exchange ID" - a simple message to request your account and initiate the process.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">3</span></div>
                <h3>{!! $page->section('how_step_3_title', 'Give Details & Deposit') !!}</h3>
                <p>{!! $page->section('how_step_3_text', 'Enter some basic information and make your initial deposit to activate your ID.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">4</span></div>
                <h3>{!! $page->section('how_step_4_title', 'Get ID') !!}</h3>
                <p>{!! $page->section('how_step_4_text', 'Within 2 to 5 minutes your ID and login credentials will be shared with you. You can start betting.') !!}</p>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><span style="font-size:2em;color:#d4af37;font-weight:700;">5</span></div>
                <h3>{!! $page->section('how_step_5_title', 'Login and Start Betting') !!}</h3>
                <p>{!! $page->section('how_step_5_text', 'Log in and start placing bets on your favourite matches and games right away.') !!}</p>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('how_btn_text', 'Get Your Sky Exchange ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- CUSTOMER CARE --}}
<section class="section" id="customer-care" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('care_title', 'Sky Exchange <span class="text-gold">Customer Care Number</span>') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('care_text_1', 'The sky exchange customer care number is an important support line to users. You may have problems with logging in, slow payment, or you are struggling to navigate the system, customer support can assist you.') !!}</p>
            <p>{!! $page->section('care_text_2', 'The availability of customer care also means that your betting experience is going to be hassle free. Within a short time, users are able to fix problems and move on with the platform without setbacks.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('care_btn_text', 'Reach Out Sky Exchange Customer Care') !!}</a>
        </div>
    </div>
</section>

{{-- CRICKET BETTING WITH SKYEXCHANGE MASTER ID --}}
<section class="section" id="cricket-betting">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('cricket_title', 'Cricket Betting with <span class="text-gold">Skyexchange Master ID</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('cricket_subtitle', 'Users with a skyexchange master ID get access to major tournaments and advanced betting markets in cricket') !!}</p>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(auto-fit,minmax(300px,1fr));">
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/T-20 World Cup.png') }}" alt="T-20 World Cup" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_1_title', 'T-20 World Cup') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_1_text', 'It is among the most attended international cricket tournaments, which involves leading teams of the world. You can bet on match winners, top batsmen, highest run scorers and live match results using your betting ID with real time odds.') !!}</p>
                </div>
            </a>
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/the hundred.png') }}" alt="The Hundred" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_2_title', 'The Hundred') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_2_text', 'The Hundred, a unique and fast-paced format, introduced in England, presents exciting betting opportunities. Players are able to bet on the fast matches with dynamic game play and fluctuating odds.') !!}</p>
                </div>
            </a>
            <a href="{{ $waLink }}" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;display:block;background:linear-gradient(135deg,rgba(212,175,55,0.08),rgba(212,175,55,0.02));border:1px solid rgba(212,175,55,0.2);border-radius:16px;overflow:hidden;transition:all 0.3s ease;">
                <div style="width:100%;height:180px;overflow:hidden;">
                    <img src="{{ asset('images/cpl.png') }}" alt="CPL" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div style="padding:24px 30px;">
                    <h3 style="color:#d4af37;font-size:20px;margin:0 0 12px;">{!! $page->section('tournament_3_title', 'CPL (Caribbean Premier League)') !!}</h3>
                    <p style="color:#b0b0c8;line-height:1.8;">{!! $page->section('tournament_3_text', 'CPL is known to have entertaining matches and star players, which provide users with various betting markets. You are able to bet on the outcomes of matches, performances of players as well as live events when the match is taking place.') !!}</p>
                </div>
            </a>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('cricket_btn_text', 'Get Your Cricket Betting ID Today') !!}</a>
        </div>
    </div>
</section>

{{-- IS SKY 99 EXCH SAFE --}}
<section class="section" id="safety" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('safety_title', 'Is <span class="text-gold">Sky 99 Exch</span> Safe to Use?') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('safety_text_1', 'Sky 99 Exch can be regarded as safe among the users interested in having a good betting platform. It puts an emphasis on privacy of users, safe transactions, and seamless operations. The system is made in such a way that it manages data of the user in a cautious manner and provides secure financial transactions.') !!}</p>
            <p>{!! $page->section('safety_text_2', 'However, users should always be cautious and use trusted sources while accessing the platform. Avoid sharing sensitive information with unknown contacts and ensure you are using official communication channels. Responsible usage plays an important role in maintaining a safe betting experience.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('safety_btn_text', 'Bet with Sky 99 Exch Now') !!}</a>
        </div>
    </div>
</section>

{{-- PAYMENT OPTIONS --}}
<section class="section" id="payments">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('payments_title', 'Payment Options Available in <span class="text-gold">Sky Exchange Demo ID</span>') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('payments_text_1', 'Availability of several payment options is one of the major benefits of skyexchange. This renders it simple to get and take money without any hustles.') !!}</p>
            <p>{!! $page->section('payments_text_2', 'The users have options of the common methods such as bank transfers, UPI, and other digital payment methods. These are very popular in India and offer fast processing of transactions. Fast deposits enable the users to bet immediately and the ease of withdrawal helps one to enjoy a hassle free experience when withdrawing the winnings.') !!}</p>
            <p>{!! $page->section('payments_text_3', 'The versatility of payment methods makes the platform more open and user-friendly to any sort of user.') !!}</p>
        </div>
        <div class="features-grid" style="grid-template-columns:repeat(4,1fr);max-width:800px;margin:30px auto 0;">
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/upi.png') }}" alt="UPI" style="width:48px;height:48px;object-fit:contain;"></div>
                <h3>{!! $page->section('payment_1_title', 'UPI') !!}</h3>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/bank transfer.png') }}" alt="Bank Transfer" style="width:48px;height:48px;object-fit:contain;"></div>
                <h3>{!! $page->section('payment_2_title', 'Bank Transfer') !!}</h3>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/paytm.png') }}" alt="Paytm" style="width:48px;height:48px;object-fit:contain;"></div>
                <h3>{!! $page->section('payment_3_title', 'Paytm') !!}</h3>
            </div>
            <div class="feature-card" style="text-align:center;">
                <div class="feature-icon"><img src="{{ asset('images/Untitled design (2) (1)/phonepe.png') }}" alt="PhonePe" style="width:48px;height:48px;object-fit:contain;"></div>
                <h3>{!! $page->section('payment_4_title', 'PhonePe') !!}</h3>
            </div>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('payments_btn_text', 'Click Here to Get Your Demo ID') !!}</a>
        </div>
    </div>
</section>

{{-- CONTACT NUMBER --}}
<section class="section" id="contact" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('contact_title', 'Sky Exchange <span class="text-gold">Contact Number</span>') !!}</h2>
        </div>
        <div class="content-block" style="max-width:900px;margin:0 auto;">
            <p>{!! $page->section('contact_text_1', 'The sky exchange contact number is essential for users who need direct assistance. It helps in resolving issues related to account setup, transactions, and betting queries.') !!}</p>
            <p>{!! $page->section('contact_text_2', 'For payment-related concerns, users can call the sky exchange deposit number to verify transactions or seek assistance when making deposits. On the same note, in case of any problem, there is the sky exchange customer care number that will give the problem a prompt response.') !!}</p>
        </div>
        <div class="text-center" style="margin-top:30px;">
            <a href="{{ $waLink }}" class="btn btn-gold btn-lg" target="_blank" rel="noopener">{!! $page->section('contact_btn_text', 'Reach Out Customer Support Team Today') !!}</a>
        </div>
    </div>
</section>

{{-- FAQ SECTION --}}
<section class="section" id="faq">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('faq_title', 'Frequently Asked <span class="text-gold">Questions</span>') !!}</h2>
        </div>
        <div class="faq-list" style="max-width:800px;margin:0 auto;">
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_1_q', 'What is the sky exchange customer care number?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_1_a', 'The support on account issues, login problems, and queries related to transactions are offered by the sky exchange customer care number.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_2_q', 'How can I use the sky exchange deposit number?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_2_a', 'The sky exchange deposit number assists you in reaching out to the support to verify deposits and address issues related to payments.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_3_q', 'What is a sky exchange cricket ID?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_3_a', 'A sky exchange cricket ID is your own account that enables you to bet on cricket matches and under various betting markets.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_4_q', 'How do I access skyexchange login?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_4_a', 'Skyexchange login using your credentials and begin betting on the live matches immediately.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_5_q', 'What is a skyexchange master ID?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_5_a', 'A skyexchange master ID will grant complete access to every betting option, such as advanced markets and a variety of sports.') !!}</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">{!! $page->section('faq_6_q', 'Can I get an instant cricket ID on skyexchange?') !!}<span class="faq-toggle">+</span></button>
                <div class="faq-answer"><p>{!! $page->section('faq_6_a', 'Yes, with WhatsApp, users can easily obtain an instant cricket ID and begin betting after a few minutes.') !!}</p></div>
            </div>
        </div>
    </div>
</section>

@endsection
