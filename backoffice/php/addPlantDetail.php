<?php

if(isset($_POST['addPlantDetail'])){

  require '../../php/includes/connection.php';

  $heightAnimal = $_POST['heightInputPlant'];
  $ageAnimal = $_POST['ageInputPlant'];

  $sql = "INSERT INTO detailsplants(DetailPlant_ID, Height, Age) VALUES (null, $heightAnimal, $ageAnimal);";
  mysqli_query($conn, $sql) or die($sql);

  header("Location:../mainPage.php?successfullyAdded");
}else{
  header("Location:../mainPage.php?unsuccessfulevent");
}