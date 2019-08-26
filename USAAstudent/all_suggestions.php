<div class="w3-modal" id="id03">
	<div class="w3-modal-content w3-border w3-round" style="margin: 0 auto; max-width: 500px;">
		<div class="w3-center"><br>
			<img src="usaa.jpg" class="w3-circle w3-margin-top w3-small" alt="usaa">
		</div>
		<div class="w3-container">
				<hr style="width: 80%; margin: 60px;">
			<?php foreach ($ideas2 as $x1) {?>
				<div class="w3-container w3-border w3-round" style="padding:10px; margin: 40px;">
					<h2 class="w3-small">
						<?php echo $x1['post'];?><br>
						Suggestion by: <b><?php echo $x1['created_by'];?></b><br>
						From: <b><?php echo$x1['wilaya'];?></b>	
					</h2>			
				</div><br>
			<?php }?>
			<br />
			<span class="w3-button w3-small w3-dark-grey w3-round w3-small" style="max-height: 200px; float: right; margin-bottom: 10px;" onclick="closecontainer2('id03')">Close</span>
		</div>
	</div>
</div></div>