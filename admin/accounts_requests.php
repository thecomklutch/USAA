<div class="w3-modal" id="id028">
	<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width: auto;">
		<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width: auto; margin-top: 100px;">
			<div class="w3-center"><br>
				<div class="w3-center"><br>
					<img src="usaa.jpg" class="w3-circle w3-margin-top w3-small" alt="usaa" style="margin-top: 20px;">
				</div>
				<h2 class="w3-small"><b>USAA STUDENTS ACCOUNTS REQUESTS</h2>
			</div>
			<div class="w3-container">
			<hr>
			<div class="w3-border w3-round w3-container w3-light-grey">
				<div class="w3-section">
					<table class="w3-small w3-table-all">
       					<thread>
          					<tr class="w3-blue w3-round">
            					<th>Name</th>
            					<th>Email</th>
            					<th>Phone</th>
            					<th>Passport_No</th>
            					<th>Wilaya</th>
            					<th>Academic Year</th>
            					<th>Course</th>
            					<th>University</th>
            					<th>Action</th>
          					</tr>
        				</thread>
        				<?php foreach ($account_requests as $request) {?>
        				<tr class="w3-round">
          					<td><?php echo $request['first'];?></td>
          					<td><?php echo $request['email'];?></td>
          					<td><?php echo $request['phone'];?></td>
          					<td><?php echo $request['passport_no'];?></td>
          					<td><?php echo $request['wilaya'];?></td>
          					<td><?php echo $request['year'];?></td>
          					<td><?php echo $request['course'];?></td>
          					<td><?php echo $request['versity'];?></td>
          					<td>
          						<select class="w3-btn w3-round w3-input w3-blue" name="opt">
									<option class="w3-btn w3-round w3-input w3-light-grey">--Account--</option>
									<option class="w3-btn w3-round w3-input w3-light-grey">send code</option>
									<option class="w3-btn w3-round w3-input w3-light-grey">delete</option>
								</select>
							</td>
        				</tr>
        				<?php }?>
        			</table>
				</div>
			</div>
			<hr>
			<button name="send" class="w3-button w3-block w3-blue w3-round w3-section w3-round w3-padding" type="submit" style="width:40%;">Send Verification Codes</button>
		</div>
	</div>

	</div>
</div>