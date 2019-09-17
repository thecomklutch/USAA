<?php
    include 'config.php';
    $id = $_POST['idofmessage'];
    // alter the message state
    $sql = "UPDATE `Notifications` SET `status` = 'read' WHERE `Notifications`.`id` = '$id'";
    mysqli_query($conn, $sql);
?>