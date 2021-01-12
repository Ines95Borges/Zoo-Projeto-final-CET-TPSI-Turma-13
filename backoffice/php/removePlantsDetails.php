<?php

if(isset($_POST['removePlantDetail'])){
  require_once '../../php/includes/connection.php';

  # Get input fields
  if(!empty($_POST['removePlantDetailSelection'])){
    $nameOption = $_POST['removePlantDetailSelection'];
  }
  # Remove data from database
  $sql = "DELETE FROM detailsplants WHERE Height = $nameOption";
  mysqli_query($conn, $sql) or die($sql); 

  header("Location:../mainPage.php?successfullydeleted&backoffice");
}else{
  header("Location:../mainPage.php?unsuccessfulevent&backoffice");
}