/* Poll Popup Widget
 *
 * Shows the active poll as a modal 5 seconds after page load (configurable
 * via data-show-delay-ms). Click an option → POST vote → animate %s into
 * the option buttons → after a short pause, redirect to the configured URL.
 *
 * Dismissal: clicking the × or pressing Esc sets a localStorage flag scoped
 * to the poll id, so the same poll never shows again for this visitor. A
 * fresh poll (different id) bypasses the flag and shows.
 *
 * One vote per visitor enforced client-side via a "voted" flag in
 * localStorage. The server doesn't deduplicate — that's intentional for an
 * engagement gimmick where some skew is acceptable.
 */
(function () {
    'use strict';

    var root = document.getElementById('poll-modal-root');
    if (!root) return;

    var pollId        = root.getAttribute('data-poll-id');
    var redirectUrl   = root.getAttribute('data-redirect-url');
    var minDelayMs    = parseInt(root.getAttribute('data-min-delay-ms'), 10) || 3000;
    var maxDelayMs    = parseInt(root.getAttribute('data-max-delay-ms'), 10) || 10000;
    var voteRoute     = root.getAttribute('data-vote-route');
    var csrf          = root.getAttribute('data-csrf');
    var dismissKey    = 'radhey_poll_dismissed_' + pollId;
    var resultsShownMs = 2000;

    // Pick a random delay in [minDelayMs, maxDelayMs] so the popup
    // doesn't appear at the same predictable moment on every visit.
    var showDelayMs = minDelayMs + Math.floor(Math.random() * Math.max(1, (maxDelayMs - minDelayMs)));

    if (localStorage.getItem(dismissKey) === '1') {
        return; // visitor already dismissed/voted on this poll
    }

    // Block double clicks / requests in flight
    var voting = false;

    function show() {
        root.style.display = 'block';
        // Force reflow then add visible class for transition
        // eslint-disable-next-line no-unused-expressions
        root.offsetHeight;
        root.classList.add('is-visible');
        document.body.style.overflow = 'hidden';
    }

    function dismiss() {
        root.classList.remove('is-visible');
        document.body.style.overflow = '';
        try { localStorage.setItem(dismissKey, '1'); } catch (e) {}
        setTimeout(function () { root.style.display = 'none'; }, 300);
    }

    function renderResults(options) {
        // Animate bars + show %s
        root.querySelectorAll('.poll-option').forEach(function (btn) {
            var optId = parseInt(btn.getAttribute('data-option-id'), 10);
            var data = options.find(function (o) { return o.id === optId; });
            if (!data) return;
            var pct = data.percent || 0;
            var pctEl = btn.querySelector('.poll-option-pct');
            var bar   = btn.querySelector('.poll-option-bar');
            if (pctEl) {
                pctEl.textContent = pct + '%';
                pctEl.style.display = '';
            }
            if (bar) {
                requestAnimationFrame(function () {
                    bar.style.width = pct + '%';
                });
            }
            btn.classList.add('voted');
            btn.disabled = true;
        });
        root.classList.add('results-shown');
    }

    function vote(optionId, button) {
        if (voting) return;
        voting = true;
        button.classList.add('is-loading');

        fetch(voteRoute + '/' + optionId, {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrf,
                'X-Requested-With': 'XMLHttpRequest',
            },
            credentials: 'same-origin',
            body: JSON.stringify({}),
        })
        .then(function (res) { return res.json(); })
        .then(function (data) {
            button.classList.remove('is-loading');
            if (!data.ok) {
                // Server rejected (poll deactivated, wrong option, etc.)
                // Hide the modal silently; don't redirect.
                voting = false;
                dismiss();
                return;
            }
            renderResults(data.options);
            try { localStorage.setItem(dismissKey, '1'); } catch (e) {}
            // After showing the percentages, redirect to the configured URL
            setTimeout(function () {
                window.location.href = data.redirect_url || redirectUrl;
            }, resultsShownMs);
        })
        .catch(function () {
            voting = false;
            button.classList.remove('is-loading');
            // Network error: dismiss silently
            dismiss();
        });
    }

    // Wire up close button + overlay click
    root.querySelectorAll('[data-poll-close]').forEach(function (el) {
        el.addEventListener('click', dismiss);
    });

    // Wire up option buttons
    root.querySelectorAll('.poll-option').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var id = parseInt(btn.getAttribute('data-option-id'), 10);
            if (id) vote(id, btn);
        });
    });

    // Esc to dismiss
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && root.classList.contains('is-visible')) {
            dismiss();
        }
    });

    // Show after the configured delay
    setTimeout(show, showDelayMs);
})();
