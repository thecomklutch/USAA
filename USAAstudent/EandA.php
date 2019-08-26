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
		<form>
			<div class="w3-section">

				<br>
				<input id="tittle"  type="text" class="w3-input w3-round w3-border w3-light-grey" placeholder="Title of the information" name="type" required>
				
				<input id="descri" type="text" class="w3-input w3-border w3-round w3-light-grey" placeholder="Description of the information" name="type" required>
				
				<input type="text" id="date" class="w3-input w3-border w3-round w3-light-grey" placeholder="Date or Deadline" name="type" required>
				<br>
				<br>
				<select id="up_event" class="w3-small w3-input w3-round w3-light-grey">
					<option class="w3-small w3-input w3-round w3-light-grey">--Select Event Type--</option>
					<option class="w3-small w3-input w3-round w3-light-grey" value="announce">Announcement</option>
					<option class="w3-small w3-input w3-round w3-light-grey" value="event">Event</option>
				</select>
				<br>
				<div id="state"></div>
				<br>
				<btn class="w3-button w3-block w3-blue w3-round w3-section w3-round w3-padding" type="submit" style="float: left; width:40%;" onclick="postevent()">Post</btn>
					<span class="w3-button w3-small w3-dark-grey w3-round w3-small" style="max-height: 200px; float: right; margin-bottom: 10px;" onclick="closecontainer2('id02')">Close</span>
					<br>
		</form>
					<script>
						function postevent()
						{
							//get the variables
							var eventtype = $("#up_event").val();
							var eventtitle = $("#tittle").val();
							var eventcontent = $("#descri").val();
							var eventdate = $("#date").val();
							//calling the ajax function
							$.ajax({
								url:'USAAstudent/postevent.php',
								method:'POST',
								datatype: 'json',
								data:{"posttype":eventtype, "posttitle":eventtitle, "postcontent":eventcontent, "postdate":eventdate},
								success:function(html){
									$("#state").html(html).show();
								}
							});
						}
					</script>

				</div>
			</div>
		</div>

	<div>
</div>
<?php }?>
</div></div>