<?php

namespace Database\Seeders;

use App\Domains\Command\Model\Command;
use App\Domains\Functions\Model\Functions;
use App\Domains\Permission\Model\Permission;
use App\Domains\Role\Model\Role;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $roles = Role::all();
        $commands = Command::all();
        $functions = Functions::all();

        foreach ($roles as $role) {
            foreach ($commands as $command) {
                foreach ($functions as $function) {
                    Permission::factory()->create([
                        'role_id' => $role->id,
                        'command_id' => $command->id,
                        'function_id' => $function->id,
                    ]);
                }
            }
        }
    }
}
