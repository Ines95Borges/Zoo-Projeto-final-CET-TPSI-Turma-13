<?php

if(isset($_POST['removeEnclosure'])){
  require_once '../../php/includes/connection.php';

  # Get input fields
  if(!empty($_POST['removeEnclosureSelection'])){
    $nameOption = $_POST['removeEnclosureSelection'];
  }
  # Delete data from database
  $sql = "DELETE FROM enclosures WHERE Name = '$nameOption'";
  mysqli_query($conn, $sql);

  header("Location:../mainPage.php?successfullydeleted");
}else{
  header("Location:../mainPage.php?unsuccessfulevent");
}