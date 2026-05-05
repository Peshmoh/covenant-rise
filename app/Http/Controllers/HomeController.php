<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Sermon;
use App\Models\Testimony;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $serviceTimes = [
            ['icon' => 'fas fa-sun', 'name' => 'Sunday Main Service', 'time' => 'Every Sunday - 9:00 AM to 12:00 PM'],
            ['icon' => 'fas fa-fire', 'name' => 'Prayer and Intercession', 'time' => 'Every Friday - 6:00 PM to 8:00 PM'],
            ['icon' => 'fas fa-book-open', 'name' => 'Midweek Bible Study', 'time' => 'Every Wednesday - 7:00 PM'],
            ['icon' => 'fab fa-youtube', 'name' => 'Online Church Service', 'time' => 'Live on YouTube and Facebook'],
        ];

        $heroSlides = [
            ['image' => 'images/hero-flip/congerdesign-gerbera-1250287_1920.jpg', 'alt' => 'A red flower rising through soft green grass', 'class' => 'hero-flipbook-page--flower'],
            ['image' => 'images/hero-flip/fotorieth-bible-1089968_1920.jpg', 'alt' => 'A sweeping waterfall flowing through a dramatic canyon', 'class' => 'hero-flipbook-page--waterfall'],
            ['image' => 'images/hero-flip/ichristian-hands-6700891_1920.jpg', 'alt' => 'Hands joined together in prayer and support', 'class' => 'hero-flipbook-page--hands'],
        ];

        $aboutHighlights = [
            ['icon' => 'fas fa-cross', 'title' => 'Christ First', 'text' => 'We believe in the Lordship of Jesus Christ as the foundation for life and godliness.'],
            ['icon' => 'fas fa-hands-praying', 'title' => 'Word and Power', 'text' => 'We teach the uncompromised Word of God with clarity, revelation, and spiritual insight.'],
            ['icon' => 'fas fa-people-group', 'title' => 'Divine Purpose', 'text' => 'We equip believers to grow, overcome, and walk in victory through Christ.'],
        ];

        $tickerItems = [
            'Sunday service every week at 9:00 AM',
            'Friday prayer and intercession at 6:00 PM',
            'Wednesday Bible study at 7:00 PM',
            'Online church live on YouTube and Facebook',
            'Prayer requests are welcome anytime',
        ];

        $latestSermons = Sermon::published()
            ->orderByDesc('published_at')
            ->take(3)
            ->get()
            ->toArray();

        $upcomingEvents = Event::upcoming()
            ->take(3)
            ->get()
            ->toArray();

        $testimonies = Testimony::published()
            ->orderBy('position')
            ->get()
            ->toArray();

        return view('home', [
            'serviceTimes' => $serviceTimes,
            'heroSlides' => $heroSlides,
            'aboutHighlights' => $aboutHighlights,
            'latestSermons' => $latestSermons,
            'upcomingEvents' => $upcomingEvents,
            'testimonies' => $testimonies,
            'tickerItems' => $tickerItems,
        ]);
    }
}
