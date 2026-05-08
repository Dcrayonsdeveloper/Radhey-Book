{{-- Welcome Popup (Shows once per session) --}}
<div id="welcome-popup-overlay" style="display:none;position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.7);z-index:10001;align-items:center;justify-content:center;backdrop-filter:blur(5px);-webkit-backdrop-filter:blur(5px);font-family:'Poppins',sans-serif;">
    <div id="welcome-popup-modal" style="background:linear-gradient(135deg,#0a0a1a,#1a1a2e,#0a0a1a);border:2px solid #d4af37;border-radius:16px;padding:40px;max-width:480px;width:90%;position:relative;box-shadow:0 20px 60px rgba(0,0,0,0.5),0 0 30px rgba(212,175,55,0.15);text-align:center;animation:popup-appear 0.4s ease-out;">

        {{-- Close Button --}}
        <button id="close-welcome-popup" onclick="closeWelcomePopup()" style="position:absolute;top:15px;right:15px;background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.2);color:#ffffff;width:32px;height:32px;border-radius:50%;font-size:18px;cursor:pointer;display:flex;align-items:center;justify-content:center;transition:all 0.3s ease;line-height:1;" aria-label="Close popup">&times;</button>

        {{-- Decorative top line --}}
        <div style="width:60px;height:4px;background:linear-gradient(90deg,#d4af37,#f5d060);margin:0 auto 25px;border-radius:2px;"></div>

        {{-- Logo --}}
        <div style="margin-bottom:20px;">
            <span style="font-family:'Orbitron',sans-serif;font-size:32px;font-weight:800;background:linear-gradient(135deg,#d4af37,#f5d060,#d4af37);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;letter-spacing:2px;">RADHEY</span>
        </div>

        {{-- Heading --}}
        <h2 style="font-size:22px;font-weight:700;color:#ffffff;margin-bottom:10px;line-height:1.3;">
            Welcome to Radhey Book!
        </h2>

        {{-- Bonus highlight --}}
        <div style="background:linear-gradient(135deg,rgba(212,175,55,0.15),rgba(245,208,96,0.08));border:1px solid rgba(212,175,55,0.3);border-radius:10px;padding:20px;margin:20px 0;">
            <p style="font-size:16px;color:#ffffff;font-weight:600;margin:0 0 8px;">Enjoy Welcome Bonus on your first deposit!</p>
            <p style="font-size:14px;color:#f5d060;font-weight:500;margin:0;">Plus 10% Additional Bonus on every deposit!</p>
        </div>

        {{-- Feature --}}
        <div style="display:flex;align-items:center;justify-content:center;gap:10px;margin-bottom:25px;">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <p style="font-size:15px;color:#cccccc;font-weight:500;">Instant ID Activation via WhatsApp</p>
        </div>

        {{-- CTA Button --}}
        <a href="https://linktr.ee/radheybook" target="_blank" rel="noopener noreferrer" style="display:inline-flex;align-items:center;justify-content:center;gap:10px;background:linear-gradient(135deg,#d4af37,#f5d060);color:#1a1a2e;text-decoration:none;font-size:16px;font-weight:700;padding:14px 36px;border-radius:50px;transition:all 0.3s ease;box-shadow:0 4px 20px rgba(212,175,55,0.3);width:100%;max-width:300px;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="#1a1a2e"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            Claim Your Bonus Now
        </a>

        {{-- Subtle note --}}
        <p style="font-size:11px;color:#b0b0b0;margin-top:15px;">*Terms &amp; conditions apply</p>
    </div>
</div>

<style>
    @keyframes popup-appear {
        0% {
            opacity: 0;
            transform: scale(0.9) translateY(20px);
        }
        100% {
            opacity: 1;
            transform: scale(1) translateY(0);
        }
    }

    #close-welcome-popup:hover {
        background: rgba(255,255,255,0.2);
        transform: rotate(90deg);
    }

    #welcome-popup-modal a:hover {
        transform: scale(1.03);
        box-shadow: 0 6px 25px rgba(212,175,55,0.4);
    }
</style>

<script>
    // Show welcome popup once per session
    document.addEventListener('DOMContentLoaded', function() {
        if (!sessionStorage.getItem('radhey_welcome_shown_v2')) {
            setTimeout(function() {
                var popup = document.getElementById('welcome-popup-overlay');
                popup.style.display = 'flex';
                sessionStorage.setItem('radhey_welcome_shown_v2', 'true');
            }, 5000);
        }
    });

    function closeWelcomePopup() {
        var popup = document.getElementById('welcome-popup-overlay');
        var modal = document.getElementById('welcome-popup-modal');
        modal.style.animation = 'none';
        modal.style.opacity = '0';
        modal.style.transform = 'scale(0.9) translateY(20px)';
        modal.style.transition = 'all 0.3s ease';
        setTimeout(function() {
            popup.style.display = 'none';
        }, 300);
    }

    // Close popup on overlay click
    document.getElementById('welcome-popup-overlay').addEventListener('click', function(e) {
        if (e.target === this) {
            closeWelcomePopup();
        }
    });

    // Close popup on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            var popup = document.getElementById('welcome-popup-overlay');
            if (popup.style.display === 'flex') {
                closeWelcomePopup();
            }
        }
    });
</script>
