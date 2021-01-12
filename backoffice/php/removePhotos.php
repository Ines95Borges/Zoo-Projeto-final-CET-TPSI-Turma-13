<?php

if(isset($_POST['removePhoto'])){
  require_once '../../php/includes/connection.php';

  # Get input fields
  if(!empty($_POST['removePhotoSelection'])){
    $nameOption = $_POST['removePhotoSelection'];
  }
  # Remove data from database
  $sql = "DELETE FROM fotos WHERE Name = '$nameOption'";
  mysqli_query($conn, $sql);

  header("Location:../mainPage.php?successfullydeleted&backoffice");
}else{
  header("Location:../mainPage.php?unsuccessfulevent&backoffice");
}