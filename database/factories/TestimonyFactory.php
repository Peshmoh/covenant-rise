<?php

namespace Database\Factories;

use App\Models\Testimony;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestimonyFactory extends Factory
{
    protected $model = Testimony::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'role' => 'Member, Nairobi',
            'quote' => $this->faker->paragraph(2),
            'avatar' => 'images/testimonials/avatar-mercy.svg',
            'stars' => 5,
            'is_published' => true,
            'position' => 0,
        ];
    }

    public function unpublished(): static
    {
        return $this->state(['is_published' => false]);
    }
}
