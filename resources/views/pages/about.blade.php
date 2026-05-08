@extends('layouts.app')

@section('meta_title', $meta_title ?? 'About Us - Radhey Book | India\'s Most Trusted Betting ID Provider')
@section('meta_description', $meta_description ?? 'Learn about Radhey Book - India\'s most trusted online betting ID provider with 7+ years of experience, 2M+ players, and 24/7 customer support.')
@section('meta_keywords', $meta_keywords ?? 'about radhey betting ID, radhey betting ID provider, trusted betting ID, online betting india, radhey about us')

@section('content')

{{-- HERO SECTION --}}
<section class="hero-section" id="hero">
    <div class="hero-overlay"></div>
    <div class="hero-content container">
        <div class="hero-badge">
            <span class="badge-pulse"></span>
            {!! $page->section('hero_badge', 'Trusted Since 2017') !!}
        </div>
        <h1 class="hero-title">{!! $page->section('hero_title', 'About <span class="text-gold">Radhey Book</span>') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'India\'s most trusted online betting ID provider with 7+ years of experience serving over 2 million satisfied players across the country.') !!}</p>
        <div class="hero-cta">
            <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.5.5 0 00.61.609l4.458-1.495A11.952 11.952 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.319 0-4.476-.682-6.297-1.848l-.44-.292-3.065 1.027 1.027-3.065-.292-.44A9.965 9.965 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                {!! $page->section('hero_btn_text', 'Get Your Betting ID Now') !!}
            </a>
            <a href="#our-story" class="btn btn-outline-gold btn-lg">{!! $page->section('hero_btn_secondary_text', 'Our Story') !!}</a>
        </div>
    </div>
</section>

