<?php

namespace App;

use App\Appointment;
use App\Consult;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
     protected $fillable = [
    	'name',
    	'surname',
    	'gender',
    	'birthday',
    	'blood',
    	'identification',
    	'email',
    	'relative',
    	'relative_phone',
    	'relative_email',
    	'telephone',
    	'telephone2',
    	'address',
    	'ocupation',
    	'patient_id',
    	'ant_personal',
    	'ant_family',
    	'alergy',
    	'vacunas',
    	'tratamiento',
    	'cirugias',
    	'enf_cronics',
    ];

    public function appointments(){
    	return $this->hasMany(Appointment::class);
    }

    public function consults(){
    	return $this->hasMany(Consult::class);
    }
}
