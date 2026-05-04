@php
    $tickerItems = $tickerItems ?? [
        '1st Service: 8:00 AM – 10:00 AM,
        'Friday prayer and intercession at 6:00 PM',
        'Wednesday Bible study at 7:00 PM',
        'Online church live on YouTube and Facebook',
        'Prayer requests are welcome anytime',
    ];
@endphp

<section class="ticker" aria-label="Announcements">
    <div class="ticker-inner">
        <div class="ticker-track">
            @for($repeat = 0; $repeat < 2; $repeat++)
                @foreach($tickerItems as $item)
                    <span class="ticker-item">
                        <span class="ticker-dot"></span>
                        {{ $item }}
                    </span>
                @endforeach
            @endfor
        </div>
    </div>
</section>
