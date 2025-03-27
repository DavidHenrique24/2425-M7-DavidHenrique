<?php
session_start();
require_once '../../config.php';

// 1. Verificar si el usuario es administrador
if (!isset($_SESSION['user_rol']) || $_SESSION['user_rol'] !== 'admin') {
    echo 'No tienes permisos para acceder a esta página';
    echo '<img src="https://i.blogs.es/d86db0/meme-fry-1/1366_2000.jpg" alt="No tienes permisos">';
    exit;
}

// 2. Comprobar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $model = $_POST['model'];
    $categoria = $_POST['categoria'] ;
    $imatge = $_POST['imatge'] ;
    $disponible = $_POST['disponible'] ;

       $stmt = $mysqli->prepare(
            "INSERT INTO VEHICLES (model, categoria, imatge, disponible) 
            VALUES (?, ?, ?, ?)"
        );

        //  Comprobar si la preparación fue exitosa
        if (!$stmt) {
            echo 'Error en la preparación de la consulta: ' . $mysqli->error;
            exit;
        }

        // Bindear los parámetros
      $stmt->bind_param('ssss', $model, $categoria, $imatge, $disponible);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            // 8. Redirección tras éxito
            header('Location: ../admin.php');
            exit;
        } else {
            echo 'Error al agregar el proyecto: ' . $stmt->error;
        }

        //  Cerrar la declaración 
        $stmt->close();
    
}

// 10. Cerrar la conexión con la base de datos
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://noticias.coches.com/wp-content/uploads/2020/08/coches.com_quien-es-rayo-mcqueen-cars-10.jpeg'); 
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #fff;
        }
        .container {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="mb-4">
            <a href="../admin.php"><button class="btn btn-secondary">Volver</button></a>
        </div>
        
        <h1 class="text-center mb-4">Agregar Auto</h1>
        <form action="" method="POST" class="bg-white p-4 rounded shadow-sm text-black">
            <div class="mb-3">
                <label for="model" class="form-label">Modelo: </label>
                <input type="text" name="model" id="model" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="categoria" class="form-label">Categoria: </label>
                <textarea name="categoria" id="categoria" class="form-control" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <label for="preu_dia" class="form-label">Precio actual: </label>
                <input type="float" name="preu_dia" id="preu_dia" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="imatge" class="form-label">Imagen: </label>
                <textarea name="imatge" id="imatge" class="form-control" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <label for="disponible" class="form-label">Disponibilidad: </label>
                <select name="disponible" id="disponible" class="form-control" required>
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                </select>
            </div>

                <button type="submit" class="btn btn-primary">Agregar Vehiculo</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
