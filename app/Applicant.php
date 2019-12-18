<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
	protected $fillable = [
    	'applied_for'
    ];
    //
    public function personal_detail(){
    	return $this->belongsTo('App\PersonalDetail');
    }
}
