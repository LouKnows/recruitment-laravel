<form action="/test/update" method="POST">
	@csrf
	<input type="hidden" name="_method" value="PUT">
	<label>First Name:</label>
	<input type="text" name="Student[first_name]">
	<label>Last Name:</label>
	<input type="text" name="Student[last_name]">
	<input type="submit" name="submit" value="submit">
</form>