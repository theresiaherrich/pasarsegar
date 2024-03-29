<?php

use App\Models\About;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Contactus;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\ContactusController;

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




 Route::get('/about', function () {
     return view('about');
 });


Route::get('/keranjang', [\App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
Route::get('/keranjang/delete/{id}', [\App\Http\Controllers\CartController::class, 'delete'])->name('cart.delete');
Route::get('/keranjang/{produk}', [\App\Http\Controllers\CartController::class, 'addCart'])->name('add.cart');

 
Route::resource('/dataproduk', \App\Http\Controllers\ProdukController::class);

Route::get('/about', [\App\Http\Controllers\AboutController::class, 'indexo'])->name('indexo');
Route::resource('/aboutus', \App\Http\Controllers\AboutController::class);
Route::resource('/members', \App\Http\Controllers\MemberController::class);


//Admin
Route::group(['middleware' => ['auth', 'adminrole']], function(){
    Route::get('/admin', function () {
        return view('admin.index');
    });
    Route::resource('/datakategori', \App\Http\Controllers\KategoriController::class);
    Route::resource('/datacontact', \App\Http\Controllers\ContactusController::class);
    Route::resource('/datauser',\App\Http\Controllers\DatauserController::class);
});

Auth::routes();

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/produk', [\App\Http\Controllers\HomeController::class, 'produk'])->name('produk');

Route::get('/detail/{id}',[HomeController::class,'detail']);

Route::get('/contact', [App\Http\Controllers\ContactusController::class, 'index1'])->name('index1');
Route::get('/kategori/{id}',[HomeController::class,'kategori'])->name('kategori');

Route::get('/wishlist', [WishlistController::class, 'index']);
// Rute untuk menambahkan atau menghapus produk dari wishlist
Route::post('/addwishlist/{product}', [\App\Http\Controllers\WishlistController::class, 'toggleWishlist'])->name('wishlist.toggle');