<?php

namespace Database\Factories;

use App\Domains\Event\Model\SubImage;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Database\Seeders\CommonSeeder;

class SubImageFactory extends Factory
{
    protected $model = SubImage::class;

    public function definition(): array
    {
        $commonSeeder = new CommonSeeder();
        $imageUrl = $commonSeeder->picsumUrl(640, 480, fake()->numberBetween(1, 1000));

        return [
            'id' => Str::uuid(),
            'image_url' => $imageUrl,
            'image_file_name' => fake()->word() . '.png',
        ];
    }
}
