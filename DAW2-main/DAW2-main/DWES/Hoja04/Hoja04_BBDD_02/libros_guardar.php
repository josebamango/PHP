<?php
require_once "funcionesBaseDatosPDO.php";

if (isset($_POST["guardar"])) {
    $titulo = $_POST["titulo"];
    $edicion = $_POST["añoEdicion"];
    $precio = $_POST["precio"];
    $adquisicion = $_POST["fechaAdquisicion"];
    if (comprobarFecha($adquisicion)) {
        if (insertarLibro($titulo, $edicion, $precio, $adquisicion)) {
            $texto = "Datos guardados correctamente";
        } else {
            $texto = "Error al insertar el libro";
        }
    } else {
        $texto = "Fecha introducida incorrecta";
    }

}
function comprobarFecha($fecha)
{
    $auxDate = explode('-', $fecha);
    if (count($auxDate) === 3) {
        return checkdate($auxDate[1], $auxDate[2], $auxDate[0]);
    }
    return false;
}



?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
</head>
<body>
<div class="container">
    <a href="libros.php"><button class="btn btn-primary">VOLVER</button></a>
    <h3><?= (isset($_POST["guardar"])) ? $texto : "" ?></h3>

</div>
</body>
</html>
