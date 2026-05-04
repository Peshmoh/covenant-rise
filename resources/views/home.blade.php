@extends('layouts.app')

@section('title', 'Home - ' . config('church.name'))
@section('meta_description', config('church.tagline') . ' - Worship, prayer, and purpose in Nairobi, Kenya.')
@section('body_class', 'home-page')

@section('content')
    <section class="top-hero" aria-label="Church welcome">
        <div class="top-hero-bg"></div>

        <div class="top-hero-inner">
            <h1 class="top-hero-title">
                <span>Grow in Faith.</span>
                Serve with Love.
            </h1>

            <a href="{{ route('visit') }}" class="top-hero-cta">
                Plan Your Visit
            </a>
        </div>

        <div class="top-hero-links" aria-label="Church quick links">
            <a href="{{ route('events') }}" class="top-hero-card">
                <span class="top-hero-icon"><i class="fas fa-calendar-days"></i></span>
                <span>
                    <strong>Upcoming Events</strong>
                    <small>Stay up to date with church activities</small>
                </span>
            </a>

            <a href="{{ route('media') }}#sermons" class="top-hero-card">
                <span class="top-hero-icon top-hero-icon--blue"><i class="fas fa-video"></i></span>
                <span>
                    <strong>Latest Sermons</strong>
                    <small>Watch or listen to recent messages</small>
                </span>
            </a>

            <a href="{{ route('prayer') }}" class="top-hero-card">
                <span class="top-hero-icon top-hero-icon--teal"><i class="fas fa-hands-praying"></i></span>
                <span>
                    <strong>Prayer Requests</strong>
                    <small>Submit your prayer needs online</small>
                </span>
            </a>

            <a href="{{ route('ministries') }}" class="top-hero-card">
                <span class="top-hero-icon top-hero-icon--gold"><i class="fas fa-hand-holding-heart"></i></span>
                <span>
                    <strong>Get Involved</strong>
                    <small>Find a place to serve and grow</small>
                </span>
            </a>
        </div>
    </section>

    <section class="hero">
        <div class="hero-bg"></div>
        <div class="hero-pattern"></div>
        <div class="hero-glow"></div>

        <div class="hero-inner">
            <div class="hero-content">
                <h1 class="hero-title">
                    <span class="line-gold">Welcome</span>
                </h1>

                <p class="hero-tagline">
                    Welcome to Covenant Rise, a place where lives are transformed by the Word and power of God. Here, we equip, teach, and raise believers into their divine purpose through truth, revelation, and spiritual growth. You are welcome. You belong. It is your time to rise.
                </p>

                <div class="service-card">
                    <div class="service-card-header">
                        <h3>Service Times</h3>
                        <span>This Week</span>
                    </div>

                    @foreach($serviceTimes as $service)
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="{{ $service['icon'] }}"></i>
                            </div>
                            <div class="service-info">
                                <div class="service-name">{{ $service['name'] }}</div>
                                <div class="service-time">{{ $service['time'] }}</div>
                            </div>
                            <i class="fas fa-chevron-right service-arrow"></i>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="hero-right">
                <div class="logo-showcase card">
                    <div class="hero-flipbook" data-hero-flipbook aria-label="Hero image flipbook">
                        @foreach($heroSlides as $slide)
                            <figure
                                class="hero-flipbook-page {{ $slide['class'] }} {{ $loop->first ? 'is-active' : ($loop->index === 1 ? 'is-next' : 'is-prev') }}"
                                data-hero-page
                                aria-hidden="{{ $loop->first ? 'false' : 'true' }}"
                            >
                                <img
                                    src="{{ asset($slide['image']) }}"
                                    alt="{{ $slide['alt'] }}"
                                    loading="eager"
                                    decoding="async"
                                    width="900"
                                    height="958"
                                >
                            </figure>
                        @endforeach
                    </div>
                </div>

                <div class="hero-actions">
                    <a href="{{ route('visit') }}" class="btn btn-hero-primary">
                        <i class="fas fa-map-marker-alt"></i> Plan a Visit
                    </a>
                    <a href="{{ route('online-church') }}" class="btn btn-hero-watch">
                        <span class="live-dot"></span> Watch Online
                    </a>
                    <a href="{{ route('give') }}" class="btn btn-hero-secondary">
                        <i class="fas fa-hand-holding-heart"></i> Give
                    </a>
                    <a href="{{ route('prayer') }}" class="btn btn-hero-prayer">
                        <i class="fas fa-hands-praying"></i> Prayer
                    </a>
                </div>

                <div class="hero-stats">
                    <div class="stat-item">
                        <div class="stat-num" data-val="10" data-suffix="+">10+</div>
                        <div class="stat-label">Years of Ministry</div>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="stat-item">
                        <div class="stat-num" data-val="500" data-suffix="+">500+</div>
                        <div class="stat-label">Lives Transformed</div>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="stat-item">
                        <div class="stat-num" data-val="5">5</div>
                        <div class="stat-label">Ministry Branches</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-scroll">
            <div class="scroll-line"></div>
            <span>Scroll</span>
        </div>
    </section>

    @include('partials.ticker')
    @include('home.about-preview')
    @include('home.sermons-preview', ['sermons' => $latestSermons])
    @include('home.events-preview', ['events' => $upcomingEvents])
    @include('home.testimonies', ['testimonies' => $testimonies])
    @include('home.prayer-cta')
@endsection
