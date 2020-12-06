<?php

if(isset($_POST['removePhoto'])){
  require_once '../../php/includes/connection.php';

  if(!empty($_POST['removePhotoSelection'])){
    $nameOption = $_POST['removePhotoSelection'];
  }
  $sql = "DELETE FROM fotos WHERE Name = '$nameOption'";
  mysqli_query($conn, $sql);

  header("Location:../mainPage.php?successfullydeleted");
}else{
  header("Location:../mainPage.php?unsuccessfulevent");
}