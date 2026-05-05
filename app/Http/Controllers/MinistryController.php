<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class MinistryController extends Controller
{
    public function index(): View
    {
        return view('page', [
            'pageTitle' => 'Ministries',
            'eyebrow' => 'Serve Together',
            'headline' => 'Ministries that make room for every generation',
            'body' => 'From prayer to youth to children, we want people to find a place to grow and serve.',
            'metaDescription' => 'Discover the ministry spaces at Covenant Rise Ministries.',
            'highlights' => [
                [
                    'icon' => 'fas fa-hands-holding-child',
                    'title' => 'Children and Youth',
                    'text' => 'Fun, formation, and strong biblical foundations for young people.',
                ],
                [
                    'icon' => 'fas fa-hand-holding-heart',
                    'title' => 'Prayer Ministry',
                    'text' => 'Intercession and care for needs that matter to families and individuals.',
                ],
                [
                    'icon' => 'fas fa-people-carry-box',
                    'title' => 'Service Teams',
                    'text' => 'Practical ministry through worship, welcome, logistics, and outreach.',
                ],
            ],
            'primary' => ['label' => 'Leadership', 'url' => '/about#leadership'],
            'secondary' => ['label' => 'Contact Us', 'url' => '/contact'],
            'anchorId' => null,
            'bodyParagraphs' => [],
            'actions' => [],
            'sections' => [],
        ]);
    }

    public function show(string $slug): View
    {
        $label = match ($slug) {
            'mens' => "Men's Ministry",
            'womens' => "Women's Ministry",
            'youth' => 'Youth Ministry',
            'children' => "Children's Ministry",
            'prayer' => 'Prayer Ministry',
            default => ucwords(str_replace('-', ' ', $slug)),
        };

        return view('page', [
            'pageTitle' => $label,
            'eyebrow' => 'Ministries',
            'headline' => $label,
            'body' => 'This ministry page is ready for team details, schedules, and the ways people can get involved.',
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
            'bodyParagraphs' => [],
            'actions' => [],
            'sections' => [],
        ]);
    }
}
