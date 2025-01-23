<?php
include 'baraja.class.php';

//Crear nueva clase baraja
$baraja = new Baraja();


$baraja->crear_baraja();

// Mezclar la baraja
$baraja->mezcla();

$baraja->pinta_baraja();


?>
