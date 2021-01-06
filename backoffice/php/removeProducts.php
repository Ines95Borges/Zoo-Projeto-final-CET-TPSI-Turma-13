<?php

if(isset($_POST['removeProducts'])){
  require_once '../../php/includes/connection.php';

  # Get input fields
  if(!empty($_POST['removeProductsSelection'])){
    $nameOption = $_POST['removeProductsSelection'];
  }
  # Remove data from database
  $sql = "DELETE FROM products WHERE Name = '$nameOption'";
  mysqli_query($conn, $sql);

  header("Location:../mainPage.php?successfullydeleted");
}else{
  header("Location:../mainPage.php?unsuccessfulevent");
}