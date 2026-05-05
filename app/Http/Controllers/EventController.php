<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\View\View;

class EventController extends Controller
{
    public function index(): View
    {
        $upcoming = Event::upcoming()->take(6)->get();
        $past = Event::past()->take(6)->get();

        $upcomingCards = $upcoming->map(fn (Event $event) => [
            'icon' => 'fas fa-calendar-days',
            'title' => $event->title,
            'text' => $event->excerpt,
            'url' => $event->url,
        ])->all();

        $pastCards = $past->map(fn (Event $event) => [
            'icon' => 'fas fa-photo-film',
            'title' => $event->title,
            'text' => $event->excerpt,
            'url' => $event->url,
        ])->all();

        return view('page', [
            'pageTitle' => 'Events',
            'eyebrow' => 'Church Calendar',
            'headline' => 'Upcoming events, past events, and a simple way to plan your visit',
            'body' => 'Stay connected to the life of the church through gatherings, prayer nights, and special moments that build community.',
            'metaDescription' => 'See what is happening at Covenant Rise Ministries and find the next gathering that fits your season.',
            'highlights' => [],
            'primary' => null,
            'secondary' => null,
            'anchorId' => null,
            'bodyParagraphs' => [
                'Use the section links below to jump to upcoming events, past events, or a simple visit guide.',
                'We keep the calendar clear so guests and members can quickly find what matters most.',
            ],
            'actions' => [
                ['label' => 'Upcoming Events', 'url' => '#upcoming-events', 'class' => 'btn btn-gold'],
                ['label' => 'Past Events', 'url' => '#past-events', 'class' => 'btn btn-outline'],
                ['label' => 'Plan a Visit', 'url' => '/visit', 'class' => 'btn btn-outline'],
            ],
            'sections' => [
                [
                    'id' => 'upcoming-events',
                    'eyebrow' => 'Upcoming Events',
                    'title' => 'What is coming up next',
                    'copy' => 'These gatherings are coming up soon and help us worship, grow, and serve together.',
                    'cards' => $upcomingCards,
                ],
                [
                    'id' => 'past-events',
                    'eyebrow' => 'Past Events',
                    'title' => 'Moments we have celebrated together',
                    'copy' => 'These are examples of the kind of gatherings and ministry moments we have shared as a church family.',
                    'cards' => $pastCards,
                ],
            ],
        ]);
    }

    public function show(Event $event): View
    {
        return view('page', [
            'pageTitle' => $event->title,
            'eyebrow' => 'Events',
            'headline' => $event->title,
            'body' => $event->excerpt,
            'metaDescription' => $event->excerpt,
            'highlights' => [
                [
                    'icon' => 'fas fa-calendar-days',
                    'title' => $event->starts_at->translatedFormat('l, j F Y'),
                    'text' => $event->time,
                ],
                [
                    'icon' => 'fas fa-map-location-dot',
                    'title' => 'Location',
                    'text' => $event->location,
                ],
                [
                    'icon' => 'fas fa-circle-info',
                    'title' => 'What to Expect',
                    'text' => 'Join us for worship, teaching, and fellowship.',
                ],
            ],
            'primary' => ['label' => 'Back to Events', 'url' => '/events'],
            'secondary' => ['label' => 'Plan a Visit', 'url' => '/visit'],
            'anchorId' => null,
            'bodyParagraphs' => array_filter([$event->body]),
            'actions' => [],
            'sections' => [],
        ]);
    }
}
