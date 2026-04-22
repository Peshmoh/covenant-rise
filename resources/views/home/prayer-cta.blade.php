<section class="section">
    <div class="container">
        <div class="cta-banner">
            <div class="cta-inner">
                <div class="cta-copy">
                    <div class="section-kicker">Prayer and care</div>
                    <h2 class="cta-title">Need prayer? We would be honored to stand with you.</h2>
                    <p class="section-copy">
                        Send your request, join us for a service, or reach us on WhatsApp at {{ config('church.whatsapp') }} and we will connect with you.
                    </p>
                </div>

                <div class="cta-actions">
                    <a href="{{ route('prayer') }}" class="btn btn-gold">Submit Prayer Request</a>
                    <a href="https://wa.me/{{ preg_replace('/\D+/', '', config('church.whatsapp')) }}" class="btn btn-outline" target="_blank" rel="noopener">WhatsApp Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
