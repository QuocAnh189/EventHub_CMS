<?php

namespace Database\Factories;

use App\Domains\Event\Model\SubExpenses;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class SubExpensesFactory extends Factory
{
    protected $model = SubExpenses::class;

    public function definition(): array
    {
        return [
            'id' => Str::uuid(),
            'name' => fake()->words(2, true),
        ];
    }
}
