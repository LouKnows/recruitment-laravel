<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollegesController extends Controller
{
    //
    public function create(Request $request){
    	$idx = $request->id;

    	return view('college.new', compact('idx'));
    }
}
