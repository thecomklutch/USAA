<?php
	//get the connection blade
	include('config.php');

	//get the values from the users 
	$posttype = $_POST['posttype'];
	$posttitle = $_POST['posttitle'];
	$postcontent = $_POST['postcontent'];
	$postdate = $_POST['postdate'];
	//get values from users session
	$name = $_SESSION['user']['first'];
	$passport = $_SESSION['user']['passport_no'];

	//check for empty strings
	if (empty($posttype) || empty($posttitle) || empty($postcontent) || empty($postdate)){?>
		<div class="w3-panel w3-small w3-sand w3-round" style="margin-left: 30px; margin-right: 30px;"><h2 class="w3-small w3-text-blue" style="margin: 10px;">
			<p><?php echo "Some Information Missing"; ?></p></h2>
		</div>
		<?php exit(0);?>
	<?php }
	//checking if the post is not already existing
	$check_sql = "SELECT * FROM events WHERE passport_no='$passport' AND description='$postcontent'";
	$check_sql_2 = mysqli_query($conn, $check_sql);
	$check_results = mysqli_fetch_all($check_sql_2, MYSQLI_ASSOC);
	
	if (count($check_results) > 0){?>
			<div class="w3-panel w3-small w3-sand w3-round" style="margin-left: 30px; margin-right: 30px;"><h2 class="w3-small w3-text-blue" style="margin: 10px;">
				<p><?php echo "You have already posted this updated"; ?></p></h2>
			</div>
	<?php } else { //selecting if the content is an event or an announcement
		//if its an announcement it is posted respectively
		if ($posttype == 'event'){
			$sql = "INSERT INTO `events` (`id`, `passport_no`, `type`, `title`, `description`, `date`, `created_by`, `created_at`) VALUES (NULL, '$passport', 'E', '$posttitle', '$postcontent', '$postdate', '$name', CURRENT_TIMESTAMP)";
			mysqli_query($conn, $sql);

			?>
			<div class="w3-panel w3-small w3-sand w3-round" style="margin-left: 30px; margin-right: 30px;"><h2 class="w3-small w3-text-blue" style="margin: 10px;">
				<p><?php echo "Event posted succesfully."; ?></p></h2>
			</div>
			<?php } else if ($posttype = 'announce') {
				//else the content is posted as an announcement
				$sql = "INSERT INTO `events` (`id`, `passport_no`, `type`, `title`, `description`, `date`, `created_by`, `created_at`) VALUES (NULL, '$passport', 'A', '$posttitle', '$postcontent', '$postdate', '$name', CURRENT_TIMESTAMP)";
				mysqli_query($conn, $sql);?>
				<div class="w3-panel w3-small w3-sand w3-round" style="margin-left: 30px; margin-right: 30px;"><h2 class="w3-small w3-text-blue" style="margin: 10px;">
					<p><?php echo "Announcement posted succesfully."; ?></p></h2>
				</div>
			<?php } else {?>
				<div class="w3-panel w3-small w3-sand w3-round" style="margin-left: 30px; margin-right: 30px;"><h2 class="w3-small w3-text-blue" style="margin: 10px;">
					<p><?php echo "An error occured."; ?></p></h2>
				</div>
	<?php }} ?>