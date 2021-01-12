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
      <li class="breadcrumb-item active" aria-current="page">Payment</li>
    </ol>
  </nav>

  <main id="payment">
    <div class="container">

      <h1 class="my-5" tabindex="0">Tickets para compra</h1>
      <div class="table-responsive">
        <table border="0" class="table">
          <thead>
            <tr>
              <th tabindex="0">Image</th>
              <th tabindex="0">Description</th>
              <th tabindex="0">Price</th>
              <th tabindex="0">Quantity</th>
            </tr>
          </thead>
          <tbody class="ticket-content">
            <?php if(isset($_GET["singleTicket"])){ ?>
              <tr>
                <td>
                  <img src="./img/tickets/ticket-single.jpg" alt="Single Ticket image">
                </td>
                <td tabindex="0">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod vero obcaecati, odio voluptas delectus hic.
                </td>
                <td class="price" tabindex="0">15.00€</td>
                <td><input type="number" min="1" max="10" value="1"></td>
              </tr>
            <?php }
            else if(isset($_GET["doubleTicket"])){ ?>
              <tr>
                <td>
                  <img src="./img/tickets/ticket-double.jpg" alt="Double Ticket image">
                </td>
                <td> tabindex="0"
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod vero obcaecati, odio voluptas delectus hic.
                </td>
                <td class="price" tabindex="0">25.00€</td>
                <td><input type="number" min="1" max="10" value="1"></td>
              </tr>
            <?php } 
            else if(isset($_GET["familyTicket"])){ ?>
              <tr>
                <td>
                  <img src="./img/tickets/ticket-family.jpg" alt="Family Ticket image">
                </td>
                <td tabindex="0">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod vero obcaecati, odio voluptas delectus hic.
                </td>
                <td class="price" tabindex="0">35.00€</td>
                <td><input type="number" min="1" max="10" value="1"></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>

      <form action="./php/stripeAPI/charge.php" method="post" id="payment-form">
        <div class="form-row mt-5">

          <h2 class="text-center mb-3" tabindex="0">Preencha os campos para finalizar a compra</h2>

          <input type="text" name="firstName" class="form-control mb-3 StripeElement StripeElement--empty" id="nameInput" placeholder="Primeiro Nome">

          <input type="text" name="lastName" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Apelido">

          <input type="text" name="email" class="form-control StripeElemen StripeElement--empty" placeholder="Email">
          
          <label for="card-element" class="mt-5 mb-2">
            Cartão de crédito ou débito
          </label>
          <div id="card-element">
            <!-- A Stripe Element will be inserted here. -->
          </div>

          <!-- Used to display Element errors. -->
          <div id="card-errors" role="alert"></div>
        </div>

        <button class="mt-5 payment-button">Submit Payment</button>
      </form>

    </div>

    <?php require 'shoppingCartSidebar.php'; ?>
  </main>
  
  <?php require './footer.html'; ?>

  <script src="https://js.stripe.com/v3/"></script>
</body>
</html>