<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offerings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_customer');
            $table->string('customer');
            $table->string('object_id');
            $table->string('object');
            $table->string('number_of_floors',10)->nullable();
            $table->string('number_of_rooms',10)->nullable();
            $table->string('id_solution',10)->nullable();
            $table->string('solution',30)->nullable();
            $table->string('budget',30)->nullable();
            $table->foreign('id_customer')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offerings');
    }
}
