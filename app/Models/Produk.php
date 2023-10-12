<?php

namespace App\Models;
use App\Models\Kategori;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $fillable = [
        'kategori_id',
        'nama_produk',
        'foto',
        'satuan',
        'harga',
        'stock',
    ];

    public function kategori() {
        return $this->belongsTo(Kategori::class,'kategori_id');
    }


    public function cart() {
        return $this->hasMany(Cart::class);
    }
}
