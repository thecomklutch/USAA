<?php 
    // include the connection pack 
    include 'config.php';
    // implementation of the sign up of the student to the system

    // getitng the data
    $firstname = $_POST['first_name'];
    $secondname = $_POST['last_name'];
    $dob = $_POST['DOB'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phonenumber = $_POST['contact'];
    $parentname = $_POST['parent_name'];
    $parentcontact = $_POST['parent_contact'];
    $homedistrict = $_POST['home_district'];
    $password = $_POST['password'];
    $passport_number = $_POST['Passportnumber'];
    $dateofissue = $_POST['dateofissue'];
    $dateofbirthpassport = $_POST['DOB2'];
    $wilaya = $_POST['wilaya'];
    $university = $_POST['university'];
    $course = $_POST['course'];
    $academicyear = $_POST['academic_year'];
    $yearofenrollment = $_POST['enrollmentyear'];
    // $residencecard = $_POST['residencecard'];


    // encrypty the password 
    $passhashes = $password;

    // generate a random number between 0, 1000 and send it the email and the database
    $varcode = rand(0, 1000);
    // push dta to the databse 
    $sql = "INSERT INTO `users` (
        `card_no`, `passport_no`, `first`, `second`,
        `email`, `phone`, `passhash`, `wilaya`, `year`,
        `course`, `versity`, `dob`, `gender`, `AC_type`,
        `status`, `msg_state`, `bankaccount`, `created_at`,
        `parent_name`, `parent_contact`, `home`, `nationality`,
        `doi`, `dob2`, `code1`, `code2`, `year_of_entry`, `work`) VALUES (
        '##', '$passport_number', '$firstname', '$secondname',
        '$email', '$phonenumber', '$passhashes', '$wilaya', '$academicyear',
        '$course', '$university', '$dob', '$gender', 'N',
        'wait', '', '', CURRENT_TIMESTAMP,
        '$parentname', '$parentcontact', '$homedistrict', 'UGANDA',
        '$dateofissue', '$dateofbirthpassport', '$varcode', '', '$yearofenrollment', 'None')";

    // if all the query is true
    // send email to the user with the code 
    // and prompt them to enter the verification code sent to them 
    if (mysqli_query($conn, $sql) == true) {?>
        echo "Thank you so much for the pay "

    <?php }
    // function to verify the entered code 
    // And redirect the user to the page if the code is true
    function verifycode($passportnumbertocheck, $code) {
        $sql1 = "SELECT code1, passport_number FROM `users` WHERE passport_number='$passportnumbertocheck' AND code1='$code'";
        // if the code the code is false prompt the user for the right code 
        if (mysqli_query($conn, $sql1) != true) {
            // alert them for the right code 
        } else {
            // alter the codes in the database and the state to pending 
            $sql_update = "UPDATE `users` SET `code1` = '' WHERE `users`.`passport_no` = '$passportnumbertocheck'";
            $sql_update_1 = "UPDATE `users` SET `status` = 'Pending' WHERE `users`.`passport_no` = '$passportnumbertocheck'";

            mysqli_query($conn, $sql_update);
            mysqli_query($conn, $sql_update_1);

            // create the session and redirec the user to the main page 
            
        }
    }
    
    // function to send email to the user with the verification code 
    function mail_var_code($mail) {

    }
?>