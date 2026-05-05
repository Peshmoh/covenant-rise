<?php

namespace Database\Factories;

use App\Models\PrayerRequest;
use Illuminate\Database\Eloquent\Factories\Factory;

class PrayerRequestFactory extends Factory
{
    protected $model = PrayerRequest::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'phone' => null,
            'subject' => $this->faker->sentence(4),
            'message' => $this->faker->paragraph(3),
            'is_confidential' => true,
            'handled_at' => null,
        ];
    }
}
