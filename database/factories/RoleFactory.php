<?php

namespace Database\Factories;

use App\Domains\Role\Model\Role;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RoleFactory extends Factory
{
    protected $model = Role::class;

    public function definition(): array
    {
        $create_date = fake()->dateTimeBetween('-4 years', '-3 years');
        return [
            'id' => Str::uuid(),
            'name' => fake()->unique()->randomElement(['Admin', 'Organizer', 'User']),
            'created_at' => $create_date,
            'updated_at' => $create_date,
        ];
    }
}
