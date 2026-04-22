<section class="section section-alt" id="vision">
    <div class="container">
        <div class="section-header">
            <div class="section-kicker">Vision and Mission</div>
            <h2 class="section-title">We are building a community that hears God clearly and serves with courage.</h2>
            <p class="section-copy">
                Covenant Rise Ministries is committed to worship, discipleship, and outreach that strengthens homes
                and equips believers for real life.
            </p>
        </div>

        <div class="vision-grid">
            <article class="vision-card card">
                <div class="card-label">Vision</div>
                <h3>To raise a covenant people who live free, rooted in scripture, and confident in their calling.</h3>
                <ul class="bullet-list">
                    @foreach($visionPoints as $point)
                        <li><i class="fas fa-check"></i><span>{{ $point }}</span></li>
                    @endforeach
                </ul>
            </article>

            <article class="vision-card card card-accent">
                <div class="card-label">Mission</div>
                <h3>To equip believers through worship, the Word, prayer, discipleship, and acts of compassion.</h3>
                <ul class="bullet-list">
                    @foreach($missionPoints as $point)
                        <li><i class="fas fa-check"></i><span>{{ $point }}</span></li>
                    @endforeach
                </ul>
            </article>
        </div>

        <div class="value-strip">
            <span class="value-pill">Bible rooted</span>
            <span class="value-pill">Prayer filled</span>
            <span class="value-pill">Spirit led</span>
            <span class="value-pill">Community built</span>
        </div>
    </div>
</section>
