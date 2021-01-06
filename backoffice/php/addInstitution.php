<?php

if(isset($_POST['addInstitution'])){

  require_once '../../php/includes/connection.php';

  # Get the input fields
  $name = addslashes($_POST['institutionName']);
  $address = addslashes($_POST['institutionAddress']);
  $city = addslashes($_POST['institutionCity']);
  $state = addslashes($_POST['institutionState']);
  $country = addslashes($_POST['institutionCountry']);

  if(empty($name) || empty($address) || empty($city) || empty($state) || empty($country)){
    header("Location:../mainPage.php?error=institutionEmptyFields");
  }else{
    # Insert data into database
    $sql = "INSERT INTO institutions (Institution_ID, Name, Address, City, State, Country) VALUES (null, '$name', '$address','$city', '$state', '$country');";
    mysqli_query($conn, $sql) or die($sql);
  }
}else{
  header("Location:../mainPage.php?unsuccessfulevent");
}