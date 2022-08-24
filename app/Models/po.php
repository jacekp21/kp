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
        'vendor_id',
        'warehouse_id',
        'currency',
        'remark',
        'sub_total',
        'discount',
        'tax',
        'total',
        'status'
    ];

    public function po_detail()
    {
        return $this->hasMany(Po_detail::class);
    }

    public static function boot()
    {
        parent::boot();
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