{{-- OUR STORY --}}
<section class="section" id="our-story">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('story_title', 'Our <span class="text-gold">Story</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('story_subtitle', 'Who we are and how we started') !!}</p>
        </div>
        <div class="content-block">
            <p>{!! $page->section('story_text_1', 'Radhey Book was founded with a simple yet powerful mission: to provide Indian bettors with a reliable, secure, and hassle-free way to access online betting platforms. What started as a small operation has grown into India\'s most trusted betting ID provider, serving millions of players from every corner of the country.') !!}</p>
            <p>{!! $page->section('story_text_2', 'Over the past 7+ years, we have built our reputation on the pillars of trust, transparency, and exceptional customer service. We understood early on that the biggest challenge for Indian bettors was not finding platforms to bet on, but finding a trustworthy provider who could deliver genuine IDs with proper support.') !!}</p>
            <p>{!! $page->section('story_text_3', 'Today, Radhey Book is the go-to name for anyone looking to get their online betting ID. Whether it is cricket betting, casino gaming, football, or any other sport, we provide instant access to all major platforms with 24/7 WhatsApp support, secure payments, and guaranteed bonuses.') !!}</p>
        </div>
    </div>
</section>

{{-- MISSION AND VISION --}}
<section class="section" id="mission-vision" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('mission_vision_title', 'Our Mission & <span class="text-gold">Vision</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('mission_vision_subtitle', 'What drives us every day') !!}</p>
        </div>
        <div class="features-grid" style="max-width: 900px; margin: 0 auto;">
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
                </div>
                <h3>{!! $page->section('mission_title', 'Our Mission') !!}</h3>
                <p>{!! $page->section('mission_text', 'To make online betting accessible, safe, and enjoyable for every Indian player by providing instant, verified betting IDs with unmatched customer support and the best bonus offers in the industry.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                </div>
                <h3>{!! $page->section('vision_title', 'Our Vision') !!}</h3>
                <p>{!! $page->section('vision_text', 'To be the undisputed leader in the online betting ID industry in India, known for our integrity, speed of service, and commitment to player satisfaction. We envision a future where every bettor has a trusted partner in their corner.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- KEY STATISTICS --}}
<section class="section" id="statistics">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('stats_title', 'Our <span class="text-gold">Numbers</span> Speak') !!}</h2>
            <p class="section-subtitle">{!! $page->section('stats_subtitle', 'The stats that define our success') !!}</p>
        </div>
        <div class="features-grid stats-grid">
            <div class="feature-card" style="text-align: center;">
                <div style="font-size: 2.5em; color: #d4af37; font-weight: 800; font-family: 'Orbitron', sans-serif; margin-bottom: 15px;">{!! $page->section('stat_1_number', '7+') !!}</div>
                <h3>{!! $page->section('stat_1_label', 'Years of Experience') !!}</h3>
                <p>{!! $page->section('stat_1_text', 'Serving Indian bettors since 2017 with unwavering commitment to quality and trust.') !!}</p>
            </div>
            <div class="feature-card" style="text-align: center;">
                <div style="font-size: 2.5em; color: #d4af37; font-weight: 800; font-family: 'Orbitron', sans-serif; margin-bottom: 15px;">{!! $page->section('stat_2_number', '2M+') !!}</div>
                <h3>{!! $page->section('stat_2_label', 'Happy Players') !!}</h3>
                <p>{!! $page->section('stat_2_text', 'Over 2 million satisfied players trust Radhey Book for their online betting needs.') !!}</p>
            </div>
            <div class="feature-card" style="text-align: center;">
                <div style="font-size: 2.5em; color: #d4af37; font-weight: 800; font-family: 'Orbitron', sans-serif; margin-bottom: 15px;">{!! $page->section('stat_3_number', '24/7') !!}</div>
                <h3>{!! $page->section('stat_3_label', 'Customer Support') !!}</h3>
                <p>{!! $page->section('stat_3_text', 'Round-the-clock support via WhatsApp, phone, and email - we never sleep so you can bet with peace of mind.') !!}</p>
            </div>
            <div class="feature-card" style="text-align: center;">
                <div style="font-size: 2.5em; color: #d4af37; font-weight: 800; font-family: 'Orbitron', sans-serif; margin-bottom: 15px;">{!! $page->section('stat_4_number', '365') !!}</div>
                <h3>{!! $page->section('stat_4_label', 'Days of Service') !!}</h3>
                <p>{!! $page->section('stat_4_text', 'Available every single day of the year including holidays, festivals, and weekends.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- OUR VALUES --}}
<section class="section" id="our-values" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('values_title', 'Our Core <span class="text-gold">Values</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('values_subtitle', 'The principles that guide everything we do') !!}</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                </div>
                <h3>{!! $page->section('value_1_title', 'Trust') !!}</h3>
                <p>{!! $page->section('value_1_text', 'Trust is the foundation of our business. Every interaction, every transaction, and every ID we provide is backed by our commitment to honesty and reliability. We have built our reputation over 7+ years of consistent, trustworthy service.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                </div>
                <h3>{!! $page->section('value_2_title', 'Speed') !!}</h3>
                <p>{!! $page->section('value_2_text', 'In the world of betting, time is money. We pride ourselves on delivering instant ID activation, fast deposits, and quick withdrawals. From the moment you contact us to the moment you start betting, the process is lightning fast.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3>{!! $page->section('value_3_title', 'Security') !!}</h3>
                <p>{!! $page->section('value_3_text', 'Your security is our top priority. We use advanced encryption, secure payment channels, and strict privacy policies to ensure your personal and financial information is always protected.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/></svg>
                </div>
                <h3>{!! $page->section('value_4_title', 'Support') !!}</h3>
                <p>{!! $page->section('value_4_text', 'We believe in being there for our players at all times. Our dedicated support team works 24/7 to answer queries, resolve issues, and ensure a smooth betting experience for every player.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- WHY CHOOSE US --}}
<section class="section" id="why-choose-us">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('why_title', 'Why Choose <span class="text-gold">Radhey Book</span>?') !!}</h2>
            <p class="section-subtitle">{!! $page->section('why_subtitle', 'What sets us apart from the rest') !!}</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <h3>{!! $page->section('why_1_title', 'Industry Leader') !!}</h3>
                <p>{!! $page->section('why_1_text', 'We are the #1 betting ID provider in India, trusted by over 2 million players.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                </div>
                <h3>{!! $page->section('why_2_title', 'Best Bonus Offers') !!}</h3>
                <p>{!! $page->section('why_2_text', 'Welcome Bonus, referral bonuses, weekly cashback, and exclusive promotions.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
                </div>
                <h3>{!! $page->section('why_3_title', 'Multiple Payment Options') !!}</h3>
                <p>{!! $page->section('why_3_text', 'UPI, PhonePe, Google Pay, Paytm, bank transfer - all major payment methods accepted.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                </div>
                <h3>{!! $page->section('why_4_title', 'Dedicated Team') !!}</h3>
                <p>{!! $page->section('why_4_text', 'Our experienced team ensures every player gets personalized attention and support.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <h3>{!! $page->section('why_5_title', 'Instant Activation') !!}</h3>
                <p>{!! $page->section('why_5_text', 'Get your betting ID activated within 2-5 minutes of payment confirmation.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/><line x1="4" y1="22" x2="4" y2="15"/></svg>
                </div>
                <h3>{!! $page->section('why_6_title', 'All Platforms Covered') !!}</h3>
                <p>{!! $page->section('why_6_text', 'IDs for all major platforms - cricket, casino, sports, and more under one roof.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- CTA SECTION --}}
<section class="section" id="cta" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('cta_title', 'Join the <span class="text-gold">Radhey Family</span> Today') !!}</h2>
            <p class="section-subtitle">{!! $page->section('cta_text', 'Become part of India\'s largest betting community. Get your betting ID now and enjoy Welcome Bonus on your first deposit!') !!}</p>
        </div>
        <div class="text-center">
            <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.5.5 0 00.61.609l4.458-1.495A11.952 11.952 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.319 0-4.476-.682-6.297-1.848l-.44-.292-3.065 1.027 1.027-3.065-.292-.44A9.965 9.965 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                {!! $page->section('cta_btn_text', 'Get Your Betting ID on WhatsApp') !!}
            </a>
        </div>
        <div class="text-center" style="margin-top: 15px;">
            <p style="opacity: 0.7;">{!! $page->section('cta_contact_text', 'Or call us at <a href="tel:+' . ($siteSettings['whatsapp_number'] ?? '917901712857') . '" class="text-gold">+91 79017 12857</a> | Email: <a href="mailto:support@radheybettingid.com" class="text-gold">support@radheybettingid.com</a>') !!}</p>
        </div>
    </div>
</section>

@endsection
