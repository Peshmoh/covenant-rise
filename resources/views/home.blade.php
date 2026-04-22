@extends('layouts.app')

@section('title', 'Home - ' . config('church.name'))
@section('meta_description', config('church.tagline') . ' - Worship, prayer, and purpose in Nairobi, Kenya.')

@section('content')
    <section class="hero">
        <div class="hero-bg"></div>
        <div class="hero-pattern"></div>
        <div class="hero-glow"></div>

        <div class="hero-inner">
            <div class="hero-content">
                <div class="hero-badge">
                    <i class="fas fa-cross"></i>
                    Welcome to {{ config('church.name') }}
                </div>

                <p class="hero-sub-title">Worship, prayer, and purpose in Nairobi</p>

                <h1 class="hero-title">
                    <span class="line-italic">A church family</span>
                    <span class="line-gold">Rooted in Christ,</span>
                    Living with Purpose
                </h1>

                <p class="hero-tagline">
                    We are building a warm and faithful church family shaped by the Word, prayer, worship, and service.
                </p>

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

            <div class="hero-right">
                <div class="logo-showcase card">
                    <img
                        src="{{ asset('images/logo-full.png') }}"
                        alt="{{ config('church.name') }} logo"
                        class="hero-logo"
                        loading="eager"
                        fetchpriority="high"
                        width="900"
                        height="958"
                    >
                </div>

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
        </div>

        <div class="hero-scroll">
            <div class="scroll-line"></div>
            <span>Scroll</span>
        </div>
    </section>

    @include('partials.ticker')
    @include('home.about-preview')
    @include('home.vision-mission')
    @include('home.sermons-preview', ['sermons' => $latestSermons])
    @include('home.events-preview', ['events' => $upcomingEvents])
    @include('home.testimonies', ['testimonies' => $testimonies])
    @include('home.prayer-cta')
@endsection
