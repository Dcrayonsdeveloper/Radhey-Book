@extends('admin.layouts.app')
@section('title', 'Edit ' . $menu->label)

@section('content')
<div class="page-header">
    <p style="color:#b8b8b8;font-size:14px;margin:0;">Add, remove, reorder, and nest links. Click <strong>Save Menu</strong> when done.</p>
    <a href="{{ route('admin.menus.index') }}" class="btn btn-sm btn-outline">&larr; All Menus</a>
</div>

@if(session('error'))
    <div class="alert alert-error" style="margin-bottom: 16px;">{{ session('error') }}</div>
@endif

<form method="POST" action="{{ route('admin.menus.update', $menu) }}" id="menu-form">
    @csrf @method('PUT')

    <input type="hidden" name="items_json" id="items-json" value="{{ json_encode($menu->items ?? []) }}">

    <div class="panel">
        <div class="panel-header">
            <h3 class="panel-title">{{ $menu->label }}</h3>
            <button type="button" id="add-top" class="btn btn-sm btn-gold">+ Add Top-level Item</button>
        </div>
        <div class="panel-body">
            <div id="menu-list"></div>
        </div>
    </div>

    <div class="form-actions" style="margin-top: 20px;">
        <button type="submit" class="btn btn-gold">Save Menu</button>
        <a href="{{ route('admin.menus.index') }}" class="btn btn-outline">Cancel</a>
    </div>
</form>

