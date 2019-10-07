<?php include 'verifyaccount.php';?>
<?php include 'head.php';?>
	<link rel="stylesheet" href="../style_sheets/succestick.css">
    <title>Email verification</title>
</head>
<body style="
	background: #373b44; /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #373b44, #4286f4); /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #373b44, #4286f4);
">
<div class="w3-container w3-border w3-round" style="margin: 0 auto; width: 75%; margin-top: 30px;">
		<div class="w3-center"><br>
			<img src="images/usaa.jpg" class="w3-circle w3-small" alt="usaa" style="width: 160px; height: 160px; margin-top: 0px;">
		</div>
		<br />
		<div id="verificationform" style="padding: 30px">
			<span style="color: #c1d3d4">Please enter the verification code sent to your email</span><br /><br />
			<form method="post" action="accountemailverfication.php">
				<input class="w3-input w3-round" name="code" type='number'>
				<br />
				<button class="w3-small w3-green w3-round w3-hover-none w3-button" type="submit" name="verify">Verify</button>
				<br />
				<?php include 'errors.php';?>
			</form>
		</div>
	</div>
	<div id="msg" style="display: none; border: 1px solid; border-radius: 3px; padding: 20px; margin: 0 auto; width: 50px; margin-top: 200px; background-color: #76b08f">
  		<span style="color: white">Email verified successfully, your account will be activated within 24hour<br />Thank you</span>
	</div>
</body>
</html>