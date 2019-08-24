<?php if (isset($_SESSION['user']) && $_SESSION['user']['AC_type'] != 'S') {?>


<div class="w3-bar w3-top w3-black " style="position: static; z-index: 1; margin-top: 0px; height: auto; margin-bottom: 5px;padding-bottom: 0px; width: 100%; background: #373B44;  /* fallback for old browsers */
	background: -webkit-linear-gradient(to right, #4286f4, #373B44);  /* Chrome 10-25, Safari 5.1-6 */
	background: linear-gradient(to right, #4286f4, #373B44);">
  
  <span class="w3-bar-item w3-right" style=";"><h2 class="w3-small">
  	<div class="w3-dropdown-hover">
  	<i class="w3-bar-item fa fa-user-circle fa-fw" style="margin-left: 3px; margin-right: 3px;"></i>  
  	<div class="w3-dropdown-content w3-round w3-bar-block w3-sand" style="right: 70px; width: 300px; margin-right: 20px; position: absolute; z-index: 2;">
  			<div class="w3-container"  style="padding-top: 20px; padding-bottom: 20px; ">
		        <hr style="width: 100%; margin-top: 2px; margin-bottom: 2px;">
		        <i class="fa fa-pencil fa-fw"></i> <span class="w3-button w3-hover-dark-grey w3-none" onclick="document.getElementById('coursechange').style.display='block'">Request for Course Change</span>
            <?php include 'changecourse.php';?>
            <br>
		        <i class="fa fa-bank fa-fw"></i> <span class="w3-button w3-hover-dark-grey w3-none" onclick="document.getElementById('bankdetails').style.display='block'">Bank account</span>
            <?php include 'bankdetails.php';?>
            <br>
		        <i class="fa fa-pencil fa-fw"></i> <span class="w3-button w3-hover-dark-grey w3-none" onclick="document.getElementById('admin_msg').style.display='block'">Send message to Admin</span>
            <?php include 'sendadmintext.php';?>
            <br>
	    	</div>
        <hr style="width: 100%; margin-top: 2px; margin-bottom: 2px;">
        <span class="w3-center"><a class="w3-button w3-light-grey" href="logout.php" style="width: 100%;
         	background: #373B44;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #4286f4, #373B44);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #4286f4, #373B44);">Log out</a></span>
     </div>
    </div>
 </span>




  	<b class="w3-bar-item"><?php echo $_SESSION['user']['first'];?></b></h2></span>
</div>
	
<?php } else {
	header('location: login.php');}?>