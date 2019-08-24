<?php
	session_start();
	//connect to the dtabase
	$conn =mysqli_connect("localhost", "root", "", "usaa");
	

	if (!$conn) {
		die ("Error connecting to database: ".mysqli_connect_error());
	}
	
?>