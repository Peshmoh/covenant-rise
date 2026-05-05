<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Admin user (Filament login)
        User::updateOrCreate(
            ['email' => 'perismumbi96@gmail.com'],
            [
                'name' => 'Peris Admin',
                'password' => bcrypt('12345678'),
                'is_admin' => 1,
            ]
        );

        // Seed core church system data
        $this->call([
            SermonSeeder::class,
            EventSeeder::class,
            MinistrySeeder::class,
            TestimonySeeder::class,
        ]);
    }
}