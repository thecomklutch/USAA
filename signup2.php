<?php include('USAAstudent/head.php');?>
<?php include('USAAstudent/config.php')?>
<?php include('USAAstudent/signup_login.php');?>
<title>Signup</title>
<head>
<link rel="icon" href="USAAstudent/images/usaa.ico">
<link rel="stylesheet" type="text/css" href="style_sheets/signup2.css">
<title>Signup</title>
</head>
<body>

<!-- form-->
<form id ="signup-form" style="margin: 0 auto;">
    <!-- progress bar-->
     <ul id ="progress-bar">
         <li class = "Personal-info"> Personal Information </li>
         <li>Passport Details</li>
         <li>School Details</li>

     </ul>


    <!-- fieldset-->
    <fieldset id="signup-fs">
	<h2 class="fs-title">Enter Personal Data</h2>
	<h3 class="fs-subtitle">Step 1</h3>
	<input type="text" name="first_name" placeholder="First Name">
	<input type="text" name="last_name" placeholder="Last Name">
	<input type="Date" name="DOB" placeholder="Date Of Birth">
	
	<select>
		<option>Select Gender</option>
		<option>Male</option>
		<option>Female</option>
	</select>
	<input type="email" name="email" placeholder="E-mail">
	<input type="tel" name="contact" placeholder="Phone number">
	<input type="text" name="Parent_name" placeholder="Parent/Guardian Name">
	<input type="tel" name="parent_contact" placeholder="Parent/Guardian Phone number">
	<input type="text" name="home_distric" placeholder="Home District">
	<input type="Password" name="Password" placeholder="Password">
	<input type="Password" name="re-entr-password" placeholder="Re Enter Password">
	<input class = " next-button" type="button" name="text" value="Next" >
</fieldset>
    <!--Passport Details-->
<fieldset id="signup-fs">
	<h2 class="fs-title">Passport Details</h2>
	<h3 class="fs-subtitle">Step 2</h3>
	<input type="text" name="surname" placeholder="surname">
	<input type="text" name="givenname" placeholder="givenname">
	<input type="text" name="Passportnumber" placeholder="Passport Number">
	<input type="text" name="nationality" placeholder="Nationality">
	<input type="Date" name="DOI" placeholder="Date Of Issue">
	<input type="Date" name="DOB" placeholder="Date Of Expiry">
	<input class = " Previous-button" type="button" name="text" value="Previous" >
	<input class = " next-button" type="button" name="text" value="Next" >
</fieldset>

	<!--School Details-->
<fieldset id="signup-fs">
<h2 class="fs-title">School Details</h2>
	<h3 class="fs-subtitle">Step 3</h3>
	<label>Wilaya:</label>
				<select name="wilaya" >
					<option >--select--</option>
					<option >Bourmedes</option>
					<option >skikida</option>
					<option >Constantine</option>
					<option >Oran</option>
					<option >Algers</option>
					<option >Agha</option>
				</select>
	<label>University:</label>
				<select  name="university">
					<option >--select--</option>
					<option >Bourmedes university</option>
					<option >skikida university</option>
					<option >Constantine university</option>
					<option >Oran university</option>
					<option >Algers university</option>
					<option >Agha university</option>
				</select>
	<label>Course:</label>
				<select  name="course">
					<option >Select Course</option>
					<option >French Literature</option>
					<option >ST</option>
					<option >SNV</option>
					<option >Architecture and Urban planning</option>
					<option >Medicine</option>
					<option >Mathematics and Computer Science</option>
				</select>
	<label>Academic Year:</label>
				<select  name="AY">
					<option >Select Academic Year</option>
					<option >French Year</option>
					<option >Yr 1</option>
					<option >Yr 2</option>
					<option>Yr 3</option>
					<option >Yr 4</option>
					<option >Masters 1</option>
					<option >Masters 2</option>
				</select>
	<label>Year of Enrollment:</label>
				<select  name="enrollmentyear">
					<option >-Select Year of Enrollment</option>
					<option >2019</option>
					<option >2018</option>
					<option >2017</option>
					<option >2016</option>
					<option >2015</option>
					<option >2014</option>
					<option >2013</option>
				</select>
	<label>Residence card No:</label>
	<input type="text" name="rcn" placeholder="Residence Card Number" >
	<input class = " Previous-button" type="button" name="text" value="Previous" >
	<input class = "Submit" type="button" name="Submit" value="Submit" >
</fieldset>

</form>
</body>