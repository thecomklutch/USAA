<?php
//include admin functions
include 'admin/admin_functions.php';
include 'config.php';
include 'stats.php';
//GET all unappproved suggestions 
$unapproveds = unapproved();
$posts = allposts(); //all posts
$suggestions = all_suggestions(); //all suggestions
$students = allaccounts(); //all students' information(approved)
$leaders = studentsleaders(); //students leaders
$requests = accountsrequests(); //new accounts for approval
$accounts = allaccounts(); //all approved users 
$wilayas = allwilayaz(); //all wilayas 
$cc = courserequest(); //course change requests 
$adminmessages = messagesforadmin(); //admin messages from the crowd
?>
<!DOCTYPE html>
<html>
<title>USAA ADMIN</title>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<!-- include the javascript files -->
<script type="text/javascript" src="admin/usaa.js"></script>
<script type="text/javascript" src="admin/usaa2.js"></script>
<script type="text/javascript" src="admin/usaa3.js"></script>
<script type="text/javascript" src="admin/usaa4.js"></script>




<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
html {
    overflow: scroll;
    overflow-x: hidden;
}
 /* Optional: just make scrollbar invisible */
}
/* Optional: show position indicator in red */
::-webkit-scrollbar-thumb {
    background: #FF0000;
}

</style>
</head>
<body class="w3-light-grey" onLoad="scrollDiv_init()">

  <!--Top menu-->
<div class="w3-bar w3-top w3-large" style="z-index:4 background: #373B44;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #4286f4, #373B44);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #4286f4, #373B44); height: 40px;">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <a class="w3-small w3-bar-item w3-right" href="logout.php" style="padding: 10px; text-decoration: none; color: #ffff;"> Logout</a>

