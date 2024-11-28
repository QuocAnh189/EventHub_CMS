<?php

namespace Database\Seeders;

use App\Domains\Command\Model\Command;
use App\Domains\Functions\Model\Functions;
use App\Domains\Relation\CommandFunctions\Model\CommandFunctions;
use Illuminate\Database\Seeder;

class CommandFunctionSeeder extends Seeder
{
    public function run(): void
    {
        $commands = Command::all();
        $functions = Functions::all();
        foreach ($commands as $command) {
            foreach ($functions as $function) {
                CommandFunctions::factory($function)->create([
                    'command_id' => $command->id,
                    'function_id' => $function->id,
                ]);
            }
        }
    }
}
