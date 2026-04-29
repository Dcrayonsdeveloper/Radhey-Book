/* ==========================================================================
   RADHEY BETTING ID - Main JavaScript
   All interactive features for the betting lead generation website
   ========================================================================== */

(function () {
    'use strict';

    /* ----------------------------------------------------------------------
       CONFIGURATION
       ---------------------------------------------------------------------- */
    const CONFIG = {
        scrollTopThreshold: 400,
        navHideThreshold: 80,
        counterDuration: 2000,
        oddsUpdateInterval: 3000,
        carouselAutoplayInterval: 5000,
        welcomePopupDelay: 3000,
        announcementSpeed: 25,
    };

    /* ----------------------------------------------------------------------
       UTILITY HELPERS
       ---------------------------------------------------------------------- */
    function $(selector, context) {
        return (context || document).querySelector(selector);
    }

    function $$(selector, context) {
        return Array.from((context || document).querySelectorAll(selector));
    }

    function onReady(fn) {
        if (document.readyState !== 'loading') {
            fn();
        } else {
            document.addEventListener('DOMContentLoaded', fn);
        }
    }

    function debounce(fn, delay) {
        let timer;
        return function () {
            const context = this;
            const args = arguments;
            clearTimeout(timer);
            timer = setTimeout(function () {
                fn.apply(context, args);
            }, delay);
        };
    }

    function throttle(fn, limit) {
        let inThrottle = false;
        return function () {
            const context = this;
            const args = arguments;
            if (!inThrottle) {
                fn.apply(context, args);
                inThrottle = true;
                setTimeout(function () {
                    inThrottle = false;
                }, limit);
            }
        };
    }

    function randomBetween(min, max) {
        return (Math.random() * (max - min) + min).toFixed(2);
    }

    function formatNumber(num) {
        if (num >= 1000000) {
            return (num / 1000000).toFixed(1) + 'M+';
        }
        if (num >= 1000) {
            return (num / 1000).toFixed(0) + 'K+';
        }
        return num.toString();
    }

    /* ======================================================================
       MODULE: Mobile Hamburger Menu
       ====================================================================== */
    function initMobileMenu() {
        var hamburger = $('.hamburger');
        var mobileNav = $('.mobile-nav');
        var mobileOverlay = $('.mobile-nav-overlay');

        if (!hamburger || !mobileNav) return;

        function openMenu() {
            hamburger.classList.add('active');
            mobileNav.classList.add('active');
            if (mobileOverlay) mobileOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeMenu() {
            hamburger.classList.remove('active');
            mobileNav.classList.remove('active');
            if (mobileOverlay) mobileOverlay.classList.remove('active');
            document.body.style.overflow = '';
        }

        hamburger.addEventListener('click', function () {
            if (mobileNav.classList.contains('active')) {
                closeMenu();
            } else {
                openMenu();
            }
        });

        if (mobileOverlay) {
            mobileOverlay.addEventListener('click', closeMenu);
        }

        // Close on link click
        $$('.mobile-nav a').forEach(function (link) {
            link.addEventListener('click', function () {
                // If it has a sub-dropdown toggle, handle that instead
                if (this.dataset.dropdown) return;
                closeMenu();
            });
        });

        // Mobile dropdown toggles
        $$('.mobile-nav [data-dropdown]').forEach(function (trigger) {
            trigger.addEventListener('click', function (e) {
                e.preventDefault();
                var target = document.getElementById(this.dataset.dropdown);
                if (!target) return;

                var isOpen = target.classList.contains('open');

                // Close all other dropdowns
                $$('.mobile-dropdown.open').forEach(function (dd) {
                    dd.classList.remove('open');
                });

                if (!isOpen) {
                    target.classList.add('open');
                }
            });
        });

        // Close on Escape
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && mobileNav.classList.contains('active')) {
                closeMenu();
            }
        });
    }

    /* ======================================================================
       MODULE: Navbar Hide/Show on Scroll
       ====================================================================== */
    function initNavbarScroll() {
        var navbar = $('.navbar');
        if (!navbar) return;

        var lastScrollY = 0;
        var isHidden = false;

        function handleScroll() {
            var currentScrollY = window.pageYOffset || document.documentElement.scrollTop;

            // Add scrolled class for shadow
            if (currentScrollY > 10) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }

            // Hide/show logic - only after threshold
            if (currentScrollY > CONFIG.navHideThreshold) {
                if (currentScrollY > lastScrollY && !isHidden) {
                    // Scrolling down
                    navbar.classList.add('hidden-nav');
                    isHidden = true;
                } else if (currentScrollY < lastScrollY && isHidden) {
                    // Scrolling up
                    navbar.classList.remove('hidden-nav');
                    isHidden = false;
                }
            } else {
                navbar.classList.remove('hidden-nav');
                isHidden = false;
            }

            lastScrollY = currentScrollY;
        }

        window.addEventListener('scroll', throttle(handleScroll, 100), { passive: true });
    }

    /* ======================================================================
       MODULE: Desktop Dropdown Menu Interactions
       ====================================================================== */
    function initDropdowns() {
        var dropdownParents = $$('.navbar .nav-links > li');

        dropdownParents.forEach(function (parent) {
            var dropdown = $('.dropdown-menu', parent);
            if (!dropdown) return;

            var showTimeout, hideTimeout;

            parent.addEventListener('mouseenter', function () {
                clearTimeout(hideTimeout);
                showTimeout = setTimeout(function () {
                    dropdown.style.opacity = '1';
                    dropdown.style.visibility = 'visible';
                    dropdown.style.transform = 'translateY(0)';
                }, 50);
            });

            parent.addEventListener('mouseleave', function () {
                clearTimeout(showTimeout);
                hideTimeout = setTimeout(function () {
                    dropdown.style.opacity = '0';
                    dropdown.style.visibility = 'hidden';
                    dropdown.style.transform = 'translateY(10px)';
                }, 150);
            });
        });
    }

    /* ======================================================================
       MODULE: Live Odds Table Update
       ====================================================================== */
    function initLiveOdds() {
        var oddsValues = $$('.odds-table .odds-value');
        if (oddsValues.length === 0) return;

        function updateOdds() {
            oddsValues.forEach(function (cell) {
                // Only update some cells each cycle for realism
                if (Math.random() > 0.5) return;

                var currentVal = parseFloat(cell.textContent) || parseFloat(randomBetween(1.1, 5.0));
                var change = (Math.random() - 0.5) * 0.4;
                var newVal = Math.max(1.01, currentVal + change).toFixed(2);

                // Remove old direction classes
                cell.classList.remove('up', 'down');

                if (parseFloat(newVal) > currentVal) {
                    cell.classList.add('up');
                } else if (parseFloat(newVal) < currentVal) {
                    cell.classList.add('down');
                }

                cell.textContent = newVal;

                // Remove animation class after it completes
                setTimeout(function () {
                    cell.classList.remove('up', 'down');
                }, 600);
            });
        }

        setInterval(updateOdds, CONFIG.oddsUpdateInterval);
    }

    /* ======================================================================
       MODULE: FAQ Accordion
       ====================================================================== */
    function initFaqAccordion() {
        var faqItems = $$('.faq-item');
        if (faqItems.length === 0) return;

        faqItems.forEach(function (item) {
            var question = $('.faq-question', item);
            if (!question) return;

            question.addEventListener('click', function () {
                var isActive = item.classList.contains('active');

                // Close all others
                faqItems.forEach(function (otherItem) {
                    otherItem.classList.remove('active');
                    var answer = $('.faq-answer', otherItem);
                    if (answer) answer.style.maxHeight = null;
                });

                // Toggle current
                if (!isActive) {
                    item.classList.add('active');
                    var answer = $('.faq-answer', item);
                    if (answer) {
                        answer.style.maxHeight = answer.scrollHeight + 'px';
                    }
                }
            });
        });
    }

    /* ======================================================================
       MODULE: Testimonials Carousel (Desktop 3 cards, Mobile 1 card, 3s auto-slide)
       ====================================================================== */
    function initTestimonialsCarousel() {
        var wrapper = $('.testimonials-carousel-wrapper');
        if (!wrapper) return;

        var carousel = $('.testimonials-carousel', wrapper);
        var track = $('.testimonials-track', carousel);
        var cards = $$('.testimonial-card', track);
        var prevBtn = $('.carousel-prev', wrapper);
        var nextBtn = $('.carousel-next', wrapper);
        var dotsContainer = $('.carousel-dots', wrapper);

        if (!track || cards.length === 0) return;

        var currentIndex = 0;
        var autoplayTimer = null;
        var isTransitioning = false;
        var autoplayInterval = 3000;

        function getVisibleCount() {
            if (window.innerWidth > 992) return 3;
            if (window.innerWidth > 768) return 2;
            return 1;
        }

        function getMaxIndex() {
            return Math.max(0, cards.length - getVisibleCount());
        }

        function buildDots() {
            if (!dotsContainer) return;
            dotsContainer.innerHTML = '';
            var maxIdx = getMaxIndex();
            for (var i = 0; i <= maxIdx; i++) {
                var dot = document.createElement('button');
                dot.className = 'dot' + (i === currentIndex ? ' active' : '');
                dot.setAttribute('aria-label', 'Go to slide ' + (i + 1));
                (function(idx) {
                    dot.addEventListener('click', function() {
                        goToSlide(idx);
                        startAutoplay();
                    });
                })(i);
                dotsContainer.appendChild(dot);
            }
        }

        function updateDots() {
            if (!dotsContainer) return;
            var dots = dotsContainer.querySelectorAll('.dot');
            dots.forEach(function(dot, i) {
                dot.classList.toggle('active', i === currentIndex);
            });
        }

        function goToSlide(index) {
            if (isTransitioning) return;
            var maxIdx = getMaxIndex();
            if (index < 0) index = maxIdx;
            if (index > maxIdx) index = 0;

            isTransitioning = true;
            currentIndex = index;

            var offset = cards[currentIndex].offsetLeft - cards[0].offsetLeft;
            track.style.transform = 'translateX(-' + offset + 'px)';

            updateDots();

            setTimeout(function() {
                isTransitioning = false;
            }, 500);
        }

        function nextSlide() { goToSlide(currentIndex + 1); }
        function prevSlide() { goToSlide(currentIndex - 1); }

        function startAutoplay() {
            stopAutoplay();
            autoplayTimer = setInterval(nextSlide, autoplayInterval);
        }

        function stopAutoplay() {
            if (autoplayTimer) {
                clearInterval(autoplayTimer);
                autoplayTimer = null;
            }
        }

        if (nextBtn) nextBtn.addEventListener('click', function() { nextSlide(); startAutoplay(); });
        if (prevBtn) prevBtn.addEventListener('click', function() { prevSlide(); startAutoplay(); });

        carousel.addEventListener('mouseenter', stopAutoplay);
        carousel.addEventListener('mouseleave', startAutoplay);

        // Touch swipe
        var touchStartX = 0;
        carousel.addEventListener('touchstart', function(e) {
            touchStartX = e.changedTouches[0].screenX;
            stopAutoplay();
        }, { passive: true });

        carousel.addEventListener('touchend', function(e) {
            var diff = touchStartX - e.changedTouches[0].screenX;
            if (Math.abs(diff) > 50) {
                diff > 0 ? nextSlide() : prevSlide();
            }
            startAutoplay();
        }, { passive: true });

        // Handle resize
        var resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                if (currentIndex > getMaxIndex()) currentIndex = getMaxIndex();
                buildDots();
                goToSlide(currentIndex);
            }, 250);
        });

        buildDots();
        goToSlide(0);
        startAutoplay();
    }

    /* ======================================================================
       MODULE: Mobile Auto-Scroll Carousel (disabled — tips/proof now use
       transform-based carousels that do not affect page scroll)
       ====================================================================== */
    function initMobileAutoScroll() {
        return;
    }

    /* ======================================================================
       MODULE: Bonus Countdown Timer (24-hour reset)
       ====================================================================== */
    function initCountdownTimer() {
        var hoursEl = $('#countdown-hours');
        var minutesEl = $('#countdown-minutes');
        var secondsEl = $('#countdown-seconds');

        // Support alternative selectors
        if (!hoursEl) hoursEl = $('[data-countdown="hours"]');
        if (!minutesEl) minutesEl = $('[data-countdown="minutes"]');
        if (!secondsEl) secondsEl = $('[data-countdown="seconds"]');

        if (!hoursEl && !minutesEl && !secondsEl) return;

        function getEndTime() {
            var stored = localStorage.getItem('radhey_countdown_end');
            if (stored) {
                var endTime = parseInt(stored, 10);
                if (endTime > Date.now()) {
                    return endTime;
                }
            }
            // Set new 24-hour countdown
            var newEnd = Date.now() + 24 * 60 * 60 * 1000;
            localStorage.setItem('radhey_countdown_end', newEnd.toString());
            return newEnd;
        }

        var endTime = getEndTime();

        function updateTimer() {
            var now = Date.now();
            var remaining = endTime - now;

            if (remaining <= 0) {
                // Reset the timer
                endTime = Date.now() + 24 * 60 * 60 * 1000;
                localStorage.setItem('radhey_countdown_end', endTime.toString());
                remaining = endTime - Date.now();
            }

            var hours = Math.floor(remaining / (1000 * 60 * 60));
            var minutes = Math.floor((remaining % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((remaining % (1000 * 60)) / 1000);

            if (hoursEl) hoursEl.textContent = hours.toString().padStart(2, '0');
            if (minutesEl) minutesEl.textContent = minutes.toString().padStart(2, '0');
            if (secondsEl) secondsEl.textContent = seconds.toString().padStart(2, '0');
        }

        updateTimer();
        setInterval(updateTimer, 1000);
    }

    /* ======================================================================
       MODULE: Welcome Popup (once per session)
       ====================================================================== */
    function initWelcomePopup() {
        var overlay = $('.welcome-popup-overlay');
        if (!overlay) return;

        var closeBtn = $('.popup-close', overlay);
        var hasShown = sessionStorage.getItem('radhey_popup_shown');

        function showPopup() {
            overlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function hidePopup() {
            overlay.classList.remove('active');
            document.body.style.overflow = '';
            sessionStorage.setItem('radhey_popup_shown', '1');
        }

        if (!hasShown) {
            setTimeout(showPopup, CONFIG.welcomePopupDelay);
        }

        if (closeBtn) {
            closeBtn.addEventListener('click', hidePopup);
        }

        // Close on overlay click
        overlay.addEventListener('click', function (e) {
            if (e.target === overlay) {
                hidePopup();
            }
        });

        // Close on Escape
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && overlay.classList.contains('active')) {
                hidePopup();
            }
        });

        // CTA buttons inside popup should also close
        $$('.welcome-popup .btn', overlay).forEach(function (btn) {
            btn.addEventListener('click', function () {
                // Small delay so the navigation/action happens first
                setTimeout(hidePopup, 100);
            });
        });
    }

    /* ======================================================================
       MODULE: Scroll-to-Top Button
       ====================================================================== */
    function initScrollToTop() {
        var btn = $('.scroll-top-btn');
        if (!btn) return;

        function toggleVisibility() {
            var scrollY = window.pageYOffset || document.documentElement.scrollTop;
            if (scrollY > CONFIG.scrollTopThreshold) {
                btn.classList.add('visible');
            } else {
                btn.classList.remove('visible');
            }
        }

        btn.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        window.addEventListener('scroll', throttle(toggleVisibility, 150), { passive: true });
    }

    /* ======================================================================
       MODULE: Reading Progress Bar
       ====================================================================== */
    function initReadingProgress() {
        var progressBar = $('.reading-progress');
        if (!progressBar) return;

        function updateProgress() {
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            var docHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            var progress = (scrollTop / docHeight) * 100;

            progressBar.style.width = Math.min(100, Math.max(0, progress)) + '%';
        }

        window.addEventListener('scroll', throttle(updateProgress, 30), { passive: true });
    }

    /* ======================================================================
       MODULE: Smooth Scroll for Anchor Links
       ====================================================================== */
    function initSmoothScroll() {
        $$('a[href^="#"]').forEach(function (anchor) {
            anchor.addEventListener('click', function (e) {
                var href = this.getAttribute('href');
                if (href === '#' || href === '#!') return;

                var target = document.querySelector(href);
                if (!target) return;

                e.preventDefault();

                var navbar = $('.navbar');
                var navbarHeight = navbar ? navbar.offsetHeight : 0;
                var targetPosition = target.getBoundingClientRect().top + window.pageYOffset - navbarHeight - 20;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            });
        });
    }

    /* ======================================================================
       MODULE: Freeze Button Animation
       ====================================================================== */
    function initFreezeButton() {
        $$('.btn-freeze').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var self = this;
                self.classList.add('frozen');

                setTimeout(function () {
                    self.classList.remove('frozen');
                }, 600);
            });
        });
    }

    /* ======================================================================
       MODULE: Counter Animation (Statistics)
       ====================================================================== */
    function initCounterAnimation() {
        var counters = $$('[data-counter]');
        if (counters.length === 0) return;

        var observed = new Set();

        function animateCounter(el) {
            var target = parseInt(el.dataset.counter, 10);
            if (isNaN(target)) return;

            var suffix = el.dataset.counterSuffix || '';
            var prefix = el.dataset.counterPrefix || '';
            var duration = CONFIG.counterDuration;
            var startTime = null;
            var startValue = 0;

            function easeOutCubic(t) {
                return 1 - Math.pow(1 - t, 3);
            }

            function step(timestamp) {
                if (!startTime) startTime = timestamp;
                var elapsed = timestamp - startTime;
                var progress = Math.min(elapsed / duration, 1);
                var easedProgress = easeOutCubic(progress);
                var currentValue = Math.floor(easedProgress * target);

                if (target >= 1000000) {
                    el.textContent = prefix + (currentValue / 1000000).toFixed(1) + 'M' + suffix;
                } else if (target >= 1000) {
                    el.textContent = prefix + Math.floor(currentValue / 1000) + 'K' + suffix;
                } else {
                    el.textContent = prefix + currentValue + suffix;
                }

                if (progress < 1) {
                    requestAnimationFrame(step);
                } else {
                    // Final display value
                    if (target >= 1000000) {
                        el.textContent = prefix + (target / 1000000).toFixed(1) + 'M' + suffix;
                    } else if (target >= 1000) {
                        el.textContent = prefix + Math.floor(target / 1000) + 'K' + suffix;
                    } else {
                        el.textContent = prefix + target + suffix;
                    }
                }
            }

            requestAnimationFrame(step);
        }

        // Use IntersectionObserver
        if ('IntersectionObserver' in window) {
            var observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting && !observed.has(entry.target)) {
                        observed.add(entry.target);
                        animateCounter(entry.target);
                    }
                });
            }, {
                threshold: 0.3,
                rootMargin: '0px 0px -50px 0px'
            });

            counters.forEach(function (counter) {
                observer.observe(counter);
            });
        } else {
            // Fallback: animate all immediately
            counters.forEach(animateCounter);
        }
    }

    /* ======================================================================
       MODULE: Lazy Loading for Images
       ====================================================================== */
    function initLazyLoading() {
        var lazyImages = $$('img[data-src]');
        if (lazyImages.length === 0) return;

        if ('IntersectionObserver' in window) {
            var imageObserver = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        var img = entry.target;
                        img.src = img.dataset.src;

                        if (img.dataset.srcset) {
                            img.srcset = img.dataset.srcset;
                        }

                        img.addEventListener('load', function () {
                            img.classList.add('loaded', 'lazy-loaded');
                            img.removeAttribute('data-src');
                            img.removeAttribute('data-srcset');
                        });

                        img.addEventListener('error', function () {
                            img.classList.add('loaded');
                            img.style.opacity = '0.5';
                        });

                        imageObserver.unobserve(img);
                    }
                });
            }, {
                rootMargin: '100px 0px',
                threshold: 0.01
            });

            lazyImages.forEach(function (img) {
                imageObserver.observe(img);
            });
        } else {
            // Fallback: load all images
            lazyImages.forEach(function (img) {
                img.src = img.dataset.src;
                if (img.dataset.srcset) {
                    img.srcset = img.dataset.srcset;
                }
                img.classList.add('loaded', 'lazy-loaded');
            });
        }
    }

    /* ======================================================================
       MODULE: Announcement Bar Scrolling Text
       ====================================================================== */
    function initAnnouncementBar() {
        var bar = $('.announcement-bar');
        if (!bar) return;

        var closeBtn = $('.close-announce', bar);

        if (closeBtn) {
            closeBtn.addEventListener('click', function () {
                bar.classList.add('hidden');
                bar.style.display = 'none';

                // Adjust navbar position if needed
                var navbar = $('.navbar');
                if (navbar) {
                    navbar.style.top = '0';
                }

                sessionStorage.setItem('radhey_announce_closed', '1');
            });
        }

        // If previously closed this session, hide it
        if (sessionStorage.getItem('radhey_announce_closed') === '1') {
            bar.classList.add('hidden');
            bar.style.display = 'none';
        }

        // Duplicate text for seamless loop
        var inner = $('.announcement-inner', bar);
        if (inner && inner.children.length > 0) {
            var originalContent = inner.innerHTML;
            inner.innerHTML = originalContent + originalContent;
        }
    }

    /* ======================================================================
       MODULE: Scroll Reveal Animations
       ====================================================================== */
    function initScrollReveal() {
        var revealElements = $$('.reveal, .reveal-left, .reveal-right');
        if (revealElements.length === 0) return;

        if ('IntersectionObserver' in window) {
            var revealObserver = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('revealed');
                        revealObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.15,
                rootMargin: '0px 0px -40px 0px'
            });

            revealElements.forEach(function (el) {
                revealObserver.observe(el);
            });
        } else {
            // Fallback
            revealElements.forEach(function (el) {
                el.classList.add('revealed');
            });
        }
    }

    /* ======================================================================
       MODULE: Active Navigation Highlighting
       ====================================================================== */
    function initActiveNavHighlight() {
        var sections = $$('section[id]');
        if (sections.length === 0) return;

        var navLinks = $$('.navbar .nav-links a[href^="#"]');
        if (navLinks.length === 0) return;

        function highlightNav() {
            var scrollY = window.pageYOffset;
            var navbar = $('.navbar');
            var offset = navbar ? navbar.offsetHeight + 40 : 100;

            sections.forEach(function (section) {
                var sectionTop = section.offsetTop - offset;
                var sectionHeight = section.offsetHeight;
                var sectionId = section.getAttribute('id');

                if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
                    navLinks.forEach(function (link) {
                        link.classList.remove('active');
                        if (link.getAttribute('href') === '#' + sectionId) {
                            link.classList.add('active');
                        }
                    });
                }
            });
        }

        window.addEventListener('scroll', throttle(highlightNav, 200), { passive: true });
    }

    /* ======================================================================
       MODULE: Form Validation (Get ID Form)
       ====================================================================== */
    function initFormValidation() {
        var forms = $$('.get-id-form form');

        forms.forEach(function (form) {
            form.addEventListener('submit', function (e) {
                var isValid = true;
                var inputs = $$('input[required], select[required], textarea[required]', form);

                inputs.forEach(function (input) {
                    // Remove old error state
                    input.style.borderColor = '';

                    if (!input.value.trim()) {
                        input.style.borderColor = 'var(--accent-red)';
                        isValid = false;
                    }

                    // Phone validation
                    if (input.type === 'tel' && input.value.trim()) {
                        var phoneRegex = /^[+]?[\d\s-]{8,15}$/;
                        if (!phoneRegex.test(input.value.trim())) {
                            input.style.borderColor = 'var(--accent-red)';
                            isValid = false;
                        }
                    }
                });

                if (!isValid) {
                    e.preventDefault();
                    // Scroll to first error
                    var firstError = $('input[style*="border-color"]', form);
                    if (firstError) {
                        firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        firstError.focus();
                    }
                }
            });

            // Clear error on input
            $$('input, select, textarea', form).forEach(function (input) {
                input.addEventListener('input', function () {
                    this.style.borderColor = '';
                });
            });
        });
    }

    /* ======================================================================
       MODULE: Copy to Clipboard (for referral codes, IDs, etc.)
       ====================================================================== */
    function initCopyToClipboard() {
        $$('[data-copy]').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var textToCopy = this.dataset.copy;
                var originalText = this.textContent;

                if (navigator.clipboard && window.isSecureContext) {
                    navigator.clipboard.writeText(textToCopy).then(function () {
                        btn.textContent = 'Copied!';
                        setTimeout(function () {
                            btn.textContent = originalText;
                        }, 2000);
                    });
                } else {
                    // Fallback
                    var textarea = document.createElement('textarea');
                    textarea.value = textToCopy;
                    textarea.style.position = 'fixed';
                    textarea.style.left = '-9999px';
                    document.body.appendChild(textarea);
                    textarea.select();
                    try {
                        document.execCommand('copy');
                        btn.textContent = 'Copied!';
                        setTimeout(function () {
                            btn.textContent = originalText;
                        }, 2000);
                    } catch (err) {
                        // Silently fail
                    }
                    document.body.removeChild(textarea);
                }
            });
        });
    }

    /* ======================================================================
       MODULE: Tab Switching (for content sections)
       ====================================================================== */
    function initTabs() {
        $$('.tab-nav').forEach(function (tabNav) {
            var tabs = $$('[data-tab]', tabNav);
            var parentSection = tabNav.closest('.tab-section') || tabNav.parentElement;
            var panes = $$('.tab-pane', parentSection);

            tabs.forEach(function (tab) {
                tab.addEventListener('click', function () {
                    var target = this.dataset.tab;

                    // Update active tab
                    tabs.forEach(function (t) { t.classList.remove('active'); });
                    this.classList.add('active');

                    // Show correct pane
                    panes.forEach(function (pane) {
                        if (pane.id === target || pane.dataset.pane === target) {
                            pane.classList.add('active');
                            pane.style.display = '';
                        } else {
                            pane.classList.remove('active');
                            pane.style.display = 'none';
                        }
                    });
                });
            });
        });
    }

    /* ======================================================================
       MODULE: Parallax Effect for Hero
       ====================================================================== */
    function initParallax() {
        var heroContent = $('.hero-content');
        if (!heroContent) return;

        // Only on desktop
        if (window.innerWidth < 768) return;

        var heroBg = $('.hero-bg');

        function handleParallax() {
            var scrollY = window.pageYOffset;
            var heroHeight = heroContent.closest('.hero');
            if (!heroHeight) return;

            if (scrollY < heroHeight.offsetHeight) {
                if (heroBg) {
                    heroBg.style.transform = 'translateY(' + (scrollY * 0.3) + 'px)';
                }
                heroContent.style.transform = 'translateY(' + (scrollY * 0.15) + 'px)';
                heroContent.style.opacity = 1 - (scrollY / heroHeight.offsetHeight) * 0.6;
            }
        }

        window.addEventListener('scroll', throttle(handleParallax, 16), { passive: true });
    }

    /* ======================================================================
       MODULE: Dynamic Year in Footer
       ====================================================================== */
    function initDynamicYear() {
        $$('[data-year]').forEach(function (el) {
            el.textContent = new Date().getFullYear();
        });
    }

    /* ======================================================================
       MODULE: Preloader
       ====================================================================== */
    function initPreloader() {
        var preloader = $('.preloader');
        if (!preloader) return;

        window.addEventListener('load', function () {
            preloader.style.opacity = '0';
            preloader.style.visibility = 'hidden';
            setTimeout(function () {
                preloader.style.display = 'none';
                document.body.classList.remove('loading');
            }, 400);
        });
    }

    /* ======================================================================
       MODULE: Back-to-WhatsApp CTA Interactions
       ====================================================================== */
    function initWhatsAppFloat() {
        var waFloat = $('.whatsapp-float');
        if (!waFloat) return;

        var waLink = $('a', waFloat);
        if (!waLink) return;

        // Track the click for analytics (if a dataLayer exists)
        waLink.addEventListener('click', function () {
            if (typeof window.dataLayer !== 'undefined') {
                window.dataLayer.push({
                    event: 'whatsapp_click',
                    event_category: 'engagement',
                    event_label: 'floating_button'
                });
            }
        });
    }

    /* ======================================================================
       INITIALIZATION - Boot all modules on DOM ready
       ====================================================================== */
    onReady(function () {
        initPreloader();
        initAnnouncementBar();
        initMobileMenu();
        initNavbarScroll();
        initDropdowns();
        initSmoothScroll();
        initScrollToTop();
        initReadingProgress();
        initFaqAccordion();
        initTestimonialsCarousel();
        initCountdownTimer();
        initWelcomePopup();
        initLiveOdds();
        initCounterAnimation();
        initLazyLoading();
        initScrollReveal();
        initFreezeButton();
        initActiveNavHighlight();
        initFormValidation();
        initCopyToClipboard();
        initTabs();
        initParallax();
        initDynamicYear();
        initWhatsAppFloat();
        initMobileAutoScroll();

        // Log initialization (remove in production)
        if (window.location.hostname === 'localhost' || window.location.hostname === '127.0.0.1') {
            console.log('[Radhey] All modules initialized successfully.');
        }
    });

})();

