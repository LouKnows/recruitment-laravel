<div class="emergency_contact" data-id="{{$idx}}">
	<div class="emergency_fullname">
		<div>Full Name</div>
		<input type="text" name="emergency_contacts[{{$idx}}][full_name]">
	</div>
	<div class="emergency_number">
		<div>Contact Number</div>
		<input type="text" name="emergency_contacts[{{$idx}}][contact_no]">
	</div>
	<div class="emergency_relation">
		<div>Relationship</div>
		<input type="text" name="emergency_contacts[{{$idx}}][relationship]">
	</div>
	<div class="emergency_address">
		<div>Address</div>
		<input type="text" name="emergency_contacts[{{$idx}}][address]">
	</div>
</div>