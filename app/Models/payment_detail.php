<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_detail extends Model
{
    use HasFactory;

    protected $table = 'py_detail';

    protected $fillable = [
        'description',
        'qty',
        'py_id',
        'payment_id',
        'unit',
        'unit_price',
        'amount'
    ];
}