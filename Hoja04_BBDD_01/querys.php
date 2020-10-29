    <?php
    require_once "conexionBD.php";

    function getEquipos()
    {
        $conexionNBA = getConexion("dwes_01_nba");
        $resultado = $conexionNBA->query("SELECT nombre FROM equipos");
        unset($conexionNBA);
        return $resultado;
    }
 

    function getJugadores($equipo)
    {
        $conexionNBA = getConexion("dwes_01_nba");
        $consulta = $conexionNBA->exec("SELECT nombre FROM jugadores WHERE nombre_equipo='" . $equipo . "'");
        unset($conexionNBA);
        return $consulta;

    }


    ?>
