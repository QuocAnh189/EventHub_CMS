<?php

namespace Database\Factories;

use App\Domains\Review\Model\Review;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ReviewFactory extends Factory
{
    protected $model = Review::class;

    public function definition(): array
    {
        return [
            'id' => Str::uuid(),
            'content' => fake()->realText(),
            'rate' => fake()->numberBetween(1, 5),
            'is_positive' => fake()->boolean(),
        ];
    }
}
