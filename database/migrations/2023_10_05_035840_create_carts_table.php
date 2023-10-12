<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->string('foto')->nullable();
            $table->string('nama_produk');
            $table->double('harga', 12, 2)->default(0);
            $table->unsignedBigInteger('user_id')->unsigned();
            // $table->unsignedBigInteger('produk_id')->unsigned();
            // $table->string('no_invoice');
            // $table->string('status_cart', ['belum checkout','checkout'])->default('belum checkout');// ada 2 yaitu cart, checkout
            // $table->string('status_pembayaran', ['sudah', 'belum'])->default('belum');// ada 2 sudah dan belum
            // $table->string('status_pengiriman', ['sudah', 'belum'])->default('belum');// ada 2 yaitu belum dan sudah
            // $table->string('no_resi')->nullable();
            // $table->string('ekspedisi')->nullable();
            // $table->double('ongkir', 12, 2)->default(0);
            $table->timestamps();

            // $table->foreign('produk_id')->references('id')->on('produk')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
