<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offering_details', function (Blueprint $table) {
            $table->id();
            $table->string('offering_id');
            $table->string('sku');
            $table->string('nama_produk');
            $table->integer('qty');
            $table->integer('harga');
            $table->integer('total');
            $table->integer('ongkir');
            $table->integer('ongkos_pasang');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offering_details');
    }
}
