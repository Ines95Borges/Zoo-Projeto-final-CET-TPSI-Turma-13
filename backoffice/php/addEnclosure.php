<?php

if(isset($_POST['addEnclosure'])){

  require '../../php/includes/connection.php';

  # Get the filled fields
  $institutionName = $_POST['addInstitutionSelection'];
  $nameEnclosure = $_POST['nameEnclosure'];
  $enclosureType = $_POST['addEnclosureType'];

  # Get the ID of the institution
  $sql = "SELECT Institution_ID FROM institutions WHERE Name = '$institutionName';";
  $query = mysqli_query($conn, $sql);
  $fetch = mysqli_fetch_assoc($query);
  $institutionID = $fetch['Institution_ID'];

  # Insert data into database
  $sql = "INSERT INTO enclosures(Enclosure_ID, Institution_ID, Name, Type) VALUES (null, '$institutionID', '$nameEnclosure', '$enclosureType');";
  mysqli_query($conn, $sql) or die($sql);
  header("Location:../mainPage.php?enclosureSuccessfullyAdded&backoffice");
}else{
  header("Location:../mainPage.php?error=unsuccessfuladdition&backoffice");
}