<?php

namespace Database\Factories;

use App\Domains\Event\Model\Event;
use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Seeders\CommonSeeder as commonSeeder;

class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition(): array
    {
        $startTime = fake()->dateTimeBetween('-1 month', 'now');
        $endTime = fake()->dateTimeBetween($startTime, $startTime->modify('+3 days'));
        $created_date = fake()->dateTimeBetween('-2 years', 'now');
        $commonSeeder = new CommonSeeder();
        $imageUrl = $commonSeeder->picsumUrl(640, 480, fake()->numberBetween(1, 1000));

        return [
            'id' => fake()->uuid(),
            'name' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'cover_image_url' => $imageUrl,
            'cover_image_file_name' => fake()->word() . '.jpg',
            'start_time' => $startTime->format('Y-m-d H:i:s'),
            'end_time' => $endTime->format('Y-m-d H:i:s'),
            'location' => fake()->address(),
            'path_location' => fake()->url(),
            'event_cycle_type' => fake()->randomElement(['Single', 'Recurring']),
            'event_payment_type' => fake()->randomElement(['Free', 'Paid']),
            'is_private' => fake()->boolean(),
            'created_at' => $created_date,
            'updated_at' => $created_date,
        ];
    }
}
