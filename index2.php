<?php include('config.php'); ?>
<?php require_once('functions.php'); ?>
<!-- retrieve all suggestions, events and announcements -->
<!-- Getting display content form the database-->
<?php $ideas = getsuggestions(); ?>
<?php $eventx = getevents(); ?>
<?php $shouts = getannouncements(); ?>
<!--get all data from the database-->
<?php $ideas2 = getsuggestion(); ?>
<?php $eventx2 = getevent(); ?>
<?php $shouts2 = getannouncement(); ?>
<?php $officials = getleaders(); ?>
<?php //$banknamez = banknames1(); ?>
<?php include('head.php');?>
<title>Home</title>

<!-- Including jQuery is required. -->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body >

<!-- Top banner -->
<?php include('topbar.php');?>
<div class="bg-img w3-container" style="height: 300px;">
	<!-- navigation bar -->
	<?php include('navbar.php'); ?>
	<div class="w3-display-middle w3-small"><img src="usaa.jpg" class="w3-circle w3-opacity-max"></div>
</div>
<br />

	<div class="w3-row-padding w3-hide-small">
		<div class="w3-container w3-col s4 w3-mobile">
			<div class="w3-panel w3-card-4 w3-blue w3-round">
				<h2 class="w3-small w3-center">ABOUT</h2>
			</div>
			<p style="padding: 10px;">
			Is a body to help the ugandan students in algeria to stay connected with eachother, and also acting as the bring between the embassy and the students’ community
			</p>
		</div>
		<div class="w3-container w3-col s4 w3-mobile">
			<div class="w3-panel w3-card-4 w3-round">
				<h2 class="w3-small w3-center">Mission</h2>
			</div>
			<p style="padding: 10px;">To create more unity and love amog Ugandan students in algeria, by enhancing the flow of information between Ugandan students in Algeria.
			</p>
		</div>
		<div class="w3-container w3-col s4 w3-mobile">
			<div class="w3-panel w3-card-4 w3-blue w3-round">
				<h2 class="w3-small w3-center">History</h2>
			</div>
			<p style="padding: 10px;">
				USAA started in the year2017 with the intention of bridging the students’ community to the embassy and over watching the Ugandan students in Algeria, By helping students in different circumustances like registerations to their respective universities. e.t.c

			</p>
		</div>
	</div>


<!-- mobile opening -->
<div class="w3-row-padding w3-hide-large w3-hide-medium" style="display:none;" id="aboutandhistory">
		<div class="w3-container w3-col s4 w3-mobile">
			<div class="w3-panel w3-card-4 w3-blue w3-round">
				<h2 class="w3-small w3-center">ABOUT</h2>
			</div>
			<p style="padding: 10px;">
			Is a body to help the ugandan students in algeria to stay connected with eachother, and also acting as the bring between the embassy and the students’ community
			</p>
		</div>
		<div class="w3-container w3-col s4 w3-mobile">
			<div class="w3-panel w3-card-4 w3-round">
				<h2 class="w3-small w3-center">Mission</h2>
			</div>
			<p style="padding: 10px;">To create more unity and love amog Ugandan students in algeria, by enhancing the flow of information between Ugandan students in Algeria.
			</p>
		</div>
		<div class="w3-container w3-col s4 w3-mobile">
			<div class="w3-panel w3-card-4 w3-blue w3-round">
				<h2 class="w3-small w3-center">History</h2>
			</div>
			<p style="padding: 10px;">
				USAA started in the year2017 with the intention of bridging the students’ community to the embassy and over watching the Ugandan students in Algeria, By helping students in different circumustances like registerations to their respective universities. e.t.c

			</p>
		</div>
		<span style="margin: 0px; writing-mode: vertical-rl"><btn style="width: 40px;" class="w3-blue w3-small w3-button w3-left w3-hide-large w3-hide-medium" onclick="closeAbout()">
			&#9776; USAA
		</btn></span>
		</div>
		<span style="margin: 0px; writing-mode: vertical-rl"><btn id="CloseTheexpandedBox" style="width: 40px;" class="w3-blue w3-small w3-button w3-left w3-hide-large w3-hide-medium" onclick="openAbout();">
			&#9776; USAA
		</btn></span>



<div class="w3-container w3-panel w3-mobile" style="width: auto; max-height:60px">
	<div class="w3-panel w3-card-4 w3-round">
		<h2 class="w3-large w3-center" id="upcoming" style=" color: #373B44;  /* fallback for old browsers */
