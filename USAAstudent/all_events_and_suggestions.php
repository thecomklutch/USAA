<!-- for all events and announcements data  -->

<div class="w3-modal" id="id05">
	<div class="w3-modal-content w3-border w3-round" style="margin: 0 auto; max-width: 500px">
		<div class="w3-center"><br>
			<img src="USAAstudent/images/usaa.jpg" class="w3-circle w3-margin-top w3-small" alt="usaa">
		</div>
		<div class="w3-container">
				<hr style="width: 80%; margin-top: 10px; margin-bottom: 3px;">
                <!-- events  -->
			<?php if (count($eventx2) > 0) {
					foreach($eventx2 as $y1) {?>
					<div class="w3-container w3-border w3-round" style="padding: 10px; margin: 40px;">
						<h6 class="w3-small" style="font:6px;"><b>Title: </b><?php echo $y1['title'];?><br>
							<b>Description: </b><?php echo $y1['description'];?><br>
							<b>Date: </b><?php echo $y1['date'];?><br>
							<b>By: </b><?php echo $y1['created_by'];?><br>
						</h6>
					</div>
					<?php } } else { ?>
						<div class="w3-panel w3-sand w3-round" style="margin: 10px;"><h2 class="w3-text-red w3-small">No Events yet</h2></div>
			<?php }?>	
			<br />
            <hr style="width: 80%; margin-top: 10px; margin-bottom: 3px;">
            <!-- announcements  -->
            <?php if (count($shouts2) > 0) {
					foreach($shouts2 as $z1) {?>
					<div class="w3-container w3-border w3-round" style="padding: 10px; margin: 40px;">
						<h6 class="w3-small" style="font:6px;"><b>Title: </b><?php echo $z1['title'];?><br>
							<b>Description: </b><?php echo $z1['description'];?><br>
							<b>Date: </b><?php echo $z1['date'];?><br>
							<b>By: </b><?php echo $z1['created_by'];?><br>
						</h6>
					</div>
					<?php } } else { ?>
						<div class="w3-panel w3-sand w3-round" style="margin: 10px;"><h2 class="w3-text-red w3-small"> No Announcements yet</h2></div>
				<?php }?>
			<span class="w3-button w3-small w3-dark-grey w3-round w3-small" style="max-height: 200px; float: right; margin-bottom: 10px;" onclick="closecontainer2('id05')">Close</span>
		</div>
	</div>	
</div>