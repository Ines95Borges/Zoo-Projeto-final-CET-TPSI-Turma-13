<?php require_once './keys.php'; ?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="google-signin-client_id" content=<?php echo GOOGLE_CLIENT_ID; ?>>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loja</title>
  <link rel="icon" type="image/png" href="./img/favicon.png"/>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="./js/jquery.min.js" defer></script>
  <script src="./js/cartScript.js" defer></script>
  <script src="./js/addMoreButtonStore.js" defer></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

  <a href="#main" class="skip-to-content">Saltar para conteúdo</a>

  <?php require 'navbar.php'; ?>

  <nav aria-label="breadcrumb" class="breadcrumbNav">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./index.php" aria-label="home">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page" aria-label="loja">Loja</li>
    </ol>
  </nav>
  
  <main id="main">
    <div class="row-col d-md-flex mt-5">
      <ul class="nav flex-column sidebar">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" aria-label="home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./tickets.php" aria-label="comprar tickets">Tickets</a>
        </li>
        <hr class="mx-3">
        <li class="nav-item">
          <h6 class="ml-3" tabindex="0">Presentes</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" aria-label="ver produtos animais terrestres">Animais terrestres</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" aria-label="ver produtos plantas">Plantas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" aria-label="ver produtos animais marinhos">Animais marinhos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" aria-label="ver produtos animais voadores">Animais voadores</a>
        </li>
      </ul>

      <div class="container d-md-flex flex-wrap justify-content-around" id="products">

        <?php

        require_once './php/includes/connection.php';

        $sql = "SELECT * FROM v_show_products ORDER BY Product_ID limit 6";
        $query = mysqli_query($conn, $sql);

        while($fetch = mysqli_fetch_assoc($query)){
        ?>
          <div class="card" data-id=<?php echo $fetch['Product_ID']; ?> style="width: 18rem; margin-bottom: 20px;">
            <img class="card-img-top" src="<?php echo $fetch['Link']; ?>" alt="<?php echo $fetch['NameProduct']; ?>">
            <div class="card-body">
              <h5 class="card-title" tabindex="0"><?php echo $fetch['NameProduct']; ?></h5>
              <a class="btn btn-primary itemBtn" id="<?php echo $fetch['Product_ID']; ?>" tabindex="0">Comprar por <?php echo $fetch['Price']; ?>€</a>
            </div>
          </div>

        <?php $id = $fetch['Product_ID']; } 

        mysqli_close($conn);
        mysqli_free_result($query);

        ?>

        <div class="addMoreContainer">
          <hr class="hrAddMore">
          <div class="addMoreCenterItems">
            <div class="addMoreButtonStore" data-id=<?php echo $id; ?> tabindex="0">
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