</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px; overflow: hidden;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="usaa.jpg" class="w3-circle w3-margin-right" style="width:80px">
    </div>
    
      <span style="color: #2a3b57;">Welcome, <strong>Admin</strong></span><br>

      
  </div>
  <hr style="margin-top: 7px; margin-bottom: 5px;">
  <div class="w3-container">
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"  style="color: #23527c;"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="#" class="w3-bar-item w3-button w3-padding" style="color: #152238;"><i class="fa fa-home fa-fw"></i> Home</a>
    <div class="w3-dropdown-hover">
      <btn class="w3-bar-item w3-button w3-padding" style="color: #152238;"><i class="fa fa-rss fa-fw"></i> Posts and announcements</btn>
      <div class="w3-dropdown-content w3-bar-block w3-sand w3-round" style="">
        <a href="#" class="w3-bar-item w3-button w3-padding" style="color: #23527c;"><i class="fa fa-line-chart fa-fw"></i> Trending suggestions</a>
        <a href="#" class="w3-bar-item w3-button w3-padding" style="color: #23527c;"><i class="fa fa-pencil fa-fw"></i> New Announcements & posts (<?php echo count($posts);?>)</a>
        <a href="#" class="w3-bar-item w3-button w3-padding" style="color: #23527c;"><i class="fa fa-pencil fa-fw"></i> New suggestions (<?php echo count($unapproveds);?>)</a>
        <a href="#" class="w3-bar-item w3-button w3-padding" style="color: #23527c;"><i class="fa fa-bullhorn fa-fw"></i> Post Announcement</a>
      </div>
    </div>
    <div class="w3-dropdown-hover">
      <btn class="w3-bar-item w3-button w3-padding" style="color: #152238;"><i class="fa fa-info-circle fa-fw"></i> passport details</btn>
      <div class="w3-dropdown-content w3-bar-block w3-sand">
        <a href="#" class="w3-bar-item w3-button w3-padding" style="color: #23527c;"><i class="fa fa-info fa-fw"></i> Passport Details for Students</a>
        <a href="#" class="w3-bar-item w3-button w3-padding" style="color: #23527c;"><i class="fa fa-search fa-fw"></i> Passport Details by student</a>
      </div>
    </div>
    <div class="w3-dropdown-hover">
      <btn class="w3-bar-item w3-button w3-padding" style="color: #152238;"><i class="fa fa-address-book fa-fw"></i> Contacts</btn>
      <div class="w3-dropdown-content w3-bar-block w3-sand">
        <a href="#" class="w3-bar-item w3-button w3-padding" style="color: #23527c;"><i class="fa fa-address-book-o fa-fw"></i> Student's Reprenstatives</a>
        <a onclick="contacts()" class="w3-bar-item w3-button w3-padding" style="color: #23527c;"><i class="fa fa-address-book-o fa-fw"></i> All student's Contacts</a>
      </div>
    </div>
    <div class="w3-dropdown-hover">
      <btn class="w3-bar-item w3-button w3-padding" style="color: #152238;"><i class="fa fa-cog fa-fw"></i>  Account actions</btn>
      <div class="w3-dropdown-content w3-bar-block w3-sand">
        <a href="#" class="w3-bar-item w3-button w3-padding" style="color: #23527c;"><i class="fa fa-user-plus fa-fw"></i> New Accounts</a>
        <a href="#" class="w3-bar-item w3-button w3-padding" style="color: #23527c;"><i class="fa fa-edit fa-fw"></i> Change Account Type</a>
        <a href="#" class="w3-bar-item w3-button w3-padding" style="color: #23527c;"><i class="fa fa-lock fa-fw"></i> Deactivate/Lock Account</a>
        <a href="#" class="w3-bar-item w3-button w3-padding" style="color: #23527c;"><i class="fa fa-pencil fa-fw"></i> Edit account</a>
        <a href="#" class="w3-bar-item w3-button w3-padding" style="color: #23527c;"><i class="fa fa-eraser fa-fw"></i> Delete Account</a>
      </div>
    </div>
    <div class="w3-dropdown-hover">
      <btn class="w3-bar-item w3-button w3-padding" style="color: #152238;"><i class="fa fa-question-circle fa-fw"></i>  Conflicting information</btn>
      <div class="w3-dropdown-content w3-bar-block w3-sand">
        <a href="#" class="w3-bar-item w3-button w3-padding" style="color: #23527c;"><i class="fa fa-question fa-fw"></i> Passport information missmatches</a>
      </div>
    </div>
    <div class="w3-dropdown-hover">
    <btn class="w3-bar-item w3-button w3-padding" style="color: #152238;"><i class="fa fa-cogs fa-fw"></i>  Auxilliary Actions</btn>
    <div class="w3-dropdown-content w3-bar-block w3-sand">
		<a onclick="document.getElementById('m_actions').style.display='block'" class="w3-bar-item w3-button w3-padding" style="color: #23527c;"><i class="fa fa-users fa-fw"></i>  Mass Accounts actions</a>
    <a onclick="document.getElementById('change_course').style.display='block'" class="w3-bar-item w3-button w3-padding" style="color: #23527c;"><i class="fa fa-edit fa-fw"></i>  Course Change Requests (<?php echo count($cc);?>)</a>
		<a href="admin/bankaccounts.php" class="w3-bar-item w3-button w3-padding" style="color: #23527c;"><i class="fa fa-bank fa-fw"></i>  Bank Accounts</a>
    </div>
    </div>
    <a href="#" class="w3-bar-item w3-button w3-padding" style="color: #152238;"><i class="fa fa-area-chart fa-fw"></i>  Statistics</a>
    <a href="#" class="w3-bar-item w3-button w3-padding" style="color: #152238;"><i class="fa fa-envelope fa-fw"></i>  Messages (<?php count($adminmessages);?>)</a>
    <a href="#databaseactions" onclick="document.getElementById('databaseactions').style.display='block'" class="w3-bar-item w3-button w3-padding" style="color: #152238;"><i class="fa fa-database fa-fw"></i>  Database Actions</a>
  
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<div class="w3-main" style="margin-left:300px;margin-top:10px;">
  <!-- search box for finding a bout a student-->
  <input class="w3-input w3-round w3-light-grey w3-border" type="text" id="search" placeholder="search student by name for all information and Apply the actions" style="margin-left: 20px; margin-top: 60px; width: 90%;">
  <br>
    <div id="display"></div>

    <!-- database actions -->
  <div id="databaseactions" class="w3-border w3-round w3-border-grey" style="display: none; margin: 20px; padding: 10px;">
    <i class="w3-small fa fa-exclamation-triangle fa-fw" style="color: red;"></i> <span class="w3-small" style="color: red;">Take caution these action affect the database massively</span><br />
    <div class="w3-center">
      Posts & Suggestions
      <div class="w3-round w3-container w3-border-dark-grey w3-border" style="padding: 20px; margin-bottom: 20px; margin-left: 30px; margin-top: 10px; margin-right: 30px;">
      <input type="text" class='w3-round w3-input w3-light-grey w3-border' placeholder="Enter the filter of posts to be deleted 'year of post or wilaya'">
        <br />
        <button class="w3-button w3-round w3-left w3-small w3-blue">Delete Posts</button>
        <br><br><br>
        <i class="w3-small fa fa-exclamation-triangle fa-fw" style="color: red; float: left;"></i> <span class="w3-small" style="float: left; color: red;">Delete all the posts from the database</span><br />
        <button class="w3-button w3-round w3-left w3-small w3-blue">Delete all posts </button>
      </div>
    </div>
    <div class="w3-center">
      Events and Announcements 
      <div class="w3-round w3-container w3-border-dark-grey w3-border" style="padding: 20px; margin-bottom: 20px; margin-left: 30px; margin-top: 10px; margin-right: 30px;">
      <input type="text" class='w3-round w3-input w3-light-grey w3-border' placeholder="Enter the filter of  events and announcements to be deleted 'year of post or wilaya'">
        <br />
        <button class="w3-button w3-round w3-left w3-small w3-blue">Delete Events and Announcements</button>
        <br><br><br>
        <i class="w3-small fa fa-exclamation-triangle fa-fw" style="color: red; float: left;"></i> <span class="w3-small" style="float: left; color: red;">Delete Events and Announcements from the database</span><br />
        <button class="w3-button w3-round w3-left w3-small w3-blue">Delete all the Events and Announcements from the database</button>
      </div>
    </div>
    <div class="w3-center">
      Admin messages
      <div class="w3-round w3-container w3-border-dark-grey w3-border" style="padding: 20px; margin-bottom: 20px; margin-left: 30px; margin-top: 10px; margin-right: 30px;">
      <input type="text" class='w3-round w3-input w3-light-grey w3-border' placeholder="Enter the filter of messages to be deleted 'year of post or wilaya'">
        <br />
        <button class="w3-button w3-round w3-left w3-small w3-blue">Delete Messages</button>
        <br><br><br>
        <i class="w3-small fa fa-exclamation-triangle fa-fw" style="color: red; float: left;"></i> <span class="w3-small" style="float: left; color: red;">Delete all messages from the database</span><br />
        <button class="w3-button w3-round w3-left w3-small w3-blue">Delete all messages </button>
      </div>
    </div>
    <div class="w3-center">
      Edit bank Account
      <div class="w3-round w3-container w3-border-dark-grey w3-border" style="padding: 20px; margin-left: 30px; margin-top: 10px; margin-right: 30px;">
        <input type="text" class='w3-round w3-input w3-light-grey w3-border' placeholder="Enter the passport number for the bank account to edit">
        <br />
        <button class="w3-button w3-round w3-left w3-small w3-blue">Find Account</button>
        <div id="bankeditaccount"></div>
      </div>
    </div>
    <br><br>
    <div class="w3-container"><span class="w3-button w3-small w3-dark-grey w3-round w3-small" style="max-height: 200px; float: right; margin-bottom: 10px;" onclick="closecontainer('databaseactions')">Close</span></div>
  </div>


  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <div class="w3-center"><h5 style="color: #28477a;"><b>Students in Algeria (Statistics)</b></h5></div>
  </header>


  <div class="w3-container w3-round w3-border" style="background: transparent; padding: 20px;">
    <!-- line chart for received students each year -->
     <script type="text/javascript">
          google.charts.load('current', {'packages':['bar']});
          google.charts.setOnLoadCallback(drawChart);

          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Year', 'Boys', 'Girls'],
              <?php
                $sql = "SELECT * FROM `statistics` WHERE year BETWEEN 2016 AND 2018";
                $exec = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($exec))
                {
                  echo "['".$row['year']."','".(int)$row['boys']."','".(int)$row['girls']."'],";
                }


              ?>
            ]);

            var options = {
              chart: {
                title: '',
              },
              backgroundColor: {
                fill: 'transparent',
                },
             
              bars: 'horizontal' // Required for Material Bar Charts.
            };

            var chart = new google.charts.Bar(document.getElementById('barchart_material'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
          }
        </script>
    <div class="w3-center"><span class="" style="color: #23527c;">Students Received Every Year</span></div>
    <br><br>
    <div id="barchart_material"></div>
      <br>
      <br>
      <!-- Each count in every wilaya -->  
            <script type="text/javascript">
          google.charts.load("current", {packages:["corechart"]});
          google.charts.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Wilaya', 'Number of Students'],
              <?php
                $sql = "SELECT * FROM `wilayastats`";
                $exec = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($exec))
                {
                  echo "['".$row['wilaya']."',".(int)$row['studentscount']."],";
                  
                }


              ?>
              
            ]);

            var options = {
              pieHole: 0.6,
              backgroundColor: {
              fill: 'transparent',
              fillOpacity: 0.8
          },
            };

            var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
            chart.draw(data, options);
          }
        </script>
        <div class="w3-center"><span class="" style="color: #23527c;">Distribution of Students in Different Wilayaz</span></div>
        <div id="donutchart" style="height: 500px;"></div>
        <br>
        <btn class="w3-button w3-round w3-small" style="float: left; background-color: #23527c;">More Stastics</btn>
