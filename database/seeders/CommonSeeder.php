<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommonSeeder extends Seeder
{
    public function run(): void
    {
        //
    }

    public function picsumUrl($width, $height, $number)
    {
        return "https://picsum.photos/{$width}/{$height}?random={$number}";
    }
}
