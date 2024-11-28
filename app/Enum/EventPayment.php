<?php

namespace App\Enum;

enum EventPayment: string
{
    case Free = 'Free';
    case Paid = 'Paid';

    public static function toArray(): array
    {
        return array_column(self::cases(), 'value');
    }
}
