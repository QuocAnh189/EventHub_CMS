<?php

namespace Database\Factories;

use App\Domains\Conversation\Model\Message;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MessageFactory extends Factory
{
    protected $model = Message::class;

    public function definition(): array
    {
        return [
            'id' => Str::uuid(),
            'content' => fake()->realText(),
        ];
    }
}
