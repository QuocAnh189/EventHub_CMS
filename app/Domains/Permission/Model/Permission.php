<?php

namespace App\Domains\Permission\Model;

use App\Domains\Command\Model\Command;
use App\Domains\Functions\Model\Functions;
use App\Domains\Role\Model\Role;
use Database\Factories\PermissionFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Permission extends Model
{
    use HasFactory, SoftDeletes;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $table = 'permissions';

    protected $fillable = [
        'id',
        'role_id',
        'command_id',
        'function_id',
    ];

    public static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }

    protected static function newFactory(): PermissionFactory
    {
        return PermissionFactory::new();
    }

    public function role(): BelongsTo
    {
        $this->belongsTo(Role::class);
    }

    public function command(): BelongsTo
    {
        $this->belongsTo(Command::class);
    }

    public function functions(): BelongsTo
    {
        $this->belongsTo(Functions::class);
    }
}
