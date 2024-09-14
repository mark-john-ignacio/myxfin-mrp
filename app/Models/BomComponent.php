<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BomComponent extends Model
{
    use HasFactory;

    protected $fillable = [
        'bom_id',
        'component_name',
        'quantity',
        'uom',
        'item_type',
    ];

    // Relationships
    public function bom()
    {
        return $this->belongsTo(Bom::class);
    }
}
