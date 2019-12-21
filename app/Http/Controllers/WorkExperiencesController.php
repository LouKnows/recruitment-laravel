<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class WorkExperiencesController extends Controller
{
    //
    public function create(Request $request){
    	$idx = $request->id;

    	return view('work_experience.new', compact('idx'));
    }

    public function list($person_id){
    	$person = Person::find($person_id);
    	$works = $person->work_experiences;

    	return view('work_experience.list',compact('works'));
    }
}
