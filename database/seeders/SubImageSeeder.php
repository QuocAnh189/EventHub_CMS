<?php

namespace Database\Seeders;

use App\Domains\Event\Model\Event;
use App\Domains\Event\Model\SubImage;
use Illuminate\Database\Seeder;

class SubImageSeeder extends Seeder
{
    public function run(): void
    {
        $events = Event::all();

        foreach ($events as $event) {
            for ($i = 0; $i <= 3; $i++) {
                SubImage::factory()->create([
                    'event_id' => $event->id,
                    'created_at' => $event->created_at,
                    'updated_at' => now()
                ]);
            }
        }
    }
}
