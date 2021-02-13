<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class MovieFactory extends Factory
{
    protected $model = Movie::class;

    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'description' => $this->faker->text,
            'category' => $this->faker->name,
            'actors' => $this->faker->name,
            'rating' => $this->faker->randomFloat(2, 0, 10),
        ];
    }
}