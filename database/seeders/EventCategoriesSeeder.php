<?php

namespace Database\Seeders;

use App\Domains\Category\Model\Category;
use App\Domains\Event\Model\Event;
use App\Domains\Relation\EventCategories\Model\EventCategories;
use Illuminate\Database\Seeder;

class EventCategoriesSeeder extends Seeder
{
    public function run(): void
    {
        $events = Event::all();
        $categories = Category::all();

        $events->each(function ($event) use (&$categories) {
            EventCategories::factory()->create([
                'event_id' => $event->id,
                'category_id' => $categories->random()->id
            ]);
        });
    }
}
