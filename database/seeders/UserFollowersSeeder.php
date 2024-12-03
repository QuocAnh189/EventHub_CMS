<?php

namespace Database\Seeders;

use App\Domains\User\Model\User;
use App\Domains\User\Model\UserFollowers;
use Illuminate\Database\Seeder;

class UserFollowersSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $follower) {
            $followees = $users->where('id', '!=', $follower->id)->random(10);

            foreach ($followees as $followee) {
                UserFollowers::factory()->create([
                    'follower_id' => $follower->id,
                    'followee_id' => $followee->id,
                    'updated_at' => now()
                ]);
            }
        }
    }
}
