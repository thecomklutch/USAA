<?php include('head.php');?>
<?php include('config.php');?>
<?php include('signup_login.php');?>
<link rel="stylesheet" type="text/css" href="style_sheets/login.css">
<link rel="stylesheet" href="style_sheets/fontawesome-free-5.10.2-web/css/font-awesome.min.css">
<title>Login</title>
</head>
<body>
	<div id="card" class="w3-modal-content w3-card-4 w3-text-center" style="max-width: 400px; margin-top: 40px;">
		<div class="w3-center"><br>
			<img src="usaa.jpg" class="w3-circle w3-margin-top w3-small" alt="usaa">
		</div>
		<form class="w3-container" method="post" action="login.php">
			<?php include 'errors.php'; ?>
			<div class="w3-section">
				<!--<label>E-mail/Phone_number:</label> -->
				<div>
				<input id="input" type="text" name="in1" placeholder="Email or Phone Number" class="w3-input w3-light-grey w3-border w3-round">
				</div>				
				<!--<label>Password:</label> -->
				<div class="w3-section">				
				<input id="input" type="password" minlength="6" maxlength="10" name="pass1" placeholder="Password" class="w3-input w3-light-grey w3-border w3-round" >
				</div>
				<!--button-->
					<button id="btn" name="login" class="w3-button w3-block w3-blue w3-round w3-section w3-round w3-padding w3-section " type="submit" style="width:40%;">Login</button>
			</div class ="w3-text-center">
			<div class="w3-container">
				<!--forgot section-->
				<h2 id="forgot" class="w3-small w3-section"><a href="#">Forgot password?</a> or <a href="signup.php">Sign up</a></h2>
			</div>
		</form>
</div>