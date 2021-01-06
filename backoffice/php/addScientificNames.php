<?php

if(isset($_POST['addScientificName'])){

  # Get input fields
  require_once '../../php/includes/connection.php';
  $commonName = $_POST['scientificNameCommonNameAnimal'];
  $kingdom = $_POST['scientificNameKingdomAnimal'];
  $phylum = $_POST['scientificNamePhylumAnimal'];
  $class = $_POST['scientificNameClassAnimal'];
  $order = $_POST['scientificNameOrderAnimal'];
  $family = $_POST['scientificNameFamilyAnimal'];
  $genus = $_POST['scientificNameGenusAnimal'];
  $species = $_POST['scientificNameSpeciesAnimal'];

  if(empty($commonName) || empty($kingdom) || empty($phylum) || empty($class) || empty($order) || empty($family) || empty($genus) || empty($species)){
    header("Location:../mainPage.php?error=scientificNameEmptyFields");
  }else{
    # Insert data into database
    $sql = "INSERT INTO scientificnames(ScientificName_ID, CommonName, Kingdom, Phylum, Class, OrderSci, Family, Genus, Species) VALUES (null, '$commonName','$kingdom', '$phylum', '$class', '$order', '$family', '$genus', '$species');";
    mysqli_query($conn, $sql) or die($sql);

    header("Location:../mainPage.php?successfuladdition");
  }

}else{
  header("Location:../mainPage.php?unsuccessfulevent");
}