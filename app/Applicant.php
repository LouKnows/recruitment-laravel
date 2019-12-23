<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Applicant extends Model
{
	protected $fillable = [
    	'applied_for'
    ];

    // has one personal detail
    public function person(){
    	return $this->belongsTo('App\Person');
    }

	public static function search($skey){
		return !empty($skey) ?
								DB::table('applicants')
						            ->join('people','applicants.id','=','people.id')
						            ->where('people.first_name','LIKE','%'.$skey.'%')
						            ->orWhere('people.last_name','LIKE','%'.$skey.'%')
						            ->orderBy('applicants.id','asc')
						            ->get()
			   				:
						   		DB::table('applicants')
					            ->join('people','applicants.id','=','people.id')
					            ->orderBy('applicants.id','asc')
					            ->get();
	}
}
