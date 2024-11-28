<?php

namespace App\Domains\Relation\Invitations\Model;

use Database\Factories\InvitationsFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Invitation extends Model
{
    use HasFactory, SoftDeletes;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $table = 'invitations';

    protected $fillable = [];

    public static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }

    protected static function newFactory(): InvitationsFactory
    {
        return InvitationsFactory::new();
    }
}
