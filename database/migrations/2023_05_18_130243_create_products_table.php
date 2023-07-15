<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('id_kategori');
            $table->integer('id_subkategori');
            $table->string('nama_produk', 100);
            $table->text('deskripsi');
            $table->string('gambar');
            $table->integer('harga');
            $table->integer('diskon');
            $table->string('bahan', 100);
            $table->string('tags', 50);
            $table->string('ukuran', 50);
            $table->string('warna', 50);
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
        Schema::dropIfExists('products');
    }
}
