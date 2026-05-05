<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class EventController extends Controller
{
    public function index(): View
    {
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
                    'cards' => [
                        [
                            'icon' => 'fas fa-calendar-days',
                            'title' => 'Friday Prayer Night',
                            'text' => 'Every Friday at 6:00 PM in the main sanctuary with worship and intercession.',
                        ],
                        [
                            'icon' => 'fas fa-church',
                            'title' => 'Sunday Worship',
                            'text' => 'Every Sunday at 9:00 AM for worship, teaching, and fellowship.',
                        ],
                        [
                            'icon' => 'fas fa-people-group',
                            'title' => 'Youth Gathering',
                            'text' => 'A time for students and young adults to worship, learn, and grow together.',
                        ],
                    ],
                ],
                [
                    'id' => 'past-events',
                    'eyebrow' => 'Past Events',
                    'title' => 'Moments we have celebrated together',
                    'copy' => 'These are examples of the kind of gatherings and ministry moments we have shared as a church family.',
                    'cards' => [
                        [
                            'icon' => 'fas fa-photo-film',
                            'title' => 'Community Outreach Sunday',
                            'text' => 'Serving neighbors with prayer, practical help, and encouragement.',
                        ],
                        [
                            'icon' => 'fas fa-microphone-lines',
                            'title' => 'Revival Night',
                            'text' => 'A night of worship, testimony, and prayer that stirred the whole church.',
                        ],
                        [
                            'icon' => 'fas fa-people-roof',
                            'title' => 'Family Sunday',
                            'text' => 'A special gathering of every generation in one united service.',
                        ],
                    ],
                ],
            ],
        ]);
    }

    public function show(string $slug): View
    {
        $label = ucwords(str_replace('-', ' ', $slug));

        return view('page', [
            'pageTitle' => $label,
            'eyebrow' => 'Events',
            'headline' => $label,
            'body' => 'This event page is ready for date details, registration, and practical information.',
            'metaDescription' => 'Browse an event page from Covenant Rise Ministries.',
            'highlights' => [
                [
                    'icon' => 'fas fa-calendar-days',
                    'title' => 'Event Details',
                    'text' => 'Add schedule, location, and any registration instructions here.',
                ],
                [
                    'icon' => 'fas fa-map-location-dot',
                    'title' => 'Location',
                    'text' => 'This area can hold directions, a map, or arrival notes.',
                ],
                [
                    'icon' => 'fas fa-circle-info',
                    'title' => 'What to Expect',
                    'text' => 'Share a quick guide so guests know how to prepare.',
                ],
            ],
            'primary' => ['label' => 'Back to Events', 'url' => '/events'],
            'secondary' => ['label' => 'Plan a Visit', 'url' => '/visit'],
            'anchorId' => null,
            'bodyParagraphs' => [],
            'actions' => [],
            'sections' => [],
        ]);
    }
}
