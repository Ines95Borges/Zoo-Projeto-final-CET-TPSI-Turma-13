<?php

require_once './includes/connection.php';

$id = intval($_POST['id']);
$sql = "SELECT * FROM v_show_products WHERE Product_ID > $id ORDER BY Product_ID LIMIT 3";
$counter_sql = "SELECT COUNT(Product_ID) as total FROM v_show_products WHERE Product_ID <= $id";
$query = mysqli_query($conn, $sql) or die($sql);
$query_counter = mysqli_query($conn, $counter_sql) or die($counter_sql);
$fetch_counter = mysqli_fetch_assoc($query_counter);
$counter = $fetch_counter['total'] + 1;
$output = "";
while($fetch = mysqli_fetch_assoc($query)){ 
  $output .= "
  <div class=\"card\" data-id=\"{$fetch['Product_ID']}\" style=\"width: 18rem; margin-bottom: 20px;\">
    <img class=\"card-img-top\" src=\"{$fetch['Link']}\" alt=\"{$fetch['NameProduct']}\">
    <div class=\"card-body\">
      <h5 class=\"card-title\">{$fetch['NameProduct']}</h5>
      <a class=\"btn btn-primary itemBtn\" id=\"{$fetch['Product_ID']}\">Comprar por {$fetch['Price']}€</a>
    </div>
  </div>";
  $id = $fetch['Product_ID'] ;
  $counter++;
} 

$output .= "
  <div class=\"addMoreContainer\">
    <hr class=\"hrAddMore\">
    <div class=\"addMoreCenterItems\">
      <div class=\"addMoreButtonStore\" data-id=$id>
        +
      </div>
      <h6>Show more 6</h6>
    </div>
  </div> ";

echo $output; ?>
<script src="./js/cartScript.js" defer></script>