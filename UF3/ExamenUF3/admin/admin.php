<?php
session_start();
require_once '../config.php';

//  Verifica si el rol es administrador
if ($_SESSION['user_rol'] !== 'admin') {
    echo '<h1>No tienes permisos para acceder a esta página</h1>';
    echo '<img src="https://i.blogs.es/d86db0/meme-fry-1/1366_2000.jpg" alt="">';
    exit;
}

$result_vehicles = $mysqli->query("SELECT * FROM VEHICLES ");

?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administracion</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Fondo de pantalla */
        body {
            background-image: url('https://static5.depositphotos.com/1014348/527/i/450/depositphotos_5271996-stock-photo-abstract-night-acceleration-speed-motion.jpg'); 
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #fff; /* Asegura que el texto sea legible sobre el fondo */
        }
        .container {
            background-color: rgba(0, 0, 0, 0.6); /* Fondo oscuro semitransparente para mejorar la visibilidad del texto */
            padding: 20px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    
    <div class="container mt-5">
            <!-- Botón para volver -->
            <div class="mb-4">
            <a href="../index.php" class="btn btn-secondary">Volver</a>
        </div>
        <h1 class="text-center mb-4">Panel de Administrador</h1>
        
        <!-- Autos -->
        <div class="card mb-4">
            <div class="card-header ">
                <h2>Autos Disponibles</h2>
                <a href="./vehicles/add-vehicle.php?>" class="btn btn-warning btn-sm">Agregar Auto</a>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Imagen</th>
                            <th>Modelo</th>
                            <th>Categoria</th>
                            <th>Precio de hoy</th>
                            <th>Disponibilidad</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                      while ($vehicle = $result_vehicles->fetch_assoc()) : ?>
                            <tr>
                                <td><img src="<?= $vehicle['imatge'] ?>" alt="Avatar" class="img-fluid" width="100" height="100"></td>
                                <td><?= ($vehicle['model']) ?></td>
                                <td><?= ($vehicle['categoria']) ?></td>
                                <td><?= ($vehicle['preu_dia']) ?></td>
                                <?php if ($vehicle['disponible'] == 1) {
                  $vehicle['disponible'] = 'Disponible';
                } else {
                  $vehicle['disponible'] = 'No disponible';
                } ?>
                                <td><?= ($vehicle['disponible']) ?></td>
                                <td>
                                    <a href="./vehicles/edit-vehicle.php?id=<?= $vehicle['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                                    <a href="./vehicles/delete-vehicle.php?id=<?=$vehicle['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este usuario?')">Eliminar</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>

          


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0CpOzzIGrgPbGp6vq+hsZ2/DzS09eptChbFZ3w5t7fDz3coP" crossorigin="anonymous"></script>
</body>
</html>
