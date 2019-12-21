@if(count($spouses))
	@foreach($spouses as $idx => $spouse)
		<fieldset>
			<legend>SPOUSE {{ $idx + 1 }}</legend>
			<div class="spouse-content">
				<label>First Name</label>
				<input type="text" value="{{ $spouse->first_name }}" disabled>
				<label>Middle Name</label>
				<input type="text" value="{{ $spouse->middle_name }}" disabled>
				<label>Last Name</label>
				<input type="text" value="{{ $spouse->last_name }}" disabled>
				<label>Birthday</label>
				<input type="text" value="{{ $spouse->birthday }}" disabled>
				<label>Occupation</label>
				<input type="text" value="{{ $spouse->occupation }}" disabled>
				<label>Contact Number</label>
				<input type="text" value="{{ $spouse->contact_no }}" disabled>
				<div class="col-span-2 grid-col-1">
					<label>Address</label>
					<input type="text" value="{{ $spouse->address }}" disabled>
				</div>
			</div>
		</fieldset>
	@endforeach
@else
	<p class="col-span-2">No spouses to display</p>
@endif