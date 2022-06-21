<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Py extends Model
{
    use HasFactory;

    protected $table = 'py';

    // protected $before_create = ['_format_submission'];

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'po_date',
        'po_no',
        'vendor_id',
        'warehouse_id',
        'currency',
        'total'
    ];

    public function py_detail()
    {
        return $this->hasMany(py_detail::class);
    }

    public static function boot()
    {
        parent::boot();

        // self::creating(function($model){
        //     // ... code here
        // });

        // self::created(function($ap){
        //     // ... code here

        //     return $py;
        //     exit;
        // });

        // self::saving(function($ap){
        //     // ... code here

        //     return $py;
        //     exit;
        // });

        // self::saved(function($ap){
        //     // ... code here

        //     return $py;
        //     exit;
        // });

        // self::updating(function($model){
        //     // ... code here
        // });

        // self::updated(function($model){
        //     // ... code here
        // });

        // self::deleting(function($model){
        //     // ... code here
        // });

        // self::deleted(function($model){
        //     // ... code here
        // });
    }

    /**
     * Get the ap that owns the vendor.
     */
    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    /**
     * Get the ap that owns the warehouse.
     */
    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
}