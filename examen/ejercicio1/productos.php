<?php
session_start();
require_once 'header.php';
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
</head>
<body>
<h1>Bienvenido a productos, 
    <?php 
    if (isset($_SESSION['nombre'])) {
        echo $_SESSION['nombre'] . ' ' . $_SESSION['apellido']; 
    } else {
        echo 'Invitado';  // Si no está logueado, se muestra "Invitado"
    }
    ?>
</h1>


</body>
</html>