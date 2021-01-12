<?php

if(isset($_POST['removeAnimalDetail'])){
  require_once '../../php/includes/connection.php';

  # Get input fields
  if(!empty($_POST['removeAnimalDetailSelection'])){
    $nameOption = $_POST['removeAnimalDetailSelection'];
  }
  # Remove animal detal from database
  $sql = "DELETE FROM detailsanimals WHERE Height = $nameOption";
  mysqli_query($conn, $sql) or die($sql); 

  header("Location:../mainPage.php?successfullydeleted&backoffice");
}else{
  header("Location:../mainPage.php?unsuccessfulevent&backoffice");
}