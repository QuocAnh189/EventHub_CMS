<?php

namespace Database\Seeders;

use App\Domains\Event\Model\Event;
use App\Domains\Relation\Invitations\Model\Invitation;
use App\Domains\User\Model\User;
use Illuminate\Database\Seeder;

class InvitationSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();
        $events = Event::all();

        $users->each(function ($user) use ($users, $events) {
            $invitees = $users->where('id', '!=', $user->id)->random(3);

            $eventsToInvite = $events->random(2);

            foreach ($invitees as $invitee) {
                foreach ($eventsToInvite as $event) {
                    Invitation::factory()->create([
                        'inviter_id' => $user->id,
                        'invitee_id' => $invitee->id,
                        'event_id' => $event->id,
                    ]);
                }
            }
        });
    }
}
