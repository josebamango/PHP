<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
        $numero = 343343;
        $inverso = 0;
        $aux = $numero;
        while ($aux != 0) {
            $resto = $aux % 10;
            $inverso = $inverso * 10 + $resto;
            $aux = (int) ($aux / 10);
        }

        if ($numero == $inverso) {
            print "El numero es capicua";
        } else {
            print "El numero no es capicua";
        }

        // Empece a hacer substrings pero me quede a medias porque no sabia usar la funcion
        // $longitud = strlen($numero);
        // $i = 0;
        // $j = $longitud;
        // $aux = 0;
        
        // for ($i=0; $i < $longitud; $i++&&$j--) { 
        //     if (substr($numero, $i, $i+1) == substr($numero, $j-1, $j)) {
        //         $aux++;
        //     }
        // }
        // if ($aux == $longitud) {
        //     print "El $numero es capicua.";
        // } else {
        //     print "El $numero no es capicua.";
        // }


    ?>
</body>
</html>