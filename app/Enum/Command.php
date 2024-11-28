<?php

namespace App\Enum;

enum Command: string
{
    case Creat = 'Creat';
    case Read = 'Read';
    case Update = 'Update';
    case Delete = 'Delete';

    public static function toArray(): array
    {
        return array_column(self::cases(), 'value');
    }
}
