
<?php
	$errors = array();
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

				if ($_SESSION['user']['status'] == 'inactive') {
					header('location: USAAstudent/inactivestudent.php'); 

				} else if ($_SESSION['user']['status'] == 'Locked') {
					header('location: USAAstudent/locked_ac.php');
					
				} else if ($_SESSION['user']['status'] == 'active' && $_SESSION['user']['AC_type'] == 'S') {
					header('location: admin.php');
				}
				 else if ($_SESSION['user']['status'] == 'active' && $_SESSION['user']['AC_type'] != 'S') {
					header('location: usaastudent.php');
				}
			}
			else
			{
				array_push($errors, "Wrong email or password");
			}
		}
	}
	
	// get the user from the database 
	function getuser($id) {
		global $conn;
		$sql = "SELECT * FROM users WHERE email='$id'";
		$results = mysqli_query($conn, $sql);
		$users = mysqli_fetch_assoc($results);
		return $users;
	}
?>