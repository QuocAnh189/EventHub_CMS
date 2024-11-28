<?php

namespace Database\Factories;

use App\Domains\Relation\CommandFunctions\Model\CommandFunctions;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CommandFunctionsFactory extends Factory
{
    protected $model = CommandFunctions::class;

    public function definition(): array
    {
        return [
            'id' => Str::uuid(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
