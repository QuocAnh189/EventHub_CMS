<?php

namespace App\Domains\Relation\EventCoupons\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventCoupons extends Model
{
    use HasFactory;

    protected $table = 'event_coupons';

    protected $fillable = [];
}
