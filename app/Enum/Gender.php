<?php

namespace App\Enum;

enum Gender: string
{
    case Male = 'Male';
    case Female = 'Female';
    case Other = 'Other';

    public static function toArray(): array
    {
        return array_column(self::cases(), 'value');
    }
}
