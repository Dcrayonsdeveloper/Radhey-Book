@extends('layouts.app')

@section('meta_title', $meta_title ?? 'Responsible Gaming - Radhey Book | Play Safe, Bet Responsibly')
@section('meta_description', $meta_description ?? 'Radhey Book promotes responsible gaming. Learn about safe gambling practices, warning signs of problem gambling, and self-exclusion options.')
@section('meta_keywords', $meta_keywords ?? 'responsible gaming, responsible gambling, safe betting, problem gambling help, self exclusion, radhey betting id')

@section('content')

{{-- HERO SECTION --}}
<section class="hero-section" id="hero">
    <div class="hero-overlay"></div>
    <div class="hero-content container">
        <div class="hero-badge">
            <span class="badge-pulse"></span>
            {!! $page->section('hero_badge', 'Play Safe') !!}
        </div>
        <h1 class="hero-title">{!! $page->section('hero_title', 'Responsible <span class="text-gold">Gaming</span>') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'At Radhey Book, we believe betting should be fun and entertaining. We are committed to promoting responsible gaming and providing support to those who need it.') !!}</p>
    </div>
</section>

{{-- RESPONSIBLE GAMING INTRO --}}
<section class="section" id="responsible-intro">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('commitment_title', 'Our Commitment to <span class="text-gold">Responsible Gaming</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('commitment_subtitle', 'Betting should always remain enjoyable') !!}</p>
        </div>
        <div class="content-block">
            <p>{!! $page->section('commitment_text_1', 'Radhey Book is committed to ensuring that all our players have a safe, fair, and enjoyable betting experience. While we provide access to exciting betting platforms, we recognize that gambling can become problematic for some individuals. We encourage all our players to bet responsibly, stay within their means, and seek help if they feel their gambling habits are becoming unhealthy.') !!}</p>
            <p>{!! $page->section('commitment_text_2', 'We actively promote responsible gaming through education, self-help tools, and access to professional support services. Remember: gambling should always be a form of entertainment, not a way to make money.') !!}</p>
        </div>
    </div>
</section>

{{-- TIPS FOR RESPONSIBLE GAMBLING --}}
<section class="section" id="tips" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('tips_title', 'Tips for <span class="text-gold">Responsible Gambling</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('tips_subtitle', 'Follow these guidelines for a safe betting experience') !!}</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                </div>
                <h3>{!! $page->section('tip_1_title', 'Set a Budget') !!}</h3>
                <p>{!! $page->section('tip_1_text', 'Decide on a fixed amount you can afford to lose before you start betting. Never bet more than you can comfortably afford to lose.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <h3>{!! $page->section('tip_2_title', 'Set Time Limits') !!}</h3>
                <p>{!! $page->section('tip_2_text', 'Decide in advance how much time you will spend betting. Take regular breaks and do not let gambling interfere with your daily life.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                </div>
                <h3>{!! $page->section('tip_3_title', 'Never Chase Losses') !!}</h3>
                <p>{!! $page->section('tip_3_text', 'If you lose, do not try to win back your losses by betting more. Accept the loss and stick to your budget.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                </div>
                <h3>{!! $page->section('tip_4_title', 'Do Not Bet Under Influence') !!}</h3>
                <p>{!! $page->section('tip_4_text', 'Avoid gambling when you are under the influence of alcohol, drugs, or when you are emotionally distressed.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3>{!! $page->section('tip_5_title', 'Keep It Fun') !!}</h3>
                <p>{!! $page->section('tip_5_text', 'Treat betting as entertainment, not as an income source. If it stops being fun, it is time to take a break.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                </div>
                <h3>{!! $page->section('tip_6_title', 'Balance Your Life') !!}</h3>
                <p>{!! $page->section('tip_6_text', 'Make sure gambling does not take priority over family, friends, work, or other important activities in your life.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- WARNING SIGNS --}}
<section class="section" id="warning-signs">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('warning_title', 'Warning Signs of <span class="text-gold">Problem Gambling</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('warning_subtitle', 'Recognize these signs early and seek help') !!}</p>
        </div>
        <div style="max-width: 800px; margin: 0 auto;">
            <div class="feature-card" style="margin-bottom: 20px;">
                <h3 style="color: #d4af37; margin-bottom: 15px;">{!! $page->section('warning_heading', 'Do you recognize any of these behaviors?') !!}</h3>
                <ul style="padding-left: 20px; line-height: 2.2;">
                    <li>{!! $page->section('warning_item_1', 'Spending more money on gambling than you can afford to lose') !!}</li>
                    <li>{!! $page->section('warning_item_2', 'Borrowing money or selling possessions to gamble') !!}</li>
                    <li>{!! $page->section('warning_item_3', 'Chasing losses by betting more to try to recover what you lost') !!}</li>
                    <li>{!! $page->section('warning_item_4', 'Neglecting work, studies, or family responsibilities due to gambling') !!}</li>
                    <li>{!! $page->section('warning_item_5', 'Lying to family or friends about how much time or money you spend gambling') !!}</li>
                    <li>{!! $page->section('warning_item_6', 'Feeling restless or irritable when trying to cut down on gambling') !!}</li>
                    <li>{!! $page->section('warning_item_7', 'Using gambling to escape from stress, anxiety, or depression') !!}</li>
                    <li>{!! $page->section('warning_item_8', 'Needing to bet with increasing amounts of money to achieve excitement') !!}</li>
                    <li>{!! $page->section('warning_item_9', 'Repeatedly trying to control, cut back, or stop gambling without success') !!}</li>
                    <li>{!! $page->section('warning_item_10', 'Continuing to gamble despite negative consequences in your personal or financial life') !!}</li>
                </ul>
                <p style="margin-top: 15px; font-weight: 600;">{!! $page->section('warning_footer', 'If you recognize one or more of these signs in yourself or someone you know, it may be time to seek help.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- SELF-EXCLUSION --}}
<section class="section" id="self-exclusion" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('exclusion_title', 'Self-Exclusion <span class="text-gold">Options</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('exclusion_subtitle', 'Take control of your gambling habits') !!}</p>
        </div>
        <div style="max-width: 800px; margin: 0 auto;">
            <div class="feature-card" style="margin-bottom: 20px;">
                <h3 style="color: #d4af37; margin-bottom: 15px;">{!! $page->section('exclusion_intro_title', 'What is Self-Exclusion?') !!}</h3>
                <p>{!! $page->section('exclusion_intro_text', 'Self-exclusion is a voluntary program that allows you to restrict your access to gambling services for a specified period. If you feel that you need a break from gambling, Radhey Book offers the following self-exclusion options:') !!}</p>
            </div>
            <div class="features-grid">
                <div class="feature-card" style="text-align: center;">
                    <div class="feature-icon">
                        <span style="font-size: 1.5em; color: #d4af37; font-weight: 700;">{!! $page->section('exclusion_1_duration', '24 Hours') !!}</span>
                    </div>
                    <h3>{!! $page->section('exclusion_1_title', 'Cool-Off Period') !!}</h3>
                    <p>{!! $page->section('exclusion_1_text', 'Take a 24-hour break from betting to clear your head and reassess your gambling activity.') !!}</p>
                </div>
                <div class="feature-card" style="text-align: center;">
                    <div class="feature-icon">
                        <span style="font-size: 1.5em; color: #d4af37; font-weight: 700;">{!! $page->section('exclusion_2_duration', '7-30 Days') !!}</span>
                    </div>
                    <h3>{!! $page->section('exclusion_2_title', 'Short-Term Break') !!}</h3>
                    <p>{!! $page->section('exclusion_2_text', 'Take a break from 1 week to 1 month. Your account will be temporarily suspended during this period.') !!}</p>
                </div>
                <div class="feature-card" style="text-align: center;">
                    <div class="feature-icon">
                        <span style="font-size: 1.5em; color: #d4af37; font-weight: 700;">{!! $page->section('exclusion_3_duration', '6+ Months') !!}</span>
                    </div>
                    <h3>{!! $page->section('exclusion_3_title', 'Long-Term Exclusion') !!}</h3>
                    <p>{!! $page->section('exclusion_3_text', 'For those who need a longer break. Your account will be closed for the selected duration.') !!}</p>
                </div>
            </div>
            <div class="text-center" style="margin-top: 30px;">
                <p>{!! $page->section('exclusion_cta_text', 'To request self-exclusion, contact us on WhatsApp or email and we will process your request immediately.') !!}</p>
                <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener" style="margin-top: 15px;">{!! $page->section('exclusion_btn_text', 'Request Self-Exclusion') !!}</a>
            </div>
        </div>
    </div>
</section>

{{-- SUPPORT RESOURCES --}}
<section class="section" id="support-resources">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('resources_title', 'Support <span class="text-gold">Resources</span>') !!}</h2>
            <p class="section-subtitle">{!! $page->section('resources_subtitle', 'Professional help is available') !!}</p>
        </div>
        <div style="max-width: 800px; margin: 0 auto;">
            <div class="content-block" style="margin-bottom: 30px;">
                <p>{!! $page->section('resources_intro', 'If you or someone you know is struggling with problem gambling, professional help is available. The following organizations provide free, confidential support:') !!}</p>
            </div>
            <div class="features-grid">
                <div class="feature-card" style="text-align: center;">
                    <div class="feature-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
                    </div>
                    <h3>{!! $page->section('resource_1_title', 'Gamblers Anonymous') !!}</h3>
                    <p>{!! $page->section('resource_1_text', 'A fellowship of men and women who share their experience, strength, and hope with each other to solve their common problem.') !!}</p>
                    <p style="color: #d4af37; font-weight: 600; margin-top: 10px;">{!! $page->section('resource_1_link', 'www.gamblersanonymous.org') !!}</p>
                </div>
                <div class="feature-card" style="text-align: center;">
                    <div class="feature-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/></svg>
                    </div>
                    <h3>{!! $page->section('resource_2_title', 'National Problem Gambling Helpline') !!}</h3>
                    <p>{!! $page->section('resource_2_text', 'Free, confidential, 24/7 helpline for anyone affected by problem gambling.') !!}</p>
                    <p style="color: #d4af37; font-weight: 600; margin-top: 10px;">{!! $page->section('resource_2_link', '1-800-522-4700') !!}</p>
                </div>
                <div class="feature-card" style="text-align: center;">
                    <div class="feature-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="1.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    </div>
                    <h3>{!! $page->section('resource_3_title', 'BeGambleAware') !!}</h3>
                    <p>{!! $page->section('resource_3_text', 'Provides information and advice about gambling, including help for those with gambling problems.') !!}</p>
                    <p style="color: #d4af37; font-weight: 600; margin-top: 10px;">{!! $page->section('resource_3_link', 'www.begambleaware.org') !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA SECTION --}}
<section class="section" id="cta" style="background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #0a0a1a 100%);">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('cta_title', 'Need <span class="text-gold">Help</span>?') !!}</h2>
            <p class="section-subtitle">{!! $page->section('cta_text', 'If you need assistance with responsible gaming, self-exclusion, or any concerns, our team is here to help 24/7.') !!}</p>
        </div>
        <div class="text-center">
            <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.5.5 0 00.61.609l4.458-1.495A11.952 11.952 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.319 0-4.476-.682-6.297-1.848l-.44-.292-3.065 1.027 1.027-3.065-.292-.44A9.965 9.965 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                {!! $page->section('hero_btn_text', 'Contact Support on WhatsApp') !!}
            </a>
        </div>
        <div class="text-center" style="margin-top: 15px;">
            <p style="opacity: 0.7;">{!! $page->section('cta_contact_info', 'Email: <a href="mailto:support@radheybettingid.com" class="text-gold">support@radheybettingid.com</a> | Phone: <a href="tel:+917901712857" class="text-gold">+91 79017 12857</a>') !!}</p>
        </div>
    </div>
</section>

@endsection
