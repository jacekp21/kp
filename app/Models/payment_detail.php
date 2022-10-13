<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Py_detail extends Model
{
    use HasFactory;

    protected $table = 'py_detail';

    protected $fillable = [
        'description',
        'qty',
        'unit',
        'unit_price',
        'amount'
    ];
}