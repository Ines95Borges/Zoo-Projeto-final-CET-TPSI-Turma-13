<?php

include './googleSignInConfig.php';

if(isset($_COOKIE["id"])){ // Check if the cookies exist
  setcookie('id', '', time() - 60*60*24*30, '/'); // Delets cookie
  setcookie('sess', '', time() - 60*60*24*30, '/'); // Delets cookie
  header("Location:./index.php?logoutsuccessful"); // Sends user to homepage with a successful message
  exit();
}

$gClient->revokeToken();

if(!isset($_SESSION)){
  session_start();
}

session_destroy(); // Destroys the session
header("Location:./index.php"); // Sends the user to homepage