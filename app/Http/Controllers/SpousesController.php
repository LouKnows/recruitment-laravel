<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpousesController extends Controller
{
    //
    public function create(Request $request){
    	$idx = $request->id;

    	return view('spouse.new', compact('idx'));
    }
}
