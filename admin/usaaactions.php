<?php
	//definition of all adminstrative functions to to control all the accounts and content on this platform
	
	//function to delete a post from the database
	//function to approve a suggestion from the database
	//function to delete a suggestion to the database
	//function to delete account from the database
	//fucntion to lock a user's account 
	//function to make a user an adminstrator
	//function to disarm adminstrative roles from a user 
	//function to confirm data after account editing 
	//function to post a suggestion from the administrator
	//function to approve a new user 
	//function to lock all accounts for information verification
	//function to call for missing information 
	//function to remind a user about his or her mismatching information
	//function to clear suggestions according to the year of creation

	//get command id to determine the action to be taken 
	//configurations file
	include ('../USAAstudent/config.php');
	$actiontype = $_POST['action_lebel'];
	$actionx = $_POST['action_id'];

	//determination  of the type and calling the corresponding function with required args
	if ($actiontype =="Delete suggestion"){deletepost($actionx);} //delete the a suggestion
	if ($actiontype =="Approve suggestion"){approvepost($actionx);} //approve suggestion
	if ($actiontype =="Delete post"){deletepost2($actionx);} //delete a post
	if ($actiontype =="Approve account"){approveaccount($actionx);} //approve account
	if ($actiontype =="Delete new"){deletenewuser($actionx);} //deleting new user 
	if ($actiontype =="Delete old user"){deleteolduser($actionx);} //Delete old users account
	if ($actiontype =="Lock account"){lockaccount($actionx);} //Lock/deactivate  user's account 
	if ($actiontype =="Unlock account"){unlockaccount($actionx);} // Unlock user's account
	if ($actiontype =="Arm account"){makeadmin($actionx);} //make account an administrator
	if ($actiontype =="Power lose"){disarmaccount($actionx);} //Disarm an account
	if ($actiontype =="Edit account"){editaccount($actionx);} //Edit users account
	if ($actiontype =="Lock all"){Lockall($actionx);} //Lock all accounts with a common cause
	if ($actiontype =="Lock info"){missinginfolock($actionx);} //Missing information account lock 
	if ($actiontype =="suggest") {suggest();} //post the suggestion to the database

	
	function deletepost($worktodo)
	{
		global $conn;
		$sql = "DELETE FROM `posts` WHERE `posts`.`id` = '$worktodo'";
		mysqli_query($conn, $sql);
		echo "Post deleted successfully";
	}
	
	function approvepost($worktodo)
	{
		global $conn;
		$sql = "UPDATE `posts` SET `approved` = '1' WHERE `posts`.`id` = '$worktodo'";
		mysqli_query($conn, $sql);
		echo "Post approved successfully";
	}
	
	function deletepost2($worktodo)
	{
		global $conn;
		$sql = "DELETE FROM `events` WHERE `events`.`id` = '$worktodo'";
		mysqli_query($conn, $sql);
		echo "Event deleted successfully.";
	}
	
	function approveaccount($worktodo)
	{
		global $conn;
		$sql = "UPDATE `users` SET `status` = 'active' WHERE `users`.`passport_no` = '$worktodo'";
		mysqli_query($conn, $sql);
		echo "Account activated successfully";
	}
	
	function deletenewuser($worktodo)
	{
		global $conn;
		$sql = "DELETE FROM `users` WHERE `users`.`passport_no` = '$worktodo'";
		mysqli_query($conn, $sql);
		echo "Account request deleted.";
	}
	function deleteolduser($worktodo)
	{
		global $conn;
		$sql = "DELETE FROM `users` WHERE `users`.`passport_no` = '$worktodo'"; //delete personal data 
		$sql1 = "DELETE * FROM `posts` WHERE `post`.`passport_no` = '$worktodo'"; //delete all related posts
		$sql2 = "DELETE * FROM `events` WHERE `events`.`passport_no` = '$worktodo'"; //delete all events and announcements 
		mysqli_query($conn, $sql);
		mysqli_query($conn, $sql1);
		mysqli_query($conn, $sql2);
		echo "Account details deleted";
		echo "Posts and suggestions deleted. ";
	}
	function lockaccount($worktodo)
	{
		global $conn;
		$sql = "UPDATE `users` SET `status` = 'Locked' WHERE `users`.`passport_no` = '$worktodo'";
		mysqli_query($conn, $sql);
		//send a message to the message box ofthe user 
		echo "Account locked successfully";
	}
	
	function unlockaccount($worktodo)
	{
		global $conn;
		$sql = "UPDATE `users` SET `status` = 'active' WHERE `users`.`passport_no` = '$worktodo'";
		mysqli_query($conn, $sql);
		//send a message to the message box ofthe user 
		echo "Account locked successfully";
	}
	
	function makeadmin($worktodo)
	{
		global $conn;
		$sql = "UPDATE `users` SET `AC_type` = 'A', `work` = 'Representative' WHERE `users`.`passport_no` = '$worktodo'";
		mysqli_query($conn, $sql);
		echo "User made an adminstrator and a Representative.";
	}
	
	function disarmaccount($worktodo)
	{
		global $conn;
		$sql = "UPDATE `users` SET `AC_type` = 'N', `work` = 'None' WHERE `users`.`passport_no` = '$worktodo'";
		mysqli_query($conn, $sql);
		echo "User removed from adminstrators list";
	}
	 
	function suggest()
	{
		global $conn;
		$suggestion = $_POST['suggestion']; //content of the post
		$sql = "INSERT INTO `events` (`id`, `passport_no`, `type`, `title`, `description`, `created_by`, `created_at`) VALUES (NULL, '#####', 'A', '$action_id', '$suggestion', 'Admin', CURRENT_TIMESTAMP)";
		mysqli_query($conn, $sql);
		echo "Suggestion posted.";
	}
	
		
?>
