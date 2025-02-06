<?php
session_start();

class Producto
{
    public string $nombre;
    public float $precio;

    public function __construct($nombre, $precio)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getPrecio() //lo agarre del ejercicio anterior
    {
        return $this->precio;
    }
}

class CarritoCompras
{
    public array $productos = [];

    public function agregarProducto(Producto $producto)
    {
        $this->productos[] = $producto;
    }

    public function calcularTotal()
    {
        $total = 0;
        foreach ($this->productos as $producto) {
            $total += $producto->getPrecio();
        }
        return $total;
    }

    public function obtenerProductos()
    {
        return $this->productos;
    }
}

if (!isset($_SESSION['CarritoCompras'])) {
    $_SESSION['CarritoCompras'] = serialize(new CarritoCompras());
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre']) && isset($_POST['precio'])) {
    $producto = new Producto($_POST['nombre'], $_POST['precio']);
    $carret = unserialize($_SESSION['CarritoCompras']);
    $carret->agregarProducto($producto);
    $_SESSION['CarritoCompras'] = serialize($carret);
}

$carret = unserialize($_SESSION['CarritoCompras']); //me ayudo copilot aca
$productos = $carret->obtenerProductos();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego2</title>
</head>

<body>

    <h1>Carrito de Compra</h1>

    <form action="" method="POST">
        <label for="nombre">Nombre del Producto:</label>
        <input type="text" name="nombre" required>
        <br>

        <label for="precio">Precio:</label>
        <input type="number" name="precio" required>
        <br>

        <button type="submit">Añadir al Carrito</button>
    </form>


    <h2>Productos en el Carrito</h2>

    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto) { ?>
                <tr>
                    <td><?php echo ($producto->getNombre()); ?></td>
                    <td><?php echo ($producto->getPrecio()); ?>€</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php 
        $total = $carret->calcularTotal();
        $impuesto = 0.21;
        $totalConImpuesto = $total + ($total * $impuesto);
        $descuento = 0.10;
        $totalConDescuento = $totalConImpuesto - ($totalConImpuesto * $descuento);
        echo round($totalConDescuento, 2);  //Round pa redondear
    ?>
    €</h3>

</body>

</html>
