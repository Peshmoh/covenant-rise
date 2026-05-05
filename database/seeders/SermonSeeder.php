<?php

namespace Database\Seeders;

use App\Models\Sermon;
use Illuminate\Database\Seeder;

class SermonSeeder extends Seeder
{
    public function run(): void
    {
        $sermons = [
            [
                'slug' => 'faith-for-the-long-road',
                'title' => 'Faith for the Long Road',
                'speaker' => 'Apostle Humphrey Lijina',
                'category' => 'Sunday Service',
                'duration' => '42 min',
                'excerpt' => 'A message about endurance, covenant confidence, and trusting God when promises take time.',
                'published_at' => '2026-04-14 09:00:00',
            ],
            [
                'slug' => 'when-grace-opens-the-door',
                'title' => 'When Grace Opens the Door',
                'speaker' => 'Apostle Humphrey Lijina',
                'category' => 'Teaching Series',
                'duration' => '35 min',
                'excerpt' => 'Grace does not only forgive us. It also teaches us how to step through new doors with peace.',
                'published_at' => '2026-04-07 09:00:00',
            ],
            [
                'slug' => 'prayer-that-changes-atmospheres',
                'title' => 'Prayer That Changes Atmospheres',
                'speaker' => 'Apostle Humphrey Lijina',
                'category' => 'Prayer Night',
                'duration' => '47 min',
                'excerpt' => 'A call to stand in prayer with faith, consistency, and expectation that God still moves.',
                'published_at' => '2026-03-31 18:00:00',
            ],
        ];

        foreach ($sermons as $sermon) {
            Sermon::updateOrCreate(['slug' => $sermon['slug']], $sermon);
        }
    }
}
