<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_number',
        'start_date',
        'end_date',
        'status',
    ];

    // Relationships
    public function jobOrderItems()
    {
        return $this->hasMany(JobOrderItem::class);
    }
}
