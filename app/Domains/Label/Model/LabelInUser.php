<?php

namespace App\Domains\Label\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabelInUser extends Model
{
    use HasFactory;

    protected $table = 'label_in_user';

    protected $fillable = [];
}
