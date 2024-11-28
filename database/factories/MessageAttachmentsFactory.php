<?php

namespace Database\Factories;

use App\Domains\Conversation\Model\MessageAttachments;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MessageAttachmentsFactory extends Factory
{
    protected $model = MessageAttachments::class;

    public function definition(): array
    {
        return [
            'id' => Str::uuid(),
            'message_type' => fake()->randomElement(['Audio', 'Video', 'Image']),
            'message_url' => fake()->url,
            'message_file_name' => fake()->url
        ];
    }
}
