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
   while ($Result = mysqli_fetch_assoc($ExecQuery)) {
       ?>
        <div class="w3-container" style="margin: 10px; padding: 10px;

">
        <div class="w3-container w3-border w3-round"  style="margin: 30px; padding: 20px;">
        <h2 class="w3-small">
          <div class="w3-display-middle w3-small"  style="margin-top: 10%; margin-left: 10%;"><img src="usaa.jpg" class="w3-circle w3-opacity-max"></div> 
           <div class="w3-row-padding" style=" background: transparent; margin-left: 40px;">
            <!-- user icon-->
              <div class="w3-third">
                <div class="w3-center">
                <i class="fa fa-user" style="font-size: 120px; color: blue;"></i></div>
              </div>
              <!-- personal information-->
              <div class="w3-third">
                <i class="fa fa-info-circle fa-fw"></i><strong> Personal info</strong><br>
                <div class="w3-container" style="padding-left: 20px; padding-top: 10px;">
                Names: <?php echo $Result['first']; echo ' '; echo $Result['second'];?><br>
                Phone_No: <b><?php echo $Result['phone'];?></b><br>
                Email: <b><?php echo $Result['email'];?></b><br>
                Parent's Name: <b><?php echo $Result['parent_name'];?></b><br>
                Parent's contact: <b><?php echo $Result['parent_contact'];?></b><br>
                Home District: <b><?php echo $Result['home'];?></b><br>
                DOB: <b><?php echo $Result['dob'];?></b><br>
                Gender: <b><?php echo $Result['gender'];?></b><br>
              </div>
              </div>
              <!-- academics information-->
              <div class="w3-third">
                <i class="fa fa-university fa-fw"></i><strong> University Info</strong><br>
                <div class="w3-container" style="padding-left: 20px; padding-top: 10px;">
                Wilaya(french Yr): <b><?php echo $Result['wilaya'];?></b><br>
                Year of Enrollment: <b><?php echo $Result['year_of_entry'];?></b><br>
                Wilaya (current): <b><?php echo $Result['wilaya'];?></b><br>
                University: <b><?php echo $Result['versity'];?></b><br>
                Course: <b><?php echo $Result['course'];?></b><br>
                Academic Year: <b><?php echo $Result['year'];?></b><br>
                Residencecard: <b><?php echo $Result['card_no'];?></b><br>
                </div>
              </div></div><br><hr>
              <!-- passport details -->
              <div class="w3-row-padding" style="background: transparent; margin-left: 60px;">
              <div class="w3-half">

                <i class="fa fa-info-circle fa-fw"></i><strong> Passport Info</strong><br>
                <div class="w3-container" style="padding-left: 20px; padding-top: 10px;">
                Passport_No: <b><?php echo $Result['passport_no'];?></b><br>
                Surname: <b><?php echo $Result['first'];?></b><br>
                GivenName: <b><?php echo $Result['second'];?></b><br>
                Nationality: <b><?php echo $Result['nationality'];?></b><br>
                Date of issue: <b><?php echo $Result['doi'];?></b><br>
                Date of Birth: <b><?php echo $Result['dob2'];?></b><br>
              </div>
              </div>
          <!-- addtional information fronm the student's account -->
              <div class="w3-half">
                
                <i class="fa fa-tasks fa-fw"></i><strong> Addtional information</strong><br>
                <div class="w3-container" style="padding-left: 20px; padding-top: 10px;">
                Role: <?php echo $Result['work'];?><br>
                Account Type: <?php echo $Result['AC_type'];?><br>
                Account State: <?php echo $Result['status'];?><br>
                Bank account Attarched:<br>
                No of Posts : <br>
                No of Suggestions :
            </div>
          </div></div><br><hr>
          <!--Actions about the accounnt-->
          <div class="w3-row-padding" style="background: transparent; margin-left: 40px;">
              <div class="w3-center">
                <i class="fa fa-cog fa-fw"></i><strong> Account actions</strong>
                <p>
                <div class="w3-container">
                  <btn class="w3-button w3-small w3-round w3-blue" onclick="actions('Delete old user', '<?php echo $Result['passport_no'];?>')">Delete Account</btn>
                  <btn class="w3-button w3-small w3-round w3-blue" onclick="actions('Power lose', '<?php echo $Result['passport_no'];?>')">Remove Admin rights</btn>
                  <btn class="w3-button w3-small w3-round w3-blue"  onclick="actions('Lock account', '<?php echo $Result['passport_no'];?>')">Lock Account</btn>
                  <btn class="w3-button w3-small w3-round w3-blue" onclick="actions('Unlock account', '<?php echo $Result['passport_no'];?>')">Unlock Account</btn>
                  <btn class="w3-button w3-small w3-round w3-blue" onclick="actions('Arm account', '<?php echo $Result['passport_no'];?>')">Make him Admin</btn>
                </p>
            </div>
          </div>
        </div>
        </div>
   <?php
}}
?>
