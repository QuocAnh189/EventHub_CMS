<?php

namespace App\Domains\Relation\EventCategories\Model;

use Database\Factories\EventCategoriesFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class EventCategories extends Model
{
    use HasFactory, SoftDeletes;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $table = 'event_categories';

    protected $fillable = [];

    public static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }

    protected static function newFactory(): EventCategoriesFactory
    {
        return EventCategoriesFactory::new();
    }
}