/* ======================================================================
   ENHANCEMENT: Scroll-Triggered Entrance Animations
   ====================================================================== */
(function() {
    'use strict';

    // Auto-add animation classes to sections and cards
    function initScrollAnimations() {
        // Add animate-on-scroll to section headers
        document.querySelectorAll('.section-header').forEach(function(el) {
            if (!el.classList.contains('animate-on-scroll')) {
                el.classList.add('animate-on-scroll');
            }
        });

        // Add animate-fade-up to grid items with stagger
        // Skip grids that are inside a carousel track (they get hidden while off-screen)
        var grids = document.querySelectorAll('.features-grid, .services-grid, .tips-grid, .platforms-grid, .steps-grid, .proof-grid, .blog-grid, .payment-methods-row');
        grids.forEach(function(grid) {
            if (grid.classList.contains('tips-carousel-track') ||
                grid.classList.contains('platforms-carousel-track') ||
                grid.classList.contains('steps-carousel-track') ||
                grid.classList.contains('proof-carousel-track')) return;
            grid.classList.add('stagger-children');
            var children = grid.children;
            for (var i = 0; i < children.length; i++) {
                if (!children[i].classList.contains('animate-fade-up')) {
                    children[i].classList.add('animate-fade-up');
                }
            }
        });

        // Add slide animations to alternating sections
        document.querySelectorAll('.care-grid, .deposit-withdraw-grid, .get-id-steps').forEach(function(grid) {
            var children = grid.children;
            for (var i = 0; i < children.length; i++) {
                if (i % 2 === 0) {
                    children[i].classList.add('animate-slide-left');
                } else {
                    children[i].classList.add('animate-slide-right');
                }
            }
        });

        // Add zoom-in to special elements
        document.querySelectorAll('.bonus-card, .cta-content, .odds-table-wrapper').forEach(function(el) {
            if (!el.classList.contains('animate-zoom-in')) {
                el.classList.add('animate-zoom-in');
            }
        });

        // Add animate-on-scroll to testimonial carousel
        document.querySelectorAll('.testimonials-carousel, .carousel-controls').forEach(function(el) {
            el.classList.add('animate-on-scroll');
        });

        // Set up IntersectionObserver
        var animClasses = ['.animate-on-scroll', '.animate-slide-left', '.animate-slide-right', '.animate-zoom-in', '.animate-fade-up'];
        var allAnimated = document.querySelectorAll(animClasses.join(', '));

        if ('IntersectionObserver' in window) {
            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animated');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.12,
                rootMargin: '0px 0px -40px 0px'
            });

            allAnimated.forEach(function(el) {
                observer.observe(el);
            });
        } else {
            // Fallback: show everything
            allAnimated.forEach(function(el) {
                el.classList.add('animated');
            });
        }
    }

    // Enhanced odds table with blue/pink flash
    function enhanceOddsTable() {
        var odds = document.querySelectorAll('.odds-cell .odd');
        if (!odds.length) return;

        setInterval(function() {
            odds.forEach(function(odd) {
                var current = parseFloat(odd.textContent);
                if (isNaN(current)) return;

                var change = (Math.random() - 0.5) * 0.15;
                var newVal = Math.max(1.01, current + change);
                odd.textContent = newVal.toFixed(2);

                // Flash animation
                if (change > 0) {
                    odd.classList.remove('flash-down');
                    odd.classList.add('flash-up');
                } else {
                    odd.classList.remove('flash-up');
                    odd.classList.add('flash-down');
                }

                setTimeout(function() {
                    odd.classList.remove('flash-up', 'flash-down');
                }, 600);
            });
        }, 3000);
    }

    // Counter animation with IntersectionObserver
    function initCounterAnimation() {
        var counters = document.querySelectorAll('[data-count]');
        if (!counters.length) return;

        if ('IntersectionObserver' in window) {
            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        animateCounter(entry.target);
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });

            counters.forEach(function(counter) {
                observer.observe(counter);
            });
        }
    }

    function animateCounter(el) {
        var target = parseInt(el.getAttribute('data-count'));
        var duration = 2000;
        var start = 0;
        var startTime = null;

        function easeOutCubic(t) {
            return 1 - Math.pow(1 - t, 3);
        }

        function update(timestamp) {
            if (!startTime) startTime = timestamp;
            var progress = Math.min((timestamp - startTime) / duration, 1);
            var easedProgress = easeOutCubic(progress);
            var current = Math.floor(easedProgress * target);

            if (target >= 1000000) {
                el.textContent = (current / 1000000).toFixed(0) + 'M';
            } else if (target >= 1000) {
                el.textContent = (current / 1000).toFixed(0) + 'K';
            } else {
                el.textContent = current;
            }

            if (progress < 1) {
                requestAnimationFrame(update);
            } else {
                if (target >= 1000000) {
                    el.textContent = (target / 1000000).toFixed(0) + 'M';
                } else {
                    el.textContent = target;
                }
            }
        }

        requestAnimationFrame(update);
    }

    // Navbar hide/show on scroll with smooth transition
    function enhancedNavScroll() {
        var header = document.querySelector('header, .site-header, .navbar');
        if (!header) return;

        var lastScroll = 0;
        var headerHeight = header.offsetHeight;

        window.addEventListener('scroll', function() {
            var currentScroll = window.pageYOffset;

            if (currentScroll > headerHeight) {
                header.style.boxShadow = '0 4px 30px rgba(0, 0, 0, 0.3), 0 0 20px rgba(254, 186, 11, 0.05)';
            } else {
                header.style.boxShadow = 'none';
            }

            lastScroll = currentScroll;
        }, { passive: true });
    }

    // Initialize all enhancements when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
            initScrollAnimations();
            enhanceOddsTable();
            initCounterAnimation();
            enhancedNavScroll();
        });
    } else {
        initScrollAnimations();
        enhanceOddsTable();
        initCounterAnimation();
        enhancedNavScroll();
    }
})();

