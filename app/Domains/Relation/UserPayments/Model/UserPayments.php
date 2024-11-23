<?php

namespace App\Domains\Relation\UserPayments\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPayments extends Model
{
    use HasFactory;

    protected $table = 'user_payments';

    protected $fillable = [];
}