</div>


<!-- posts and announcements sections-->
  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half" style="height: auto; max-height: 600px; overflow: hidden;">
        <h5 style="color: #28477a;">Posts and Announcements</h5>
        
        <?php 
          if (count($posts) > 0){
            foreach ($posts as $post) {?>
        <div class="w3-container w3-border w3-round"  id="yahryo" style="padding:10px; width: 80%;">
        <b style="color: #021638;">Title: </b><span style="color: #0c123b;"><?php echo $post['title'];?></span><p>
        <span style="color: #0c123b;"><?php echo $post['description'];?><p></span>
        <b style="color: #021638;">By: </b><span style="color: #0c123b;"><?php echo $post['created_by'];?></span><p>
        <b style="color: #021638;">Created at</b><span style="color: #0c123b;"><?php echo $post['created_at'];?></span>
          <btn class="w3-button w3-small w3-round w3-blue" style="float: right; margin-left: 5px;" onclick="actions('Delete post', '<?php echo $post['id'];?>')">Delete</btn>
        </p>
    </div>
    <div id="message"></div>
    <br>
  <?php }} else {
    echo "No posts yet";
  }?>
  <br><br>
  
      </div>
<!--feeds of unapproved suggestions-->
      <div class="w3-half" style="height: auto; max-height: 600px; overflow: hidden;">
        <h5 style="color: #28477a;">Feeds</h5>
    <?php if (count($unapproveds) > 0){
      foreach ($unapproveds as $unapproved) {?>
    <div class="w3-container w3-border w3-round" id="yahryo" style="padding:10px;">
     
        <?php echo $unapproved['post'];?><p>
        <b style="color: #021638;">By: </b><span style="color: #0c123b;"><?php echo $unapproved['created_by'];?></span><p>
        <b style="color: #021638;">From: </b><span style="color: #0c123b;"><?php echo $unapproved['wilaya'];?></span><p>
        <b style="color: #021638;">Created at</b><span style="color: #0c123b;"><?php echo $unapproved['created_at'];?></span>
        <btn class="w3-button w3-small w3-round w3-blue" style="float: right; margin-left: 5px;" onclick="actions('Delete suggestion', '<?php echo $unapproved['id'];?>')">Delete</btn>
        <btn class="w3-button w3-small w3-round w3-blue" style="float: right; margin-right: 5px;" onclick="actions('Approve suggestion', '<?php echo $unapproved['id'];?>')">Approve</btn>
        </p>
    </div>
    <div id="message"></div>
  <br>
<?php }} else {echo "No new suggestions yet";}?>
</div>
</div>

