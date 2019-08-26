<?php include('USAAstudent/head.php');?>
<?php include('USAAstudent/config.php')?>
<?php include('USAAstudent/signup_login.php');?>
<title>Signup</title>
<head>
<link rel="icon" href="USAAstudent/images/usaa.ico">
<link rel="stylesheet" type="text/css" href="style_sheets/signup.css">

</head>
<body>
	<div id="card-signup" class="w3-modal-content w3-card-4" style="max-width: 700px; margin-top: 40px; margin-bottom: 40px;">
		<div class="w3-center"><br>
			<img src="USAAstudent/images/usaa.jpg" class="w3-circle w3-margin-top w3-small" alt="usaa">
		</div>
		<?php include('USAAstudent/errors.php'); ?>
		<form class="w3-container" method="post" action="signup.php">
			<div class="w3-section">

			<!-- fieldset -->
			<fieldset class="w3-round">
			<legend align="center" class="w3-large"></b>Personal Information</b></legend>
			<!--personal inforamtion-->
				<!--<label>first_name:</label>-->
				<input id="input" type="text" name="name1" placeholder="first name" class="w3-section w3-input w3-light-grey w3-border w3-round">
				<!--<label>second_name:</label>-->
				<input id="input" type="text" name="name2" placeholder="second name" class="w3-input w3-light-grey w3-border w3-round" >
				<!--<label>Phone Number:</label>-->
				<input id="input" type="number" name="phone_no" placeholder="Phone_number" class="w3-input w3-light-grey w3-border w3-round" >
				<br>
				<!--<label>Email:</label>-->
				<input id="input" type="email" name="email" placeholder ="Email" class="w3-input w3-light-grey w3-border w3-round" ><br>
				<!--<label>Parent's Name:</label>-->
				<input id="input" type="text" name="parent_name" placeholder="Parent or Guardian's name" class="w3-input w3-light-grey w3-border w3-round" >
				<!--<label>Parent's Contact</label>-->
				<input id="input" type="text" name="parent_contact" placeholder="Parent or Guardian's contact" class="w3-input w3-light-grey w3-border w3-round" >
				<!--<label>Home District:</label>-->
				<input id="input" type="text" name="home" placeholder="Home District" class="w3-input w3-light-grey w3-border w3-round" >
				<!--<label>Date Of Birth:</label>-->
				<input id="input" type="text" name="dob" placeholder="dd/mm/yyy" class="w3-input w3-light-grey w3-border w3-round" >
				<br>
				<label>Password:</label>
				<input type="password" minlength="6" maxlength="10" name="pass1" placeholder="Password" class="w3-input w3-light-grey w3-border w3-round" >
				<br>
				<label>Re-enter password:</label>
				<input type="password" minlength="6" maxlength="10" name="pass2" placeholder="Re-enter password" class="w3-input w3-light-grey w3-border w3-round" >
	
			</fieldset>
			<!-- Passsport details-->
				<br>
			<fieldset class="w3-round">
			<legend align="center" class="w3-large"></b>Passport Details</b></legend>
				<label>Surname:</label>
				<input type="text" name="surname" placeholder="surname" class="w3-input w3-light-grey w3-border w3-round">
				<label>Given Name:</label>
				<input type="text" name="surname2" placeholder="Given name" class="w3-input w3-light-grey w3-border w3-round">
				<label>Passport_No:</label>
				<input type="text" name="pass_no" placeholder="Passport Number" class="w3-input w3-light-grey w3-border w3-round" >
				<label>Nationality:</label>
				<input type="text" name="Nation" placeholder="Nationality" class="w3-input w3-light-grey w3-border w3-round">
				<label>Date of Issue of the passport:</label>
				<input type="text" name="date_of_issue" placeholder="dd/mm/yyyy" class="w3-input w3-light-grey w3-border w3-round">
				<label>Date of Birth:</label>
				<input type="text" name="passportdob" placeholder="dd/mm/yyyy" class="w3-input w3-light-grey w3-border w3-round" >
			</fieldset>
			<br>
			<fieldset class="w3-round">
			<legend align="center" class="w3-large"></b>School Details</b></legend>
				<label>Wilaya:</label>
				<select class="w3-btn w3-round w3-input w3-light-grey" name="wilaya">
					<option class="w3-btn w3-round w3-input w3-light-grey">--select--</option>
					<option class="w3-btn w3-round w3-input w3-light-grey">Bourmedes</option>
					<option class="w3-btn w3-round w3-input w3-light-grey">skikida</option>
					<option class="w3-btn w3-round w3-input w3-light-grey">Constantine</option>
					<option class="w3-btn w3-round w3-input w3-light-grey">Oran</option>
					<option class="w3-btn w3-round w3-input w3-light-grey">Algers</option>
					<option class="w3-btn w3-round w3-input w3-light-grey">Agha</option>
				</select>
				<br>
				<label>University:</label>
				<select class="w3-btn w3-round w3-input w3-light-grey" name="university">
					<option class="w3-btn w3-round w3-input w3-light-grey">--select--</option>
					<option class="w3-btn w3-round w3-input w3-light-grey">Bourmedes university</option>
					<option class="w3-btn w3-round w3-input w3-light-grey">skikida university</option>
					<option class="w3-btn w3-round w3-input w3-light-grey">Constantine university</option>
					<option class="w3-btn w3-round w3-input w3-light-grey">Oran university</option>
					<option class="w3-btn w3-round w3-input w3-light-grey">Algers university</option>
					<option class="w3-btn w3-round w3-input w3-light-grey">Agha university</option>
				</select>
				<br>
				<label>Course:</label>
				<select class="w3-btn w3-round w3-input w3-light-grey" name="course">
					<option class="w3-btn w3-round w3-input w3-light-grey">--select--</option>
					<option class="w3-btn w3-round w3-input w3-light-grey">French Literature</option>
					<option class="w3-btn w3-round w3-input w3-light-grey">ST</option>
					<option class="w3-btn w3-round w3-input w3-light-grey">SNV</option>
					<option class="w3-btn w3-round w3-input w3-light-grey">Architecture and Urban planning</option>
					<option class="w3-btn w3-round w3-input w3-light-grey">Medicine</option>
					<option class="w3-btn w3-round w3-input w3-light-grey">Mathematics and Computer Science</option>
				</select>
				<!--
				<label>:</label>
				<input type="text" name="name1" placeholder="first name" class="w3-input w3-light-grey w3-border w3-round" >
				-->
				<br>
				<label>Academic Year:</label>
				<select class="w3-btn w3-round w3-input w3-light-grey" name="AY">
					<option class="w3-btn w3-round w3-input w3-light-grey">--select--</option>
					<option class="w3-btn w3-round w3-input w3-light-grey">French Year</option>
					<option class="w3-btn w3-round w3-input w3-light-grey">Yr 1</option>
					<option class="w3-btn w3-round w3-input w3-light-grey">Yr 2</option>
					<option class="w3-btn w3-round w3-input w3-light-grey">Yr 3</option>
					<option class="w3-btn w3-round w3-input w3-light-grey">Yr 4</option>
					<option class="w3-btn w3-round w3-input w3-light-grey">Masters 1</option>
					<option class="w3-btn w3-round w3-input w3-light-grey">Masters 2</option>
				</select>
				<br>
				<label>Year of Enrollment:</label>
				<select class="w3-btn w3-round w3-input w3-light-grey" name="enrollmentyear">
					<option class="w3-btn w3-round w3-input w3-light-grey">--select--</option>
					<option class="w3-btn w3-round w3-input w3-light-grey">2019</option>
					<option class="w3-btn w3-round w3-input w3-light-grey">2018</option>
					<option class="w3-btn w3-round w3-input w3-light-grey">2017</option>
					<option class="w3-btn w3-round w3-input w3-light-grey">2016</option>
					<option class="w3-btn w3-round w3-input w3-light-grey">2015</option>
					<option class="w3-btn w3-round w3-input w3-light-grey">2014</option>
					<option class="w3-btn w3-round w3-input w3-light-grey">2013</option>
				</select>
				<br>
				<label>Residence card No:</label>
				<input type="text" name="rcn" placeholder="Residence Card Number" class="w3-input w3-light-grey w3-border w3-round" >	
				<br>
			</fieldset>
			<br>
				<label><b>Gender:</b></label>
				<input name="gender" value="male" type="radio" class="w3-circle w3-light-grey" <?php if (isset($gender) && $gender=="male") echo "checked";?>>Male
				<input name="gender" value="female" type="radio" class="w3-circle w3-light-grey" <?php if (isset($gender) && $gender=="female") echo "checked";?>>Female
				<br><hr>
					<button name="sign_up" class="w3-button w3-block w3-blue w3-round w3-section w3-round w3-padding" type="submit" style="width:40%;">Sign up</button>
					<h2 class="w3-small">Already a user <a href="login.php"> Login</a></h2>
			</div>
		</form>

</div>