<?php

namespace Database\Factories;

use App\Domains\Relation\UserRoles\Model\UserRoles;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserRolesFactory extends Factory
{
    protected $model = UserRoles::class;

    public function definition(): array
    {
        return [
            'id' => Str::uuid(),
        ];
    }
}