<!--Announcement or post section-->
    <btn class="w3-button w3-small w3-round w3-blue" id="announce1" style="float: left; margin-left: 5px;" onclick="openform()">Announce</btn>
    <form method="get" action="admin.php">
      <div class="w3-container w3-round w3-border" id="suggestion_form" style="display: none; width: 60%;">
        <input class="w3-input w3-round" type="text" id="title" placeholder="Title of the communucation" style="margin-top: 10px;" required><br>
        <textarea  class="w3-round" placeholder="Message body here.." id="suggestion" cols="48" rows="4" style="padding-left: 10px; padding-top: 5px;" required></textarea>
        <br>
        <btn class="w3-button w3-round w3-small w3-blue" id="post_event" style="margin-top: 10px; margin-bottom: 10px;" onclick="suggest()">Announce</btn>
      </div>
    </form>
      <div id="post_status"></div>
  <br>
<!--student's representatives-->
  <hr>
  <div class="w3-container">
    <h5 style="color: #28477a;">Students Representatives</h5>
    <table class="w3-small w3-table-all">
        <thread>
          <tr class="w3-boder">
            <th  style="color: #021638;">First_name</th>
            <th style="color: #021638;">Second_name</th>
            <th style="color: #021638;">Wilaya</th>
            <th style="color: #021638;">Phone</th>
            <th style="color: #021638;">Email</th>
            <th style="color: #021638;">University</th>
            <th style="color: #021638;">Course</th>
            <th style="color: #021638;">Academic Year</th>
          </tr>
        </thread>
        <?php foreach ($leaders as $leader) {?>
        <tr >
          <td><?php echo $leader['first'];?></td>
          <td><?php echo $leader['second'];?></td>
          <td><?php echo $leader['wilaya'];?></td>
          <td><?php echo $leader['phone'];?></td>
          <td><?php echo $leader['email'];?></td>
          <td><?php echo $leader['versity'];?></td>
          <td><?php echo $leader['course'];?></td>
          <td><?php echo $leader['year'];?></td>
        </tr>
      <?php }?>
      </table>
  </div>
  <hr>

  <div class="w3-container">
    <h5 style="color: #28477a;">Passport Details</h5>
    <input class="w3-input w3-round w3-light-grey w3-border" type="text" id="search2" placeholder="Filter by Name, Passport Number or Academic year" style="margin-top: 10px; margin-bottom: 10px; width: 90%;">
    <div id="passport_details"></div>
        <div id="details_passport" style="display: none; max-height: 500px; overflow-y: scroll;">
      
      <!-- Passport details table-->
        		<?php foreach ($accounts as $account) {?>
				<table class="w3-small w3-table-all">
					<table class="w3-small w3-table-all">
       			<thread>
					<tr class="w3-border">
            			<th style="color: #021638;">Names</th>
            			<th style="color: #021638;">Wilaya</th>
            			<th style="color: #021638;">Academic Year</th>
            			<th style="color: #021638;">University</th>
            			<th style="color: #021638;">Course</th>
            			<th style="color: #021638;">Passport_No</th>
            			<th style="color: #021638;">Date of Issue</th>
            			<th style="color: #021638;">Expiry Date</th>
            			<th style="color: #021638;">Data conflict</th>
            			<th style="color: #021638;">Action</th>
          			</tr>
        		</thread>
        		<tr class="w3-round">
          			<td><?php echo $account['first'].' '.$account['second'];?></td>
          			<td><?php echo $account['wilaya'];?></td>
          			<td><?php echo $account['year'];?></td>
          			<td><?php echo $account['versity'];?></td>
          			<td><?php echo $account['course'];?></td>
          			<td><?php echo $account['passport_no'];?></td>
          			<td><?php echo $account['doi'];?></td>
          			<td><?php echo $account['doi'];?></td>
          			<td><?php if ($account['dob'] != $account['dob2']) {echo "Yes";} else {echo "No";}?></td>
          			<td><btn class="w3-button" style="height: 20px; margin-top: 0px; padding-top: 0px;">Notify</btn></td>
        		</tr>
        		</table><br>
        		<?php }?>
		<!--End of passport details -->
    </div>
    <span id="close_passport_details" class="w3-button w3-small" style="max-height: 200px; float: right;" onclick="closecontainer('details_passport')">Close</span>
    <span  class="w3-button w3-small" style="float: left;" onclick="details()">Show all passports</span>

  </div>
  <hr>
  <div class="w3-container" style="height: auto; max-height: 430px; overflow: hidden;">
	  <!--New accounts requests -->
    <h5 style="color: #28477a;">New Accounts Requets (<?php echo count($requests); ?>)</h5>
    <?php if (count($requests) > 0){
		foreach ($requests as $requestx) {?>
    <div class="w3-card" style="width: 900px; height: 170px;">
			<header class="w3-container w3-blue">
				<h6 style="float: left;"><?php echo $requestx['first'].' '.$requestx['second'].' '.'('.$requestx['gender'].')';?></h6>
				<h6 style="float: right;"><?php echo $requestx['passport_no'];?></h6>
			</header>
			<div class="w3-container">
				<div class="w3-row-padding">
					<div class="w3-third">
						<span style="color: #021638;">University :</span> <span style="color: #0c123b;"><?php echo $requestx['versity'].' '.'University';?></span><br>
						<span style="color: #021638;">Course :</span> <span style="color: #0c123b;"><?php echo $requestx['course'];?></span><br>
						<span style="color: #021638;">Academic Year :</span> <span style="color: #0c123b;"><?php echo $requestx['year'];?></span><br>
						<span style="color: #021638;">Wilaya  :</span> <span style="color: #0c123b;"><?php echo $requestx['wilaya'];?></span><br>
					</div>
					<div class="w3-third">
						<span style="color: #021638;">Year of Entry :</span> <span style="color: #0c123b;"><?php echo $requestx['year_of_entry'];?></span><br>
						<span style="color: #021638;">Email :</span> <span style="color: #0c123b;"><?php echo $requestx['email'];?></span><br>
						<span style="color: #021638;">Phone_No :</span> <span style="color: #0c123b;"><?php echo $requestx['phone'];?></span><br>
						<span style="color: #021638;">Residencecard_No :</span> <span style="color: #0c123b;"><?php echo $requestx['card_no'];?></span><br>
					</div>
					<div class="w3-third">
						<span style="color: #021638;">Parent's Name :</span> <span style="color: #0c123b;"><?php echo $requestx['parent_name'];?></span><br>
						<span style="color: #021638;">Parent's Contact :</span> <span style="color: #0c123b;"><?php echo $requestx['parent_contact'];?></span><br>
						<span style="color: #021638;">Home District :</span> <span style="color: #0c123b;"><?php echo $requestx['home'];?></span></span><br>
						<span style="color: #021638;">Date of Birth :</span> <span style="color: #0c123b;"><?php echo $requestx['dob'];?></span><br>
					</div>
				</div>
			</div>
			<div class="w3-dark-grey w3-container" style="margin-top: 5px; margin-bottom: 0px;"><span style="color: #0c123b;">
				<button class="w3-button w3-hover-none" style="float: left;" onclick="actions('Approve account', '<?php echo $requestx['passport_no'];?>')">+ Confirm</button>
				<button class="w3-button w3-hover-none" style="float: right;" onclick="actions('Delete new', '<?php echo $requestx['passport_no'];?>')">- Delete</button>
			</div>
	</div><br>
	  <?php }} else {echo "No new accounts now";}?>
