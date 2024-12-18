<?php 
function esPar($numero){
    if($numero % 2 == 0){
        return "El número {$numero} es par";
    } else {
        return "El número {$numero} es impar";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcion Parametros</title>
</head>
<body>
    <?php 
    $numero = 14; 
    echo esPar($numero); 
    ?>
</body>
</html>
