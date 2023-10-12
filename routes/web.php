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

Route::get('/produk', [HomeController::class,'produk']);



Route::get('/about', function () {
    return view('about');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/keranjang', [\App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
Route::get('/keranjang/delete/{id}', [\App\Http\Controllers\CartController::class, 'delete'])->name('cart.delete');
Route::get('/keranjang/{produk}', [\App\Http\Controllers\CartController::class, 'addCart'])->name('add.cart');


Route::resource('/dataproduk', \App\Http\Controllers\ProdukController::class);



//kategoriadmin
Route::resource('/datakategori', \App\Http\Controllers\KategoriController::class);

<<<<<<< Updated upstream
Route::resource('/datacontact', \App\Http\Controllers\ContactusController::class);
=======
Route::resource('/datauser',\App\Http\Controllers\DatauserController::class);
>>>>>>> Stashed changes


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/detail/{id}',[HomeController::class,'detail']);

Route::get('/contact', [App\Http\Controllers\ContactusController::class, 'index1'])->name('index1');