/* =============================================
   NEW ENHANCEMENTS
   ============================================= */

// 1. HERO CAROUSEL
(function() {
    var slides = document.querySelectorAll('.hero-slide');
    var dots = document.querySelectorAll('.hero-dot');
    var prevBtn = document.querySelector('.hero-prev');
    var nextBtn = document.querySelector('.hero-next');
    var slidesContainer = document.querySelector('.hero-slides');
    if (!slidesContainer || slides.length === 0) return;

    var currentSlide = 0;
    var totalSlides = slides.length;
    var autoplayTimer = null;
    var isAnimating = false;

    function goToSlide(index) {
        if (isAnimating) return;
        isAnimating = true;
        slides[currentSlide].classList.remove('active');
        if (dots[currentSlide]) dots[currentSlide].classList.remove('active');
        currentSlide = (index + totalSlides) % totalSlides;
        slidesContainer.style.transform = 'translateX(-' + (currentSlide * 100) + '%)';
        slides[currentSlide].classList.add('active');
        if (dots[currentSlide]) dots[currentSlide].classList.add('active');
        setTimeout(function() { isAnimating = false; }, 700);
    }

    function nextSlide() { goToSlide(currentSlide + 1); }
    function prevSlide() { goToSlide(currentSlide - 1); }

    function startAutoplay() {
        stopAutoplay();
        autoplayTimer = setInterval(nextSlide, 5000);
    }

    function stopAutoplay() {
        if (autoplayTimer) { clearInterval(autoplayTimer); autoplayTimer = null; }
    }

    if (nextBtn) nextBtn.addEventListener('click', function() { nextSlide(); startAutoplay(); });
    if (prevBtn) prevBtn.addEventListener('click', function() { prevSlide(); startAutoplay(); });

    dots.forEach(function(dot, i) {
        dot.addEventListener('click', function() { goToSlide(i); startAutoplay(); });
    });

    // Touch swipe
    var touchStartX = 0;
    slidesContainer.addEventListener('touchstart', function(e) {
        touchStartX = e.changedTouches[0].screenX;
        stopAutoplay();
    }, { passive: true });

    slidesContainer.addEventListener('touchend', function(e) {
        var diff = touchStartX - e.changedTouches[0].screenX;
        if (Math.abs(diff) > 50) {
            diff > 0 ? nextSlide() : prevSlide();
        }
        startAutoplay();
    }, { passive: true });

    startAutoplay();
})();