<style>
    .menu-row {
        display: flex; align-items: center; gap: 8px;
        padding: 10px 12px; margin-bottom: 8px;
        background: rgba(255,255,255,0.03);
        border: 1px solid rgba(255,255,255,0.08);
        border-radius: 8px;
    }
    .menu-row.is-child { margin-left: 36px; background: rgba(212,175,55,0.04); }
    .menu-row .drag { cursor: grab; color: #666; user-select: none; padding: 4px 6px; font-size: 16px; }
    .menu-row input[type=text], .menu-row select {
        background: rgba(0,0,0,0.3);
        border: 1px solid rgba(255,255,255,0.1);
        color: #fff;
        padding: 6px 10px; border-radius: 6px;
        font-size: 13px; min-width: 0;
    }
    .menu-row input.label { flex: 1 1 200px; }
    .menu-row input.url   { flex: 1 1 220px; font-family: monospace; }
    .menu-row select.target { flex: 0 0 110px; }
    .menu-row .row-actions { display: flex; gap: 6px; }
    .menu-row .btn-tiny {
        background: rgba(255,255,255,0.06); color: #ccc; border: 1px solid rgba(255,255,255,0.08);
        padding: 4px 10px; border-radius: 6px; font-size: 12px; cursor: pointer;
    }
    .menu-row .btn-tiny:hover { border-color: #d4af37; color: #d4af37; }
    .menu-row .btn-remove { background: rgba(248,113,113,0.1); color: #f87171; border-color: rgba(248,113,113,0.2); }
    .menu-row .btn-remove:hover { background: rgba(248,113,113,0.2); color: #fff; border-color: #f87171; }
    .children-wrap { padding-left: 0; }
    .placeholder { color: #777; font-style: italic; padding: 14px; text-align: center; }
</style>

<script>
(function () {
    var initial = JSON.parse(document.getElementById('items-json').value || '[]');
    var listEl  = document.getElementById('menu-list');
    var jsonEl  = document.getElementById('items-json');

    // ---------- render ----------
    function blankItem() { return { label: '', url: '', target: '_self', children: [] }; }
    function blankChild() { return { label: '', url: '', target: '_self' }; }

    function rowHtml(isChild) {
        return '<span class="drag" title="Drag to reorder">&#9776;</span>' +
            '<input type="text" class="label" placeholder="' + (isChild ? 'Sub-item label' : 'Label (e.g. Cricket)') + '">' +
            '<input type="text" class="url" placeholder="/cricket-betting-id">' +
            '<select class="target">' +
                '<option value="_self">Same tab</option>' +
                '<option value="_blank">New tab</option>' +
            '</select>' +
            '<div class="row-actions">' +
                (isChild ? '' : '<button type="button" class="btn-tiny add-child">+ Sub</button>') +
                '<button type="button" class="btn-tiny btn-remove">×</button>' +
            '</div>';
    }

    function buildRow(item, isChild) {
        var div = document.createElement('div');
        div.className = 'menu-row' + (isChild ? ' is-child' : '');
        div.draggable = true;
        div.innerHTML = rowHtml(isChild);
        div.querySelector('input.label').value  = item.label  || '';
        div.querySelector('input.url').value    = item.url    || '';
        div.querySelector('select.target').value = item.target || '_self';
        return div;
    }

    function buildTopBlock(item) {
        var wrap = document.createElement('div');
        wrap.className = 'menu-block';
        var top = buildRow(item, false);
        wrap.appendChild(top);

        var childrenWrap = document.createElement('div');
        childrenWrap.className = 'children-wrap';
        wrap.appendChild(childrenWrap);

        (item.children || []).forEach(function (c) {
            childrenWrap.appendChild(buildRow(c, true));
        });

        return wrap;
    }

    function render(items) {
        listEl.innerHTML = '';
        if (!items.length) {
            listEl.innerHTML = '<div class="placeholder">No items yet. Click "+ Add Top-level Item" to start.</div>';
            return;
        }
        items.forEach(function (it) { listEl.appendChild(buildTopBlock(it)); });
    }

    // ---------- DOM → JSON ----------
    function collect() {
        var out = [];
        listEl.querySelectorAll(':scope > .menu-block').forEach(function (block) {
            var topRow = block.querySelector(':scope > .menu-row');
            if (!topRow) return;
            var item = {
                label:  topRow.querySelector('input.label').value,
                url:    topRow.querySelector('input.url').value,
                target: topRow.querySelector('select.target').value,
                children: []
            };
            block.querySelectorAll(':scope > .children-wrap > .menu-row').forEach(function (cRow) {
                item.children.push({
                    label:  cRow.querySelector('input.label').value,
                    url:    cRow.querySelector('input.url').value,
                    target: cRow.querySelector('select.target').value,
                });
            });
            out.push(item);
        });
        jsonEl.value = JSON.stringify(out);
        return out;
    }

    // ---------- event delegation ----------
    document.getElementById('add-top').addEventListener('click', function () {
        // Re-collect first so we don't lose what's typed when there was a placeholder.
        var current = listEl.querySelector('.placeholder') ? [] : collect();
        current.push(blankItem());
        render(current);
    });

    listEl.addEventListener('click', function (e) {
        var t = e.target;
        if (t.classList.contains('btn-remove')) {
            var row = t.closest('.menu-row');
            var isChild = row.classList.contains('is-child');
            // Remove the row; if it's a top-level item, also remove its block (children go too).
            if (isChild) {
                row.remove();
            } else {
                var block = row.closest('.menu-block');
                if (block) block.remove();
            }
            // If list is now empty, show placeholder.
            if (!listEl.querySelectorAll('.menu-block').length) render([]);
        } else if (t.classList.contains('add-child')) {
            var block = t.closest('.menu-block');
            var childrenWrap = block.querySelector(':scope > .children-wrap');
            childrenWrap.appendChild(buildRow(blankChild(), true));
        }
    });

    // ---------- drag & drop reordering ----------
    var dragSrc = null;
    listEl.addEventListener('dragstart', function (e) {
        var row = e.target.closest('.menu-row');
        if (!row) return;
        dragSrc = row.classList.contains('is-child') ? row : row.closest('.menu-block');
        e.dataTransfer.effectAllowed = 'move';
        // Firefox needs setData
        try { e.dataTransfer.setData('text/plain', ''); } catch (err) {}
    });

    listEl.addEventListener('dragover', function (e) {
        e.preventDefault();
        e.dataTransfer.dropEffect = 'move';
    });

    listEl.addEventListener('drop', function (e) {
        e.preventDefault();
        if (!dragSrc) return;
        var srcIsChild = dragSrc.classList.contains('menu-row');
        var targetRow  = e.target.closest('.menu-row');
        if (!targetRow) { dragSrc = null; return; }

        if (srcIsChild) {
            // Children can only drop within the same parent's .children-wrap.
            var srcParent    = dragSrc.parentElement;
            var targetIsChild = targetRow.classList.contains('is-child');
            if (!targetIsChild || targetRow.parentElement !== srcParent) { dragSrc = null; return; }
            srcParent.insertBefore(dragSrc, targetRow);
        } else {
            // Top-level blocks reorder among themselves.
            var targetBlock = targetRow.closest('.menu-block');
            if (!targetBlock || targetBlock === dragSrc) { dragSrc = null; return; }
            listEl.insertBefore(dragSrc, targetBlock);
        }
        dragSrc = null;
    });

    // ---------- form submit ----------
    document.getElementById('menu-form').addEventListener('submit', function () {
        collect();
    });

    // initial paint
    render(initial);
})();
</script>
@endsection
