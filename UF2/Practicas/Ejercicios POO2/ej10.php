<?php

class Producto
{
    public string $nombre;
    public string $precio;

    public function __construct($nombre, $precio)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getPrecio()
    {
        return $this->precio;
    }
}

// Crear algunos productos
$productos = [
    new Producto("Mando", 15.99),
    new Producto("Control", 30.99),
    new Producto("dispositivo", 89.99),

];

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sius</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($productos as $producto) {
                echo "<tr>";
                echo "<td>" . $producto->getNombre() . "</td>";
                echo "<td>" . $producto->getPrecio() . " 2€</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>