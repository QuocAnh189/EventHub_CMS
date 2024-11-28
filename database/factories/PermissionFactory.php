<?php

namespace Database\Factories;

use App\Domains\Permission\Model\Permission;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PermissionFactory extends Factory
{
    protected $model = Permission::class;

    public function definition(): array
    {
        return [
            'id' => Str::uuid(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
