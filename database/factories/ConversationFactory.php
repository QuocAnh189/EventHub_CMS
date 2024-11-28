<?php

namespace Database\Factories;

use App\Domains\Conversation\Model\Conversation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ConversationFactory extends Factory
{
    protected $model = Conversation::class;

    public function definition(): array
    {
        return [
            'id' => Str::uuid(),
        ];
    }
}
