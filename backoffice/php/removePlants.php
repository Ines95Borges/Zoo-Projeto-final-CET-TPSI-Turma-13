<?php

if(isset($_POST['submitPlants'])){
  require_once '../../php/includes/connection.php';

  if(!empty($_POST['removePlantsSelection'])){
    $nameOption = $_POST['removePlantsSelection'];
  }
  $sql = "DELETE FROM plants WHERE Name = '$nameOption'";
  mysqli_query($conn, $sql);

  header("Location:../mainPage.php?successfullydeleted");
}else{
  header("Location:../mainPage.php?unsuccessfulevent");
}




