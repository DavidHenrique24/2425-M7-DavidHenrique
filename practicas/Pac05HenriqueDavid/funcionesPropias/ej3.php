<?php
    $limite = 20;
    $texto = "Texto exageradamente pero muy exageradamente largoooooo ";
    
    function generarResumen($texto, $limite) {
        if (strlen($texto) > $limite) {
            return substr($texto, 0, $limite) . "...";
        } else {
            return $texto;
        }
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcion parametro</title>
</head>
<body>
    <?php echo generarResumen($texto, $limite); ?>
</body>
</html>
