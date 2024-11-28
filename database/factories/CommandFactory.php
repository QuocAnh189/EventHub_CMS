<?php

namespace Database\Factories;

use App\Domains\Command\Model\Command;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CommandFactory extends Factory
{
    protected $model = Command::class;

    public function definition(): array
    {
        $created_date = fake()->dateTimeBetween('-3 years', '-2 years');
        return [
            'id' => Str::uuid(),
            'name' => $this->faker->randomElement(['Create', 'Read', 'Update', 'Delete']),
            'created_at' => $created_date,
            'updated_at' => $created_date,
        ];
    }
}
