<?php

namespace App\Domains\Relation\EventFavourites\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventFavourites extends Model
{
    use HasFactory;

    protected $table = 'event_favourites';

    protected $fillable = [];
}
