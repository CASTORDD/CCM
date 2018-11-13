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
    	'ant_personal',
    	'ant_family',
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

    public function alergies(){
        return $this->belongsToMany(Alergy::class);
    }
}
