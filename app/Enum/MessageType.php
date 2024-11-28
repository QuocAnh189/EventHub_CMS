<?php

namespace App\Enum;

enum MessageType: string
{
    case Image = 'Image';
    case Audio = 'Audio';
    case Video = 'Video';

    public static function toArray(): array
    {
        return array_column(self::cases(), 'value');
    }
}
