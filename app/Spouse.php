<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spouse extends Model
{
    //
    protected $fillable = [
    	'first_name',
    	'middle_name',
    	'last_name',
    	'birthday',
    	'occupation',
    	'contact_no',
    	'address'
    ];

    public function person(){
        $this->belongsTo('App\Person');
    }
}
