<section class="section">
    <div class="container">
        <div class="section-header">
            <div class="section-kicker">Testimonies</div>
            <h2 class="section-title">Stories of healing, growth, and new beginnings.</h2>
            <p class="section-copy">
                God is moving among us. These are a few of the stories we celebrate together.
            </p>
        </div>

        @php($marqueeTestimonials = array_merge($testimonies, $testimonies))

        <div class="testimony-marquee" aria-label="Church testimonies">
            <div class="testimony-track">
                @foreach($marqueeTestimonials as $testimony)
                    <article class="testimony-card card">
                        <div class="testimony-card-top">
                            <img
                                src="{{ asset($testimony['avatar']) }}"
                                alt="{{ $testimony['name'] }} portrait"
                                class="testimony-avatar"
                                loading="lazy"
                                decoding="async"
                                width="80"
                                height="80"
                            >
                            <div class="testimony-meta">
                                <div class="testimony-author">{{ $testimony['name'] }}</div>
                                <div class="testimony-role">{{ $testimony['role'] }}</div>
                            </div>
                            <div class="testimony-score">{{ $testimony['stars'] }}.0</div>
                        </div>

                        <div class="testimony-stars" aria-label="{{ $testimony['stars'] }} out of 5 stars">
                            @for($i = 0; $i < 5; $i++)
                                <i class="fas fa-star {{ $i >= $testimony['stars'] ? 'is-muted' : '' }}" aria-hidden="true"></i>
                            @endfor
                        </div>

                        <p class="testimony-quote">"{{ $testimony['quote'] }}"</p>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>
