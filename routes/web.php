<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Models\Produk;
use App\Http\Controllers\KategoriController;
use App\Models\Kategori;
use App\Http\Controllers\ContactusController;
use App\Models\Contactus;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/hiddenhome', function () {
    return view('home');
});

<<<<<<< Updated upstream
Route::get('/produk/{kategori}', [HomeController::class,'produk'])->name('produk');
=======

>>>>>>> Stashed changes



Route::get('/about', function () {
    return view('about');
});

Route::get('/admin', function () {
    return view('admin.index');
});
Route::middleware('auth')->group(function () {
   
Route::get('/keranjang', [\App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
Route::get('/keranjang/delete/{id}', [\App\Http\Controllers\CartController::class, 'delete'])->name('cart.delete');
Route::get('/keranjang/{produk}', [\App\Http\Controllers\CartController::class, 'addCart'])->name('add.cart');

<<<<<<< Updated upstream
    });
 

>>>>>>> Stashed changes

Route::resource('/dataproduk', \App\Http\Controllers\ProdukController::class);

Route::resource('/aboutus', \App\Http\Controllers\AboutController::class);
Route::resource('/members', \App\Http\Controllers\MemberController::class);


//kategoriadmin
Route::resource('/datakategori', \App\Http\Controllers\KategoriController::class);

Route::resource('/datacontact', \App\Http\Controllers\ContactusController::class);

Route::resource('/datauser',\App\Http\Controllers\DatauserController::class);



Auth::routes();

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/detail/{id}',[HomeController::class,'detail']);

<<<<<<< Updated upstream
Route::get('/wishlist', [WishlistController::class, 'index']);
// Rute untuk menambahkan atau menghapus produk dari wishlist
Route::post('/addwishlist/{product}', [\App\Http\Controllers\WishlistController::class, 'toggleWishlist'])->name('wishlist.toggle');

=======
>>>>>>> Stashed changes
Route::get('/contact', [App\Http\Controllers\ContactusController::class, 'index1'])->name('index1');
