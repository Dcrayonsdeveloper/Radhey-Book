{{-- Header / Navigation --}}
@php
    /**
     * Map a menu item URL to whether the current request is on that path.
     * Treats root '/' as exact match; everything else is treated as a prefix
     * (so /cricket-betting-id matches /cricket-betting-id and any nested route).
     */
    $menuActive = function (string $url): bool {
        $url = trim($url);
        if ($url === '' || $url === '#' || str_starts_with($url, 'http') || str_starts_with($url, 'javascript')) {
            return false;
        }
        if ($url === '/') {
            return request()->is('/');
        }
        $path = ltrim($url, '/');
        return request()->is($path) || request()->is($path . '/*');
    };

    /**
     * A parent dropdown is active when any of its children match the current URL,
     * OR when its own URL matches.
     */
    $menuParentActive = function (array $item) use ($menuActive): bool {
        if ($menuActive($item['url'] ?? '')) return true;
        foreach (($item['children'] ?? []) as $child) {
            if ($menuActive($child['url'] ?? '')) return true;
        }
        return false;
    };
@endphp

<header id="site-header" style="background:linear-gradient(135deg,#0a0a1a,#1a1a2e,#0a0a1a);padding:0;z-index:1000;transition:box-shadow 0.3s ease;font-family:'Poppins',sans-serif;">
    <nav style="max-width:1280px;margin:0 auto;display:flex;align-items:center;justify-content:space-between;padding:12px 20px;">

        {{-- Logo --}}
        <a href="{{ url('/') }}" style="text-decoration:none;display:flex;align-items:center;gap:8px;">
            <span style="font-family:'Orbitron',sans-serif;font-size:28px;font-weight:800;background:linear-gradient(135deg,#d4af37,#f5d060,#d4af37);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;letter-spacing:2px;text-transform:uppercase;">Radhey</span>
            <span style="font-family:'Poppins',sans-serif;font-size:10px;color:#d4af37;text-transform:uppercase;letter-spacing:1.5px;border-left:2px solid #d4af37;padding-left:8px;line-height:1.3;">Book</span>
        </a>

        {{-- Desktop Navigation (rendered from header_main menu in DB) --}}
        <ul id="nav-menu" style="display:flex;list-style:none;align-items:center;gap:5px;margin:0;padding:0;">
            @foreach($headerMenu as $item)
                @php
                    $hasChildren = !empty($item['children']);
                    $isActive    = $hasChildren ? $menuParentActive($item) : $menuActive($item['url'] ?? '');
                    $color       = $isActive ? '#d4af37' : '#ffffff';
                    $weight      = $isActive ? '600' : '500';
                    $bg          = $isActive ? 'background:rgba(212,175,55,0.1);' : '';
                    $href        = $hasChildren ? ($item['url'] !== '#' ? $item['url'] : 'javascript:void(0)') : ($item['url'] ?? '#');
                @endphp

                @if($hasChildren)
                    <li style="position:relative;" class="nav-dropdown">
                        <a href="{{ $href }}" target="{{ $item['target'] ?? '_self' }}" class="dropdown-toggle"
                           style="color:{{ $color }};text-decoration:none;font-size:14px;font-weight:{{ $weight }};padding:8px 14px;border-radius:6px;transition:all 0.3s ease;display:flex;align-items:center;gap:4px;{{ $bg }}">
                            {{ $item['label'] }}
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="transition:transform 0.3s ease;"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="dropdown-menu" style="position:absolute;top:100%;left:0;background:linear-gradient(135deg,#1a1a2e,#16213e);min-width:220px;border-radius:8px;padding:8px 0;box-shadow:0 10px 40px rgba(0,0,0,0.5);border:1px solid rgba(212,175,55,0.2);display:none;z-index:100;">
                            @foreach($item['children'] as $child)
                                @php $childActive = $menuActive($child['url'] ?? ''); @endphp
                                <li><a href="{{ $child['url'] ?? '#' }}" target="{{ $child['target'] ?? '_self' }}"
                                       style="display:block;padding:10px 20px;color:{{ $childActive ? '#d4af37' : '#ffffff' }};text-decoration:none;font-size:13px;transition:all 0.3s ease;">{{ $child['label'] }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li>
                        <a href="{{ $href }}" target="{{ $item['target'] ?? '_self' }}"
                           style="color:{{ $color }};text-decoration:none;font-size:14px;font-weight:{{ $weight }};padding:8px 14px;border-radius:6px;transition:all 0.3s ease;{{ $bg }}">{{ $item['label'] }}</a>
                    </li>
                @endif
            @endforeach

            {{-- CTA Button (hardcoded — tied to siteSettings.whatsapp_number) --}}
            <li style="margin-left:10px;">
                <a href="https://wa.me/{{ $siteSettings['whatsapp_number'] ?? '919876543210' }}?text=Hi%20I%20want%20a%20Betting%20ID" target="_blank" rel="noopener noreferrer" style="display:inline-flex;align-items:center;gap:8px;background:linear-gradient(135deg,#d4af37,#f5d060);color:#1a1a2e;text-decoration:none;font-size:14px;font-weight:700;padding:10px 22px;border-radius:50px;transition:all 0.3s ease;box-shadow:0 4px 15px rgba(212,175,55,0.3);">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="#1a1a2e"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    Get Your ID
                </a>
            </li>
        </ul>

        {{-- Mobile Hamburger Menu --}}
        <button id="mobile-menu-btn" onclick="toggleMobileMenu()" style="display:none;background:none;border:2px solid #d4af37;border-radius:6px;padding:8px;cursor:pointer;flex-direction:column;gap:4px;align-items:center;justify-content:center;" aria-label="Toggle menu">
            <span style="display:block;width:22px;height:2px;background:#d4af37;transition:all 0.3s ease;" id="hamburger-line-1"></span>
            <span style="display:block;width:22px;height:2px;background:#d4af37;transition:all 0.3s ease;" id="hamburger-line-2"></span>
            <span style="display:block;width:22px;height:2px;background:#d4af37;transition:all 0.3s ease;" id="hamburger-line-3"></span>
        </button>
    </nav>

    {{-- Mobile Navigation Menu (rendered from same header_main menu) --}}
    <div id="mobile-nav" style="display:none;background:linear-gradient(135deg,#0a0a1a,#1a1a2e);padding:20px;border-top:1px solid rgba(212,175,55,0.2);">
        <ul style="list-style:none;padding:0;margin:0;">
            @foreach($headerMenu as $idx => $item)
                @php
                    $hasChildren = !empty($item['children']);
                    $isActive    = $hasChildren ? $menuParentActive($item) : $menuActive($item['url'] ?? '');
                    $color       = $isActive ? '#d4af37' : '#ffffff';
                    $weight      = $isActive ? '600' : '400';
                    $bg          = $isActive ? 'background:rgba(212,175,55,0.1);border-radius:6px;' : '';
                    $dropdownId  = 'mobile-dropdown-' . $idx;
                @endphp

                @if($hasChildren)
                    <li style="border-bottom:1px solid rgba(255,255,255,0.05);">
                        <a href="javascript:void(0)" onclick="toggleMobileDropdown('{{ $dropdownId }}')"
                           style="display:flex;justify-content:space-between;align-items:center;padding:12px 16px;color:{{ $color }};text-decoration:none;font-size:15px;">
                            {{ $item['label'] }}
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul id="{{ $dropdownId }}" style="display:none;list-style:none;padding:0 0 0 20px;margin:0;">
                            @foreach($item['children'] as $child)
                                @php $childActive = $menuActive($child['url'] ?? ''); @endphp
                                <li><a href="{{ $child['url'] ?? '#' }}" target="{{ $child['target'] ?? '_self' }}"
                                       style="display:block;padding:10px 16px;color:{{ $childActive ? '#d4af37' : '#cccccc' }};text-decoration:none;font-size:14px;">{{ $child['label'] }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li><a href="{{ $item['url'] ?? '#' }}" target="{{ $item['target'] ?? '_self' }}"
                           style="display:block;padding:12px 16px;color:{{ $color }};text-decoration:none;font-size:15px;font-weight:{{ $weight }};border-bottom:1px solid rgba(255,255,255,0.05);{{ $bg }}">{{ $item['label'] }}</a></li>
                @endif
            @endforeach

            {{-- Mobile CTA --}}
            <li style="padding:16px 0 0;">
                <a href="https://wa.me/{{ $siteSettings['whatsapp_number'] ?? '919876543210' }}?text=Hi%20I%20want%20a%20Betting%20ID" target="_blank" rel="noopener noreferrer" style="display:flex;align-items:center;justify-content:center;gap:10px;background:linear-gradient(135deg,#d4af37,#f5d060);color:#1a1a2e;text-decoration:none;font-size:15px;font-weight:700;padding:14px;border-radius:50px;text-align:center;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="#1a1a2e"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    Get Your ID Now
                </a>
            </li>
        </ul>
    </div>
</header>

{{-- Header Scripts --}}
<style>
    /* Responsive: show hamburger on mobile, hide desktop nav */
    @media (max-width: 991px) {
        #nav-menu { display: none !important; }
        #mobile-menu-btn { display: flex !important; }
    }

    /* Desktop dropdown hover */
    .nav-dropdown:hover .dropdown-menu {
        display: block !important;
    }

    .nav-dropdown .dropdown-menu li a:hover {
        background: rgba(212,175,55,0.1);
        color: #d4af37 !important;
        padding-left: 25px;
    }

    /* Desktop nav link hover */
    #nav-menu > li > a:hover {
        color: #d4af37 !important;
        background: rgba(212,175,55,0.1);
    }

    /* Sticky header shadow */
    #site-header.scrolled {
        box-shadow: 0 4px 30px rgba(0,0,0,0.5);
    }
</style>

<script>
    // Mobile menu toggle
    function toggleMobileMenu() {
        var mobileNav = document.getElementById('mobile-nav');
        var line1 = document.getElementById('hamburger-line-1');
        var line2 = document.getElementById('hamburger-line-2');
        var line3 = document.getElementById('hamburger-line-3');

        if (mobileNav.style.display === 'none' || mobileNav.style.display === '') {
            mobileNav.style.display = 'block';
            line1.style.transform = 'rotate(45deg) translate(4px, 4px)';
            line2.style.opacity = '0';
            line3.style.transform = 'rotate(-45deg) translate(4px, -4px)';
        } else {
            mobileNav.style.display = 'none';
            line1.style.transform = 'none';
            line2.style.opacity = '1';
            line3.style.transform = 'none';
        }
    }

    // Mobile dropdown toggle
    function toggleMobileDropdown(id) {
        var dropdown = document.getElementById(id);
        dropdown.style.display = (dropdown.style.display === 'none' || dropdown.style.display === '') ? 'block' : 'none';
    }

    // Sticky header scroll effect
    window.addEventListener('scroll', function() {
        var header = document.getElementById('site-header');
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
</script>
