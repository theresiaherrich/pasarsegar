<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Models\Produk;
use App\Http\Controllers\KategoriController;
use App\Models\Kategori;

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

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::resource('/dataproduk', \App\Http\Controllers\ProdukController::class);
Route::get('/tambahproduk', [ProdukController::class, 'create'])->name('create');


//kategoriadmin
Route::resource('/datakategori', \App\Http\Controllers\KategoriController::class);
Route::get('/tambahkategori', [KategoriController::class, 'create'])->name('create');



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
