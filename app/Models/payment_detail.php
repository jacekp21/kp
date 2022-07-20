<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_detail extends Model
{
    use HasFactory;

    protected $table = 'payment_detail';

    protected $fillable = [
        'description',
        'qty',
        'py_id',
        'unit',
        'unit_price',
        'amount'
    ];
}