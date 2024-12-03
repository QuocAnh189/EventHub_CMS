<?php

namespace Database\Seeders;

use App\Domains\Conversation\Model\Message;
use App\Domains\Conversation\Model\MessageAttachments;
use Illuminate\Database\Seeder;

class MessageAttachmentsSeeder extends Seeder
{
    public function run(): void
    {
        $messages = Message::all()->shuffle()->random(100);

        foreach ($messages as $message) {
            $numberAttachments = rand(1, 3);
            for ($i = 0; $i < $numberAttachments; $i++) {
                MessageAttachments::factory()->create([
                    'message_id' => $message->id,
                    'created_at' => $message->created_at,
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
