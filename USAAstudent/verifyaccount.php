<?php 
    include 'config.php';
    $errors = array();

    if (isset($_POST['verify'])) {

        $code = $_POST['code'];
        $email = $_SESSION['user']['email'];
        $passportnumber = $_SESSION['user']['passport_no'];
        if (isset($_POST['verify'])) {
            $query = "SELECT * FROM `users` WHERE email='$email' AND passport_no='$passportnumber'";
            $coderesults = mysqli_query($conn, $query);
            $codeverification = mysqli_fetch_assoc($coderesults);

            if ($codeverification['code1'] != $code) {
                array_push($errors, "Wrong verification code, Please try again");
            } else {
                mysqli_query($conn, "UPDATE `users` SET `status` = 'Pending' WHERE `users`.`passport_no` = '$passportnumber'");
                mysqli_query($conn, "UPDATE `users` SET `code1` = '' WHERE `users`.`passport_no` = '$passportnumber'");?>
                <script>
                    document.getElementById('msg').style.display='block';
                    document.getElementById('verificationform').style.display='none';
                </script>
                <?php 
                sleep(10);
                header('location: ../login.php');
                
            }

        }
    }


?>