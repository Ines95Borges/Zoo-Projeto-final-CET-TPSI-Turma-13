<?php require_once './keys.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="google-signin-client_id" content=<?php echo GOOGLE_CLIENT_ID; ?>>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tickets</title>
  <link rel="icon" type="image/png" href="./img/favicon.png"/>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css" defer>
  <link rel="stylesheet" href="./css/payment.css" defer>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/popper.min.js"></script>
  <script src="./js/jquery.min.js"></script>
  <script src="./js/passwords.js" defer></script>
  <script src="./js/cartScript.js" defer></script>
  <script src="./js/charge.js" defer></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
  
  <?php require "./navbar.php" ?>

  <nav aria-label="breadcrumb" class="breadcrumbNav">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
      <li class="breadcrumb-item"><a href="./tickets.php">Tickets</a></li>
      <li class="breadcrumb-item active" aria-current="page">Payment Check</li>
    </ol>
  </nav>

  <main id="paymentSuccess">
    <div class="container my-5">
      <h1 tabindex="0">Fez a compra com sucesso</h1>

      <h3 tabindex="0">Viste as nossas páginas e veja os nossos produtos na <a href="./store.php">Loja</a>.</h3>

      <div class="row d-flex justify-content-between">
        
        <a href="./tickets.php">Comprar mais tickets</a>
      </div>
    </div>

    <?php require 'shoppingCartSidebar.php'; ?>
  </main>

  <?php require './footer.html'; ?>

</body>
</html>