<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdukImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produk_id')->unsigned();
            $table->string('foto')->nullable();
            $table->timestamps();
        });

        Schema::table('produk_images', function($table)
{
    $table->foreign('produk_id')->references('id')->on('produk');
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk_images');
    }
}
