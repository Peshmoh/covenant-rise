<?php

namespace Database\Seeders;

use App\Models\Ministry;
use Illuminate\Database\Seeder;

class MinistrySeeder extends Seeder
{
    public function run(): void
    {
        $ministries = [
            ['slug' => 'mens', 'name' => "Men's Ministry", 'icon' => 'fas fa-user-tie', 'summary' => 'A space where men grow in faith, leadership, and brotherhood.', 'position' => 1],
            ['slug' => 'womens', 'name' => "Women's Ministry", 'icon' => 'fas fa-person-dress', 'summary' => 'A community of women growing in faith, friendship, and purpose.', 'position' => 2],
            ['slug' => 'youth', 'name' => 'Youth Ministry', 'icon' => 'fas fa-people-group', 'summary' => 'A vibrant gathering for students and young adults to encounter Jesus together.', 'position' => 3],
            ['slug' => 'children', 'name' => "Children's Ministry", 'icon' => 'fas fa-hands-holding-child', 'summary' => 'Fun, formation, and strong biblical foundations for young people.', 'position' => 4],
            ['slug' => 'prayer', 'name' => 'Prayer Ministry', 'icon' => 'fas fa-hand-holding-heart', 'summary' => 'Intercession and care for needs that matter to families and individuals.', 'position' => 5],
            ['slug' => 'service-teams', 'name' => 'Service Teams', 'icon' => 'fas fa-people-carry-box', 'summary' => 'Practical ministry through worship, welcome, logistics, and outreach.', 'position' => 6],
        ];

        foreach ($ministries as $ministry) {
            Ministry::updateOrCreate(['slug' => $ministry['slug']], $ministry);
        }
    }
}
