<?php
	//include the conection pack
	include 'config.php';

	//getting vars
	$msgtxt = $_POST['message'];
	$passport = $_SESSION['user']['passport_no'];
	$receiv = "Admin";

	//check if the message already exists 
	$message_check = "SELECT * FROM Notifications WHERE sender='$passport' AND message='$msgtxt'";

	if (mysqli_query($conn, $message_check) != true)
	{?>
		<div class="w3-panel w3-small w3-sand w3-round" style="margin-left: 30px; margin-right: 30px;"><h2 class="w3-small w3-text-blue" style="margin: 10px;">
			<p><?php echo "Information already passed to the admin"; ?></p></h2>
		</div>
	<?php } else if (empty($msgtxt)) {?>
		<div class="w3-panel w3-small w3-sand w3-round" style="margin-left: 30px; margin-right: 30px;"><h2 class="w3-small w3-text-blue" style="margin: 10px;">
			<p><?php echo "Empty messages not allowed "; ?></p></h2>
		</div>
	<?php } else {
		$sql = "INSERT INTO `Notifications` (`id`, `receiver`, `message`, `status`, `created_at`, `sender`) VALUES (NULL, '$receiv', '$msgtxt', 'unread', CURRENT_TIMESTAMP, '$passport')";
		mysqli_query($conn, $sql);?>
		<div class="w3-panel w3-small w3-sand w3-round" style="margin-left: 30px; margin-right: 30px;"><h2 class="w3-small w3-text-blue" style="margin: 10px;">
			<p><?php echo "Information posted to the admin"; ?></p></h2>
		</div>
	<?php }?>
