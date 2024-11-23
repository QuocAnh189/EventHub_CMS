<?php

namespace App\Domains\Label\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabelInEvent extends Model
{
    use HasFactory;

    protected $table = 'label_in_events';

    protected $fillable = [];
}
