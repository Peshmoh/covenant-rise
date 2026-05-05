<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class OnlineChurchController extends Controller
{
    public function show(): View
    {
        return view('page', [
            'pageTitle' => 'Online Church',
            'eyebrow' => 'Livestream',
            'headline' => 'Join us online when you cannot be in the room',
            'body' => 'We stream services, share replays, and keep a place open for prayer and connection.',
            'metaDescription' => 'Watch Covenant Rise Ministries live from wherever you are.',
            'highlights' => [
                [
                    'icon' => 'fas fa-broadcast-tower',
                    'title' => 'Live Stream',
                    'text' => 'Tune in for Sunday worship and special gatherings.',
                ],
                [
                    'icon' => 'fas fa-video',
                    'title' => 'Replays',
                    'text' => 'Catch up on sermons and important ministry moments.',
                ],
                [
                    'icon' => 'fas fa-comments',
                    'title' => 'Stay Connected',
                    'text' => 'Use the online space to keep in touch and send prayer needs.',
                ],
            ],
            'primary' => ['label' => 'Watch Sermons', 'url' => '/media#sermons'],
            'secondary' => ['label' => 'Prayer Request', 'url' => '/prayer'],
            'anchorId' => null,
            'bodyParagraphs' => [],
            'actions' => [],
            'sections' => [],
        ]);
    }
}
