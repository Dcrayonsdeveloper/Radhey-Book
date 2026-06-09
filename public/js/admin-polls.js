/* Poll Options Builder
 * Add / remove option rows and renumber so name="options[N][...]" stays
 * sequential. Min 2 options, max 8 enforced client-side; server also validates.
 */
(function () {
    'use strict';

    var list     = document.getElementById('poll-options-list');
    var addBtn   = document.getElementById('poll-option-add');
    var template = document.getElementById('poll-option-template');

    if (!list || !addBtn || !template) return;

    var MIN = 2;
    var MAX = 8;

    function rows() {
        return Array.prototype.slice.call(list.querySelectorAll('.poll-option-row'));
    }

    function renumber() {
        rows().forEach(function (row, i) {
            var num = row.querySelector('.poll-option-num');
            if (num) num.textContent = (i + 1);
            row.querySelectorAll('input, select, textarea').forEach(function (el) {
                if (!el.name) return;
                el.name = el.name.replace(/options\[\d+\]/, 'options[' + i + ']');
            });
        });
        addBtn.disabled = rows().length >= MAX;
    }

    addBtn.addEventListener('click', function () {
        if (rows().length >= MAX) return;
        var idx = rows().length;
        var html = template.innerHTML
            .replace(/__INDEX__/g, idx)
            .replace(/__NUM__/g, idx + 1);
        var wrap = document.createElement('div');
        wrap.innerHTML = html.trim();
        list.appendChild(wrap.firstElementChild);
        renumber();
        var lastInput = list.querySelector('.poll-option-row:last-child input[type="text"]');
        if (lastInput) lastInput.focus();
    });

    list.addEventListener('click', function (e) {
        if (!e.target.classList.contains('poll-option-remove')) return;
        if (rows().length <= MIN) {
            alert('A poll must have at least ' + MIN + ' options.');
            return;
        }
        var row = e.target.closest('.poll-option-row');
        if (row) row.remove();
        renumber();
    });

    renumber();
})();
