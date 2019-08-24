<div class="w3-modal" id="id014">
	<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width: 600px;">
		<div class="w3-center"><br>
			<span onclick="document.getElementById('id014').style.dispaly='none'" class="w3-button w3-large w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
			<img src="usaa.jpg" class="w3-circle w3-margin-top w3-small" alt="usaa">
		</div>
		<div class="w3-center"><br>
				<h2 class="w3-small"><b>Approve </h2>
			</div>
		<hr style="width: 80%; margin: 60px;">
		<?php $ids=array();?>
		<?php foreach($unapproved as $x) {?>
			<div class="w3-container w3-border w3-round" style="padding:10px; margin: 40px;">
				<?php echo $x['post'];?><br>
				<h2 class="w3-small">Suggestion by: <b><?php echo $x['created_by'];?></b><br>
				From: <b><?php echo $x['wilaya'];?></b></h2>
				<div id="post_approve"></div>
				<input type="text"  id="post_id" style="display: none;" value="<?php echo $x['id'];?>">
				<?php array_push($ids, $x['id']);?>
				<div id="btn_container" class="w3-container w3-border w3-round w3-light-grey" style="height: 50px;">
					<button onclick=del() class="w3-button w3-block w3-blue w3-round w3-section w3-round w3-padding" type="submit" style="width:30%; float: right;">Delete</button>
					<button onclick=magic() class="w3-button w3-block w3-blue w3-round w3-section w3-round w3-padding" type="submit" style="width:30%; float: left;">Approve</button>
				</div>			
			</div><br>
			<?php }?>
		<?php foreach($ids as $id){
			echo $id.',';
		} ?>
		<hr>
		<br>
		<script>
			function magic(){
				alert("it is andrew");
			}
			function del()
			{
				var post_id = $("#post_id").val();
				$.ajax({
                    url:'admin/deletepost.php',
                    method:'POST',
                    datatype:'json',
                    data:{"postid": post_id},
                   success:function(html){
	                   $("#post_approve").html(html).show();
	                   $("#btn_container").hide();
	                   post_id.reset();
	                   location.reload();
                   }
                });
			}
		</script>
	</div>

</div>	
