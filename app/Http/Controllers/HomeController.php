<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $serviceTimes = [
            [
                'icon' => 'fas fa-sun',
                'name' => 'Sunday Main Service',
                'time' => 'Every Sunday - 9:00 AM to 12:00 PM',
            ],
            [
                'icon' => 'fas fa-fire',
                'name' => 'Prayer and Intercession',
                'time' => 'Every Friday - 6:00 PM to 8:00 PM',
            ],
            [
                'icon' => 'fas fa-book-open',
                'name' => 'Midweek Bible Study',
                'time' => 'Every Wednesday - 7:00 PM',
            ],
            [
                'icon' => 'fab fa-youtube',
                'name' => 'Online Church Service',
                'time' => 'Live on YouTube and Facebook',
            ],
        ];

        $aboutHighlights = [
            [
                'icon' => 'fas fa-cross',
                'title' => 'Christ First',
                'text' => 'Everything we do points back to Jesus, the Word, and a life shaped by grace.',
            ],
            [
                'icon' => 'fas fa-hands-praying',
                'title' => 'Prayerful Culture',
                'text' => 'We build a church that knows how to seek God, listen well, and respond in faith.',
            ],
            [
                'icon' => 'fas fa-people-group',
                'title' => 'Shared Purpose',
                'text' => 'We want every generation to feel seen, equipped, and ready to serve together.',
            ],
        ];

        $latestSermons = [
            [
                'title' => 'Faith for the Long Road',
                'speaker' => 'Pastor Daniel Mwangi',
                'date' => 'Sunday, 14 April 2026',
                'duration' => '42 min',
                'category' => 'Sunday Service',
                'excerpt' => 'A message about endurance, covenant confidence, and trusting God when promises take time.',
                'url' => route('sermons.show', 'faith-for-the-long-road'),
            ],
            [
                'title' => 'When Grace Opens the Door',
                'speaker' => 'Pastor Esther Wanjiku',
                'date' => 'Sunday, 7 April 2026',
                'duration' => '35 min',
                'category' => 'Teaching Series',
                'excerpt' => 'Grace does not only forgive us. It also teaches us how to step through new doors with peace.',
                'url' => route('sermons.show', 'when-grace-opens-the-door'),
            ],
            [
                'title' => 'Prayer That Changes Atmospheres',
                'speaker' => 'Pastor Joseph Otieno',
                'date' => 'Sunday, 31 March 2026',
                'duration' => '47 min',
                'category' => 'Prayer Night',
                'excerpt' => 'A call to stand in prayer with faith, consistency, and expectation that God still moves.',
                'url' => route('sermons.show', 'prayer-that-changes-atmospheres'),
            ],
        ];

        $upcomingEvents = [
            [
                'title' => 'Friday Night Prayer',
                'month' => 'MAY',
                'day' => '02',
                'time' => '6:00 PM',
                'location' => 'Main Sanctuary, Nairobi',
                'excerpt' => 'A focused evening of worship and intercession for families, leaders, and the city.',
                'url' => route('events.show', 'friday-night-prayer'),
            ],
            [
                'title' => 'Youth Revival Gathering',
                'month' => 'MAY',
                'day' => '11',
                'time' => '3:00 PM',
                'location' => 'Youth Hall',
                'excerpt' => 'A vibrant gathering for students and young adults to encounter Jesus together.',
                'url' => route('events.show', 'youth-revival-gathering'),
            ],
            [
                'title' => 'Community Outreach Sunday',
                'month' => 'MAY',
                'day' => '24',
                'time' => 'After Service',
                'location' => 'Church Grounds',
                'excerpt' => 'Join us as we serve neighbors, pray with families, and share practical love.',
                'url' => route('events.show', 'community-outreach-sunday'),
            ],
        ];

        $testimonies = [
            [
                'quote' => 'I came for prayer and found a church family that kept checking on me long after the service ended.',
                'name' => 'Mercy W.',
                'role' => 'Member, Kasarani',
                'avatar' => 'images/testimonials/avatar-mercy.svg',
                'stars' => 5,
            ],
            [
                'quote' => 'The teaching is clear, biblical, and practical. It helped me rebuild my walk with God step by step.',
                'name' => 'Daniel K.',
                'role' => 'Youth Leader, Ruai',
                'avatar' => 'images/testimonials/avatar-daniel.svg',
                'stars' => 5,
            ],
            [
                'quote' => 'My children love church now, and our home feels lighter because prayer has become part of our week.',
                'name' => 'Faith N.',
                'role' => 'Parent, Eastlands',
                'avatar' => 'images/testimonials/avatar-faith.svg',
                'stars' => 5,
            ],
            [
                'quote' => 'The worship, the Word, and the kindness of the team gave me hope in a season that felt very heavy.',
                'name' => 'Michael O.',
                'role' => 'Volunteer, Nairobi',
                'avatar' => 'images/testimonials/avatar-michael.svg',
                'stars' => 5,
            ],
            [
                'quote' => 'I visited once and stayed because the welcome felt genuine and the message spoke straight to my heart.',
                'name' => 'Esther M.',
                'role' => 'Guest, Zimmerman',
                'avatar' => 'images/testimonials/avatar-esther.svg',
                'stars' => 5,
            ],
            [
                'quote' => 'Serving here restored my confidence. I now feel useful, seen, and grounded in purpose again.',
                'name' => 'Brian T.',
                'role' => 'Worship Team, Thika Road',
                'avatar' => 'images/testimonials/avatar-brian.svg',
                'stars' => 5,
            ],
        ];

        $tickerItems = [
            'Sunday service every week at 9:00 AM',
            'Friday prayer and intercession at 6:00 PM',
            'Wednesday Bible study at 7:00 PM',
            'Online church live on YouTube and Facebook',
            'Prayer requests are welcome anytime',
        ];

        return view('home', compact(
            'serviceTimes',
            'aboutHighlights',
            'latestSermons',
            'upcomingEvents',
            'testimonies',
            'tickerItems',
        ));
    }
}
