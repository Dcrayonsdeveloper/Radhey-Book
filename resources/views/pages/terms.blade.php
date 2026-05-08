@extends('layouts.app')

@section('meta_title', $meta_title ?? 'Terms & Conditions | Radhey Book')
@section('meta_description', $meta_description ?? 'Read the terms and conditions for using Radhey Book services. Understand your rights and responsibilities as a user.')
@section('meta_keywords', $meta_keywords ?? 'terms and conditions, radhey betting ID terms, betting rules, user agreement, terms of service')

@section('content')

{{-- HERO SECTION --}}
<section class="hero-section" id="hero">
    <div class="hero-overlay"></div>
    <div class="hero-content container">
        <h1 class="hero-title">{!! $page->section('hero_title', 'Terms & <span class="text-gold">Conditions</span>') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'Please read these terms and conditions carefully before using our services.') !!}</p>
    </div>
</section>

{{-- TERMS CONTENT --}}
<section class="section" id="terms-content">
    <div class="container">
        <div style="max-width: 900px; margin: 0 auto;">

            <div class="content-block" style="margin-bottom: 15px; text-align: right;">
                <p>{!! $page->section('last_updated', 'Last Updated: <span class="text-gold">March 23, 2026</span>') !!}</p>
            </div>

            <div class="content-block" style="margin-bottom: 40px;">
                <p>{!! $page->section('intro_text', 'These Terms and Conditions ("Terms") govern your use of the Radhey Book website and services. By accessing or using our services, you agree to be bound by these Terms. If you do not agree with any part of these Terms, please do not use our services.') !!}</p>
            </div>

            {{-- Acceptance of Terms --}}
            <div class="feature-card" style="margin-bottom: 30px;">
                <h3 style="color: #d4af37; margin-bottom: 15px;">{!! $page->section('accept_title', '1. Acceptance of Terms') !!}</h3>
                <p>{!! $page->section('accept_text_1', 'By accessing, browsing, or using the Radhey Book website and its services, you acknowledge that you have read, understood, and agree to be bound by these Terms and Conditions, along with our Privacy Policy. These Terms constitute a legally binding agreement between you and Radhey Book.') !!}</p>
                <p style="margin-top: 10px;">{!! $page->section('accept_text_2', 'We reserve the right to modify these Terms at any time. Continued use of our services after any modifications constitutes your acceptance of the revised Terms. We recommend reviewing these Terms periodically.') !!}</p>
            </div>

            {{-- Eligibility --}}
            <div class="feature-card" style="margin-bottom: 30px;">
                <h3 style="color: #d4af37; margin-bottom: 15px;">{!! $page->section('eligibility_title', '2. Eligibility') !!}</h3>
                <p>{!! $page->section('eligibility_text_1', 'To use our services, you must meet the following criteria:') !!}</p>
                <ul style="margin-top: 10px; padding-left: 20px; line-height: 2;">
                    <li>{!! $page->section('eligibility_text_2', 'Age Requirement: You must be at least 18 years of age to use our services. By using our services, you confirm that you are 18 years or older.') !!}</li>
                    <li>{!! $page->section('eligibility_text_3', 'Legal Capacity: You must have the legal capacity to enter into binding agreements.') !!}</li>
                    <li>{!! $page->section('eligibility_text_4', 'Jurisdiction: You are responsible for ensuring that your use of our services complies with all laws and regulations applicable in your jurisdiction.') !!}</li>
                    <li>{!! $page->section('eligibility_text_5', 'Accuracy: You must provide accurate and truthful information when creating an account or contacting us.') !!}</li>
                </ul>
                <p style="margin-top: 10px; font-weight: 600; color: #d4af37;">{!! $page->section('eligibility_text_6', 'We strictly prohibit the use of our services by persons under 18 years of age. Any account found to belong to an underage individual will be immediately terminated.') !!}</p>
            </div>

            {{-- Services --}}
            <div class="feature-card" style="margin-bottom: 30px;">
                <h3 style="color: #d4af37; margin-bottom: 15px;">{!! $page->section('services_title', '3. Description of Services') !!}</h3>
                <p>{!! $page->section('services_text_1', 'Radhey Book provides the following services:') !!}</p>
                <ul style="margin-top: 10px; padding-left: 20px; line-height: 2;">
                    <li>{!! $page->section('services_text_2', 'Provision of online betting IDs for various platforms') !!}</li>
                    <li>{!! $page->section('services_text_3', 'Account setup and activation assistance') !!}</li>
                    <li>{!! $page->section('services_text_4', 'Deposit and withdrawal facilitation') !!}</li>
                    <li>{!! $page->section('services_text_5', 'Customer support via WhatsApp, phone, and email') !!}</li>
                    <li>{!! $page->section('services_text_6', 'Bonus and promotional offer management') !!}</li>
                    <li>{!! $page->section('services_text_7', 'Demo ID access for platform exploration') !!}</li>
                </ul>
                <p style="margin-top: 10px;">{!! $page->section('services_text_8', 'We act as an intermediary service provider. The actual betting platforms, their rules, odds, and outcomes are managed by the respective platform operators.') !!}</p>
            </div>

            {{-- User Responsibilities --}}
            <div class="feature-card" style="margin-bottom: 30px;">
                <h3 style="color: #d4af37; margin-bottom: 15px;">{!! $page->section('user_title', '4. User Responsibilities') !!}</h3>
                <p>{!! $page->section('user_text_1', 'As a user of our services, you agree to:') !!}</p>
                <ul style="margin-top: 10px; padding-left: 20px; line-height: 2;">
                    <li>{!! $page->section('user_text_2', 'Provide accurate and complete information when creating your account') !!}</li>
                    <li>{!! $page->section('user_text_3', 'Keep your login credentials confidential and not share them with others') !!}</li>
                    <li>{!! $page->section('user_text_4', 'Be solely responsible for all activities that occur under your account') !!}</li>
                    <li>{!! $page->section('user_text_5', 'Not use our services for any illegal, fraudulent, or unauthorized purpose') !!}</li>
                    <li>{!! $page->section('user_text_6', 'Not attempt to hack, disrupt, or manipulate our website or services') !!}</li>
                    <li>{!! $page->section('user_text_7', 'Comply with all applicable laws and regulations in your jurisdiction') !!}</li>
                    <li>{!! $page->section('user_text_8', 'Bet responsibly and within your financial means') !!}</li>
                    <li>{!! $page->section('user_text_9', 'Report any suspicious activity or security breaches to us immediately') !!}</li>
                </ul>
            </div>

            {{-- Payments --}}
            <div class="feature-card" style="margin-bottom: 30px;">
                <h3 style="color: #d4af37; margin-bottom: 15px;">{!! $page->section('payments_title', '5. Payments, Deposits & Withdrawals') !!}</h3>
                <p>{!! $page->section('payments_text_1', 'Regarding financial transactions with Radhey Book:') !!}</p>
                <ul style="margin-top: 10px; padding-left: 20px; line-height: 2;">
                    <li>{!! $page->section('payments_text_2', 'All deposits must be made through authorized payment methods (UPI, bank transfer, etc.)') !!}</li>
                    <li>{!! $page->section('payments_text_3', 'Minimum deposit and withdrawal amounts may apply and are subject to change') !!}</li>
                    <li>{!! $page->section('payments_text_4', 'Withdrawal requests are processed as quickly as possible, typically within minutes') !!}</li>
                    <li>{!! $page->section('payments_text_5', 'We reserve the right to verify your identity before processing large withdrawals') !!}</li>
                    <li>{!! $page->section('payments_text_6', 'Bonus funds are subject to specific terms and conditions and may have wagering requirements') !!}</li>
                    <li>{!! $page->section('payments_text_7', 'We are not responsible for delays caused by banking or payment processing systems') !!}</li>
                    <li>{!! $page->section('payments_text_8', 'Any fraudulent transaction attempts will result in immediate account termination') !!}</li>
                </ul>
            </div>

            {{-- Disclaimers --}}
            <div class="feature-card" style="margin-bottom: 30px;">
                <h3 style="color: #d4af37; margin-bottom: 15px;">{!! $page->section('disclaimer_title', '6. Disclaimers') !!}</h3>
                <p>{!! $page->section('disclaimer_text_1', 'Please be aware of the following disclaimers:') !!}</p>
                <ul style="margin-top: 10px; padding-left: 20px; line-height: 2;">
                    <li>{!! $page->section('disclaimer_text_2', 'Our services are provided "as is" and "as available" without warranties of any kind') !!}</li>
                    <li>{!! $page->section('disclaimer_text_3', 'We do not guarantee uninterrupted or error-free service') !!}</li>
                    <li>{!! $page->section('disclaimer_text_4', 'Betting involves financial risk. You may lose money. We are not responsible for any losses incurred through betting') !!}</li>
                    <li>{!! $page->section('disclaimer_text_5', 'We do not control the outcome of any sporting event, game, or bet') !!}</li>
                    <li>{!! $page->section('disclaimer_text_6', 'Odds, markets, and platform features are determined by the respective betting platforms') !!}</li>
                    <li>{!! $page->section('disclaimer_text_7', 'Past performance or results do not guarantee future outcomes') !!}</li>
                    <li>{!! $page->section('disclaimer_text_8', 'We do not provide financial, legal, or gambling advice') !!}</li>
                </ul>
            </div>

            {{-- Limitation of Liability --}}
            <div class="feature-card" style="margin-bottom: 30px;">
                <h3 style="color: #d4af37; margin-bottom: 15px;">{!! $page->section('liability_title', '7. Limitation of Liability') !!}</h3>
                <p>{!! $page->section('liability_text_1', 'To the fullest extent permitted by law:') !!}</p>
                <ul style="margin-top: 10px; padding-left: 20px; line-height: 2;">
                    <li>{!! $page->section('liability_text_2', 'Radhey Book shall not be liable for any indirect, incidental, special, consequential, or punitive damages arising from your use of our services') !!}</li>
                    <li>{!! $page->section('liability_text_3', 'Our total liability shall not exceed the amount you have deposited with us in the preceding 30 days') !!}</li>
                    <li>{!! $page->section('liability_text_4', 'We are not liable for any losses resulting from platform downtime, technical issues, or circumstances beyond our control') !!}</li>
                    <li>{!! $page->section('liability_text_5', 'We are not responsible for the actions, policies, or practices of third-party betting platforms') !!}</li>
                </ul>
            </div>

            {{-- Governing Law --}}
            <div class="feature-card" style="margin-bottom: 30px;">
                <h3 style="color: #d4af37; margin-bottom: 15px;">{!! $page->section('law_title', '8. Governing Law') !!}</h3>
                <p>{!! $page->section('law_text_1', 'These Terms and Conditions shall be governed by and construed in accordance with the laws of India. Any disputes arising out of or related to these Terms shall be subject to the exclusive jurisdiction of the courts in India.') !!}</p>
                <p style="margin-top: 10px;">{!! $page->section('law_text_2', 'If any provision of these Terms is found to be invalid or unenforceable, the remaining provisions shall continue to be valid and enforceable.') !!}</p>
            </div>

            {{-- Contact --}}
            <div class="feature-card" style="margin-bottom: 30px;">
                <h3 style="color: #d4af37; margin-bottom: 15px;">{!! $page->section('contact_title', '9. Contact Information') !!}</h3>
                <p>{!! $page->section('contact_text_1', 'If you have any questions about these Terms and Conditions, please contact us:') !!}</p>
                <ul style="margin-top: 10px; padding-left: 20px; line-height: 2;">
                    <li>{!! $page->section('contact_text_2', 'WhatsApp: <a href="https://linktr.ee/radheybook" class="text-gold">+91 79017 12857</a>') !!}</li>
                    <li>{!! $page->section('contact_text_3', 'Phone: <a href="tel:+' . ($siteSettings['whatsapp_number'] ?? '917901712857') . '" class="text-gold">+91 79017 12857</a>') !!}</li>
                    <li>{!! $page->section('contact_text_4', 'Email: <a href="mailto:support@radheybettingid.com" class="text-gold">support@radheybettingid.com</a>') !!}</li>
                </ul>
            </div>

        </div>
    </div>
</section>

{{-- CTA SECTION --}}
<section class="section" id="cta" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('cta_title', 'Have Questions About <span class="text-gold">Our Terms</span>?') !!}</h2>
            <p class="section-subtitle">{!! $page->section('cta_subtitle', 'Contact our support team anytime for clarification on our terms and conditions.') !!}</p>
        </div>
        <div class="text-center">
            <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.5.5 0 00.61.609l4.458-1.495A11.952 11.952 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.319 0-4.476-.682-6.297-1.848l-.44-.292-3.065 1.027 1.027-3.065-.292-.44A9.965 9.965 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                {!! $page->section('cta_button', 'Contact Us on WhatsApp') !!}
            </a>
        </div>
    </div>
</section>

@endsection
