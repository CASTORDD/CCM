<?php

use App\Alergy;
use App\Appointment;
use App\Consult;
use App\Patient;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        User::truncate();
        Alergy::truncate();
        Patient::truncate();
        Appointment::truncate();
        Consult::truncate();

        factory(User::class, 20)->create();
        factory(Alergy::class, 20)->create();
    	factory(App\Patient::class, 500)->create()->each(function(App\Patient $patient){
        	$patient->alergies()->attach([
        		rand(1,5),
        		rand(6,14),
        		rand(15,20),
        	]);
        });
    	factory(Appointment::class, 2000)->create();
    	factory(Consult::class, 1700)->create();
    }
}
