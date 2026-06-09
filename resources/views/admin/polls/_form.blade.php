{{--
  Shared form partial used by both Create and Edit poll views.
  Variables: $poll (Poll model — exists with options on edit, fresh instance on create)
--}}
@php
    $isEdit = $poll->exists;
@endphp

<div class="form-grid">
    <div class="form-group full-width">
        <label>Question *</label>
        <input type="text" name="question" class="form-control" value="{{ old('question', $poll->question ?? '') }}" placeholder="e.g. Who will win the next India vs Australia match?" maxlength="500" required>
        @error('question')<span class="form-error">{{ $message }}</span>@enderror
    </div>

    <div class="form-group full-width">
        <label>Redirect URL (where visitors go after voting)</label>
        <input type="url" name="redirect_url" class="form-control" value="{{ old('redirect_url', $poll->redirect_url ?? 'https://linktr.ee/radheybook') }}" placeholder="https://linktr.ee/radheybook" maxlength="500">
        <span class="form-hint">Default: https://linktr.ee/radheybook</span>
        @error('redirect_url')<span class="form-error">{{ $message }}</span>@enderror
    </div>

    <div class="form-group full-width">
        <label class="toggle-label">
            <span class="toggle-text">Active (show on public site — replaces any currently active poll)</span>
            <input type="hidden" name="is_active" value="0">
            <input type="checkbox" name="is_active" value="1" {{ old('is_active', $poll->is_active ?? false) ? 'checked' : '' }} class="toggle-checkbox">
            <span class="toggle-switch"></span>
        </label>
    </div>

    <div class="form-group full-width" style="border-top: 1px solid rgba(255,255,255,0.06); padding-top: 20px; margin-top: 8px;">
        <label style="color: #d4af37; font-size: 14px;">Options (2 to 8) — visitors pick one</label>
    </div>

    <div class="form-group full-width">
        <div id="poll-options-list">
            @php
                $existingOptions = old('options', $isEdit ? $poll->options->map(fn($o) => ['id' => $o->id, 'label' => $o->label, 'votes' => $o->votes])->toArray() : [['label' => ''], ['label' => '']]);
            @endphp
            @foreach ($existingOptions as $i => $opt)
                <div class="poll-option-row">
                    <span class="poll-drag-handle" title="Drag to reorder">&#9776;</span>
                    <span class="poll-option-num">{{ $i + 1 }}</span>
                    @if (!empty($opt['id']))
                        <input type="hidden" name="options[{{ $i }}][id]" value="{{ $opt['id'] }}">
                    @endif
                    <input type="text" name="options[{{ $i }}][label]" class="form-control" value="{{ $opt['label'] ?? '' }}" placeholder="Option label (e.g. India)" maxlength="200" required>
                    @if (!empty($opt['votes']) || (isset($opt['votes']) && $opt['votes'] === 0))
                        <span class="poll-option-votes">{{ $opt['votes'] }} {{ $opt['votes'] == 1 ? 'vote' : 'votes' }}</span>
                    @endif
                    <button type="button" class="poll-option-remove" title="Remove this option">&times;</button>
                </div>
            @endforeach
        </div>
        <button type="button" id="poll-option-add" class="btn btn-outline" style="margin-top: 8px;">+ Add Option</button>
        @error('options')<span class="form-error">{{ $message }}</span>@enderror
        @error('options.*.label')<span class="form-error">{{ $message }}</span>@enderror
    </div>
</div>

<div class="form-actions">
    <button type="submit" class="btn btn-gold">{{ $isEdit ? 'Save Changes' : 'Create Poll' }}</button>
    <a href="{{ route('admin.polls.index') }}" class="btn btn-outline">Cancel</a>
</div>

<template id="poll-option-template">
    <div class="poll-option-row">
        <span class="poll-drag-handle" title="Drag to reorder">&#9776;</span>
        <span class="poll-option-num">__NUM__</span>
        <input type="text" name="options[__INDEX__][label]" class="form-control" value="" placeholder="Option label" maxlength="200" required>
        <button type="button" class="poll-option-remove" title="Remove this option">&times;</button>
    </div>
</template>
