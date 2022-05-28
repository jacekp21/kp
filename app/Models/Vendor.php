<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Observers\VendorObserver;

class Vendor extends Model
{
    use HasFactory;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at'; 

    protected $fillable = [
        'name',
        'address',
        'telpon',
        'email',
        'bank',
        'cabang',
        'nama_rekening',
        'no_rek',
        'created_by',
        'updated_by'
    ];

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::created(function ($vendor) {
            // 
            return response()->json($vendor);
        });
    }
}
