<?php

namespace App\Domains\Role\Model;

use App\Domains\Permission\Model\Permission;
use App\Domains\Relation\UserRoles\Model\UserRoles;
use Database\Factories\RoleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Role extends Model
{
    use HasFactory, SoftDeletes;

    public $incrementing = false;

    protected $keyType = 'string';
    
    protected $table = 'roles';

    protected $fillable = [];

    public static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }

    protected static function newFactory(): RoleFactory
    {
        return RoleFactory::new();
    }

    public function permissions(): HasMany
    {
        $this->hasMany(Permission::class);
    }

    public function user_roles(): HasMany
    {
        $this->hasMany(UserRoles::class);
    }
}
