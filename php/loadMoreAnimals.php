<?php

require_once './includes/connection.php';

$id = intval($_POST['id']);
$sql = "SELECT * FROM v_show_animals WHERE Animal_ID > $id ORDER BY Animal_ID LIMIT 6";
$query = mysqli_query($conn, $sql) or die($sql);
$output = "";
while($fetch = mysqli_fetch_assoc($query)){ 
  $output .= "
  <div class=\"card\" style=\"width: 18rem; margin-bottom:20px;\">
    <img class=\"card-img-top\" src=\"{$fetch['FotoLink']}\" alt=\"{$fetch['Name']}\">
    <div class=\"card-body\" style=\"display: flex; align-items: flex-end; justify-content: space-between;\">
      <h5 class=\"card-title\">{$fetch['Name']}</h5>
      <a class=\"btn btn-primary itemBtn\">Detalhes</a>
    </div>
  </div>
  $id = {$fetch['Animal_ID']} ";
} 

$output .= "
  <div class=\"addMoreContainer\">
    <hr>
    <div class=\"addMoreCenterItems\">
      <div class=\"addMoreButton\" data-id=$id>
        +
      </div>
      <h6>Show more 6</h6>
    </div>
  </div> ";

echo $output;