<?php

if(isset($_POST['addPlantDetail'])){

  require '../../php/includes/connection.php';

  # Get input fields
  $heightAnimal = $_POST['heightInputPlant'];
  $ageAnimal = $_POST['ageInputPlant'];

  # Insert data into database
  $sql = "INSERT INTO detailsplants(DetailPlant_ID, Height, Age) VALUES (null, $heightAnimal, $ageAnimal);";
  mysqli_query($conn, $sql) or die($sql);

  header("Location:../mainPage.php?successfullyAdded&backoffice");
}else{
  header("Location:../mainPage.php?unsuccessfulevent&backoffice");
}