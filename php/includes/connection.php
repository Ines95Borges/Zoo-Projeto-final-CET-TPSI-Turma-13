<?php
// Connection to the database
$host = "127.0.0.1:3307";
$user = "root";
$pwd = "";
$dbName = "fbawtft_zoo";

$conn = mysqli_connect($host, $user, $pwd, $dbName); // Connects to the database

if(!$conn){ // In case the connection fails shows a error message and stops running the page
  die("Connection failed: ").mysqli_connect_error();
}