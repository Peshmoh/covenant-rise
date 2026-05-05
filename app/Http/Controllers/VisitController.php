<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class VisitController extends Controller
{
    public function show(): View
    {
        return view('page', [
            'pageTitle' => 'Plan a Visit',
            'eyebrow' => 'Guest Experience',
            'headline' => 'We want your first visit to feel warm, clear, and easy',
            'body' => 'Here is what to expect when you join us this Sunday, plus a few ways to connect after the service.',
            'metaDescription' => 'Plan your first visit to Covenant Rise Ministries in Nairobi.',
            'highlights' => [
                [
                    'icon' => 'fas fa-car',
                    'title' => 'Easy Arrival',
                    'text' => 'Arrive early for parking, greeting, and a calm start to service.',
                ],
                [
                    'icon' => 'fas fa-child',
                    'title' => 'Family Friendly',
                    'text' => 'We love families and make room for children and youth to feel welcome.',
                ],
                [
                    'icon' => 'fas fa-circle-question',
                    'title' => 'Friendly Next Steps',
                    'text' => 'Our team can help you connect, join a group, or share a prayer need.',
                ],
            ],
            'primary' => ['label' => 'Send a Prayer Request', 'url' => '/prayer'],
            'secondary' => ['label' => 'Contact Us', 'url' => '/contact'],
            'anchorId' => null,
            'bodyParagraphs' => [],
            'actions' => [],
            'sections' => [],
        ]);
    }
}
