<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class SpousesController extends Controller
{
    //
    public function create(Request $request){
    	$idx = $request->id;

    	return view('spouse.new', compact('idx'));
    }

    public function list($person_id){
    	$person = Person::find($person_id);
    	$spouses = $person->spouses;

    	return view('spouse.list',compact('spouses'));
    }
}
