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
            $table->string('sku', 36)->primary();
            $table->string('name');
            $table->string('categories_id')->foreign('categories_id"')->references('categories_id"')->on('categories');
            $table->string('description');
            $table->string('price');
            $table->string('quantity');
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
