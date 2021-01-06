<?php

require_once './includes/connection.php'; // Sets the connection to the database

$id = intval($_POST['id']); // Get the id value
$sql = "SELECT * FROM v_show_animals WHERE Animal_ID > $id ORDER BY Animal_ID LIMIT 3"; // Selects all the fields which Animal_ID is bigger than the id so that there is no repetition and loads only three fields
$query = mysqli_query($conn, $sql) or die($sql); // Executes the query
$output = "";
while($fetch = mysqli_fetch_assoc($query)){ // For each animal shows a card with its image and name and a button pointing to the details of the animal
  $output .= "
  <div class=\"card\" style=\"width: 18rem; margin-bottom:20px;\">
    <img class=\"card-img-top\" src=\"{$fetch['FotoLink']}\" alt=\"{$fetch['Name']}\">
    <div class=\"card-body\" style=\"display: flex; align-items: flex-end; justify-content: space-between;\">
      <h5 class=\"card-title\" tabindex=\"0\">{$fetch['Name']}</h5>
      <a class=\"btn btn-primary itemBtn\" tabindex=\"0\">Detalhes</a>
    </div>
  </div>";
  $id = $fetch['Animal_ID']; // Sets the id to the animal id
} 

// Creates add more button
$output .= "
  <div class=\"addMoreContainer\">
    <hr class=\"hrAddMore\">
    <div class=\"addMoreCenterItems\">
      <div class=\"addMoreButton\" data-id=$id  tabindex=\"0\">
        +
      </div>
      <h6>Mostrar mais 3</h6>
    </div>
  </div> ";

echo $output; ?>
<script src="./js/addMoreButtonAnimals.js" defer></script> <!-- This is to load the addmore button animal script again so that the button is clickable and focusable -->