<div class="spouse_info grp" data-id="{{$idx}}">
	<span class="remove fa fa-times-circle" title="Remove"></span>
	<div class="spouse_fname">
		<div>First Name</div>
		<input type="text" name="spouses[{{$idx}}][first_name]">
	</div>
	<div class="spouse_mname">
		<div>Middle Name</div>
		<input type="text" name="spouses[{{$idx}}][middle_name]">
	</div>
	<div class="spouse_lname">
		<div>Last Name</div>
		<input type="text" name="spouses[{{$idx}}][last_name]">
	</div>
	<div class="spouse_bday">
		<div>Birthday</div>
		<input type="date" name="spouses[{{$idx}}][birthday]">
	</div>
	<div class="spouse_occupation">
		<div>Occupation</div>
		<input type="text" name="spouses[{{$idx}}][occupation]">
	</div>
	<div class="spouse_contact">
		<div>Contact Number</div>
		<input type="text" name="spouses[{{$idx}}][contact_no]">
	</div>
	<div class="spouse_address">
		<div>Address</div>
		<input type="text" name="spouses[{{$idx}}][address]">
	</div>
</div>