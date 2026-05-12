{{-- Footer --}}
<footer style="background:linear-gradient(135deg,#0a0a1a,#1a1a2e,#0a0a1a);color:#ffffff;font-family:'Poppins',sans-serif;">

    {{-- Main Footer Content --}}
    <div style="max-width:1280px;margin:0 auto;padding:60px 20px 40px;">
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:40px;">

            {{-- Column 1: About --}}
            <div>
                <a href="{{ url('/') }}" style="text-decoration:none;display:inline-flex;align-items:center;gap:8px;margin-bottom:20px;">
                    <span style="font-family:'Orbitron',sans-serif;font-size:28px;font-weight:800;background:linear-gradient(135deg,#d4af37,#f5d060,#d4af37);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;letter-spacing:2px;text-transform:uppercase;">Radhey</span>
                    <span style="font-family:'Poppins',sans-serif;font-size:10px;color:#d4af37;text-transform:uppercase;letter-spacing:1.5px;border-left:2px solid #d4af37;padding-left:8px;line-height:1.3;">Book</span>
                </a>
                <p style="color:#aaaaaa;font-size:14px;line-height:1.8;margin-bottom:20px;">
                    Radhey Book is India's most trusted online betting ID provider. We offer instant ID activation via WhatsApp with 24/7 customer support. Join 2 million+ satisfied players and experience the best in online cricket betting, casino, and sports betting.
                </p>
                <p style="font-size:13px;color:#d4af37;font-weight:600;font-style:italic;">
                    "India's Most Trusted Online Betting ID Provider"
                </p>
            </div>

            {{-- Column 2: Quick Links --}}
            <div>
                <h3 style="font-size:18px;font-weight:700;color:#d4af37;margin-bottom:25px;position:relative;padding-bottom:10px;">
                    Quick Links
                    <span style="position:absolute;bottom:0;left:0;width:40px;height:3px;background:linear-gradient(90deg,#d4af37,#f5d060);border-radius:2px;"></span>
                </h3>
                <ul style="list-style:none;padding:0;margin:0;">
                    @foreach($footerQuickLinks as $link)
                    <li style="margin-bottom:12px;"><a href="{{ $link['url'] ?? '#' }}" target="{{ $link['target'] ?? '_self' }}" style="color:#aaaaaa;text-decoration:none;font-size:14px;transition:all 0.3s ease;display:flex;align-items:center;gap:8px;"><span style="color:#d4af37;font-size:10px;">&#9654;</span> {{ $link['label'] ?? '' }}</a></li>
                    @endforeach
                </ul>
            </div>

            {{-- Column 3: Our Services --}}
            <div>
                <h3 style="font-size:18px;font-weight:700;color:#d4af37;margin-bottom:25px;position:relative;padding-bottom:10px;">
                    Our Services
                    <span style="position:absolute;bottom:0;left:0;width:40px;height:3px;background:linear-gradient(90deg,#d4af37,#f5d060);border-radius:2px;"></span>
                </h3>
                <ul style="list-style:none;padding:0;margin:0;">
                    <li style="margin-bottom:12px;"><a href="{{ url('/cricket-betting-id') }}" style="color:#aaaaaa;text-decoration:none;font-size:14px;transition:all 0.3s ease;display:flex;align-items:center;gap:8px;"><span style="color:#d4af37;font-size:10px;">&#9654;</span> Cricket Betting ID</a></li>
                    <li style="margin-bottom:12px;"><a href="{{ url('/casino') }}" style="color:#aaaaaa;text-decoration:none;font-size:14px;transition:all 0.3s ease;display:flex;align-items:center;gap:8px;"><span style="color:#d4af37;font-size:10px;">&#9654;</span> Casino ID</a></li>
                    <li style="margin-bottom:12px;"><a href="{{ url('/tennis-betting-id') }}" style="color:#aaaaaa;text-decoration:none;font-size:14px;transition:all 0.3s ease;display:flex;align-items:center;gap:8px;"><span style="color:#d4af37;font-size:10px;">&#9654;</span> Tennis ID</a></li>
                    <li style="margin-bottom:12px;"><a href="{{ url('/football-betting-id') }}" style="color:#aaaaaa;text-decoration:none;font-size:14px;transition:all 0.3s ease;display:flex;align-items:center;gap:8px;"><span style="color:#d4af37;font-size:10px;">&#9654;</span> Football ID</a></li>
                    <li style="margin-bottom:12px;"><a href="{{ url('/aviator') }}" style="color:#aaaaaa;text-decoration:none;font-size:14px;transition:all 0.3s ease;display:flex;align-items:center;gap:8px;"><span style="color:#d4af37;font-size:10px;">&#9654;</span> Aviator ID</a></li>
                </ul>
            </div>

            {{-- Column 4: Contact Info --}}
            <div>
                <h3 style="font-size:18px;font-weight:700;color:#d4af37;margin-bottom:25px;position:relative;padding-bottom:10px;">
                    Contact Info
                    <span style="position:absolute;bottom:0;left:0;width:40px;height:3px;background:linear-gradient(90deg,#d4af37,#f5d060);border-radius:2px;"></span>
                </h3>
                <ul style="list-style:none;padding:0;margin:0;">
                    {{-- WhatsApp --}}
                    <li style="margin-bottom:18px;display:flex;align-items:flex-start;gap:12px;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="#25D366" style="flex-shrink:0;margin-top:2px;"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        <div>
                            <a href="https://linktr.ee/radheybook" target="_blank" rel="noopener noreferrer" style="color:#ffffff;text-decoration:none;font-size:14px;font-weight:600;">+91 79017 12857</a>
                            <p style="color:#aaaaaa;font-size:12px;margin-top:2px;">WhatsApp Support</p>
                        </div>
                    </li>
                    {{-- Email --}}
                    <li style="margin-bottom:18px;display:flex;align-items:flex-start;gap:12px;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px;"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                        <div>
                            <a href="mailto:support@radheybook.com" style="color:#ffffff;text-decoration:none;font-size:14px;font-weight:600;">support@radheybook.com</a>
                            <p style="color:#aaaaaa;font-size:12px;margin-top:2px;">Email Support</p>
                        </div>
                    </li>
                    {{-- Availability --}}
                    <li style="margin-bottom:18px;display:flex;align-items:flex-start;gap:12px;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px;"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        <div>
                            <span style="color:#ffffff;font-size:14px;font-weight:600;">Available 24/7</span>
                            <p style="color:#aaaaaa;font-size:12px;margin-top:2px;">Round the clock support</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Payment Methods --}}
    <div style="border-top:1px solid rgba(255,255,255,0.08);border-bottom:1px solid rgba(255,255,255,0.08);">
        <div style="max-width:1280px;margin:0 auto;padding:25px 20px;text-align:center;">
            <p style="font-size:13px;color:#aaaaaa;margin-bottom:15px;text-transform:uppercase;letter-spacing:1px;">Payment Methods We Accept</p>
            <div style="display:flex;align-items:center;justify-content:center;gap:20px;flex-wrap:wrap;">
                <span style="background:rgba(255,255,255,0.08);padding:8px 20px;border-radius:6px;font-size:13px;color:#ffffff;font-weight:600;border:1px solid rgba(255,255,255,0.1);display:inline-flex;align-items:center;gap:6px;">
                    <img src="{{ asset('images/Untitled design (2) (1)/upi.png') }}" alt="UPI" style="width:18px;height:18px;object-fit:contain;" loading="lazy" decoding="async">
                    UPI
                </span>
                <span style="background:rgba(255,255,255,0.08);padding:8px 20px;border-radius:6px;font-size:13px;color:#ffffff;font-weight:600;border:1px solid rgba(255,255,255,0.1);display:inline-flex;align-items:center;gap:6px;">
                    <img src="{{ asset('images/Untitled design (2) (1)/gpay.png') }}" alt="GPay" style="width:18px;height:18px;object-fit:contain;" loading="lazy" decoding="async">
                    GPay
                </span>
                <span style="background:rgba(255,255,255,0.08);padding:8px 20px;border-radius:6px;font-size:13px;color:#ffffff;font-weight:600;border:1px solid rgba(255,255,255,0.1);display:inline-flex;align-items:center;gap:6px;">
                    <img src="{{ asset('images/Untitled design (2) (1)/paytm.png') }}" alt="Paytm" style="width:18px;height:18px;object-fit:contain;" loading="lazy" decoding="async">
                    Paytm
                </span>
                <span style="background:rgba(255,255,255,0.08);padding:8px 20px;border-radius:6px;font-size:13px;color:#ffffff;font-weight:600;border:1px solid rgba(255,255,255,0.1);display:inline-flex;align-items:center;gap:6px;">
                    <img src="{{ asset('images/Untitled design (2) (1)/phonepe.png') }}" alt="PhonePe" style="width:18px;height:18px;object-fit:contain;" loading="lazy" decoding="async">
                    PhonePe
                </span>
                <span style="background:rgba(255,255,255,0.08);padding:8px 20px;border-radius:6px;font-size:13px;color:#ffffff;font-weight:600;border:1px solid rgba(255,255,255,0.1);display:inline-flex;align-items:center;gap:6px;">
                    <img src="{{ asset('images/Untitled design (2) (1)/bank transfer.png') }}" alt="Bank Transfer" style="width:18px;height:18px;object-fit:contain;" loading="lazy" decoding="async">
                    Bank Transfer
                </span>
            </div>
        </div>
    </div>

    {{-- 18+ Disclaimer --}}
    <div style="max-width:1280px;margin:0 auto;padding:20px 20px;">
        <div style="background:rgba(255,0,0,0.08);border:1px solid rgba(255,0,0,0.2);border-radius:8px;padding:15px 20px;text-align:center;">
            <p style="font-size:13px;color:#ff6b6b;line-height:1.6;">
                <span style="display:inline-flex;align-items:center;justify-content:center;width:28px;height:28px;background:#ff4444;color:#ffffff;font-weight:800;font-size:12px;border-radius:50%;margin-right:8px;vertical-align:middle;">18+</span>
                This website is intended for users aged 18 and above. Gambling involves risk. Please play responsibly.
            </p>
        </div>
    </div>

    {{-- Copyright --}}
    <div style="border-top:1px solid rgba(255,255,255,0.08);">
        <div style="max-width:1280px;margin:0 auto;padding:20px 20px;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:10px;">
            <p style="font-size:13px;color:#b0b0b0;">&copy; 2026 Radhey Book. All Rights Reserved.</p>
            <div style="display:flex;align-items:center;gap:8px;">
                <a href="{{ url('/privacy-policy') }}" style="color:#b0b0b0;text-decoration:none;font-size:13px;transition:color 0.3s ease;">Privacy Policy</a>
                <span style="color:#8a8a8a;">|</span>
                <a href="{{ url('/terms-and-conditions') }}" style="color:#b0b0b0;text-decoration:none;font-size:13px;transition:color 0.3s ease;">Terms &amp; Conditions</a>
                <span style="color:#8a8a8a;">|</span>
                <a href="{{ url('/responsible-gaming') }}" style="color:#b0b0b0;text-decoration:none;font-size:13px;transition:color 0.3s ease;">Responsible Gaming</a>
            </div>
        </div>
    </div>
</footer>

{{-- Footer Responsive Styles --}}
<style>
    footer a:hover {
        color: #d4af37 !important;
    }

    @media (max-width: 991px) {
        footer [style*="grid-template-columns:repeat(4"] {
            grid-template-columns: repeat(2, 1fr) !important;
        }
    }

    @media (max-width: 575px) {
        footer [style*="grid-template-columns:repeat(4"] {
            grid-template-columns: 1fr !important;
        }
        footer [style*="display:flex;align-items:center;justify-content:space-between"] {
            flex-direction: column !important;
            text-align: center;
        }
    }
</style>
