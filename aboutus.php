<?php require_once './keys.php'; ?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-signin-client_id" content=<?php echo GOOGLE_CLIENT_ID; ?>>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <title>Sobre nós</title>
  <link rel="icon" type="image/png" href="./img/favicon.png"/>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css" defer>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="./js/jquery.min.js"></script>
  <script src="./js/passwords.js"></script>
  <script src="./js/cartScript.js" defer></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
  
  <?php require './navbar.php'; ?>

  <nav aria-label="breadcrumb" class="breadcrumbNav">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Sobre nós</li>
    </ol>
  </nav>

  <main>

    <div class="container aboutusContainer">
      <h1 tabindex="0">Sobre nós</h1>
      <p  tabindex="0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis sit dolor vel tempore quisquam consectetur neque labore reprehenderit beatae? Aliquid consectetur, assumenda modi saepe praesentium sit molestiae vel odio quod.</p>
      <p tabindex="0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque provident ducimus dolorum dolor facere nobis ut soluta laborum expedita distinctio, eligendi repellat perspiciatis quas dignissimos autem esse totam aperiam magni!</p>
      <p tabindex="0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis tempore laboriosam veritatis beatae architecto facilis, suscipit voluptate eligendi tempora sequi illum alias placeat quia, autem delectus blanditiis praesentium, fugiat soluta?</p>
    </div>

    <?php require './shoppingCartSidebar.php'; ?>

  </main>

  <?php require_once './footer.html'; ?>
  
</body>
</html>