<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modifica-Daniel_CRUDs</title>
</head>
<style>
  body {
    background-color: #666;
    margin: 0;
    padding: 0;
    color: white;
  }

  .header {
    height: 40px;
    background-color: #9C9C9C;
    margin: auto;
    margin-top: 35px;
    text-align: center;
    text-transform: uppercase;
    opacity: .9;
  }

  .container {
    width: 600px;
    background-color: #B9B9B9;
    border: solid #888 .5px;
    border-collapse: collapse;
    margin: auto;
    margin-top: 300px;
    padding: 10px 12px;
    opacity: .9;
  }

  #actualizar {
    background-color: #3BD5FF;
    border: none;
    border-radius: 5px;
    color: white;
    padding: 8px;
  }

  #cancelar {
    background-color: #F65E3D;
    border: none;
    border-radius: 5px;
    color: white;
    padding: 8px;
  }

  a {
    color: whitesmoke;
    text-decoration: none;
  }

  .footer {
    width: 100%;
    height: 20px;
    position: fixed;
    bottom: 15px;
    background-color: #9C9C9C;
    margin: auto;
    margin-top: 35px;
    padding: 5px;
    text-align: center;
    opacity: .9;

  }
</style>
<style>
</style>

<body>
  <?php
  $nomEnt = $_POST['nomEnt'];
  $genEnt = $_POST['genEnt'];
  $numPok = $_POST['numPok'];
  $regEnt = $_POST['regEnt'];

  ?>

  <div class="header">
    <h1>Modificar Entrenador</h1>
  </div>
  <div class="container">
    <form action="tabla2.php" method="post">
      <input type="hidden" name="accion" value="actualizar">
      <input type="hidden" name="nomEntAntiguo" value=<?= $nomEnt ?>>
      <label for="nomEnt" class="form-label">Nombre de Entrenador</label>
      <input type="text" class="form-control" name="nomEnt" id="nomEnt" size="20" value=<?= $nomEnt ?>>
      <br><br>
      <label for="genEnt" class="form-label">Género del entrenador</label>
      <input type="text" class="form-control" name="genEnt" id="genEnt" value=<?= $genEnt ?>>
      <br><br>
      <label for="numPok" class="form-label">Número de Pokemons del Entrenador</label>
      <input type="text" class="form-control" name="numPok" id="numPok" value=<?= $numPok ?>>
      <br><br>
      <label for="regEnt" class="form-label">Región del entrenador</label>
      <input type="tel" class="form-control" name="regEnt" id="regEnt" size="20" value=<?= $regEnt ?>>
      <br><br>
      <button id="actualizar" type="submit" class="btn btn-success">Actualizar</button>
      <button id="cancelar" type="submit" class="btn btn-danger"><a href="tabla2.php">Cancelar</a></button>
    </form>
  </div>
  <div class="footer">&copy; 2024 - 2024 www.Daniel_CRUDs.com</div>
</body>

</html>