<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla_Daniel_CRUDs</title>
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
            margin-top: 200px;
            opacity: .9;
        }

        table {
            background-color: #B9B9B9;
            border: solid #888 .5px;
            border-collapse: collapse;
            margin: auto;
            padding: 10px 12px;
        }

        td {
            border: solid #888 .5px;
            padding: 10px;
            text-align: left;
        }

        th {
            text-align: center;
        }

        tr {
            border-radius: 10px;
        }

        tr:nth-child(odd) {
            background-color: #9C9C9C;
        }

        #eliminar {
            background-color: #F65E3D;
            border: none;
            border-radius: 5px;
            color: white;
            padding: 8px;
            text-decoration: none;
        }

        #actualizar {
            background-color: #3BD5FF;
            border: none;
            border-radius: 5px;
            color: white;
            padding: 8px;
            text-decoration: none;
        }

        #anadir {
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            color: white;
            padding: 8px;
            text-decoration: none;
        }

        a {
            color: whitesmoke;
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
</head>

<body>

    <?php
    $conexion = mysqli_connect('db', 'root', 'test', 'pokemon');
    ?>

    <?php
    if (!isset($_POST['accion'])) {
        $_POST['accion'] = '';
    }

    if ($_POST['accion'] == 'eliminar') {
        $borra = "DELETE FROM pokemon WHERE numPok=\"$_POST[numPok]\"";
        mysqli_query($conexion, $borra);
    }

    if ($_POST['accion'] == 'insertar') {
        $inserta = "INSERT INTO pokemon VALUES (\"$_POST[numPok]\", \"$_POST[nomPok]\", \"$_POST[genPok]\", \"$_POST[tipPok]\")";
        mysqli_query($conexion, $inserta);
    }

    if ($_POST['accion'] == 'actualizar') {
        $actualiza = "UPDATE pokemon SET numPok=\"$_POST[numPok]\", nomPok=\"$_POST[nomPok]\", genPok=\"$_POST[genPok]\", tipPok=\"$_POST[tipPok]\" WHERE numPok=\"$_POST[numPokAntiguo]\"";
        mysqli_query($conexion, $actualiza);
    }

    $consulta = mysqli_query($conexion, "SELECT * FROM pokemon");

    ?>

    <div class="header">
        <h1>Tabla de Pokemons</h1>
    </div>
    <div class="container">
        <table>
            <tr>
                <th>Número de Pokedex</th>
                <th>Nombre</th>
                <th>Género</th>
                <th>Tipo</th>
                <th></th>
                <th></th>
            </tr>
            <?php
            while ($registro = mysqli_fetch_array($consulta)) {
            ?>
                <tr>
                    <td><?= $registro['numPok'] ?></td>
                    <td><?= $registro['nomPok'] ?></td>
                    <td><?= $registro['genPok'] ?></td>
                    <td><?= $registro['tipPok'] ?></td>
                    <td>
                        <form action="tabla1.php" method="post">
                            <input type="hidden" name="accion" value="eliminar">
                            <input type="hidden" name="numPok" value="<?= $registro['numPok'] ?>">
                            <input id="eliminar" type="submit" value="Eliminar" class="btn btn-danger">
                        </form>
                    </td>
                    <td>
                        <form action="modifica_tabla1.php" method="post">
                            <input type="hidden" name="accion" value="actualizar">
                            <input type="hidden" name="numPok" value="<?= $registro['numPok'] ?>">
                            <input type="hidden" name="nomPok" value="<?= $registro['nomPok'] ?>">
                            <input type="hidden" name="genPok" value="<?= $registro['genPok'] ?>">
                            <input type="hidden" name="tipPok" value="<?= $registro['tipPok'] ?>">
                            <input id="actualizar" type="submit" value="Actualizar" class="btn btn-primary">
                        </form>
                    </td>
                </tr>
            <?php
            }
            ?>
            <form action="tabla1.php" method="post">
                <input type="hidden" name="accion" value="insertar">
                <tr>
                    <td><input type="text" name="numPok" size="10" required></td>
                    <td><input type="text" name="nomPok"></td>
                    <td><input type="text" name="genPok"></td>
                    <td><input type="text" name="tipPok" size="14"></td>
                    <td><input id="anadir" type="submit" value="Añadir" class="btn btn-success"></td>
                    <td><a href="./index.php">> Página principal</a></td>
                </tr>
            </form>
        </table>
    </div>

    <div class="footer">&copy; 2024 - 2024 www.Daniel_CRUDs.com</div>
</body>

</html>