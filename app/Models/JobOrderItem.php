<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobOrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_order_id',
        'product_name',
        'quantity',
    ];

    // Relationships
    public function jobOrder()
    {
        return $this->belongsTo(JobOrder::class);
    }
}
