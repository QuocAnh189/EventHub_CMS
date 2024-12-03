<?php

namespace Database\Seeders;

use App\Domains\Conversation\Model\Conversation;
use App\Domains\Conversation\Model\Message;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    public function run(): void
    {
        $conversations = Conversation::all();
        foreach ($conversations as $conversation) {
            for ($i = 0; $i < 10; $i++) {
                if ($i % 2 == 0) {
                    Message::factory()->create([
                        'conversation_id' => $conversation->id,
                        'sender_id' => $conversation->user_id,
                        'receiver_id' => $conversation->organizer_id,
                        'created_at' => fake()->dateTimeBetween($conversation->created_at, 'now'),
                        'updated_at' => now()
                    ]);
                } else {
                    Message::factory()->create([
                        'conversation_id' => $conversation->id,
                        'sender_id' => $conversation->organizer_id,
                        'receiver_id' => $conversation->user_id,
                        'created_at' => fake()->dateTimeBetween($conversation->created_at, 'now'),
                        'updated_at' => now()
                    ]);
                }
            }
            $last_message = Message::all()->where('conversation_id', $conversation->id)->last();
            $conversation->last_message_id = $last_message->id;
            $conversation->save();
        }
    }
}
