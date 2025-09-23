<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'status',
        'barcode',
        'weight',
        'color',
        'marca'
    ];

    public function inventory()
    {
        return $this->hasOne(Inventory::class);
    }
}
