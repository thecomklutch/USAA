<?php
include_once('config.php');
//Getting value of "search" variable from "script.js".
//get the passport number og the email
function getpassportnumber($mail)
	{
		global $conn;
		$sql = "SELECT * FROM users WHERE email LIKE '%$mail%'";
		$test = mysqli_query($conn, $sql);
		$tests = mysqli_fetch_assoc($test);
		return $tests;
	}
if (isset($_POST['search'])) {
//Search box value assigning to $Name variable.
   $Name = $_POST['search'];
//Search query.
   $Query = "SELECT email,first,phone,wilaya,year,course,versity FROM users WHERE email LIKE '%$Name%'";
   $ExecQuery = mysqli_query($conn, $Query) or die("Error: ".mysqli_error($conn));

   //Getting the passport number
   $passport_check = getpassportnumber($Name);
   $passport = $passport_check['passport_no'];
   //get the posts and suggestions by that passport number
   $suggestions_check = "SELECT passport_no, post, created_at FROM posts WHERE passport_no LIKE '%$passport%'";
   $suggestions_results = mysqli_query($conn, $suggestions_check);

   //get the posts by the same person
   $posts_check = "SELECT passport_no, title, description, created_at FROM events WHERE passport_no LIKE '%$passport%'";
   $post_results = mysqli_query($conn, $posts_check);
//Creating unordered list to display result.
   echo '
   ';
   //Fetching result from database.
   while ($Result = mysqli_fetch_assoc($ExecQuery)) {
       ?>
       <br><div class="w3-container w3-light-grey w3-round">
       <h2 class="w3-large">Personal Information</h2>
       </div>
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
        <div class="w3-container w3-light-grey w3-round">
       <h2 class="w3-large">Posts and Suggestions</h2>
       </div>
       <?php }?>
       <?php
       while ($suggestion = mysqli_fetch_assoc($suggestions_results)) {
       	echo $suggestion['post'];
       	echo $suggestion['created_at'];
       	 }}?>