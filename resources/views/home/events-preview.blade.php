<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <div class="section-kicker">Upcoming Events</div>
            <h2 class="section-title">Make space for worship, growth, and meaningful community.</h2>
            <p class="section-copy">
                Join one of our upcoming gatherings and take the next step in your walk with God.
            </p>
        </div>

        <div class="event-grid">
            @foreach($events as $event)
                <article class="event-card card">
                    <div class="event-date">
                        <span class="event-month">{{ $event['month'] }}</span>
                        <span class="event-day">{{ $event['day'] }}</span>
                    </div>

                    <div class="event-body">
                        <div class="event-meta">
                            <span><i class="fas fa-clock"></i>{{ $event['time'] }}</span>
                            <span><i class="fas fa-location-dot"></i>{{ $event['location'] }}</span>
                        </div>

                        <h3 class="event-title">{{ $event['title'] }}</h3>
                        <p class="event-excerpt">{{ $event['excerpt'] }}</p>

                        <div class="event-footer">
                            <a href="{{ $event['url'] }}" class="text-link">View details <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="section-footer">
            <a href="{{ route('events') }}" class="btn btn-gold">See all events</a>
        </div>
    </div>
</section>
