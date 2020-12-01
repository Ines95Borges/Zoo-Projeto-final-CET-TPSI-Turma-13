<?php

if(isset($_POST['removeInstitution'])){
  require_once '../../php/includes/connection.php';

  if(!empty($_POST['removeInstitutionSelection'])){
    $nameOption = $_POST['removeInstitutionSelection'];
  }
  $sql = "DELETE FROM institutions WHERE Name = '$nameOption'";
  mysqli_query($conn, $sql);

  header("Location:../mainPage.php?successfullydeleted");
}else{
  header("Location:../mainPage.php?unsuccessfulevent");
}