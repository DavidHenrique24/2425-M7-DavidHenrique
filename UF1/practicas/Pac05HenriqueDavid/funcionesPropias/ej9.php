<?php
function convertirHorasMinutos($horas) {
    $minutos = $horas * 60;
    return "{$horas} horas son {$minutos} minutos.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones Propias</title>
</head>
<body>
    <?php 
    $horas = 2;
    echo convertirHorasMinutos($horas); 
    ?>
</body>
</html>
