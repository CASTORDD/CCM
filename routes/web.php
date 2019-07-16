<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'auth'], function () {
	Route::resource('dashboard', 'Dashboard\DashboardController');

	// Patient
	Route::resource('pacientes', 'Patient\PatientController');

	// Medics
	Route::resource('/medicos', 'Medic\MedicController');

	// Appointments
	Route::resource('citas', 'Appointment\AppointmentController');
	Route::get('citas/get', 'Appointment\AppointmentController@get_appointments');
	Route::get('citas/medic/{id}/get', 'Appointment\AppointmentController@get_appointments_medic');
	Route::get('citas/medic/{id}', 'Appointment\AppointmentController@index');
	Route::post('cita/create', 'Appointment\AppointmentController@store');
	Route::post('autocomplete', 'Appointment\AppointmentController@autocomplete')->name('autocomplete');

	// My Consults
	Route::get('/mis-consultas/{id}','MyConsults\MyConsultsController@index');

	// Consults Patient
	Route::resource('consultas-pacientes', 'ConsultPatient\ConsultPatientController');
	Route::get('/paciente/{id}/consulta', 'ConsultPatient\ConsultPatientController@create');

});