</div>
  <hr>
  
<!--All approved posts-->
  <div class="w3-container">
    <h5 style="color: #28477a;">Recent Suggestions</h5>
    <input class="w3-input w3-round w3-light-grey w3-border" type="text" id="suggestionsearch" placeholder="Filter by Academic year or Wilaya " style="width: 80%;">
    <br>
    <div id="suggestionsresults"></div>
    <!-- height control of the div box having the suggestions -->
    <div id="allsuggestions" style="height: auto; max-height: 400px; overflow: auto; ::-webkit-scrollbar {
    width: 0px; background: transparent;}" onMouseOver="pauseDiv()" onMouseOut="resumeDiv()">
    <?php if (count($suggestions) > 0){
      foreach ($suggestions as $suggestion) {?>
    <div class="w3-container w3-border w3-round" id="yahryo" style="padding:10px;">
        <span style="color: #0c123b;"><?php echo $suggestion['post'];?></span><p>
        <b style="color: #021638;">By: </b><span style="color: #0c123b;"><?php echo $suggestion['created_by'];?></span><p>
        <b style="color: #021638;">From: </b><span style="color: #0c123b;"><?php echo $suggestion['wilaya'];?></span><p>
        <b style="color: #021638;">Created at</b><span style="color: #0c123b;"><?php echo $suggestion['created_at'];?></span>
          <btn class="w3-button w3-small w3-round w3-blue" style="float: right;" onclick="actions('Delete suggestion', '<?php echo $suggestion['id'];?>')">Delete</btn>
        </p>
    </div>
    <div id="message">
  <br></div>
<?php }}else {?><div class="w3-panel w3-sand w3-round" style="margin: 20px; width: auto"><h2 class="w3-text-blue w3-small"> No new approved suggestions yet</h2></div>
	<?php }?>
