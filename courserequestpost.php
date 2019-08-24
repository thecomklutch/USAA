<?php
	//include the connection pack
	include('config.php');

	//get the values from the users 
	$pcourse = $_POST['pcourse'];
	$course1 = $_POST['course1'];
	$course2 = $_POST['course2'];
	$reason = $_POST['reason'];
	$wilaya1 = $_POST['wilaya1'];
	$wilaya2 = $_POST['wilaya2'];
	$passport = $_SESSION['user']['passport_no'];
	$original = $_SESSION['user']['first']." ".$_SESSION['user']['second'];


	if (empty($pcourse) || empty($course1) || empty($course2) || empty($reason) || empty($wilaya2) || empty($wilaya1)) {?>
		<div class="w3-panel w3-small w3-sand w3-round" style="margin-left: 30px; margin-right: 30px;"><h2 class="w3-small w3-text-blue" style="margin: 10px;">
			<p><?php echo "Some missing information"; ?></p></h2>
			<?php exit(0);?>
		</div>

	<?php } else {
		$sql = "INSERT INTO `coursechange` (`id`, `passport_no`, `names`, `previouscourse`, `course1`, `course2`, `wilaya1`, `wilaya2`, `reaason`, `submitted_at`) VALUES (NULL, '$passport', '$original', '$pcourse', '$course1', '$course2', '$reason', '$wilaya1', '$wilaya2', CURRENT_TIMESTAMP)"; //insertion query
		if (mysqli_query($conn, $sql) == True)
		{?>
			<div class="w3-panel w3-small w3-sand w3-round" style="margin-left: 30px; margin-right: 30px;"><h2 class="w3-small w3-text-blue" style="margin: 10px;">
				<p><?php echo "Course change request submitted sucessfully."; ?></p></h2>
				<?php exit(0);?>
			</div>
		</div>
	<?php } else {?>
		<div class="w3-panel w3-small w3-sand w3-round" style="margin-left: 30px; margin-right: 30px;"><h2 class="w3-small w3-text-blue" style="margin: 10px;">
			<p><?php echo "Somethinng wrong with ure information recheck and try again"; ?></p></h2>
			<?php exit(0);?>
		</div>
	<?php }}?>