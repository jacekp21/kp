<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kerjapraktek extends Model
{
    use App\Models\Flight;
 
    $kerjapraktek = kerjapraktek::find(1);
    $kerjapraktek->delete();
}
