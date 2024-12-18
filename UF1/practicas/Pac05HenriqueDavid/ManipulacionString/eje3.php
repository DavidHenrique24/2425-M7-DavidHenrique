<?php
function obtenerSubcadena($texto, $inicio, $longitud) {
    return substr($texto, $inicio, $longitud);
}
$cadena = "Hola Mundo que tal";
echo obtenerSubcadena($cadena, 0, 4); 
?>
