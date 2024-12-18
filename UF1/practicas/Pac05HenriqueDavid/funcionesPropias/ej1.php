<?php 

function generarSaludo($nombre){
    $saludo = "Hola, {$nombre}";
    return  $saludo;

}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcion Parametro</title>
</head>
<body>
    <h1>Funciones con parametros</h1>
    <?php echo generarSaludo("Juan");?>
</body>
</html>