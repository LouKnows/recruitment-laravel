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

    public function search($skey=''){
        $persons = Applicant::search($skey);

        return view('applicant.search',compact('persons'));
    }

    public function test(){
        //$person = $applicant->person;
        $person = Person::find(1);

        dd($person);
    }
}
