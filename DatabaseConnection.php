<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "webtech2";

// create connection
$con = mysqli_connect($serverName, $userName, $password, $databaseName);

if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
echo"Connected to database"


?>
