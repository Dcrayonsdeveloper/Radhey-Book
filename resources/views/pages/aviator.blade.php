@extends('layouts.app')

@section('meta_title', $meta_title ?? "Aviator Game ID | Play Aviator Online - Radhey Book")
@section('meta_description', $meta_description ?? "Play Aviator game online with Radhey Book. Get your Aviator Game ID instantly. Learn crash game strategies, tips & how to win. Instant withdrawals via WhatsApp.")
@section('meta_keywords', $meta_keywords ?? 'aviator game, aviator game ID, play aviator online, aviator crash game, aviator betting ID, aviator game strategy, aviator tips, radhey aviator id')

@section('content')

{{-- HERO SECTION --}}
<section class="hero-section" id="hero" style="background: url('{{ asset('images/TENNIS FOOTBALL AVIATOR/aviator_banner_1.png') }}') center/cover no-repeat;">
    <div class="hero-overlay" style="background: rgba(0,0,0,0.55);"></div>
    <div class="hero-content container">
        <div class="hero-badge">
            <span class="badge-pulse"></span>
            {!! $page->section('hero_badge', '#1 Aviator Game Platform') !!}
        </div>
        <h1 class="hero-title">{!! $page->section('hero_title', 'Play <span class="text-gold">Aviator Game</span> Online with Radhey Book') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'Experience the thrill of the Aviator crash game. Watch the multiplier rise, cash out at the right moment and win big. Get your Aviator Game ID instantly via WhatsApp.') !!}</p>
        <div class="hero-cta">
            <a href="https://wa.me/{{ $siteSettings['whatsapp_number'] ?? '919876543210' }}?text=Hi%20I%20want%20a%20Betting%20ID" class="btn btn-gold btn-lg" target="_blank" rel="noopener">
                {!! $page->section('hero_btn_text', 'Get Aviator Game ID on WhatsApp') !!}
            </a>
        </div>
    </div>
</section>

{{-- WHAT IS AVIATOR --}}
<section class="section" id="what-is-aviator">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('what_is_title', 'What is the <span class="text-gold">Aviator Game</span>?') !!}</h2>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/TENNIS FOOTBALL AVIATOR/aviator_1.png') }}" alt="Aviator Game" style="width:100%;border-radius:16px;">
            </div>
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('what_is_text_1', 'Aviator is a popular crash-style game that has taken the online gaming world by storm. The game features a virtual aeroplane that takes off and flies higher and higher, with a multiplier that increases as the plane ascends. Your goal is simple: place a bet before the round starts and cash out before the plane flies away.') !!}</p>
                    <p>{!! $page->section('what_is_text_2', 'The multiplier starts at 1.00x and increases rapidly as the plane climbs. It can reach 2x, 5x, 10x, 50x, 100x or even higher. But here is the catch -- the plane can crash at any moment, and if you have not cashed out before it does, you lose your bet. The tension of watching the multiplier climb while deciding when to cash out is what makes Aviator one of the most exciting online games available today.') !!}</p>
                    <p>{!! $page->section('what_is_text_3', 'Aviator is built on provably fair technology, meaning every round\'s outcome is determined by a cryptographic algorithm that cannot be manipulated. You can verify the fairness of every single round, ensuring complete transparency and trust in the game.') !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- HOW AVIATOR WORKS --}}
