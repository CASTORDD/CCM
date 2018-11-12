<?php

namespace App;

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
}