</div>
</div>
  <br><br>
  <br><br>


<!-- footer -->
<div class="w3-container w3-round" style="height: auto;

background: #373B44;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #4286f4, #373B44);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #4286f4, #373B44);
">
  
  <div class="w3-row-padding" style="padding-top: 30px; padding-bottom: 30px;">
    <div class="w3-third">
      <span style="font-size: 16px; color: #ffff;">Auxilliary Actions</span>
      <hr style="margin-top: 2px; margin-bottom: 5px; width: 75%">
      <span style="padding-left: 5px; color: #ffff;">Mass Account Actions</span><br>
      <span style="padding-left: 5px; color: #ffff;">Course Change Request</span><br>
      <span style="padding-left: 5px; color: #ffff;">Bank Accounts</span>
    </div>
    <div class="w3-third">
      <span style="font-size: 16px; color: #ffff;">Posts & Announcements</span>
      <hr style="margin-top: 2px; margin-bottom: 5px; width: 75%">
      <span style="padding-left: 5px; color: #ffff;">Trending suggestions</span><br>
      <span style="padding-left: 5px; color: #ffff;">New Announcements</span><br>
      <span style="padding-left: 5px; color: #ffff;">New suggestions</span><br>
      <span style="padding-left: 5px; color: #ffff;">Post Announcement</span>
    </div>
    <div class="w3-third">
      <span style="font-size: 16px; color: #ffff;">Indepedent Account Actions</span>
      <hr style="margin-top: 2px; margin-bottom: 5px; width: 75%">
      <span style="padding-left: 5px; color: #ffff;">New Accounts</span><br>
      <span style="padding-left: 5px; color: #ffff;">Change Account</span><br>
      <span style="padding-left: 5px; color: #ffff;">Deactivate/Lock</span><br>
      <span style="padding-left: 5px; color: #ffff;">Edit account</span><br>
      <span style="padding-left: 5px; color: #ffff;">Delete Account</span>
    
    </div>
  </div>
  <div class="w3-center"><h2 class="w3-small" style=" color: #ffff;"> ©L-Andy @ USAA <?php echo date('Y');?></h2></div>
</div>

  <!-- End page content -->
</div>



<!-- contacts lists for students and parents -->
<div class="w3-modal" id="id020" style="display: none;">
	<div class="w3-modal-content w3-card-4" style="max-width: auto;">
		<div class="w3-modal-content w3-card-4" style="max-width: auto; margin-top: 100px; margin-bottom: 100px;">
			<div class="w3-center"><br>
				<div class="w3-center"><br>
					<img src="usaa.jpg" class="w3-circle w3-margin-top w3-small" alt="usaa" style="margin-top: 20px;">
				</div>
				<h2 class="w3-small"><b>USAA STUDENTS CONTACT DETAILS</h2>
			</div>
			<div class="w3-container">
			<hr>
			<input class="w3-input w3-round w3-light-grey w3-border" id="search3" type="text" placeholder="search student by name for all information" style="margin-left: 20px; margin-top: 0px; width: 90%;">
			<p>
			<div id="contact_search"></div>
			<div id="all_contacts" class="w3-border w3-round w3-container w3-light-grey">
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
        				<?php foreach ($accounts as $account) {?>
        				<tr class="w3-round">
          					<td><?php echo $account['first'].' '.$account['second'];?></td>
          					<td><?php echo $account['wilaya'];?></td>
          					<td><?php echo $account['course'];?></td>
          					<td><?php echo $account['versity'];?></td>
          					<td><?php echo $account['year'];?></td>
          					<td><?php echo $account['phone'];?></td>
          					<td><?php echo $account['email'];?></td>
        				</tr>
        				<?php }?>
        			</table>
				</div>
			</div>
			<hr>
      <span id="close_passport_details" class="w3-button w3-small w3-dark-grey w3-round w3-small" style="max-height: 200px; float: right; margin-bottom: 10px;" onclick="closecontainer('id020')">Close</span>
		</div>
	</div></div>
