<?php

namespace Database\Factories;

use App\Domains\Relation\EventCoupons\Model\EventCoupons;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EventCouponsFactory extends Factory
{
    protected $model = EventCoupons::class;

    public function definition(): array
    {
        return [
            'id' => Str::uuid(),
        ];
    }
}
