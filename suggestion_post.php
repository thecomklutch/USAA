<?php
	
	//get the passport number of the user and other details
	$passport = $_SESSION['user']['passport_no'];
	$first_name = $_SESSION['user']['first'];
	$wilaya = $_SESSION['user']['wilaya'];
	//get the suggestion
	$suggestion = $_POST['suggesty'];
	//check if the suggestion is empty
		$query = "INSERT INTO `posts` (`passport_no`, `post`, `approved`, `created_by`, `wilaya`, `created_at`) VALUES ('$passport', '$suggestion', '0', '$first_name', '$wilaya', CURRENT_TIMESTAMP)";
		mysqli_query($conn, $query);?>
		 <div class="w3-panel w3-small w3-sand w3-round" style="margin-left: 30px; margin-right: 30px;"><h2 class="w3-small w3-text-blue" style="margin: 10px;">Suggestion submmited</h2></div>
		 <?php ?>
