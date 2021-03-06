<?php require_once './keys.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="google-signin-client_id" content=<?php echo GOOGLE_CLIENT_ID; ?>>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plantas no Zoo</title>
  <link rel="icon" type="image/png" href="./img/favicon.png"/>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css" defer>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/popper.min.js"></script>
  <script src="./js/jquery.min.js"></script>
  <script src="./js/passwords.js" defer></script>
  <script src="./js/cartScript.js" defer></script>
  <script src="./js/addMoreButtonPlants.js" defer></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

  <a href="#main" class="skip-to-content">Saltar para conteúdo</a>
  
  <?php require './navbar.php'; ?>

  <nav aria-label="breadcrumb" class="breadcrumbNav">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Ver plantas</li>
    </ol>
  </nav>

  <main id="main">
    <div class="row-col d-md-flex mt-5">
      <ul class="nav flex-column sidebar">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./tickets.php">Tickets</a>
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

      <div class="container d-md-flex flex-wrap justify-content-around" id="showAnimalsPlants">

        <?php
        # Get the plants from database
        require_once './php/includes/connection.php';

        $sql = "SELECT * FROM v_show_plants ORDER BY Plant_ID LIMIT 6";
        $query = mysqli_query($conn, $sql);

        while($fetch = mysqli_fetch_assoc($query)){ ?>
          <div class="card" style="width: 18rem; margin-bottom:20px;">
            <img class="card-img-top" src="<?php echo $fetch['FotoLink']; ?>" alt="<?php echo $fetch['PlantName']; ?>">
            <div class="card-body" style="display: flex; align-items: flex-end; justify-content: space-between;">
              <h5 class="card-title" tabindex="0"><?php echo $fetch['PlantName']; ?></h5>
              <a class="btn btn-primary itemBtn">Detalhes</a>
            </div>
          </div>
          <?php $id = $fetch['Plant_ID']; ?>
        <?php } ?>

        <div class="addMoreContainer">
          <hr class="hrAddMore">
          <div class="addMoreCenterItems">
            <div class="addMoreButton" data-id=<?php echo $id; ?>  tabindex="0">
              +
            </div>
            <h6>Mostrar mais 3</h6>
          </div>
        </div>

      </div>
    </div>

    <?php require 'shoppingCartSidebar.php'; ?>
  </main>

  <?php require_once './footer.html'; ?>

</body>
</html>