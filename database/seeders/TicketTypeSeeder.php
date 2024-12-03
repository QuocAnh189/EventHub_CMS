<?php

namespace Database\Seeders;

use App\Domains\Event\Model\Event;
use App\Domains\Event\Model\TicketType;
use Illuminate\Database\Seeder;

class TicketTypeSeeder extends Seeder
{
    public function run(): void
    {
        $events = Event::all();
        foreach ($events as $event) {
            $ticketsName = ['Normal', 'Medium', 'Vip'];
            $quantities = [rand(400, 600), rand(200, 400), rand(100, 200)];
            $sales = [rand(0, $quantities[0]), rand(0, $quantities[1]), rand(0, $quantities[2])];
            $price = [rand(100, 200), rand(200, 300), rand(300, 400)];

            for ($i = 0; $i < count($ticketsName); $i++) {
                TicketType::factory()->create([
                    'name' => $ticketsName[$i],
                    'event_id' => $event->id,
                    'quantity' => $quantities[$i],
                    'sale' => $sales[$i],
                    'price' => $price[$i],
                    'created_at' => $event->created_at,
                    'updated_at' => now()
                ]);
            }
        }
    }
}
