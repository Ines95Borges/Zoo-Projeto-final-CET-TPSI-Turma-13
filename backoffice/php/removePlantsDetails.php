<?php

if(isset($_POST['removePlantDetail'])){
  require_once '../../php/includes/connection.php';

  if(!empty($_POST['removePlantDetailSelection'])){
    $nameOption = $_POST['removePlantDetailSelection'];
  }
  $sql = "DELETE FROM detailsplants WHERE Height = $nameOption";
  mysqli_query($conn, $sql) or die($sql); 

  header("Location:../mainPage.php?successfullydeleted");
}else{
  header("Location:../mainPage.php?unsuccessfulevent");
}