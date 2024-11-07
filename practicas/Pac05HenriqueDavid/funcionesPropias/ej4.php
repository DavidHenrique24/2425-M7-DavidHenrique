<?php
function convertirTemperatura($temperatura, $escala) {
    if ($escala == 'C') {   // De farem a celciu
        return ($temperatura - 32) * 5 / 9;
    } elseif ($escala == 'F') {
        return ($temperatura * 9 / 5) + 32;
    } else {
        return "Escala no válida. Usa 'C' o 'F'.";
    }
}
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcion parametro</title>
</head>
<body>
<?php

echo convertirTemperatura(100, 'C'); 
echo convertirTemperatura(30, 'F'); 
?>
</body>
</html>