<?php

require_once './includes/connection.php';

$id = intval($_POST['id']);
$sql = "SELECT * FROM v_show_animals WHERE Animal_ID > $id ORDER BY Animal_ID LIMIT 3";
$query = mysqli_query($conn, $sql) or die($sql);
$output = "";
while($fetch = mysqli_fetch_assoc($query)){ 
  $output .= "
  <div class=\"card\" style=\"width: 18rem; margin-bottom:20px;\">
    <img class=\"card-img-top\" src=\"{$fetch['FotoLink']}\" alt=\"{$fetch['Name']}\">
    <div class=\"card-body\" style=\"display: flex; align-items: flex-end; justify-content: space-between;\">
      <h5 class=\"card-title\" tabindex=\"0\">{$fetch['Name']}</h5>
      <a class=\"btn btn-primary itemBtn\" tabindex=\"0\">Detalhes</a>
    </div>
  </div>";
  $id = $fetch['Animal_ID'];
} 

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
<script src="./js/addMoreButtonAnimals.js" defer></script>