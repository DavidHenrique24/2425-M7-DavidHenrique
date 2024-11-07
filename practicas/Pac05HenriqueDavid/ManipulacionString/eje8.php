<?php
function eliminarEspacios($texto) {
    return trim($texto);
}

$texto = "      Holaaa    ";
echo eliminarEspacios($texto);

?>

