<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Payment extends Model
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
        'pay_date',
        'ap_no',
        'po_no',
        'vendor_id',
        'warehouse_id',
        'currency',
        'term',
        'sub_total',
        'discount',
        'tax',
        'total'
    ];

    public function payment_detail()
    {
        return $this->hasMany(payment_detail::class);
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