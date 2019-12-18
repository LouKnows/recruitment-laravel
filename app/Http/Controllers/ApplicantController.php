<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;
use App\PersonalDetail;

class ApplicantController extends Controller
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
    	dd($applicant->all());
    }
}
