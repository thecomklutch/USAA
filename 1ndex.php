<?php 
	//making sure the user has logged in with the right credentials 
	if (is_null($_SESSION['user']))
	{
		location('header: login.php');
	} else {
	 include('head.php');
	 include('config.php');
	 include('admin/admin_functions.php');
	 include('admin/admin_actions.php');
	 $unapproved = unapproved();
	 $suggestions = all_suggestions();
	 $accounts = allaccounts();
	 $account_requests = accountsrequests();?>
<title>1ndex</title>
<!-- Including jQuery is required. -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <!-- Including our scripting file. -->
<script type="text/javascript" src="admin/script.js"></script>
<script type="text/javascript" src="admin/script1.js"></script>
<script type="text/javascript" src="admin/script3.js"></script>
<script type="text/javascript" src="admin/script4.js"></script>
<script type="text/javascript" src="admin/approve.js"></script>
</head>
<body class="w3-card-4" style=" margin: 40px; min-width: 900px; overflow: scroll;">
<div class="w3-center">
	<div class="w3-container w3-nohover w3-button w3-light-grey" style="margin-top: 30px;">
		<h2 class="w3-large">WELCOME TO CONTROL</h2>
	</div>
	<img src="usaa.jpg" class="w3-circle" style="float: left; height: 100px; width: 100px; margin-top: 5px; margin-left:100px;">
	<div class="w3-right" style="margin: 20px;">
			<h2 class="w3-small"><a href="logout.php">Log out</a></h2>
			 <i class="fa fa-bell-o fa_custom" style="height: 5px;"></i> 
			 
		</div>
	<br><br><br>
	<div class="w3-row-padding">
		<div class="w3-container w3-border w3-round w3-border-light-grey w3-col s4" style="height: 450px;">
			<div class="w3-center">
				<h2 class="w3-large w3-light-grey w3-round">Accounts</h2>
				<br>
				<button onclick="document.getElementById('id011').style.display='block'" class="w3-button w3-blue w3-round w3-small" style="width: 50%;">Delete Account</button><br><p>
				<?php include('admin/delete_account.php');?>
				<button onclick="document.getElementById('id012').style.display='block'" class="w3-button w3-blue w3-round w3-small" style="width: 50%;">Account Type</button><br><p>
				<?php include('admin/change_ac_type.php');?>
				<button onclick="document.getElementById('id013').style.display='block'" class="w3-button w3-blue w3-round w3-small" style="width: 50%;">Deactivate Account</button><br><p>
				<?php include('admin/deactivate_ac.php');?>
				<button onclick="document.getElementById('id014').style.display='block'" class="w3-button w3-blue w3-round w3-small" style="width: 50%;">Edit Account</button><br><p>
				<button onclick="document.getElementById('id027').style.display='block'" class="w3-button w3-blue w3-round w3-small" style="width: 50%;">All accounts Details</button><br><p>
				<?php include('admin/all_accounts.php');?>
				<button onclick="document.getElementById('id028').style.display='block'" class="w3-button w3-blue w3-round w3-small" style="width: 50%;">New Accounts Requests</button><br><p>
				<?php include('admin/accounts_requests.php');?>
				<button onclick="document.getElementById('id028').style.display='block'" class="w3-button w3-blue w3-round w3-small" style="width: 50%;">Bank Accounts</button><br><p>
			</div>
		</div>
		<div class="w3-container w3-border w3-round w3-border-light-grey w3-col s4"  style="height: 450px;">
			<div class="w3-center">
				<h2 class="w3-large w3-light-grey w3-round">Posts And Events</h2>
				<div class="w3-container" style="height: 200px;">
				<br>
				<button onclick="document.getElementById('id014').style.display='block'" class="w3-button w3-blue w3-round w3-small" style="width: 50%;">Approve </button><br><p>
				<!-- file for approving posts -->
				<?php include('admin/approve_posts.php');?>
				<button onclick="document.getElementById('id015').style.display='block'" class="w3-button w3-blue w3-round w3-small" style="width: 50%;">All Suggestions</button><br><p>
				<?php include('admin/all_suggestions.php');?>
				<button onclick="document.getElementById('id016').style.display='block'" class="w3-button w3-blue w3-round w3-small" style="width: 50%;">Delete all</button><br><p>
				<?php include('admin/delete_all.php');?>
				<button onclick="document.getElementById('id017').style.display='block'" class="w3-button w3-blue w3-round w3-small" style="width: 50%;">Post/Announce</button><br><p>
				<?php include('admin/post_event.php');?>
				</div>
			</div><br>
			<div class="w3-center">
				<h2 class="w3-large w3-light-grey w3-round">Push Notifications</h2>
				<div class="w3-container" style="height: 200px;">
				<br>
				<button onclick="document.getElementById('id018').style.display='block'" class="w3-button w3-blue w3-round w3-small" style="width: 50%;">Custom</button><br><p>
				<button onclick="document.getElementById('id019').style.display='block'" class="w3-button w3-blue w3-round w3-small" style="width: 50%;">Missing Information</button><br><p>
			</div>
		</div>
		</div>
		<div class="w3-container w3-border w3-round w3-border-light-grey w3-col s4" style="height: 450px;">
			<div class="w3-center">
				<h2 class="w3-light-grey w3-large w3-round">Information Control</h2>
				<br>
				<button onclick="document.getElementById('id020').style.display='block'" class="w3-button w3-blue w3-round w3-small" style="width: 50%;">Emails and Phones</button><br><p>
				<?php include('admin/contact_details.php');?>
				<button onclick="document.getElementById('id021').style.display='block'" class="w3-button w3-blue w3-round w3-small" style="width: 50%;">Passport Details</button><br><p>
				<?php include('admin/pass_details.php');?>
				<button onclick="document.getElementById('id022').style.display='block'" class="w3-button w3-blue w3-round w3-small" style="width: 50%;">Student's Universities Details</button><br><p>
				<?php include('admin/university_details.php');?>
				<button onclick="document.getElementById('id023').style.display='block'" class="w3-button w3-blue w3-round w3-small" style="width: 50%;">Wilaya</button><br><p>
				<button onclick="document.getElementById('id024').style.display='block'" class="w3-button w3-blue w3-round w3-small" style="width: 50%;">Student Query</button><br><p>
				<?php include('admin/student_summary.php');?>
				<button onclick="document.getElementById('id025').style.display='block'" class="w3-button w3-blue w3-round w3-small" style="width: 50%;">Statistics</button><br><p>
				<?php include('admin/statistics.php');?>
				<button onclick="document.getElementById('id026').style.display='block'" class="w3-button w3-blue w3-round w3-small" style="width: 50%;">All Students Details</button><br><p>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<?php }?>