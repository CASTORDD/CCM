<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable =[
    	'patient_id',
        'title', // patient Name
    	'doctor',
    	'date',
    	'reason',
    	'user_id',
    	'plan',
    ];

    public function patient(){
    	return $this->belongsTo(Patient::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    // Query scope
    public function scopeMyConsults($query, $date)
    {
        if($date){
            return $query->where('date', 'LIKE', "%$date%");
        }

    }
}
