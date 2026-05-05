<?php

namespace Database\Seeders;

use App\Models\Testimony;
use Illuminate\Database\Seeder;

class TestimonySeeder extends Seeder
{
    public function run(): void
    {
        $testimonies = [
            ['name' => 'Mercy W.', 'role' => 'Member, Kasarani', 'quote' => 'I came for prayer and found a church family that kept checking on me long after the service ended.', 'avatar' => 'images/testimonials/avatar-mercy.svg', 'stars' => 5, 'position' => 1],
            ['name' => 'Daniel K.', 'role' => 'Youth Leader, Ruai', 'quote' => 'The teaching is clear, biblical, and practical. It helped me rebuild my walk with God step by step.', 'avatar' => 'images/testimonials/avatar-daniel.svg', 'stars' => 5, 'position' => 2],
            ['name' => 'Faith N.', 'role' => 'Parent, Eastlands', 'quote' => 'My children love church now, and our home feels lighter because prayer has become part of our week.', 'avatar' => 'images/testimonials/avatar-faith.svg', 'stars' => 5, 'position' => 3],
            ['name' => 'Michael O.', 'role' => 'Volunteer, Nairobi', 'quote' => 'The worship, the Word, and the kindness of the team gave me hope in a season that felt very heavy.', 'avatar' => 'images/testimonials/avatar-michael.svg', 'stars' => 5, 'position' => 4],
            ['name' => 'Esther M.', 'role' => 'Guest, Zimmerman', 'quote' => 'I visited once and stayed because the welcome felt genuine and the message spoke straight to my heart.', 'avatar' => 'images/testimonials/avatar-esther.svg', 'stars' => 5, 'position' => 5],
            ['name' => 'Brian T.', 'role' => 'Worship Team, Thika Road', 'quote' => 'Serving here restored my confidence. I now feel useful, seen, and grounded in purpose again.', 'avatar' => 'images/testimonials/avatar-brian.svg', 'stars' => 5, 'position' => 6],
        ];

        foreach ($testimonies as $i => $testimony) {
            Testimony::updateOrCreate(
                ['name' => $testimony['name'], 'role' => $testimony['role']],
                $testimony
            );
        }
    }
}