// 2. COUNTER ANIMATION (Numbers count up when scrolled into view)
(function() {
    var counters = document.querySelectorAll('[data-counter]');
    if (counters.length === 0) return;

    var animated = new Set();

    function formatNumber(num) {
        if (num >= 1000000) return (num / 1000000).toFixed(0) + 'M';
        if (num >= 1000) return (num / 1000).toFixed(0) + 'K';
        return num.toString();
    }

    function easeOutCubic(t) {
        return 1 - Math.pow(1 - t, 3);
    }

    function animateCounter(el) {
        var target = parseInt(el.getAttribute('data-counter'), 10);
        var suffix = el.getAttribute('data-counter-suffix') || '';
        var prefix = el.getAttribute('data-counter-prefix') || '';
        var duration = 2000;
        var startTime = null;
        var useFormat = target >= 10000;

        function update(timestamp) {
            if (!startTime) startTime = timestamp;
            var progress = Math.min((timestamp - startTime) / duration, 1);
            var easedProgress = easeOutCubic(progress);
            var current = Math.floor(easedProgress * target);
            el.textContent = prefix + (useFormat ? formatNumber(current) : current) + suffix;
            if (progress < 1) {
                requestAnimationFrame(update);
            } else {
                el.textContent = prefix + (useFormat ? formatNumber(target) : target) + suffix;
            }
        }

        requestAnimationFrame(update);
    }

    var observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting && !animated.has(entry.target)) {
                animated.add(entry.target);
                animateCounter(entry.target);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(function(counter) { observer.observe(counter); });
})();

