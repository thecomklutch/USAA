<?php 

	/*get the ip address of the new logged in user 
	function getRealIpAddr()
	{
		if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
		{
		$ip=$_SERVER['HTTP_CLIENT_IP'];
		}
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
		{
		$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else
		{
		$ip=$_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}

	//getting location info
	function getLocationInfoByIp(){
		$client  = @$_SERVER['HTTP_CLIENT_IP'];
		$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
		$remote  = @$_SERVER['REMOTE_ADDR'];
		$result  = array('country'=>'', 'city'=>'');
		if(filter_var($client, FILTER_VALIDATE_IP)){
			$ip = $client;
		}elseif(filter_var($forward, FILTER_VALIDATE_IP)){
			$ip = $forward;
		}else{
			$ip = $remote;
		}
		$ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));    
		if($ip_data && $ip_data->geoplugin_countryName != null){
			$result['country'] = $ip_data->geoplugin_countryCode;
			$result['city'] = $ip_data->geoplugin_city;
		}
		return $result['country'];
	}

	function usersdata() {
		global $conn;
		$names = $_SESSION['user']['first']. ' '.$_SESSION['user']['second'];
		$passport_details = $_SESSION['user']['passport_no'];
		$ip = getRealIpAddr();
    	$country = getLocationInfoByIp();

		//insert it into the database
		$sql = "INSERT INTO `usersdata` (`id`, `passport_no`, `names`, `ip`, `location`) VALUES (NULL, '$passport_details', '$names', '$ip', '$country')";
		mysqli_query($conn, $sql);

	}
	usersdata();
	*/
	//get  2 latest approved suggestions to dispplay 
	function getsuggestions()
	{
		global $conn;
		$suggestions = array();
		$sql = "SELECT * FROM posts WHERE approved=true ORDER BY `id` DESC LIMIT 2";
		$result = mysqli_query($conn, $sql);
		while ($suggestion = mysqli_fetch_assoc($result)) {array_push($suggestions, $suggestion);}
		return $suggestions;
	}

	//get the latest announcements to display
	function getannouncements()
	{
		global $conn;
		$announcements = array();
		$sql1 = "SELECT * FROM events WHERE type='A' ORDER BY 'id' DESC LIMIT 1";
		$result1 = mysqli_query($conn, $sql1);
		while ($announcement = mysqli_fetch_assoc($result1)) {array_push($announcements, $announcement);}
		return $announcements;
	}

	//get the lastes event for dispaly
	function getevents()
	{
		global $conn;
		$events = array();
		$sqli2 = "SELECT * FROM events WHERE type='E' ORDER BY 'id' DESC LIMIT 1";
		$result2 = mysqli_query($conn, $sqli2);
		while ($event1 = mysqli_fetch_assoc($result2)) {array_push($events, $event1);}
		return $events;
	}

	//get all data from the database
	//get all suggestions  
	function getsuggestion()
	{
		global $conn;
		$suggestion = array();
		$sql = "SELECT * FROM posts WHERE approved=true ORDER BY `id` DESC";
		$result = mysqli_query($conn, $sql);
		while ($suggestion1 = mysqli_fetch_assoc($result)) {array_push($suggestion, $suggestion1);}
		return $suggestion;
	}

	//get all announcements
	function getannouncement()
	{
		global $conn;
		$announcement = array();
		$sql1 = "SELECT * FROM events WHERE type='A' ORDER BY 'id' ASC";
		$result1 = mysqli_query($conn, $sql1);
		while ($announcement1 = mysqli_fetch_assoc($result1)) {array_push($announcement, $announcement1);}
		return $announcement;
	}

	//get all events 
	function getevent()
	{
		global $conn;
		$event = array();
		$sqli2 = "SELECT * FROM events WHERE type='E' ORDER BY 'id' ASC";
		$result2 = mysqli_query($conn, $sqli2);
		while ($eventx = mysqli_fetch_assoc($result2)) {array_push($event, $eventx);}
		return $event;
	}


	//get the wilaya representatives
	function getleaders()
	{
		global $conn;
		$leaders = array();
		$sql = "SELECT first, second, email, phone, wilaya FROM users WHERE status='Active' AND work!='None'";
		$exec = mysqli_query($conn, $sql);
		while ($leader = mysqli_fetch_assoc($exec)) {array_push($leaders, $leader);}
		return $leaders;
	}

	//get the bank names from the database
	//function banknames1()
	//{
	//	global $conn;
	//	$sql = "SELECT banknames FROM details";
	//	$exec = mysqli_query($conn, $sql);
	//	$bnames = mysqli_fetch_all($exec, MYSQLI_ASSOC);
	//	return $bnames;
	//}

	//get three students from every wilaya to display on the table of the home page 
	//function threestudents()
	//{
	//	global $conn;
	//	//array to hold all the received students 
	//	$somestudents = array();
	//	//get the wilaya from the stats table 
	//	$sql = "SELECT wilaya FROM wilayastats";
	//	$exec = mysqli_query($conn, $sql);
	//	$wilayaz_all = mysqli_fetch_array($exec);

	//	//iterate through the wilayaz to check the students 
	//	for ($wilayaz_all as $wilaya_all)
	//	{
	//		$sql = "SELECT first, second, email, phone, wilaya FROM users WHERE status='Active' AND wilaya='$wilaya_all' LIMIT 3";
	//		$exec = mysqli_query($conn, $sql);

	//	}
	
?>