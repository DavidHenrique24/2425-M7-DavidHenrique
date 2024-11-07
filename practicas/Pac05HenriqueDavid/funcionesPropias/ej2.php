<?php 
$precio = 10;
$cantidad = 3;
$impuesto = 0.21;

function calcularTotal($precio, $cantidad, $impuesto){
    $totalSinImpuesto = $precio * $cantidad;
    $totalConImpuesto = $totalSinImpuesto + ($totalSinImpuesto * $impuesto);
    $frase = "El precio total es {$totalConImpuesto} euros";
    return $frase;
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcion parametro</title>
</head>
<body>
<?php echo calcularTotal($precio, $cantidad, $impuesto); ?>
</body>
</html>