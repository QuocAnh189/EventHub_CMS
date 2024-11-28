<?php

namespace Database\Seeders;

use App\Domains\Event\Model\Event;
use App\Domains\Event\Model\Expenses;
use Illuminate\Database\Seeder;

class ExpenseSeeder extends Seeder
{
    public function run(): void
    {
        $events = Event::all();
        foreach ($events as $event) {
            Expenses::factory(5)->create(
                [
                    'event_id' => $event->id,
                    'created_at' => fake()->dateTimeBetween($event->created_at, '1 hour'),
                ]
            );
        }
    }
}
