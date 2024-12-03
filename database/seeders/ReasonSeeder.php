<?php

namespace Database\Seeders;

use App\Domains\Event\Model\Event;
use App\Domains\Event\Model\Reason;
use Illuminate\Database\Seeder;

class ReasonSeeder extends Seeder
{
    public function run(): void
    {
        $events = Event::all();

        foreach ($events as $event) {
            for ($i = 0; $i <= 2; $i++) {
                Reason::factory()->create([
                    'event_id' => $event->id,
                    'created_at' => $event->created_at,
                    'updated_at' => now()
                ]);
            }
        }
    }
}
