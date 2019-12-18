<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalDetail extends Model
{
    protected $fillable = [
    	'first_name',
    	'middle_name',
    	'last_name'
    ];

    //
    public function applicant(){
    	return $this->hasOne('App\Applicant');
    }
}
