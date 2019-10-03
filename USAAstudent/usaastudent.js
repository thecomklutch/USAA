// js file holding all actions by the student in his space 

// posting suggestion 
function postsuggestion()
		{
			$("#statusmessage").hide();
			//get comment values
			var suggestions = $("#suggest").val();//suggestion
			//call ajax function
			$.ajax({
				type:'POST',
				url:'USAAstudent/postsuggestion.php',
				data: {"suggestion":suggestions},
				success:function(html){
					$("#statusmessage").html(html).show();
				}
			});
		}
	
// marking the message as read 
function changestate(messageid) {
	$.ajax({
		type:'POST',
		url:'USAAstudent/changemessagestate.php',
		data: {"idofmessage":messageid}
	});
}
        
//function to open colapsed box
function openAbout() {
    document.getElementById('aboutandhistory').style.display='block';
    document.getElementById('CloseTheexpandedBox').style.display='none';
}

function closeAbout() {
    document.getElementById('aboutandhistory').style.display='none';
    document.getElementById('CloseTheexpandedBox').style.display='block';
}
//close the container 
function closecontainer2(xy)
{
  document.getElementById(xy).style.display='none';
}


// posting bank accounts to the database
function postbdetails()
	{
		//get the variables
							var a1 = $("#bname").val();
							var b2 = $("#bpaddress").val();
							var c3 = $("#bnname").val();
							var d3 = $("#baccount").val();
							var y1 = $("#banklocation").val();
							var t1 = $("#paccounttype").val();
							var z1 = $("#bswift").val();
							//calling the ajax function
							$.ajax({
								url:'USAAstudent/bankacpost.php',
								method:'POST',
								datatype: 'json',
								data:{"ownername":a1, "owneraddress":b2, "banknom":c3, "bankac":d3, "bankaddr":y1, "accounttype":t1, "swift":z1},
								success:function(html){
									$("#bank_state").html(html).show();
									
								}
							});
    }
    
    // posting student's course change information 
    function postcoursedetails()
	{
		//get the variables
							var a11 = $("#pcourse").val();
							var b22 = $("#course1").val();
							var c33 = $("#course2").val();
							var d33 = $("#reason").val();
							var y11 = $("#wilaya1").val();
							var t11 = $("#wilaya2").val();

							//assign a null value if they are blank
							if (c33.length == 0){c33 = "null";}
							if (y11.length == 0){y11 = "null";}
							if (t11.length == 0){t11 = "null";}
							//calling the ajax function
							$.ajax({
								url:'USAAstudent/courserequestpost.php',
								method:'POST',
								datatype: 'json',
								data:{"pcourse":a11, "course1":b22, "course2":c33, "reason":d33, "wilaya1":y11, "wilaya2":t11},
								success:function(html){
									$("#course_state").html(html).show();
								}
							});
    }
    
// posting events and announcements 
function postevent()
						{
							//get the variables
							var eventtype = $("#up_event").val();
							var eventtitle = $("#tittle").val();
							var eventcontent = $("#descri").val();
							var eventdate = $("#date").val();
							//calling the ajax function
							$.ajax({
								url:'USAAstudent/postevent.php',
								method:'POST',
								datatype: 'json',
								data:{"posttype":eventtype, "posttitle":eventtitle, "postcontent":eventcontent, "postdate":eventdate},
								success:function(html){
									$("#state").html(html).show();
								}
							});
                        }
                        

// sending message to the admin 
function postadmin()
	{
		var msg = $("#adminmsg").val();
		$.ajax({
			url: 'USAAstudent/sendadminmsg.php',
			method: 'POST',
			datatype: 'json',
			data: {"message":msg},
			success: function(html){
				$("#post_status").html(html).show();
			}
		});
	}

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
			success:function(html) {
				$("#msform").html(html).hide();
				$("#results").html(html).show();
			}
		});
	}

	function verifyaccount() {
        var code1 = $("#code").val();
        $.ajax({
            type: 'POST',
            url: 'USAAstudent/verifyaccount.php',
            data: {
                "verificationcode": code1
            },
            success:function(html) {
                $("#result2").html(html).show();
            }
        });
	}

	
	
