<?php
function reemplazarPalabras($texto, $buscar, $reemplazar) {
    return str_replace($buscar, $reemplazar, $texto);
}

$frase = "Hola Juan, que tal estas";
echo reemplazarPalabras($frase, "Juan", "Albert");

?>

