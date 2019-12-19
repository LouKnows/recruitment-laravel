<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
	protected $fillable = [
    	'applied_for'
    ];

    // has one personal detail
    public function person(){
    	return $this->belongsTo('App\Person');
    }
}
