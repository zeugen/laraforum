@forelse ($threads as $thread)
    <div class="article-panel panel-default">
        <div class="panel-heading">
            <div class="level">
                <div class="flex">
                    <h2>
                        <a href="{{ $thread->path() }}">
                            @if (auth()->check() && $thread->hasUpdatesFor(auth()->user()))
                                <strong>
                                    {{ $thread->title }}
                                </strong>
                            @else
                                {{ $thread->title }}
                            @endif
                        </a>
                    </h2>

                    <h5>
                        Posted By: <a href="{{ route('profile', $thread->creator) }}">{{ $thread->creator->name }}</a>
                    </h5>
                </div>
                <h6>
                  <a href="{{ $thread->path() }}">
                      {{ $thread->replies_count }} {{ str_plural('reply', $thread->replies_count) }}
                  </a>
                </h6>

            </div>
        </div>

        <div class="panel-body">
            <div class="body">{{ $thread->body }}</div>
        </div>

        <div class="panel-footer">
          <h6>{{ $thread->visits }} Visits</h6>  
        </div>
    </div>
@empty
    <p>There are no relevant results at this time.</p>
@endforelse
