/* Content Blocks Builder
 *
 * Handles add / delete / reorder / image preview for the page content blocks.
 * Each block carries its own client-generated id (blk_xxxx). Names are
 * content_blocks[<id>][<field>] so the server can pair fields regardless of
 * visual order. A hidden _block_order field tracks the current order; the
 * server iterates that to build the final ordered array.
 *
 * TinyMCE is initialized per-block by selector. Reordering destroys and
 * re-creates each block's TinyMCE instance because moving a textarea in the
 * DOM detaches TinyMCE's hidden iframe.
 */
(function () {
    'use strict';

    var list      = document.getElementById('cb-list');
    var addBtn    = document.getElementById('cb-add-btn');
    var orderEl   = document.getElementById('cb-order');
    var template  = document.getElementById('cb-block-template');

    if (!list || !addBtn || !orderEl || !template) {
        return; // builder not on this page
    }

    // -- helpers -----------------------------------------------------------

    function newBlockId() {
        return 'blk_' + Math.random().toString(36).slice(2, 10);
    }

    function updateOrderField() {
        var ids = Array.prototype.map.call(
            list.querySelectorAll('.cb-block'),
            function (el) { return el.getAttribute('data-block-id'); }
        );
        orderEl.value = ids.join(',');
    }

    function tinymceForTextarea(textarea) {
        if (!window.tinymce) return null;
        return tinymce.get(textarea.id) || null;
    }

    function ensureUniqueTextareaId(textarea, blockId) {
        if (!textarea.id) {
            textarea.id = 'cb-editor-' + blockId;
        }
    }

    function initTinyMceFor(textarea, blockId) {
        if (!window.tinymce) return;
        ensureUniqueTextareaId(textarea, blockId);

        // If already attached (e.g. after reorder), remove and re-init
        var existing = tinymce.get(textarea.id);
        if (existing) {
            existing.remove();
        }

        tinymce.init({
            target: textarea,
            plugins: 'lists link image code table',
            toolbar: 'undo redo | formatselect | bold italic underline | alignleft aligncenter alignright | bullist numlist | link image | code',
            height: 320,
            skin: 'oxide-dark',
            content_css: 'dark',
            menubar: false,
            setup: function (editor) {
                editor.on('change keyup', function () { editor.save(); });
            }
        });
    }

    function initAllExistingEditors() {
        list.querySelectorAll('.cb-block').forEach(function (block) {
            var blockId = block.getAttribute('data-block-id');
            var textarea = block.querySelector('textarea.cb-editor');
            if (textarea) initTinyMceFor(textarea, blockId);
        });
    }

    // -- delete a block ---------------------------------------------------

    function attachDeleteHandler(block) {
        var btn = block.querySelector('.cb-delete-btn');
        if (!btn) return;
        btn.addEventListener('click', function () {
            if (!confirm('Delete this section? This cannot be undone until you Save.')) return;
            var textarea = block.querySelector('textarea.cb-editor');
            var ed = textarea ? tinymceForTextarea(textarea) : null;
            if (ed) ed.remove();
            block.remove();
            updateOrderField();
        });
    }

    // -- image preview + remove -------------------------------------------

    function attachImageHandlers(block) {
        var fileInput  = block.querySelector('.cb-image-file');
        var preview    = block.querySelector('.cb-image-preview');
        var previewImg = preview ? preview.querySelector('img') : null;
        var removeBtn  = block.querySelector('.cb-image-remove');
        var urlInput   = block.querySelector('input[type="hidden"][name$="[image_url]"]');
        var removeFlag = block.querySelector('.cb-image-removed-flag');

        if (!fileInput || !preview || !previewImg) return;

        fileInput.addEventListener('change', function () {
            var f = fileInput.files && fileInput.files[0];
            if (!f) return;
            // Reset removed flag — user is replacing/adding, not removing
            if (removeFlag) removeFlag.value = '0';
            var reader = new FileReader();
            reader.onload = function (e) {
                previewImg.src = e.target.result;
                preview.style.display = '';
            };
            reader.readAsDataURL(f);
        });

        if (removeBtn) {
            removeBtn.addEventListener('click', function () {
                previewImg.src = '';
                preview.style.display = 'none';
                fileInput.value = '';
                if (urlInput)   urlInput.value = '';
                if (removeFlag) removeFlag.value = '1';
            });
        }
    }

    // -- add a fresh block ------------------------------------------------

    function addBlock() {
        var id = newBlockId();
        // Clone template content
        var html = template.innerHTML.replace(/__ID__/g, id);
        var wrapper = document.createElement('div');
        wrapper.innerHTML = html.trim();
        var newBlock = wrapper.firstElementChild;
        list.appendChild(newBlock);

        attachDeleteHandler(newBlock);
        attachImageHandlers(newBlock);
        var textarea = newBlock.querySelector('textarea.cb-editor');
        if (textarea) initTinyMceFor(textarea, id);

        updateOrderField();

        newBlock.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }

    addBtn.addEventListener('click', addBlock);

    // -- drag-and-drop reordering ----------------------------------------

    if (window.Sortable) {
        Sortable.create(list, {
            handle: '.cb-drag-handle',
            animation: 150,
            ghostClass: 'cb-block-ghost',
            chosenClass: 'cb-block-chosen',
            // TinyMCE editors break when their textarea is moved across the
            // DOM. Tear down before dragging starts, re-init when it ends.
            onStart: function (evt) {
                var item = evt.item;
                var textarea = item.querySelector('textarea.cb-editor');
                if (textarea) {
                    var ed = tinymceForTextarea(textarea);
                    if (ed) ed.remove();
                }
            },
            onEnd: function (evt) {
                var item = evt.item;
                var blockId = item.getAttribute('data-block-id');
                var textarea = item.querySelector('textarea.cb-editor');
                if (textarea) initTinyMceFor(textarea, blockId);
                updateOrderField();
            },
        });
    }

    // -- bind to all pre-existing blocks ---------------------------------

    list.querySelectorAll('.cb-block').forEach(function (block) {
        attachDeleteHandler(block);
        attachImageHandlers(block);
    });

    // Some pages load TinyMCE *after* this script (when this script is in the
    // <head> or above the TinyMCE <script>). Wait until tinymce is available.
    function whenTinyReady(cb) {
        if (window.tinymce) return cb();
        var attempts = 0;
        var iv = setInterval(function () {
            attempts++;
            if (window.tinymce) { clearInterval(iv); cb(); }
            if (attempts > 100) clearInterval(iv);
        }, 50);
    }

    whenTinyReady(initAllExistingEditors);

    // Keep the order field in sync if it's submitted before any reorder.
    updateOrderField();
})();
