<?php

namespace Database\Seeders;

use App\Domains\Role\Model\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::factory()->create(['name' => 'Admin']);
        Role::factory()->create(['name' => 'Organizer']);
        Role::factory()->create(['name' => 'User']);
    }
}
