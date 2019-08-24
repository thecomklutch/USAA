<div class="w3-modal" id="image_upload">
<?php 
	if ($_SESSION['user']['AC_type'] == 'N'){?>
		<div class="w3-panel w3-sand w3-round" style="margin-left: 40%; margin-right: 40%; margin-top: 10px; margin-bottom: 10px;"><h2 class="w3-text-red w3-small"> You must be aStudent's Leader or representive<br> to upload photos to the gallery</h2></div>
<?php } else {?>
	<div class="w3-modal-content w3-card-4 w3-animate-zoom">
		<div class="w3-modal-content w3-card-4 w3-animate-zoom">
			<div class="w3-center"><br>
				<div class="w3-center"><br>
					<img src="usaa.jpg" class="w3-circle w3-margin-top w3-small" alt="usaa" style="margin-top: 20px; margin-bottom: 20px;">
				</div>
				<h2 class="w3-small"><b>UPLOAD IMAGES</h2>
			</div>
			<div class="w3-container">
			<hr>
			<div class="w3-border w3-round w3-container w3-light-grey">

				
					<form id="uploadimage" action="" method="post" enctype="multipart/form-data">
						<div class="w3-center" style="width: 250px;  margin-top: 20px; margin-bottom: 20px; float: right;">
							<div id="image_preview"><img id="previewing"/></div>
						</div>
						<div id="selectImage" class="w3-round" style="margin-top: 20px;">
							<h2 class="w3-small">
							<label>Select Your Image</label><br/>
							<input type="file" name="file" id="file" class="w3-light-grey w3-round" required />
							<input type="submit" value="Upload" class="w3-button w3-blue w3-round submit" />
						</div>
					</form>
			
				<div id="message"></h2></div>
			</div><hr>
				<div class="w3-center"><div class="w3-container w3-light-grey" style="width: auto;"><h2 class="w3-tiny" style="margin-top: 0px; margin-bottom: 0px;">© USAA <?php echo date('Y');?></h2></div></div>
			</div>
			
		</div>
	</div>

<?php }?>
</div>