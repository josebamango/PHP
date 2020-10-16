<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
</head>

<body>
    <h1>PELICULAS MUY MACHETES</h1>
    <form action="#" method="POST">
        <label for="buscar">Buscador</label>
        <input type="search" name="buscador" id="buscardor"><br><br>
        <input type="submit" name="enviar" id="enviar">



    </form>

    <?php

    $peliculas = [
        "Scarface", "SAW", "Scent of a Woman", "North by Northwest",
        "Godfellas", "The Usual Suspects", "Pulp Fiction", "Good Will Hunting",
        "La ventana indiscreta", "The King of Comedy", "The Irishman",
        "Uncut Gems", "The Lighthouse", "Jackie Brown"
    ];

    $buscador = $_POST["buscador"];
    foreach ($peliculas as $item) {
        $titulo = $item;
        if (strpos($titulo, $buscador) != false) {
            $coincidencias[] = $titulo;
        }
    }
    echo $coincidencias;

/*
    function busqueda($arrayPeliculas)
    {
        $resultado = array();
        if (isset($_REQUEST["pelicula"])) {
            $busqueda = $_REQUEST["pelicula"];
            foreach ($arrayPeliculas as $nombrePelicula) {
                if (strpos($nombrePelicula, $busqueda) === false) {
                } else {
                    $resultado[] = $nombrePelicula;
                };
            }
            return $resultado;
        }
    }
*/

    ?>
</body>

</html>