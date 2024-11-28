<?php
session_start();
require_once 'header.php';

?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    
<h1>Bienvenido a index, <?php echo $_SESSION['nombre']. ' ' . $_SESSION['apellido']; ?>!</h1>
<form method="post" action="index.php">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required>
    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" required>
    <label for="urlFoto">UrlFoto: </label>
    <input type="text" name="urlFoto" required>

    <button type="submit">Guardar</button>
</form>
    
</body>
</html>