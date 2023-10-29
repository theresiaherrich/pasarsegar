<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kategori = Kategori::all();
        $produk = Produk::latest()->paginate('9');
        return view('index',compact('kategori','produk'));

    }
    public function produk()
    {
        $kategori = Kategori::all();
        $produk = Produk::latest()->get();


        return view('produk',compact('kategori','produk'));

    }
    public function detail($id)
    {
        $produk = Produk::findOrFail($id);
        $isInWishlist = Wishlist::where('produk_id', $produk->id)->exists();

        return view('detail-produk', compact('produk', 'isInWishlist'));

    }



}
