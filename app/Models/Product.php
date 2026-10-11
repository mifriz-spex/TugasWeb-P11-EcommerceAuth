<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
    protected $guarded = [];

    // Relasi
    public function category() { return $this->belongsTo(Category::class); }
    public function reviews() { return $this->hasMany(Review::class); }

    // Scope (Syarat tugas): Buat nampilin produk yang stoknya di bawah 10
    public function scopeLowStock($query) {
        return $query->where('stock', '<', 10);
    }
}
