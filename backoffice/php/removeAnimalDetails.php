<?php

if(isset($_POST['removeAnimalDetail'])){
  require_once '../../php/includes/connection.php';

  if(!empty($_POST['removeAnimalDetailSelection'])){
    $nameOption = $_POST['removeAnimalDetailSelection'];
  }
  $sql = "DELETE FROM detailsanimals WHERE Height = $nameOption";
  mysqli_query($conn, $sql) or die($sql); 

  header("Location:../mainPage.php?successfullydeleted");
}else{
  header("Location:../mainPage.php?unsuccessfulevent");
}