<?php
    include 'config.php';

    $firstname = $_POST['fn'];
    $secondname = $_POST['sn'];
    $dateofbirth = $_POST['dob'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $parentname = $_POST['parentname'];
    $parentcontact = $_POST['parentcontact'];
    $home = $_POST['district'];
    $passportnumber = $_POST['passportnumber'];
    $dateofissue = $_POST['doi'];
    $dateofbirth2 = $_POST['dob2'];
    $wilaya = $_POST['wilaya'];
    $university = $_POST['university'];
    $course = $_POST['course'];
    $academicyear = $_POST['academicyear'];
    $yearofenrollment = $_POST['yoe'];
    $residencecardnumber = $_POST['rcn'];
    $password = $_POST['password'];

    // check if the user alredy exists 
    $check_user = "SELECT * FROM `users` WHERE passport_no='$passportnumber' OR email='$email' LIMIT 1";
    $result = mysqli_query($conn, $check_user);
	$user = mysqli_fetch_assoc($result);
	if ($user) {
        echo 'User with passport number: '.$passportnumber. ' already exists';
    } else {
        // register user to the database 
        $passhash = md5($password);
        $query = "INSERT INTO `users`
			(`card_no`, `passport_no`, `first`, `second`,
			`email`, `phone`, `passhash`, `wilaya`,
			`year`, `course`, `versity`, `dob`,
			`gender`, `AC_type`, `status`, `msg_state`,
			`bankaccount`, `created_at`, `parent_name`,
			`parent_contact`, `home`, `nationality`, `doi`,
			`dob2`, `code1`, `code2`, `year_of_entry`, `work`) VALUES (
            '$residencecardnumber', '$passportnumber', '$firstname', '$secondname',
            '$email', '$phone', '$passhash', '$wilaya',
            '$academicyear', '$course', '$university', '$dateofbirth',
            '$gender', 'N', 'wait', ' ',
            'no', CURRENT_TIMESTAMP, '$parentname',
            '$parentcontact', '$home', 'UGANDA', '$dateofissue',
            '$dateofbirth2', ' ', ' ', '$yearofenrollment', 'None'
            )";
            if (mysqli_query($conn, $query)) {
                // set user's session
                $_SESSION['user'] = getuser($email);
                // generate the code to be sent to the user
                $code = rand(100, 1000);
                mysqli_query($conn, "UPDATE `users` SET `code1` = '$code' WHERE `users`.`passport_no` = '$passportnumber'");

                // send the email to the user
                // emailuser($email);?>
                <script>
                    Swal.fire({
                        
                        type: 'success',
                        title: 'You have been registered successfully',
                        showConfirmButton: false,
                        allowOutsideClick: false,
                        footer: '<a href="USAAstudent/accountemailverfication.php">Click here to verify ure email</a>'
                        
                    })
                </script>
            <?php 
                // Enter the confirmation code from the email 
                // header('location: accountverification.php');
                echo $_SESSION['user']['email'];

            } else {echo (mysqli_error($conn));}

    }

    function getuser($id) {
		global $conn;
		//query the database
		$sql = "SELECT * FROM users WHERE email='$id'";
		$results = mysqli_query($conn, $sql);
		$users = mysqli_fetch_assoc($results);
		return $users;
	}

?>
