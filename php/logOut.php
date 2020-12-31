<?php

if(isset($_COOKIE["id"])){
  setcookie('id', '', time() - 60*60*24*30, '/');
  setcookie('sess', '', time() - 60*60*24*30, '/');
  header("Location:../index.php?logoutsuccessful");
  exit();
}

if(!isset($_SESSION)){
  session_start();
}

session_destroy();
header("Location:../index.php");