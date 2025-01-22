<?php
include 'baraja.class.php';

// Crear una instancia de Baraja
$baraja = new Baraja();

// Crear todas las cartas
$baraja->crear_baraja();

// Mezclar la baraja
$baraja->mezcla();

// Mostrar todas las cartas en pantalla

echo "<h1>Baraja Mezclada</h1>";
echo '<div style="display: flex; flex-wrap: wrap; gap: 10px;">';
$baraja->pinta_baraja();
echo '</div>';
?>
