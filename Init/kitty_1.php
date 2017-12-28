<?php
$connect_db = mysqli_connect("localhost","Admin_DCentMASS","admin","dcentmass");

    if(mysqli_connect_errno()) {
        echo mysqli_connect_errno();
        exit();
    } else {
        echo "<h1>Successful Connection.</h1>";
    }



?>
