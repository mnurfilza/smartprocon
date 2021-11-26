<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOngkosPasangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ongkos_pasang', function (Blueprint $table) {
            $table->id();
            $table->string('id_kota',50)->foreign()->references('id')->on('citis');
            $table->string('kota',50);
            $table->string('provinsi',50);
            $table->string('type_barang')->foreign()->references('type_barang')->on('type_barang');
            $table->string('harga',50);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ongkos_pasang');
    }
}
