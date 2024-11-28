<?php

namespace Database\Factories;

use App\Domains\Event\Model\Reason;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ReasonFactory extends Factory
{
    protected $model = Reason::class;

    public function definition(): array
    {
        return [
            'id' => Str::uuid(),
            'content' => fake()->realText(),
        ];
    }
}
