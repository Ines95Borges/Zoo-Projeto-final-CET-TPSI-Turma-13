<?php

require_once 'includes/connection.php'; // Sets the connection to the database

$sql = "SELECT * FROM v_show_products"; // Select all lines from v_show_products view table
$query = mysqli_query($conn, $sql); // Executes the query

while($fetch = mysqli_fetch_assoc($query)){ // Gets the data from the query and creates a product item to show in the page?>
  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="<?php $fetch['Link']; ?>" alt="<?php $fetch['NameProduct']; ?>">
    <div class="card-body">
      <h5 class="card-title"><?php $fetch['NameProduct']; ?></h5>
      <a href="#" class="btn btn-primary">Comprar por <?php $fetch['Price']; ?></a>
    </div>
  </div>

<?php } 

mysqli_close($conn); // Closes the connection
mysqli_free_result($fetch); // Frees up space
header("Location:../store.html?productsloaded"); // Sends the user to the store page with a success message
exit();

?>