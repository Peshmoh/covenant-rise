<section class="section">
    <div class="container">
        <div class="section-header">
            <div class="section-kicker">Testimonies</div>
            <h2 class="section-title">Stories of healing, growth, and new beginnings.</h2>
            <p class="section-copy">
                God is moving among us. These are a few of the stories we celebrate together.
            </p>
        </div>

        <div class="testimony-grid">
            @foreach($testimonies as $testimony)
                <article class="testimony-card card">
                    <div class="quote-mark">"</div>
                    <p class="testimony-quote">{{ $testimony['quote'] }}</p>
                    <div class="testimony-author">{{ $testimony['name'] }}</div>
                    <div class="testimony-role">{{ $testimony['role'] }}</div>
                </article>
            @endforeach
        </div>
    </div>
</section>
