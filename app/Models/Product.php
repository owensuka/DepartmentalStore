<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    use HasFactory;

    protected $fillable = ['name', 'barcode', 'description'];

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($product) {
            $product->barcode = rand(100000000000, 999999999999);
        });
    }
}
