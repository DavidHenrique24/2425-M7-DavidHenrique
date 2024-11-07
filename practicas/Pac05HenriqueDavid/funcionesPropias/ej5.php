<?php
    function calcularEdad($anioNacimiento){
        $anioActual = 2024;
        $edadResult = $anioActual - $anioNacimiento;
        $frase = "mi edad actual es {$edadResult}";
        return $frase;
    }
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcion parametro</title>
</head>
<body>
    <?php echo calcularEdad(2005); ?>
</body>
</html>