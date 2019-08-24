<?php
include_once('config.php');
//Getting value of "search" variable from "script.js".
if (isset($_POST['search'])) {
//Search box value assigning to $Name variable.
   $Name = $_POST['search'];
//Search query.
   $Query = "SELECT email,first,phone,wilaya,year,course,versity FROM users WHERE first LIKE '%$Name%'";
   $ExecQuery = mysqli_query($conn, $Query) or die("Error: ".mysqli_error($conn));
//Creating unordered list to display result.
   echo '
   ';
   //Fetching result from database.
   while ($Result = mysqli_fetch_assoc($ExecQuery)) {
       ?>
       <table class="w3-small w3-table-all">
       <thread>
          <tr class="w3-blue w3-round">
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Wilaya</th>
            <th>Academic Year</th>
            <th>Course</th>
            <th>University</th>
          </tr>
        </thread>
        <tr class="w3-round">
          <td><?php echo $Result['first'];?></td>
          <td><?php echo $Result['email'];?></td>
          <td><?php echo $Result['phone'];?></td>
          <td><?php echo $Result['wilaya'];?></td>
          <td><?php echo $Result['year'];?></td>
          <td><?php echo $Result['course'];?></td>
          <td><?php echo $Result['versity'];?></td>
        </tr>
        </table>
        <br>
   <?php
}}
?>