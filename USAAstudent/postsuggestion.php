<?php
	//include the connection pack
	include('config.php');
	//get the values
	$post = $_POST['suggestion'];
	//get values from the current person's session
	$passport = $_SESSION['user']['passport_no'];
	$first_name = $_SESSION['user']['first'];
	$wilaya = $_SESSION['user']['wilaya'];
	//check for empty input 
	if (empty($post)){?>
		<div class="w3-panel w3-small w3-sand w3-round" style="margin-left: 30px; margin-right: 30px;"><h2 class="w3-small w3-text-blue" style="margin: 10px;">
			<p><?php echo "Empty suggestions not allowed"; ?></p></h2>
			<?php exit(0);?>
		</div>
	<?php }
	//check wheather the peerson hasn't posted twice
	$sql = "SELECT * FROM posts WHERE passport_no='$passport' AND post='$post'";
	$filter = mysqli_query($conn, $sql);
	$filter_final = mysqli_fetch_all($filter, MYSQLI_ASSOC);

	if (count($filter_final) > 0){?>
		<div class="w3-panel w3-small w3-sand w3-round" style="margin-left: 30px; margin-right: 30px;"><h2 class="w3-small w3-text-blue" style="margin: 10px;">
			<p><?php echo "You already posted this suggestion"; ?></p></h2>
			
		</div>
		<?php } else {
			$query = "INSERT IGNORE INTO `posts` (`passport_no`, `post`, `approved`, `created_by`, `wilaya`, `created_at`) VALUES ('$passport', '$post', '0', '$first_name', '$wilaya', CURRENT_TIMESTAMP)";
			if (mysqli_query($conn, $query) == true) {
				// drop the unwanted column added to the table 
				mysqli_query($conn, 'ALTER TABLE `posts` DROP year');
				?>
			<div class="w3-panel w3-small w3-sand w3-round" style="margin-left: 30px; margin-right: 30px;"><h2 class="w3-small w3-text-blue" style="margin: 10px;">
				<p><?php echo "Suggestion Pending for approval"; ?></p></h2>
			</div>
			<?php } else { echo mysqli_error($conn);}?>
			<?php }?>