//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});


function signup() {
		// persanal data 
		var first = $("#first_name").val();
		var second = $("#last_name").val();
		var dob = $("#DOB").val();
		var gender = $("#gender").val();
		var email = $("#email").val();
		var phone = $("#contact").val();
		var parentn = $("#parent_name").val();
		var parentc = $("#parent_contact").val();
		var home = $("#home_district").val();
		var pass1 = $("#password").val();
		var pass2 = $("#re_enter_password").val();
	
		// passport data
		var surname = $("#surname").val();
		var given = $("#givenname").val();
		var passport = $("#passportnumber").val();
		var dateofissue = $("#dateofissue").val();
		var dateofbirth = $("#DOB2").val();
	
		// school details 
		var wilaya = $("#wilaya").val();
		var university = $("#university").val();
		var course = $("#course").val();
		var academicyear = $("#academic_year").val();
		var yearofenrollment = $("#enrollmentyear").val();
		var residencecardnumber = $("#residencecard").val();

		if (!varlen(first) || !varlen(second) || !varlen(dob) || !varlen(parentn) || !varlen(home) || !varlen(pass1)) {
			notify("Please fill in all the data at Step 1");

		} else if (!emailIsValid(email) || !varlen(email)) {
			notify("Please check your email address");

		} else if (!validatephone(phone)) {
			notify("Please enter a valid personal number at Step 1");

		} else if (!validatephone(parentc)) {
			notify("Please a valid parent's or Guardian's number at Step 1");

		} else if (pass1 != pass2) {
			notify("Passwords don't match");

		} else if (gender == 'select') {
			notify("Please select gender");

		} else if (!varlen(surname) || !varlen(given) || !varlen(passport) || !varlen(dateofbirth) || !varlen(dateofissue)) {
			notify("Please fill in all the data at Step 2");

		} else if (wilaya == 'select' || university == 'select' || course == 'select' || academicyear == 'select' || yearofenrollment == 'select') {
			notify("Please select all the fields at Step 3");

		} else if (first != surname || second != given) {
			notify("Personal names don't match with passport names. Please check again");

		} else {
			$.ajax({
				type: 'POST',
				url:'USAAstudent/signup.php',
				data: {
					"fn":first,
					"sn":second,
					"dob":dob,
					"gender":gender,
					"email":email,
					"phone":phone,
					"parentname":parentn,
					"parentcontact":parentc,
					"district":home,
					"passportnumber":passport,
					"doi":dateofissue,
					"dob2":dateofbirth,
					"wilaya":wilaya,
					"university":university,
					"course":course,
					"academicyear":academicyear,
					"yoe":yearofenrollment,
					"rcn":residencecardnumber,
					"password":pass1
				},
				success: function(html) {
					$("#msform").html(html).hide();
					$("#results").html(html).show();
				}
			});
		}
	}

	function varlen(obj) {
		return obj.length;
	}

	function emailIsValid (email) {
		return /\S+@\S+\.\S+/.test(email)
	  }


	function validatephone(phone) {
		if (phone.length < 10 || phone.length > 10) {
			return true;
		} else {
			return false;
		}
	}

	function notify(msg) {
		document.getElementById('notification').style.display='block';
		document.getElementById('notificationmsg').innerHTML = msg;
		window.scrollTo(0, 0);
	}