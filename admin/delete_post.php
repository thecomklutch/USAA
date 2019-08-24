<?php 
	include('config.php');
	//get the post id to delete
	$email = $_POST['email'];
	//query to delete the post
	$sql = "DELETE FROM `posts` WHERE `posts`.`id` = '$email'";
	mysqli_query($conn, $sql);
	echo "Post deleted successfully";
?>