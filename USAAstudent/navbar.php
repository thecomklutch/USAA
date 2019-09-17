<button id="navbarbtn1" class="w3-bar-item w3-button w3-border w3-border-blue w3-round w3-hide-large w3-hide-medium w3-hover-none w3-hover-text-light-blue w3-text-light-blue" onclick="opennavonsmallscreens();">&#9777; Menu</button>
<button id="navbarbtn2" class="w3-bar-item w3-button w3-border w3-border-blue w3-round w3-hide-large w3-hide-medium w3-hover-none w3-hover-text-light-blue w3-text-light-blue" style="display: none" onclick="closenavonsmallscreens();">&#9777; close</button>
	<div class="w3-row-padding w3-hide-small">
		<div class="w3-container w3-twothird w3-hide-small">
			<div class="w3-bar w3-center w3-small w3-hide-small" style="margin-top: 5px">
				<a href="index.php" class="w3-bar-item w3-button w3-blue w3-round ">Home</a>
				<!-- <a href="image_show.php" class="w3-bar-item w3-button w3-hover-blue w3-round">Gallery</a> -->
				
				<div class="w3-dropdown-hover">
					<button class="w3-button w3-hover-blue w3-round ">Contacts</button>
					<div class="w3-dropdown-content w3-bar-block w3-card-4 w3-animate-zoom">
						<a href="#cabinent" class ="w3-bar-item w3-button">Wilaya representatives</a>
						<a href="#cabinent" class ="w3-bar-item w3-button">Students's contacts</a>
					</div>
				</div>
				<div class="w3-dropdown-hover">
					<button class="w3-button w3-hover-blue w3-round  ">USAA NOTICE BOARD</button>
					<div class="w3-dropdown-content w3-bar-block w3-card-4 w3-animate-zoom">
						<a href="#recent" class="w3-bar-item w3-button">Recent</a>
						<a href="#upcoming" class="w3-bar-item w3-button">Up comming</a>
						<button class="w3-bar-item w3-button  " onclick="openposteventmodal();">Post(announcement/event)</button>
					</div>
				</div>
				<a href="#" class="w3-bar-item w3-round w3-button w3-hover-blue w3-round ">History</a>
				<a href="#" class="w3-bar-item w3-button w3-hover-blue w3-round">About</a>
				<div class="w3-dropdown-hover">
					<button class="w3-button w3-hover-blue w3-round">Suggestions</button>
					<div class="w3-dropdown-content w3-bar-block w3-card-4 w3-animate-zoom">
						<a href="#suggest" class ="w3-bar-item w3-button">suggest</a>
						<a href="#suggestion" class ="w3-bar-item w3-button">suggestions</a>
					</div>
				</div>
			</div>
		</div>
		<?php
						$notifications = array();
						$passport = $_SESSION['user']['passport_no'];
						$sql = "SELECT * FROM `Notifications` WHERE receiver='$passport' AND status='unread'";
						$exec = mysqli_query($conn, $sql);
						while ($notification = mysqli_fetch_assoc($exec)) {
							array_push($notifications, $notification);
						}?>
		<!-- popping notifications -->
		<?php if (count($notifications) > 0) {?>
		<div class="w3-third w3-hide-small w3-section"id="notificationsbar">	
			<?php foreach ($notifications as $y){?>
			<div class="w3-border w3-hide-small w3-border-dark-grey w3-round" style="width: 300px; heigh: 50px; padding: 5px">
				<span style="float: left; margin-left: 3px;">
					<?php echo $y['message'];?>
				</span>
				<br />
				<span style="float: right" onclick="changestate(<?php echo $y['id']; ?>);">&#10799;</span>
				<br />
			</div>
			<br />
			<?php }}?>
		</div>		
	</div>
	<script>
		
	</script>

	<!-- for small screens capatibilities -->
	<div class="w3-bar-block w3-round w3-hide-large w3-hide-medium" id="mynavbar" style="margin-top: 10px; display: none;
		background: #7F7FD5;  /* fallback for old browsers */
		background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);  /* Chrome 10-25, Safari 5.1-6 */
		background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		padding: 10px;
	">
		<a href="#" class="w3-bar-item w3-button ">Home</a>
		<a href="#cabinent" class="w3-bar-item w3-button ">Students's contacts</a>
		<a href="#cabinent" class="w3-bar-item w3-button ">Wilaya representatives</a>
		<a href="#upcoming" class="w3-bar-item w3-button ">USAA NOTICE BOARD</a>
		<button class="w3-bar-item w3-button " onclick="openposteventmodal();">Post an event</button>
		<a href="#suggestion" class="w3-bar-item w3-button ">Trending Suggestions</a>
		<a href="#suggest" class="w3-bar-item w3-button ">Post a suggestion</a>
		<button class="w3-bar-item w3-button " onclick="openAbout();">About</button>
		<button class="w3-bar-item w3-button " onclick="openAbout();">History</button>
	</div>
	<?php if (count($notifications) > 0) {?>
		<div class="w3-third w3-hide-large w3-hide-medium w3-section"id="notificationsbar2">	
			<?php foreach ($notifications as $y){?>
			<div class="w3-border w3-hide-large w3-hide-medium w3-border-dark-grey w3-round" style="width: 300px; heigh: 50px; padding: 5px">
				<span style="float: left; margin-left: 3px;">
					<?php echo $y['message'];?>
				</span>
				<br />
				<span style="float: right" onclick="changestate(<?php echo $y['id']; ?>);">&#10799;</span>
				<br />
			</div>
			<br />
			<?php }}?>
		</div>		
<script>
	//function to open the nav bar on small screens 
	function opennavonsmallscreens() {
		document.getElementById('mynavbar').style.display='block';
		document.getElementById('navbarbtn1').style.display='none';
		document.getElementById('navbarbtn2').style.display='block';
	}

	//function to close the nav bar on small screens 
	function closenavonsmallscreens() {
		document.getElementById('mynavbar').style.display='none';
		document.getElementById('navbarbtn1').style.display='block';
		document.getElementById('navbarbtn2').style.display='none';
	}
	//function to open the post event modal 
	function openposteventmodal() {
		document.getElementById('id02').style.display='block';
	}

	// changing message state 
	function changestate(messageid) {
		$.ajax({
		type:'POST',
		url:'USAAstudent/changemessagestate.php',
		data: {"idofmessage":messageid}
	});
}
</script>