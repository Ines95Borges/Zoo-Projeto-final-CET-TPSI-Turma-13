<?php require_once './keys.php'; ?>
<!DOCTYPE html>
<html lang="pt">
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
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/popper.min.js"></script>
  <script src="./js/jquery.min.js"></script>
  <script src="./js/passwords.js" defer></script>
  <script src="./js/cartScript.js" defer></script>
  <script src="./js/tickets.js" defer></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

  <a href="#main" class="skip-to-content">Saltar para conteúdo</a>
  
  <?php require 'navbar.php'; ?>

  <nav aria-label="breadcrumb" class="breadcrumbNav">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Tickets</li>
    </ol>
  </nav>

  <header style="margin-top: 120px;">
    <div class="row text-center ticketHeader">
      <h1 tabindex="0">Comprar tickets</h1>
    </div>
  </header>

  <main id="main">
    <div class="container mb-5">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col ticket-card" id="singleTicket">
          <div class="card h-100 ticket-card">
            <img src="./img/tickets/ticket-single.jpg" class="card-img-top" alt="Single ticket">
            <div class="card-body ticket-card">
              <h5 class="card-title ticket-card" tabindex="0">Ticket único</h5>
              <p class="card-text ticket-card" tabindex="0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti aut dolorum laboriosam! Eveniet voluptatem quo nostrum, quaerat assumenda repellat earum? Similique soluta maxime, repudiandae quos magnam facere quam placeat perspiciatis.</p>
            </div>
            <div class="card-footer text-center">
              <small class="text-muted" tabindex="0">Clique para comprar</small>
            </div>
          </div>
        </div>
        <div class="col" id="doubleTicket">
          <div class="card h-100 ticket-card">
            <img src="./img/tickets/ticket-double.jpg" class="card-img-top" alt="Double ticket">
            <div class="card-body">
              <h5 class="card-title" tabindex="0">Ticket duplo</h5>
              <p class="card-text" tabindex="0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore consequatur maxime, minima adipisci accusamus exercitationem aut molestiae accusantium rerum voluptatem, ullam atque possimus expedita ipsum sint, corporis odit voluptas voluptates?</p>
            </div>
            <div class="card-footer text-center">
              <small class="text-muted" tabindex="0">Clique para comprar</small>
            </div>
          </div>
        </div>
        <div class="col" id="familyTicket">
          <div class="card h-100 ticket-card">
            <img src="./img/tickets/ticket-family.jpg" class="card-img-top" alt="Family ticket">
            <div class="card-body">
              <h5 class="card-title" tabindex="0">Ticket família</h5>
              <p class="card-text" tabindex="0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit incidunt voluptatem ab natus eos consectetur corporis, asperiores dicta iure assumenda praesentium dolor culpa quidem modi temporibus sed iusto harum numquam?</p>
            </div>
            <div class="card-footer text-center">
              <small class="text-muted" tabindex="0">Clique para comprar</small>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php require 'shoppingCartSidebar.php'; ?>
  </main>

  <?php require './footer.html'; ?>

</body>
</html>