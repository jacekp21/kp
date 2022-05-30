<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Po_detail extends Model
{
    use HasFactory;

    protected $table = 'ap_detail';

    protected $fillable = [
        'description',
        'qty',
        'unit',
        'unit_price',
        'amount'
    ];
}