// 3. ACTIVITY FEED TOAST NOTIFICATIONS
(function() {
    var activities = [
        { name: 'Rohit S.', city: 'Mumbai', action: 'just got a Cricket Betting ID' },
        { name: 'Amit K.', city: 'Delhi', action: 'just withdrew ₹50,000' },
        { name: 'Priya M.', city: 'Bangalore', action: 'just got a Casino ID' },
        { name: 'Sanjay V.', city: 'Jaipur', action: 'just claimed 100% Welcome Bonus' },
        { name: 'Neha R.', city: 'Pune', action: 'just got an IPL Betting ID' },
        { name: 'Vikram P.', city: 'Ahmedabad', action: 'just withdrew ₹1,25,000' },
        { name: 'Rahul D.', city: 'Lucknow', action: 'just got a Lord Exchange ID' },
        { name: 'Deepak S.', city: 'Chennai', action: 'just got a Lotus Exchange ID' },
        { name: 'Pooja G.', city: 'Hyderabad', action: 'just withdrew ₹75,000' },
        { name: 'Arjun T.', city: 'Kolkata', action: 'just got a Football Betting ID' },
        { name: 'Manish K.', city: 'Nagpur', action: 'just claimed Referral Bonus' },
        { name: 'Kavita S.', city: 'Indore', action: 'just got an Aviator ID' },
    ];

    // Create toast element
    var toast = document.createElement('div');
    toast.className = 'activity-toast';
    toast.innerHTML = '<div class="activity-toast-icon">✓</div>' +
        '<div class="activity-toast-content"><strong></strong><span></span></div>' +
        '<button class="activity-toast-close">&times;</button>';
    document.body.appendChild(toast);

    var nameEl = toast.querySelector('.activity-toast-content strong');
    var actionEl = toast.querySelector('.activity-toast-content span');
    var closeBtn = toast.querySelector('.activity-toast-close');
    var activityIndex = 0;
    var toastTimer = null;

    closeBtn.addEventListener('click', function() {
        toast.classList.remove('show');
    });

    function showActivity() {
        var activity = activities[activityIndex % activities.length];
        var timeAgo = Math.floor(Math.random() * 5) + 1;
        nameEl.textContent = activity.name + ' from ' + activity.city;
        actionEl.textContent = activity.action + ' • ' + timeAgo + ' min ago';
        toast.classList.add('show');

        setTimeout(function() {
            toast.classList.remove('show');
        }, 4000);

        activityIndex++;
    }

    // Start after 8 seconds, then every 15 seconds
    setTimeout(function() {
        showActivity();
        toastTimer = setInterval(showActivity, 15000);
    }, 8000);
})();

