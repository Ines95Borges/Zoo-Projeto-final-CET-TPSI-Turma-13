<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loja</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="./js/jquery.min.js" defer></script>
  <script src="./js/cartScript.js" defer></script>
  <script src="./js/addMoreButtonStore.js" defer></script>
</head>
<body>

  <?php require 'navbar.php'; ?>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Loja</li>
    </ol>
  </nav>
  
  <main>
    <div class="row-col d-md-flex mt-5">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tickets</a>
        </li>
        <hr class="mx-3">
        <li class="nav-item">
          <h6 class="ml-3">Presentes</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Animais terrestres</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Plantas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Animais marinhos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Animais voadores</a>
        </li>
      </ul>

      <div class="container d-md-flex flex-wrap justify-content-around" id="products">

        <?php

        require_once './php/includes/connection.php';

        $sql = "SELECT * FROM v_show_products ORDER BY Product_ID limit 6";
        $query = mysqli_query($conn, $sql);
        $counter=1;

        while($fetch = mysqli_fetch_assoc($query)){
        ?>
          <div class="card" data-id=<?php echo (string)$counter; ?> style="width: 18rem; margin-bottom: 20px;">
            <img class="card-img-top" src="<?php echo $fetch['Link']; ?>" alt="<?php echo $fetch['NameProduct']; ?>">
            <div class="card-body">
              <h5 class="card-title"><?php echo $fetch['NameProduct']; ?></h5>
              <a class="btn btn-primary itemBtn" id="<?php echo $counter++; ?>">Comprar por <?php echo $fetch['Price']; ?>€</a>
            </div>
          </div>

        <?php $id = $fetch['Product_ID']; } 

        mysqli_close($conn);
        mysqli_free_result($query);

        ?>

        <div class="addMoreContainer">
          <hr>
          <div class="addMoreCenterItems">
            <div class="addMoreButton" data-id=<?php echo $id; ?> >
              +
            </div>
            <h6>Show more 6</h6>
          </div>
        </div>

      </div>
    </div>

    <?php require 'shoppingCartSidebar.php'; ?>
  </main>

  <?php require_once './footer.html'; ?>

</body>
</html>