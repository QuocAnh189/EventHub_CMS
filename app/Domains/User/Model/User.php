<?php

namespace App\Domains\User\Model;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Domains\Relation\UserRoles\Model\UserRoles;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }

    protected static function newFactory(): UserFactory
    {
        return UserFactory::new();
    }

    public function user_roles(): HasMany
    {
        $this->hasMany(UserRoles::class);
    }

    public function followers(): hasMany
    {
        $this->hasMany(User::class);
    }

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
