<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        $events = [
            [
                'slug' => 'friday-night-prayer',
                'title' => 'Friday Night Prayer',
                'excerpt' => 'A focused evening of worship and intercession for families, leaders, and the city.',
                'starts_at' => '2026-05-02 18:00:00',
                'location' => 'Main Sanctuary, Nairobi',
                'time_label' => '6:00 PM',
                'is_featured' => true,
            ],
            [
                'slug' => 'youth-revival-gathering',
                'title' => 'Youth Revival Gathering',
                'excerpt' => 'A vibrant gathering for students and young adults to encounter Jesus together.',
                'starts_at' => '2026-05-11 15:00:00',
                'location' => 'Youth Hall',
                'time_label' => '3:00 PM',
            ],
            [
                'slug' => 'community-outreach-sunday',
                'title' => 'Community Outreach Sunday',
                'excerpt' => 'Join us as we serve neighbors, pray with families, and share practical love.',
                'starts_at' => '2026-05-24 12:00:00',
                'location' => 'Church Grounds',
                'time_label' => 'After Service',
            ],
            [
                'slug' => 'community-outreach-past',
                'title' => 'Community Outreach Sunday',
                'excerpt' => 'Serving neighbors with prayer, practical help, and encouragement.',
                'starts_at' => '2026-02-23 12:00:00',
                'location' => 'Church Grounds',
            ],
            [
                'slug' => 'revival-night',
                'title' => 'Revival Night',
                'excerpt' => 'A night of worship, testimony, and prayer that stirred the whole church.',
                'starts_at' => '2026-03-15 18:00:00',
                'location' => 'Main Sanctuary, Nairobi',
            ],
            [
                'slug' => 'family-sunday',
                'title' => 'Family Sunday',
                'excerpt' => 'A special gathering of every generation in one united service.',
                'starts_at' => '2026-04-21 09:00:00',
                'location' => 'Main Sanctuary, Nairobi',
            ],
        ];

        foreach ($events as $event) {
            Event::updateOrCreate(['slug' => $event['slug']], $event);
        }
    }
}
