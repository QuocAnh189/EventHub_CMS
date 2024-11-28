<?php

namespace Database\Seeders;

use App\Domains\Category\Model\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Technology',
            'Education',
            'Health & Fitness',
            'Food & Beverage',
            'Fashion',
            'Travel',
            'Art & Design',
            'Music',
            'Business',
            'Sports',
            'Photography',
            'Gaming',
            'Science',
            'Movies & TV',
            'Books & Literature',
            'Home & Garden',
            'Pets & Animals',
            'Parenting',
            'Personal Development',
            'Finance & Investment'
        ];

        foreach ($categories as $category) {
            Category::factory()->create(['name' => $category]);
        }
    }
}
