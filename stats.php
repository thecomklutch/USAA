

<?php

  //user logged is and admin
  if (isset($_SESSION) && $_SESSION['user']['AC_type'] == 'S') {
  	//years of the students 
  	$yearstests = [2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027, 2028, 2029, 2030];
                  foreach ($yearstests as $yeartest) {
                    //male students 
                    $sql = "SELECT gender, year_of_entry FROM users WHERE year_of_entry='$yeartest' AND gender='M'";
                    $result = mysqli_query($conn, $sql);
                    $rsults = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    $males = count($rsults);

                    //female students 
                    $sql = "SELECT gender, year_of_entry FROM users WHERE year_of_entry='$yeartest' AND gender='F'";
                    $result = mysqli_query($conn, $sql);
                    $results = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    $female = count($results);

                    //update vales in the database
                    $sql = "UPDATE `statistics` SET `girls` = '$female', `boys` = '$males' WHERE `statistics`.`year` = '$yeartest'";
                    mysqli_query($conn, $sql);
                    
                  }

      //adding the wilaya rows to the database 
                  //get the available wilaya in the users table
                  $sql = "SELECT wilaya FROM users";
                  $result = mysqli_query($conn, $sql);

                  while ($wrs = mysqli_fetch_row($result))
                  {
                  	foreach ($wrs as $wr)
                  	{

                  		//add the fields into the databse table 
                  		$sql = "INSERT INTO `wilayastats` (`id`, `wilaya`, `studentscount`) VALUES (NULL, '$wr', '0')";
                  		mysqli_query($conn, $sql);
                  	}
                  }


                  //remove the duplicates from the database
                  $sql = "DELETE t1 FROM wilayastats t1 INNER JOIN wilayastats t2 WHERE t1.id > t2.id AND t1.wilaya = t2.wilaya";
                  mysqli_query($conn, $sql);

                  //get the wilaya array 
                  $sql = "SELECT wilaya FROM wilayastats";
                  $exec = mysqli_query($conn, $sql);
                  while ($wilayaz = mysqli_fetch_array($exec))
                  {
                  	//iterate through the array for the database iterations 
                  foreach ($wilayaz as $wilayasingle)
                  {
                  	//get the count of students from the users table 
                  	$sql = "SELECT passport_no FROM users WHERE wilaya='$wilayasingle'";
                  	$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                  	$results = mysqli_fetch_all($result, MYSQLI_ASSOC);
                  	$studentscount = count($results);

                  	//add the values to the databse
                  	$sql = "UPDATE `wilayastats` SET `studentscount` = $studentscount WHERE `wilayastats`.`wilaya` = '$wilayasingle'";
                  	mysqli_query($conn, $sql);
                  }
                  
              }
          } else {
            header('location: login.php');
          }
?>