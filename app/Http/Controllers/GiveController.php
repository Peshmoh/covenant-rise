<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class GiveController extends Controller
{
    public function show(): View
    {
        return view('page', [
            'pageTitle' => 'Give',
            'eyebrow' => 'Generosity',
            'headline' => 'Giving that supports worship, mission, and care',
            'body' => 'Your generosity helps us disciple people, support outreach, and keep ministry moving forward.',
            'metaDescription' => 'Learn how to support the ministry and give faithfully.',
            'highlights' => [
                [
                    'icon' => 'fas fa-coins',
                    'title' => 'Tithe and Offering',
                    'text' => 'A simple and faithful way to support the local church family.',
                ],
                [
                    'icon' => 'fas fa-handshake-angle',
                    'title' => 'Project Support',
                    'text' => 'Help resource special ministry projects and outreach needs.',
                ],
                [
                    'icon' => 'fas fa-globe-africa',
                    'title' => 'Mission Partnership',
                    'text' => 'Partner with us as we serve Nairobi and beyond.',
                ],
            ],
            'primary' => ['label' => 'Prayer Request', 'url' => '/prayer'],
            'secondary' => ['label' => 'Contact Us', 'url' => '/contact'],
            'anchorId' => null,
            'bodyParagraphs' => [],
            'actions' => [],
            'sections' => [],
        ]);
    }
}
