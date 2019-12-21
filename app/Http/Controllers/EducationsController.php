<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class EducationsController extends Controller
{
    //
    public function list($person_id){
    	$person = Person::find($person_id);
    	$elem = $person->elem();
    	$high = $person->high();
    	$colleges = $person->colleges;

    	return view('education.list',compact('elem','high','colleges'));
    }
}