color: -webkit-linear-gradient(to right, #4286f4, #373B44);  /* Chrome 10-25, Safari 5.1-6 */
color: linear-gradient(to right, #4286f4, #373B44);">USAA NOTICE BOARD</h2>
	</div>
	<div class="w3-panel" style="height: 10px; width: auto;">
	</div>
</div>
<div class="w3-row-padding">
	<!-- Events board -->
	<div class="w3-container w3-col s4 w3-mobile" style="width:50%;">
		<div class="w3-center">
			<h2 class="w3-small"><b>Events</b></h2>
			<br>
			<div class="w3-container w3-border w3-round" style="padding-left: 30px;">
			<?php if (count($eventx) > 0) {
				foreach($eventx as $y) {?>
					<h6 class="w3-small" style="font:6px;"><b>Title: </b><?php echo $y['title'];?><br>
						<b>Description: </b><?php echo $y['description'];?><br>
						<b>Date: </b><?php echo $y['date'];?><br>
						<b>By: </b><?php echo $y['created_by'];?>
						<b>Created_at: </b><?php echo $y['created_at']; ?>
					</h6>
				<?php } } else { ?>
					<div class="w3-panel w3-sand w3-round" style="margin: 10px;"><h2 class="w3-text-red w3-small"> No Events yet</h2></div>
			<?php }?>
			</div>
		</div>
		<div class="w3-center">
			<button onclick="document.getElementById('id05').style.display='block'" class="w3-button w3-round w3-small">+previous events notes..</button>
			<?php include('all_events.php');?>
		</div>
	</div>
	<!-- Announcements board -->
	<div class="w3-container w3-col s4 w3-mobile" style="width:50%;">
		<div class="W3-center">
			<h2 class="w3-small"><b>Announcements</b></h2>
		</div>
		<br>
		<div class="w3-container w3-border w3-round" style="padding-left: 30px;">
			<?php if (count($shouts) > 0) {
				foreach($shouts as $z) {?>
					<h6 class="w3-small" style="font:6px;"><?php echo $z['title'];?><br>
						<?php echo $z['description'].' ';?>
						<?php echo $z['date'];?><br>
						<b>By: </b><?php echo $z['created_by'];?><br>
						<b>created at : </b><?php echo $z['created_at'];?>
					</h6>
			<?php } } else { ?>
				<div class="w3-panel w3-sand w3-round" style="margin: 10px;"><h2 class="w3-text-red w3-small"> No Announcements yet</h2></div>
			<?php }?>
		</div>
		<div class="w3-center">
				<button onclick="document.getElementById('id04').style.display='block'" class="w3-button w3-round w3-small">+previous announcements..</button>
			<?php include('all_announce.php');?>
		</div>
	</div>
</div>
</div>
<br>
<div class="w3-center w3-mobile">
	<img class="w3-hide-small" src="line.PNG">
</div>
<br>
<div class="w3-row-padding">
	<div class="w3-container w3-col s4 w3-mobile" style="width: 25%;">
		<div class="w3-center w3-hide-small">
			<h2 class="w3-large w3-centter"><b>Useful Links</b></h2>
		</div>
		<div class="w3-border w3-panel w3-container w3-hide-small w3-round w3-border-black" style="margin: 20px; overflow: auto; height: 100px;">
			<a href="#" style="padding:10px; margin:10px;">Contacts</a></br>
			<a href="#" style="padding:10px; margin:10px;">Announcements</a></br>
			<a href="#" style="padding:10px; margin:10px;">History</a></br>
			<a href="#" style="padding:10px; margin:10px;">Gallery</a></br>
		</div><br><br>
		<div class="w3-center">
			<button class="w3-btn w3-round w3-center w3-black w3-center" id="suggestion">Suggestions</button><p>
		</div>
		<div class="w3-container" style="max-height: 300px; overflow: auto;">
		<?php foreach ($ideas as $x) {?>
			<div class="w3-container w3-border w3-round" style="padding:10px; max-height: 150px; overflow: auto;">
					<?php echo $x['post'];?><br>
					<h2 class="w3-small">Suggestion by: <b><?php echo $x['created_by'];?></b><br>
					From: <b><?php echo$x['wilaya'];?></b>				
			</div><br>
		<?php }?>
		
		<div class="w3-center">
			<button onclick="document.getElementById('id03').style.display='block'" class="w3-button w3-round w3-small">+more suggestions..</button>
			<?php include('all_suggestions.php');?>
		</div>
		<div class="w3-container">
		<form>
		<div class="container">
			<textarea  class="w3-round" placeholder="We so much love to hear from you" id="suggest" cols="25" rows="4" required style="width: 100%;"></textarea>
			<btn class="w3-button w3-block w3-blue w3-small  w3-section w3-round w3-padding" type="submit" style="width:40%;" onclick="postsuggestion()">Suggest</btn>
		</div>
		</form>
		<div id="statusmessage"></div>
		</div>
	</div>

	<script>
		function postsuggestion()
		{
			$("#statusmessage").hide();
			//get comment values
			var suggestions = $("#suggest").val();//suggestion
			//call ajax function
			$.ajax({
				type:'POST',
				url:'postsuggestion.php',
				data: {"suggestion":suggestions},
				success:function(html){
					$("#statusmessage").html(html).show();
				}
			});
		}

		//function to open colapsed box
		function openAbout() {
			document.getElementById('aboutandhistory').style.display='block';
			document.getElementById('CloseTheexpandedBox').style.display='none';
		}

		function closeAbout() {
			document.getElementById('aboutandhistory').style.display='none';
			document.getElementById('CloseTheexpandedBox').style.display='block';
		}
		//close the container 
		function closecontainer2(xy)
		{
		  document.getElementById(xy).style.display='none';
		}

		
	</script>

	<div class="w3-container w3-col s4 w3-mobile" style="width: 40%;">
		<div class="w3-container" style="height: auto;">
		<div class="w3-center">
			<h2 class="w3-large w3-center" id="recent" styte="width: 40%;"><b>Notice to new Students</b></h2>
		</div>
			<h2 class="w3-small" style="padding: 10px;"><i><ul>All New students must endavour to move with a photocopy of their passports before the obtaining of their Cite residence cards or Carteschuz for safty.</ul>
				<ul>After obtaining and settling in ure wilayaz of french year, your are expected to update ure informationto the system</ul>
				<ol style="margin-left: 30px;">Phone number</ol>
				<ol style="margin-left: 30px;">Residence cardnumber</ol>
				<ol style="margin-left: 30px;">Wilaya</ol>
			<ul>After the transfer to the final wilayaz for further studies after french year, ure all expected to update ure wilaya to the system.</ul>
			<ul>After obtaining ure bank accounts, ure request to submit them through our platform.</ul>
			</i></h2>
		</div>
		<div class="w3-container" style="height: 300px;">
		<div class="w3-center">
			<h2 class="w3-large w3-center" id="recent" styte="width: 40%;"><b>General Student's information</b></h2>
		</div>
			<h2 class="w3-small"><i><ul>All course change request can be applied for through the system.</ul>
				<ul>Students who wish to be wilaya representatives should send the message to the admin.</ul>
				<ul>Students are expected to update their information after every academic year.</ul>
			</i></h2>
		
		</div>
	</div>
	<div class="w3-container w3-col s4 w3-mobile">
		<div class="w3-center">
			<h2 class="w3-large w3-center" id="cabinent"><b>Contacts</b></h2><p>
			<div class="w3-center">
				<h2 class="w3-small">Student's Representatives of Wilayaz</h2>
				<hr style="margin-left: 25%; margin-right: 25%; margin-top: 2px;">
			</div>
			<div class="w3-container" style="overflow: auto;">
			<table class="w3-table w3-bordered">
				<thread>
					<tr class="w3-small">
						<th>Name</th>
						<th>Wilaya</th>
						<th>Phone_No</th>
						<th>E-mail</th>
					</tr>
				</thread>
				<?php foreach($officials as $official){ $full_names = $official['first'].' '.$official['second'];?>
				<tr class="w3-small">
					<td><?php echo $full_names; ?></td>
					<td><?php echo $official['wilaya'];?></td>
					<td><?php echo $official['phone'];?></td>
					<td><?php echo $official['email'];?></td>
				</tr>
				<?php }?>
			</table></div>
		</div>
		<br><br>
		<div class="w3container">
			<div class="w3-center">
				<h2 class="w3-small">Some students in different Wilayaz<br><h2>
				<hr style="margin-left: 25%; margin-right: 25%; margin-top: 2px;">
				<div class="w3-container" style="overflow: auto;">
				<table class="w3-table w3-bordered">
				<thread>
					<tr class="w3-small">
						<th>Name</th>
						<th>Post</th>
						<th>Phone_No</th>
						<th>E-mail</th>
					</tr>
				</thread>
				<tr class="w3-small">
					<td>Andrew</td>
					<td>President</td>
					<td>074633643</td>
					<td>andrew@gmail.com</td>
				</tr>
				<tr class="w3-small">
					<td>Oscar</td>
					<td>Treasurer</td>
					<td>0784654635</td>
					<td>oscar@gmail.com</td>
				</tr>
				<tr class="w3-small">
					<td>Solomon</td>
					<td>General secretary</td>
					<td>0796558852</td>
					<td>solo@gmail.com</td>
				</tr>
				<tr class="w3-small">
					<td>wiliiam</td>
					<td>Administrator</td>
					<td>045463736</td>
					<td>William@gmail.com</td>
				</tr>
			</table>
		</div>
	</div>
</div>
<?php include('modal.php'); ?>
<!-- include footer.php -->
</div>
</div>
<hr style="margin-left: 10px; margin-right: 10px;">
</body>
<?php include('footer.php');?>
</html>
