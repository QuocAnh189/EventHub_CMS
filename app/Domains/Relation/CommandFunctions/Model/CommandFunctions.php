<?php

namespace App\Domains\Relation\CommandFunctions\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandFunctions extends Model
{
    use HasFactory;

    protected $table = 'command_functions';

    protected $fillable = [];
}
