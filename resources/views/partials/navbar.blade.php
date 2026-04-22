<nav class="navbar" id="navbar">
    <div class="inner">
        <a href="{{ route('home') }}" class="logo" aria-label="{{ config('church.name') }}">
            <div class="logo-emblem">
                <img src="{{ asset('images/logo-mark.png') }}" alt="" aria-hidden="true">
            </div>
            <div class="logo-text">
                <span class="logo-name">Covenant <span>Rise</span></span>
                <span class="logo-tagline">Ministries</span>
            </div>
        </a>

        <ul class="nav-links">
            <li>
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            </li>

            <li class="has-dropdown">
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about*', 'leadership', 'services') ? 'active' : '' }}">
                    About <i class="fas fa-chevron-down caret"></i>
                </a>
                <div class="dropdown">
                    <a href="{{ route('about') }}#story">Our Story</a>
                    <a href="{{ route('about') }}#vision-mission">Vision &amp; Mission</a>
                    <a href="{{ route('about') }}#leadership">Leadership</a>
                    <a href="{{ route('about') }}#services">Our Services</a>
                </div>
            </li>

            <li class="has-dropdown">
                <a href="{{ route('media') }}" class="nav-link {{ request()->routeIs('media*', 'sermons', 'blogs', 'gallery') ? 'active' : '' }}">
                    Media <i class="fas fa-chevron-down caret"></i>
                </a>
                <div class="dropdown">
                    <a href="{{ route('media') }}#sermons">Sermons</a>
                    <a href="{{ route('media') }}#blogs">Blogs</a>
                    <a href="{{ route('media') }}#gallery">Gallery</a>
                </div>
            </li>

            <li class="has-dropdown">
                <a href="{{ route('events') }}" class="nav-link {{ request()->routeIs('events*', 'visit') ? 'active' : '' }}">
                    Events <i class="fas fa-chevron-down caret"></i>
                </a>
                <div class="dropdown">
                    <a href="{{ route('events') }}#upcoming-events">Upcoming Events</a>
                    <a href="{{ route('events') }}#past-events">Past Events</a>
                    <a href="{{ route('visit') }}">Plan a Visit</a>
                </div>
            </li>

            <li>
                <a href="{{ route('ministries') }}" class="nav-link {{ request()->routeIs('ministries*') ? 'active' : '' }}">Ministries</a>
            </li>

            <li>
                <a href="{{ route('give') }}" class="nav-link {{ request()->routeIs('give') ? 'active' : '' }}">Give</a>
            </li>

            <li>
                <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
            </li>
        </ul>

        <div class="nav-ctas">
            <a href="{{ route('online-church') }}" class="btn btn-outline">
                <i class="fas fa-play"></i> Watch Live
            </a>
            <a href="{{ route('prayer') }}" class="btn btn-gold">
                <i class="fas fa-pray"></i> Prayer
            </a>
        </div>

        <button class="hamburger" type="button" data-mobile-toggle aria-label="Open menu" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</nav>
