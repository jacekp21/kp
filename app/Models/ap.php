<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Ap extends Model
{
    use HasFactory;

    protected $table = 'ap';

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

    public function ap_detail()
    {
        return $this->hasMany(ap_detail::class);
    }

    public static function boot()
    {
        parent::boot();

        // self::creating(function($model){
        //     // ... code here
        // });

        // self::created(function($ap){
        //     // ... code here

        //     return $ap;
        //     exit;
        // });

        // self::saving(function($ap){
        //     // ... code here

        //     return $ap;
        //     exit;
        // });

        // self::saved(function($ap){
        //     // ... code here

        //     return $ap;
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