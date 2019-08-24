<?php 

	//deleting all the some posts
	if (isset($_POST['delete_most'])) {
		$data = "";
		//get data 
		$data = $_POST['delete_all'];
		if ($data == "--Delete--") {}
		if ($data == "All Suggestions") {
			$sql = "DELETE FROM `posts`";
			mysql_query($conn, $sql);
		}
		if ($data == "All Events") {
			$sql = "DELETE FROM `events` WHERE type='E'";
			mysql_query($conn, $slq);
		}
		if ($data == "All Announcements") {
			$sql = "DELETE FROM `events` WHERE type='A'";
			mysql_query($conn, $slq);
		}

	}

	//posting an event or an announcement
	if (isset($_POST['post_event'])) {
		$type = "";
		$title = "";
		$description = "";
		$errors = array();

		//get data 
		$type = $_POST['up_event'];
		$title = $_POST['tittle'];
		$description = $_POST['descri'];
		$from = $_POST['from'];
		$date = $_POST['date'];

		//validate data 
		if (empty($title)) {array_push($errors, "Please add the title for the information");}
		if (empty($description)) {array_push($errors, "Please add abrief description about the information");}
		if (empty($type)) {array_push($errors, "Please select the information type");}
		if (empty($from)) {array_push($errors, "Please enter the body pasing the message");}

		//check if the content is not already in the database
		$check_info = "SELECT * FROM posts WHERE post='$description' LIMIT 1";
		$result = mysqli_query($conn, $check_info);
		$posts = mysqli_fetch_assoc($result);

		if ($posts){
			if ($posts['post'] == $description) {
				array_push($errors, "Event or Announcement already posted");
			}
		}

		//post the content to the respective area
		if (count($errors) == 0) {
			if (isset($type) && $type == "event") {
				$query = "INSERT INTO `events` (`passport_no`, `type`, `title`, `description`, `date`, `created_by`, `created_at`) VALUES ('$passport', 'E', '$title', '$description', '$date', '$from', CURRENT_TIMESTAMP)";
				mysqli_query($conn, $query);
			}
			if (isset($type) && $type == "announce") {
				$query = "INSERT INTO `events` (`passport_no`, `type`, `title`, `description`, `date`, `created_by`, `created_at`) VALUES ('$type', 'A', '$title', '$description', '$date', '$from', CURRENT_TIMESTAMP)";
				mysqli_query($conn, $query);
			}
		}
	}

	//delete account
	if (isset($_POST['delete_ac'])) {
		$email_id = $_POST['accd'];
		$value = getpassportnumber($email_id);
		$passport = $value['passport_no'];
		$sql = "DELETE FROM `users` WHERE `users`.`passport_no` = '$passport'";
		mysqli_query($conn, $sql);
	}

	//deactivate account
	if (isset($_POST['deactivate_ac'])) {
		$email_id = $_POST['accd'];
		$value = getpassportnumber($email_id);
		$passport = $value['passport_no'];
		$sql = "UPDATE `users` SET `status` = 'inactive' WHERE `users`.`passport_no` = '$passport'";
		mysqli_query($conn, $sql);
	}

	//change the account type
	if (isset($_POST['change_ac'])) {
		$email_id = $_POST['change'];
		$value = getpassportnumber($email_id);
		$passport =$value['passport_no'];
		$type = $_POST['opt'];
		if ($type == 'Admin') {
			$sql = "UPDATE `users` SET `AC_type` = 'A' WHERE `users`.`passport_no` = '$passport'";
			mysqli_query($conn, $sql);
		} else {
			//message error 
		}
	}
	//get passport no
	function getpassportnumber($mail)
	{
		global $conn;
		$sql = "SELECT * FROM users WHERE email='$mail'";
		$test = mysqli_query($conn, $sql);
		$tests = mysqli_fetch_assoc($test);
		return $tests;
	}
?>