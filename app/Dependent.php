<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependent extends Model
{
    //
    protected $fillable = [
    	'full_name',
    	'birthday'
    ];
}
