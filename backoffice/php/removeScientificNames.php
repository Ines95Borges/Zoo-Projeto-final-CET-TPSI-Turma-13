<?php

if(isset($_POST['removeScientificName'])){
  require_once '../../php/includes/connection.php';

  if(!empty($_POST['removeScientificNameSelection'])){
    $nameOption = $_POST['removeScientificNameSelection'];
  }
  $sql = "DELETE FROM scientificnames WHERE CommonName = '$nameOption'";
  mysqli_query($conn, $sql) or die($sql);

  header("Location:../mainPage.php?scientificnamesuccessfullydeleted");
}else{
  header("Location:../mainPage.php?unsuccessfulevent");
}