// 4. TYPING EFFECT ON FIRST HERO SLIDE
(function() {
    var firstTitle = document.querySelector('.hero-slide.active .hero-title');
    if (!firstTitle) return;

    var fullHTML = firstTitle.innerHTML;
    var textContent = firstTitle.textContent;
    firstTitle.innerHTML = '';
    firstTitle.style.opacity = '1';
    firstTitle.style.transform = 'translateY(0)';

    var i = 0;
    var cursor = document.createElement('span');
    cursor.className = 'typing-cursor';

    function typeNext() {
        if (i < textContent.length) {
            firstTitle.textContent = textContent.substring(0, i + 1);
            firstTitle.appendChild(cursor);
            i++;
            var delay = textContent[i - 1] === ' ' ? 30 : 40;
            setTimeout(typeNext, delay);
        } else {
            // Restore original HTML with gold text styling after typing
            firstTitle.innerHTML = fullHTML;
            // Remove cursor after a brief pause
            setTimeout(function() {
                var c = firstTitle.querySelector('.typing-cursor');
                if (c) c.remove();
            }, 2000);
        }
    }

    // Start typing after slide animates in
    setTimeout(typeNext, 800);
})();

// 5. LIVE USER COUNTER (random fluctuating number)
(function() {
    var liveCounters = document.querySelectorAll('.live-counter-num');
    if (liveCounters.length === 0) return;

    function updateCount() {
        var base = 1247;
        var variation = Math.floor(Math.random() * 200) - 100;
        var count = base + variation;
        liveCounters.forEach(function(el) {
            el.textContent = count.toLocaleString();
        });
    }

    updateCount();
    setInterval(updateCount, 8000);
})();
