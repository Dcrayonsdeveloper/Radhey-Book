(function () {
    'use strict';

    var listEl   = document.getElementById('block-builder-list');
    var dataEl   = document.getElementById('content-blocks-data');
    var emptyMsg = document.getElementById('block-empty-msg');
    var form     = document.getElementById('page-edit-form');

    if (!listEl || !dataEl || !form) return;

    var blocks = [];

    try {
        var parsed = JSON.parse(dataEl.value || '[]');
        if (Array.isArray(parsed)) blocks = parsed;
    } catch (e) { blocks = []; }

    function generateId() {
        return 'blk_' + Math.random().toString(36).slice(2, 10);
    }

    function getTypeLabel(type) {
        var labels = {
            heading_h2: 'H2 Heading',
            heading_h3: 'H3 Heading',
            paragraph:  'Paragraph',
            html:       'HTML Block',
            divider:    'Divider',
            button:     'Button (CTA)'
        };
        return labels[type] || type;
    }

    function escHtml(str) {
        return String(str)
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;');
    }

    function findBlock(id) {
        return blocks.find(function (b) { return b.id === id; });
    }

    function render() {
        Array.from(listEl.querySelectorAll('.block-item')).forEach(function (el) { el.remove(); });

        if (blocks.length === 0) {
            emptyMsg.style.display = '';
        } else {
            emptyMsg.style.display = 'none';
            blocks.forEach(function (block, index) {
                listEl.appendChild(buildBlockEl(block, index));
            });
        }
    }

    function buildBlockEl(block, index) {
        var div = document.createElement('div');
        div.className = 'block-item';
        div.dataset.id = block.id;

        var upBtn   = index > 0 ? '<button type="button" class="block-btn" data-action="up" title="Move up">&#8593;</button>' : '';
        var downBtn = index < blocks.length - 1 ? '<button type="button" class="block-btn" data-action="down" title="Move down">&#8595;</button>' : '';

        var header = '<div class="block-item-header">'
            + '<span class="block-drag-handle">&#8942;&#8942;</span>'
            + '<span class="block-type-label">' + getTypeLabel(block.type) + '</span>'
            + '<div class="block-actions">' + upBtn + downBtn
            + '<button type="button" class="block-btn block-btn-delete" data-action="delete" title="Remove">&times;</button>'
            + '</div></div>';

        var body = '<div class="block-item-body">';
        if (block.type === 'divider') {
            body += '<p style="color:#666;font-size:13px;font-style:italic;">Horizontal divider — no content needed.</p>';
        } else if (block.type === 'paragraph' || block.type === 'html') {
            var rows = block.type === 'html' ? 8 : 4;
            var ph   = block.type === 'html' ? 'Enter raw HTML...' : 'Enter paragraph text...';
            body += '<textarea class="form-control block-content-input" rows="' + rows + '" placeholder="' + ph + '">' + escHtml(block.content || '') + '</textarea>';
            if (block.type === 'html') {
                body += '<span class="form-hint" style="font-size:12px;">HTML tags supported. Rendered unescaped on frontend.</span>';
            }
        } else {
            var ph2 = block.type === 'button' ? 'Button label (e.g. Get Cricket Betting ID Now)' : 'Enter heading text...';
            body += '<input type="text" class="form-control block-content-input" value="' + escHtml(block.content || '') + '" placeholder="' + ph2 + '">';
            if (block.type === 'button') {
                body += '<span class="form-hint" style="font-size:12px;">Links to your WhatsApp with this text as the pre-filled message.</span>';
            }
        }
        body += '</div>';

        div.innerHTML = header + body;

        var contentInput = div.querySelector('.block-content-input');
        if (contentInput) {
            contentInput.addEventListener('input', function () {
                var b = findBlock(block.id);
                if (b) { b.content = contentInput.value; save(); }
            });
        }

        div.querySelectorAll('.block-btn[data-action]').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var action = btn.dataset.action;
                if (action === 'up')     moveBlock(block.id, -1);
                if (action === 'down')   moveBlock(block.id,  1);
                if (action === 'delete') deleteBlock(block.id);
            });
        });

        return div;
    }

    function save() {
        dataEl.value = JSON.stringify(blocks);
    }

    function addBlock(type) {
        blocks.push({ id: generateId(), type: type, content: '' });
        render();
        save();
        var items = listEl.querySelectorAll('.block-item');
        if (items.length) items[items.length - 1].scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    function moveBlock(id, dir) {
        var idx = blocks.findIndex(function (b) { return b.id === id; });
        if (idx < 0) return;
        var newIdx = idx + dir;
        if (newIdx < 0 || newIdx >= blocks.length) return;
        var tmp = blocks[idx]; blocks[idx] = blocks[newIdx]; blocks[newIdx] = tmp;
        render();
        save();
    }

    function deleteBlock(id) {
        blocks = blocks.filter(function (b) { return b.id !== id; });
        render();
        save();
    }

    function syncFromDOM() {
        listEl.querySelectorAll('.block-item').forEach(function (el) {
            var input = el.querySelector('.block-content-input');
            var b = findBlock(el.dataset.id);
            if (b && input) b.content = input.value;
        });
    }

    form.addEventListener('submit', function () {
        syncFromDOM();
        save();
    });

    document.querySelectorAll('.block-type-btn[data-block-type]').forEach(function (btn) {
        btn.addEventListener('click', function () { addBlock(btn.dataset.blockType); });
    });

    render();
})();
