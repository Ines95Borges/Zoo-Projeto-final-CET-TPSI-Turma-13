<?php

if(isset($_POST['submitAnimals'])){
  require_once '../../php/includes/connection.php';

  if(!empty($_POST['removeAnimalsSelection'])){
    $nameOption = $_POST['removeAnimalsSelection'];
  }
  $sql = "DELETE FROM animals WHERE Name = '$nameOption'";
  mysqli_query($conn, $sql);

  header("Location:../mainPage.php?successfullydeleted");
}else{
  header("Location:../mainPage.php?unsuccessfulevent");
}