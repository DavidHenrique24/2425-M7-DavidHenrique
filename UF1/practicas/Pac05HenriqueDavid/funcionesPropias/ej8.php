<?php
        function calcularDescuento($precioOriginal, $descuento){
            $descuento = 0.75; 
            $precioOriginal = 20;
            $resultado = $precioOriginal * $descuento;
            return("el descuento de 25% del precio de {$precioOriginal} es {$resultado}");
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
  <?php echo calcularDescuento($precioOriginal, $descuento); ?>
</body>
</html>