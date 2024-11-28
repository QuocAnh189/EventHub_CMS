<?php

namespace App\Enum;

enum Role: string
{
    case Admin = 'Admin';
    case Organizer = 'Organizer';
    case User = 'User';

    public static function toArray(): array
    {
        return array_column(self::cases(), 'value');
    }
}
