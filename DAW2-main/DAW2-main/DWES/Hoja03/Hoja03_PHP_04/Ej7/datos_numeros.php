<?php
$mayor = $_POST["mayor"];
$menor = $_POST["menor"];

function listaNumeros($numMayor, $numMenor) {
    if ($numMayor < $numMenor) {
        $aux = $numMayor;
        $numMayor = $numMenor;
        $numMenor = $aux;
    }
    $auxMenor = $numMenor;
    $auxMayor = $numMayor;
    do {
        print "($auxMenor, $auxMayor) ";
        $auxMenor++;
        $auxMayor--;
    } while ($auxMenor <= $numMayor);
}
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Numeros</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
</head>

<body class="container">
    <div class="row border p-3 mt-5">
        <div class="col">
            <div class="row">
                <h2>Lista de pares de numeros de <?php print "$menor y $mayor"?>:</h2>
            </div>
            <div class="row pt-3 pb-3">
                <?php listaNumeros($mayor, $menor) ?>
            </div>
            <div class="row">
                <a href="numeros.html"><button class="btn btn-primary">VOLVER</button></a>
            </div>
        </div>

    </div>
</body>
<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>

</html>