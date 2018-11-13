<?php

use Faker\Generator as Faker;

use App\User;
use App\Patient;
use App\Appointment;
use App\Consult;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name'              => $faker->name,
        'surname'           => $faker->lastName,
        'birthday'          => $faker->date($format = 'Y-m-d', $max = 'now'),
        'email'             => $faker->unique()->safeEmail,
        'password'          => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'telephone'         => $faker->tollFreePhoneNumber,
        'address'           => $faker->address,
        'grade'             => $faker->jobTitle,
        'grade_title'       => $faker->jobTitle,
        'description'       => $faker->text($maxNbChars = 150),
        'image'             => '777.png',
        'role'              => $faker->randomElement($array = array ('ROLE_USER','ROLE_ADMIN')),
        'active'            => $faker->randomElement($array = array ('true','false')),
        'activity'          => $faker->randomElement($array = array ('MEDIC','FRONT','STAFF')),
        'email_verified_at' => now(),
        'remember_token'    => str_random(10),
    ];
});

$factory->define(App\Alergy::class, function (Faker $faker){
	return [
		'name'        => $faker->word,
		'description' => $faker->text($maxNbChars = 150),
	];
});

$factory->define(App\Patient::class, function (Faker $faker){
	return [
		'name' => $faker->name,
        'surname' => $faker->lastName,
		'gender' => $faker->randomElement($array= array ('Femenino', 'masculino')),
		'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
		'blood' => $faker->randomElement(['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-']),
		'identification' => $faker->isbn10,
		'email' => $faker->unique()->safeEmail,
		'relative' => $faker->streetName,
		'relative_phone' => $faker->tollFreePhoneNumber,
		'relative_email' => $faker->safeEmail,
		'telephone' => $faker->tollFreePhoneNumber,
		'telephone2' => $faker->tollFreePhoneNumber,
		'address' => $faker->address,
		'ocupation' => $faker->jobTitle,
		'ant_personal' => $faker->text($maxNbChars = 150),
		'ant_family' => $faker->text($maxNbChars = 150),
		'vacunas' => $faker->words($nb = 3, $asText = true),
		'tratamiento' => $faker->text($maxNbChars = 150),
		'cirugias' => $faker->words($nb = 3, $asText = true),
		'enf_cronics' => $faker->text($maxNbChars = 150),
	];
});


$factory->define(App\Appointment::class, function (Faker $faker){
	return [
		'patient_id' => Patient::inRandomOrder()->first()->id,
		'doctor'     => $faker->name,
		'date'       => $faker->dateTime($max = 'now', $timezone = null),
		'reason'     => $faker->text($maxNbChars = 150),
		'user_id'    => User::inRandomOrder()->first()->id,
		'plano'      => $faker->state,
	];
});

$factory->define(App\Consult::class, function (Faker $faker){
	return [
		'patient_id'     => Patient::inRandomOrder()->first()->id,
		'appointment_id' => Appointment::inRandomOrder()->first()->id,
		'press_art'      => $faker->numberBetween($min = 22, $max = 50),
		'pulse'          => $faker->numberBetween($min = 22, $max = 50),
		'rit_res'        => $faker->numberBetween($min = 22, $max = 50),
		'temperatura'    => $faker->numberBetween($min = 22, $max = 50),
		'altura'         => $faker->numberBetween($min = 40, $max = 150),
		'peso'           => $faker->numberBetween($min = 3, $max = 150),
		'analisis'       => $faker->text($maxNbChars = 150),
		'scout'          => $faker->text($maxNbChars = 150),
		'diagnostic'     => $faker->text($maxNbChars = 150),
		'tratamiento'    => $faker->text($maxNbChars = 150),
		'observations'   => $faker->text($maxNbChars = 150),
		'assistance'     => $faker->randomElement($array= array ('false', 'true')),
	];
});
