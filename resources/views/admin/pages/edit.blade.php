@extends('admin.layouts.app')
@section('title', 'Edit Page: ' . $page->title)

@section('content')
<div class="page-header">
    <div style="display:flex;align-items:center;gap:16px;flex-wrap:wrap;">
        <p style="margin:0;">URL: <a href="{{ url($page->slug === 'home' ? '/' : '/' . $page->slug) }}" target="_blank" style="color: #d4af37;">/{{ $page->slug === 'home' ? '' : $page->slug }}</a></p>
        <form method="POST" action="{{ route('admin.pages.update', $page) }}" style="display:inline;">
            @csrf @method('PUT')
            <input type="hidden" name="_toggle_active" value="1">
            <input type="hidden" name="is_active" value="{{ $page->is_active ? '0' : '1' }}">
            <button type="submit" class="btn btn-sm {{ $page->is_active ? 'btn-outline' : 'btn-gold' }}" style="padding:4px 12px;font-size:12px;">
                {{ $page->is_active ? '● Active — click to deactivate' : '○ Inactive — click to activate' }}
            </button>
        </form>
    </div>
    <a href="{{ route('admin.pages.index') }}" class="btn btn-sm btn-outline">&larr; All Pages</a>
</div>

<form id="page-edit-form" method="POST" action="{{ route('admin.pages.update', $page) }}">
    @csrf @method('PUT')

    @include('admin.pages.partials.content-blocks-panel')

    {{-- SEO Settings --}}
    <div class="panel">
        <div class="panel-header">
            <h3 class="panel-title">SEO Settings</h3>
        </div>
        <div class="panel-body">
            <div class="form-grid">
                <div class="form-group full-width">
                    <label>Meta Title</label>
                    <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title', $page->meta_title) }}">
                    <span class="form-hint">Displayed in browser tab and search results. Keep under 60 characters.</span>
                    @error('meta_title')<span class="form-error">{{ $message }}</span>@enderror
                </div>

                <div class="form-group full-width">
                    <label>Meta Description</label>
                    <textarea name="meta_description" class="form-control" rows="3">{{ old('meta_description', $page->meta_description) }}</textarea>
                    <span class="form-hint">Search engine description. Keep under 160 characters for best results.</span>
                    @error('meta_description')<span class="form-error">{{ $message }}</span>@enderror
                </div>

                <div class="form-group full-width">
                    <label>Meta Keywords</label>
                    <input type="text" name="meta_keywords" class="form-control" value="{{ old('meta_keywords', $page->meta_keywords) }}">
                    <span class="form-hint">Comma-separated keywords for SEO.</span>
                    @error('meta_keywords')<span class="form-error">{{ $message }}</span>@enderror
                </div>

                <div class="form-group full-width">
                    <label>Canonical URL</label>
                    <input type="url" name="canonical_url" class="form-control" value="{{ old('canonical_url', $page->canonical_url) }}" placeholder="https://example.com/preferred-url">
                    <span class="form-hint">Optional. Override the canonical URL for this page (defaults to the current URL).</span>
                    @error('canonical_url')<span class="form-error">{{ $message }}</span>@enderror
                </div>

                <div class="form-group full-width">
                    @php $noindexOn = (bool) old('noindex', $page->noindex); @endphp
                    <label class="toggle-label">
                        <span class="toggle-text">Hide from search engines (noindex, nofollow)</span>
                        <input type="hidden" name="noindex" value="0">
                        <input type="checkbox" name="noindex" value="1" {{ $noindexOn ? 'checked' : '' }} class="toggle-checkbox">
                        <span class="toggle-switch"></span>
                    </label>
                    <span class="form-hint">When ON, search engines are told not to index this page or follow its links.</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Page Content Sections --}}
    @if(count($sectionDefinitions) > 0)
    @php
        $groups = [];
        $currentGroup = 'Content';
        foreach ($sectionDefinitions as $key => $def) {
            // Auto-group by prefix
            if (str_starts_with($key, 'hero_slide')) $group = 'Hero Slides';
            elseif (str_starts_with($key, 'hero_')) $group = 'Hero Section';
            elseif (str_starts_with($key, 'show_')) $group = 'Section Visibility (1 = show, 0 = hide)';
            elseif (str_starts_with($key, 'stats_') || str_starts_with($key, 'stat_')) $group = 'Statistics';
            elseif (str_starts_with($key, 'what_is_')) $group = 'What Is Section';
            elseif (str_starts_with($key, 'feature_') || str_starts_with($key, 'features_')) $group = 'Key Features';
            elseif (str_starts_with($key, 'market_') || str_starts_with($key, 'markets_')) $group = 'Betting Markets';
            elseif (str_starts_with($key, 'tournament_') || str_starts_with($key, 'tournaments_')) $group = 'Tournaments';
            elseif (str_starts_with($key, 'league_') || str_starts_with($key, 'leagues_')) $group = 'Leagues';
            elseif (str_starts_with($key, 'ipl_')) $group = 'IPL Section';
            elseif (str_starts_with($key, 'tip_') || str_starts_with($key, 'tips_')) $group = 'Tips & Strategies';
            elseif (str_starts_with($key, 'strategy_') || str_starts_with($key, 'strategies_')) $group = 'Tips & Strategies';
            elseif (str_starts_with($key, 'why_')) $group = 'Why Choose Us';
            elseif (str_starts_with($key, 'how_works_')) $group = 'How It Works';
            elseif (str_starts_with($key, 'how_it_works_')) $group = 'How It Works';
            elseif (str_starts_with($key, 'how_step_') || str_starts_with($key, 'how_title') || str_starts_with($key, 'how_btn')) $group = 'How To Get ID';
            elseif (str_starts_with($key, 'step_') || str_starts_with($key, 'steps_')) $group = 'Steps';
            elseif (str_starts_with($key, 'get_id_')) $group = 'Get Your ID Section';
            elseif (str_starts_with($key, 'bonus_') || str_starts_with($key, 'bonuses_')) $group = 'Bonus Section';
            elseif (str_starts_with($key, 'game_') || str_starts_with($key, 'games_')) $group = 'Games';
            elseif (str_starts_with($key, 'live_')) $group = 'Live Section';
            elseif (str_starts_with($key, 'demo_')) $group = 'Demo ID';
            elseif (str_starts_with($key, 'services_') || str_starts_with($key, 'service_')) $group = 'Our Services';
            elseif (str_starts_with($key, 'platform_') || str_starts_with($key, 'platforms_')) $group = 'Platforms';
            elseif (str_starts_with($key, 'care_')) $group = 'Customer Care';
            elseif (str_starts_with($key, 'freeze_')) $group = 'Freeze Button';
            elseif (str_starts_with($key, 'comparison_') || str_starts_with($key, 'comp_')) $group = 'Comparison Table';
            elseif (str_starts_with($key, 'payment_') || str_starts_with($key, 'payments_')) $group = 'Payment Methods';
            elseif (str_starts_with($key, 'deposit_')) $group = 'Deposits';
            elseif (str_starts_with($key, 'withdraw_')) $group = 'Withdrawals';
            elseif (str_starts_with($key, 'proof_') || str_starts_with($key, 'proofs_')) $group = 'Withdrawal Proof';
            elseif (str_starts_with($key, 'trust_')) $group = 'Trust Section';
            elseif (str_starts_with($key, 'testimonial_') || str_starts_with($key, 'testimonials_')) $group = 'Testimonials';
            elseif (str_starts_with($key, 'faq_')) $group = 'FAQ Section';
            elseif (str_starts_with($key, 'cta_')) $group = 'CTA Section';
            elseif (str_starts_with($key, 'blog_')) $group = 'Blog Section';
            elseif (str_starts_with($key, 'whatsapp_')) $group = 'WhatsApp Settings';
            elseif (str_starts_with($key, 'req_')) $group = 'Requirements';
            elseif (str_starts_with($key, 'story_')) $group = 'Our Story';
            elseif (str_starts_with($key, 'mission_') || str_starts_with($key, 'vision_')) $group = 'Mission & Vision';
            elseif (str_starts_with($key, 'value_') || str_starts_with($key, 'values_')) $group = 'Core Values';
            elseif (str_starts_with($key, 'contact_')) $group = 'Contact Info';
            elseif (str_starts_with($key, 'form_')) $group = 'Contact Form';
            elseif (str_starts_with($key, 'hours_')) $group = 'Business Hours';
            elseif (str_starts_with($key, 'map_')) $group = 'Map / Presence';
            elseif (str_starts_with($key, 'login_')) $group = 'Login Steps';
            elseif (str_starts_with($key, 'trouble_')) $group = 'Troubleshooting';
            elseif (str_starts_with($key, 'commitment_')) $group = 'Our Commitment';
            elseif (str_starts_with($key, 'warning_')) $group = 'Warning Signs';
            elseif (str_starts_with($key, 'exclusion_')) $group = 'Self-Exclusion';
            elseif (str_starts_with($key, 'resource_') || str_starts_with($key, 'resources_')) $group = 'Support Resources';
            elseif (str_starts_with($key, 'method_') || str_starts_with($key, 'methods_')) $group = 'Payment Methods';
            elseif (str_starts_with($key, 'security_')) $group = 'Security Measures';
            elseif (str_starts_with($key, 'factor_') || str_starts_with($key, 'factors_')) $group = 'Trust Factors';
            elseif (str_starts_with($key, 'benefit_') || str_starts_with($key, 'benefits_')) $group = 'Benefits';
            elseif (str_starts_with($key, 'info_')) $group = 'Information Collection';
            elseif (str_starts_with($key, 'use_')) $group = 'How We Use Info';
            elseif (str_starts_with($key, 'cookies_')) $group = 'Cookies & Tracking';
            elseif (str_starts_with($key, 'sharing_')) $group = 'Third-Party Sharing';
            elseif (str_starts_with($key, 'changes_')) $group = 'Policy Changes';
            elseif (str_starts_with($key, 'accept_')) $group = 'Acceptance of Terms';
            elseif (str_starts_with($key, 'eligibility_')) $group = 'Eligibility';
            elseif (str_starts_with($key, 'user_')) $group = 'User Responsibilities';
            elseif (str_starts_with($key, 'disclaimer_')) $group = 'Disclaimers';
            elseif (str_starts_with($key, 'liability_')) $group = 'Limitation of Liability';
            elseif (str_starts_with($key, 'law_')) $group = 'Governing Law';
            else $group = 'Content';
            $groups[$group][$key] = $def;
        }

        // Sort groups by saved order
        $savedOrder = json_decode($page->section('_panel_order', '[]'), true) ?: [];
        if (!empty($savedOrder)) {
            $sorted = [];
            foreach ($savedOrder as $name) {
                if (isset($groups[$name])) {
                    $sorted[$name] = $groups[$name];
                    unset($groups[$name]);
                }
            }
            // Append any new groups not in saved order
            $groups = array_merge($sorted, $groups);
        }
    @endphp

    <input type="hidden" name="sections[_panel_order]" id="panel-order-input" value="{{ $page->section('_panel_order', '[]') }}">

    <div id="sections-container">
    @foreach($groups as $groupName => $fields)
    <div class="panel" draggable="true" data-group="{{ $groupName }}">
        <div class="panel-header">
            <div class="panel-header-left">
                <span class="panel-drag-handle" title="Drag to reorder">&#9776;</span>
                <h3 class="panel-title">{{ $groupName }}</h3>
            </div>
            <button type="button" class="panel-collapse-btn" title="Collapse/Expand">&#9660;</button>
        </div>
        <div class="panel-body">
            <div class="form-grid">
                @foreach($fields as $key => $def)
                @php
                    $fieldDefault = $sectionDefaults[$key] ?? '';
                    $stored = data_get($page->sections, $key);
                    $rawValue = ($stored !== null && $stored !== '') ? $stored : $fieldDefault;
                @endphp
                <div class="form-group {{ $def['type'] === 'html' || $def['type'] === 'textarea' ? 'full-width' : '' }}">
                    @if($def['type'] === 'toggle')
                        @php $isOn = old('sections.' . $key, ($stored !== null && $stored !== '') ? $stored : '1') !== '0'; @endphp
                        <label class="toggle-label">
                            <span class="toggle-text">{{ $def['label'] }}</span>
                            <input type="hidden" name="sections[{{ $key }}]" value="0">
                            <input type="checkbox" name="sections[{{ $key }}]" value="1" {{ $isOn ? 'checked' : '' }} class="toggle-checkbox">
                            <span class="toggle-switch"></span>
                        </label>
                    @else
                        <label>{{ $def['label'] }}</label>
                        @if($def['type'] === 'text')
                            <input type="text" name="sections[{{ $key }}]" class="form-control"
                                   value="{{ old('sections.' . $key, $rawValue) }}">
                        @elseif($def['type'] === 'textarea' || $def['type'] === 'html')
                            <div class="field-with-link-picker">
                                @if($def['type'] !== 'html')
                                <button type="button" class="btn-link-picker" data-target-name="sections[{{ $key }}]">🔗 Insert link</button>
                                @endif
                                <textarea name="sections[{{ $key }}]"
                                          class="form-control {{ $def['type'] === 'html' ? 'rich-editor' : '' }}"
                                          rows="{{ $def['type'] === 'html' ? 10 : 3 }}">{{ old('sections.' . $key, $rawValue) }}</textarea>
                                @if($def['type'] !== 'html')
                                <span class="form-hint">HTML tags are supported. Use the Insert link button or type <code>&lt;a href="/page-slug"&gt;text&lt;/a&gt;</code> for internal links.</span>
                                @endif
                            </div>
                        @endif
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endforeach
    </div>
    @endif

    <div class="form-actions" style="border-top: none; padding-top: 0; margin-bottom: 80px;">
        <button type="submit" class="btn btn-gold">Save Changes</button>
        <a href="{{ route('admin.pages.index') }}" class="btn btn-outline">Cancel</a>
    </div>
