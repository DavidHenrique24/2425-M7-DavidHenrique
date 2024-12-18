<?php
        function generarEnlaceDescarga($archivo){
            $archivo = "archivo.html";
            return('<a href="descarga.html"><button">Descarga sin virus 100% real</button></a>');
        };
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcion Parametros</title>
</head>
<body>
    <?php echo generarEnlaceDescarga($archivo);?>
</body>
</html>