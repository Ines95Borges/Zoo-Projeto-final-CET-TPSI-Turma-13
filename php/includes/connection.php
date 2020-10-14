<?php

$host = "127.0.0.1:3307";
$user = "root";
$pwd = "";
$dbName = "fbawtft_zoo";

$conn = mysqli_connect($host, $user, $pwd, $dbName);

if(!conn){

  die("Connection failed: ").mysqli_connect_error();

}