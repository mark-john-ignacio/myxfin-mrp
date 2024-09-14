<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_name',
        'quantity',
        'uom',
        'item_type',
        'date_received',
    ];

    // Relationships
    public function boms()
    {
        return $this->hasMany(Bom::class);
    }
}
