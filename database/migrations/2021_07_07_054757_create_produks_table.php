<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->string('id');
            $table->integer('user_id')->unsigned();
            $table->string('nama_produk');
            $table->string('kategori_produk');
            $table->string('slug_produk');
            $table->string('size_produk');
            $table->text('deskripsi_produk');
            $table->string('foto')->nullable();//banner produknya
            $table->double('qty', 12, 2)->default(0);
            $table->double('harga', 12, 2)->default(0);
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
    }
}