<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkExperiencesController extends Controller
{
    //
    public function create(Request $request){
    	$idx = $request->id;

    	return view('work_experience.new', compact('idx'));
    }
}
