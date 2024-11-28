<?php

namespace Database\Factories;

use App\Domains\Coupon\Model\Coupon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CouponFactory extends Factory
{
    protected $model = Coupon::class;

    public function definition(): array
    {
        $create_date = fake()->dateTimeBetween('-1 years', 'now');
        return [
            'id' => Str::uuid(),
            'name' => fake()->words(2, true),
            'description' => fake()->sentence(),
            'min_quantity' => fake()->numberBetween(1, 100),
            'percentage_value' => fake()->numberBetween(1, 100),
            'real_value' => fake()->numberBetween(1, 100),
            'expire_date' => fake()->dateTimeBetween($create_date, 'now'),
            'created_at' => $create_date,
            'updated_at' => $create_date,
        ];
    }
}
