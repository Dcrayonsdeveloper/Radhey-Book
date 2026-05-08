@extends('layouts.app')

@section('meta_title', $meta_title ?? "Football Betting ID | Best Football Betting ID Provider - Radhey Book")
@section('meta_description', $meta_description ?? "Get your Football Betting ID from Radhey Book. Bet on Premier League, La Liga, Champions League, Serie A & all football matches. Live betting & instant withdrawals.")
@section('meta_keywords', $meta_keywords ?? 'football betting ID, soccer betting ID, football ID online, premier league betting, champions league betting, football betting ID provider, radhey football id')

@section('content')

{{-- HERO SECTION --}}
<section class="hero-section" id="hero" style="background: url('{{ asset('images/TENNIS FOOTBALL AVIATOR/football_banner_1.png') }}') center/cover no-repeat;">
    <div class="hero-overlay" style="background: rgba(0,0,0,0.55);"></div>
    <div class="hero-content container">
        <div class="hero-badge">
            <span class="badge-pulse"></span>
            {!! $page->section('hero_badge', '#1 Football Betting Platform') !!}
        </div>
        <h1 class="hero-title">{!! $page->section('hero_title', 'Best <span class="text-gold">Football Betting ID</span> Provider in India') !!}</h1>
        <p class="hero-subtitle">{!! $page->section('hero_subtitle', 'Bet on the Premier League, La Liga, Champions League, Serie A, Bundesliga and every major football league worldwide. Live betting, best odds and instant withdrawals.') !!}</p>
        <div class="hero-cta">
            <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">
                {!! $page->section('hero_btn_text', 'Get Football Betting ID on WhatsApp') !!}
            </a>
        </div>
    </div>
</section>

{{-- WHAT IS FOOTBALL BETTING --}}
<section class="section" id="what-is-football-betting">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('what_is_title', 'What is <span class="text-gold">Football Betting</span>?') !!}</h2>
        </div>
        <div style="display:flex;align-items:center;gap:40px;flex-wrap:wrap;">
            <div style="flex:1;min-width:300px;max-width:500px;">
                <img src="{{ asset('images/TENNIS FOOTBALL AVIATOR/football_!.png') }}" alt="Football Betting" style="width:100%;border-radius:16px;">
            </div>
            <div style="flex:1;min-width:300px;">
                <div class="content-block">
                    <p>{!! $page->section('what_is_text_1', 'Football betting is the act of placing wagers on football (soccer) matches and tournaments happening around the world. With a Football Betting ID from Radhey Book, you gain access to thousands of football matches every week across all major leagues, cups and international competitions.') !!}</p>
                    <p>{!! $page->section('what_is_text_2', 'Football is the most popular sport on the planet, and it is also the most widely bet-on sport. From the English Premier League to the UEFA Champions League, from the FIFA World Cup to local league derbies, our platform covers it all with comprehensive betting markets, competitive odds, and real-time live betting.') !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- FOOTBALL BETTING MARKETS --}}
