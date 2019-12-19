<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    //
    protected $fillable = [
    	'school_name',
    	'graduated_date',
    	'degree'
    ];
}