<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number',
        'order_date',
        'order_type',
        'customer_name',
    ];

    // Relationships
    public function salesOrderItems()
    {
        return $this->hasMany(SalesOrderItem::class);
    }
}
