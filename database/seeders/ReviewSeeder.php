<?php

namespace Database\Seeders;

use App\Domains\Event\Model\Event;
use App\Domains\Review\Model\Review;
use App\Domains\User\Model\User;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();
        $events = Event::all();

        foreach ($users as $user) {
            $filteredEvents = $events->where('user_id', '!=', $user->id)->take(10);
            $filteredEvents->each(function ($event) use ($user) {
                Review::factory()->create([
                    'user_id' => $user->id,
                    'event_id' => $event->id,
                    'created_at' => fake()->dateTimeBetween($event->created_at, 'now'),
                ]);
            });
        }
    }
}
