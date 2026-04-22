@extends('layouts.app')

@section('title', ($pageTitle ?? config('church.name')) . ' - ' . config('church.name'))
@section('meta_description', $metaDescription ?? config('church.tagline'))

@section('content')
    <section class="page-shell">
        <div class="page-bg"></div>
        <div class="container">
            @if(session('status'))
                <div class="card page-status">
                    <i class="fas fa-circle-check"></i>
                    <span>{{ session('status') }}</span>
                </div>
            @endif

            <article class="page-hero card">
                <div class="section-kicker">{{ $eyebrow ?? 'Covenant Rise Ministries' }}</div>
                <h1 class="page-title">{{ $headline ?? ($pageTitle ?? config('church.name')) }}</h1>
                <p class="section-copy">{{ $body ?? '' }}</p>

                @if(!empty($primary) || !empty($secondary))
                    <div class="page-actions">
                        @if(!empty($primary))
                            <a href="{{ $primary['url'] }}" class="btn btn-gold">{{ $primary['label'] }}</a>
                        @endif
                        @if(!empty($secondary))
                            <a href="{{ $secondary['url'] }}" class="btn btn-outline">{{ $secondary['label'] }}</a>
                        @endif
                    </div>
                @endif
            </article>

            @if(!empty($highlights))
                <div class="page-grid" @if(!empty($anchorId)) id="{{ $anchorId }}" @endif>
                    @foreach($highlights as $highlight)
                        <article class="card page-highlight">
                            <div class="mini-icon"><i class="{{ $highlight['icon'] }}"></i></div>
                            <h2>{{ $highlight['title'] }}</h2>
                            <p>{{ $highlight['text'] }}</p>
                        </article>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endsection