</div>
<!-- End of student's contact list -->

<!-- start of mass action form-->
<div class="w3-modal" id="m_actions" style="display: none;">
	<div id="auxilliary_port">
	
		<div class="w3-modal-content w3-border w3-round" style="max-width: auto; margin-top: 100px; margin-bottom: 100px;">
			<div class="w3-center"><br>
				<div class="w3-center"><br>
					<img src="usaa.jpg" class="w3-circle w3-margin-top w3-small" alt="usaa" style="margin-top: 20px;">
				</div>
				<h2 class="w3-small"><b>USAA STUDENTS AUXILLIARY ACTIONS</h2>
			</div>
			<div class="w3-container">
			<hr><h2 class="w3-medium">
			<div class="w3-container w3-light-grey w3-round" style="margin-bottom: 30px;">
			<hr>
			<!-- criterea of applications -->
			<div class="w3-center"><strong>Critera of application<p></strong></div>
			<div class="w3-row-padding">
				<div class="w3-third">
				<div class="w3-center">Wilaya</div><br>
				 <select class="w3-select w3-round w3-blue" id="cwilaya">
					 <option value="" disabled selected>Choose your wilaya</option>
					  <?php 
					  foreach ($wilayas as $wilaya){?>
						  <option class="w3-light-grey"><?php echo $wilaya['wilaya'];?></option>
					<?php }?>
				 </select> 
				</div>
				<div class="w3-third">
				<div class="w3-center">Academic Year</div><br>
				<select class="w3-select w3-round w3-blue" id="cyear">
					 <option value="" disabled selected>Choose Academic Year</option>
					  <option  class="w3-light-grey">all</option>
					  <option  class="w3-light-grey">French Year</option>
					  <option  class="w3-light-grey">Year 1</option>
					  <option  class="w3-light-grey">Year 2</option>
					  <option  class="w3-light-grey">Year 3</option>
					  <option  class="w3-light-grey">Year 4</option>
					  <option  class="w3-light-grey">Master 1</option>
					  <option  class="w3-light-grey">Master 2</option>
					 
				 </select>
				</div>
				<div class="w3-third">
				<div class="w3-center">Course</div><br>
				<select class="w3-select w3-round w3-blue" id="ccourse">
					 <option value="" disabled selected>Choose Course</option>
					  <option  class="w3-light-grey">all</option>
					  <option  class="w3-light-grey">Mechanical Engineering</option>
					  <option  class="w3-light-grey">Year 1</option>
					  <option  class="w3-light-grey">Year 2</option>
					  <option  class="w3-light-grey">Year 3</option>
					  <option  class="w3-light-grey">Year 4</option>
					  <option  class="w3-light-grey">Master 1</option>
					  <option  class="w3-light-grey">Master 2</option>
				 </select>
				</div>
			</div>
			<hr>
			<!-- Action -->
			<div class="w3-center"><strong>Actions</strong></div><p>
      <div class="w3-center">
        <select class="w3-round w3-blue" id="caction" style="width: 60%;">
          <option value="0" disabled>--Select Action--</option>
          <option value="Notify">Send Notification</option>
          <option value="Lock">Lock</option>
        </select>
      </div>
			
			<hr>
			<!-- Reason/comment/message -->
			<div class="w3-center">
				Reason<p>
				<select class="w3-select w3-round w3-blue" id="creason" style="width: 80%;">
					 <option value="" disabled selected>Choose your option</option>
					  <option class="w3-light-grey">Update missing information.</option>
					  <option class="w3-light-grey">Submittion of student’s bank accounts.</option>
					  <option value="3" class="w3-light-grey">Calling for information of new students </option>
            <option value="3" class="w3-light-grey">Check for information updates from all students </option>
				 </select>
			</div><p><br>
			
			<hr>
			<!-- Action implementation -->
			<div class="w3-center"><btn class="w3-button w3-small w3-blue w3-round" onclick="auxilliary()">Submit</btn></div>
			<hr>
      <div id="auxilliary_show"></div>
			</div>
      <span id="close_passport_details" class="w3-button w3-small w3-dark-grey w3-round w3-small" style="max-height: 200px; float: right; margin-bottom: 10px;" onclick="closecontainer('m_actions')">Close</span>
		</div></div></h2>
	</div>
	
	
</div>

