<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Patient;
use App\Appointment;

class Consult extends Model
{
    protected $fillable = [
        'patient_id',
    	'appointment_id',
    	'press_art',
    	'pulse',
    	'rit_res',
    	'temperatura',
    	'altura',
    	'peso',
    	'analisis',
    	'scout',
    	'diagnostic',
    	'tratamiento',
    	'observations',
    	'assistance',
    ];
}
