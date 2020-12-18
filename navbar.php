<?php session_start(); ?>
<nav class="navbar navbar-expand-lg topNavbar navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php"><img width=75vw src="./img/logo.jpg" alt="Logo Zoo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
        <li class="nav-item mr-4">
          <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item mr-4">
          <a class="nav-link" href="./store.php">Loja</a>
        </li>
        <li class="nav-item dropdown mr-4">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            No Zoo
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="./checkAnimals.php">Ver animais</a></li>
            <li><a class="dropdown-item" href="./checkPlants.php">Ver plantas</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="./tickets.php">Comprar tickets</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="./institutions.php">Instituições</a></li>
          </ul>
        </li>
        <li class="nav-item mr-4">
          <a class="nav-link" href="./aboutus.php">Sobre nós</a>
        </li>
        <li class="nav-item mr-4">
          <a class="nav-link" href="./contact.php">Contacte-nos</a>
        </li>
        <li class="nav-item mr-4">
          <a class="nav-link" href="./events.php">Eventos</a>
        </li>
        <!-- Display backoffice button -->
        <?php if(isset($_SESSION['Privilege'])){ 
          if($_SESSION['Privilege'] == 1){?>
            <li class="nav-item mr-4">
              <a class="nav-link" href="./backoffice/mainPage.php?backoffice">Backoffice</a>
            </li>
        <?php }} ?>
      </ul>

      <?php if(!isset($_SESSION['Client_ID'])){ ?>
      <form class="d-flex ">
        <button class="btn btn-outline-success mr-3 ml-3" type="button" data-toggle="modal" data-target="#logIn">Entrar</button>
        <button class="btn btn-outline-success mr-5" type="button" data-toggle="modal" data-target="#signUp">Registar-se</button>
      </form>
      <?php } if(isset($_SESSION['Client_ID'])) {?>
        <li class="nav-item dropdown" id="loggedInDropdown">
          <img src="./img/login-icon.png" alt="Login Icon" id="loginIcon" role="button" data-toggle="dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          </a>
          <ul class="dropdown-menu" id="dropdownLoggedIn" aria-labelledby="navbarDropdown">
            <li><span id="nameLoginDropdown">Está logado como </span></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Perfil</a></li>
            <li><a class="dropdown-item" href="#">Definições</a></li>
            <li><a class="dropdown-item" href="./php/logOut.php">Sair</a></li>
          </ul>
        </li>
      <?php } ?>
    </div>
    <!--Apart from the nav-->
    <div class="cart-btn btn">
        <span class="nav-icon">
          <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cart3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
          </svg>
        </span>
        <div class="cart-items">0</div>
      </div>
  </div>
</nav>

<!--MODAL LOG IN-->
<div class="modal fade" id="logIn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Entrar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="./php/login.php" class="formNavbar" method="post">
          <div class="modal-body">
              <fieldset>
                <div class="m-2">
                  <div class="row mb-4">
                    <label for="" class="d-flex justify-content-center">Nome de utilizador</label>
                    <input type="text" name="usernameLogin" id="usernameLogIn" autocomplete="username">
                  </div>
                  <div class="row">
                    <label for="" class="d-flex justify-content-center">Palavra-passe</label>
                    <input type="password" name="pwdLogin" id="pwdLogIn" class="col-11 pwd" autocomplete="current-password">
                    <button type="button" onclick="showPwd()" onmouseout="hidePwd()" class="col-1"><span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span></button>
                  </div>
                  <div class="g-signin2 mt-3 d-flex justify-content-center"></div>
                </div>
              </fieldset>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-primary" name="login">Entrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!--MODAL SIGN UP-->
  <div class="modal fade" id="signUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">CADASTRAR-SE</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="row g-3 needs-validation formNavbar" novalidate action="php/userRegister.php" method="POST">
          <div class="modal-body">
          
            <div class="row mb-2">
              <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Primeiro Nome</label>
                <input type="text" class="form-control" name="firstName" id="validationCustom01" value="Ex.: Maria" required>
                <div class="valid-feedback">
                  Parece bem!
                </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Apelido</label>
                <input type="text" class="form-control" name="lastName" id="validationCustom02" value="Ex.: Gomes" required>
                <div class="valid-feedback">
                  Parece bem!
                </div>
            </div>
            </div>
            <div class="row mb-2">
              <div class="col-12">
                <label for="validationCustomUsername" class="form-label">Nome de utilizador</label>
                <div class="input-group">
                  <span class="input-group-text" id="inputGroupPrepend">@</span>
                  <input type="text" class="form-control" name="username" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Ex.: pikachu" required  autocomplete="username">
                  <div class="invalid-feedback">
                    Por favor escolha um nome de utilizador.
                  </div>
                </div>
              </div>
            </div>
            <div class="mb-2">
              <div class="col-12 mb-2">
                <label for="pwdSignUp1" class="form-label">Password</label>
                <input type="password" class="form-control" name="pwd" id="pwdSignUp1" required autocomplete="new-password">
                <div class="invalid-feedback">
                  Por favor introduza uma password válida.
                </div>
                <button type="button" onclick="showPwd1()" onmouseout="hidePwd1()"><span toggle="#pwdSignUp1" class="fa fa-fw fa-eye field-icon toggle-password"></span></button>
                <button type="button" onclick="generatePassword()">Gerar password</button>
              </div>
              <div class="col-12">
                <label for="pwdSignUp2" class="form-label">Repetir Password</label>
                <input type="password" class="form-control" name="pwd-repeat" id="pwdSignUp2" required autocomplete="new-password">
                <div class="invalid-feedback">
                  Pro favor introduza uma password válida.
                </div>
                <button type="button" onclick="showPwd2()" onmouseout="hidePwd2()"><span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span></button>
              </div>
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                  Concordo com os termos de utilização
                </label>
                <div class="invalid-feedback">
                  Tem de concordar com os termos de utilização antes de continuar.
                </div>
              </div>
            </div>

            <div class="g-signin2 mt-3 d-flex justify-content-center"></div>
          
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="submit" name="register" class="btn btn-primary">Cadastrar-se</button>
          </div>
        </form>
      </div>
    </div>
  </div>
