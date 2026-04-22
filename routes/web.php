<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

$pageData = static function (
    string $pageTitle,
    string $eyebrow,
    string $headline,
    string $body,
    string $metaDescription,
    array $highlights = [],
    ?array $primary = null,
    ?array $secondary = null,
    ?string $anchorId = null,
    array $bodyParagraphs = [],
    array $actions = [],
    array $sections = [],
): array {
    return compact(
        'pageTitle',
        'eyebrow',
        'headline',
        'body',
        'metaDescription',
        'highlights',
        'primary',
        'secondary',
        'anchorId',
        'bodyParagraphs',
        'actions',
        'sections',
    );
};

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::redirect('/services', '/about#services')->name('services');

$staticPages = [
    '/about' => [
        'name' => 'about',
        'data' => $pageData(
            'Our Story',
            'About',
            'A covenant family built to help people grow in Christ',
            'Covenant Rise Ministries is more than a Sunday gathering. We are a family learning to worship Jesus with sincerity, grow in the Word, and serve people with practical love. Our aim is to help every person belong, believe, and become all God has called them to be.',
            'Learn the heart behind Covenant Rise Ministries, what we believe, and how we serve together in Nairobi.',
            [
                [
                    'icon' => 'fas fa-eye',
                    'title' => 'Vision',
                    'text' => 'To raise a covenant people who live free, rooted in scripture, and confident in their calling.',
                ],
                [
                    'icon' => 'fas fa-bullseye',
                    'title' => 'Mission',
                    'text' => 'To equip believers through worship, the Word, prayer, discipleship, and acts of compassion.',
                ],
                [
                    'icon' => 'fas fa-cross',
                    'title' => 'Culture',
                    'text' => 'Jesus is the center of our worship, teaching, service, and daily life.',
                ],
                [
                    'icon' => 'fas fa-hands-holding-heart',
                    'title' => 'Community Care',
                    'text' => 'We value pastoral care, follow-up, and practical support for families, youth, and first-time guests.',
                ],
            ],
            null,
            null,
            'vision',
            [
                'Covenant Rise Ministries began with a simple desire to create a church home where faith feels alive, the Bible remains central, and prayer shapes everyday life. We believe the local church should be a place of healing, discipleship, and courage.',
                'Our services are designed to help people take their next step in Christ. From Sunday worship to midweek study and prayer meetings, we gather around the Word, encourage one another, and make room for the presence of God to transform lives.',
                'As you get to know us, you will find a ministry that values excellence without losing warmth, truth without losing grace, and conviction without losing compassion. We would love to walk with you, pray with you, and help you find your place in the family.',
            ],
            [
                ['label' => 'Our Services', 'url' => '#services', 'class' => 'btn btn-outline'],
                ['label' => 'Plan a Visit', 'url' => '/visit', 'class' => 'btn btn-gold'],
                ['label' => 'Contact Us', 'url' => '/contact', 'class' => 'btn btn-outline'],
            ],
            [
                [
                    'id' => 'services',
                    'eyebrow' => 'Our Services',
                    'title' => 'Weekly gatherings that keep us rooted and growing',
                    'copy' => 'These are the main rhythms of ministry that shape how we worship, learn, pray, and serve together as a church family.',
                    'cards' => [
                        [
                            'icon' => 'fas fa-sun',
                            'title' => 'Sunday Worship',
                            'text' => 'Our main gathering for worship, teaching, prayer, and ministry. We come together each Sunday to hear the Word and celebrate Christ.',
                        ],
                        [
                            'icon' => 'fas fa-book-open',
                            'title' => 'Midweek Study',
                            'text' => 'A focused time to open the Bible, ask questions, and build strong spiritual foundations in a smaller, warmer setting.',
                        ],
                        [
                            'icon' => 'fas fa-fire',
                            'title' => 'Prayer Nights',
                            'text' => 'A place for intercession, worship, and fresh strength. We believe prayer changes lives, families, and communities.',
                        ],
                        [
                            'icon' => 'fas fa-people-group',
                            'title' => 'Outreach and Care',
                            'text' => 'Practical ministry through follow-up, support, and serving people beyond the church walls with compassion and consistency.',
                        ],
                    ],
                ],
            ],
        ),
    ],
    '/leadership' => [
        'name' => 'leadership',
        'data' => $pageData(
            'Leadership',
            'Meet the Team',
            'Leaders who serve with humility, prayer, and conviction',
            'Our leadership culture is built on shared service, accountable stewardship, and a deep love for people.',
            'Meet the leaders who help guide Covenant Rise Ministries.',
            [
                [
                    'icon' => 'fas fa-user-tie',
                    'title' => 'Shared Stewardship',
                    'text' => 'Leadership is a calling to serve well, not a title to hold tightly.',
                ],
                [
                    'icon' => 'fas fa-user-group',
                    'title' => 'Pastoral Care',
                    'text' => 'We want people to be known, prayed for, and encouraged with wisdom.',
                ],
                [
                    'icon' => 'fas fa-seedling',
                    'title' => 'Raising Leaders',
                    'text' => 'We invest in new leaders through mentoring, training, and responsibility.',
                ],
            ],
            ['label' => 'Contact Us', 'url' => '/contact'],
            ['label' => 'About Us', 'url' => '/about'],
        ),
    ],
    '/visit' => [
        'name' => 'visit',
        'data' => $pageData(
            'Plan a Visit',
            'Guest Experience',
            'We want your first visit to feel warm, clear, and easy',
            'Here is what to expect when you join us this Sunday, plus a few ways to connect after the service.',
            'Plan your first visit to Covenant Rise Ministries in Nairobi.',
            [
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
            ['label' => 'Send a Prayer Request', 'url' => '/prayer'],
            ['label' => 'Contact Us', 'url' => '/contact'],
        ),
    ],
    '/sermons' => [
        'name' => 'sermons',
        'data' => $pageData(
            'Sermons',
            'Messages',
            'Teaching that keeps the Bible at the center',
            'Browse the latest sermons and return to the message that speaks to your current season.',
            'Explore the sermon archive from Covenant Rise Ministries.',
            [
                [
                    'icon' => 'fas fa-book-bible',
                    'title' => 'Latest Messages',
                    'text' => 'Stay current with the most recent teaching from the pulpit.',
                ],
                [
                    'icon' => 'fas fa-play',
                    'title' => 'Watch Again',
                    'text' => 'Use the archive when you want to revisit a message or share it.',
                ],
                [
                    'icon' => 'fas fa-share-nodes',
                    'title' => 'Share Hope',
                    'text' => 'Messages are a simple way to encourage friends and family.',
                ],
            ],
            ['label' => 'Watch Online', 'url' => '/online-church'],
            ['label' => 'See Events', 'url' => '/events'],
        ),
    ],
    '/ministries' => [
        'name' => 'ministries',
        'data' => $pageData(
            'Ministries',
            'Serve Together',
            'Ministries that make room for every generation',
            'From prayer to youth to children, we want people to find a place to grow and serve.',
            'Discover the ministry spaces at Covenant Rise Ministries.',
            [
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
            ['label' => 'Leadership', 'url' => '/leadership'],
            ['label' => 'Contact Us', 'url' => '/contact'],
        ),
    ],
    '/events' => [
        'name' => 'events',
        'data' => $pageData(
            'Events',
            'Church Calendar',
            'Gatherings that build faith and community',
            'Stay connected to what is happening across the ministry and take your next step into community.',
            'See what is coming up at Covenant Rise Ministries.',
            [
                [
                    'icon' => 'fas fa-calendar-days',
                    'title' => 'Prayer Nights',
                    'text' => 'Focused evenings of worship and intercession that strengthen the church.',
                ],
                [
                    'icon' => 'fas fa-people-group',
                    'title' => 'Youth Gatherings',
                    'text' => 'Rhythms that help students and young adults stay connected and encouraged.',
                ],
                [
                    'icon' => 'fas fa-bullhorn',
                    'title' => 'Outreach Sunday',
                    'text' => 'Opportunities to serve the community with practical love and prayer.',
                ],
            ],
            ['label' => 'Give', 'url' => '/give'],
            ['label' => 'Plan a Visit', 'url' => '/visit'],
        ),
    ],
    '/give' => [
        'name' => 'give',
        'data' => $pageData(
            'Give',
            'Generosity',
            'Giving that supports worship, mission, and care',
            'Your generosity helps us disciple people, support outreach, and keep ministry moving forward.',
            'Learn how to support the ministry and give faithfully.',
            [
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
            ['label' => 'Prayer Request', 'url' => '/prayer'],
            ['label' => 'Contact Us', 'url' => '/contact'],
        ),
    ],
    '/online-church' => [
        'name' => 'online-church',
        'data' => $pageData(
            'Online Church',
            'Livestream',
            'Join us online when you cannot be in the room',
            'We stream services, share replays, and keep a place open for prayer and connection.',
            'Watch Covenant Rise Ministries live from wherever you are.',
            [
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
            ['label' => 'Watch Sermons', 'url' => '/sermons'],
            ['label' => 'Prayer Request', 'url' => '/prayer'],
        ),
    ],
    '/prayer' => [
        'name' => 'prayer',
        'data' => $pageData(
            'Prayer',
            'Prayer Request',
            'We are here to pray with you',
            'Send your request and our team will stand with you in faith, care, and confidentiality.',
            'Send a prayer request to Covenant Rise Ministries.',
            [
                [
                    'icon' => 'fas fa-lock',
                    'title' => 'Confidential Care',
                    'text' => 'We handle requests with care and respect.',
                ],
                [
                    'icon' => 'fas fa-hands-praying',
                    'title' => 'Intercession',
                    'text' => 'Our prayer team stands with individuals, families, and leaders.',
                ],
                [
                    'icon' => 'fas fa-phone-volume',
                    'title' => 'Follow Up',
                    'text' => 'When needed, we can connect you with pastoral support.',
                ],
            ],
            ['label' => 'Contact Us', 'url' => '/contact'],
            ['label' => 'Visit Us', 'url' => '/visit'],
        ),
    ],
    '/contact' => [
        'name' => 'contact',
        'data' => $pageData(
            'Contact',
            'Stay Connected',
            'Reach us by WhatsApp, email, or in person',
            'We would love to hear from you and help you take your next step. Message us on WhatsApp at ' . config('church.whatsapp') . ', send us an email, or open the map for directions to our meeting place.',
            'Contact Covenant Rise Ministries in Nairobi.',
            [
                [
                    'icon' => 'fab fa-whatsapp',
                    'title' => 'WhatsApp Us',
                    'text' => 'Send a message to ' . config('church.whatsapp') . ' and we will reply as soon as possible.',
                    'url' => 'https://wa.me/' . preg_replace('/\D+/', '', config('church.whatsapp')),
                    'target' => '_blank',
                    'rel' => 'noopener noreferrer',
                ],
                [
                    'icon' => 'fas fa-envelope',
                    'title' => 'Send Email',
                    'text' => 'Send a note anytime to ' . config('church.email') . ' and our team will reply as soon as possible.',
                    'url' => 'mailto:' . config('church.email'),
                ],
                [
                    'icon' => 'fas fa-location-dot',
                    'title' => 'Visit In Person',
                    'text' => 'Main Sanctuary, Nairobi, Kenya. We meet in a welcoming, easy-to-find location with parking nearby and clear directions from the main road.',
                    'url' => 'https://www.google.com/maps/search/?api=1&query=Covenant+Rise+Ministries+Nairobi+Kenya',
                    'target' => '_blank',
                    'rel' => 'noopener noreferrer',
                ],
            ],
            null,
            null,
            null,
            [
                'We are happy to connect with you and make the next step simple. If you need prayer, want to plan a visit, or need directions, our team is ready to help.',
                'The fastest way to reach us is WhatsApp. You can also email us directly or tap the location card to open Google Maps for a quick route to the church.',
            ],
            [
                ['label' => 'WhatsApp Us', 'url' => 'https://wa.me/' . preg_replace('/\D+/', '', config('church.whatsapp')), 'class' => 'btn btn-gold', 'target' => '_blank', 'rel' => 'noopener noreferrer'],
                ['label' => 'Plan a Visit', 'url' => '/visit', 'class' => 'btn btn-outline'],
                ['label' => 'Email Us', 'url' => 'mailto:' . config('church.email'), 'class' => 'btn btn-outline'],
            ],
        ),
    ],
];

foreach ($staticPages as $uri => $page) {
    Route::view($uri, 'page', $page['data'])->name($page['name']);
}

Route::get('/sermons/{slug}', function (string $slug) use ($pageData) {
    $label = ucwords(str_replace('-', ' ', $slug));

    return view('page', $pageData(
        $label,
        'Sermons',
        $label,
        'This sermon page is ready for your message archive, notes, and replay links.',
        'Browse a sermon message from the Covenant Rise Ministries archive.',
        [
            [
                'icon' => 'fas fa-book-open',
                'title' => 'Scripture Focus',
                'text' => 'Every message should point back to the Word of God.',
            ],
            [
                'icon' => 'fas fa-play',
                'title' => 'Watch Again',
                'text' => 'Use this page for the replay and key sermon clips.',
            ],
            [
                'icon' => 'fas fa-share-nodes',
                'title' => 'Share Hope',
                'text' => 'Add notes, downloads, and easy ways to share the message.',
            ],
        ],
        ['label' => 'Back to Sermons', 'url' => '/sermons'],
        ['label' => 'Watch Online', 'url' => '/online-church'],
    ));
})->name('sermons.show');

Route::get('/events/{slug}', function (string $slug) use ($pageData) {
    $label = ucwords(str_replace('-', ' ', $slug));

    return view('page', $pageData(
        $label,
        'Events',
        $label,
        'This event page is ready for date details, registration, and practical information.',
        'Browse an event page from Covenant Rise Ministries.',
        [
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
        ['label' => 'Back to Events', 'url' => '/events'],
        ['label' => 'Plan a Visit', 'url' => '/visit'],
    ));
})->name('events.show');

Route::get('/ministries/{slug}', function (string $slug) use ($pageData) {
    $label = match ($slug) {
        'mens' => "Men's Ministry",
        'womens' => "Women's Ministry",
        'youth' => 'Youth Ministry',
        'children' => "Children's Ministry",
        'prayer' => 'Prayer Ministry',
        default => ucwords(str_replace('-', ' ', $slug)),
    };

    return view('page', $pageData(
        $label,
        'Ministries',
        $label,
        'This ministry page is ready for team details, schedules, and the ways people can get involved.',
        'Browse a ministry page from Covenant Rise Ministries.',
        [
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
        ['label' => 'Back to Ministries', 'url' => '/ministries'],
        ['label' => 'Contact Us', 'url' => '/contact'],
    ));
})->name('ministries.show');

Route::post('/prayer', function () {
    return back()->with('status', 'Thanks. Your prayer request has been received.');
})->name('prayer.store');

Route::post('/contact', function () {
    return back()->with('status', 'Thanks. Your message has been received.');
})->name('contact.send');
