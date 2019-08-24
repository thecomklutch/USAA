<?php
include_once('config.php');
//Getting value of "search" variable from "script.js".
if (isset($_POST['search'])) {
//Search box value assigning to $Name variable.
   $Name = $_POST['search'];
//Search query.
   $Query = "SELECT * FROM users WHERE first LIKE '%$Name%' OR second LIKE '%$Name%' AND status='active'";
   $ExecQuery = mysqli_query($conn, $Query) or die("Error: ".mysqli_error($conn));
//Creating unordered list to display result.
   echo '
   ';
   //Fetching result from database.
   while ($account = mysqli_fetch_assoc($ExecQuery)) {
       ?>
       <div class="w3-section">
					<table class="w3-small w3-table-all">
       					<thread>
          					<tr class="w3-blue w3-round">
            					<th>Names</th>
            					<th>Wilaya</th>
            					<th>Course</th>
            					<th>University</th>
            					<th>Academic Year</th>
            					<th>Phone</th>
            					<th>Email</th>
          					</tr>
        				</thread>
        				<tr class="w3-round">
          					<td><?php echo $account['first'].' '.$account['second'];?></td>
          					<td><?php echo $account['wilaya'];?></td>
          					<td><?php echo $account['course'];?></td>
          					<td><?php echo $account['versity'];?></td>
          					<td><?php echo $account['year'];?></td>
          					<td><?php echo $account['phone'];?></td>
          					<td><?php echo $account['email'];?></td>
        				</tr>
        			</table>
				</div>
			<?php }}?>
