<?php

namespace Database\Seeders;

use App\Domains\Relation\UserRoles\Model\UserRoles;
use App\Domains\Role\Model\Role;
use App\Domains\User\Model\User;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();
        $roles = Role::all();

        foreach ($users as $user) {
            $role = $roles->random();
            $created_at = max($user->created_at, $role->created_at);
            UserRoles::factory(1)->create([
                'user_id' => $user->id,
                'role_id' => $role->id,
                'created_at' => $created_at,
                'updated_at' => $created_at
            ]);
        }
    }
}
