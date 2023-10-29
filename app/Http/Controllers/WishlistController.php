<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user(); // Gunakan fasad Auth untuk mendapatkan pengguna yang terautentikasi
        $wishlists = Wishlist::where('user_id', $user->id)->get(); // Fetch all wishlist items
        return view('layout', ['wishlists' => $wishlists]);
    }

    public function toggleWishlist(Request $request, Produk $product)
    {
        $user = Auth::user();
        $wishlist = Wishlist::where('user_id', $user->id)
            ->where('produk_id', $product->id)
            ->first();

        if ($wishlist) {
            $wishlist->delete();
            return back()->with('success', 'Produk dihapus dari wishlist');
        } else {
            $newWishlist = new Wishlist();
            $newWishlist->user_id = $user->id;
            $newWishlist->produk_id = $product->id;
            $newWishlist->save();
            return back()->with('success', 'Produk ditambahkan ke wishlist');
        }
    }
}
