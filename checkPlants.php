<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plantas no Zoo</title>
  <link rel="icon" type="image/png" href="./img/favicon.png"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css" defer>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/popper.min.js"></script>
  <script src="./js/jquery.min.js"></script>
  <script src="./js/passwords.js" defer></script>
  <script src="./js/cartScript.js" defer></script>
</head>
<body>
  
  <?php require './navbar.php'; ?>

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
          <h6 class="ml-3">Categorias</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Carnívoras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Aquáticas</a>
        </li>
      </ul>

      <div class="container d-md-flex justify-content-around">

        <?php

        require_once './php/includes/connection.php';

        $sql = "SELECT * FROM v_show_plants";
        $query = mysqli_query($conn, $sql);

        while($fetch = mysqli_fetch_assoc($query)){ ?>
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo $fetch['FotoLink']; ?>" alt="<?php echo $fetch['PlantName']; ?>">
            <div class="card-body">
              <h5 class="card-title"><?php echo $fetch['PlantName']; ?></h5>
              <a class="btn btn-primary itemBtn">Detalhes</a>
            </div>
          </div>
        <?php } ?>

      </div>
    </div>

    <?php require 'shoppingCartSidebar.php'; ?>
  </main>

</body>
</html>