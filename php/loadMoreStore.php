<?php

require_once './includes/connection.php';

$id = intval($_POST['id']);
$sql = "SELECT * FROM v_show_products WHERE Product_ID > $id ORDER BY Product_ID LIMIT 3";
$counter_sql = "SELECT COUNT(Product_ID) FROM v_show_products WHERE Product_ID <= $id";
$query = mysqli_query($conn, $sql) or die($sql);
$query_counter = mysqli_query($conn, $sql) or die($sql);
$fetch_counter = mysqli_fetch_assoc($query_counter);
$counter = 0;
$output = "";
while($fetch = mysqli_fetch_assoc($query)){ 
  $output .= "
  <div class=\"card\" data-id=<?php echo (string)$counter; ?> style=\"width: 18rem; margin-bottom: 20px;\">
    <img class=\"card-img-top\" src=\"<?php echo {$fetch['Link']}; ?>\" alt=\"<?php echo {$fetch['NameProduct']}; ?>\">
    <div class=\"card-body\">
      <h5 class=\"card-title\"><?php echo {$fetch['NameProduct']}; ?></h5>
      <a class=\"btn btn-primary itemBtn\" id=\"<?php echo $counter++; ?>\">Comprar por <?php echo {$fetch['Price']}; ?>€</a>
    </div>
  </div>
  $id = {$fetch['Product_ID']} ";
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