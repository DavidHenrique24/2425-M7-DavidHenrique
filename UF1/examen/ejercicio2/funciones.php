<?php
session_start();
$productos = [
    ['nombre' => 'Platano', 'precio' => '10', 'descripcion' => 'Es una fruta'],
    ['nombre' => 'Leche', 'precio' => '15', 'descripcion' => 'Es liquido'],
    ['nombre' => 'Agua', 'precio' => '7', 'descripcion' => 'Es liquido'],
    ['nombre' => 'Pera', 'precio' => '22', 'descripcion' => 'Es fruta'],
    ['nombre' => 'Manzana', 'precio' => '5', 'descripcion' => 'Es fruta'],
];

function agregar_producto($productos, $nombre, $precio, $descripcion) {
    $productos[] = ['nombre' => $nombre, 'precio' => $precio, 'descripcion' => $descripcion];
    return $productos;
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productos = agregar_producto($productos, $_POST['nombre'], $_POST['precio'], $_POST['descripcion']);
}

// function eliminar_producto($producto){

// }

?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <h1>Ejercicio 2</h1>

<form method="post" action="productos.php">
    <label for="nombre">Nombre del Producto:</label>
    <input type="text" name="nombre" >
    <label for="precio">Precio:</label>
    <input type="text" name="precio" >
    <label for="descripcion">Descripción:</label>
    <input type="text" name="descripcion" >
    <button type="submit">Agregar Producto</button>
</form>

<table class="mt-3">
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Descripción</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <?php foreach ($productos as  $producto): ?>
    <tbody>
    <tr>
        <td><?php echo $producto['nombre']; ?></td>
        <td><?php echo $producto['precio']; ?></td>
        <td><?php echo $producto['descripcion']; ?></td>
    </tr>
    </tbody>
    <?php endforeach; ?>
</table>


</body>
</html>