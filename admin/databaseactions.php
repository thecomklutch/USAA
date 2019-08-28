<?php 
    // for handling the database actions
    // including the config.php
    include '../USAAstudent/config.php';

    // get the data from databseactions.js 
    $actiontype = $_POST['fixedaction']; //data to be deleted
    $datafilt = $_POST['fixedaction2']; //data filter 

    //logic of deletion 
    if ($datafilt == null) {
        if ($actiontype == 'deleteallposts') {
            // call a function 
            deletepostsandsuggestions();
        } elseif ($actiontype == 'deleteallmsgs') {
            // call a fucntion
            deleteadminmessages();
        } else {
            // call a function 
            deleteeventsandannouncements();
        }

    } else {
        if ($actiontype == 'deleteallposts') {
            // call a function 
            deletepostsandsuggestionsfilter($datafilt);
        } elseif ($actiontype == 'deleteallmsgs') {
            // call a fucntion
            deleteadminmessagesfilter($datafilt);
        } else {
            // call a function 
            deleteeventsandannouncementsfilter($datafilt);
        }

    }

    // delete all post and suggestions 
    function deletepostsandsuggestions() {
        global $conn;
        $sql = "DELETE * FROM `posts`";
        $exec = mysqli_query($conn, $slq);
        if ($exec == true) {echo "Operations successful";} else {echo "An error occured ";}
    }

    // delet all events and announcements
    
    function deleteeventsandannouncements() {
        global $conn;
        $sql = "DELETE * FROM `events`";
        $exec = mysqli_query($conn, $slq);
        if ($exec == true) {echo "Operations successful";} else {echo "An error occured ";}
    }

    // deleting all admin messages
    function deleteadminmessages() {
        global $conn;
        $sql = "DELETE * FROM `Notifications` WHERE receiver='Admin'";
        $exec = mysqli_query($conn, $sql);
        if ($exec == true) {echo "Operations successful";} else {echo "An error occured ";}
    }

    // using the filters
    // delete all post and suggestions 
    function deletepostsandsuggestionsfilter($x) {
        global $conn;
        $sql = "DELETE * FROM `posts` WHERE created_at='$x*'";
        $exec = mysqli_query($conn, $slq);
        if ($exec == true) {echo "Operations successful";} else {echo "An error occured ";}
    }

    // delet all events and announcements
    
    function deleteeventsandannouncementsfilter($x) {
        global $conn;
        $sql = "DELETE * FROM `events` WHERE created_at='$x*'";
        $exec = mysqli_query($conn, $slq);
        if ($exec == true) {echo "Operations successful";} else {echo "An error occured ";}
    }

    // deleting all admin messages
    function deleteadminmessagesfilter($x) {
        global $conn;
        $sql = "DELETE * FROM `Notifications` WHERE receiver='Admin' AND created_at='$x*'";
        $exec = mysqli_query($conn, $sql);
        if ($exec == true) {echo "Operations successful";} else {echo "An error occured ";}
    }


?>