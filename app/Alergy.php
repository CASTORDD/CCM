<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alergy extends Model
{
    protected $fillable = [
    	'id',
    	'name',
    	'description',
    ];

    public function patients(){
    	return $this->belongsToMany(Patient::class);
    }
}
