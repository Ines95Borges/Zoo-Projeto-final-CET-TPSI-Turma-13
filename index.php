<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="google-signin-client_id" content="132897864392-tr73on25bdq41e1gias2s7gn56j2d6rv.apps.googleusercontent.com">
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fantastic Beasts And Where To Find Them</title>
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
  
  <?php require 'navbar.php'; ?>

  <main>

    <!--CAROUSEL-->
    <div class="container mt-3" >
      <div class="row d-md-inline-block">
        <div class="col-12 col-md-6 float-left">
          <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/caroussel/elephant.jpg" class="d-block w-40" alt="Elephant">
              </div>
              <div class="carousel-item">
                <img src="img/caroussel/HarpyEagle.jpg" class="d-block w-40" alt="">
              </div>
              <div class="carousel-item">
                <img src="img/caroussel/beaver.jpg" class="d-block w-40" alt="">
              </div>
              <div class="carousel-item">
                <img src="img/caroussel/dolphin.jpg" class="d-block w-40" alt="">
              </div>
              <div class="carousel-item">
                <img src="img/caroussel/felin.jpg" class="d-block w-40" alt="">
              </div>
            </div>
          </div>
        </div>
      <div class="text-center">
          <div class="ml-5">
            <h1>Bem-vindo ao Zoo Fantastic Beasts And Where To Find Them</h1>
          </div>
        </div>
      </div>
    </div>

    <!--CARDS-->
    <div class="container mt-5">
      <div class="row"> 
        <div class="card d-inline" style="width: 18rem; margin-right: 3%; margin-left: auto;">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>

        <div class="card d-inline" style="width: 18rem; margin-right: 3%;">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>

        <div class="card" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>

      <div class="row mt-3"> 

        <div class="card" style="width: 18rem; margin-right: 3%;">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>

        <div class="card" style="width: 18rem; margin-right: 3%;">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>

        <div class="card" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>

    <?php require 'shoppingCartSidebar.php'; ?>

  </main>

  <?php require 'footer.html'; ?>  
  
</body>
</html>