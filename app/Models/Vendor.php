<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'address', 
        'telpon', 
        'email', 
        'created_by', 
        'updated_by'
    ];
}
