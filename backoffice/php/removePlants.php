<?php

if(isset($_POST['submitPlants'])){
  require_once '../../php/includes/connection.php';

  # Get input fields
  if(!empty($_POST['removePlantsSelection'])){
    $nameOption = $_POST['removePlantsSelection'];
  }
  # Remove data from database
  $sql = "DELETE FROM plants WHERE Name = '$nameOption'";
  mysqli_query($conn, $sql);

  header("Location:../mainPage.php?successfullydeleted");
}else{
  header("Location:../mainPage.php?unsuccessfulevent");
}




