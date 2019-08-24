<div class="w3-modal" id="id025" style="margin-bottom: 30px;">
	<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width: auto;">
		<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width: auto; margin-top: 100px;">
			<div class="w3-center"><br>
			<div class="w3-center" style="margin-top: 20px;">
					<img src="usaa.jpg" class="w3-circle w3-margin-top w3-small" alt="usaa" style="margin-top: 20px;">
				</div>
				<h2 class="w3-small"><b>STUDENTS STATISTICS</h2>
			</div>
			<div class="w3-container">
			<hr>
			<div class="w3-container w3-light-grey w3-round">
		<?php
		$wilayaz = array();
		global $conn;

		//get wilayaz
		$sql = "SELECT wilaya FROM users";
		$results = mysqli_query($conn, $sql);
		$wilayaz = mysqli_fetch_all($results, MYSQLI_ASSOC);

		//GET students per wilaya with their courses and academic years 
		foreach ($wilayaz as $wilaya) {
			$check = implode($wilaya);
			echo $check;
			$sql1 = "SELECT * FROM users WHERE wilaya='$check'";
			$result2 = mysqli_query($conn, $sql1);
			while ($tudents = mysqli_fetch_assoc($result2)) {?>
				<table class="w3-small w3-table-all">
       					<thread>
          					<tr class="w3-blue w3-round">
            					<th>first_name</th>
            					<th>second_name</th>
            					<th>Course</th>
            					<th>Academic Year</th>
            					<th>University</th>
          					</tr>
        				</thread>
        				<tr class="w3-round">
          					<td><?php echo $students['first'];?></td>
          					<td><?php echo $students['second'];?></td>
          					<td><?php echo $students['course'];?></td>
          					<td><?php echo $students['year'];?></td>
          					<td><?php echo $students['versity'];?></td>
        				</tr>
        		<?php } echo count($students);}?>
      </div>
        <hr>
		</div>
			<hr>
		</div>
	</div>

	</div>
</div>
