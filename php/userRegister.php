<?php

if(isset($_POST['register'])){

  require 'includes/connection.php';

  $name = $_POST['firstName']." ".$_POST['lastName'];
  $username = $_POST['username'];
  $city = $_POST['city'];
  $district = $_POST['district'];
  $zipCode = $_POST['zipCode'];
  $pwd = md5($_POST['pwd']);
  $dateReg = date("Y-m-d H:i:s");

  $sql = "SELECT * FROM clients WHERE Name=$username";
  $query = mysqli_query($conn, $sql);
  $num_rows = mysqli_num_rows($query);

  if($num_rows == 0){
    $sql = "CALL p_register_users('$name', $dateReg, '$city', '$district', '$zipCode', '$username', '$pwd')";
    mysqli_query($conn, $sql);
    $path = "registrationsuccessful";
  }else{
    $path = "registrationunsuccessful";
  }

  mysqli_close();
  header("Location:../index.html?$path");
}

?>