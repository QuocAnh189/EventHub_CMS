<?php

namespace App\Domains\Relation\UserRoles\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRoles extends Model
{
    use HasFactory;

    protected $table = 'user_roles';

    protected $fillable = [];
}
