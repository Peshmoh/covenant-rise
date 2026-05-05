<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AboutController extends Controller
{
    public function show(): View
    {
        return view('page', [
            'pageTitle' => 'About Covenant Rise',
            'eyebrow' => 'About Covenant Rise',
            'headline' => 'A Christ-centered ministry committed to raising a generation that walks in truth, power, and divine purpose.',
            'body' => 'Covenant Rise exists to equip believers through sound teaching, spiritual insight, and the uncompromised Word of God.',
            'metaDescription' => 'Learn about Covenant Rise, our vision, mission, beliefs, and leadership.',
            'highlights' => [],
            'primary' => null,
            'secondary' => null,
            'anchorId' => null,
            'bodyParagraphs' => [
                'Our assignment is to see lives transformed, destinies awakened, and people established in a deep and personal relationship with God.',
                'We teach, equip, and build believers into spiritual maturity so they can awaken purpose and identity in Christ.',
            ],
            'actions' => [
                ['label' => 'About Covenant Rise', 'url' => '#story', 'class' => 'btn btn-outline'],
                ['label' => 'Vision & Mission', 'url' => '#vision-mission', 'class' => 'btn btn-outline'],
                ['label' => 'Leadership', 'url' => '#leadership', 'class' => 'btn btn-outline'],
                ['label' => 'Our Services', 'url' => '#services', 'class' => 'btn btn-gold'],
            ],
            'sections' => [
                [
                    'id' => 'story',
                    'eyebrow' => '',
                    'title' => 'Raising believers in truth, power, and divine purpose',
                    'cards' => [
                        [
                            'icon' => 'fas fa-seedling',
                            'title' => 'Christ-Centered Ministry',
                            'text' => 'Covenant Rise is committed to raising a generation that walks in truth, power, and divine purpose.',
                        ],
                        [
                            'icon' => 'fas fa-house-church',
                            'title' => 'Equipping Believers',
                            'text' => 'We equip believers through sound teaching, spiritual insight, and the uncompromised Word of God.',
                        ],
                        [
                            'icon' => 'fas fa-compass',
                            'title' => 'Transformed Lives',
                            'text' => 'Our assignment is to see lives transformed, destinies awakened, and people established in relationship with God.',
                        ],
                    ],
                ],
                [
                    'id' => 'vision-mission',
                    'eyebrow' => 'Vision & Mission',
                    'title' => 'A clear calling for covenant life and spiritual maturity',
                    'copy' => 'Our vision and mission shape how we teach, disciple, and create room for divine encounter and transformation.',
                    'cards' => [
                        [
                            'icon' => 'fas fa-eye',
                            'title' => 'Our Vision',
                            'text' => 'To raise a people who live by covenant, walk in righteousness, and manifest the life and power of God in every area of their lives.',
                        ],
                        [
                            'icon' => 'fas fa-bullseye',
                            'title' => 'Our Mission',
                            'text' => 'To teach and preach the Word of God with clarity and revelation, disciple believers into maturity, and awaken purpose and identity in Christ.',
                        ],
                        [
                            'icon' => 'fas fa-check-double',
                            'title' => 'Divine Encounter',
                            'text' => 'To create a platform for divine encounter and transformation through the Word, prayer, and the power of the Holy Spirit.',
                        ],
                    ],
                ],
                [
                    'id' => 'beliefs',
                    'eyebrow' => 'What We Believe',
                    'title' => 'Jesus Christ, the Holy Spirit, and the authority of the Word',
                    'copy' => 'We believe in the Lordship of Jesus Christ, the power of the Holy Spirit, and the authority of the Word of God as the foundation for life and godliness.',
                    'cards' => [
                        [
                            'icon' => 'fas fa-cross',
                            'title' => 'Lordship of Jesus',
                            'text' => 'Jesus Christ is Lord, and every believer is called to live under His truth, grace, and victory.',
                        ],
                        [
                            'icon' => 'fas fa-fire-flame-curved',
                            'title' => 'Power of the Holy Spirit',
                            'text' => 'We believe the Holy Spirit empowers believers to grow, overcome, and walk in victory through Christ.',
                        ],
                        [
                            'icon' => 'fas fa-book-bible',
                            'title' => 'Authority of the Word',
                            'text' => 'The Word of God is our foundation for life, godliness, spiritual growth, and purpose.',
                        ],
                    ],
                ],
                [
                    'id' => 'leadership',
                    'eyebrow' => 'Leadership',
                    'title' => 'Led by Apostle Humphrey Lijina',
                    'copy' => 'This ministry is led by Apostle Humphrey Lijina, a servant of God dedicated to teaching, equipping, and guiding believers into deeper spiritual understanding and purpose.',
                    'cards' => [
                        [
                            'icon' => 'fas fa-user-tie',
                            'title' => 'Teaching',
                            'text' => 'Apostle Humphrey Lijina is dedicated to teaching the Word of God with clarity and revelation.',
                        ],
                        [
                            'icon' => 'fas fa-hands-praying',
                            'title' => 'Equipping',
                            'text' => 'The ministry equips believers for spiritual maturity, purpose, and identity in Christ.',
                        ],
                        [
                            'icon' => 'fas fa-people-group',
                            'title' => 'Guidance',
                            'text' => 'Believers are guided into deeper spiritual understanding, transformation, and divine purpose.',
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
        ]);
    }
}
