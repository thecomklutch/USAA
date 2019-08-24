<?php 
	//auxilliary actions for the platform 
	include ('config.php');
	//get the criterea and so the sanitization
	$wilayax = $_POST['wilaya2'];
	$academicyear = $_POST['year2'];
	$course = $_POST['course2'];
	//get the action 
	$action = $_POST['action2'];
	//get the message 
	$messagex = $_POST['reason2'];
	
	
	//logic
	if ($wilayax == "all" && $academicyear == "all" && $course == "all" && $action == "Lock") {allselectedLock($messagex);}
	elseif ($wilayax == "all" && $academicyear == "all" && $course == "all" && $action != "Lock") {allselectedNotification($messagex);}
	
	elseif ($wilayax != "all" && $academicyear == "all" && $course == "all" && $action == "Lock") {wilayaselectedLock($wilayax, $messagex);}
	elseif ($wilayax != "all" && $academicyear == "all" && $course == "all" && $action != "Lock") {wilayaselectedNotification($wilayax, $messagex);}
	 
	elseif ($wilayax != "all" && $academicyear != "all" && $course == "all" && $action == "Lock") {courseNotselectedLock($wilayax, $academicyear, $messagex);}
	elseif ($wilayax != "all" && $academicyear != "all" && $course == "all" && $action != "Lock") {courseNotselectedNotification($wilayax, $academicyear, $messagex);}
	
	elseif ($wilayax == "all" && $academicyear == "all" && $course != "all" && $action == "Lock") {courseselectedLock($course, $messagex);}
	elseif ($wilayax == "all" && $academicyear == "all" && $course != "all" && $action != "Lock") {courseselectedNotification($course, $messagex);}
	 
	elseif ($wilayax == "all" && $academicyear != "all" && $course != "all" && $action == "Lock") {wilayaNotselectedLock($course, $academicyear, $messagex);}
	elseif ($wilayax == "all" && $academicyear != "all" && $course != "all" && $action != "Lock") {wilayaNotselectedNotification($course, $academicyear, $messagex);}
	 
	elseif ($wilayax != "all" && $academicyear != "all" && $course != "all" && $action == "Lock") {allNotselectedLock($messagex);}
	else {allNotselectedNotification($messagex);}
	 
	 //when wilaya(all), year(all), courses(all)
	 function allselectedLock($msg) //Locking the accounts 
	 {
		 global $conn;
		 //get all students from the database
		 $sql1 = "SELECT passport_no FROM users";
		 $Exec1 = mysqli_query($conn, $sql1);
		 while ($user_id = mysqli_fetch_assoc($Exec1))
		 {
			 $id = $user_id['passport_no'];
			 $sql = "UPDATE `users` SET `status` = 'Locked', `msg_state` = '$msg' WHERE `users`.`passport_no` = '$id'";
			 mysqli_query($conn, $sql);
			 echo "Account Locked";
		 }
		 echo "Operation Done..";
	 }
	 
	 function allselectedNotification($msg) //Notifying all the users 
	 {
		 global $conn;
		 //get all students from the database
		 $sql1 = "SELECT passport_no FROM users";
		 $Exec1 = mysqli_query($conn, $sql1);
		 while ($user_id = mysqli_fetch_assoc($Exec1))
		 {
			 $id = $user_id['passport_no'];
			 $sql = "INSERT INTO `Notifications` (`id`, `receiver`, `message`, `status`) VALUES (NULL, '$id', '$msg', 'unread')";
			 mysqli_query($conn, $sql);
			 echo "Account Notified";
		 }
		 echo "Notifications sent..";
	 }
	  
	 //when wilaya(*), year(all), courses(all)
	 function wilayaselectedLock($wilayay, $msg)
	 {
		 global $conn;
		 //get all students from the database
		 $sql1 = "SELECT passport_no FROM users WHERE wilaya='$wilayay'";
		 $Exec1 = mysqli_query($conn, $sql1);
		 
		 while ($user_id = mysqli_fetch_assoc($Exec1))
		 {
			 $id = $user_id['passport_no'];
			 $sql = "UPDATE `users` SET `status` = 'Locked', `msg_state` = '$msg' WHERE `users`.`passport_no` = '$id'";
			 mysqli_query($conn, $sql);
			 echo "Account Locked";
		 }
		 echo "Operation Done..";
	 }
	 
	 function wilayaselectedNotification($wilayay, $msg) 
	 {
		 global $conn;
		 //get all students from the database
		 $sql1 = "SELECT passport_no FROM users WHERE wilaya='$wilayay'";
		 $Exec1 = mysqli_query($conn, $sql1);
		 while ($user_id = mysqli_fetch_assoc($Exec1))
		 {
			 $id = $user_id['passport_no'];
			 $sql = "INSERT INTO `Notifications` (`id`, `receiver`, `message`, `status`) VALUES (NULL, '$id', '$msg', 'unread')";
			 mysqli_query($conn, $sql);
			 echo "Account Notified";
		 }
		 echo "Notifications sent..";
	 }
	 
	 //when wilaya(*), year(*), courses(all)
	 function courseNotselectedLock($wilayay, $yeary, $msg)
	 {
		 global $conn;
		 //get all students from the database
		 $sql1 = "SELECT passport_no FROM users WHERE wilaya='$wilayay' AND year='$yeary'";
		 $Exec1 = mysqli_query($conn, $sql1);
		 while ($user_id = mysqli_fetch_assoc($Exec1))
		 {
			 $id = $user_id['passport_no'];
			 $sql = "UPDATE `users` SET `status` = 'Locked', `msg_state` = '$msg' WHERE `users`.`passport_no` = '$id'";
			 mysqli_query($conn, $sql);
			 echo "Account Locked";
		 }
		 echo "Operation Done..";
	 }
	 
	 function courseNotselectedNotification($wilayay, $yeary, $msg) 
	 {
		 global $conn;
		 //get all students from the database
		 $sql1 = "SELECT passport_no FROM users WHERE wilaya='$wilayay' AND year='$yeary'";
		 $Exec1 = mysqli_query($conn, $sql1);
		 while ($user_id = mysqli_fetch_assoc($Exec1))
		 {
			 $id = $user_id['passport_no'];
			 $sql = "INSERT INTO `Notifications` (`id`, `receiver`, `message`, `status`) VALUES (NULL, '$id', '$msg', 'unread')";
			 mysqli_query($conn, $sql);
			 echo "Account Notified";
		 }
		 echo "Notifications sent..";
	 }
	 
	 
	 //when wilaya(all), year(all), courses(*)
	  function courseselectedLock($coursey, $msg)
	 {
		 global $conn;
		 //get all students from the database
		 $sql1 = "SELECT passport_no FROM users WHERE course='$coursey'";
		 $Exec1 = mysqli_query($conn, $sql1);
		 while ($user_id = mysqli_fetch_assoc($Exec1))
		 {
			 $id = $user_id['passport_no'];
			 $sql = "UPDATE `users` SET `status` = 'Locked', `msg_state` = '$msg' WHERE `users`.`passport_no` = '$id'";
			 mysqli_query($conn, $sql);
			 echo "Account Locked";
		 }
		 echo "Operation Done..";
	 }
	 
	 function courseselectedNotification($coursey, $msg) 
	 {
		 global $conn;
		 //get all students from the database
		 $sql1 = "SELECT passport_no FROM users WHERE course='$coursey'";
		 $Exec1 = mysqli_query($conn, $sql1);
		 while ($user_id = mysqli_fetch_assoc($Exec1))
		 {
			 $id = $user_id['passport_no'];
			 $sql = "INSERT INTO `Notifications` (`id`, `receiver`, `message`, `status`) VALUES (NULL, '$id', '$msg', 'unread')";
			 mysqli_query($conn, $sql);
			 echo "Account Notified";
		 }
		 echo "Notifications sent..";
	 }
	 
	 //when wilaya(all), year(*), courses(*)
	 function wilayaNotselectedLock($coursey, $yeary, $msg)
	 {
		 global $conn;
		 //get all students from the database
		 $sql1 = "SELECT passport_no FROM users WHERE course='$coursey' AND year='$yeary'";
		 $Exec1 = mysqli_query($conn, $sql1);	 
		 while ($user_id = mysqli_fetch_assoc($Exec1))
		 {
			 $id = $user_id['passport_no'];
			 $sql = "UPDATE `users` SET `status` = 'Locked', `msg_state` = '$msg' WHERE `users`.`passport_no` = '$id'";
			 mysqli_query($conn, $sql);
			 echo "Account Locked";
		 }
		 echo "Operation Done..";
	 }
	 
	 function wilayaNotselectedNotification($coursey, $yeary, $msg) 
	 {
		 global $conn;
		 //get all students from the database
		 $sql1 = "SELECT passport_no FROM users WHERE course='$coursey' AND year='$yeary'";
		 $Exec1 = mysqli_query($conn, $sql1); 
		 while ($user_id = mysqli_fetch_assoc($Exec1))
		 {
			 $id = $user_id['passport_no'];
			 $sql = "INSERT INTO `Notifications` (`id`, `receiver`, `message`, `status`) VALUES (NULL, '$id', '$msg', 'unread')";
			 mysqli_query($conn, $sql);
			 echo "Account Notified";
		 }
		 echo "Notifications sent..";
	 }
	 
	 
	 //when wilaya(*), year(*), courses(*)
	 function allNotselectedLock($coursey, $yeary, $msg)
	 {
		 global $conn;
		 //get all students from the database
		 $sql1 = "SELECT passport_no, wilaya FROM users WHERE course='$coursey' AND year='$yeary'";
		 $Exec1 = mysqli_query($conn, $sql1);
		 $users_id = mysqli_fetch_assoc($Exec1);
		 foreach ($users_id as $user_id)
		 {
			 $sql = "UPDATE `users` SET `status` = 'Locked', `msg_state` = '$msg' WHERE `users`.`passport_no` = '$user_id'";
			 mysqli_query($conn, $sql);
			 echo "Account Locked";
		 }
		 echo "Operation Done..";
	 }
	 
	 function allNotselectedNotification($coursey, $yeary, $msg) 
	 {
		 global $conn;
		 //get all students from the database
		 $sql1 = "SELECT passport_no, wilaya FROM users WHERE course='$coursey' AND year='$yeary'";
		 $Exec1 = mysqli_query($conn, $sql1);
		 $users_id = mysqli_fetch_assoc($Exec1);
		 foreach ($users_id as $user_id)
		 {
			 $sql = "INSERT INTO `Notifications` (`id`, `receiver`, `message`, `status`) VALUES (NULL, '$user_id', '$msg', 'unread')";
			 mysqli_query($conn, $sql);
			 echo "Account Notified";
		 }
		 echo "Notifications sent..";
	 }
	 



?>
