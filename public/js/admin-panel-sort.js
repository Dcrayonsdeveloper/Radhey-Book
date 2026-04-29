(function () {
    'use strict';

    var container = document.getElementById('sections-container');
    var orderInput = document.getElementById('panel-order-input');
    if (!container || !orderInput) return;

    var dragEl = null;

    // --- Drag & Drop ---
    container.addEventListener('dragstart', function (e) {
        var panel = e.target.closest('.panel[draggable]');
        if (!panel) return;
        dragEl = panel;
        panel.classList.add('dragging');
        e.dataTransfer.effectAllowed = 'move';
        e.dataTransfer.setData('text/plain', '');
    });

    container.addEventListener('dragend', function () {
        if (dragEl) dragEl.classList.remove('dragging');
        dragEl = null;
        container.querySelectorAll('.panel.drag-over').forEach(function (el) {
            el.classList.remove('drag-over');
        });
        syncOrder();
    });

    container.addEventListener('dragover', function (e) {
        e.preventDefault();
        e.dataTransfer.dropEffect = 'move';
        var target = e.target.closest('.panel[draggable]');
        if (!target || target === dragEl) return;

        container.querySelectorAll('.panel.drag-over').forEach(function (el) {
            el.classList.remove('drag-over');
        });

        var rect = target.getBoundingClientRect();
        var midY = rect.top + rect.height / 2;

        if (e.clientY < midY) {
            target.classList.add('drag-over');
            container.insertBefore(dragEl, target);
        } else {
            container.insertBefore(dragEl, target.nextSibling);
        }
    });

    container.addEventListener('drop', function (e) {
        e.preventDefault();
    });

    function syncOrder() {
        var panels = container.querySelectorAll('.panel[data-group]');
        var order = [];
        panels.forEach(function (p) {
            order.push(p.getAttribute('data-group'));
        });
        orderInput.value = JSON.stringify(order);
    }

    // --- Collapse / Expand ---
    container.addEventListener('click', function (e) {
        var btn = e.target.closest('.panel-collapse-btn');
        if (!btn) return;
        var panel = btn.closest('.panel');
        var body = panel.querySelector('.panel-body');
        btn.classList.toggle('collapsed');
        body.classList.toggle('collapsed');
    });

    // Sync order on form submit
    var form = document.getElementById('page-edit-form');
    if (form) {
        form.addEventListener('submit', function () {
            syncOrder();
        });
    }
})();
