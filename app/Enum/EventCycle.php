<?php

namespace App\Enum;

enum EventCycle: string
{
    case Single = 'Single';
    case Recurring = 'Recurring';

    public static function toArray(): array
    {
        return array_column(self::cases(), 'value');
    }
}
