{{--
  Poll popup widget. Rendered into layouts.app for every public page.
  Only emitted when an active poll exists. JS handles show timing,
  vote submission, percentage animation, and the redirect.
--}}
@if (!empty($activePoll) && $activePoll->options->count() >= 2)
<div id="poll-modal-root"
     data-poll-id="{{ $activePoll->id }}"
     data-redirect-url="{{ $activePoll->redirect_url ?: 'https://linktr.ee/radheybook' }}"
     data-min-delay-ms="100"
     data-max-delay-ms="300"
     data-vote-route="{{ url('/poll/' . $activePoll->id . '/vote') }}"
     data-csrf="{{ csrf_token() }}"
     style="display:none;">
    <div class="poll-modal-overlay" data-poll-close="overlay"></div>
    @php
        $bgStyle = '';
        if (!empty($activePoll->background_image)) {
            $bgUrl = asset(ltrim($activePoll->background_image, '/'));
            // Medium overlay — image is still visible but text contrast is solid.
            $bgStyle = "background: linear-gradient(135deg, rgba(13,13,28,0.55), rgba(22,33,62,0.65)), url('" . e($bgUrl) . "') center center / cover no-repeat;";
        }
    @endphp
    <div class="poll-modal {{ !empty($activePoll->background_image) ? 'has-bg-image' : '' }}" role="dialog" aria-modal="true" aria-labelledby="poll-modal-question" @if($bgStyle) style="{{ $bgStyle }}" @endif>
        <div class="poll-modal-shine" aria-hidden="true"></div>
        <button type="button" class="poll-modal-close" data-poll-close="button" aria-label="Close">&times;</button>
        <h3 id="poll-modal-question" class="poll-modal-question">{{ $activePoll->question }}</h3>
        <div class="poll-modal-options">
            @foreach ($activePoll->options as $option)
                <button type="button" class="poll-option" data-option-id="{{ $option->id }}">
                    <span class="poll-option-bar" aria-hidden="true"></span>
                    <span class="poll-option-content">
                        <span class="poll-option-label">{{ $option->label }}</span>
                        <span class="poll-option-pct" style="display:none;">0%</span>
                    </span>
                </button>
            @endforeach
        </div>
        @php $totalVotes = $activePoll->totalVotes(); @endphp
        <p class="poll-modal-hint">
            <span class="poll-pulse-dot" aria-hidden="true"></span>
            <span class="poll-live-label">LIVE</span>
            Tap an option to see results
            @if ($totalVotes > 0)
                <span class="poll-vote-count">· {{ number_format($totalVotes) }} {{ $totalVotes == 1 ? 'vote' : 'votes' }}</span>
            @endif
        </p>
    </div>
</div>
@endif
