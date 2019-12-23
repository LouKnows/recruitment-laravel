$(document).ready(function(){
	$(".add-spouse").on("click", function(){
		var spouse_ids = [];
		var last_id = 0;
		var spouse_wrapper = $('#spouse_wrapper');	

		if($(".spouse_info").length){
	        $(".spouse_info").each(function(){
	            spouse_ids.push($(this).data("id"));
	        });

	        last_id = Math.max.apply(Math, spouse_ids) + 1;
	    }

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
		var last_id = 0;
		var contact_wrapper = $('#emergency_wrapper');	

		if($(".emergency_contact").length){
	        $(".emergency_contact").each(function(){
	            contact_ids.push($(this).data("id"));
	        });

	        last_id = Math.max.apply(Math, contact_ids) + 1;
	    }

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
		var dependent_ids = [];
		var last_id = 0;
		var dependent_wrapper = $('#dependent_wrapper');	

		if($(".dependents").length){
	        $(".dependents").each(function(){
	            dependent_ids.push($(this).data("id"));
	        });

	        last_id = Math.max.apply(Math, dependent_ids) + 1;
	    }

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
		var college_ids = [];
		var last_id = 0;
		var college_wrapper = $('#college_wrapper');	

		if($(".colleges").length){
	        $(".colleges").each(function(){
	            college_ids.push($(this).data("id"));
	        });

	        last_id = Math.max.apply(Math, college_ids) + 1;
	    }

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
		var work_ids = [];
		var last_id = 0;
		var work_wrapper = $('#work_wrapper');	

		if($(".work_exp").length){
	        $(".work_exp").each(function(){
	            work_ids.push($(this).data("id"));
	        });

	        last_id = Math.max.apply(Math, work_ids) + 1;
	    }

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

	$(".card").on("click",".remove", function(){
		var element = $(this).parent();
		element.fadeOut(300,function(){
			element.remove();
		});
	});

	$(".info-table").on("click",".nav-tab:not(.active), .cancel", function(){
		var container = $(".info-content");
		var tab = $(this).data("tab");
		var applicant_id = $(this).data('id');

		$(".active").removeClass("active");
		$(this).addClass("active");

		switch(tab){
			case 'basic':
				container.load('/persons/'+ applicant_id +'/list');
				break;
			case 'spouse':
				container.load('/spouses/'+ applicant_id +'/list');
				break;
			case 'contact':
				container.load('/emergency_contacts/'+ applicant_id +'/list');
				break;
			case 'dependent':
				container.load('/dependents/'+ applicant_id +'/list');
				break;
			case 'education':
				container.load('/educations/'+ applicant_id +'/list');
				break;
			case 'work':
				container.load('/work_experiences/'+ applicant_id +'/list');
				break;
		}

	});

	$(".info-table").on("click",".edit", function(){
		var container = $(".info-content");
		var tab = $(this).data("tab");
		var id = $(this).data('id');

		switch(tab){
			case 'basic':
				container.load('/persons/'+ id +'/edit');
				break;
			case 'spouse':
				container.load('/spouses/'+ id +'/edit');
				break;
			case 'contact':
				container.load('/emergency_contacts/'+ id +'/edit');
				break;
			case 'dependent':
				container.load('/dependents/'+ id +'/edit');
				break;
			case 'education':
				container.load('/educations/'+ id +'/edit');
				break;
			case 'work':
				container.load('/work_experiences/'+ id +'/edit');
				break;
		}
	});

	$(".info-table").on("submit","form", function(e){
		var container = $(".info-content");
		var form_data = {};
		var url = $(this).attr("action");

		$(this).find('[name]').each(function(){
			form_data[this.name] = this.value;
		});

		e.preventDefault();
		
		$.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });
	
		$.ajax({
			url: url,
			method: 'PUT',
			data: {
				person: form_data
			},
			success: function(result){
				container.empty().append(result);
			}
		});

	});

	$("#search-applicant").on("input", function(){
		var search_text = $(this).val();
		var container = $(".list tbody");

		container.load('/applicants/search/' + search_text);
	});


});


