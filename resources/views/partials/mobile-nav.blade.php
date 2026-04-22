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
            <details class="mobile-nav-group" @if(request()->routeIs('about*', 'leadership', 'services')) open @endif>
                <summary class="nav-link">About <i class="fas fa-chevron-down caret"></i></summary>
                <div class="mobile-nav-submenu">
                    <a href="{{ route('about') }}#story">Our Story</a>
                    <a href="{{ route('about') }}#vision-mission">Vision &amp; Mission</a>
                    <a href="{{ route('about') }}#leadership">Leadership</a>
                    <a href="{{ route('about') }}#services">Our Services</a>
                </div>
            </details>
            <details class="mobile-nav-group" @if(request()->routeIs('media*', 'sermons', 'blogs', 'gallery')) open @endif>
                <summary class="nav-link">Media <i class="fas fa-chevron-down caret"></i></summary>
                <div class="mobile-nav-submenu">
                    <a href="{{ route('media') }}#sermons">Sermons</a>
                    <a href="{{ route('media') }}#blogs">Blogs</a>
                    <a href="{{ route('media') }}#gallery">Gallery</a>
                </div>
            </details>
            <details class="mobile-nav-group" @if(request()->routeIs('events*', 'visit')) open @endif>
                <summary class="nav-link">Events <i class="fas fa-chevron-down caret"></i></summary>
                <div class="mobile-nav-submenu">
                    <a href="{{ route('events') }}#upcoming-events">Upcoming Events</a>
                    <a href="{{ route('events') }}#past-events">Past Events</a>
                    <a href="{{ route('visit') }}">Plan a Visit</a>
                </div>
            </details>
            <a href="{{ route('ministries') }}" class="nav-link {{ request()->routeIs('ministries*') ? 'active' : '' }}">Ministries</a>
            <a href="{{ route('give') }}" class="nav-link {{ request()->routeIs('give') ? 'active' : '' }}">Give</a>
            <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
        </nav>

        <div class="mobile-nav-actions">
            <a href="{{ route('online-church') }}" class="btn btn-outline">Watch Live</a>
            <a href="{{ route('prayer') }}" class="btn btn-gold">Prayer Request</a>
        </div>
    </div>
</aside>
