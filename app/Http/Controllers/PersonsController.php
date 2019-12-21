<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PersonsController extends Controller
{
    // show person new form
	public function create(){
		return view('person.new');
	}

    // create a person
    public function store(Request $resource){
        $person = Person::create($resource->person);

        if(isset($resource->spouses))
            foreach ($resource->spouses as $spouse) {
                $person->spouses()->create($spouse);
            }

        if(isset($resource->emergency_contacts))
            foreach ($resource->emergency_contacts as $contact) {
                $person->emergency_contacts()->create($contact);
            }

        if(isset($resource->dependents))
            foreach ($resource->dependents as $dependent) {
                $person->dependents()->create($dependent);
            }

        if(isset($resource->schools))
            foreach ($resource->schools as $school) {
                $person->middle_schools()->create($school);
            }

        if(isset($resource->colleges))
            foreach ($resource->colleges as $college) {
                $person->colleges()->create($college);
            }

        if(isset($resource->work_exp))
            foreach ($resource->work_exp as $work) {
                $person->work_experiences()->create($work);
            }
        
        return redirect()->route('applicants.create' , ['id' => $person->id]);
    }

    public function list($id){
        $person = Person::find($id);

        return view('person.list',compact('person'));
    }

    
}
