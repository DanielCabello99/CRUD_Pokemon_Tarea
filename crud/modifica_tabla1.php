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
    width: 400px;
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
  $numPok = $_POST['numPok'];
  $nomPok = $_POST['nomPok'];
  $genPok = $_POST['genPok'];
  $tipPok = $_POST['tipPok'];

  ?>

  <div class="header">
    <h1>Modificar Pokemon</h1>
  </div>
  <div class="container">
    <form action="tabla1.php" method="post">
      <input type="hidden" name="accion" value="actualizar">
      <input type="hidden" name="numPokAntiguo" value=<?= $numPok ?>>
      <label for="numPok" class="form-label">Número de Pokedex</label>
      <input type="text" class="form-control" name="numPok" id="numPok" size="20" value=<?= $numPok ?>>
      <br><br>
      <label for="nomPok" class="form-label">Nombre</label>
      <input type="text" class="form-control" name="nomPok" id="nomPok" value=<?= $nomPok ?>>
      <br><br>
      <label for="genPok" class="form-label">Género</label>
      <input type="text" class="form-control" name="genPok" id="genPok" value=<?= $genPok ?>>
      <br><br>
      <label for="tipPok" class="form-label">Tipo</label>
      <input type="text" class="form-control" name="tipPok" id="tipPok" size="20" value=<?= $tipPok ?>>
      <br><br>
      <button id="actualizar" type="submit" class="btn btn-success">Actualizar</button>
      <button id="cancelar" type="submit" class="btn btn-danger"><a href="tabla1.php">Cancelar</a></button>
  </div>
  </form>
  <div class="footer">&copy; 2024 - 2024 www.Daniel_CRUDs.com</div>
</body>

</html>