<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Patient;
use App\User;

class Appointment extends Model
{
    protected $fillable =[
    	'patient_id',
    	'doctor',
    	'date',
    	'reason',
    	'user_id',
    	'plano',
    ];

    public function patient(){
    	return $this->belongsTo(Patient::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
