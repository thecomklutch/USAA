<html>
	<head>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		<link rel="stylesheet" href="style_sheets/signup2.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	<body>
		<!-- multistep form -->
<form id="msform">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Enter Personal Data</li>
    <li>Passport Details</li>
    <li>School Details</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
  <h2 class="w3-small">Step 1</h2>
	<h3 class="w3-small">Enter Personal Data</h3>
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="text" name="first_name" placeholder="First Name"><br />
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="text" name="last_name" placeholder="Last Name"><br />
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="Date" name="DOB" placeholder="Date Of Birth"><br />
	
	<select style="width: 100%; height: 30px;" class="w3-round w3-small">
		<option class="w3-small w3-round">Select Gender</option>
		<option class="w3-small w3-round" >Male</option>
		<option class="w3-small w3-round">Female</option>
	</select>
	<br /><br />
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="email" name="email" placeholder="E-mail"><br />
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="tel" name="contact" placeholder="Phone number"><br />
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="text" name="Parent_name" placeholder="Parent/Guardian Name"><br />
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="tel" name="parent_contact" placeholder="Parent/Guardian Phone number"><br />
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="text" name="home_distric" placeholder="Home District"><br />
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="Password" name="Password" placeholder="Password"><br />
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="Password" name="re-entr-password" placeholder="Re Enter Password"><br />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
  <h2 class="w3-small">Step 2</h2>
	<h3 class="w3-small">Passport Details</h3>
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="text" name="surname" placeholder="surname"><br />
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="text" name="givenname" placeholder="givenname"><br />
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="text" name="Passportnumber" placeholder="Passport Number"><br />
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="text" name="nationality" placeholder="Nationality"><br />
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="Date" name="DOI" placeholder="Date Of Issue"><br />
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="Date" name="DOB" placeholder="Date Of Expiry"><br />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
  <h2 class="w3-small">Step 3</h2>
	<h3 class="w3-small">School Details</h3><br />
	<label class="w3-small">Wilaya:</label>
				<select name="wilaya" style="width: 100%; height: 30px;" class="w3-round w3-small">
					<option class="w3-small w3-round">--select wilaya--</option>
					<option class="w3-small w3-round">Bourmedes</option>
					<option class="w3-small w3-round">skikida</option>
					<option class="w3-small w3-round">Constantine</option>
					<option class="w3-small w3-round">Oran</option>
					<option class="w3-small w3-round">Algers</option>
					<option class="w3-small w3-round">Agha</option>
				</select><br /><br />
	<label class="w3-small">University:</label>
				<select  name="university" style="width: 100%; height: 30px;" class="w3-round w3-small">
					<option class="w3-small w3-round">--select University--</option>
					<option class="w3-small w3-round">Bourmedes university</option>
					<option class="w3-small w3-round">skikida university</option>
					<option class="w3-small w3-round">Constantine university</option>
					<option class="w3-small w3-round">Oran university</option>
					<option class="w3-small w3-round">Algers university</option>
					<option class="w3-small w3-round">Agha university</option>
				</select><br /><br />
	<label class="w3-small">Course:</label>
				<select  name="course" style="width: 100%; height: 30px;" class="w3-round w3-small">
					<option class="w3-small w3-round">--Select Course--</option>
					<option class="w3-small w3-round">French Literature</option>
					<option class="w3-small w3-round">ST</option>
					<option class="w3-small w3-round">SNV</option>
					<option class="w3-small w3-round">Architecture and Urban planning</option>
					<option class="w3-small w3-round">Medicine</option>
					<option class="w3-small w3-round">Mathematics and Computer Science</option>
				</select><br /><br />
	<label class="w3-small">Academic Year:</label>
				<select  name="AY" style="width: 100%; height: 30px;" class="w3-round w3-small">
					<option class="w3-small w3-round">--Select Academic Year--</option>
					<option class="w3-small w3-round">French Year</option>
					<option class="w3-small w3-round">Yr 1</option>
					<option class="w3-small w3-round">Yr 2</option>
					<option class="w3-small w3-round">Yr 3</option>
					<option class="w3-small w3-round">Yr 4</option>
					<option class="w3-small w3-round">Masters 1</option>
					<option class="w3-small w3-round">Masters 2</option>
				</select><br /><br />
	<label class="w3-small">Year of Enrollment:</label>
				<select  name="enrollmentyear" style="width: 100%; height: 30px;" class="w3-round w3-small">
					<option class="w3-small w3-round">--Select Year of Enrollment--</option>
					<option class="w3-small w3-round">2019</option>
					<option class="w3-small w3-round">2018</option>
					<option class="w3-small w3-round">2017</option>
					<option class="w3-small w3-round">2016</option>
					<option class="w3-small w3-round">2015</option>
					<option class="w3-small w3-round">2014</option>
					<option class="w3-small w3-round">2013</option>
				</select><br /><br />
	<label class="w3-small">Residence card No:</label>
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="text" name="rcn" placeholder="Residence Card Number" ><br />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit" class="submit action-button" value="Sign up" />
  </fieldset>
</form>
	</body>
</html>


<script>
			
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

$(".submit").click(function(){
	return false;
})
</script>