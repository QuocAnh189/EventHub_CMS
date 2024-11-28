<?php

namespace Database\Seeders;

use App\Domains\Event\Model\Event;
use App\Domains\Relation\EventFavourites\Model\EventFavourites;
use App\Domains\User\Model\User;
use Illuminate\Database\Seeder;

class EventFavoritesSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();
        $events = Event::all();
        foreach ($users as $user) {
            $events->random(10)->each(function ($event) use ($user) {
                EventFavourites::factory()->create([
                    'user_id' => $user->id,
                    'event_id' => $event->id,
                ]);
            });
        }
    }
}
