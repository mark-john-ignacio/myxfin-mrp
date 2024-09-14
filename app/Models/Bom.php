<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bom extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'bom_type',
        'quantity',
        'uom',
        'inventory_id',
    ];

    // Relationships
    public function inventory()
    {
        return $this->belongsTo(Inventory::class);
    }

    public function bomComponents()
    {
        return $this->hasMany(BomComponent::class);
    }
}
