<?php

namespace Database\Factories;

use App\Domains\Relation\EventFavourites\Model\EventFavourites;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EventFavouritesFactory extends Factory
{
    protected $model = EventFavourites::class;

    public function definition(): array
    {
        return [
            'id' => Str::uuid(),
        ];
    }
}
