<?php

namespace Database\Seeders;

use App\Domains\Functions\Model\Functions;
use Illuminate\Database\Seeder;

class FunctionSeeder extends Seeder
{
    public function run(): void
    {
        Functions::factory(5)->create();
    }
}
