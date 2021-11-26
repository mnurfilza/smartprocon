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
            $table->string('sku', 20)->primary();
            $table->string('nama',100);
            $table->string('type_barang',50)->foreign()->references('type_barang')->on('type_barang');
            $table->string('description');
            $table->string('harga_satuan',10);
            $table->string('garansi',2);
            $table->string('berat_barang',3);
            $table->string('createBy');
            $table->string('updateBy');
            $table->dateTime('create_at')->nullable();
            $table->dateTime('update_at')->nullable();

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
