<section class="section about-section">
    <div class="container">
        <div class="section-header section-header-left">
            <div class="section-kicker">About Us</div>
            <h2 class="section-title">A church family where covenant turns into daily discipleship.</h2>
            <p class="section-copy">
                We gather to worship, grow, and serve in Nairobi and beyond. Our heartbeat is simple:
                Jesus first, people cared for, and purpose lived out boldly.
            </p>
        </div>

        <div class="about-grid">
            <article class="about-story card">
                <div class="eyebrow">Our Heart</div>
                <h3>We want every person to know they belong, grow, and lead.</h3>
                <p>
                    Covenant Rise Ministries exists to build faith that is rooted in scripture, shaped by prayer,
                    and expressed through practical love.
                </p>

                <div class="about-stats">
                    <div class="about-stat">
                        <strong>10+</strong>
                        <span>Years of Ministry</span>
                    </div>
                    <div class="about-stat">
                        <strong>500+</strong>
                        <span>Lives Transformed</span>
                    </div>
                    <div class="about-stat">
                        <strong>5</strong>
                        <span>Ministry Branches</span>
                    </div>
                </div>

                <a href="{{ route('about') }}" class="text-link">Read our story <i class="fas fa-arrow-right"></i></a>
            </article>

            <div class="about-highlights">
                @foreach($aboutHighlights as $highlight)
                    <article class="about-highlight card card-soft">
                        <div class="mini-icon"><i class="{{ $highlight['icon'] }}"></i></div>
                        <h4>{{ $highlight['title'] }}</h4>
                        <p>{{ $highlight['text'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>
