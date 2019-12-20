@extends('layout.recruitment')

@section('title', 'Resources > Applicant')

@section('content')
<div>
	<fieldset>
		<legend>Personal Data</legend>
		<p><strong>First Name:</strong> {{$person->first_name}}</p>
		<p><strong>Middle Name:</strong> {{$person->middle_name}}</p>
		<p><strong>Last Name:</strong> {{$person->last_name}}</p>
		<p><strong>Suffix Name:</strong> {{$person->suffix_name}}</p>
		<p><strong>Mobile Number:</strong> {{$person->mobile_1}}</p>
		<p><strong>Email:</strong> {{$person->email}}</p>
		<p><strong>Age:</strong> {{$person->age}}</p>
		<p><strong>Gender:</strong> {{$person->gender}}</p>
		<p><strong>City Address:</strong> {{$person->city_address}}</p>
		<p><strong>Provincial Address:</strong> {{$person->province_address}}</p>
		<p><strong>Weight:</strong> {{$person->weight}}</p>
		<p><strong>Height:</strong> {{$person->height}}</p>
		<p><strong>Civil Status:</strong> {{$person->civil_status}}</p>
		<p><strong>Birthday:</strong> {{$person->birthday}}</p>
		<p><strong>Religion:</strong> {{$person->religion}}</p>
		<p><strong>Father's Name:</strong> {{$person->father_name}}</p>
		<p><strong>Mother's Name:</strong> {{$person->mother_name}}</p>
	</fieldset>
	<fieldset>
		<legend>Spouse/s</legend>
		@foreach($person->spouses as $spouse)
			<p><strong> First Name:</strong> {{$spouse->first_name}}</p>
			<p><strong> Middle Name:</strong> {{$spouse->middle_name}}</p>
			<p><strong> Last Name:</strong> {{$spouse->last_name}}</p>
			<p><strong> Birthday:</strong> {{$spouse->birthday}}</p>
			<p><strong> Occupation:</strong> {{$spouse->occupation}}</p>
			<p><strong> Contact Number:</strong> {{$spouse->contact_no}}</p>
			<p><strong> Address:</strong> {{$spouse->address}}</p>
			<br>
			<br>
		@endforeach
	</fieldset>
	<fieldset>
		<legend>Emergency Contact/s</legend>
		@foreach($person->emergency_contacts as $contact)
			<p><strong> Full Name:</strong> {{$contact->full_name}}</p>
			<p><strong> Address:</strong> {{$contact->address}}</p>
			<p><strong> Contact Number:</strong> {{$contact->contact_no}}</p>
			<p><strong> Relationship:</strong> {{$contact->relationship}}</p>
			<br>
			<br>
		@endforeach
	</fieldset>
	<fieldset>
		<legend>Dependent/s</legend>
		@foreach($person->dependents as $dependent)
			<p><strong> Full Name:</strong> {{$dependent->full_name}}</p>
			<p><strong> Birthday:</strong> {{$dependent->birthday}}</p>
			<br>
			<br>
		@endforeach
	</fieldset>
	<fieldset>
		<legend>Education/s</legend>
			<h1>Elementary School</h1>
			<p><strong>School Name:</strong> {{$person->elem()->school_name}}</p>
			<p><strong>Graduated Date:</strong> {{$person->elem()->graduated_date}}</p>
			<h1>High School</h1>
			<p><strong>School Name:</strong> {{$person->high()->school_name}}</p>
			<p><strong>Graduated Date:</strong> {{$person->high()->graduated_date}}</p>
			<h1>College/s</h1>
			@foreach($person->colleges as $college)
				<p><strong>School Name:</strong> {{$college->school_name}}</p>
				<p><strong>Graduated Date:</strong> {{$college->graduated_date}}</p>
				<p><strong>Degree:</strong> {{$college->degree}}</p>
			@endforeach
	</fieldset>
	<fieldset>
		<legend>Work Experience/s</legend>
		@foreach($person->work_experiences as $work)
			<p><strong>Employer:</strong> {{$work->employer}}</p>
			<p><strong>Role:</strong> {{$work->role_name}}</p>
			<p><strong>Role Description:</strong> {{$work->role_desc}}</p>
			<p><strong>Start Date:</strong> {{$work->start_date}}</p>
			<p><strong>End Date:</strong> {{$work->end_date}}</p>
			<br>
			<br>
			<br>
		@endforeach
	</fieldset>
</div>
@endsection