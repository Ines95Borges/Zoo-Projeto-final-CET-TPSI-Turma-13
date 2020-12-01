<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Backoffice Main Page</title>
  <link rel="icon" type="image/png" href="./img/favicon.png"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/jquery.min.js"></script>
  <link rel="stylesheet" href="../css/backofficeStyle.css">
</head>
<body>
  <header class="text-center">
    <h1>Fantastic Beasts and Where to Find Them Backoffice</h1>
  </header>
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
          <form action="" method="post">
            <div class="modal-body">

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              <button type="submit" class="btn btn-primary">Submeter</button>
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
            ...
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
              <label class="mr-5">Escolha um produto para remover</label>
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
                <option value=<?php echo $fetch['Name']; ?>><?php echo $fetch['Name']; ?></option>
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

    <!-- Modal -->
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
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
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
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
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
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
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
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
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
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
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
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
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
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

  </main>
</body>
</html>