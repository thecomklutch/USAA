<div class="w3-modal" id="id021">
	<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width: auto;">
		<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width: auto; margin-top: 100px;">
			<div class="w3-center"><br>
				<div class="w3-center"><br>
					<img src="usaa.jpg" class="w3-circle w3-margin-top w3-small" alt="usaa" style="margin-top: 20px;">
				</div>
				<h2 class="w3-small"><b>USAA STUDENTS CONTACT DETAILS</h2>
			</div>
			<div class="w3-container">
			<hr>
			<div class="w3-border w3-round w3-container w3-light-grey">
				<div class="w3-section">
					<table class="w3-small w3-table-all">
       					<thread>
          					<tr class="w3-blue w3-round">
            					<th>first_name</th>
            					<th>second_name</th>
            					<th>Passport Number</th>
            					<th>Wilaya</th>
          					</tr>
        				</thread>
        				<?php foreach ($accounts as $account) {?>
        				<tr class="w3-round">
          					<td><?php echo $account['first'];?></td>
          					<td><?php echo $account['second'];?></td>
          					<td><?php echo $account['passport_no'];?></td>
          					<td><?php echo $account['wilaya'];?></td>
        				</tr>
        				<?php }?>
        			</table>
				</div>
			</div>
			<hr>
		</div>
	</div>

	</div>
</div>