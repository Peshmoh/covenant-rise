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
Route::redirect('/leadership', '/about#leadership')->name('leadership');
Route::redirect('/sermons', '/media#sermons')->name('sermons');
Route::redirect('/blogs', '/media#blogs')->name('blogs');
Route::redirect('/gallery', '/media#gallery')->name('gallery');

$staticPages = [
    '/about' => [
        'name' => 'about',
        'data' => $pageData(
            'Our Story',
            'About',
            'A covenant family built to help people grow in Christ through worship, prayer, leadership, and faithful service.',
            'Covenant Rise Ministries is more than a Sunday gathering. We are a church family learning to worship Jesus sincerely, grow in the Word, and serve people with practical love in Nairobi.',
            'Explore our story, vision, leadership, and weekly services below in one simple, easy-to-follow place.',
            [],
            null,
            null,
            null,
            [
                'Covenant Rise Ministries began with a desire to create a church home where faith feels alive, Scripture stays central, and prayer shapes everyday life.',
                'We believe the local church should be a place of healing, discipleship, and courage where people belong, believe, and become all God has called them to be.',
                'As you get to know us, you will find a ministry that values excellence without losing warmth, truth without losing grace, and conviction without losing compassion.',
            ],
            [
                ['label' => 'Our Story', 'url' => '#story', 'class' => 'btn btn-outline'],
                ['label' => 'Vision & Mission', 'url' => '#vision-mission', 'class' => 'btn btn-outline'],
                ['label' => 'Leadership', 'url' => '#leadership', 'class' => 'btn btn-outline'],
                ['label' => 'Our Services', 'url' => '#services', 'class' => 'btn btn-gold'],
            ],
            [
                [
                    'id' => 'story',
                    'eyebrow' => 'Our Story',
                    'title' => 'How Covenant Rise Ministries began and why we keep growing',
                    'cards' => [
                        [
                            'icon' => 'fas fa-seedling',
                            'title' => 'Our Beginning',
                            'text' => 'We started with a simple burden to build a Christ-centered home for worship, prayer, discipleship, and practical care.',
                        ],
                        [
                            'icon' => 'fas fa-house-church',
                            'title' => 'Our Heart',
                            'text' => 'We want people to find faith, healing, belonging, and a place to grow in purpose together.',
                        ],
                        [
                            'icon' => 'fas fa-compass',
                            'title' => 'Our Direction',
                            'text' => 'We keep the Bible central, value prayer, and serve people with a steady spirit of grace and truth.',
                        ],
                    ],
                ],
                [
                    'id' => 'vision-mission',
                    'eyebrow' => 'Vision & Mission',
                    'title' => 'A clear calling that shapes every gathering',
                    'copy' => 'Our vision and mission guide how we worship, disciple, and serve the community.',
                    'cards' => [
                        [
                            'icon' => 'fas fa-eye',
                            'title' => 'Vision',
                            'text' => 'To raise a covenant people who live free, rooted in Scripture, and confident in their calling.',
                        ],
                        [
                            'icon' => 'fas fa-bullseye',
                            'title' => 'Mission',
                            'text' => 'To equip believers through worship, the Word, prayer, discipleship, and acts of compassion.',
                        ],
                        [
                            'icon' => 'fas fa-check-double',
                            'title' => 'Values',
                            'text' => 'Bible rooted, prayer filled, Spirit led, and community built.',
                        ],
                    ],
                ],
                [
                    'id' => 'leadership',
                    'eyebrow' => 'Leadership',
                    'title' => 'Servant leadership that listens, prays, and guides',
                    'copy' => 'Leadership at Covenant Rise Ministries is built around service, accountability, and care for people.',
                    'cards' => [
                        [
                            'icon' => 'fas fa-user-tie',
                            'title' => 'Shepherding',
                            'text' => 'We lead by serving, teaching, and caring for people with humility and responsibility.',
                        ],
                        [
                            'icon' => 'fas fa-hands-praying',
                            'title' => 'Prayerful Oversight',
                            'text' => 'We seek God together and make decisions through prayer, wisdom, and unity.',
                        ],
                        [
                            'icon' => 'fas fa-people-group',
                            'title' => 'Team Ministry',
                            'text' => 'Ministry is shared work, and we equip people to use their gifts well for the church and the city.',
                        ],
                    ],
                ],
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
    '/media' => [
        'name' => 'media',
        'data' => $pageData(
            'Media',
            'Church Media',
            'Sermons, blogs, and gallery moments that tell our story',
            'Our media space helps us share teaching, reflections, and visual moments from church life so the message stays visible during the week.',
            'Explore sermons, blogs, and gallery highlights from Covenant Rise Ministries.',
            [],
            null,
            null,
            null,
            [
                'Use the sections below to jump straight to sermons, blogs, or gallery highlights.',
                'We keep the media space simple, clear, and useful for people who want to stay connected beyond Sunday.',
            ],
            [
                ['label' => 'Sermons', 'url' => '#sermons', 'class' => 'btn btn-gold'],
                ['label' => 'Blogs', 'url' => '#blogs', 'class' => 'btn btn-outline'],
                ['label' => 'Gallery', 'url' => '#gallery', 'class' => 'btn btn-outline'],
            ],
            [
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
            ['label' => 'Leadership', 'url' => '/about#leadership'],
            ['label' => 'Contact Us', 'url' => '/contact'],
        ),
    ],
    '/events' => [
        'name' => 'events',
        'data' => $pageData(
            'Events',
            'Church Calendar',
            'Upcoming events, past events, and a simple way to plan your visit',
            'Stay connected to the life of the church through gatherings, prayer nights, and special moments that build community.',
            'See what is happening at Covenant Rise Ministries and find the next gathering that fits your season.',
            [],
            null,
            null,
            null,
            [
                'Use the section links below to jump to upcoming events, past events, or a simple visit guide.',
                'We keep the calendar clear so guests and members can quickly find what matters most.',
            ],
            [
                ['label' => 'Upcoming Events', 'url' => '#upcoming-events', 'class' => 'btn btn-gold'],
                ['label' => 'Past Events', 'url' => '#past-events', 'class' => 'btn btn-outline'],
                ['label' => 'Plan a Visit', 'url' => '/visit', 'class' => 'btn btn-outline'],
            ],
            [
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
            ['label' => 'Watch Sermons', 'url' => '/media#sermons'],
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
        ['label' => 'Back to Media', 'url' => '/media#sermons'],
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
