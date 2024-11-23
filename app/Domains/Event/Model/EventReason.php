<?php

namespace App\Domains\Event\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventReason extends Model
{
    use HasFactory;

    protected $table = 'event_reasons';

    protected $fillable = [];
}
