<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 1</title>
</head>
<body>
       
<form name="formulario" action="0.13-php-foreach-post-get.php" method="POST">
Introduce tu nombre: <input type="text" name="nombre">
Introduce la edad: <input type="text" name="edad">
<input type="submit"value="Enviar">
</form>

<?php
if ($_POST)
    {
    foreach ($_POST as $clave=>$valor)
        {
            echo "El valor de $clave es: $valor";
        }    
    }
?>
</body>
</html>