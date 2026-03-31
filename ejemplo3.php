<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejemplo con xml</title>
</head>
<body>
    <?php
     $xml = simplexml_load_file ("xml.xml");
     foreach ($xml->color as $color){
        echo "El color " . $color->nombre . " tiene el código hexadecimal " . $color->codigo_hexadecimal . "<br>";
        }
    ?>
  
    
</body>
</html>