<!-- course change requests -->
<div class="w3-modal" id="change_course" style="display: none;">
  <div id="auxilliary_port">
  
    <div class="w3-modal-content w3-border w3-round" style="max-width: auto; margin-top: 100px; margin-bottom: 100px;">
      <div class="w3-center"><br>
        <div class="w3-center"><br>
          <img src="usaa.jpg" class="w3-circle w3-margin-top w3-small" alt="usaa" style="margin-top: 20px;">
        </div>
        <h2 class="w3-small"><b>USAA STUDENTS COURSE CHANGE APPLICATIONS</b></h2>
      </div>
      <div class="w3-container">
      <hr><h2 class="w3-medium">
        <?php foreach ($cc as $cc1) {?>
      <div class="w3-container w3-border w3-round" style="margin-bottom: 30px; padding: 20px; padding-left: 40px;">
        Name: <b><?php echo $cc1['names'];?></b><br>
        Previous Course: <b><?php echo $cc1['previouscourse'];?></b><br>
        Wilaya:  <b><?php echo $cc1['course1'];?></b><br>
        Prefered Course(1): <b><?php echo $cc1['course1'];?></b><br>
        Prefered Course(2): <b><?php echo $cc1['course2'];?></b><br>
        Prefered Wilaya(1):  <b><?php echo $cc1['wilaya1'];?></b><br>
        Prefered Wilaya(2): <b><?php echo $cc1['wilaya2'];?></b><br>
        Reason(s): <b><?php echo $cc1['reaason'];?></b><br>
      </div> 
    <?php }?>
    </h2>
  </div>
  <span id="close_passport_details" class="w3-button w3-small w3-dark-grey w3-round w3-small" style="max-height: 200px; float: right; margin-bottom: 10px; margin-top: 10px;" onclick="closecontainer('change_course')">Close</span>
</div>

</div>
<!-- End of mass actions-->

<!-- start of database actions -->
<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
//fucntion to get all the passports 
function details()
{
  document.getElementById("details_passport").style.display='block';
  document.getElementById("show_passport_details").style.display='none';
}
function openform() {
  // body...
  document.getElementById("suggestion_form").style.display='block';
  document.getElementById("announce1").style.display='none';
}

//seleketon function for all functions 
function actions (a, b) {
	var actionname = a;
	var actionaid = b;
	var Data = {'action_lebel':actionname, 'action_id':actionaid};
	$.ajax({
		url:'admin/usaaactions.php',
        method:'POST',
        datatype:'json',
        data: Data,
        success:function(html){
			$("#message").html(html).show();
	        $("#yahryo").hide();
	        setTimeout(function(){// wait for 5 secs(2)
           location.reload(); // then reload the page.(3)
      }, 1000); 
            }
        });
}

//function to post a suggestion
function suggest() {
	var titlex = $("#title").val();
	var suggestionx = $("#suggestion").val();
	var actionlebel = "suggest";
				$.ajax({
                    url:'admin/usaaactions.php',
                    method:'POST',
                    datatype:'json',
                    data:{"action_lebel":actionlebel, "action_id":titlex, "suggestion":suggestionx},
                   success:function(html){
	                   $("#post_status").html(html).show();
	                   $("#suggestion_form").hide();
                   }
                });
}

//opent the contacts modal 
function contacts ()
{
	document.getElementById("id020").style.display='block';
}

//close the container 
function closecontainer(xy)
{
  document.getElementById(xy).style.display='none';
}


//auto scroll of web content 
ScrollRate = 100;

function scrollDiv_init() {
	DivElmnt = document.getElementById('allsuggestions');
	ReachedMaxScroll = false;
	
	DivElmnt.scrollTop = 0;
	PreviousScrollTop  = 0;
	
	ScrollInterval = setInterval('scrollDiv()', ScrollRate);
}

function scrollDiv() {
	
	if (!ReachedMaxScroll) {
		DivElmnt.scrollTop = PreviousScrollTop;
		PreviousScrollTop++;
		
		ReachedMaxScroll = DivElmnt.scrollTop >= (DivElmnt.scrollHeight - DivElmnt.offsetHeight);
	}
	else {
		ReachedMaxScroll = (DivElmnt.scrollTop == 0)?false:true;
		
		DivElmnt.scrollTop = PreviousScrollTop;
		PreviousScrollTop--;
	}
}

function pauseDiv() {
	clearInterval(ScrollInterval);
}

function resumeDiv() {
	PreviousScrollTop = DivElmnt.scrollTop;
	ScrollInterval    = setInterval('scrollDiv()', ScrollRate);
}

//auxilliary actions 
function auxilliary()
{
	//getting vars 
	var wilaya1 = $("#cwilaya").val();
	var year1 = $("#cyear").val();
	var course1 = $("#ccourse").val();
	var action1 = $("#caction").val();
	var reason1 = $("#creason").val();
	var data1 = {"wilaya2":wilaya1, "year2":year1, "course2":course1, "action2":action1, "reason2":reason1};
	
	$.ajax({
		url:'admin/usaaauxilliary.php',
         method:'POST',
         datatype:'json',
         data: data1,
         success:function(html){
			$("#auxilliary_show").html(html).show();
         }
	 });


}
</script>


<!-- ppdf conversions -->
</body>

</html>
