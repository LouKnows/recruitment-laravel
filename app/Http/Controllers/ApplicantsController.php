<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;
use App\Person;


class ApplicantsController extends Controller
{
    // root route
    public function index(){
    	$applicants = Applicant::all();
    	return view('applicant.index',compact('applicants'));
    }

    // new applicant form
    public function create($person_id){
    	return view('applicant.new')->with('person_id',$person_id);
    }

    public function store(Request $request){
        $person = Person::find($request->person_id);
        $person->applicant()->create(['applied_for' => $request->applied_for]);

        return redirect()->route('root');
    }

    public function show(Applicant $applicant){
        $person = $applicant->person;

        return view('applicant.show',compact('person'));
    }

    public function show_layout($id){
        //$person = $applicant->person;
        $applicant = Applicant::find($id);
        $person = $applicant->person;

        return view('applicant.show-layout',compact('person'));
    }
}
