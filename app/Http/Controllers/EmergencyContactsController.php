<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmergencyContactsController extends Controller
{
    //
    public function create(Request $request){
    	$idx = $request->id;

    	return view('emergency_contact.new', compact('idx'));
    }
}
