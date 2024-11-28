<?php

namespace Database\Factories;

use App\Domains\Event\Model\Expenses;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ExpensesFactory extends Factory
{
    protected $model = Expenses::class;

    public function definition(): array
    {
        return [
            'id' => Str::uuid(),
            'title' => fake()->words(2, true),
            'total' => rand(300, 500)
        ];
    }
}
