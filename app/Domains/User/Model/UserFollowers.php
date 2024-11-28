<?php

namespace App\Domains\User\Model;

use Database\Factories\UserFollowersFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class UserFollowers extends Model
{
    use HasFactory, SoftDeletes;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $table = 'user_followers';

    protected $fillable = [];

    public static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }

    protected static function newFactory(): UserFollowersFactory
    {
        return UserFollowersFactory::new();
    }

    public function follower(): BelongsTo
    {
        $this->belongsTo(User::class);
    }

    public function followee(): BelongsTo
    {
        $this->belongsTo(User::class);
    }
}
