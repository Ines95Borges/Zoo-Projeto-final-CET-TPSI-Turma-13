<?php

require_once './includes/connection.php'; // Sets the connection to the database

$id = intval($_POST['id']); // Get the id value
$sql = "SELECT * FROM v_show_products WHERE Product_ID > $id ORDER BY Product_ID LIMIT 3";// Selects all the fields which Product_ID is bigger than the id so that there is no repetition and loads only three fields
$query = mysqli_query($conn, $sql) or die($sql); // Executes the query
$output = "";
while($fetch = mysqli_fetch_assoc($query)){ // For each animal shows a card with its image and name and a button pointing to the details of the animal
  $output .= "
  <div class=\"card\" data-id={$fetch['Product_ID']} style=\"width: 18rem; margin-bottom: 20px;\">
    <img class=\"card-img-top\" src=\"{$fetch['Link']}\" alt=\"{$fetch['NameProduct']}\">
    <div class=\"card-body\">
      <h5 class=\"card-title\" tabindex=\"0\">{$fetch['NameProduct']}</h5>
      <a class=\"btn btn-primary itemBtn\" id=\"{$fetch['Product_ID']}\" tabindex=\"0\">Comprar por {$fetch['Price']}€</a>
    </div>
  </div>";
  $id = $fetch['Product_ID']; // Sets the id to the animal id
} 

// Creates add more button
$output .= "
  <div class=\"addMoreContainer\">
    <hr class=\"hrAddMore\">
    <div class=\"addMoreCenterItems\">
      <div class=\"addMoreButtonStore\" data-id=$id tabindex=\"0\">
        +
      </div>
      <h6>Mostrar mais 3</h6>
    </div>
  </div> ";

echo $output; ?>
<script src="./js/addMoreButtonStore.js" defer></script> <!-- This is to load the addmore button store script again so that the button is clickable and focusable -->