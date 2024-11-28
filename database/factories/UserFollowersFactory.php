<?php

namespace Database\Factories;

use App\Domains\User\Model\UserFollowers;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFollowersFactory extends Factory
{
    protected $model = UserFollowers::class;

    public function definition(): array
    {
        return [
            'id' => Str::uuid(),
        ];
    }
}
