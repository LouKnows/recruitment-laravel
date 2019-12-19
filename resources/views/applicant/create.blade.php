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
								<input type="text" name="person[first_name]">
							</div>
							<div class="middle_name">
								<div>Middle Name</div>
								<input type="text" name="person[middle_name]">
							</div>
							<div class="last_name">
								<div>Last Name</div>
								<input type="text" name="person[last_name]">
							</div>
							<div class="suffix_name">
								<div>Suffix (eg. Jr., Sr.)</div>
								<input type="text" name="person[suffix_name]">
							</div>
							<div class="mobile_1">
								<div>Mobile 1</div>
								<input type="text" name="person[mobile_1]">
							</div>
							<div class="mobile_2">
								<div>Mobile 2</div>
								<input type="text" name="person[mobile_2]">
							</div>
							<div class="email">
								<div>Email</div>
								<input type="email" name="person[email]">
							</div>
							<div class="age_gender">
								<div class="age">
									<div>Age</div>
									<input type="number" name="person[age]">
								</div>
								<div class="gender">
									<div>Gender</div>
									<select name="person[gender]">
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>
							</div>
							<div class="birthday">
								<div>Birthday</div>
								<input type="date" name="person[birthday]">
							</div>
							<div class="civil_status">
								<div>Civil Status</div>
								<select name="person[civil_status]">
									<option value="Single">Single</option>
									<option value="Married">Married</option>
								</select>
							</div>
							<div class="religion">
								<div>Religion</div>
								<input type="text" name="person[religion]">
							</div>
							<div class="weight_height">
								<div class="weight">
									<div>Weight</div>
									<input type="text" name="person[weight]">
								</div>
								<div class="height">
									<div>Height</div>
									<input type="text" name="person[height]">
								</div>
							</div>
							<div class="city_address">
								<div>City Address</div>
								<input type="text" name="person[city_address]">
							</div>
							<div class="province_address">
								<div>Provincial Address</div>
								<input type="text" name="person[province_address]">
							</div>
							<div class="father_name">
								<label>Father's Name</label>
								<input type="text" name="person[father_name]">
							</div>
							<div class="mother_name">
								<label>Mother's Name</label>
								<input type="text" name="person[mother_name]">
							</div>
						</div>
					</div>
					<!-- end of personal data -->
					<div class="card info">
						<h3>SPOUSE/S INFO</h3>
						<div id="spouse_wrapper">
							<!-- populate with ajax -->
						</div>
						<span class="btn btn-more btn-form add-spouse">+ Add More Spouse</span>
					</div>
					<!-- end of spouse info -->
					<div class="card info">
						<h3>EMERGENCY CONTACT/S</h3>
						<div id="emergency_wrapper">
							<!-- populate with ajax -->
						</div>
						<span class="btn btn-more btn-form add-contact">+ Add More Contact</span>
					</div>
					<!-- end of emergency contact -->
					<div class="card info">
						<h3>DEPENDENT/S</h3>
						<div id="dependent_wrapper">
							<!-- populate with ajax -->
						</div>
						<span class="btn btn-more btn-form add-dependent">+ Add More Dependent</span>
					</div>
					<!-- end of dependents -->
					<div class="card info">
						<h3>EDUCATION/S</h3>
						<div class="educations">						
							<h3>Elementary School</h3>
							<div class="elem">	
								<div class="edu_elem_school">
									<div>School Name</div>
									<input type="text" name="schools[0][school_name]">
									<input type="hidden" name="schools[0][education_type]" value="1">
								</div>
								<div class="edu_elem_year">
									<div>Year Graduated</div>
									<input type="text" name="schools[0][graduated_date]">
								</div>
							</div>
							<h3>High School</h3>
							<div class="high">
								<div class="edu_high_school">
									<div>School Name</div>
									<input type="text" name="schools[1][school_name]">
									<input type="hidden" name="schools[1][education_type]" value="2">
								</div>
								<div class="edu_high_year">
									<div>Year Graduated</div>
									<input type="text" name="schools[1][graduated_date]">
								</div>
							</div>
							<h3>College</h3>
							<div id="college_wrapper">
								<!-- populate with ajax -->
							</div>
						</div>
						<span class="btn btn-more btn-form add-college">+ Add More College</span>
					</div>
					<!-- end of educations -->
					<div class="card info">
						<h3>WORK EXPERIENCE</h3>
						<div id="work_wrapper">
							<!-- populate with ajax -->
						</div>
						<span class="btn btn-more btn-form add-work">+ Add More Work</span>
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