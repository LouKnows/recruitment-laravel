@if(count($contacts))
	@foreach($contacts as $idx => $contact)
		<fieldset>
			<legend>EMERGENCY CONTACTS {{ $idx + 1 }}</legend>
			<div class="contact-content">
				<label>Full Name</label>
				<input type="text" value="{{ $contact->full_name }}" disabled>
				<label>Contact Number</label>
				<input type="text" value="{{ $contact->contact_no }}" disabled>
				<label>Relationship</label>
				<input type="text" value="{{ $contact->relationship }}" disabled>
				<div class="col-span-2 grid-col-1">
					<label>Address</label>
					<input type="text" value="{{ $contact->address }}" disabled>
				</div>
			</div>
		</fieldset>
	@endforeach
@else
	<p class="col-span-2">No emergency contacts to display</p>
@endif