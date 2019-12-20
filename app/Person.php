<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
    	'first_name',
    	'middle_name',
    	'last_name',
    	'suffix_name',
    	'mobile_1',
    	'mobile_2',
    	'email',
    	'age',
    	'gender',
    	'birthday',
    	'civil_status',
    	'religion',
    	'weight',
    	'height',
    	'city_address',
    	'province_address',
    	'father_name',
    	'mother_name'
    ];

    //-- Relationships
    public function applicant(){
    	return $this->hasOne('App\Applicant');
    }

    public function employee(){
    	return $this->hasOne('App\Employee');
    }

    public function spouses(){
    	return $this->hasMany('App\Spouse');
    }

    public function emergency_contacts(){
    	return $this->hasMany('App\EmergencyContact');
    }

    public function dependents(){
    	return $this->hasMany('App\Dependent');
    }

    public function middle_schools(){
    	return $this->hasMany('App\MiddleSchool');
    }

    public function colleges(){
    	return $this->hasMany('App\College');
    }

    public function work_experiences(){
    	return $this->hasMany('App\WorkExperience');
    }

    //-- helper
    public function elem(){
        return $this->middle_schools()->where('education_type',1)->first();
    }

    public function high(){
        return $this->middle_schools()->where('education_type',2)->first();
    }

}
 