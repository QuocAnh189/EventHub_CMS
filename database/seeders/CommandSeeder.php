<?php

namespace Database\Seeders;

use App\Domains\Command\Model\Command;
use Illuminate\Database\Seeder;

class CommandSeeder extends Seeder
{
    public function run(): void
    {
        $commands = ['Create', 'Read', 'Update', 'Delete'];
        foreach ($commands as $command) {
            Command::factory()->create([
                'name' => $command,
            ]);
        }
    }
}
