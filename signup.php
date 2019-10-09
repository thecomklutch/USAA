<?php
	header ('Content-type: text/html; charset=iso8859-15');
	include 'USAAstudent/config.php';
	include 'USAAstudent/functions.php';

	$student_wilayas = wilayaz();
	$student_universities = universities();

?>
<html>
	<head>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
		<link rel="stylesheet" href="style_sheets/signup2.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>

	<body>
		<!-- multistep form -->
<div id="msform" method="post">
	<noscript><div style="background-color: #ba3529; border-radius: 3px; padding: 20px;"><span style="color: white">Please Enable javascript in your browser to use the USAA student platform</span></div></noscript>
	<br />
	<div id="notification" style="display: none; background-color: #ba3529; border-radius: 3px; padding: 20px;">
		<span style="color: white"><span id="notificationmsg"></span></span>
	</div>
	<br />
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Enter Personal Data</li>
    <li>Passport Details</li>
    <li>School Details</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
  <div class="w3-center"><br>
		<img src="USAAstudent/images/usaa.jpg" class="w3-circle w3-small" alt="usaa" style="width: 80px; height: 80px; margin-top: 0px;">
	</div>
  <h2 class="w3-small">Step 1</h2>
	<h3 class="w3-small">Enter Personal Data</h3>
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="text" id="first_name" placeholder="First Name" ><br />
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="text" id="last_name" placeholder="Last Name" ><br />
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="Date" id="DOB" placeholder="Date Of Birth" ><br />
	
	<select style="width: 100%; height: 30px;" class="w3-round w3-small" id="gender">
		<option class="w3-small w3-round" value="select">--Select Gender--</option>
		<option class="w3-small w3-round" value="M">Male</option>
		<option class="w3-small w3-round" value="F">Female</option>
	</select>
	<br /><br />
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="email" id="email" placeholder="E-mail" ><br />
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="number" id="contact" placeholder="Phone_number" ><br />
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="text" id="parent_name" placeholder="Parent/Guardian Name" ><br />
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="number" id="parent_contact" placeholder="Parent/Guardian Phone number" ><br />
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="text" id="home_district" placeholder="Home District" ><br />
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="Password" id="password" placeholder="Password" ><br />
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="Password" id="re_enter_password" placeholder="Re Enter Password" ><br />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
  <div class="w3-center"><br>
		<img src="USAAstudent/images/usaa.jpg" class="w3-circle w3-small" alt="usaa" style="width: 80px; height: 80px; margin-top: 0px;">
	</div>
  <h2 class="w3-small">Step 2</h2>
	<h3 class="w3-small">Passport Details</h3>
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="text" id="surname" placeholder="surname" ><br />
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="text" id="givenname" placeholder="givenname" ><br />
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="text" id="passportnumber" placeholder="Passport Number" ><br />
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="text" id="nationality" placeholder="Nationality" ><br />
	<label class="w3-small">Date of issue:</label>
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="Date" id="dateofissue" placeholder="Date Of Issue" ><br />
	<label class="w3-small">Date of birth:</label>
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="Date" id="DOB2" placeholder="Date Of Birth" ><br />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
  <div class="w3-center"><br>
		<img src="USAAstudent/images/usaa.jpg" class="w3-circle w3-small" alt="usaa" style="width: 80px; height: 80px; margin-top: 0px;">
	</div>
	<h2 class="w3-small">Step 3</h2>
	<h3 class="w3-small">School Details</h3><br />
	<label class="w3-small">Wilaya:</label>
				<select id="wilaya" style="width: 100%; height: 30px;" class="w3-round w3-small">
					<option class="w3-small w3-round" value="select">--select wilaya--</option>
					<?php foreach($student_wilayas as $student_wilaya) {?>
					<option class="w3-small w3-round"><?php echo $student_wilaya['location'];?></option>
					<?php }?>
				</select><br /><br />
	<label class="w3-small">University:</label>
				<select  id="university" style="width: 100%; height: 30px;" class="w3-round w3-small">
					<option class="w3-small w3-round" value="select">--select University--</option>
					<?php foreach($student_universities as $student_university) {?>
					<option class="w3-small w3-round"><?php echo $student_university['universities'];?><span style="display: none"><?php echo '.'.$student_university['location'];?></span></option>
					<?php }?>
				</select><br /><br />
	<label class="w3-small">Course:</label>
				<select  id="course" style="width: 100%; height: 30px;" class="w3-round w3-small">
					<option class="w3-small w3-round" value="select">--Select Course--</option>
					<option class="w3-small w3-round" value="French Literature">French Literature</option>
					<option class="w3-small w3-round">ST</option>
					<option class="w3-small w3-round">SNV</option>
					<option class="w3-small w3-round">Architecture and Urban planning</option>
					<option class="w3-small w3-round">Medicine</option>
					<option class="w3-small w3-round">Mathematics and Computer Science</option>
				</select><br /><br />
	<label class="w3-small">Academic Year:</label>
				<select  id="academic_year" style="width: 100%; height: 30px;" class="w3-round w3-small">
					<option class="w3-small w3-round" value="select">--Select Academic Year--</option>
					<option class="w3-small w3-round" value="French Year">French Year</option>
					<option class="w3-small w3-round" value="1">Year 1</option>
					<option class="w3-small w3-round" value="2">Year 2</option>
					<option class="w3-small w3-round" value="3">Year 3</option>
					<option class="w3-small w3-round" value="4">Year 4</option>
					<option class="w3-small w3-round" value="5">Year 5</option>
					<option class="w3-small w3-round" value="6">Year 6</option>
					<option class="w3-small w3-round" value="7">Year 7</option>
					<option class="w3-small w3-round" value="11">Masters 1</option>
					<option class="w3-small w3-round" value="12">Masters 2</option>
				</select><br /><br />
	<label class="w3-small">Year of Enrollment:</label>
				<select  id="enrollmentyear" style="width: 100%; height: 30px;" class="w3-round w3-small">
					<option class="w3-small w3-round" value="select">--Select Year of Enrollment--</option>
					<option class="w3-small w3-round">2019</option>
					<option class="w3-small w3-round">2018</option>
					<option class="w3-small w3-round">2017</option>
					<option class="w3-small w3-round">2016</option>
					<option class="w3-small w3-round">2015</option>
					<option class="w3-small w3-round">2014</option>
					<option class="w3-small w3-round">2013</option>
				</select><br /><br />
	<label class="w3-small">Student's card No:</label>
	<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="text" id="residencecard" placeholder="Student's Card Number" ><br />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit"  class="submit action-button" value="Sign up" onclick="signup()"/>
  </fieldset>
</div>
<script src="USAAstudent/signup.js"></script>
</body>
</html>

