<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment_detail extends Model
{
    use HasFactory;

    protected $table = 'py_detail';

    protected $fillable = [
        'description',
        'qty',
        'payment_id',
        'unit',
        'unit_price',
        'amount'
    ];
}