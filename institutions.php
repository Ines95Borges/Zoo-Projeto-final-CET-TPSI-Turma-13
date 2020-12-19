<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Intitutions</title>
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

<a href="#main" class="skip-to-content">Saltar para conteúdo</a>
  
<?php require 'navbar.php'; ?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="./index.php" aria-label="Home">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Instituições</li>
  </ol>
</nav>

<main class="institutionsMain" id="main">

  <h1 class="mt-3 text-center" tabindex="0">Instituições</h1>

  <div class="container mt-5 mb-3" id="intitutionsContainer">

    <?php
      require_once './php/includes/connection.php';

      $sql = "SELECT * FROM institutions;";
      $query = mysqli_query($conn, $sql) or die($sql);
      while($fetch = mysqli_fetch_assoc($query)){ ?>
        
        <div class="row mb-2">
          <h2 tabindex="0"><?php echo $fetch['Name'] ?></h2>
          <h3 tabindex="0"><?php echo "Address: ".$fetch['Address'] ?></h3>
          <h4 tabindex="0"><?php echo "City: ".$fetch['City'] ?></h4>
          <h5 tabindex="0"><?php echo "State: ".$fetch['State'] ?></h5>
          <h6 tabindex="0"><?php echo "Country: ".$fetch['Country'] ?></h6>
        </div>
        <hr class="mb-2">

      <?php } ?>

  </div>

  <?php require 'shoppingCartSidebar.php'; ?>
</main>

<?php require 'footer.html'; ?>

</body>
</html>