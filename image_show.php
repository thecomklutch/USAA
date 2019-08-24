<?php include('head.php');?>
<?php include('config.php');?>
<?php include('topbar.php');?>
<title>Image Gallery</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="image_upload.js"></script>

</head>
<body style="min-width: 900px; min-height: 500px; overflow: auto;">

	<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="margin-top: 40px; margin-bottom: 40px; width: 90%;">
		<div class="w3-center"><br>
			<img src="usaa.jpg" class="w3-circle w3-margin-top w3-small" alt="usaa">
			<br>
			<h2 class="w3-small"><b>USAA IMAGE GALLERY</b></h2>
		</div>
		
		<button onclick="document.getElementById('image_upload').style.display='block'" class="w3-button w3-blue w3-round w3-small" style="float: right; margin-right: 30px;">+Upload</button>
		<?php include('img_upload.php');?>
		<div class="w3-container">
			<hr>
			<div class="w3-border w3-light-grey w3-container w3-round">
			<?php
				$sql = "SELECT * FROM images limit 6";
				$images = mysqli_query($conn, $sql);

				while ($photoz = mysqli_fetch_assoc($images)) {
					$img_link = "upload/".$photoz['image'];
					?>	
						<div class="w3-container w3-col s4">
						
							<img  style="width: 100%; height: 50%; margin-top: 20px; margin-bottom: 20px;" class="w3-round" src='<?php echo $img_link;?>'>
						</div>
					<?php }?>
			</div>
		</div>
		<hr style="margin-left: 20px; margin-right: 20px;">
		<br>
	</div>

</body>
</html>