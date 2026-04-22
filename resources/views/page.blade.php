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

                @if(!empty($bodyParagraphs))
                    <div class="page-copy">
                        @foreach($bodyParagraphs as $paragraph)
                            <p>{{ $paragraph }}</p>
                        @endforeach
                    </div>
                @endif

                @if(!empty($actions))
                    <div class="page-actions">
                        @foreach($actions as $action)
                            <a
                                href="{{ $action['url'] }}"
                                class="{{ $action['class'] ?? 'btn btn-gold' }}"
                                @if(!empty($action['target'])) target="{{ $action['target'] }}" @endif
                                @if(!empty($action['rel'])) rel="{{ $action['rel'] }}" @endif
                            >
                                {{ $action['label'] }}
                            </a>
                        @endforeach
                    </div>
                @elseif(!empty($primary) || !empty($secondary))
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
                        @if(!empty($highlight['url']))
                            <a
                                href="{{ $highlight['url'] }}"
                                class="card page-highlight page-highlight-link"
                                @if(!empty($highlight['target'])) target="{{ $highlight['target'] }}" @endif
                                @if(!empty($highlight['rel'])) rel="{{ $highlight['rel'] }}" @endif
                            >
                                <div class="mini-icon"><i class="{{ $highlight['icon'] }}"></i></div>
                                <h2>{{ $highlight['title'] }}</h2>
                                <p>{{ $highlight['text'] }}</p>
                            </a>
                        @else
                            <article class="card page-highlight">
                                <div class="mini-icon"><i class="{{ $highlight['icon'] }}"></i></div>
                                <h2>{{ $highlight['title'] }}</h2>
                                <p>{{ $highlight['text'] }}</p>
                            </article>
                        @endif
                    @endforeach
                </div>
            @endif

            @if(!empty($sections))
                @foreach($sections as $section)
                    <section class="page-section" @if(!empty($section['id'])) id="{{ $section['id'] }}" @endif>
                        <div class="section-header section-header-left">
                            @if(!empty($section['eyebrow']))
                                <div class="section-kicker">{{ $section['eyebrow'] }}</div>
                            @endif
                            <h2 class="section-title">{{ $section['title'] }}</h2>
                            @if(!empty($section['copy']))
                                <p class="section-copy">{{ $section['copy'] }}</p>
                            @endif
                        </div>

                        @if(!empty($section['cards']))
                            <div class="page-grid">
                                @foreach($section['cards'] as $card)
                                    @if(!empty($card['url']))
                                        <a
                                            href="{{ $card['url'] }}"
                                            class="card page-highlight page-highlight-link"
                                            @if(!empty($card['target'])) target="{{ $card['target'] }}" @endif
                                            @if(!empty($card['rel'])) rel="{{ $card['rel'] }}" @endif
                                        >
                                            <div class="mini-icon"><i class="{{ $card['icon'] }}"></i></div>
                                            <h2>{{ $card['title'] }}</h2>
                                            <p>{{ $card['text'] }}</p>
                                        </a>
                                    @else
                                        <article class="card page-highlight">
                                            <div class="mini-icon"><i class="{{ $card['icon'] }}"></i></div>
                                            <h2>{{ $card['title'] }}</h2>
                                            <p>{{ $card['text'] }}</p>
                                        </article>
                                    @endif
                                @endforeach
                            </div>
                        @endif
                    </section>
                @endforeach
            @endif
        </div>
    </section>
@endsection
