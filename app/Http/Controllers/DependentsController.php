<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DependentsController extends Controller
{
    //
    public function create(Request $request){
    	$idx = $request->id;

    	return view('dependent.new', compact('idx'));
    }
}
