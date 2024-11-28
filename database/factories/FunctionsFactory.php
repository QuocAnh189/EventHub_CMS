<?php

namespace Database\Factories;

use App\Domains\Functions\Model\Functions;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FunctionsFactory extends Factory
{
    protected $model = Functions::class;

    public function definition(): array
    {
        $create_date = fake()->dateTimeBetween('-3 years', '-2 years');
        return [
            'id' => Str::uuid(),
            'name' => fake()->words(3, true),
            'url' => fake()->url(),
            'sort_order' => fake()->numberBetween(1, 10),
            'parent_id' => null,
            'created_at' => $create_date,
            'updated_at' => $create_date,
        ];
    }
}
