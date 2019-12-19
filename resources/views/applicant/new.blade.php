@extends('layout.recruitment')

@section('title', 'Resources > Applicant')

@section('content')
	<div class="card">
		<form action="/applicants" method="post">
			{{ csrf_field() }}
			<input type="hidden" name="person_id" value="{{$person_id}}">
			<label>Apply For:</label>
			<div>
				<select name="applied_for">
					<option value="tester">Tester</option>
					<option value="PT Non-voice">PT Non-voice</option>
					<option value="FT Non-voice">FT Non-voice</option>
				</select>
			</div>
			<div>
				<input type="submit" name="submit" value="Submit">
			</div>
		</form>
	</div>
@endsection