<?php

if(isset($_POST['removeEnclosure'])){
  require_once '../../php/includes/connection.php';

  if(!empty($_POST['removeEnclosureSelection'])){
    $nameOption = $_POST['removeEnclosureSelection'];
  }
  $sql = "DELETE FROM enclosures WHERE Name = '$nameOption'";
  mysqli_query($conn, $sql);

  header("Location:../mainPage.php?successfullydeleted");
}else{
  header("Location:../mainPage.php?unsuccessfulevent");
}