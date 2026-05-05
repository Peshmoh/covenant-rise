<?php

namespace Database\Factories;

use App\Models\Ministry;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MinistryFactory extends Factory
{
    protected $model = Ministry::class;

    public function definition(): array
    {
        $name = $this->faker->words(2, true).' Ministry';

        return [
            'slug' => Str::slug($name).'-'.$this->faker->unique()->randomNumber(4),
            'name' => $name,
            'summary' => $this->faker->sentence(15),
            'body' => $this->faker->paragraphs(3, true),
            'icon' => 'fas fa-people-group',
            'position' => 0,
        ];
    }
}
