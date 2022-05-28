<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Po extends Model
{
    use HasFactory;

    protected $table = 'po';

    // protected $before_create = ['_format_submission'];

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'po_date',
        'po_no',
        'vendor',
        'warehouse',
        'currency',
        'remark',
        'sub_total',
        'discount',
        'tax',
        'total'
    ];

    public function po_detail()
    {
        return $this->hasMany(Po_detail::class);
    }

    public static function boot()
    {
        parent::boot();

        // self::creating(function($model){
        //     // ... code here
        // });

        // self::created(function($po){
        //     // ... code here

        //     return $po;
        //     exit;
        // });

        // self::saving(function($po){
        //     // ... code here

        //     return $po;
        //     exit;
        // });

        // self::saved(function($po){
        //     // ... code here

        //     return $po;
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
     * Get the po that owns the vendor.
     */
    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    /**
     * Get the po that owns the warehouse.
     */
    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
}