<?php

namespace App\Domains\Relation\UserRoles\Model;

use App\Domains\Role\Model\Role;
use App\Domains\User\Model\User;
use Database\Factories\UserRolesFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class UserRoles extends Model
{
    use HasFactory, SoftDeletes;

    public $incrementing = false;

    protected $keyType = 'string';
    
    protected $table = 'user_roles';

    protected $fillable = [
        'id',
        'user_id',
        'role_id',
    ];

    public static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }

    protected static function newFactory(): UserRolesFactory
    {
        return UserRolesFactory::new();
    }

    public function role(): BelongsTo
    {
        $this->belongsTo(Role::class);
    }

    public function user(): BelongsTo
    {
        $this->belongsTo(User::class);
    }
}
