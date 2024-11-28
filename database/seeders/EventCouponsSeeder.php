<?php

namespace Database\Seeders;

use App\Domains\Coupon\Model\Coupon;
use App\Domains\Event\Model\Event;
use App\Domains\Relation\EventCoupons\Model\EventCoupons;
use Illuminate\Database\Seeder;

class EventCouponsSeeder extends Seeder
{
    public function run(): void
    {
        $events = Event::all();
        $coupons = Coupon::all();

        foreach ($coupons as $coupon) {
            $eventsArr = $events->where('user_id', $coupon->user_id);
            foreach ($eventsArr as $event) {
                EventCoupons::factory()->create([
                    'event_id' => $event->id,
                    'coupon_id' => $coupon->id,
                ]);
            }
        }
    }
}
