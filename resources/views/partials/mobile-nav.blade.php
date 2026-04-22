<aside class="mobile-nav" id="mobileNav" aria-hidden="true">
    <div class="mobile-nav-panel">
        <div class="mobile-nav-header">
            <a href="{{ route('home') }}" class="logo">
                <div class="logo-emblem">
                    <img src="{{ asset('images/logo-mark.png') }}" alt="" aria-hidden="true">
                </div>
                <div class="logo-text">
                    <span class="logo-name">Covenant <span>Rise</span></span>
                    <span class="logo-tagline">Ministries</span>
                </div>
            </a>

            <button type="button" class="mobile-nav-close" data-mobile-close aria-label="Close menu">
                <i class="fas fa-xmark"></i>
            </button>
        </div>

        <div class="mobile-nav-contact">
            <span><i class="fas fa-location-dot"></i> {{ config('church.address') }}</span>
            <span><i class="fas fa-phone"></i> {{ config('church.phone') }}</span>
            <span><i class="fas fa-envelope"></i> {{ config('church.email') }}</span>
        </div>

        <nav class="mobile-nav-links">
            <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about*', 'leadership', 'services', 'visit') ? 'active' : '' }}">About</a>
            <a href="{{ route('sermons') }}" class="nav-link {{ request()->routeIs('sermons*') ? 'active' : '' }}">Sermons</a>
            <a href="{{ route('ministries') }}" class="nav-link {{ request()->routeIs('ministries*') ? 'active' : '' }}">Ministries</a>
            <a href="{{ route('events') }}" class="nav-link {{ request()->routeIs('events*') ? 'active' : '' }}">Events</a>
            <a href="{{ route('give') }}" class="nav-link {{ request()->routeIs('give') ? 'active' : '' }}">Give</a>
            <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
        </nav>

        <div class="mobile-nav-actions">
            <a href="{{ route('online-church') }}" class="btn btn-outline">Watch Live</a>
            <a href="{{ route('prayer') }}" class="btn btn-gold">Prayer Request</a>
        </div>
    </div>
</aside>
