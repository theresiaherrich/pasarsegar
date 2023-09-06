<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $fillable = [
        'kategori_id',
        'user_id',
        'kode_produk',
        'nama_produk',
        'deskripsi_produk',
        'foto',
        'satuan',
        'harga',
        'stock',
    ];

    public function kategori() {
        return $this->belongsTo('App\Kategori', 'kategori_id');
    }

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function images() {
        return $this->hasMany('App\ProdukImage', 'produk_id');
    }
}
