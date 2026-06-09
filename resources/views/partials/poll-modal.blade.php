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
    <div class="poll-modal" role="dialog" aria-modal="true" aria-labelledby="poll-modal-question">
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
        <p class="poll-modal-hint">Tap an option to see live results</p>
    </div>
</div>
@endif
