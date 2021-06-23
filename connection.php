<?php
    $dbhost = "localhost";
    $dbuser = "mysqluser";
    $dbpass = "secret";
    $db = "proyecto_final";
    $con = mysqli_connect($dbhost, $dbuser, $dbpass , $db) or die($con);
?>