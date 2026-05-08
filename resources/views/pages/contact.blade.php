@extends('layouts.app')

@section('meta_title', $meta_title ?? 'Contact Radhey Book. 24/7 Support for Cricket, IPL and Exchange Betting ID')
@section('meta_description', $meta_description ?? 'Contact Radhey Book for your cricket betting ID, IPL betting ID, T20 betting ID, online casino ID and exchange ID support. 24/7 WhatsApp and phone help across India.')
@section('meta_keywords', $meta_keywords ?? 'contact radhey book, cricket betting ID, online betting ID, IPL betting ID, t20 betting ID, whatsapp betting ID, tennis betting ID, fairplay exchange ID, sky exchange ID, lords exchange ID, lotus exchange ID, casino betting ID, mahadev book ID, reddy anna book ID, best IPL betting ID providers')

@section('content')

{{-- HERO SECTION --}}
<section class="hero-section" id="hero">
    <div class="hero-overlay"></div>
    <div class="hero-content container">
        <div class="hero-badge">
            <span class="badge-pulse"></span>
            {!! $page->section('hero_badge', '24/7 Support Available') !!}
        </div>
        <h1 class="hero-title">{!! $page->section('hero_title', 'Contact <span class="text-gold">Radhey Book</span>') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'We are here to help you 24 hours a day, 7 days a week, 365 days a year. Whether you need a cricket betting ID, an IPL betting ID or an exchange ID, our team is just one message away.') !!}</p>
        <div class="hero-cta">
            <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.5.5 0 00.61.609l4.458-1.495A11.952 11.952 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.319 0-4.476-.682-6.297-1.848l-.44-.292-3.065 1.027 1.027-3.065-.292-.44A9.965 9.965 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                {!! $page->section('hero_btn_text', 'Chat on WhatsApp') !!}
            </a>
        </div>
    </div>
</section>

