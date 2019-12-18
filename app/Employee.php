<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    public function personal_details(){
    	return $this->hasOne('App\PersonalDetail');
    }
}
