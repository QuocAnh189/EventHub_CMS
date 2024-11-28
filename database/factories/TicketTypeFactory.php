<?php

namespace Database\Factories;

use App\Domains\Event\Model\TicketType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TicketTypeFactory extends Factory
{
    protected $model = TicketType::class;

    public function definition(): array
    {
        return [
            'id' => Str::uuid(),
        ];
    }
}
