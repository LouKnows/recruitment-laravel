<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    //
    protected $fillable = [
    	'employer',
    	'role_name',
    	'start_date',
    	'end_date',
    	'role_desc'
    ];
}
