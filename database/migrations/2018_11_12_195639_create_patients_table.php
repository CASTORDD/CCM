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
            $table->string('relative')->nullable();
            $table->string('relative_phone')->nullable();
            $table->string('relative_email')->nullable();
            $table->string('telephone');
            $table->string('telephone2')->nullable();
            $table->string('address');
            $table->string('ocupation');
            $table->string('ant_personal')->nullable();
            $table->string('ant_family')->nullable();
            $table->string('vacunas')->nullable();
            $table->string('tratamiento')->nullable();
            $table->string('cirugias')->nullable();
            $table->string('enf_cronics')->nullable();
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
