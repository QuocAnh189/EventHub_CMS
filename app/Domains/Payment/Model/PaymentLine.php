<?php

namespace App\Domains\Payment\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentLine extends Model
{
    use HasFactory;

    protected $table = 'payment_lines';
    protected $fillable = [];
}
