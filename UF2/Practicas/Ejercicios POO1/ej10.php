<?php

// Definimos la clase Animal
class Animal
{
    public string $nombre;
    public string $tipo;

    public function __construct($nombre, $tipo)
    {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
    }

    public function describir()
    {
        return "El animal es un " . $this->tipo . " llamado " . $this->nombre . ".";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];

    $animal = new Animal($nombre, $tipo);
    $descripcion = $animal->describir();
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>

    <form method="post" action="">
        <label for="nombre">Nombre del animal:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="tipo">Tipo de animal:</label>
        <input type="text" id="tipo" name="tipo" required><br><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
    if (isset($descripcion)) {
        echo "<h2>Descripción:</h2>";
        echo "<p>" . $descripcion . "</p>";
    }
    ?>

</body>

</html>
