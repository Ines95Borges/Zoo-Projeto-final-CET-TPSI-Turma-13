<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="google-signin-client_id" content="85445765798-dt47q70lkmf723l7smij02t3dbnifnua.apps.googleusercontent.com">
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
  <script src="./js/wai-aria.js" defer></script>
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
                <img src="img/caroussel/HarpyEagle.jpg" class="d-block w-40" alt="Eagle">
              </div>
              <div class="carousel-item">
                <img src="img/caroussel/beaver.jpg" class="d-block w-40" alt="Beaver">
              </div>
              <div class="carousel-item">
                <img src="img/caroussel/dolphin.jpg" class="d-block w-40" alt="Dolphin">
              </div>
              <div class="carousel-item">
                <img src="img/caroussel/felin.jpg" class="d-block w-40" alt="Felin">
              </div>
            </div>
          </div>
        </div>
      <div class="text-center indexHeading">
          <div class="ml-5">
            <h1 tabindex="0">Bem-vindo ao Zoo Fantastic Beasts And Where To Find Them</h1>
          </div>
        </div>
      </div>
    </div>

    <!--CARDS-->
    <div class="container mt-5">
      <div class="row"> 
        <div class="card d-inline index-cards" style="width: 18rem; margin-right: 3%; margin-left: auto;">
          <img src="./img/indexCards/store.jpg" class="card-img-top" alt="Store">
          <div class="card-body">
            <h5 class="card-title" tabindex="0">Loja</h5>
            <p class="card-text" tabindex="0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos ex, aperiam facilis dolorum quod, laborum error tempora, voluptas unde quaerat impedit repellat cum pariatur dolor quidem magnam. Vitae, voluptatibus reprehenderit!</p>
            <a href="./store.php" class="btn btn-primary">Ir para a loja</a>
          </div>
        </div>

        <div class="card d-inline index-cards" style="width: 18rem; margin-right: 3%;">
          <img src="./img/indexCards/zoo-tickets.jpg" class="card-img-top" alt="Zoo tickets">
          <div class="card-body">
            <h5 class="card-title" tabindex="0">Zoo tickets</h5>
            <p class="card-text" tabindex="0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, quam molestiae. Dolorum alias magni quae magnam perspiciatis provident eligendi nostrum. Saepe odit molestias veritatis quaerat eius perferendis debitis modi sed.</p>
            <a href="./tickets.php" class="btn btn-primary">Comprar tickets</a>
          </div>
        </div>

        <div class="card index-cards" style="width: 18rem;">
          <img src="./img/indexCards/zoo-events.jpg" class="card-img-top" alt="Zoo Events">
          <div class="card-body">
            <h5 class="card-title" tabindex="0">Zoo events</h5>
            <p class="card-text" tabindex="0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, quam molestiae. Dolorum alias magni quae magnam perspiciatis provident eligendi nostrum. Saepe odit molestias veritatis quaerat eius perferendis debitis modi sed.</p>
            <a href="./events.php" class="btn btn-primary">Ir para eventos</a>
          </div>
        </div>
      </div>

      <div class="row mt-3"> 

        <div class="card index-cards" style="width: 18rem; margin-right: 3%;">
          <img src="./img/indexCards/zoo-animals.jpg" class="card-img-top" alt="Zoo animals">
          <div class="card-body">
            <h5 class="card-title" tabindex="0">Animais do Zoo</h5>
            <p class="card-text" tabindex="0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga aliquid deleniti obcaecati? Obcaecati dolores odit ea! Impedit asperiores molestias unde labore sint dolore mollitia rerum, culpa eius ut saepe laboriosam?</p>
            <a href="./checkAnimals.php" class="btn btn-primary">Ver animais</a>
          </div>
        </div>

        <div class="card index-cards" style="width: 18rem; margin-right: 3%;">
          <img src="./img/indexCards/zoo-plants.jpg" class="card-img-top" alt="Zoo plants">
          <div class="card-body">
            <h5 class="card-title" tabindex="0">Plantas do Zoo</h5>
            <p class="card-text" tabindex="0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita quod asperiores iure, cupiditate magni fuga, quibusdam alias rem fugit omnis iste voluptatibus reprehenderit maxime quis voluptas pariatur inventore nulla? Officiis?</p>
            <a href="./checkPlants.php" class="btn btn-primary">Ver plantas</a>
          </div>
        </div>

        <div class="card index-cards" style="width: 18rem;">
          <img src="./img/indexCards/zoo-institution.jpg" class="card-img-top" alt="Zoo institutions">
          <div class="card-body">
            <h5 class="card-title" tabindex="0">Instituições</h5>
            <p class="card-text" tabindex="0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique architecto, aperiam aut eos quas nostrum qui voluptates accusantium exercitationem cum doloremque ducimus omnis saepe velit alias, voluptate consequuntur incidunt a!</p>
            <a href="./institutions.php" class="btn btn-primary">Ver instituições</a>
          </div>
        </div>
      </div>
    </div>

    <?php require 'shoppingCartSidebar.php'; ?>

  </main>

  <?php require 'footer.html'; ?>  
  
</body>
</html>