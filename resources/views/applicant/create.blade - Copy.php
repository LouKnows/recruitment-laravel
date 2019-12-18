@extends('layout.recruitment')

@section('title', 'Resources > New Applicant')

@section('content')
<div class="content">
	<div class="container">
		<a class="back" data-for="new-applicant" href="/">Back to applicant list</a>
		<div class="resources">
			<div class="sidenav card">
				<div><a class="link" href="/">Applicants</a></div>
				<div><a href="#">Employees</a></div>
			</div>
			<form action="/applicants" method="post">
				{{ csrf_field() }}
				<div class="applicant_info">
					<div class="card info">
						<h3>PERSONAL DATA</h3>
						<div class="personal_data">
							<div class="first_name">
								<div>First Name</div>
								<input type="text" name="personal_detail[first_name]">
							</div>
							<div class="middle_name">
								<div>Middle Name</div>
								<input type="text" name="personal_detail[middle_name]">
							</div>
							<div class="last_name">
								<div>Last Name</div>
								<input type="text" name="personal_detail[last_name]">
							</div>
							<div class="suffix_name">
								<div>Suffix (eg. Jr., Sr.)</div>
								<input type="text" name="">
							</div>
							<div class="mobile_1">
								<div>Mobile 1</div>
								<input type="text" name="">
							</div>
							<div class="mobile_2">
								<div>Mobile 2</div>
								<input type="text" name="">
							</div>
							<div class="email">
								<div>Email</div>
								<input type="email" name="">
							</div>
							<div class="age_gender">
								<div class="age">
									<div>Age</div>
									<input type="number" name="">
								</div>
								<div class="gender">
									<div>Gender</div>
									<select>
										<option>Male</option>
										<option>Female</option>
									</select>
								</div>
							</div>
							<div class="birthday">
								<div>Birthday</div>
								<input type="date" name="">
							</div>
							<div class="civil_status">
								<div>Civil Status</div>
								<select>
									<option>Single</option>
									<option>Married</option>
								</select>
							</div>
							<div class="religion">
								<div>Religion</div>
								<input type="text" name="">
							</div>
							<div class="weight_height">
								<div class="weight">
									<div>Weight</div>
									<input type="text" name="">
								</div>
								<div class="height">
									<div>Height</div>
									<input type="text" name="">
								</div>
							</div>
							<div class="city_address">
								<div>City Address</div>
								<input type="text" name="">
							</div>
							<div class="province_address">
								<div>Provincial Address</div>
								<input type="text" name="">
							</div>
							<div class="father_name">
								<label>Father's Name</label>
								<input type="text" name="">
							</div>
							<div class="mother_name">
								<label>Mother's Name</label>
								<input type="text" name="">
							</div>
						</div>
					</div>
					<!-- end of personal data -->
					<div class="card info">
						<h3>SPOUSE/S INFO</h3>
						<div class="spouse_info">
							<div class="spouse_fname">
								<div>First Name</div>
								<input type="text" name="">
							</div>
							<div class="spouse_mname">
								<div>Middle Name</div>
								<input type="text" name="">
							</div>
							<div class="spouse_lname">
								<div>Last Name</div>
								<input type="text" name="">
							</div>
							<div class="spouse_bday">
								<div>Birthday</div>
								<input type="date" name="">
							</div>
							<div class="spouse_occupation">
								<div>Occupation</div>
								<input type="text" name="">
							</div>
							<div class="spouse_contact">
								<div>Contact Number</div>
								<input type="text" name="">
							</div>
							<div class="spouse_address">
								<div>Address</div>
								<input type="text" name="">
							</div>
						</div>
						<button class="btn btn-more btn-form">+ Add More Spouse</button>
					</div>
					<!-- end of spouse info -->
					<div class="card info">
						<h3>EMERGENCY CONTACT/S</h3>
						<div class="emergency_contact">
							<div class="emergency_fullname">
								<div>Full Name</div>
								<input type="text" name="">
							</div>
							<div class="emergency_number">
								<div>Contact Number</div>
								<input type="text" name="">
							</div>
							<div class="emergency_relation">
								<div>Relationship</div>
								<input type="text" name="">
							</div>
							<div class="emergency_address">
								<div>Address</div>
								<input type="text" name="">
							</div>
						</div>
						<button class="btn btn-more btn-form">+ Add More Contact</button>
					</div>
					<!-- end of emergency contact -->
					<div class="card info">
						<h3>DEPENDENT/S</h3>
						<div class="dependents">
							<div class="dependent_fullname">
								<div>Full Name</div>
								<input type="text" name="">
							</div>
							<div class="dependent_bday">
								<div>Birthday</div>
								<input type="date" name="">
							</div>
						</div>
						<button class="btn btn-more btn-form">+ Add More Dependent</button>
					</div>
					<!-- end of dependents -->
					<div class="card info">
						<h3>EDUCATION/S</h3>
						<div class="educations">						
							<h3>Elementary School</h3>
							<div class="elem">	
								<div class="edu_elem_school">
									<div>School Name</div>
									<input type="text" name="">
								</div>
								<div class="edu_elem_year">
									<div>Year Graduated</div>
									<input type="text" name="">
								</div>
							</div>
							<h3>High School</h3>
							<div class="high">
								<div class="edu_high_school">
									<div>School Name</div>
									<input type="text" name="">
								</div>
								<div class="edu_high_year">
									<div>Year Graduated</div>
									<input type="text" name="">
								</div>
							</div>
							<h3>College</h3>
							<div class="college">	
								<div class="edu_col_school">
									<div>School Name</div>
									<input type="text" name="">
								</div>
								<div class="edu_col_year">
									<div>Year Graduated</div>
									<input type="text" name="">
								</div>
								<div class="edu_col_degree">
									<div>Degree and Course</div>
									<input type="text" name="">
								</div>
							</div>
						</div>
						<button class="btn btn-more btn-form">+ Add More College</button>
					</div>
					<!-- end of educations -->
					<div class="card info">
						<h3>WORK EXPERIENCE</h3>
						<div class="work_exp">
							<div class="work_employer">
								<div>Employer/Company</div>
								<input type="text" name="">
							</div>
							<div class="work_role">
								<div>Role</div>
								<input type="text" name="">
							</div>
							<div class="work_start">
								<div>Start Date</div>
								<input type="date" name="">
							</div>
							<div class="work_end">
								<div>End Date</div>
								<input type="date" name="">
							</div>
							<div class="work_type">
								<input type="checkbox" name="">
								<label>BPO type of work?</label>
							</div>
							<div class="work_desc">
								<div>Role Description</div>
								<textarea name=""></textarea>
							</div>
						</div>
						<button class="btn btn-more btn-form">+ Add More Work</button>
					</div>
					<!-- end of work experience -->
				</div>
				<!-- end of applicant_info -->
				<input class="btn-large btn-confirm" type="submit" name="submit" value="Submit">
			</form>
		</div>
	</div>
</div>
@endsection