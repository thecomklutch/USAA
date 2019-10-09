<?php header ('Content-type: text/html; charset=iso8859-15');?>
<?php require_once('config.php');?>
<?php if (isset($_SESSION['user'])) {
	$user = $_SESSION['user']['first'].' '.$_SESSION['user']['second'];}
	include 'functions.php';
	$student_wilayas = wilayaz();
	$student_universities = universities();
	include 'head.php';
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- include the activation fil here-->
<title>Update Account</title>
</head>
<body style="
	background: #373b44; /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #373b44, #4286f4); /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #373b44, #4286f4);
">
	<div id="notification" style="display: none; background-color: #ba3529; border-radius: 3px; max-width: 400px; margin: 0 auto; margin-top: 20px; padding: 20px;">
		<span style="color: white"><span id="notificationmsg"></span></span>
	</div>
	<noscript><div style="background-color: #ba3529; border-radius: 3px; max-width: 400px; margin: 0 auto; margin-top: 20px; padding: 20px;"><span style="color: white">Please Enable javascript in your browser to use the USAA student platform</span></div></noscript>
	<div class="w3-modal-content w3-card-4" style="max-width: 600px; margin-top: 100px;">
		<div class="w3-center"><br>
			<img src="images/usaa.jpg" class="w3-circle w3-small" alt="usaa" style="width: 160px; height: 160px; margin-top: 0px;">
		</div>
		<div class="w3-center"><br>
			<h2 style="font-size: 14px">Dear <b><?php echo $user; ?></b> Your Requested to update the following information</h2>
		</div>
		<hr />
		<!--
		<?php include('errors.php'); ?>
		-->
		<div class="w3-container" id="updateform">
			
			<div class="w3-section">
				<label class="w3-small">Current Academic Year</label>
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
					<option class="w3-small w3-round" value="M1">Masters 1</option>
					<option class="w3-small w3-round" value="M2">Masters 2</option>
				</select><br /><br />
				<label class="w3-small">Current Wilaya </label>
				<select id="wilaya" style="width: 100%; height: 30px;" class="w3-round w3-small">
					<option class="w3-small w3-round" value="select">--select wilaya--</option>
					<?php foreach($student_wilayas as $student_wilaya) {?>
					<option class="w3-small w3-round"><?php echo $student_wilaya['location'];?></option>
					<?php }?>
				</select><br /><br />
				<label class="w3-small">Current Univeristy</label>
				<select  id="university" style="width: 100%; height: 30px;" class="w3-round w3-small">
					<option class="w3-small w3-round" value="select">--select University--</option>
					<?php foreach($student_universities as $student_university) {?>
					<option class="w3-small w3-round"><?php echo $student_university['universities'];?></option>
					<?php }?>
				</select><br /><br />
				<label class="w3-small">Current Course </label>
				<select  id="course" style="width: 100%; height: 30px;" class="w3-round w3-small">
					<option class="w3-small w3-round" value="select">--Select Course--</option>
					<option class="w3-small w3-round" value="French Literature">French Literature</option>
					<option class="w3-small w3-round">ST</option>
					<option class="w3-small w3-round">SNV</option>
					<option class="w3-small w3-round">Architecture and Urban planning</option>
					<option class="w3-small w3-round">Medicine</option>
					<option class="w3-small w3-round">Mathematics and Computer Science</option>
				</select><br /><br />
				<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="number" id="contact" placeholder="Current phone number" ><br />
				<label class="w3-small">Student's card No: </label>
				<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="text" id="residencecard" placeholder="Student's Card Number" ><br />
				<button class="w3-button w3-block w3-blue w3-round w3-section w3-round w3-padding" style="width:40%;" onclick="update()">Update</button>
				<!-- <?php include('errors.php');?> -->
			</div>
			<hr>
		</div>
		<div id="verifyaccount" style="padding: 15px; display: none">
			<span style="font: 14px;">Enter your Account password to continue with the update .</span><br />
			<input class="w3-input w3-round w3-border w3-small" style="height: 30px;" type="password" id="password" placeholder="password" ><br />
			<button class="w3-button w3-block w3-blue w3-round w3-section w3-round w3-padding" type="submit" style="width:40%;" onclick="confirmupdate()">Confirm update</button>
			<br />
			<div id="status"></div>
		</div>
	</div>
	<script src="update.js"></script>
</body>