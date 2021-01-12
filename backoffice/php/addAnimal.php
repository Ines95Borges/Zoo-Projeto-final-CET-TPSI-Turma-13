<?php

if(isset($_POST['addAnimal'])){

  require '../../php/includes/connection.php';

  # Dealing with enclosure data
  if(!empty($_POST['addEnclosureSelection'])){
    $enclosureName = $_POST['addEnclosureSelection'];
  }
  $sql = "SELECT Enclosure_ID FROM enclosures WHERE Name = '$enclosureName';";
  $query = mysqli_query($conn, $sql); # Execution of the query
  $fetch = mysqli_fetch_assoc($query);
  $enclosureID = $fetch['Enclosure_ID']; # Get enclosure ID

  # Dealing with scientific name data
  if(!empty($_POST['addScientificNameSelection'])){
    $scientificNameCommonName = $_POST['addScientificNameSelection'];
  }
  $sql = "SELECT ScientificName_ID FROM scientificnames WHERE CommonName = '$scientificNameCommonName';";
  $query = mysqli_query($conn, $sql);
  $fetch = mysqli_fetch_assoc($query);
  $scientificNameID = $fetch['ScientificName_ID'];

  # Dealing with photo data
  if(!empty($_POST['addPhotoSelection'])){
    $fotoName = addslashes($_POST['addPhotoSelection']);
  }
  $sql = "SELECT Foto_ID FROM fotos WHERE Name = '$fotoName';";
  $query = mysqli_query($conn, $sql) or die($sql);
  $fetch = mysqli_fetch_assoc($query);
  // echo $fetch; exit();
  $fotoID = $fetch['Foto_ID'];
  // echo $fotoID; exit();

  # Dealing with animal detail data
  if(!empty($_POST['addAnimalDetailSelection'])){
    $height = $_POST['addAnimalDetailSelection'];
  }
  $sql = "SELECT Height FROM detailsanimals WHERE Height = '$height';";
  $query = mysqli_query($conn, $sql);
  $fetch = mysqli_fetch_assoc($query);
  $animalDetailID = $fetch['DetailAnimal_ID'];

  # Other animal data
  $nameAnimal = $_POST['nameAnimalInput'];
  $dateBirthAnimal = $_POST['dateBirthAnimal'];
  $dateArrivalAnimal = $_POST['dateArrivalAnimal'];
  $dateDeathAnimal = $_POST['dateDeathAnimal'];

  # Deal with gender option selection
  if(!empty($_POST['addGenderSelection'])){
    $gender = $_POST['addGenderSelection'];
  }

  # CageNumber input
  $cageNumber = $_POST['cageNumberAnimal'];

  # Insert data into database
  $sql = "INSERT INTO animals (Animal_ID, Enclosure_ID, ScientificName_ID, Foto_ID, DetailAnimal_ID, Name, Birthdate, Arrivaldate, Deathdate, Gender, CageNumber) VALUES (null, $enclosureID, $scientificNameID, $fotoID, $animalDetailID, '$nameAnimal', '$dateBirthAnimal', '$dateArrivalAnimal', '$dateDeathAnimal', '$gender', $cageNumber);";
  mysqli_query($conn, $sql) or die($sql);

  header("Location:../mainPage.php?successfullyadded&backoffice")

}else{
  header("Location:../mainPage.php?unsuccessfulevent&backoffice");
}