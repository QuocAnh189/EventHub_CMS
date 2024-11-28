<?php

namespace Database\Seeders;

use App\Domains\Event\Model\Event;
use App\Domains\User\Model\User;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        $users->each(function ($user) {
            Event::factory(20)->create([
                'user_id' => $user->id,
            ]);
        });
    }
}
