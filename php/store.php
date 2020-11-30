<?php

require_once 'includes/connection.php';

$sql = "SELECT * FROM v_show_products";
$query = mysqli_query($conn, $sql);

while($fetch = mysqli_fetch_assoc($query)){

  // echo $fetch['Link'];
  // echo $fetch['NameProduct'];
  // echo $fetch['Price'];
  // exit();
  ?>
  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="<?php $fetch['Link']; ?>" alt="<?php $fetch['NameProduct']; ?>">
    <div class="card-body">
      <h5 class="card-title"><?php $fetch['NameProduct']; ?></h5>
      <a href="#" class="btn btn-primary">Comprar por <?php $fetch['Price']; ?></a>
    </div>
  </div>

<?php } 

mysqli_close($conn);
mysqli_free_result($fetch);
header("Location:../store.html?productsloaded");
exit();

?>