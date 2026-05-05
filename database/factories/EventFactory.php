<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition(): array
    {
        $title = $this->faker->sentence(3);
        $startsAt = $this->faker->dateTimeBetween('+1 day', '+3 months');

        return [
            'slug' => Str::slug($title).'-'.$this->faker->unique()->randomNumber(4),
            'title' => rtrim($title, '.'),
            'excerpt' => $this->faker->sentence(15),
            'body' => $this->faker->paragraphs(3, true),
            'starts_at' => $startsAt,
            'ends_at' => null,
            'location' => 'Main Sanctuary, Nairobi',
            'time_label' => null,
            'is_featured' => false,
        ];
    }

    public function past(): static
    {
        return $this->state(['starts_at' => $this->faker->dateTimeBetween('-3 months', '-1 day')]);
    }
}
