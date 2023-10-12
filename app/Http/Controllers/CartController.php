<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Produk;

class CartController extends Controller
{
    public function index(){
        $keranjangs = Cart::with('produk', 'user')->paginate(5);
        return view('keranjang', compact('keranjangs'));
    }

    public function addCart(Produk $produk){

        $userId = Auth::id();

        Cart::create([
            'foto' => $produk->foto,
            'nama_produk' => $produk->nama_produk,
            'harga' => $produk->harga,
            'user_id' => $userId,
            // 'produk_id' => $produk->id,
        ]);

        return redirect()->back()->with(['success' => 'Produk berhasil ditambahkan ke keranjang']);;

    }

    public function delete($id){
        $keranjang = Cart::findOrFail($id);
        $keranjang->delete();

        return redirect()->back();
    }
}
