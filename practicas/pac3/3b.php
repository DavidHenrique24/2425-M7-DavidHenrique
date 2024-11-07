<?php 
// Array de frutas para gestionar las frutas
$frutas = [
    ["nombre" => "Manzana", "estado" => false, "imagen" => "https://static.vecteezy.com/system/resources/previews/023/858/853/non_2x/ai-genrative-green-apple-free-png.png"],
    ["nombre" => "Plátano", "estado" => false, "imagen" => "https://biovergel.es/wp-content/uploads/2020/04/platanos-de-canarias.jpg"],
    ["nombre" => "Naranja", "estado" => false, "imagen" => "https://www.ammarket.com/wp-content/uploads/2021/12/NARANJA_MESA_AMMARKET.COM_2.jpg"],
    ["nombre" => "Fresa", "estado" => false, "imagen" => "https://libbys.es/wordpress/wp-content/uploads/2018/05/fresas.jpg"],
    ["nombre" => "Kiwi", "estado" => false, "imagen" => "https://vegadeaguin.com/wp-content/uploads/2021/09/home_producto_kiwi.jpg"]
];

// Verifica si se ha seleccionado alguna fruta y actualiza su estado
if (isset($_GET['fruta'])) {
    $frutaSeleccionada = $_GET['fruta'];

    // Desmarcar todas las frutas y marcar solo la seleccionada
    foreach ($frutas as &$fruta) { // Pasamos la fruta a ser seleccionada y se ponga verde
        $fruta['estado'] = ($fruta['nombre'] == $frutaSeleccionada);
    }
    unset($fruta); // Para evitar errores con las frutas (Busque por chatgpt esto)
}

// Función para mostrar las frutas en la tabla
function mostraFrutas($frutas) {
    foreach ($frutas as $fruta) {
        // Verificar estado y clase
        if ($fruta['estado'] == true) {
            $estado = '✔ Seleccionada';  
            $clase = 'table-success';    
        } else {
            $estado = '✖ No seleccionada';  
            $clase = 'table-danger';       
        }
  //la tabla mostrando la fruta, y la imagen, url code lo que hace es llamar el link de la fruta
        echo "<tr class='$clase'>
                <td>{$fruta['nombre']}</td>
                <td>$estado</td>
                <td><a class='btn btn-primary' href='?fruta=" . urlencode($fruta['nombre']) . "'>Seleccionar</a></td>  
              </tr>";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Frutas favoritas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Selecciona tu fruta favorita</h1>

        <!-- Tabla que muestra las frutas -->
        <table class="table table-bordered mt-4">
            <thead class="thead-dark">
                <tr>
                    <th>Fruta</th>
                    <th>Estado</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php mostraFrutas($frutas); ?>  
            </tbody>
        </table>

        <!-- Mostrar la tarjeta de la fruta seleccionada -->
        <?php if (isset($frutaSeleccionada)): ?>
            <?php foreach ($frutas as $fruta): ?> 
                <?php if ($fruta['estado'] == true): ?>
                    <div class='card mt-4 w-25 shadow-lg'>
                        <img src='<?= $fruta["imagen"] ?>' class='card-img-top'>
                        <div class='card-body bg-warning'>
                            <h5 class='card-title'><?= $fruta["nombre"] ?></h5>
                            <p class='card-text'>¡Esta es tu fruta favorita!</p>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</body>
</html>
