<?php

namespace Database\Factories;

use App\Domains\User\Model\User;
use Database\Seeders\CommonSeeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        $create_date = fake()->dateTimeBetween('-3 years', '-2 years');
        $commonSeeder = new CommonSeeder();
        $imageUrl = $commonSeeder->picsumUrl(640, 480, fake()->numberBetween(1, 1000));

        return [
            'id' => Str::uuid(),
            'email' => fake()->unique()->safeEmail(),
            'avatar_url' => $imageUrl,
            'avatar_file_name' => fake()->word() . '.png',
            'full_name' => fake()->name(),
            'user_name' => fake()->unique()->userName(),
            'phone_number' => fake()->unique()->phoneNumber(),
            'dob' => fake()->date(),
            'password' => bcrypt('password'),
            'gender' => fake()->randomElement(['Male', 'Female', 'Other']),
            'bio' => fake()->paragraph(),
            'created_at' => $create_date,
            'updated_at' => $create_date,
        ];
    }
}
