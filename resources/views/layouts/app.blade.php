<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="0Xziz8ATA2c_WXDElKHlcOdrbtRgjNEkHeEewZWTv9k" />

    {{-- Google Analytics (gtag.js) --}}
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-P1P9R5NMJ5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-P1P9R5NMJ5');
    </script>

    {{-- Microsoft Clarity --}}
    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "wi84yoo0j2");
    </script>

    {{-- SEO Meta Tags --}}
    <title>@yield('meta_title', 'Radhey Book - India\'s Most Trusted Online Betting ID Provider')</title>
    <meta name="description" content="@yield('meta_description', 'Radhey Book is India\'s most trusted online betting ID provider. Get your cricket betting ID, casino ID, and sports betting ID instantly via WhatsApp. Enjoy Welcome Bonus on first deposit.')">
    <meta name="keywords" content="@yield('meta_keywords', 'betting id, online betting id, cricket betting id, casino id, sports betting, radhey book, betting id provider india')">
    <meta name="author" content="Radhey Book">
    <meta name="robots" content="{{ !empty($noindex) ? 'noindex, nofollow' : 'index, follow' }}">
    <link rel="canonical" href="{{ !empty($canonicalUrl) ? $canonicalUrl : url()->current() }}">

    {{-- Open Graph Tags --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ !empty($canonicalUrl) ? $canonicalUrl : url()->current() }}">
    <meta property="og:title" content="@yield('meta_title', 'Radhey Book - India\'s Most Trusted Online Betting ID Provider')">
    <meta property="og:description" content="@yield('meta_description', 'Get your online betting ID instantly via WhatsApp. Enjoy Welcome Bonus on first deposit. Trusted by 2 Million+ players.')">
    <meta property="og:site_name" content="Radhey Book">
    <meta property="og:locale" content="en_IN">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png') }}">

    {{-- Stylesheet --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v={{ filemtime(public_path('css/app.css')) }}">

    {{-- Schema.org Structured Data --}}
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "WebSite",
        "name": "Radhey Book",
        "url": "{{ url('/') }}",
        "description": "India's Most Trusted Online Betting ID Provider",
        "potentialAction": {
            "@@type": "SearchAction",
            "target": "{{ url('/') }}?s={search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Organization",
        "name": "Radhey Book",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('images/logo.png') }}",
        "description": "India's Most Trusted Online Betting ID Provider",
        "contactPoint": {
            "@@type": "ContactPoint",
            "telephone": "+919876543210",
            "contactType": "customer service",
            "areaServed": "IN",
            "availableLanguage": ["English", "Hindi"]
        },
        "sameAs": []
    }
    </script>

    @stack('styles')
