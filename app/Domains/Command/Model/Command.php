<?php

namespace App\Domains\Command\Model;

use App\Domains\Permission\Model\Permission;
use App\Domains\Relation\CommandFunctions\Model\CommandFunctions;
use Database\Factories\CommandFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Command extends Model
{
    use HasFactory, SoftDeletes;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $table = 'commands';

    protected $fillable = [];

    public static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }

    protected static function newFactory(): CommandFactory
    {
        return CommandFactory::new();
    }

    public function command_functions(): HasMany
    {
        $this->hasMany(CommandFunctions::class);
    }

    public function permissions(): HasMany
    {
        $this->hasMany(Permission::class);
    }
}
