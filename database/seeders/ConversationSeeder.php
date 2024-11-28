<?php

namespace Database\Seeders;

use App\Domains\Conversation\Model\Conversation;
use App\Domains\Event\Model\Event;
use App\Domains\User\Model\User;
use Illuminate\Database\Seeder;

class ConversationSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();
        $events = Event::all()->shuffle();

        foreach ($users as $user) {
            $filteredEvents = $events->where('user_id', '!=', $user->id)->take(10);
            $filteredEvents->each(function ($event) use ($user) {
                Conversation::factory()->create([
                    'user_id' => $user->id,
                    'event_id' => $event->id,
                    'organizer_id' => $event->user_id,
                    'last_message_id' => null,
                    'created_at' => fake()->dateTimeBetween($event->created_at, 'now'),
                ]);
            });
        }
    }
}
