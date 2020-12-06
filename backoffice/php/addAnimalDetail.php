<?php

if(isset($_POST['addAnimalDetail'])){

  require '../../php/includes/connection.php';

  $heightAnimal = $_POST['heightInputAnimal'];
  $weightAnimal = $_POST['weightInputAnimal'];
  $ageAnimal = $_POST['ageInputAnimal'];

  $sql = "INSERT INTO detailsanimals(DetailAnimal_ID, Height, Weight, Age) VALUES (null, $heightAnimal, $weightAnimal, $ageAnimal);";
  mysqli_query($conn, $sql) or die($sql);

  header("Location:../mainPage.php?successfullyAdded");
}else{
  header("Location:../mainPage.php?unsuccessfulevent");
}