<section class="section section-compact-top">
    <div class="container">
        <div class="section-header">
            <div class="section-kicker">Latest Sermons</div>
            <h2 class="section-title">Messages to strengthen faith and sharpen purpose.</h2>
            <p class="section-copy">
                Listen to recent messages from Covenant Rise Ministries and keep growing through the Word.
            </p>
        </div>

        @php($marqueeSermons = array_merge($sermons, $sermons))

        <div class="sermon-marquee" aria-label="Latest sermons">
            <div class="sermon-track">
                @foreach($marqueeSermons as $sermon)
                    <article class="sermon-card card">
                        <div class="sermon-thumb">
                            <span class="sermon-category">{{ $sermon['category'] }}</span>
                            <i class="fas fa-play"></i>
                        </div>

                        <div class="sermon-meta">
                            <span>{{ $sermon['date'] }}</span>
                            <span>{{ $sermon['duration'] }}</span>
                        </div>

                        <h3 class="sermon-title">{{ $sermon['title'] }}</h3>
                        <p class="sermon-speaker">{{ $sermon['speaker'] }}</p>
                        <p class="sermon-excerpt">{{ $sermon['excerpt'] }}</p>

                        <div class="sermon-footer">
                            <a href="{{ $sermon['url'] }}" class="text-link">Watch message <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>

        <div class="section-footer">
            <a href="{{ route('media') }}#sermons" class="btn btn-outline">Browse all sermons</a>
        </div>
    </div>
</section>