<section class="section section-alt" id="how-aviator-works">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('how_works_title', 'How the <span class="text-gold">Aviator Game</span> Works') !!}</h2>
        </div>
        <div class="steps-grid">
            <div class="step-item">
                <div class="step-num">1</div>
                <h3>{!! $page->section('how_works_step_1_title', 'Place Your Bet') !!}</h3>
                <p>{!! $page->section('how_works_step_1_text', 'Before each round begins, you have a short window to place your bet. You can place one or two simultaneous bets per round. Choose your stake amount and confirm your bet before the countdown ends.') !!}</p>
            </div>
            <div class="step-item">
                <div class="step-num">2</div>
                <h3>{!! $page->section('how_works_step_2_title', 'Watch the Plane Fly') !!}</h3>
                <p>{!! $page->section('how_works_step_2_text', 'The round starts and the virtual plane takes off. As it flies, the multiplier increases from 1.00x upward. The multiplier grows rapidly at first and then slows down as it climbs higher, building suspense with every second.') !!}</p>
            </div>
            <div class="step-item">
                <div class="step-num">3</div>
                <h3>{!! $page->section('how_works_step_3_title', 'Cash Out in Time') !!}</h3>
                <p>{!! $page->section('how_works_step_3_text', 'Hit the cash out button at any point while the plane is still flying to lock in your winnings. Your payout is your bet amount multiplied by the current multiplier. Wait too long and the plane crashes, and you lose your bet.') !!}</p>
            </div>
            <div class="step-item">
                <div class="step-num">4</div>
                <h3>{!! $page->section('how_works_step_4_title', 'Collect Your Winnings') !!}</h3>
                <p>{!! $page->section('how_works_step_4_text', 'If you cashed out in time, your winnings are credited to your account instantly. For example, if you bet Rs 100 and cash out at 3.50x, you win Rs 350. You can then play another round or withdraw your balance.') !!}</p>
            </div>
        </div>
        <div style="text-align:center; margin-top:30px;">
            <a href="https://wa.me/{{ $siteSettings['whatsapp_number'] ?? '919876543210' }}?text=Hi%20I%20want%20a%20Betting%20ID" class="btn btn-gold btn-lg" target="_blank" rel="noopener">
                {!! $page->section('how_works_btn_text', 'Play Aviator Now') !!}
            </a>
        </div>
    </div>
</section>

