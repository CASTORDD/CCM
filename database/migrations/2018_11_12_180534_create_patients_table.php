<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->string('gender');
            $table->string('birthday');
            $table->string('blood');
            $table->string('identification');
            $table->string('email')->unique();
            $table->string('relative');
            $table->string('relative_phone');
            $table->string('relative_email');
            $table->string('telephone');
            $table->string('telephone2');
            $table->string('address');
            $table->string('ocupation');
            $table->string('patient_id');
            $table->string('ant_personal');
            $table->string('ant_family');
            $table->string('alergy');
            $table->string('vacunas');
            $table->string('tratamiento');
            $table->string('cirugias');
            $table->string('enf_cronics');
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
        Schema::dropIfExists('patients');
    }
}
