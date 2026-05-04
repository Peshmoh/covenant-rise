<section class="section about-section">
    <div class="container">
        <div class="section-header section-header-left">
            <div class="section-kicker">About Us</div>
            <h2 class="section-title">A Christ-centered ministry raising people in truth, power, and divine purpose.</h2>
            <p class="section-copy">
                Covenant Rise is committed to seeing lives transformed, destinies awakened, and people established in a deep and personal relationship with God.
            </p>
        </div>

        <div class="about-grid">
            <article class="about-story card">
                <div class="eyebrow">Our Heart</div>
                <h3>We equip believers through sound teaching, spiritual insight, and the uncompromised Word of God.</h3>
                <p>
                    Our assignment is to raise a generation that walks in truth, power, and divine purpose.
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
