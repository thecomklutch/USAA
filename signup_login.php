<?php
	//declaring varibles
	$first_name = "";
	$second_name = "";
	$rcn = ""; //residence card nomber
	$pn = ""; //passport number
	$phone_no = "";
	$email = "";
	$password = "";
	$wilaya = "";
	$university = "";
	$academic_year = "";
	$gender = "";
	$course = "";
	$errors = array();
	$msg = array();

	//registration
	if (isset($_POST['sign_up'])) {
		
		//get the values
		$first_name = esc($_POST['name1']);
		$second_name = esc($_POST['name2']);
		$rcn = esc($_POST['rcn']);
		$pn = esc($_POST['pass_no']);
		$phone_no = esc($_POST['phone_no']);
		$email = esc($_POST['email']);
		$password1 = esc($_POST['pass1']);
		$password2 = esc($_POST['pass2']);
		$dob1 = $_POST['dob'];
		$wilaya = $_POST['wilaya'];
		$university = $_POST['university'];
		$academic_year = $_POST['AY'];
		$course = $_POST['course'];
		$parentname = $_POST['parent_name'];
		$parentcontact = $_POST['parent_contact'];
		$homedistrict = $_POST['home'];
		$country = $_POST['Nation'];
		$doi = $_POST['date_of_issue']; //date of issue of the passport
		$passportsurname = $_POST['surname'];
		$passportsecondname = $_POST['surname2'];
		$dob2 = $_POST['passportdob'];
		$EY = $_POST['enrollmentyear']; //enrollment year





		//data validation
		if ($first_name != $passportsurname || $second_name != $passportsecondname) {array_push($errors, "Names do not match, please check again");}
		if (isset($_POST['gender']) && $_POST['gender'] == 'male') {$gender = "M";}
		if (!(isset($_POST['gender']))) {array_push($errors, "Select your gender");}
		if (isset($_POST['gender']) && $_POST['gender'] == 'female') {$gender = "F";}
		if ($wilaya == "--select--") {array_push($errors, "Select a Wilaya");}
		if ($university == "--select--") {array_push($errors, "Select a university");}
		if ($academic_year == "--select--") {array_push($errors, "Select ure current Academic year");}
		if ($course == "--select--") {array_push($errors, "Select ure course");}

		if ($password1 != $password2) {array_push($errors, "Passwords don't match");}
		//make validation about the length of the passport number and residence card number

		//ensure the user is not registered twice
		$check_user = "SELECT * FROM `users` WHERE card_no='$rcn' OR email='$email' LIMIT 1";
		$result = mysqli_query($conn, $check_user);
		$user = mysqli_fetch_assoc($result);

		if ($user) {
			if ($user['card_no'] == $rcn) {array_push($errors, "Residence card Number already exists");}
			if ($user['passport_no'] == $pn) {array_push($errors, "Invalid Passport number or already exists");}
		}

		//register user
		if (count($errors) == 0){
			$password = md5($password1); //encrypt password
			$query = "INSERT INTO `users` (`card_no`, `passport_no`, `first`, `second`, `email`, `phone`, `passhash`, `wilaya`, `year`, `course`, `versity`, `dob`, `gender`, `AC_type`, `status`, `msg_state`, `bankaccount`, `created_at`, `parent_name`, `parent_contact`, `home`, `nationality`, `doi`, `dob2`, `code1`, `code2`, `year_of_entry`, `work`) VALUES ('$rcn', '$pn', '$first_name', '$second_name', '$email', '$phone_no', '$password', '$wilaya', '$academic_year', '$course', '$university', '$dob1', '$gender', 'N', 'Pending', ' ', ' ', CURRENT_TIMESTAMP, '$parentname', '$parentcontact', '$homedistrict', '$country', '$doi', '$dob2', ' ', '', '$EY', 'None')";
			if (mysqli_query($conn, $query))
			{
				//get user info 
				$_SESSION['user'] = getuser($email);
				//generate random and email it and store the code in the database for registration
				header('location: activate.php');
			} else {
				echo mysqli_error($conn);
			}
			
			
		}
	}

	//Log in user
	if (isset($_POST['login'])) {
		$email = $_POST['in1'];
		$password = $_POST['pass1'];

		if (empty($email)) {array_push($errors, "Email is required");}
		if (empty($password)) {array_push($errors, "Password required");}
		if (count($errors) == 0){
			$hash = md5($password);
			$sql = "SELECT * FROM users WHERE email='$email' AND passhash='$hash' LIMIT 1";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
				$_SESSION['user'] = getuser($email);

				//redirection
				if ($_SESSION['user']['status'] == 'inactive') {header('location: activate.php'); 
				exit(0);
				} elseif ($_SESSION['user']['status'] == 'Locked') {
					header('location: locked_ac.php');
					# code...
				} elseif ($_SESSION['user']['AC_type'] == 'S') {
					# code...
					header('location: admin.php');
				}

				 else{
					header('location: index2.php');
				}
			}

			else
			{
				array_push($errors, "Wrong email or password");
			}
		}
	}


	//validation of strings
	function esc(String $value)
	{
		//bring the global db connect object into function
		$val = trim($value); //remove the surrounding strings

		return $val;
	}

	//get users from the data base
	function getuser($id) {
		global $conn;

		//query the database
		$sql = "SELECT * FROM users WHERE email='$id'";
		$results = mysqli_query($conn, $sql);
		$users = mysqli_fetch_assoc($results);
		return $users;
	}
?>