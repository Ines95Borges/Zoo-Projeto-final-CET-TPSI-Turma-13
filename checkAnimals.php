<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animals</title>
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

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Ver animais</li>
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
          <h6 class="ml-3">Categorias</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Mamíferos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Répteis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Aves</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Amfíbeos</a>
        </li>
      </ul>

      <div class="container d-md-flex flex-wrap justify-content-around">

        <?php

        require_once './php/includes/connection.php';

        $sql = "SELECT * FROM v_show_animals";
        $query = mysqli_query($conn, $sql);
        $num_rows = mysqli_num_rows($query);
        $countAnimalsDisplayed = 0;

        while($fetch = mysqli_fetch_assoc($query)){ 
          $countAnimalsDisplayed++;?>
          <div class="card" style="width: 18rem; margin-bottom:20px;">
            <img class="card-img-top" src="<?php echo $fetch['FotoLink']; ?>" alt="<?php echo $fetch['Name']; ?>">
            <div class="card-body" style="display: flex; align-items: flex-end; justify-content: space-between;">
              <h5 class="card-title"><?php echo $fetch['Name']; ?></h5>
              <a class="btn btn-primary itemBtn">Detalhes</a>
            </div>
          </div>
        <?php if($countAnimalsDisplayed % 6 == 0){ ?>
          <div class="addMoreContainer">
            <hr>
            <div class="addMoreCenterItems">
              <div class="addMoreButton">
                +
              </div>
              <h6>Show more 6</h6>
            </div>
          </div>
        <?php break; } } ?>

      </div>
    </div>

    <?php require './shoppingCartSidebar.php'; ?>
  </main>

	<?php require_once './footer.html'; ?>

</body>
</html>