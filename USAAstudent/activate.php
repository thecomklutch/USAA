
<?php include('head.php');?>
<?php require_once('config.php');?>
<?php include('activation.php');?>
<?php if (isset($_SESSION['user'])) {
	$user = $_SESSION['user']['first'];}
?>
<!-- include the activation fil here-->
<title>Activate account</title>
</head>
<body>
	<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width: 600px; margin-top: 100px;">
		<div class="w3-center"><br>
			<h2 class="w3-small">Dear Activate <b><?php echo $user; ?></b> ure Account</h2>
		</div>
		<!--
		<?php include('errors.php'); ?>
		-->
		<form class="w3-container" method="post" action="activate.php">
			<div class="w3-section">
				<label>Activation Code:</label>
				<input type="text" name="code" placeholder="Activation code" class="w3-input w3-light-grey w3-border w3-round" required>
				<br>
					<button name="activate" class="w3-button w3-block w3-blue w3-round w3-section w3-round w3-padding" type="submit" style="width:40%;">Activate</button>
					<?php include('errors.php');?>
			</div>
			<hr>
			<h2 class="w3-small"><a href="#">Wrong E-mail address?</a></h2>
		</form>
</div>