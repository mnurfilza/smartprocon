<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolutionsPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solutions_packages', function (Blueprint $table) {
            $table->id();
            $table->string('id_solution')->foreign()->references('id')->on('solutions');
            $table->string('nama_solution');
            $table->string('id_object')->foreign()->references('id')->on('type_objects');
            $table->string('nama_object');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solutions_packages');
    }
}
