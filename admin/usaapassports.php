
<?php 
	//filter out passport details
	
	include_once('config.php');
//Getting value of "search" variable from "script.js".
if (isset($_POST['search'])) {passportdetails();} //calling the student's details function 
	
	function passportdetails()
	{
		global $conn;
		//get the args 
		$passport = $_POST['search'];
		$sql = "SELECT * FROM users WHERE first LIKE '%$passport%' OR second LIKE '%$passport%' AND status='active'";
		$sql_run = mysqli_query($conn, $sql); 
		//fetch results from the database
		while ($passports = mysqli_fetch_assoc($sql_run)) {?>
			<div class="w3-section">
				<table class="w3-small w3-table-all">
       			<thread>
					<tr class="w3-blue w3-round">
            			<th>Names</th>
            			<th>Wilaya</th>
            			<th>Academic Year</th>
            			<th>University</th>
            			<th>Course</th>
            			<th>Passport_No</th>
            			<th>Date of Issue</th>
            			<th>Expiry Date</th>
            			<th>Data conflict</th>
            			<th>Action</th>
          			</tr>
        		</thread>
			<tr class="w3-round">
          			<td><?php echo $passports['first'];?></td>
          			<td><?php echo $passports['wilaya'];?></td>
          			<td><?php echo $passports['year'];?></td>
          			<td><?php echo $passports['versity'];?></td>
          			<td><?php echo $passports['course'];?></td>
          			<td><?php echo $passports['passport_no'];?></td>
          			<td><?php echo $passports['doi'];?></td>
          			<td><?php echo $passports['doi'];?></td>
          			<td><?php if ($passports['dob'] != $passports['dob2']) {echo "Yes";} else {echo "No";}?></td>
          			<td><btn class="w3-button" style="height: 20px; margin-top: 0px; padding-top: 0px;">Notify</btn></td>
        		</tr>
        	</table>
		</div>
	<?php }}?>
