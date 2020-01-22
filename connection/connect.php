<?php

//main connection file for both admin & front end
$servername = "localhost"; //server
$username = "id12115060_online_food"; //username
$password = "online_food"; //password
$dbname = "id12115060_online_food";  //database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting 
// Check connection
if (!$db) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}

?>