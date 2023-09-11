<?php

namespace App\Models;
use App\Models\Produk;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoris';
    protected $fillable = [
        'nama_kategori',
        'foto',
    ];
    public function produk()
    {
    return $this->hasMany(Produk::class);
    }
}
