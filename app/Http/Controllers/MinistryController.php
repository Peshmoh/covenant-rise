<?php

namespace App\Http\Controllers;

use App\Models\Ministry;
use Illuminate\View\View;

class MinistryController extends Controller
{
    public function index(): View
    {
        $ministries = Ministry::orderBy('position')->get();

        $highlights = $ministries->map(fn (Ministry $ministry) => [
            'icon' => $ministry->icon ?? 'fas fa-people-group',
            'title' => $ministry->name,
            'text' => $ministry->summary,
            'url' => $ministry->url,
        ])->all();

        return view('page', [
            'pageTitle' => 'Ministries',
            'eyebrow' => 'Serve Together',
            'headline' => 'Ministries that make room for every generation',
            'body' => 'From prayer to youth to children, we want people to find a place to grow and serve.',
            'metaDescription' => 'Discover the ministry spaces at Covenant Rise Ministries.',
            'highlights' => $highlights,
            'primary' => ['label' => 'Leadership', 'url' => '/about#leadership'],
            'secondary' => ['label' => 'Contact Us', 'url' => '/contact'],
            'anchorId' => null,
            'bodyParagraphs' => [],
            'actions' => [],
            'sections' => [],
        ]);
    }

    public function show(Ministry $ministry): View
    {
        return view('page', [
            'pageTitle' => $ministry->name,
            'eyebrow' => 'Ministries',
            'headline' => $ministry->name,
            'body' => $ministry->summary,
            'metaDescription' => 'Browse a ministry page from Covenant Rise Ministries.',
            'highlights' => [
                [
                    'icon' => 'fas fa-people-group',
                    'title' => 'Serve Together',
                    'text' => 'Explain how this ministry helps people grow and contribute.',
                ],
                [
                    'icon' => 'fas fa-hands-praying',
                    'title' => 'Pray and Disciple',
                    'text' => 'Add rhythms for prayer, teaching, and practical support.',
                ],
                [
                    'icon' => 'fas fa-seedling',
                    'title' => 'Multiply Impact',
                    'text' => 'Share opportunities to lead, mentor, and serve with excellence.',
                ],
            ],
            'primary' => ['label' => 'Back to Ministries', 'url' => '/ministries'],
            'secondary' => ['label' => 'Contact Us', 'url' => '/contact'],
            'anchorId' => null,
            'bodyParagraphs' => array_filter([$ministry->body]),
            'actions' => [],
            'sections' => [],
        ]);
    }
}
