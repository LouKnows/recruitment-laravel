<div class="education-content">
	<h3 class="col-span-2">Elementary School</h3>
	<label>School Name</label>
	<input type="text" value="{{ $elem->school_name }}" disabled>
	<label>Graduated Date</label>
	<input type="text" value="{{ $elem->graduated_date }}" disabled>
	<h3 class="col-span-2">High School</h3>
	<label>School Name</label>
	<input type="text" value="{{ $high->school_name }}" disabled>
	<label>Graduated Date</label>
	<input type="text" value="{{ $high->graduated_date }}" disabled>
	<h3 class="col-span-2">College's</h3>
	@if(count($colleges))
		@foreach($colleges as $college)
			<label>School Name</label>
			<input type="text" value="{{ $college->school_name }}" disabled>
			<label>Graduated Date</label>
			<input type="text" value="{{ $college->graduated_date }}" disabled>
			<label>Degree</label>
			<input type="text" value="{{ $college->degree }}" disabled>
		@endforeach
	@else
		<p class="col-span-2">No colleges to display</p>
	@endif
</div>