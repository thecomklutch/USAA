<div class="w3-modal" id="id015">
	<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width: 600px;">
		<div class="w3-center"><br>
			<span onclick="document.getElementById('id015').style.dispaly='none'" class="w3-button w3-large w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
			<img src="usaa.jpg" class="w3-circle w3-margin-top w3-small" alt="usaa">
		</div>
		<hr style="width: 80%; margin: 60px;">
		<?php foreach($suggestions as $x) {?>
			<div class="w3-container w3-border w3-round" style="padding:10px; margin: 40px;">
				<?php echo $x['post'];?><br>
				<h2 class="w3-small">Suggestion by: <b><?php echo $x['created_by'];?></b><br>
				From: <b><?php echo $x['wilaya'];?></b></h2><br>
				<?php if($x['approved'] == "true") {?>
					<h2 class="w3-small" style="float: right"><?php echo "Approved";?>
				<?php } else {?>
					<h2 class="w3-small" style="float: right"><?php echo "Not Approved";?>
				<?php }?>		
			</div><br>
			<?php }?>
	</div>
</div>	
