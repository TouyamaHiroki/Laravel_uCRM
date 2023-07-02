<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Purchase;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'memo',
        'price',
        'is_sellings',
    ];

    public function purchases()
    {
        return $this->belongsTo(Purchase::class)->withPivot('quantity');
    }
}
