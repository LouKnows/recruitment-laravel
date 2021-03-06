<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class DependentsController extends Controller
{
    //
    public function create(Request $request){
    	$idx = $request->id;

    	return view('dependent.new', compact('idx'));
    }

    public function list($person_id){
    	$person = Person::find($person_id);
    	$dependents = $person->dependents;

    	return view('dependent.list',compact('dependents'));
    }
}
