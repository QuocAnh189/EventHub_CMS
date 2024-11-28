<?php

namespace Database\Seeders;

use App\Domains\Coupon\Model\Coupon;
use App\Domains\User\Model\User;
use Illuminate\Database\Seeder;

class CouponSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            Coupon::factory(5)->create([
                'user_id' => $user->id,
            ]);
        }
    }
}
