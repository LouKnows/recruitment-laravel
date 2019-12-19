<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmergencyContact extends Model
{
    //
    protected $fillable = [
    	'full_name',
    	'contact_no',
    	'relationship',
    	'address'
    ];
}
