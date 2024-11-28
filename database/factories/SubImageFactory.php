<?php

namespace Database\Factories;

use App\Domains\Event\Model\SubImage;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SubImageFactory extends Factory
{
    protected $model = SubImage::class;

    public function definition(): array
    {
        return [
            'id' => Str::uuid(),
            'image_url' => fake()->imageUrl(),
            'image_file_name' => fake()->word().'.png',
        ];
    }
}
