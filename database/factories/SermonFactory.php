<?php

namespace Database\Factories;

use App\Models\Sermon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SermonFactory extends Factory
{
    protected $model = Sermon::class;

    public function definition(): array
    {
        $title = $this->faker->sentence(4);

        return [
            'slug' => Str::slug($title).'-'.$this->faker->unique()->randomNumber(4),
            'title' => rtrim($title, '.'),
            'speaker' => 'Apostle Humphrey Lijina',
            'category' => $this->faker->randomElement(['Sunday Service', 'Teaching Series', 'Prayer Night']),
            'excerpt' => $this->faker->sentence(15),
            'body' => $this->faker->paragraphs(3, true),
            'duration' => $this->faker->numberBetween(25, 60).' min',
            'published_at' => $this->faker->dateTimeBetween('-6 months', 'now'),
            'video_url' => null,
            'audio_url' => null,
            'thumbnail_path' => null,
        ];
    }

    public function unpublished(): static
    {
        return $this->state(['published_at' => null]);
    }
}
