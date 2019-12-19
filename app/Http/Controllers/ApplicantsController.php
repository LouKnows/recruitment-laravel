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
    public function create(){
    	return view('applicant.create');
    }

    // create an applicant
    public function store(Request $applicant){
    	//$personal_details = PersonalDetail::create($applicant->personal_detail);
    	//$personal_details->applicant()->create($applicant->applicant);
    	//dd($applicant->all());
        $person = Person::create($applicant->person);

        foreach ($applicant->spouses as $spouse) {
            $person->spouses()->create($spouse);
        }

        foreach ($applicant->emergency_contacts as $contact) {
            $person->emergency_contacts()->create($contact);
        }

        foreach ($applicant->dependents as $dependent) {
            $person->dependents()->create($dependent);
        }

        foreach ($applicant->schools as $school) {
            $person->middle_schools()->create($school);
        }

        foreach ($applicant->colleges as $college) {
            $person->colleges()->create($college);
        }

        foreach ($applicant->work_exp as $work) {
            $person->work_experiences()->create($work);
        }
        
        return redirect()->route('applicants.index');
    }
}