{{-- CONTACT INFORMATION CARDS --}}
<section class="section" id="contact-info">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('contact_section_title', 'Get in <span class="text-gold">Touch</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('contact_section_subtitle', 'Choose your preferred way to reach us') !!}</p>
        </div>
        <div class="features-grid stats-grid">
            <div class="feature-card" style="text-align: center; display: flex; flex-direction: column; align-items: center;">
                <div class="feature-icon" style="margin: 0 auto 20px;">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/></svg>
                </div>
                <h3>{!! $page->section('contact_1_title', 'WhatsApp') !!}</h3>
                <p style="font-size: 1.1em; font-weight: 600; color: #d4af37;">{!! $page->section('contact_1_number', '+91 79017 12857') !!}</p>
                <p>{!! $page->section('contact_1_text', 'Our fastest support channel. Great for a whatsapp betting ID sign up, login help and instant responses 24/7.') !!}</p>
                <a href="https://linktr.ee/radheybook" class="btn btn-gold" target="_blank" rel="noopener" style="margin-top: auto; padding-top: 10px;">{!! $page->section('contact_1_btn_text', 'Message Now') !!}</a>
            </div>
            <div class="feature-card" style="text-align: center; display: flex; flex-direction: column; align-items: center;">
                <div class="feature-icon" style="margin: 0 auto 20px;">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
                </div>
                <h3>{!! $page->section('contact_2_title', 'Phone') !!}</h3>
                <p style="font-size: 1.1em; font-weight: 600; color: #d4af37;">{!! $page->section('contact_2_number', '+91 79017 12857') !!}</p>
                <p>{!! $page->section('contact_2_text', 'Call us for your t20 betting ID, tennis betting ID or any account support.') !!}</p>
            </div>
            <div class="feature-card" style="text-align: center; display: flex; flex-direction: column; align-items: center;">
                <div class="feature-icon" style="margin: 0 auto 20px;">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                </div>
                <h3>{!! $page->section('contact_3_title', 'Email') !!}</h3>
                <p style="font-size: 1.1em; font-weight: 600; color: #d4af37;">{!! $page->section('contact_3_email', 'support@radheybettingid.com') !!}</p>
                <p>{!! $page->section('contact_3_text', 'Send a detailed query about your casino betting ID or online betting ID and we will get back to you promptly.') !!}</p>
                <a href="mailto:{!! $page->section('contact_3_email', 'support@radheybettingid.com') !!}" class="btn btn-gold" style="margin-top: auto; padding-top: 10px;">{!! $page->section('contact_3_btn_text', 'Send Email') !!}</a>
            </div>
            <div class="feature-card" style="text-align: center; display: flex; flex-direction: column; align-items: center;">
                <div class="feature-icon" style="margin: 0 auto 20px;">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <h3>{!! $page->section('contact_4_title', 'Location') !!}</h3>
                <p style="font-size: 1.1em; font-weight: 600; color: #d4af37;">{!! $page->section('contact_4_location', 'India') !!}</p>
                <p>{!! $page->section('contact_4_text', 'Serving players across every state and city with a trusted online betting ID in India.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- BUSINESS HOURS --}}
<section class="section" id="business-hours" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('hours_title', 'Business <span class="text-gold">Hours</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('hours_subtitle', 'We are available around the clock') !!}</p>
        </div>
        <div style="max-width: 600px; margin: 40px auto 0;">
            <div class="feature-card" style="text-align: center; display: flex; flex-direction: column; align-items: center;">
                <div class="feature-icon" style="margin: 0 auto 20px;">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <h3>{!! $page->section('hours_card_title', '24/7 - Always Open') !!}</h3>
                <p>{!! $page->section('hours_line1', 'Monday - Sunday: 24 Hours') !!}</p>
                <p>{!! $page->section('hours_line2', 'Holidays: Available') !!}</p>
                <p>{!! $page->section('hours_line3', 'Festivals: Available') !!}</p>
                <p style="margin-top: 15px; opacity: 0.8;">{!! $page->section('hours_text', 'We never close. Our team is available every single minute of every single day to serve you. Whether you want to know how to get IPL betting ID, need help with a t20 cricket betting ID or a football betting ID, you can reach us at 3 AM or 3 PM. Weekends, holidays and festivals included.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- MAP PLACEHOLDER --}}
<section class="section" id="map" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('map_title', 'Our <span class="text-gold">Presence</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('map_subtitle', 'Serving players across India') !!}</p>
        </div>
        <div style="max-width: 900px; margin: 0 auto; background: rgba(255,255,255,0.03); border: 1px solid rgba(212,175,55,0.2); border-radius: 12px; padding: 60px 40px; text-align: center;">
            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5" style="margin-bottom: 20px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
            <h3 style="color: #d4af37; margin-bottom: 10px;">{!! $page->section('map_card_title', 'Pan India Coverage') !!}</h3>
            <p>{!! $page->section('map_text', 'Radhey Book serves players from all major cities and states across India. No matter where you are, our services are available through WhatsApp, phone and email. We deliver instant cricket betting ID, IPL betting ID, tennis betting ID and exchange ID accounts to players in Delhi, Mumbai, Bangalore, Chennai, Kolkata, Hyderabad, Pune, Jaipur, Lucknow and every other city in India.') !!}</p>
        </div>
    </div>
</section>

{{-- FAQ ABOUT CONTACTING --}}
<section class="section" id="faq">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('faq_title', 'Frequently Asked <span class="text-gold">Questions</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('faq_subtitle', 'Common questions about contacting us') !!}</p>
        </div>
        <div class="faq-list" style="max-width: 800px; margin: 0 auto;">
            <div class="faq-item">
                <div class="faq-question">
                    <span>{!! $page->section('faq_1_q', 'What is the fastest way to contact Radhey Book?') !!}</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>{!! $page->section('faq_1_a', 'The fastest way to reach us is through WhatsApp at +91 79017 12857. Whether you want an IPL betting ID, a cricket betting ID or help with login, our team responds instantly 24/7. You can also call us directly on the same number.') !!}</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>{!! $page->section('faq_2_q', 'What are your support hours?') !!}</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>{!! $page->section('faq_2_a', 'We are available 24 hours a day, 7 days a week, 365 days a year. Our support team works in shifts to ensure there is always someone available to help you, no matter what time it is.') !!}</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>{!! $page->section('faq_3_q', 'How quickly will I get a response?') !!}</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>{!! $page->section('faq_3_a', 'WhatsApp and phone calls are answered almost instantly. Email queries are typically answered within 1 to 2 hours. If you want to know how to get IPL betting ID or how to open a new exchange ID, WhatsApp gives you the quickest reply.') !!}</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>{!! $page->section('faq_4_q', 'Can I contact you for withdrawal issues?') !!}</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>{!! $page->section('faq_4_a', 'Yes. Our team handles deposits, withdrawals, bonus claims and any issue with your fairplay exchange ID, sky exchange ID, lords exchange ID, lotus exchange ID, mahadev book ID or reddy anna book ID account. Contact us via WhatsApp for the quickest resolution.') !!}</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>{!! $page->section('faq_5_q', 'Do you offer the best betting ID providers in India?') !!}</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>{!! $page->section('faq_5_a', 'Yes. Radhey Book is counted among the best IPL betting ID providers in India with 7+ years of trusted service. We help users across India with every popular account type including online casino ID and whatsapp betting ID.') !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA SECTION --}}
<section class="section" id="cta" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('cta_title', 'Ready to <span class="text-gold">Get Started</span>?') !!}</h2>
            <p class="section-subtitle">{!! $page->section('cta_text', 'Contact us now and get your cricket, IPL, tennis, casino or exchange betting ID in just 2 minutes with a welcome bonus.') !!}</p>
        </div>
        <div class="text-center">
            <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.5.5 0 00.61.609l4.458-1.495A11.952 11.952 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.319 0-4.476-.682-6.297-1.848l-.44-.292-3.065 1.027 1.027-3.065-.292-.44A9.965 9.965 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                {!! $page->section('cta_btn_text', 'WhatsApp Us Now') !!}
            </a>
        </div>
        <div class="text-center" style="margin-top: 15px;">
            <p style="opacity: 0.7;">{!! $page->section('cta_footer_text', 'Or call us at <a href="tel:+917901712857" class="text-gold">+91 79017 12857</a> | Email: <a href="mailto:support@radheybettingid.com" class="text-gold">support@radheybettingid.com</a>') !!}</p>
        </div>
    </div>
</section>

@endsection
