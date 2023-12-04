<?php

#credentials//
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flower_store";
$port = 3307;

//connection//
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

//if it doesn't connect//
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>