</form>

<div id="link-picker-modal" class="link-picker-modal" hidden>
    <div class="link-picker-overlay" data-close></div>
    <div class="link-picker-dialog">
        <div class="link-picker-header">
            <h3>Insert Link</h3>
            <button type="button" class="link-picker-close" data-close>&times;</button>
        </div>
        <div class="link-picker-tabs">
            <button type="button" class="lp-tab is-active" data-tab="page">Pages</button>
            <button type="button" class="lp-tab" data-tab="blog">Blog</button>
            <button type="button" class="lp-tab" data-tab="external">External</button>
        </div>
        <div class="link-picker-body">
            <div class="lp-pane lp-pane-page is-active">
                <input type="text" class="lp-search" placeholder="Search pages…">
                <select class="lp-select lp-select-page" size="8">
                    @foreach(($linkPages ?? []) as $p)
                        <option value="{{ $p['url'] }}" data-label="{{ $p['label'] }}">{{ $p['label'] }} — {{ $p['url'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="lp-pane lp-pane-blog">
                <input type="text" class="lp-search" placeholder="Search blog posts…">
                <select class="lp-select lp-select-blog" size="8">
                    @foreach(($linkPosts ?? []) as $p)
                        <option value="{{ $p['url'] }}" data-label="{{ $p['label'] }}">{{ $p['label'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="lp-pane lp-pane-external">
                <label>URL</label>
                <input type="url" class="lp-external-url" placeholder="https://example.com">
            </div>
            <div class="lp-link-text-row">
                <label>Link text</label>
                <input type="text" class="lp-link-text" placeholder="Text shown to visitor">
            </div>
        </div>
        <div class="link-picker-footer">
            <button type="button" class="btn btn-outline" data-close>Cancel</button>
            <button type="button" class="btn btn-gold lp-insert">Insert</button>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.3/tinymce.min.js"></script>
<script>
    if (window.tinymce) {
        tinymce.init({
            selector: 'textarea.rich-editor',
            plugins: 'lists link image code table',
            toolbar: 'undo redo | formatselect | bold italic underline | alignleft aligncenter alignright | bullist numlist | link image | code',
            height: 400,
            skin: 'oxide-dark',
            content_css: 'dark',
            menubar: false,
            setup: function (editor) {
                editor.on('change keyup', function () { editor.save(); });
            }
        });
    }
</script>
<script>
(function() {
    const modal = document.getElementById('link-picker-modal');
    if (!modal) return;
    const tabs     = modal.querySelectorAll('.lp-tab');
    const panes    = modal.querySelectorAll('.lp-pane');
    const linkText = modal.querySelector('.lp-link-text');
    const insertBtn= modal.querySelector('.lp-insert');
    const pageSel  = modal.querySelector('.lp-select-page');
    const blogSel  = modal.querySelector('.lp-select-blog');
    const extUrl   = modal.querySelector('.lp-external-url');
    let activeTextarea = null;
    let activeTab = 'page';

    function openModal(textarea) {
        activeTextarea = textarea;
        const sel = textarea.value.substring(textarea.selectionStart, textarea.selectionEnd);
        linkText.value = sel || '';
        modal.hidden = false;
    }
    function closeModal() { modal.hidden = true; activeTextarea = null; }

    document.querySelectorAll('.btn-link-picker').forEach(btn => {
        btn.addEventListener('click', () => {
            const ta = document.querySelector('textarea[name="' + btn.dataset.targetName + '"]');
            if (ta) openModal(ta);
        });
    });

    modal.querySelectorAll('[data-close]').forEach(el => el.addEventListener('click', closeModal));

    tabs.forEach(t => t.addEventListener('click', () => {
        activeTab = t.dataset.tab;
        tabs.forEach(x => x.classList.toggle('is-active', x === t));
        panes.forEach(p => p.classList.toggle('is-active', p.classList.contains('lp-pane-' + activeTab)));
    }));

    [pageSel, blogSel].forEach(sel => {
        if (!sel) return;
        sel.addEventListener('change', () => {
            const opt = sel.options[sel.selectedIndex];
            if (opt && !linkText.value) linkText.value = opt.dataset.label || '';
        });
    });

    modal.querySelectorAll('.lp-search').forEach(input => {
        input.addEventListener('input', () => {
            const q = input.value.toLowerCase();
            const sel = input.closest('.lp-pane').querySelector('.lp-select');
            Array.from(sel.options).forEach(o => { o.hidden = !o.text.toLowerCase().includes(q); });
        });
    });

    insertBtn.addEventListener('click', () => {
        if (!activeTextarea) return;
        let url = '';
        if (activeTab === 'page')      url = pageSel.value;
        else if (activeTab === 'blog') url = blogSel.value;
        else                           url = extUrl.value.trim();
        if (!url) { alert('Pick a destination'); return; }
        const text = (linkText.value || url).trim();
        const html = '<a href="' + url + '">' + text + '</a>';
        const ta = activeTextarea;
        const start = ta.selectionStart, end = ta.selectionEnd;
        ta.value = ta.value.substring(0, start) + html + ta.value.substring(end);
        ta.focus();
        ta.selectionStart = ta.selectionEnd = start + html.length;
        closeModal();
    });
})();
</script>

<div class="sticky-save-bar">
    <span class="sticky-save-title">{{ $page->title }}</span>
    <div class="sticky-save-actions">
        <a href="{{ route('admin.pages.index') }}" class="btn btn-sm btn-outline">Cancel</a>
        <button type="submit" form="page-edit-form" class="btn btn-sm btn-gold">Save Changes</button>
    </div>
</div>
@endsection
