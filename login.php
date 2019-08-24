<?php include('head.php');?>
<?php include('config.php');?>
<?php include('signup_login.php');?>
<title>Login</title>
</head>
<body>
	<div class="w3-modal-content w3-card-4" style="max-width: 600px; margin-top: 40px;">
		<div class="w3-center"><br>
			<img src="usaa.jpg" class="w3-circle w3-margin-top w3-small" alt="usaa">
		</div>
		<form class="w3-container" method="post" action="login.php">
			<?php include 'errors.php'; ?>
			<div class="w3-section">
				<label>E-mail/Phone_number:</label>
				<input type="text" name="in1" placeholder="Email or Phone Number" class="w3-input w3-light-grey w3-border w3-round">
				<label>Password:</label>
				<input type="password" minlength="6" maxlength="10" name="pass1" placeholder="Password" class="w3-input w3-light-grey w3-border w3-round" >
				<br>
					<button name="login" class="w3-button w3-block w3-blue w3-round w3-section w3-round w3-padding" type="submit" style="width:40%;">Login</button>
			</div>
			<div class="w3-container">
				<hr>
				<h2 class="w3-small"><a href="#">Forgot password?</a> or <a href="signup.php">Sign up</a></h2>
			</div>
		</form>
</div>