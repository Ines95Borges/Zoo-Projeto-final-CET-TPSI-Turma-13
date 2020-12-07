<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tickets</title>
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

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Tickets</li>
    </ol>
  </nav>

  <header class="mb-5 mt-5">
    <div class="row text-center">
      <h1>Comprar tickets</h1>
    </div>
  </header>

  <main>
    <div class="container mb-5">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col ticket-card">
          <div class="card h-100 ticket-card">
            <img src="./img/tickets/ticket-single.jpg" class="card-img-top" alt="Single ticket">
            <div class="card-body ticket-card">
              <h5 class="card-title ticket-card">Ticket único</h5>
              <p class="card-text ticket-card">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti aut dolorum laboriosam! Eveniet voluptatem quo nostrum, quaerat assumenda repellat earum? Similique soluta maxime, repudiandae quos magnam facere quam placeat perspiciatis.</p>
            </div>
            <div class="card-footer text-center">
              <small class="text-muted">Clique para comprar</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 ticket-card">
            <img src="./img/tickets/ticket-double.jpg" class="card-img-top" alt="Double ticket">
            <div class="card-body">
              <h5 class="card-title">Ticket duplo</h5>
              <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore consequatur maxime, minima adipisci accusamus exercitationem aut molestiae accusantium rerum voluptatem, ullam atque possimus expedita ipsum sint, corporis odit voluptas voluptates?</p>
            </div>
            <div class="card-footer text-center">
              <small class="text-muted">Clique para comprar</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 ticket-card">
            <img src="./img/tickets/ticket-family.jpg" class="card-img-top" alt="Family ticket">
            <div class="card-body">
              <h5 class="card-title">Ticket família</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit incidunt voluptatem ab natus eos consectetur corporis, asperiores dicta iure assumenda praesentium dolor culpa quidem modi temporibus sed iusto harum numquam?</p>
            </div>
            <div class="card-footer text-center">
              <small class="text-muted">Clique para comprar</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php require './footer.html'; ?>

</body>
</html>