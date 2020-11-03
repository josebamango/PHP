<?php

function getConexion()
{
    $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    $conexion = new PDO('mysql:host=localhost;dbname=dwes_01_nba', 'root', '', $opciones);
    //unset($conexion);
    return $conexion;
}

$conexion = getConexion();

function getEquipos($conexion)
{
    $equipos = $conexion->query('SELECT nombre FROM equipos')->fetchAll();
    return $equipos;
}
function getJugadores($conexion, $equipos)
{
    $jugadores = $conexion->query('SELECT nombre, peso FROM jugadores WHERE nombre_equipo="' . $equipos . '"')->fetchAll();

    return $jugadores;
}

?>



<?php
if (isset($_POST)) {
    $equipos = $_POST["equipos"];
    $jugadores = getJugadores($conexion, $equipos);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipos NBA</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
</head>

<body>

    <div class="container">

        <div class="row justify-content-center mt-5 mb-5">
            <div class="col-6">
                <p class="display-4 text-center text-primary">Vaina de la vaina</p>
                <form action='<?php echo $_SERVER['PHP_SELF'] ?>' class="border border-success pt-2 px-2 pb-5" method="POST">
                    <div class="form-control">
                        <label for="equipos">Equipos: </label>
                        <select name="equipos" id="equipos" class="form-control border border-success text-center">
                            <?php foreach (getEquipos($conexion) as $key) : ?>
                                <?php if ($key["nombre"] == $nombre) : ?>

                                    <option value="<?= $key["nombre"]; ?>" selected> <?= $key["nombre"] ?> </option>

                                <?php else : ?>

                                    <option value="<?= $key["nombre"]; ?>"> <?= $key["nombre"] ?> </option>

                                <?php endif; ?>

                            <?php endforeach; ?>
                        </select>
                        <input type="submit" id="boton" value="mostrar" class="btn btn-success mt-2 text-center">
                    </div>
                    <div class="form-control  mt-2">
                        <table class="table table-striped table-success table-hover text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Peso</th>
                                </tr>
                            </thead>
                            <?php foreach ($jugadores as $jugador) : ?>

                                <tr>
                                    <td>
                                        <?= $jugador["nombre"] ?>
                                    </td>
                                    <td>
                                        <?= $jugador["peso"] . " kg" ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>

</html>