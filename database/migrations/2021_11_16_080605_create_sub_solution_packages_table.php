<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubSolutionPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_solution_packages', function (Blueprint $table) {
            $table->id();
            $table->string('id_solution_package');
            $table->string('package');
            $table->string('sku');
            $table->string('nama_barang');
            $table->string('jumlah');
            $table->boolean('ruangan')->default(false);
            $table->boolean('lantai')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_solution_packages');
    }
}
