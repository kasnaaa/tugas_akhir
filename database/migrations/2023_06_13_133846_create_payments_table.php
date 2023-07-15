<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->integer('id_order');
            $table->integer('jumlah');
            $table->string('provinsi', 50);
            $table->string('kabupaten', 50);
            $table->string('kecamatan', 50);
            $table->string('detail_alamat', 50);
            $table->string('status', 50);
            $table->string('no_rekening', 100);
            $table->string('atas_nama', 100);
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
        Schema::dropIfExists('payments');
    }
}
