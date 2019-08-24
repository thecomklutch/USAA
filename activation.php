<?php
	$active_code = "";
	$errors = array();
	$passport_no = "";

	if (isset($_SESSION['user'])) {
	$email = $_SESSION['user']['email'];}

	if (isset($_POST['activate'])) {
		$active_code = $_POST['code'];

		if (empty($active_code)) {array_push($errors, "Please the activation code sent to ure email");}
		//check for the activation code from the datbase
		$check = "SELECT * FROM `users` WHERE email='$email' LIMIT 1";
		$result = mysqli_query($conn, $check);
		$code = mysqli_fetch_assoc($result);
		$passport_no = $code['passport_no'];

		if ($code){
			if ($code['activation_code'] == $active_code) {
				$update = "UPDATE `users` SET `status` = 'active' WHERE `users`.`passport_no` = '$passport_no'";
				mysqli_query($conn, $update);
				//redirection
				if ($_SESSION['user']['AC_type'] == 'N') {header('location: index2.php');
				exit(0);} //normal users directed to index
				if ($_SESSION['user']['AC_type'] == 'A') {header('location: index.php');
				exit(0);} //Admin users have added abilities
				if ($_SESSION['user']['AC_type'] == 'S') {header('location: admin.php');
				exit(0);} //super users directed to the control pannel
			}
			if ($active_code != $code['activation_code']) {
				array_push($errors, "Wrong Activation code");
			}
		}
	}

?>