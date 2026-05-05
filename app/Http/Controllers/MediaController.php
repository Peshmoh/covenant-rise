<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class MediaController extends Controller
{
    public function index(): View
    {
        return view('page', [
            'pageTitle' => 'Media',
            'eyebrow' => 'Church Media',
            'headline' => 'Sermons, blogs, and gallery moments that tell our story',
            'body' => 'Our media space helps us share teaching, reflections, and visual moments from church life so the message stays visible during the week.',
            'metaDescription' => 'Explore sermons, blogs, and gallery highlights from Covenant Rise Ministries.',
            'highlights' => [],
            'primary' => null,
            'secondary' => null,
            'anchorId' => null,
            'bodyParagraphs' => [
                'Use the sections below to jump straight to sermons, blogs, or gallery highlights.',
                'We keep the media space simple, clear, and useful for people who want to stay connected beyond Sunday.',
            ],
            'actions' => [
                ['label' => 'Sermons', 'url' => '#sermons', 'class' => 'btn btn-gold'],
                ['label' => 'Blogs', 'url' => '#blogs', 'class' => 'btn btn-outline'],
                ['label' => 'Gallery', 'url' => '#gallery', 'class' => 'btn btn-outline'],
            ],
            'sections' => [
                [
                    'id' => 'sermons',
                    'eyebrow' => 'Sermons',
                    'title' => 'Messages that keep the Bible at the center',
                    'copy' => 'Listen to preaching, teaching, and prayerful encouragement from the pulpit.',
                    'cards' => [
                        [
                            'icon' => 'fas fa-play',
                            'title' => 'Sunday Messages',
                            'text' => 'Weekly preaching that points people back to Scripture and Christ.',
                        ],
                        [
                            'icon' => 'fas fa-list-check',
                            'title' => 'Teaching Series',
                            'text' => 'Longer conversations that build faith and practical understanding.',
                        ],
                        [
                            'icon' => 'fas fa-hands-praying',
                            'title' => 'Prayer Moments',
                            'text' => 'Encouraging moments from prayer nights, worship, and ministry time.',
                        ],
                    ],
                ],
                [
                    'id' => 'blogs',
                    'eyebrow' => 'Blogs',
                    'title' => 'Encouragement for daily living and discipleship',
                    'copy' => 'Written reflections help people carry Sunday truth into everyday life.',
                    'cards' => [
                        [
                            'icon' => 'fas fa-pen-nib',
                            'title' => 'Devotional Notes',
                            'text' => 'Short reflections to strengthen faith, prayer, and consistency with God.',
                        ],
                        [
                            'icon' => 'fas fa-heart',
                            'title' => 'Faith Stories',
                            'text' => 'Stories of how God is working in people, families, and the wider church family.',
                        ],
                        [
                            'icon' => 'fas fa-book-open',
                            'title' => 'Teaching Reflections',
                            'text' => 'Simple written insights from sermons and Bible study moments.',
                        ],
                    ],
                ],
                [
                    'id' => 'gallery',
                    'eyebrow' => 'Gallery',
                    'title' => 'Snapshots of worship, outreach, and church family life',
                    'copy' => 'Photos help us celebrate the moments that shape church life and community.',
                    'cards' => [
                        [
                            'icon' => 'fas fa-church',
                            'title' => 'Sunday Worship',
                            'text' => 'Images from services, worship gatherings, and moments in the sanctuary.',
                        ],
                        [
                            'icon' => 'fas fa-people-group',
                            'title' => 'Community Outreach',
                            'text' => 'Scenes from outreach, prayer support, and practical service in Nairobi.',
                        ],
                        [
                            'icon' => 'fas fa-camera-retro',
                            'title' => 'Ministry Gatherings',
                            'text' => 'Photos from leadership moments, youth meetings, and special church events.',
                        ],
                    ],
                ],
            ],
        ]);
    }
}
