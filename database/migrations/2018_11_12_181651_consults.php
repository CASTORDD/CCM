<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Consults extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consults', function (Blueprint $table){
            $table->increments('id');
            $table->integer('patient_id')->unsigned();
            $table->integer('appointment_id')->unsigned();
            $table->string('press_art');
            $table->string('pulse');
            $table->string('rit_res');
            $table->string('temperatura');
            $table->string('altura');
            $table->string('peso');
            $table->string('analisis', 500);
            $table->string('scout', 500);
            $table->string('diagnostic', 500);
            $table->string('tratamiento', 500);
            $table->string('observations', 500);
            $table->string('assistance');
            $table->timestamps();

            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('appointment_id')->references('id')->on('appointments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cosults');
    }
}
