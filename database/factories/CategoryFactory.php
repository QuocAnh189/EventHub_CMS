<?php

namespace Database\Factories;

use App\Domains\Category\Model\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Database\Seeders\CommonSeeder;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        $create_date = fake()->dateTimeBetween('-3 years', '-2 years');
        $commonSeeder = new CommonSeeder();
        $imageUrl = $commonSeeder->picsumUrl(640, 480, fake()->numberBetween(1, 1000));

        return [
            'id' => Str::uuid(),
            'name' => fake()->word(),
            'icon_image_url' => $imageUrl,
            'icon_image_file_name' => fake()->word() . '.png',
            'color' => fake()->hexColor(),
            'created_at' => $create_date,
            'updated_at' => $create_date,
        ];
    }
}
