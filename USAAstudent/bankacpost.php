<?php
	//include the connection pack
	include('config.php');

	//declaring vars 
	$bankowner = $owneraddr = $bankname = $bankaccount = $bankaddress = $actype = '';
	//get the values from the users 
	$bankowner = $_POST['ownername'];
	$owneraddr = $_POST['owneraddress'];
	$bankname = $_POST['banknom'];
	$bankaccount = $_POST['bankac'];
	$bankaddress = $_POST['bankaddr'];
	$actype = $_POST['accounttype'];
	$swiftcode = $_POST['swift'];
	$passport = $_SESSION['user']['passport_no'];
	$original = $_SESSION['user']['first']." ".$_SESSION['user']['second'];


	if (empty($bankowner) || empty($owneraddr) || empty($bankname) || empty($bankname) || empty($bankaddress) || empty($actype)) {?>
		<div class="w3-panel w3-small w3-sand w3-round" style="margin-left: 30px; margin-right: 30px;"><h2 class="w3-small w3-text-blue" style="margin: 10px;">
			<p><?php echo "Some missing information"; ?></p></h2>
			<?php exit(0);?>
		</div>
	<?php } else if($original != $bankowner) {?>
		<div class="w3-panel w3-small w3-sand w3-round" style="margin-left: 30px; margin-right: 30px;"><h2 class="w3-small w3-text-blue" style="margin: 10px;">
			<p><?php echo "Your Bank names are different from your original names."; ?></p></h2>
			<?php exit(0);?>
		</div>
	<?php } else {
		$sql = "INSERT INTO `bdetails` (`Names`, `personal_address`, `Account_no`, `swift_code`, `Bank_name`, `Bank_Address`, `AccountType`, `Submitted_at`, `passsport_no`) VALUES ('$bankowner', '$owneraddr', '$bankaccount', '$swiftcode', '$bankname', '$bankaddress', '$actype', CURRENT_TIMESTAMP, '$passport')"; //insertion query
		if (mysqli_query($conn, $sql) == True)
		{?>
			<div class="w3-panel w3-small w3-sand w3-round" style="margin-left: 30px; margin-right: 30px;"><h2 class="w3-small w3-text-blue" style="margin: 10px;">
				<p><?php echo "Bank detaills submitted sucessfully."; ?></p></h2>
				<?php exit(0);?>
			</div>
		</div>
	<?php } else {?>
		<div class="w3-panel w3-small w3-sand w3-round" style="margin-left: 30px; margin-right: 30px;"><h2 class="w3-small w3-text-blue" style="margin: 10px;">
			<p><?php echo "Somethinng wrong with ure information recheck and try again"; ?></p></h2>
			<?php exit(0);?>
		</div>
	<?php }}?>