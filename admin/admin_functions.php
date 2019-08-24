<?php
	//get all unapproved suggestions
	function unapproved() {
		global $conn;
		$sql = "SELECT * FROM posts WHERE approved='0' ORDER BY `id` DESC";
		$result = mysqli_query($conn, $sql);

		//get all unapproved posts
		$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $posts;
	}

	//get all posts and announcements 
	function allposts()
	{
		global $conn;
		$sql = "SELECT * FROM events";
		$result = mysqli_query($conn, $sql);
		$allposts = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $allposts;
	}

	//get all suggestions
	function all_suggestions()
	{
		global $conn;
		$sql = "SELECT * FROM posts WHERE approved='1' ORDER BY `id` DESC";
		$result = mysqli_query($conn, $sql);
		$allsuggestions = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $allsuggestions;
	}

	//get all accounts fromt the database
	function allaccounts()
	{
		global $conn;
		$sql = "SELECT * FROM users WHERE status='active'";
		$result = mysqli_query($conn, $sql);
		$acc = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $acc;
	}

	//get all student's reprensentatives 
	function studentsleaders()
	{
		global $conn;
		$sql = "SELECT * FROM users WHERE work!='None'";
		$result = mysqli_query($conn, $sql);
		$sl = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $sl;
	}

	//ACCOUNTS NOT yet verified
	function accountsrequests()
	{
		global $conn;
		$sql = "SELECT * FROM users WHERE status='Pending'";
		$result = mysqli_query($conn, $sql);
		$accounts_requests = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $accounts_requests; 
	}
	
	//getting all willayaz
	function allwilayaz()
	{
		global $conn;
		$sql = "SELECT wilaya FROM wilayastats";
		$result = mysqli_query($conn, $sql);
		$results = mysqli_fetch_all($result, MYSQLI_ASSOC);
		//remove the duplicates
		return $results;
	}
	
	//getting all universiteies
	function universitiez()
	{
		global $conn;
		$sql = "SELECT universities FROM details";
		$result = mysqli_query($conn, $sql);
		$university = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $university;
	}

	//get bank accounts 
	function banksaccounts()
	{
		global $conn;
		$sql = "SELECT * FROM bdetails";
		$result = mysqli_query($conn, $sql);
		$bankaccountz = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $bankaccountz;
	}

	//return the courrse requests 
	function courserequest()
	{
		global $conn;
		$sql = "SELECT * FROM `coursechange`";
		$result = mysqli_query($conn, $sql);
		$requests = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $requests;
	}

	//get messages for the adminstrator
	function messagesforadmin()
	{
		global $conn;
		$sql = "SELECT * FROM `Notifications` WHERE receiver='Admin'";
		$msg = mysqli_query($conn, $sql);
		$msgs = mysqli_fetch_all($msg, MYSQLI_ASSOC);
		return $msgs;
	}
	
	
?>
       
