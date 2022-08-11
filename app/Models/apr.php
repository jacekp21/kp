<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apr extends Model
{
    protected $table = 'apr';

    protected $fillable = [
        'vendor_id',
        'currency',
        'saldo_awal',
        'debit',
        'kredit',
        'saldo_akhir'
    ];
}

