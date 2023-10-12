<?php

namespace App\Models;
use App\Models\Produk;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';
    protected $fillable = [
        'foto',
        'nama_produk',
        'harga',
        'user_id',
        // 'produk_id',
    ];

    public function user() {
        return $this->belongsTo(User::class,'id');
    }

    public function produk(){
        return $this->belongsTo(Produk::class,'id');
    }



    // public function updatetotal($itemcart, $subtotal) {
    //     $this->attributes['subtotal'] = $itemcart->subtotal + $subtotal;
    //     $this->attributes['total'] = $itemcart->total + $subtotal;
    //     self::save();
    // }
}