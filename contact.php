<?php require './keys.php'; ?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="google-signin-client_id" content=<?php echo GOOGLE_CLIENT_ID; ?>>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto</title>
  <link rel="icon" type="image/png" href="./img/favicon.png"/>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css" defer>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/popper.min.js"></script>
  <script src="./js/jquery.min.js"></script>
  <script src="./js/passwords.js"></script>
  <script src="./js/cartScript.js" defer></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <style>
    #map{
      height: 400px;
      width: 100%;
    }
  </style>
</head>
<body>

  <a href="#main" class="skip-to-content">Saltar para conteúdo</a>
  
  <?php require './navbar.php'; ?>
  
  <nav aria-label="breadcrumb" class="breadcrumbNav">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Contacte-nos</li>
    </ol>
  </nav>

  <main id="main">

    <div class="container mt-5 contactContainer">
      <div class="row-col d-flex justify-content-around">
        <section>
          <h3 tabindex="0">Contacto</h3>
          <h6 tabindex="0">Telefone</h6>
          <p tabindex="0">918273645</p>
          <h6 tabindex="0">Endereço de e-mail</h6>
          <p tabindex="0">fbawtft@zoo.pt</p>
          <h6 tabindex="0">Morada</h6>
          <p tabindex="0">Av. GrandesBestas nº 7689</p>
          <h6 tabindex="0">Código-postal</h6>
          <p tabindex="0">1000-100 Zoolândia</p>
        </section>

        <section class="col-6">
          <form action="" method="post">
            <div class="form-group">
              <label for="name" class="d-block">Nome</label>
              <input class="nameInput" type="text" name="name" id="name">
            </div>
            <div class="form-group">
              <label for="email">Endereço de e-mail</label>
              <input type="email" class="form-control" id="email" placeholder="name@example.com">
            </div>
            <div class="form-group">
              <label for="questionselection">Selecione o motivo</label>
              <select class="form-control" id="questionselection">
                <option>Compra tickets</option>
                <option>Pergunta sobre animais</option>
                <option>Pergunta sobre plantas</option>
                <option>Pergunta sobre a loja</option>
                <option>Outras questões</option>
              </select>
            </div>
            <div class="form-group">
              <label for="message">Mensagem</label>
              <textarea class="form-control" id="message" rows="3" placeholder="Digite o motivo pelo qual nos contactou."></textarea>
            </div>
            <button type="submit">Enviar</button>
          </form>
        </section>
      </div>
    </div>

    <?php require './shoppingCartSidebar.php'; ?>

    <div id="map"></div>

    <script>
      function initMap(){
        var options = {
          zoom:15,
          center:{lat:38.720537, lng:-9.145902}
        }
        
        // New map
        var map = new google.maps.Map(document.getElementById('map'), options);

        // Add marker
        var marker = new google.maps.Marker({
          position:{lat:38.720537, lng:-9.158900},
          map: map,
          icon: {
            path: google.maps.SymbolPath.CIRCLE,
            scale: 10
          }
        })
      }
    </script>

    <script
      src="https://maps.googleapis.com/maps/api/js?key=<?php echo API_KEY; ?>&callback=initMap&libraries=&v=weekly"
      defer
    ></script>

  </main>

  <?php require_once './footer.html'; ?>
  
</body>
</html>