<footer class="site-footer">
    <div class="container footer-inner">
        <div class="footer-grid">
            <div class="footer-brand">
                <a href="{{ route('home') }}" class="footer-logo-link" aria-label="{{ config('church.name') }}">
                    <img src="{{ asset('images/logo-full.png') }}" alt="{{ config('church.name') }} logo" class="footer-logo" loading="lazy" width="900" height="958">
                </a>
                <p class="footer-copy">
                    A house of worship, prayer, and covenant purpose in Nairobi, Kenya.
                </p>
                <div class="footer-social">
                    <a href="{{ config('church.facebook') }}" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{ config('church.youtube') }}" target="_blank" rel="noopener" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    <a href="{{ config('church.instagram') }}" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://wa.me/{{ config('church.whatsapp') }}" target="_blank" rel="noopener" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>

            <div>
                <h3 class="footer-heading">Quick Links</h3>
                <div class="footer-links">
                    <a href="{{ route('about') }}">Our Story</a>
                    <a href="{{ route('sermons') }}">Sermons</a>
                    <a href="{{ route('events') }}">Events</a>
                    <a href="{{ route('prayer') }}">Prayer Request</a>
                    <a href="{{ route('give') }}">Give</a>
                    <a href="{{ route('contact') }}">Contact</a>
                </div>
            </div>

            <div>
                <h3 class="footer-heading">Service Times</h3>
                <ul class="footer-schedule">
                    <li><span>Sunday</span><strong>9:00 AM</strong></li>
                    <li><span>Wednesday</span><strong>7:00 PM</strong></li>
                    <li><span>Friday</span><strong>6:00 PM</strong></li>
                </ul>
            </div>

            <div>
                <h3 class="footer-heading">Visit Us</h3>
                <p class="footer-copy">
                    {{ config('church.address') }}<br>
                    {{ config('church.phone') }}<br>
                    {{ config('church.email') }}
                </p>
                <a href="{{ route('visit') }}" class="btn btn-outline">Plan a Visit</a>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} {{ config('church.name') }}. All rights reserved.</p>
            <p>Rising in covenant, living in purpose.</p>
        </div>
    </div>
</footer>
