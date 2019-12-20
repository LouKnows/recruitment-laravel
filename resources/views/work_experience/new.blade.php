<div class="work_exp grp" data-id="{{$idx}}">
	<span class="remove fa fa-times-circle" title="Remove"></span>
	<div class="work_employer">
		<div>Employer/Company</div>
		<input type="text" name="work_exp[{{$idx}}][employer]">
	</div>
	<div class="work_role">
		<div>Role</div>
		<input type="text" name="work_exp[{{$idx}}][role_name]">
	</div>
	<div class="work_start">
		<div>Start Date</div>
		<input type="date" name="work_exp[{{$idx}}][start_date]">
	</div>
	<div class="work_end">
		<div>End Date</div>
		<input type="date" name="work_exp[{{$idx}}][end_date]">
	</div>
	<div class="work_type">
		<input type="checkbox" name="work_exp[{{$idx}}][is_bpo]">
		<label>BPO type of work?</label>
	</div>
	<div class="work_desc">
		<div>Role Description</div>
		<textarea name="work_exp[{{$idx}}][role_desc]"></textarea>
	</div>
</div>