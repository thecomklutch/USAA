<div class="w3-modal" id="id02">
<?php 
	if ($_SESSION['user']['AC_type'] == 'N'){?>
		<div class="w3-panel w3-sand w3-round" style="margin: 0 auto; width: 75%;"><h2 class="w3-text-red w3-small"> You must be a Student's Leader or representive<br> to post an event or announcement</h2>
		<br />
		<button class="w3-button w3-blue w3-small w3-round" onclick="closecontainer2('id02');">Ok</button>
		<br /><br />
		</div>
<?php } else {?>
	<div class="w3-border w3-round" style="margin: 0 auto; width: 75%">
		<div class="w3-container">
			<div class="w3-section">
				<input id="tittle"  type="text" class="w3-input w3-round w3-border w3-light-grey" placeholder="Title of the information" name="type" required>
				<br />
				<input id="descri" type="text" class="w3-input w3-border w3-round w3-light-grey" placeholder="Description of the information" name="type" required>
				<br />
				<input type="text" id="date" class="w3-input w3-border w3-round w3-light-grey" placeholder="Date or Deadline" name="type" required>
				<br>
				<select id="up_event" class="w3-small w3-input w3-round w3-light-grey">
					<option class="w3-small w3-input w3-round w3-light-grey">--Select Event Type--</option>
					<option class="w3-small w3-input w3-round w3-light-grey" value="announce">Announcement</option>
					<option class="w3-small w3-input w3-round w3-light-grey" value="event">Event</option>
				</select>
				<br>
				<div id="state"></div>
				<br>
				<button class="w3-button w3-block w3-blue w3-round w3-section w3-round w3-padding" type="submit" style="float: left; width:40%;" onclick="postevent()">Post</button>
				<span class="w3-button w3-small w3-dark-grey w3-round w3-small" style="max-height: 200px; float: right; margin-bottom: 10px;" onclick="closecontainer2('id02')">Close</span>
				<br>
			</div>
		</div>
	</div>
<?php }?>
</div>
