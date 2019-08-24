<div class="w3-modal" id="id017">
	<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width: 600px;">
		<div class="w3-center"><br>
			<span onclick="document.getElementById('id017').style.dispaly='none'" class="w3-button w3-large w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
			<img src="usaa.jpg" class="w3-circle w3-margin-top w3-small" alt="usaa">
		</div><hr>
		<form class="w3-container" method="post" action="index.php">
			<div class="w3-section">
				<label><b>Type(Announcement/Event)</b></label>
				<div span="display: inline-block;">
					<h2 class="w3-small">Event:</h2><input name="up_event" value="event" type="radio" class="w3-circle w3-light-grey"
					<?php if (isset($up_event) && $up_event=="event") echo "checked";?>>
				</div>
				<div style="display: inline-block;">
					<h2 class="w3-small">Announcement:</h2><input value="announce" name="up_event" type="radio" class="w3-circle w3-light-grey"
					<?php if (isset($up_event) && $up_event=="announce") echo "checked";?>>
				</div>
				<br>
				<label style="float: left;"><b>Title</b></label>
				<input name="tittle"  type="text" class="w3-input w3-round w3-border w3-light-grey" placeholder="Title of the information" name="type" required>
				<label style="float: left;"><b>Desciption</b></label>
				<input name="descri" type="text" class="w3-input w3-border w3-round w3-light-grey" placeholder="Description of the information" name="type" required>
				<label style="float: left;"><b>From(Body Announcing)</b></label>
				<input name="from" type="text" class="w3-input w3-border w3-round w3-light-grey" placeholder="Title of the person announcing" name="type" required>
				<label style="float: left;"><b>date</b></label>
				<input type="text" name="date" class="w3-input w3-border w3-round w3-light-grey" placeholder="Date or Deadline" name="type" required>
				<div class="w3-center">
					<button name="post_event" class="w3-button w3-block w3-blue w3-round w3-section w3-round w3-padding" type="submit" style="width:40%;">Post</button>
				</div>
			</div>
		</form>
	<div>
</div>	
</div>
</div>