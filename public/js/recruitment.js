$(document).ready(function(){
	$(".add-spouse").on("click", function(){
		var spouse_ids = [];
		var last_id = $(".spouse_info").length;
		var spouse_wrapper = $('#spouse_wrapper');	

		$.ajax({
			url: '/spouses/create',
			method: 'GET',
			data: {
				id: last_id
			},
			success: function($result){
				spouse_wrapper.append($result);
			}
		});

	});

	$(".add-contact").on("click", function(){
		var contact_ids = [];
		var last_id = $(".emergency_contact").length;
		var contact_wrapper = $('#emergency_wrapper');	

		$.ajax({
			url: '/emergency_contacts/create',
			method: 'GET',
			data: {
				id: last_id
			},
			success: function($result){
				contact_wrapper.append($result);
			}
		});

	});

	$(".add-dependent").on("click", function(){
		var contact_ids = [];
		var last_id = $(".dependents").length;
		var dependent_wrapper = $('#dependent_wrapper');	

		$.ajax({
			url: '/dependents/create',
			method: 'GET',
			data: {
				id: last_id
			},
			success: function($result){
				dependent_wrapper.append($result);
			}
		});

	});

	$(".add-college").on("click", function(){
		var contact_ids = [];
		var last_id = $(".colleges").length;
		var college_wrapper = $('#college_wrapper');	

		$.ajax({
			url: '/colleges/create',
			method: 'GET',
			data: {
				id: last_id
			},
			success: function($result){
				college_wrapper.append($result);
			}
		});

	});

	$(".add-work").on("click", function(){
		var contact_ids = [];
		var last_id = $(".work_exp").length;
		var work_wrapper = $('#work_wrapper');	

		$.ajax({
			url: '/work_experiences/create',
			method: 'GET',
			data: {
				id: last_id
			},
			success: function($result){
				work_wrapper.append($result);
			}
		});

	});
});


