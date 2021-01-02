<?php
if(isset($_GET['backoffice'])){ ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice Main Page</title>
    <link rel="icon" type="image/png" href="./img/favicon.png"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/backofficeStyle.css">
    <script src="https://use.fontawesome.com/2ccf658e4d.js"></script>
  </head>
  <body>
    <header class="text-center">
      <h1>Fantastic Beasts and Where to Find Them Backoffice</h1>
    </header>
    <div class="homeIconContainer">
      <div class="homeDiv">
        <a href="../index.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="#750D37" class="bi bi-house-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
          </svg>
        </a>
      </div>
    </div>
    <main>
      <section>
        <div class="container d-flex flex-wrap justify-content-between">
          <button type="button" data-toggle="modal" data-target="#addAnimalsModal" class="changeButton">Adicionar animais</button>
          <button type="button" data-toggle="modal" data-target="#removeAnimalsModal" class="changeButton">Remover animais</button>
          <button type="button" data-toggle="modal" data-target="#addPlantsModal" class="changeButton">Adicionar plantas</button>
          <button type="button" data-toggle="modal" data-target="#removePlantsModal" class="changeButton">Remover plantas</button>
          <button type="button" data-toggle="modal" data-target="#addProductsModal" class="changeButton">Adicionar produtos</button>
          <button type="button" data-toggle="modal" data-target="#removeProductsModal" class="changeButton">Remover produtos</button>
          <button type="button" data-toggle="modal" data-target="#addScientificNameModal" class="changeButton">Adicionar nome científico</button>
          <button type="button" data-toggle="modal" data-target="#removeScientificNameModal" class="changeButton">Remover nome científico</button>
          <button type="button" data-toggle="modal" data-target="#addInstitutionModal" class="changeButton">Adicionar instituição</button>
          <button type="button" data-toggle="modal" data-target="#removeInstitutionModal" class="changeButton">Remover instituição</button>
          <button type="button" data-toggle="modal" data-target="#addEnclosureModal" class="changeButton">Adicionar recinto</button>
          <button type="button" data-toggle="modal" data-target="#removeEnclosureModal" class="changeButton">Remover recinto</button>
          <button type="button" data-toggle="modal" data-target="#addFotoModal" class="changeButton">Adicionar foto</button>
          <button type="button" data-toggle="modal" data-target="#removeFotoModal" class="changeButton">Remover foto</button>
          <button type="button" data-toggle="modal" data-target="#addAnimalDetailModal" class="changeButton">Adicionar detalhes animais</button>
          <button type="button" data-toggle="modal" data-target="#removeAnimalDetailModal" class="changeButton">Remover detalhes animais</button>
          <button type="button" data-toggle="modal" data-target="#addPlantDetailModal" class="changeButton">Adicionar detalhes plantas</button>
          <button type="button" data-toggle="modal" data-target="#removePlantDetailModal" class="changeButton">Remover detalhes plantas</button>
        </div>
      </section>

      <!-- Modal Add Animals-->
      <div class="modal fade" id="addAnimalsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Adicionar Animais</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="./php/addAnimal.php" method="post">
              <div class="modal-body">
                <!-- Fetch data from database to select the one that is to eliminate -->
                <!-- Enclosure -->
                <label class="mr-5">Escolha um recinto para adicionar</label>
                <select name="addEnclosureSelection">
                  <option value="" disabled selected>Escolha...</option>
                <?php 
                
                require '../php/includes/connection.php';

                $sql = "SELECT Name From enclosures;";
                $query = mysqli_query($conn, $sql);

                while($fetch=mysqli_fetch_assoc($query)){ ?>
                  <option value=<?php echo $fetch['Name']; ?>><?php echo $fetch['Name']; ?></option>
                <?php } ?>

                </select>

                <!-- Scientific Name -->
                <label class="mr-5 mt-3">Escolha um nome científico para adicionar</label>
                <select name="addScientificNameSelection">
                  <option value="" disabled selected>Escolha...</option>
                <?php 

                $sql = "SELECT CommonName From scientificnames;";
                $query = mysqli_query($conn, $sql);

                while($fetch=mysqli_fetch_assoc($query)){ ?>
                  <option value=<?php echo $fetch['CommonName']; ?>><?php echo $fetch['CommonName']; ?></option>
                <?php } ?>

                </select>

                <!-- Photo -->
                <label class="mr-5 mt-3">Escolha uma foto para adicionar</label>
                <select name="addPhotoSelection">
                  <option value="" disabled selected>Escolha...</option>
                <?php 

                $sql = "SELECT Name From fotos;";
                $query = mysqli_query($conn, $sql);

                while($fetch=mysqli_fetch_assoc($query)){ ?>
                  <option value=<?php echo $fetch['Name']; ?>><?php echo $fetch['Name']; ?></option>
                <?php } ?>

                </select>

                <!-- Animal detail -->
                <label class="mr-5 mt-3 mb-3">Escolha um detalhe para adicionar</label>
                <select name="addAnimalDetailSelection">
                  <option value="" disabled selected>Escolha...</option>
                <?php 

                $sql = "SELECT Height From detailsanimals;";
                $query = mysqli_query($conn, $sql);

                while($fetch=mysqli_fetch_assoc($query)){ ?>
                  <option value=<?php echo $fetch['Height']; ?>><?php echo $fetch['Height']; ?></option>
                <?php } ?>

                </select>

                <!-- Animal other details -->
                <label class="col-12 col-md-7">Escolha um nome</label>
                <input class="col-12 col-md-4 mb-3" type="text" name="nameAnimalInput" placeholder="Ex.: Pantufa">
                <label class="col-12 col-md-7">Escolha uma data de nascimento(opcional)</label>
                <input class="col-12 col-md-4 mb-3" type="datetime-local" name="dateBirthAnimal">
                <label class="col-12 col-md-7">Escolha uma data de chegada(opcional)</label>
                <input class="col-12 col-md-4 mb-3" type="datetime-local" name="dateArrivalAnimal">
                <label class="col-12 col-md-7">Escolha uma data de morte(opcional)</label>
                <input class="col-12 col-md-4 mb-3" type="datetime-local" name="dateDeathAnimal">

                <label class="col-12 col-md-7 mb-3">Escolha o género</label>
                <select name="addGenderSelection">
                  <option value="" disabled selected>Escolha...</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>

                <label class="col-12 col-md-7 mb-3">Escolha um número para a jaula</label>
                <input type="number" name="cageNumberAnimal">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" name="addAnimal" class="btn btn-primary">Submeter</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Add Plants-->
      <div class="modal fade" id="addPlantsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Adicionar Plantas</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Add Products-->
      <div class="modal fade" id="addProductsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Adicionar Produtos</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- Fetch data from database to select the one that is to eliminate -->
              <!-- Store -->
              <label class="mr-5">Escolha uma loja para adicionar</label>
              <select name="addStoreSelection">
                <option value="" disabled selected>Escolha...</option>
              <?php 
              
              require '../php/includes/connection.php';

              $sql = "SELECT Name From stores;";
              $query = mysqli_query($conn, $sql);

              while($fetch=mysqli_fetch_assoc($query)){ ?>
                <option value=<?php echo $fetch['Name']; ?>><?php echo $fetch['Name']; ?></option>
              <?php } ?>

              </select>

              <!-- Foto -->
              <label class="mr-5">Escolha uma foto para adicionar</label>
              <select name="addPhotoSelection">
                <option value="" disabled selected>Escolha...</option>
              <?php

              $sql = "SELECT Name From fotos;";
              $query = mysqli_query($conn, $sql);

              while($fetch=mysqli_fetch_assoc($query)){ ?>
                <option value=<?php echo $fetch['Name']; ?>><?php echo $fetch['Name']; ?></option>
              <?php } ?>

              </select>

              <label class="col-12 col-md-7">Escolha um nome para o produto</label>
              <input class="col-12 col-md-4 mb-3" type="text" name="addNameProductInput" placeholder="Ex.: bosta">
              <label class="col-12 col-md-7">Escolha um preço para o produto</label>
              <input class="col-12 col-md-4 mb-3" type="number" name="addPriceProductInput" step=".01">
              <label class="col-12 col-md-7">Escolha uma quantidade para o produto</label>
              <input class="col-12 col-md-4 mb-3" type="number" name="addQuantityProductInput">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Remove Animals-->
      <div class="modal fade" id="removeAnimalsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Remover Animais</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="./php/removeAnimals.php" method="POST">
              <div class="modal-body">
                <!-- Fetch data from database to select the one that is to eliminate -->
                <label class="mr-5">Escolha um animal para remover</label>
                  <select id="removeAnimalsSelection" name="removeAnimalsSelection">
                    <option value="" disabled selected>Escolha...</option>
                  <?php 
                  
                  require '../php/includes/connection.php';

                  $sql = "SELECT Name From animals;";
                  $query = mysqli_query($conn, $sql);

                  while($fetch=mysqli_fetch_assoc($query)){ ?>
                    <option value=<?php echo $fetch['Name']; ?>><?php echo $fetch['Name']; ?></option>
                  <?php } ?>

                  </select>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" name="submitAnimals" class="btn btn-primary">Submeter</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Remove Plants-->
      <div class="modal fade" id="removePlantsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Remover Plantas</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="./php/removePlants.php" method="POST">
              <div class="modal-body">
                <!-- Fetch data from database to select the one that is to eliminate -->
                <label class="mr-5">Escolha uma planta para remover</label>
                <select id="removePlantsSelection" name="removePlantsSelection">
                  <option value="" disabled selected>Escolha...</option>
                <?php 
                
                require '../php/includes/connection.php';

                $sql = "SELECT Name From plants;";
                $query = mysqli_query($conn, $sql);

                while($fetch=mysqli_fetch_assoc($query)){ ?>
                  <option value=<?php echo $fetch['Name']; ?>><?php echo $fetch['Name']; ?></option>
                <?php } ?>

                </select>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" name="submitPlants" class="btn btn-primary">Submeter</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Remove Products-->
      <div class="modal fade" id="removeProductsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Remover Produtos</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="./php/removeProducts.php" method="POST">
              <div class="modal-body">
                <!-- Fetch data from database to select the one that is to eliminate -->
                <label class="mr-5">Escolha um produto para remover</label>
                    <select id="removeProductsSelection" name="removeProductsSelection">
                      <option value="" disabled selected>Escolha...</option>
                    <?php 
                    
                    require '../php/includes/connection.php';

                    $sql = "SELECT Name From products;";
                    $query = mysqli_query($conn, $sql);

                    while($fetch=mysqli_fetch_assoc($query)){ ?>
                      <option value=<?php echo $fetch['Name']; ?>><?php echo $fetch['Name']; ?></option>
                    <?php } ?>

                    </select>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" name="removeProducts" class="btn btn-primary">Submeter</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Add Scientific Names-->
      <div class="modal fade" id="addScientificNameModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Adicionar Nome Científico</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="./php/addScientificNames.php" method="post">
              <div class="modal-body">
                <div>
                  <div class="row">
                    <label>Nome comum:</label>
                    <input type="text" name="scientificNameCommonNameAnimal" placeholder="Ex.: Leopardo">
                  </div>
                  <div class="row">
                    <label>Reino:</label>
                    <input type="text" name="scientificNameKingdomAnimal" placeholder="Ex.: Animalia">
                  </div>
                  <div class="row">
                    <label>Filo:</label>
                    <input type="text" name="scientificNamePhylumAnimal" placeholder="Ex.: Chordata">
                  </div>
                  <div class="row">
                    <label>Classe:</label>
                    <input type="text" name="scientificNameClassAnimal" placeholder="Ex.: Mammalia">
                  </div>
                  <div class="row">
                    <label>Ordem:</label>
                    <input type="text" name="scientificNameOrderAnimal" placeholder="Ex.: Carnívora">
                  </div>
                  <div class="row">
                    <label>Família:</label>
                    <input type="text" name="scientificNameFamilyAnimal" placeholder="Ex.: Felidae">
                  </div>
                  <div class="row">
                    <label>Género:</label>
                    <input type="text" name="scientificNameGenusAnimal" placeholder="Ex.: Panthera">
                  </div>
                  <div class="row">
                    <label>Espécie:</label>
                    <input type="text" name="scientificNameSpeciesAnimal" placeholder="Ex.: P. pardus">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" name="addScientificName" class="btn btn-primary">Submeter</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Remove Scientific Names-->
      <div class="modal fade" id="removeScientificNameModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Remover Nome Científico</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="./php/removeScientificNames.php" method="post">
              <div class="modal-body">
                <!-- Fetch data from database to select the one that is to eliminate -->
                <label class="mr-5">Escolha um nome científico para remover</label>
                <select id="removeScientificNameSelection" name="removeScientificNameSelection">
                  <option value="" disabled selected>Escolha...</option>
                <?php 
                
                require '../php/includes/connection.php';

                $sql = "SELECT CommonName From scientificnames;";
                $query = mysqli_query($conn, $sql);

                while($fetch=mysqli_fetch_assoc($query)){ ?>
                  <option value=<?php echo $fetch['CommonName']; ?>><?php echo $fetch['CommonName']; ?></option>
                <?php } ?>

                </select>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" name="removeScientificName" class="btn btn-primary">Submeter</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Add Institution -->
      <div class="modal fade" id="addInstitutionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Adicionar Intituição</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="./php/addInstitution.php" method="post">
              <div class="modal-body">
                <div class="row">
                  <label>Nome da Instituição:</label>
                  <input type="text" name="institutionName" placeholder="Ex.: Red Area">
                </div>
                <div class="row">
                  <label>Endereço:</label>
                  <input type="text" name="institutionAddress" placeholder="Ex.: Blood Street">
                </div>
                <div class="row">
                  <label>Cidade:</label>
                  <input type="text" name="institutionCity" placeholder="Ex.: Redlandia">
                </div>
                <div class="row">
                  <label>Distrito:</label>
                  <input type="text" name="institutionState" placeholder="Ex.: Redder">
                </div>
                <div class="row">
                  <label>País:</label>
                  <input type="text" name="institutionCountry" placeholder="Ex.: Reddest">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="addInstitution" class="btn btn-primary">Save changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Remove Institution -->
      <div class="modal fade" id="removeInstitutionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Remover Instituição</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="./php/removeInstitutions.php" method="post">
              <div class="modal-body">
                <!-- Fetch data from database to select the one that is to eliminate -->
                <label class="mr-5">Escolha uma instituição para remover</label>
                <select id="removeInstitutionSelection" name="removeInstitutionSelection">
                  <option value="" disabled selected>Escolha...</option>
                <?php 
                
                require '../php/includes/connection.php';

                $sql = "SELECT Name From institutions;";
                $query = mysqli_query($conn, $sql);

                while($fetch=mysqli_fetch_assoc($query)){ ?>
                  <option value=<?php echo $fetch['Name']; ?>><?php echo $fetch['Name']; ?></option>
                <?php } ?>

                </select>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" name="removeInstitution" class="btn btn-primary">Submeter</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Add Enclosure -->
      <div class="modal fade" id="addEnclosureModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Adicionar Recintos</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="./php/addEnclosure.php" method="post">
              <div class="modal-body">
                <!-- Fetch data from database to select the one that is to eliminate -->
                <label class="mr-5">Escolha uma instituição</label>
                <select id="addInstitutionSelection" name="addInstitutionSelection">
                  <option value="" disabled selected>Escolha...</option>
                <?php 
                
                require '../php/includes/connection.php';

                $sql = "SELECT Name From institutions;";
                $query = mysqli_query($conn, $sql);

                while($fetch=mysqli_fetch_assoc($query)){ ?>
                  <option value="<?php echo $fetch['Name']; ?>"><?php echo $fetch['Name']; ?></option>
                <?php } ?>

                </select>

                <div class="row">
                  <label>Nome do recinto:</label>
                  <input type="text" name="nameEnclosure" placeholder="Ex.: funaná">
                </div>
                <div class="row">
                  <label class="mr-5">Escolha um tipo de recinto:</label>
                  <select name="addEnclosureType" id="addEnclosureType">
                    <option value="Grassland">Grassland</option>
                    <option value="Plains">Plains</option>
                    <option value="Forest">Forest</option>
                    <option value="Mountain">Mountain</option>
                    <option value="Savanna">Savanna</option>
                    <option value="Jungle">Jungle</option>
                    <option value="Ice">Ice</option>
                    <option value="Water">Water</option>
                  </select>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" name="addEnclosure" class="btn btn-primary">Submeter</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Remove Enclosure-->
      <div class="modal fade" id="removeEnclosureModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Remover Recintos</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="./php/removeEnclosures.php" method="post">
              <div class="modal-body">
                <!-- Fetch data from database to select the one that is to eliminate -->
                <label class="mr-5">Escolha um recinto para remover</label>
                  <select id="removeEnclosureSelection" name="removeEnclosureSelection">
                    <option value="" disabled selected>Escolha...</option>
                  <?php 
                  
                  require '../php/includes/connection.php';

                  $sql = "SELECT Name From enclosures;";
                  $query = mysqli_query($conn, $sql);

                  while($fetch=mysqli_fetch_assoc($query)){ ?>
                    <option value=<?php echo $fetch['Name']; ?>><?php echo $fetch['Name']; ?></option>
                  <?php } ?>

                  </select>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" name="removeEnclosure" class="btn btn-primary">Submeter</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Add Photo-->
      <div class="modal fade" id="addFotoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Adicionar fotos</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="./php/addPhoto.php" method="post">
              <div class="modal-body">
                <label>Escolha um link para a foto: </label>
                <input type="text" name="linkInputPhoto">
                <label class="mt-3">Escolha um nome para a foto: </label>
                <input type="text" name="nameInputPhoto" placeholder="Ex.: Einstein">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" name="addPhoto" class="btn btn-primary">Submeter</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Remove Photo -->
      <div class="modal fade" id="removeFotoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Remover foto</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="./php/removePhotos.php" method="post">
              <div class="modal-body">
                <!-- Fetch data from database to select the one that is to eliminate -->
                <label class="mr-5">Escolha uma foto para remover</label>
                    <select id="removePhotoSelection" name="removePhotoSelection">
                      <option value="" disabled selected>Escolha...</option>
                    <?php 
                    
                    require '../php/includes/connection.php';

                    $sql = "SELECT Name From fotos;";
                    $query = mysqli_query($conn, $sql);

                    while($fetch=mysqli_fetch_assoc($query)){ ?>
                      <option value=<?php echo $fetch['Name']; ?>><?php echo $fetch['Name']; ?></option>
                    <?php } ?>

                    </select>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" name="removePhoto" class="btn btn-primary">Submeter</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Add Animal Detail -->
      <div class="modal fade" id="addAnimalDetailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Adicionar Detalhes de Animal</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="./php/addAnimalDetail.php" method="post">
              <div class="modal-body">
                <label class="col-12 col-md-5">Adicione a altura:</label>
                <input class="col-12 col-md-6 mt-3" type="number" name="heightInputAnimal" step=".01">
                <label class="col-12 col-md-5">Adicione o peso:</label>
                <input class="col-12 col-md-6 mt-3" type="number" name="weightInputAnimal" step=".01">
                <label class="col-12 col-md-5">Adicione a idade:</label>
                <input class="col-12 col-md-6 mt-3" type="number" name="ageInputAnimal">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" name="addAnimalDetail" class="btn btn-primary">Submeter</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Remove Animal Detail -->
      <div class="modal fade" id="removeAnimalDetailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Remover detalhe de animal</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="./php/removeAnimalDetails.php" method="post">
              <div class="modal-body">
                <!-- Fetch data from database to select the one that is to eliminate -->
                <label class="mr-5">Escolha um detalhe de animal para remover</label>
                <select name="removeAnimalDetailSelection">
                  <option value="" disabled selected>Escolha...</option>
                <?php 
                
                require '../php/includes/connection.php';

                $sql = "SELECT Height From detailsanimals;";
                $query = mysqli_query($conn, $sql);

                while($fetch=mysqli_fetch_assoc($query)){ ?>
                  <option value=<?php echo $fetch['Height']; ?>><?php echo $fetch['Height']; ?></option>
                <?php } ?>

                </select>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" name="removeAnimalDetail" class="btn btn-primary">Submeter</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Add Plant Detail -->
      <div class="modal fade" id="addPlantDetailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Adicionar detalhe de planta</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="./php/addPlantDetail.php" method="post">
              <div class="modal-body">
                <label class="col-12 col-md-5">Adicione a altura:</label>
                <input class="col-12 col-md-6 mt-3" type="number" name="heightInputPlant" step=".01">
                <label class="col-12 col-md-5">Adicione a idade:</label>
                <input class="col-12 col-md-6 mt-3" type="number" name="ageInputPlant">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" name="addPlantDetail" class="btn btn-primary">Submeter</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal Remove Plant Detail -->
      <div class="modal fade" id="removePlantDetailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Remover detalhe de planta</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="./php/removePlantsDetails.php" method="post">
              <div class="modal-body">
                <!-- Fetch data from database to select the one that is to eliminate -->
                <label class="mr-5">Escolha um detalhe de planta para remover</label>
                <select name="removePlantDetailSelection">
                  <option value="" disabled selected>Escolha...</option>
                <?php 
                
                require '../php/includes/connection.php';

                $sql = "SELECT Height From detailsplants;";
                $query = mysqli_query($conn, $sql);

                while($fetch=mysqli_fetch_assoc($query)){ ?>
                  <option value=<?php echo $fetch['Height']; ?>><?php echo $fetch['Height']; ?></option>
                <?php } ?>

                </select>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" name="removePlantDetail" class="btn btn-primary">Submeter</button>
              </div>
            </form>
          </div>
        </div>
      </div>

    </main>
  </body>
  </html>

<?php } ?>