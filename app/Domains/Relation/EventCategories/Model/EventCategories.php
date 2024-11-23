<?php

namespace App\Domains\Relation\EventCategories\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventCategories extends Model
{
    use HasFactory;

    protected $table = 'event_categories';

    protected $fillable = [];
}
