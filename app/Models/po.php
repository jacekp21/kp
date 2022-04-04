<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Po extends Model
{
    use HasFactory;

    protected $table = 'po';

    public function po_detail()
    {
        return $this->hasMany(Po_detail::class);
    }
}