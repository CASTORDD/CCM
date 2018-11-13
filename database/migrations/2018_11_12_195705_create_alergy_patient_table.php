<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlergyPatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alergy_patient', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alergy_id')->unsigned();
            $table->integer('patient_id')->unsigned();
            $table->timestamps();

            $table->foreign('alergy_id')->references('id')->on('alergies')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
                  
            $table->foreign('patient_id')->references('id')->on('patients')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alergy_patient');
    }
}
