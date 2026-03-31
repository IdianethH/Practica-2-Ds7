<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de recorrer arreglos</title>
</head>
<body>
<?php
$equipo = array("portero" => "Cech", "defensa" => "Terry", "medio" => "Lampard", "delantero" => "Torres");

foreach($equipo as $posicion => $jugador)
{
    echo "El " . $posicion . " es " . $jugador;
}

?>    
</body>
</html>