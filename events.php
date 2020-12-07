<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eventos</title>
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
      <li class="breadcrumb-item active" aria-current="page">Eventos</li>
    </ol>
  </nav>
  
  <main>

    <div class="container mt-5 mb-5">
      <div class="row-col d-flex mt-3 align-items-center">
        <img src="img/events/event-1.jpg" alt="Evento 1">
        <div class="ml-5">
          <h3 class=""><a href="#">Evento 1</a></h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime magnam quia ipsum dolore asperiores ex saepe iure sit pariatur, est minima dolorum deleniti sunt fugiat dicta eaque a aspernatur fuga.</p>
        </div> 
      </div>
      <div class="row-col d-flex mt-3 align-items-center">
        <div class="mr-5">
          <h3><a href="#">Evento 2</a></h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime magnam quia ipsum dolore asperiores ex saepe iure sit pariatur, est minima dolorum deleniti sunt fugiat dicta eaque a  aspernatur fuga.</p>
        </div>
        <img src="img/events/event-2.jpg" alt="Evento 2">
      </div>
      <div class="row-col d-flex mt-3 align-items-center">
        <img src="img/events/event-3.jpg" alt="Evento 3">
        <div class="ml-5">
          <h3><a href="#">Evento 3</a></h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime magnam quia ipsum dolore asperiores ex saepe iure sit pariatur, est minima dolorum deleniti sunt fugiat dicta eaque a aspernatur fuga.</p>
        </div>
      </div>
      <div class="row-col d-flex mt-3 align-items-center">
        <div class="mr-5">
          <h3 class="d-block"><a href="#">Evento 4</a></h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime magnam quia ipsum dolore asperiores ex saepe iure sit pariatur, est minima dolorum deleniti sunt fugiat dicta eaque a aspernatur fuga.</p>
        </div>
        <img src="img/events/event-4.jpg" alt="Evento 4" class="img-fluid">
      </div>
    </div>

    <?php require './shoppingCartSidebar.php'; ?>

  </main>

  <?php require_once './footer.html'; ?>

</body>
</html>