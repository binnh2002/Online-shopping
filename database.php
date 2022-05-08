<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "shop";

    // connect to database
    $connection = mysqli_connect($servername, $username, $password, $db);

    if(!$connection) {
        die("connection failed!" . mysqli_connect_error());
    }
    $userActive;
?>