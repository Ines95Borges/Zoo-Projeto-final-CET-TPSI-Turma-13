<?php

require_once './includes/connection.php';

$id = intval($_POST['id']);
$sql = "SELECT * FROM v_show_plants WHERE Plant_ID > $id ORDER BY Plant_ID LIMIT 3";
$query = mysqli_query($conn, $sql) or die($sql);
$output = "";
while($fetch = mysqli_fetch_assoc($query)){ 
  $output .= "
  <div class=\"card\" style=\"width: 18rem; margin-bottom:20px;\">
    <img class=\"card-img-top\" src=\"{$fetch['FotoLink']}\" alt=\"{$fetch['PlantName']}\">
    <div class=\"card-body\" style=\"display: flex; align-items: flex-end; justify-content: space-between;\">
      <h5 class=\"card-title\">{$fetch['PlantName']}</h5>
      <a class=\"btn btn-primary itemBtn\">Detalhes</a>
    </div>
  </div>
  $id = {$fetch['Plant_ID']} ";
} 

$output .= "
  <div class=\"addMoreContainer\">
    <hr class=\"hrAddMore\">
    <div class=\"addMoreCenterItems\">
      <div class=\"addMoreButton\" data-id=$id>
        +
      </div>
      <h6>Show more 6</h6>
    </div>
  </div> ";

echo $output;