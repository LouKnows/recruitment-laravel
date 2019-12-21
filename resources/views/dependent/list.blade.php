@if(count($dependents))
	@foreach($dependents as $idx => $dependent)
		<fieldset>
			<legend>DEPENDENT {{ $idx + 1 }}</legend>
			<div class="dependent-content">
				<label>Full Name</label>
				<input type="text" value="{{ $dependent->full_name }}" disabled>
				<label>Birthday</label>
				<input type="text" value="{{ $dependent->birthday }}" disabled>
			</div>
		</fieldset>
	@endforeach
@else
	<p class="col-span-2">No dependents to display</p>
@endif