</head>
<body>
    {{-- Reading Progress Bar --}}
    <div id="reading-progress-bar" style="position:fixed;top:0;left:0;width:0%;height:3px;background:linear-gradient(90deg,#d4af37,#f5d060);z-index:10000;transition:width 0.2s ease;"></div>

    {{-- Sticky Header Wrapper --}}
    <div id="sticky-header-wrap" style="position:sticky;top:0;z-index:1000;">
        {{-- Announcement Bar --}}
        @include('partials.announcement')

        {{-- Header / Navigation --}}
        @include('partials.header')
    </div>

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Dynamic Content Blocks --}}
    @if(isset($page))
        @include('partials.content-blocks', ['page' => $page])
    @endif

    {{-- Footer --}}
    @include('partials.footer')

    {{-- Sticky CTA Bar --}}
    <div class="sticky-cta-bar">
        <div class="sticky-cta-inner">
            <a href="https://wa.me/{{ $siteSettings['whatsapp_number'] ?? '919876543210' }}?text=Hi%20I%20want%20a%20Betting%20ID" class="btn btn-gold" target="_blank" rel="noopener">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.5.5 0 00.61.609l4.458-1.495A11.952 11.952 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.319 0-4.476-.682-6.297-1.848l-.44-.292-3.065 1.027 1.027-3.065-.292-.44A9.965 9.965 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                Get ID on WhatsApp
            </a>
        </div>
    </div>


    {{-- Bonus Offer Timer (Homepage only) --}}
    @if(request()->is('/'))
    <div id="bonus-timer">
        <div class="bt-shine"></div>
        <button id="bonus-timer-close" aria-label="Close">&times;</button>
        <div class="bt-header">
            <span class="bt-gift-wrap">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 12 20 22 4 22 4 12"/><rect x="2" y="7" width="20" height="5"/><line x1="12" y1="22" x2="12" y2="7"/><path d="M12 7H7.5a2.5 2.5 0 010-5C11 2 12 7 12 7z"/><path d="M12 7h4.5a2.5 2.5 0 000-5C13 2 12 7 12 7z"/></svg>
            </span>
            <div id="bonus-timer-label">{{ $siteSettings['bonus_label'] ?? 'Bonus Offer Ends in' }}</div>
        </div>
        <div id="bonus-timer-display">
            <div class="bt-box"><div id="bt-hours" class="bt-digit">00</div><div class="bt-unit">Hrs</div></div>
            <div class="bt-colon">:</div>
            <div class="bt-box"><div id="bt-minutes" class="bt-digit">00</div><div class="bt-unit">Min</div></div>
            <div class="bt-colon">:</div>
            <div class="bt-box"><div id="bt-seconds" class="bt-digit">00</div><div class="bt-unit">Sec</div></div>
        </div>
        <a href="https://wa.me/{{ $siteSettings['whatsapp_number'] ?? '919876543210' }}?text=Hi%20I%20want%20a%20Betting%20ID" target="_blank" rel="noopener" class="bt-claim">Claim Now</a>
    </div>
    <style>
        @keyframes btSlideIn { from { transform: translateX(120%); opacity: 0; } to { transform: translateX(0); opacity: 1; } }
        @keyframes btGlowPulse { 0%,100% { box-shadow: 0 8px 30px rgba(0,0,0,0.5), 0 0 20px rgba(212,175,55,0.15); } 50% { box-shadow: 0 8px 30px rgba(0,0,0,0.5), 0 0 35px rgba(212,175,55,0.4); } }
        @keyframes btGiftWiggle { 0%,100% { transform: rotate(0deg) scale(1); } 15% { transform: rotate(-12deg) scale(1.08); } 30% { transform: rotate(12deg) scale(1.08); } 45% { transform: rotate(-8deg) scale(1.05); } 60% { transform: rotate(8deg) scale(1.05); } 75% { transform: rotate(0deg) scale(1); } }
        @keyframes btColonBlink { 0%,49% { opacity: 1; } 50%,100% { opacity: 0.25; } }
        @keyframes btTick { 0% { transform: translateY(-6px) scale(0.85); opacity: 0; } 60% { transform: translateY(2px) scale(1.05); opacity: 1; } 100% { transform: translateY(0) scale(1); opacity: 1; } }
        @keyframes btShine { 0% { transform: translateX(-120%) skewX(-20deg); } 100% { transform: translateX(320%) skewX(-20deg); } }
        @keyframes btClaimPulse { 0%,100% { transform: scale(1); box-shadow: 0 4px 15px rgba(212,175,55,0.35); } 50% { transform: scale(1.03); box-shadow: 0 6px 22px rgba(212,175,55,0.55); } }

        #bonus-timer {
            position: fixed; bottom: 85px; right: 20px;
            background: linear-gradient(135deg, #1a1a2e 0%, #241b3a 50%, #16213e 100%);
            border: 1px solid rgba(212,175,55,0.5);
            border-radius: 14px; padding: 14px 16px;
            z-index: 997; min-width: 240px; max-width: 280px;
            font-family: 'Poppins', sans-serif;
            overflow: hidden;
            animation: btSlideIn 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) both, btGlowPulse 2.8s ease-in-out infinite 0.6s;
            transition: transform 0.3s ease;
        }
        #bonus-timer:hover { transform: translateY(-3px); }
        .bt-shine {
            position: absolute; top: 0; left: 0; width: 40%; height: 100%;
            background: linear-gradient(90deg, transparent, rgba(212,175,55,0.18), transparent);
            animation: btShine 3.2s ease-in-out infinite;
            pointer-events: none;
        }
        #bonus-timer-close {
            position: absolute; top: 6px; right: 8px;
            background: rgba(255,255,255,0.1); border: none; color: #fff;
            width: 22px; height: 22px; border-radius: 50%; cursor: pointer;
            font-size: 14px; line-height: 1;
            display: flex; align-items: center; justify-content: center;
            padding: 0; transition: background 0.2s, transform 0.2s; z-index: 2;
        }
        #bonus-timer-close:hover { background: rgba(255,255,255,0.25); transform: rotate(90deg); }
        .bt-header { display: flex; align-items: center; gap: 10px; margin-bottom: 10px; position: relative; z-index: 1; }
        .bt-gift-wrap { display: inline-flex; animation: btGiftWiggle 2.5s ease-in-out infinite; transform-origin: 50% 60%; }
        #bonus-timer-label { color: #d4af37; font-size: 13px; font-weight: 600; line-height: 1.3; padding-right: 18px; transition: opacity 0.25s ease; }
        #bonus-timer-display { display: flex; gap: 4px; align-items: center; justify-content: flex-start; margin-bottom: 12px; position: relative; z-index: 1; }
        .bt-box {
            background: linear-gradient(145deg, rgba(212,175,55,0.22), rgba(212,175,55,0.08));
            border: 1px solid rgba(212,175,55,0.35);
            border-radius: 7px; padding: 6px 8px; min-width: 40px; text-align: center;
            box-shadow: inset 0 1px 0 rgba(255,255,255,0.08);
        }
        .bt-digit { color: #fff; font-size: 17px; font-weight: 700; line-height: 1; font-variant-numeric: tabular-nums; }
        .bt-digit.bt-flip { animation: btTick 0.45s ease-out; }
        .bt-unit { color: #bfb092; font-size: 9px; text-transform: uppercase; margin-top: 3px; letter-spacing: 0.5px; }
        .bt-colon { color: #d4af37; font-size: 18px; font-weight: 700; padding: 0 1px; margin-top: -10px; animation: btColonBlink 1s steps(2) infinite; }
        .bt-claim {
            display: block; text-align: center; padding: 9px;
            background: linear-gradient(135deg, #d4af37 0%, #f5d060 50%, #d4af37 100%);
            background-size: 200% 100%;
            color: #1a1a2e; border-radius: 7px; text-decoration: none;
            font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px;
            position: relative; z-index: 1;
            animation: btClaimPulse 2s ease-in-out infinite;
            transition: background-position 0.4s ease;
        }
        .bt-claim:hover { background-position: 100% 0; }
        @media (max-width: 600px) {
            #bonus-timer { right: 10px; bottom: 80px; min-width: 200px; max-width: 220px; padding: 10px 12px; }
            .bt-digit { font-size: 14px; }
            .bt-box { min-width: 34px; padding: 5px 6px; }
        }
    </style>
    <script>
        (function() {
            var storageKey = 'bonusTimerClosed_v2';

            if (sessionStorage.getItem(storageKey) === '1') {
                document.getElementById('bonus-timer').style.display = 'none';
                return;
            }

            document.getElementById('bonus-timer-close').addEventListener('click', function() {
                document.getElementById('bonus-timer').style.display = 'none';
                sessionStorage.setItem(storageKey, '1');
            });

            // Set countdown end time: next 12h from first load (stored in localStorage)
            var endKey = 'bonusTimerEnd_2h';
            var twoHoursMs = 2 * 60 * 60 * 1000;
            var endTime = parseInt(localStorage.getItem(endKey), 10);
            // Reset if missing, expired, or stale (more than 2h away)
            if (!endTime || endTime < Date.now() || endTime > Date.now() + twoHoursMs) {
                endTime = Date.now() + twoHoursMs;
                localStorage.setItem(endKey, endTime);
            }

            function pad(n) { return n < 10 ? '0' + n : '' + n; }

            function setDigit(el, val) {
                if (el.textContent === val) return;
                el.textContent = val;
                el.classList.remove('bt-flip');
                void el.offsetWidth;
                el.classList.add('bt-flip');
            }

            function tick() {
                var diff = endTime - Date.now();
                if (diff <= 0) {
                    endTime = Date.now() + (2 * 60 * 60 * 1000);
                    localStorage.setItem(endKey, endTime);
                    diff = endTime - Date.now();
                }
                var h = Math.floor(diff / 3600000);
                var m = Math.floor((diff % 3600000) / 60000);
                var s = Math.floor((diff % 60000) / 1000);
                setDigit(document.getElementById('bt-hours'), pad(h));
                setDigit(document.getElementById('bt-minutes'), pad(m));
                setDigit(document.getElementById('bt-seconds'), pad(s));
            }

            tick();
            setInterval(tick, 1000);
        })();
    </script>
    @endif

    {{-- Welcome Popup --}}
    @include('partials.welcome-popup')

    {{-- Scroll to Top Button --}}
    <button id="scroll-to-top" aria-label="Scroll to top" style="position:fixed;bottom:100px;right:30px;width:45px;height:45px;background:linear-gradient(135deg,#1a1a2e,#16213e);color:#d4af37;border:2px solid #d4af37;border-radius:50%;font-size:20px;cursor:pointer;display:none;align-items:center;justify-content:center;z-index:998;transition:all 0.3s ease;box-shadow:0 4px 15px rgba(0,0,0,0.3);" onclick="window.scrollTo({top:0,behavior:'smooth'})">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="18 15 12 9 6 15"></polyline>
        </svg>
    </button>

    {{-- Main Script --}}
    <script src="{{ asset('js/app.js') }}"></script>

    {{-- Reading Progress Bar Script --}}
    <script>
        window.addEventListener('scroll', function() {
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            var docHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            var scrollPercent = (scrollTop / docHeight) * 100;
            document.getElementById('reading-progress-bar').style.width = scrollPercent + '%';

            // Show/hide scroll to top button
            var scrollBtn = document.getElementById('scroll-to-top');
            if (scrollTop > 300) {
                scrollBtn.style.display = 'flex';
            } else {
                scrollBtn.style.display = 'none';
            }
        });
    </script>

    {{-- Feature card WhatsApp click --}}
    <script>
        (function() {
            var waUrl = 'https://wa.me/{{ $siteSettings['whatsapp_number'] ?? '919876543210' }}?text=Hi%20I%20want%20a%20Betting%20ID';
            document.addEventListener('click', function(e) {
                var card = e.target.closest('.feature-card, .step-item, .step-card, .platform-card, .payment-card, .tip-card, .bonus-card, .care-card, .dw-card, .bonus-type-card, .how-id-works-card, .trust-badge, .stat-item, .service-card');
                if (!card || card.closest('a')) return;
                window.open(waUrl, '_blank');
            });
        })();
    </script>

    {{-- Page-specific Scripts --}}
    @stack('scripts')
</body>
</html>
