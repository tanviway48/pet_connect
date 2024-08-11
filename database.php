<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "petconnect01";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}
//    if($conn){
//     echo"connection sucessful";
//    }
//    else{
//     die(mysqli_error($conn));
//    }

?>