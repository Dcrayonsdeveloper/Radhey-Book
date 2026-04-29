@extends('layouts.app')

@section('meta_title', $meta_title ?? 'Privacy Policy | Radhey Book')
@section('meta_description', $meta_description ?? 'Read the privacy policy of Radhey Book. Learn how we collect, use, and protect your personal information. Your privacy is our priority.')
@section('meta_keywords', $meta_keywords ?? 'privacy policy, data protection, radhey betting ID privacy, user data security, information collection')

@section('content')

{{-- HERO SECTION --}}
<section class="hero-section" id="hero">
    <div class="hero-overlay"></div>
    <div class="hero-content container">
        <h1 class="hero-title">{!! $page->section('hero_title', 'Privacy <span class="text-gold">Policy</span>') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'Your privacy is important to us. This policy explains how we collect, use, and protect your personal information.') !!}</p>
    </div>
</section>

{{-- PRIVACY POLICY CONTENT --}}
<section class="section" id="privacy-content">
    <div class="container">
        <div style="max-width: 900px; margin: 0 auto;">

            <div class="content-block" style="margin-bottom: 15px; text-align: right;">
                <p>Last Updated: <span class="text-gold">{!! $page->section('last_updated', 'March 23, 2026') !!}</span></p>
            </div>

            <div class="content-block" style="margin-bottom: 40px;">
                <p>{!! $page->section('intro_text', 'At Radhey Book, we are committed to protecting the privacy and security of our users. This Privacy Policy describes how we collect, use, disclose, and safeguard your information when you use our services. Please read this policy carefully. By using our services, you agree to the practices described in this policy.') !!}</p>
            </div>

            {{-- Information Collection --}}
            <div class="feature-card" style="margin-bottom: 30px;">
                <h3 style="color: #d4af37; margin-bottom: 15px;">{!! $page->section('info_title', '1. Information We Collect') !!}</h3>
                <p>{!! $page->section('info_text_1', 'We may collect the following types of information when you use our services:') !!}</p>
                <ul style="margin-top: 10px; padding-left: 20px; line-height: 2;">
                    <li>{!! $page->section('info_item_1', 'Personal Information: Name, email address, phone number, and WhatsApp number that you provide when contacting us.') !!}</li>
                    <li>{!! $page->section('info_item_2', 'Account Information: Username and account details related to your betting ID.') !!}</li>
                    <li>{!! $page->section('info_item_3', 'Transaction Information: Payment details, deposit and withdrawal records, and transaction history.') !!}</li>
                    <li>{!! $page->section('info_item_4', 'Communication Data: Messages, chat history, and correspondence through WhatsApp, email, or phone.') !!}</li>
                    <li>{!! $page->section('info_item_5', 'Device Information: IP address, browser type, operating system, and device identifiers when you visit our website.') !!}</li>
                    <li>{!! $page->section('info_item_6', 'Usage Data: Pages visited, time spent on pages, click patterns, and other browsing behavior on our website.') !!}</li>
                </ul>
            </div>

            {{-- How We Use Information --}}
            <div class="feature-card" style="margin-bottom: 30px;">
                <h3 style="color: #d4af37; margin-bottom: 15px;">{!! $page->section('use_title', '2. How We Use Your Information') !!}</h3>
                <p>{!! $page->section('use_text_1', 'We use the information we collect for the following purposes:') !!}</p>
                <ul style="margin-top: 10px; padding-left: 20px; line-height: 2;">
                    <li>{!! $page->section('use_item_1', 'To provide, maintain, and improve our services') !!}</li>
                    <li>{!! $page->section('use_item_2', 'To create and manage your betting ID accounts') !!}</li>
                    <li>{!! $page->section('use_item_3', 'To process transactions, deposits, and withdrawals') !!}</li>
                    <li>{!! $page->section('use_item_4', 'To communicate with you regarding your account, offers, and updates') !!}</li>
                    <li>{!! $page->section('use_item_5', 'To provide customer support and respond to your inquiries') !!}</li>
                    <li>{!! $page->section('use_item_6', 'To send promotional offers, bonuses, and marketing communications (with your consent)') !!}</li>
                    <li>{!! $page->section('use_item_7', 'To detect and prevent fraud, unauthorized access, and other illegal activities') !!}</li>
                    <li>{!! $page->section('use_item_8', 'To analyze usage patterns and improve our website and services') !!}</li>
                    <li>{!! $page->section('use_item_9', 'To comply with legal obligations and enforce our terms of service') !!}</li>
                </ul>
            </div>

            {{-- Cookies --}}
            <div class="feature-card" style="margin-bottom: 30px;">
                <h3 style="color: #d4af37; margin-bottom: 15px;">{!! $page->section('cookies_title', '3. Cookies and Tracking Technologies') !!}</h3>
                <p>{!! $page->section('cookies_text_1', 'Our website uses cookies and similar tracking technologies to enhance your browsing experience:') !!}</p>
                <ul style="margin-top: 10px; padding-left: 20px; line-height: 2;">
                    <li>{!! $page->section('cookies_item_1', 'Essential Cookies: Required for the website to function properly, such as session management and security.') !!}</li>
                    <li>{!! $page->section('cookies_item_2', 'Analytics Cookies: Help us understand how visitors interact with our website by collecting anonymous data.') !!}</li>
                    <li>{!! $page->section('cookies_item_3', 'Preference Cookies: Remember your settings and preferences for a better experience.') !!}</li>
                    <li>{!! $page->section('cookies_item_4', 'Marketing Cookies: Used to deliver relevant advertisements and track campaign effectiveness.') !!}</li>
                </ul>
                <p style="margin-top: 10px;">{!! $page->section('cookies_text_2', 'You can manage cookie preferences through your browser settings. However, disabling certain cookies may affect the functionality of our website.') !!}</p>
            </div>

            {{-- Data Security --}}
            <div class="feature-card" style="margin-bottom: 30px;">
                <h3 style="color: #d4af37; margin-bottom: 15px;">{!! $page->section('security_title', '4. Data Security') !!}</h3>
                <p>{!! $page->section('security_text_1', 'We take the security of your personal information seriously and implement appropriate technical and organizational measures to protect it:') !!}</p>
                <ul style="margin-top: 10px; padding-left: 20px; line-height: 2;">
                    <li>{!! $page->section('security_item_1', 'SSL/TLS encryption for all data transmitted between your browser and our servers') !!}</li>
                    <li>{!! $page->section('security_item_2', 'Encrypted storage of sensitive personal and financial information') !!}</li>
                    <li>{!! $page->section('security_item_3', 'Regular security assessments and vulnerability testing') !!}</li>
                    <li>{!! $page->section('security_item_4', 'Access controls to limit who can view your personal data') !!}</li>
                    <li>{!! $page->section('security_item_5', 'Secure payment processing through trusted payment gateways') !!}</li>
                </ul>
                <p style="margin-top: 10px;">{!! $page->section('security_text_2', 'While we strive to protect your information, no method of transmission over the Internet is 100% secure. We cannot guarantee absolute security but are committed to continuously improving our security practices.') !!}</p>
            </div>

            {{-- Third Parties --}}
            <div class="feature-card" style="margin-bottom: 30px;">
                <h3 style="color: #d4af37; margin-bottom: 15px;">{!! $page->section('sharing_title', '5. Third-Party Sharing') !!}</h3>
                <p>{!! $page->section('sharing_text_1', 'We do not sell, trade, or rent your personal information to third parties. We may share your information only in the following circumstances:') !!}</p>
                <ul style="margin-top: 10px; padding-left: 20px; line-height: 2;">
                    <li>{!! $page->section('sharing_item_1', 'Service Providers: With trusted partners who help us operate our services (payment processors, hosting providers).') !!}</li>
                    <li>{!! $page->section('sharing_item_2', 'Legal Requirements: When required by law, court order, or government regulation.') !!}</li>
                    <li>{!! $page->section('sharing_item_3', 'Protection of Rights: To protect the rights, property, or safety of Radhey Book, our users, or others.') !!}</li>
                    <li>{!! $page->section('sharing_item_4', 'Consent: With your explicit consent for any other purpose.') !!}</li>
                </ul>
                <p style="margin-top: 10px;">{!! $page->section('sharing_text_2', 'Any third parties with whom we share data are required to maintain the confidentiality and security of your information.') !!}</p>
            </div>

            {{-- Changes to Policy --}}
            <div class="feature-card" style="margin-bottom: 30px;">
                <h3 style="color: #d4af37; margin-bottom: 15px;">{!! $page->section('changes_title', '6. Changes to This Policy') !!}</h3>
                <p>{!! $page->section('changes_text_1', 'We may update this Privacy Policy from time to time to reflect changes in our practices, technology, legal requirements, or other factors. When we make changes:') !!}</p>
                <ul style="margin-top: 10px; padding-left: 20px; line-height: 2;">
                    <li>{!! $page->section('changes_item_1', 'The "Last Updated" date at the top of this policy will be revised') !!}</li>
                    <li>{!! $page->section('changes_item_2', 'For significant changes, we may notify you through WhatsApp, email, or a notice on our website') !!}</li>
                    <li>{!! $page->section('changes_item_3', 'Your continued use of our services after changes are posted constitutes acceptance of the updated policy') !!}</li>
                </ul>
                <p style="margin-top: 10px;">{!! $page->section('changes_text_2', 'We encourage you to review this Privacy Policy periodically to stay informed about how we protect your information.') !!}</p>
            </div>

            {{-- Contact Us --}}
            <div class="feature-card" style="margin-bottom: 30px;">
                <h3 style="color: #d4af37; margin-bottom: 15px;">{!! $page->section('contact_title', '7. Contact Us') !!}</h3>
                <p>{!! $page->section('contact_text_1', 'If you have any questions, concerns, or requests regarding this Privacy Policy or how we handle your personal information, please contact us:') !!}</p>
                <ul style="margin-top: 10px; padding-left: 20px; line-height: 2;">
                    <li>{!! $page->section('contact_item_1', 'WhatsApp: <a href="https://wa.me/' . ($siteSettings['whatsapp_number'] ?? '919876543210') . '" class="text-gold">+91 98765 43210</a>') !!}</li>
                    <li>{!! $page->section('contact_item_2', 'Phone: <a href="tel:+' . ($siteSettings['whatsapp_number'] ?? '919876543210') . '" class="text-gold">+91 98765 43210</a>') !!}</li>
                    <li>{!! $page->section('contact_item_3', 'Email: <a href="mailto:support@radheybettingid.com" class="text-gold">support@radheybettingid.com</a>') !!}</li>
                </ul>
            </div>

        </div>
    </div>
</section>

{{-- CTA SECTION --}}
<section class="section" id="cta" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('cta_title', 'Have Questions About <span class="text-gold">Your Privacy</span>?') !!}</h2>
            <p class="section-subtitle">{!! $page->section('cta_subtitle', 'Contact our support team anytime for privacy-related inquiries.') !!}</p>
        </div>
        <div class="text-center">
            <a href="https://wa.me/{{ $siteSettings['whatsapp_number'] ?? '919876543210' }}?text=Hi%20I%20have%20a%20question%20about%20privacy" class="btn btn-gold btn-lg" target="_blank" rel="noopener">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.5.5 0 00.61.609l4.458-1.495A11.952 11.952 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.319 0-4.476-.682-6.297-1.848l-.44-.292-3.065 1.027 1.027-3.065-.292-.44A9.965 9.965 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                {!! $page->section('cta_button_text', 'Contact Us on WhatsApp') !!}
            </a>
        </div>
    </div>
</section>

@endsection
