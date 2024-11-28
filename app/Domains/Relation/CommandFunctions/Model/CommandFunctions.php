<?php

namespace App\Domains\Relation\CommandFunctions\Model;

use App\Domains\Command\Model\Command;
use App\Domains\Functions\Model\Functions;
use Database\Factories\CommandFunctionsFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class CommandFunctions extends Model
{
    use HasFactory, SoftDeletes;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $table = 'command_functions';

    protected $fillable = [
        'id',
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

    protected static function newFactory(): CommandFunctionsFactory
    {
        return CommandFunctionsFactory::new();
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
