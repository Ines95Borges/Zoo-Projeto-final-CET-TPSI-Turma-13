<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre nós</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css" defer>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="./js/jquery.min.js"></script>
  <script src="./js/passwords.js"></script>
  <script src="./js/cartScript.js" defer></script>
</head>
<body>
  
  <?php require './navbar.php'; ?>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Sobre nós</li>
    </ol>
  </nav>

  <main>

    <div class="container">
      <h1>Sobre nós</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis sit dolor vel tempore quisquam consectetur neque labore reprehenderit beatae? Aliquid consectetur, assumenda modi saepe praesentium sit molestiae vel odio quod.</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque provident ducimus dolorum dolor facere nobis ut soluta laborum expedita distinctio, eligendi repellat perspiciatis quas dignissimos autem esse totam aperiam magni!</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis tempore laboriosam veritatis beatae architecto facilis, suscipit voluptate eligendi tempora sequi illum alias placeat quia, autem delectus blanditiis praesentium, fugiat soluta?</p>
    </div>

    <?php require './shoppingCartSidebar.php'; ?>

  </main>

  <?php require_once './footer.html'; ?>
  
</body>
</html>