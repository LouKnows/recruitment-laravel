<div class="work-content">
	@if(count($works))
		@foreach($works as $work)
		<label>Employer</label>
		<input type="text" value="{{ $work->employer }}" disabled>
		<label>Role</label>
		<input type="text" value="{{ $work->role_name }}" disabled>
		<label>Work Description</label>
		<input type="text" value="{{ $work->role_desc }}" disabled>
		<label>Start Date</label>
		<input type="text" value="{{ $work->start_date }}" disabled>
		<label>End Date</label>
		<input type="text" value="{{ $work->end_date }}" disabled>
		@endforeach
	@else
		<p class="col-span-2">No work experience to display</p>
	@endif
</div>