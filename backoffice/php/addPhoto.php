<?php

if(isset($_POST['addPhoto'])){

  require '../../php/includes/connection.php';

  # Get the input fields
  $linkPhoto = $_POST['linkInputPhoto'];
  $namePhoto = $_POST['nameInputPhoto'];

  # Add data to database
  $sql = "INSERT INTO fotos(Foto_ID, Name, Link) VALUES (null, '$namePhoto', '$linkPhoto');";
  mysqli_query($conn, $sql);

  header("Location:../mainPage.php?successfullyAdded&backoffice");
}else{
  header("Location:../mainPage.php?unsuccessfulevent&backoffice");
}