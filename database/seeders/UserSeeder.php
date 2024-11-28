<?php

namespace Database\Seeders;

use App\Domains\User\Model\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(20)->create();
    }
}
