<?php
session_start();
require_once 'header.php';
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
<h1>Bienvenido a Contacto, <?php echo $_SESSION['nombre']. ' ' . $_SESSION['apellido']; ?>

</body>
</html>