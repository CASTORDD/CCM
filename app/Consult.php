<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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

    public function patient(){    	
    	return $this->belongsTo(Patient::class);
    }

    public function appointment(){
    	return $this->belongsTo(Appointment::class);
    }
}