{{-- AVIATOR GAME FEATURES --}}
<section class="section" id="aviator-features">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('features_title', 'Aviator Game <span class="text-gold">Features</span>') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="6" y1="12" x2="10" y2="12"/><line x1="8" y1="10" x2="8" y2="14"/><line x1="15" y1="13" x2="15.01" y2="13"/><line x1="18" y1="11" x2="18.01" y2="11"/><rect x="2" y="6" width="20" height="12" rx="2"/></svg></div>
                <h3>{!! $page->section('feature_1_title', 'Two Simultaneous Bets') !!}</h3>
                <p>{!! $page->section('feature_1_text', 'Place two independent bets in the same round. Cash out one bet early for a safe return and let the other ride for a higher multiplier. A built-in risk management feature for smart players.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="10" rx="2"/><circle cx="12" cy="5" r="3"/><line x1="12" y1="8" x2="12" y2="11"/><line x1="8" y1="16" x2="8.01" y2="16"/><line x1="16" y1="16" x2="16.01" y2="16"/></svg></div>
                <h3>{!! $page->section('feature_2_title', 'Auto Cash Out') !!}</h3>
                <p>{!! $page->section('feature_2_text', 'Set an automatic cash-out multiplier before the round starts. If the plane reaches your target multiplier, the system cashes out for you automatically. Perfect for disciplined players who stick to their strategy.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div>
                <h3>{!! $page->section('feature_3_title', 'Provably Fair') !!}</h3>
                <p>{!! $page->section('feature_3_text', 'Every Aviator round uses a provably fair algorithm. The result is generated using a combination of server seed and client seeds, and you can verify the fairness of any round after it ends.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg></div>
                <h3>{!! $page->section('feature_4_title', 'Live Statistics') !!}</h3>
                <p>{!! $page->section('feature_4_text', 'View the history of previous rounds, see the multipliers at which the plane crashed, and analyze patterns. Live stats help you make informed decisions about your betting and cash-out strategy.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4-4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div>
                <h3>{!! $page->section('feature_5_title', 'Multiplayer Experience') !!}</h3>
                <p>{!! $page->section('feature_5_text', 'See other players\' bets and cash-outs in real time. Watch what others are doing, learn from experienced players, and enjoy the social aspect of the game with a live player feed.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg></div>
                <h3>{!! $page->section('feature_6_title', 'Fast Rounds') !!}</h3>
                <p>{!! $page->section('feature_6_text', 'Each Aviator round takes only a few seconds to a few minutes. Rapid gameplay means you can play dozens of rounds in a short session, keeping the action constant and the excitement non-stop.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- AVIATOR STRATEGIES & TIPS --}}
<section class="section section-alt" id="aviator-strategies">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('strategies_title', 'Aviator <span class="text-gold">Strategies & Tips</span>') !!}</h2>
        </div>
        <div class="tips-grid">
            <div class="tip-card">
                <div class="tip-num">1</div>
                <h3>{!! $page->section('strategy_1_title', 'Start with Small Bets') !!}</h3>
                <p>{!! $page->section('strategy_1_text', 'When you are new to Aviator, start with small bet amounts to understand the game mechanics and develop a feel for the timing. As you gain experience and confidence, you can gradually increase your stakes. Never risk more than you can afford to lose in a single round.') !!}</p>
            </div>
            <div class="tip-card">
                <div class="tip-num">2</div>
                <h3>{!! $page->section('strategy_2_title', 'Use the Two-Bet Strategy') !!}</h3>
                <p>{!! $page->section('strategy_2_text', 'Place two bets each round. Set one bet to auto cash out at a low multiplier like 1.50x for consistent small wins. Let the second bet ride for a higher multiplier like 5x or 10x. This way, you secure regular returns while still chasing bigger payouts.') !!}</p>
            </div>
            <div class="tip-card">
                <div class="tip-num">3</div>
                <h3>{!! $page->section('strategy_3_title', 'Set Auto Cash Out Targets') !!}</h3>
                <p>{!! $page->section('strategy_3_text', 'Decide your target multiplier before the round begins and use the auto cash-out feature. This removes emotion from the equation and ensures you stick to your strategy. A target of 1.50x to 2.00x provides a good balance of risk and reward.') !!}</p>
            </div>
            <div class="tip-card">
                <div class="tip-num">4</div>
                <h3>{!! $page->section('strategy_4_title', 'Do Not Chase Losses') !!}</h3>
                <p>{!! $page->section('strategy_4_text', 'If you lose a few rounds in a row, resist the urge to double your bet to recover losses quickly. This is a common mistake that leads to bigger losses. Stick to your planned bet size and trust your strategy over the long term.') !!}</p>
            </div>
            <div class="tip-card">
                <div class="tip-num">5</div>
                <h3>{!! $page->section('strategy_5_title', 'Set a Session Budget') !!}</h3>
                <p>{!! $page->section('strategy_5_text', 'Before you start playing, decide how much you are willing to spend in that session and stick to it. When you reach your budget limit, stop playing regardless of whether you are winning or losing. Disciplined bankroll management is the key to long-term enjoyment.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- WHY PLAY AVIATOR ON RADHEY --}}
<section class="section" id="why-radhey-aviator">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('why_title', 'Why Play Aviator on <span class="text-gold">Radhey Book</span>?') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg></div>
                <h3>{!! $page->section('why_1_title', 'Instant Account Setup') !!}</h3>
                <p>{!! $page->section('why_1_text', 'Get your Aviator Game ID in under 2 minutes via WhatsApp. No lengthy registration forms, no document verification delays. Message us and start playing Aviator within minutes.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
                <h3>{!! $page->section('why_2_title', 'Low Minimum Bets') !!}</h3>
                <p>{!! $page->section('why_2_text', 'Start playing Aviator with bets as low as Rs 10. Our platform is accessible to players of all budgets, from casual gamers to serious players looking for big multipliers.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18"/><path d="M3 10h18"/><path d="M12 3l9 7H3l9-7z"/><line x1="6" y1="10" x2="6" y2="21"/><line x1="10" y1="10" x2="10" y2="21"/><line x1="14" y1="10" x2="14" y2="21"/><line x1="18" y1="10" x2="18" y2="21"/></svg></div>
                <h3>{!! $page->section('why_3_title', 'Instant Withdrawals') !!}</h3>
                <p>{!! $page->section('why_3_text', 'Cash out your Aviator winnings and withdraw to your bank account instantly. No processing time, no minimum withdrawal amount, no hidden fees. Your money is always accessible.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 12 20 22 4 22 4 12"/><rect x="2" y="7" width="20" height="5"/><line x1="12" y1="22" x2="12" y2="7"/><path d="M12 7H7.5a2.5 2.5 0 010-5C11 2 12 7 12 7z"/><path d="M12 7h4.5a2.5 2.5 0 000-5C13 2 12 7 12 7z"/></svg></div>
                <h3>{!! $page->section('why_4_title', 'Welcome Bonus') !!}</h3>
                <p>{!! $page->section('why_4_text', 'New players receive a bonus on their first deposit, giving you extra funds to play Aviator. More balance means more rounds, more chances to hit big multipliers and more fun.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg></div>
                <h3>{!! $page->section('why_5_title', 'Play on Any Device') !!}</h3>
                <p>{!! $page->section('why_5_text', 'Aviator runs smoothly on mobile phones, tablets, laptops and desktops. The game is optimized for all screen sizes with fast loading and responsive controls on every device.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3>{!! $page->section('why_6_title', '24/7 Support') !!}</h3>
                <p>{!! $page->section('why_6_text', 'Our WhatsApp support team is available around the clock to help with deposits, withdrawals, technical issues or any questions you have about the Aviator game.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- HOW TO GET AVIATOR ID --}}
<section class="section section-alt" id="how-to-get-aviator-id">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('how_title', 'How to Get Your <span class="text-gold">Aviator Game ID</span>') !!}</h2>
        </div>
        <div class="steps-grid">
            <div class="step-item">
                <div class="step-num">1</div>
                <h3>{!! $page->section('how_step_1_title', 'WhatsApp Us') !!}</h3>
                <p>{!! $page->section('how_step_1_text', 'Click the WhatsApp button below and send a message saying you want an Aviator Game ID. Our team responds within seconds, 24 hours a day, 7 days a week.') !!}</p>
            </div>
            <div class="step-item">
                <div class="step-num">2</div>
                <h3>{!! $page->section('how_step_2_title', 'Receive Your ID') !!}</h3>
                <p>{!! $page->section('how_step_2_text', 'Your Aviator Game ID will be created and sent to you within 2 minutes. Login credentials are shared securely via WhatsApp. No paperwork, no waiting.') !!}</p>
            </div>
            <div class="step-item">
                <div class="step-num">3</div>
                <h3>{!! $page->section('how_step_3_title', 'Make a Deposit') !!}</h3>
                <p>{!! $page->section('how_step_3_text', 'Fund your account using UPI, bank transfer or any supported payment method. Deposits are instant. Claim your welcome bonus to boost your starting balance.') !!}</p>
            </div>
            <div class="step-item">
                <div class="step-num">4</div>
                <h3>{!! $page->section('how_step_4_title', 'Start Playing Aviator') !!}</h3>
                <p>{!! $page->section('how_step_4_text', 'Login, navigate to the Aviator game, place your bet and watch the plane fly. Cash out at the right moment and win big. Withdraw your winnings instantly anytime.') !!}</p>
            </div>
        </div>
        <div style="text-align:center; margin-top:40px;">
            <a href="https://wa.me/{{ $siteSettings['whatsapp_number'] ?? '919876543210' }}?text=Hi%20I%20want%20a%20Betting%20ID" class="btn btn-gold btn-lg" target="_blank" rel="noopener">
                {!! $page->section('how_btn_text', 'Get Aviator ID on WhatsApp') !!}
            </a>
        </div>
    </div>
</section>

{{-- AVIATOR FAQ --}}
<section class="section" id="aviator-faq">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('faq_title', 'Aviator Game <span class="text-gold">FAQ</span>') !!}</h2>
        </div>
        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question">
                    <span>{!! $page->section('faq_1_q', 'What is the Aviator game?') !!}</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>{!! $page->section('faq_1_a', 'Aviator is a crash-style game where a virtual plane takes off and a multiplier increases as it flies. You place a bet and must cash out before the plane crashes. If you cash out in time, you win your bet multiplied by the current multiplier. If the plane crashes before you cash out, you lose your bet.') !!}</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>{!! $page->section('faq_2_q', 'Is the Aviator game fair?') !!}</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>{!! $page->section('faq_2_a', 'Yes, Aviator uses provably fair technology. Each round\'s outcome is determined by a cryptographic algorithm using server and client seeds. You can verify the fairness of every round after it ends. The results cannot be manipulated by anyone, including the game provider.') !!}</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>{!! $page->section('faq_3_q', 'What is the maximum multiplier in Aviator?') !!}</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>{!! $page->section('faq_3_a', 'There is no fixed maximum multiplier. The plane can theoretically fly to very high multipliers -- rounds reaching 100x, 200x or even higher do occur, though they are rare. Most rounds crash between 1x and 10x, with occasional high-multiplier rounds providing massive payout opportunities.') !!}</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>{!! $page->section('faq_4_q', 'Can I play Aviator on my mobile phone?') !!}</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>{!! $page->section('faq_4_a', 'Absolutely. Aviator is fully optimized for mobile play. The game runs smoothly on Android and iOS devices with responsive controls, fast loading and the same features available on desktop. You can play on your phone anytime, anywhere with a stable internet connection.') !!}</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>{!! $page->section('faq_5_q', 'What is the minimum bet in Aviator?') !!}</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>{!! $page->section('faq_5_a', 'The minimum bet to play Aviator on our platform starts from just Rs 10. This makes it accessible for all players regardless of budget. You can also place two simultaneous bets per round with different amounts for a more strategic approach.') !!}</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>{!! $page->section('faq_6_q', 'How do I withdraw my Aviator winnings?') !!}</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>{!! $page->section('faq_6_a', 'Withdrawals are instant at Radhey Book. After you win in Aviator, your funds are immediately available in your account balance. You can withdraw to your bank account at any time with no processing delay, no minimum withdrawal limit, and no hidden fees.') !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA SECTION --}}
<section class="section cta-section" id="aviator-cta" style="background: url('{{ asset('images/TENNIS FOOTBALL AVIATOR/aviator_banner_2.png') }}') center/cover no-repeat; position:relative;">
    <div style="position:absolute;inset:0;background:rgba(0,0,0,0.6);"></div>
    <div class="container" style="text-align:center;position:relative;z-index:1;">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('cta_title', 'Ready to Play <span class="text-gold">Aviator</span>?') !!}</h2>
        </div>
        <p style="max-width:700px; margin:0 auto 30px; font-size:1.1rem;">{!! $page->section('cta_text', 'Get your Aviator Game ID from Radhey Book and start playing in under 2 minutes. Place your bets, watch the plane fly, cash out at the right time and win big. Instant withdrawals guaranteed.') !!}</p>
        <a href="https://wa.me/{{ $siteSettings['whatsapp_number'] ?? '919876543210' }}?text=Hi%20I%20want%20a%20Betting%20ID" class="btn btn-gold btn-lg" target="_blank" rel="noopener">
            {!! $page->section('cta_btn_text', 'Get Aviator Game ID on WhatsApp') !!}
        </a>
    </div>
</section>

@endsection
