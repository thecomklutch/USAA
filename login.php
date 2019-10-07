<?php include('USAAstudent/head.php');?>
<?php include('USAAstudent/config.php');?>
<?php include('USAAstudent/signup_login.php');?>

<link rel="stylesheet" href="style_sheets/fontawesome-free-5.10.2-web/css/font-awesome.min.css">
<link rel="icon" href="USAAstudent/images/usaa.ico">

<title>Login</title>
</head>
<body style="
	background: #373b44; /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #373b44, #4286f4); /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #373b44, #4286f4);
">
	<noscript><div style="background-color: #ba3529; border-radius: 3px; max-width: 400px; margin: 0 auto; margin-top: 20px; padding: 20px;"><span style="color: white">Please Enable javascript in your browser to use the USAA student platform</span></div></noscript>
	<div id="card" class="w3-modal-content w3-card-4 w3-text-center" style="max-width: 400px; margin-top: 40px;">
	
		<div class="w3-center"><br>
			<img src="USAAstudent/images/usaa.jpg" class="w3-circle w3-margin-top w3-small" alt="usaa">
		</div>
		<form class="w3-container" method="post" action="login.php">
			<?php include 'USAAstudent/errors.php'; ?>
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
					<button id="btn" name="login" class="w3-button w3-block w3-blue w3-round w3-section w3-round w3-padding w3-section " type="submit" >Login</button>
			</div class ="w3-text-center">
			<div class="w3-container">
				<!--forgot section-->
				<h2 id="forgot" class="w3-small w3-section"><a href="#">Forgot password?</a> or <a href="signup.php">Sign up</a></h2>
			</div>
		</form>
</div>