<section class="section section-alt" id="football-markets">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('markets_title', 'Football <span class="text-gold">Betting Markets</span>') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9H4.5a2.5 2.5 0 010-5H6"/><path d="M18 9h1.5a2.5 2.5 0 000-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20 7 22"/><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20 17 22"/><path d="M18 2H6v7a6 6 0 0012 0V2z"/></svg></div>
                <h3>{!! $page->section('market_1_title', 'Match Result (1X2)') !!}</h3>
                <p>{!! $page->section('market_1_text', 'The classic football bet. Predict whether the home team wins (1), the match is a draw (X), or the away team wins (2). Available for every match on our platform.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 2a15 15 0 014 10 15 15 0 01-4 10 15 15 0 01-4-10 15 15 0 014-10z"/><path d="M2 12h20"/></svg></div>
                <h3>{!! $page->section('market_2_title', 'Over/Under Goals') !!}</h3>
                <p>{!! $page->section('market_2_text', 'Bet on the total number of goals scored in a match. Over/Under 2.5 goals is the most popular line, but we offer multiple goal lines including 0.5, 1.5, 3.5 and more.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg></div>
                <h3>{!! $page->section('market_3_title', 'Both Teams to Score') !!}</h3>
                <p>{!! $page->section('market_3_text', 'Predict whether both teams will score at least one goal in the match. A straightforward yes/no market that adds excitement to any football match regardless of the final score.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg></div>
                <h3>{!! $page->section('market_4_title', 'Asian Handicap') !!}</h3>
                <p>{!! $page->section('market_4_text', 'Level the playing field with Asian handicap betting. One team is given a goal advantage or disadvantage to create more balanced odds. Ideal for matches with a clear favourite.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16"/><line x1="9" y1="4" x2="9" y2="20"/><line x1="16" y1="4" x2="16" y2="20"/><line x1="2" y1="10" x2="22" y2="10"/><line x1="2" y1="16" x2="22" y2="16"/></svg></div>
                <h3>{!! $page->section('market_5_title', 'Correct Score') !!}</h3>
                <p>{!! $page->section('market_5_text', 'Predict the exact final score of the match. High odds and big payouts make correct score one of the most rewarding football betting markets when you get it right.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
                <h3>{!! $page->section('market_6_title', 'First/Last/Anytime Goalscorer') !!}</h3>
                <p>{!! $page->section('market_6_text', 'Bet on which player will score the first goal, the last goal, or at any time during the match. Player-specific markets that reward knowledge of attacking form and team tactics.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4" fill="#d4af37"/><path d="M16.24 7.76a6 6 0 010 8.49"/><path d="M19.07 4.93a10 10 0 010 14.14"/><path d="M7.76 16.24a6 6 0 010-8.49"/><path d="M4.93 19.07a10 10 0 010-14.14"/></svg></div>
                <h3>{!! $page->section('market_7_title', 'Live In-Play Betting') !!}</h3>
                <p>{!! $page->section('market_7_text', 'Bet on football matches while they are being played. Odds shift with every goal, card and substitution. React to the action on the pitch and find value in real-time markets.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg></div>
                <h3>{!! $page->section('market_8_title', 'Half-Time/Full-Time') !!}</h3>
                <p>{!! $page->section('market_8_text', 'Predict the result at both half-time and full-time. A combination bet that offers higher odds because you need to correctly forecast two outcomes within the same match.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- MAJOR LEAGUES --}}
<section class="section" id="football-leagues">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('leagues_title', 'Major <span class="text-gold">Football Leagues</span>') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="service-card">
                <h3>{!! $page->section('league_1_title', 'English Premier League') !!}</h3>
                <p>{!! $page->section('league_1_text', 'The most watched football league in the world. Bet on all 380 Premier League matches featuring Manchester City, Arsenal, Liverpool, Manchester United, Chelsea and 15 other elite clubs. Full coverage with 50+ markets per match.') !!}</p>
            </div>
            <div class="service-card">
                <h3>{!! $page->section('league_2_title', 'La Liga (Spain)') !!}</h3>
                <p>{!! $page->section('league_2_text', 'Home to Real Madrid and FC Barcelona. Spanish football is known for technical brilliance and high-scoring matches. Bet on all La Liga fixtures with competitive odds on every market.') !!}</p>
            </div>
            <div class="service-card">
                <h3>{!! $page->section('league_3_title', 'Serie A (Italy)') !!}</h3>
                <p>{!! $page->section('league_3_text', 'Italy\'s top flight featuring Juventus, AC Milan, Inter Milan and Napoli. Serie A is tactically rich and offers great betting opportunities with its blend of defensive solidity and attacking flair.') !!}</p>
            </div>
            <div class="service-card">
                <h3>{!! $page->section('league_4_title', 'Bundesliga (Germany)') !!}</h3>
                <p>{!! $page->section('league_4_text', 'Germany\'s premier division known for its high-scoring matches and electric atmospheres. Bet on Bayern Munich, Borussia Dortmund, RB Leipzig and all 18 Bundesliga clubs every matchday.') !!}</p>
            </div>
            <div class="service-card">
                <h3>{!! $page->section('league_5_title', 'UEFA Champions League') !!}</h3>
                <p>{!! $page->section('league_5_text', 'The biggest club competition in world football. Europe\'s elite clubs battle for continental supremacy from the group stage to the grand final. Premium odds and maximum markets for every Champions League match.') !!}</p>
            </div>
        </div>
        <div style="text-align:center; margin-top:40px;">
            <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">
                {!! $page->section('leagues_btn_text', 'Bet on Football Now') !!}
            </a>
        </div>
    </div>
</section>

{{-- HOW TO BET ON FOOTBALL --}}
<section class="section section-alt" id="how-to-bet-football">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('how_title', 'How to Bet on <span class="text-gold">Football</span>') !!}</h2>
        </div>
        <div class="steps-grid">
            <div class="step-item">
                <div class="step-num">1</div>
                <h3>{!! $page->section('how_step_1_title', 'Get Your Football Betting ID') !!}</h3>
                <p>{!! $page->section('how_step_1_text', 'Message us on WhatsApp and get your Football Betting ID created within minutes. Our 24/7 support team will walk you through the entire process quickly and securely.') !!}</p>
            </div>
            <div class="step-item">
                <div class="step-num">2</div>
                <h3>{!! $page->section('how_step_2_title', 'Deposit & Collect Bonus') !!}</h3>
                <p>{!! $page->section('how_step_2_text', 'Add funds to your account using UPI, bank transfer or any supported method. Minimum deposit is just Rs 100. Claim your welcome bonus to get extra betting credits.') !!}</p>
            </div>
            <div class="step-item">
                <div class="step-num">3</div>
                <h3>{!! $page->section('how_step_3_title', 'Choose Your Football Bets') !!}</h3>
                <p>{!! $page->section('how_step_3_text', 'Browse the football section, select a league or match, review the available markets and odds, and add your selections to the bet slip. You can place single bets or combine multiple selections.') !!}</p>
            </div>
            <div class="step-item">
                <div class="step-num">4</div>
                <h3>{!! $page->section('how_step_4_title', 'Win & Withdraw Instantly') !!}</h3>
                <p>{!! $page->section('how_step_4_text', 'When your bets win, your winnings are credited to your account immediately. Withdraw to your bank account at any time with zero fees and zero waiting time.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- FOOTBALL BETTING TIPS --}}
<section class="section" id="football-tips">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('tips_title', 'Football <span class="text-gold">Betting Tips</span>') !!}</h2>
        </div>
        <div class="tips-grid">
            <div class="tip-card">
                <div class="tip-num">1</div>
                <h3>{!! $page->section('tip_1_title', 'Research Team Form') !!}</h3>
                <p>{!! $page->section('tip_1_text', 'Always check the recent form of both teams before placing a bet. Look at the last 5-10 matches, home and away records, and how teams have performed against similar quality opposition. Form is one of the strongest indicators of future results.') !!}</p>
            </div>
            <div class="tip-card">
                <div class="tip-num">2</div>
                <h3>{!! $page->section('tip_2_title', 'Check Team News & Injuries') !!}</h3>
                <p>{!! $page->section('tip_2_text', 'Key player absences can change the entire dynamic of a match. A team missing its star striker or first-choice goalkeeper is significantly weakened. Always check the team news and injury updates before placing your bets.') !!}</p>
            </div>
            <div class="tip-card">
                <div class="tip-num">3</div>
                <h3>{!! $page->section('tip_3_title', 'Understand Home Advantage') !!}</h3>
                <p>{!! $page->section('tip_3_text', 'Home teams statistically win more often than away teams in football. Consider the home team\'s record at their ground, the quality of their support, and the travel distance for the away team when analyzing a match.') !!}</p>
            </div>
            <div class="tip-card">
                <div class="tip-num">4</div>
                <h3>{!! $page->section('tip_4_title', 'Look for Value Odds') !!}</h3>
                <p>{!! $page->section('tip_4_text', 'Successful football betting is about finding value, not just picking winners. If you believe a team has a 60% chance of winning but the odds suggest only 40%, that is a value bet worth placing even if it does not always win.') !!}</p>
            </div>
            <div class="tip-card">
                <div class="tip-num">5</div>
                <h3>{!! $page->section('tip_5_title', 'Consider Match Context') !!}</h3>
                <p>{!! $page->section('tip_5_text', 'Is it a derby? A cup final? A relegation battle? The context and importance of a match can affect how teams play. Teams fighting relegation often show extra determination, while teams with nothing to play for may underperform.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- WHY CHOOSE RADHEY FOR FOOTBALL --}}
<section class="section section-alt" id="why-radhey-football">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('why_title', 'Why Choose <span class="text-gold">Radhey</span> for Football Betting?') !!}</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></div>
                <h3>{!! $page->section('why_1_title', 'Global League Coverage') !!}</h3>
                <p>{!! $page->section('why_1_text', 'We cover every major football league in the world including Premier League, La Liga, Serie A, Bundesliga, Ligue 1, Champions League, Europa League and more than 100 other leagues.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg></div>
                <h3>{!! $page->section('why_2_title', 'Best Football Odds') !!}</h3>
                <p>{!! $page->section('why_2_text', 'Our football odds are consistently competitive across all markets. Whether you are betting on match result, goals, corners or player specials, you get the best prices.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4" fill="#d4af37"/><path d="M16.24 7.76a6 6 0 010 8.49"/><path d="M19.07 4.93a10 10 0 010 14.14"/><path d="M7.76 16.24a6 6 0 010-8.49"/><path d="M4.93 19.07a10 10 0 010-14.14"/></svg></div>
                <h3>{!! $page->section('why_3_title', 'Live Match Betting') !!}</h3>
                <p>{!! $page->section('why_3_text', 'Our live football betting platform updates in real time. Bet on goals, cards, corners, penalties and more while matches are being played with dynamic in-play odds.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
                <h3>{!! $page->section('why_4_title', 'Instant Payouts') !!}</h3>
                <p>{!! $page->section('why_4_text', 'Withdraw your football betting winnings immediately to your bank account. Every match result is settled quickly, and funds are available for withdrawal without any delays.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg></div>
                <h3>{!! $page->section('why_5_title', 'Bet On Your Phone') !!}</h3>
                <p>{!! $page->section('why_5_text', 'Our mobile-optimized platform lets you bet on football from anywhere. Place bets on your commute, at the pub, or from the stadium itself with our fast mobile interface.') !!}</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 12 20 22 4 22 4 12"/><rect x="2" y="7" width="20" height="5"/><line x1="12" y1="22" x2="12" y2="7"/><path d="M12 7H7.5a2.5 2.5 0 010-5C11 2 12 7 12 7z"/><path d="M12 7h4.5a2.5 2.5 0 000-5C13 2 12 7 12 7z"/></svg></div>
                <h3>{!! $page->section('why_6_title', 'Football Promotions') !!}</h3>
                <p>{!! $page->section('why_6_text', 'Enjoy special promotions during the Premier League season, Champions League nights and major international tournaments. Enhanced odds, free bets and deposit bonuses for football bettors.') !!}</p>
            </div>
        </div>
    </div>
</section>

{{-- FOOTBALL FAQ --}}
<section class="section" id="football-faq">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('faq_title', 'Football Betting <span class="text-gold">FAQ</span>') !!}</h2>
        </div>
        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question">
                    <span>{!! $page->section('faq_1_q', 'How do I get a Football Betting ID?') !!}</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>{!! $page->section('faq_1_a', 'Click the WhatsApp button on this page and send us a message. Our team will create your Football Betting ID within minutes. Deposit funds, and you are ready to start betting on football matches from leagues around the world.') !!}</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>{!! $page->section('faq_2_q', 'What football leagues can I bet on?') !!}</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>{!! $page->section('faq_2_a', 'You can bet on the English Premier League, Spanish La Liga, Italian Serie A, German Bundesliga, French Ligue 1, UEFA Champions League, UEFA Europa League, FIFA World Cup, and over 100 other domestic and international football competitions.') !!}</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>{!! $page->section('faq_3_q', 'Can I bet on football matches live?') !!}</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>{!! $page->section('faq_3_a', 'Yes, we offer comprehensive live in-play betting on football. You can bet on match result, next goal, total goals, corners, cards, and many other markets while the match is in progress. Odds are updated in real time based on match events.') !!}</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>{!! $page->section('faq_4_q', 'What is Over/Under 2.5 goals?') !!}</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>{!! $page->section('faq_4_a', 'Over 2.5 goals means you are betting that there will be 3 or more goals in the match. Under 2.5 goals means you are betting there will be 0, 1 or 2 goals. It is one of the most popular football betting markets because you do not need to pick a winner.') !!}</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>{!! $page->section('faq_5_q', 'What is Asian Handicap betting?') !!}</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>{!! $page->section('faq_5_a', 'Asian Handicap gives one team a virtual goal advantage or disadvantage to level the playing field. For example, if you bet on a team at -1.5, they need to win by 2 or more goals for your bet to win. It eliminates the draw option and often provides better odds than the standard 1X2 market.') !!}</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>{!! $page->section('faq_6_q', 'How quickly are football bets settled?') !!}</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>{!! $page->section('faq_6_a', 'Football bets are settled within minutes of the final whistle. Once a match ends, all markets are settled quickly, winnings are credited to your account, and you can withdraw immediately to your bank account with no delays or hidden charges.') !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA SECTION --}}
<section class="section cta-section" id="football-cta" style="background: url('{{ asset('images/TENNIS FOOTBALL AVIATOR/football_banner_2.png') }}') center/cover no-repeat; position:relative;">
    <div style="position:absolute;inset:0;background:rgba(0,0,0,0.6);"></div>
    <div class="container" style="text-align:center;position:relative;z-index:1;">
        <div class="section-header">
            <h2 class="section-title">{!! $page->section('cta_title', 'Start <span class="text-gold">Football Betting</span> Today') !!}</h2>
        </div>
        <p style="max-width:700px; margin:0 auto 30px; font-size:1.1rem;">{!! $page->section('cta_text', 'Get your Football Betting ID from Radhey Book and bet on the Premier League, Champions League and every major football competition. Best odds, live betting and instant payouts.') !!}</p>
        <a href="https://linktr.ee/radheybook" class="btn btn-gold btn-lg" target="_blank" rel="noopener">
            {!! $page->section('cta_btn_text', 'Get Football Betting ID on WhatsApp') !!}
        </a>
    </div>
</section>

@endsection
