<?php

namespace Database\Factories;

use App\Domains\Relation\EventCategories\Model\EventCategories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EventCategoriesFactory extends Factory
{
    protected $model = EventCategories::class;

    public function definition(): array
    {
        return [
            'id' => Str::uuid(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
