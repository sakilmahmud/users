<?php
session_start();
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "arkhan";



$conn = mysqli_connect($server_name, $user_name, $password, $database_name);
if ($conn) {
    // echo "connected" ; 
}
?>