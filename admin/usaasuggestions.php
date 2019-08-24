<?php
include_once('config.php');
//Getting value of "search" variable from "script.js".
if (isset($_POST['search'])) {
//Search box value assigning to $Name variable.
   $Name = $_POST['search'];
//Search query.
   $Query = "SELECT * FROM posts WHERE wilaya LIKE '%$Name%' OR year LIKE '%$Name%' AND approved='1'";
   $ExecQuery = mysqli_query($conn, $Query) or die("Error: ".mysqli_error($conn));
//Creating unordered list to display result.
   echo '
   ';
   //Fetching result from database.
   while ($suggestion = mysqli_fetch_assoc($ExecQuery)) {
       ?>
       <div class="w3-container w3-border w3-round" id="yahryo" style="padding:10px;">
     <?php echo $suggestion['post'];?><p>
        <b>By: </b><?php echo $suggestion['created_by'];?><p>
        <b>From: </b><?php echo $suggestion['wilaya'];?><p>
        <b>Created at</b><?php echo $suggestion['created_at'];?>
          <btn class="w3-button w3-small w3-round w3-blue" style="float: right;" onclick="actions('Delete suggestion', '<?php echo $suggestion['id'];?>')">Delete</btn>
        </p>
    </div>
    <div id="message"></div>
    <br>
    <?php }}?>
