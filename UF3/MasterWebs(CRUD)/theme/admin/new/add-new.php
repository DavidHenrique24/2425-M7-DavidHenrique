<?php
session_start();
require_once '../../config.php';

// 1. Verificar si el usuario es administrador
if ($_SESSION['user_rol'] !== 'admin') {
    echo 'No tienes permisos para acceder a esta página';
    echo '<img src="https://i.blogs.es/d86db0/meme-fry-1/1366_2000.jpg" alt="">';
    exit;
}

// 2. Comprobar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle']; // Añadir el campo para subtitle
    $thumbnail = $_POST['thumbnail'];
    $description = $_POST['description'];

    // Preparar la consulta para agregar la noticia
    $stmt = $mysqli->prepare(
        "INSERT INTO News (title, subtitle, thumbnail, description) VALUES (?, ?, ?, ?)"
    );

    // Comprobar si la preparación fue exitosa
    if (!$stmt) {
        echo 'Error en la preparación de la consulta: ' . $mysqli->error;
        exit;
    }

    // Vincular los parámetros
    $stmt->bind_param('ssss', $title, $subtitle, $thumbnail, $description);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        header('Location: ../admin.php');
        exit;
    } else {
        echo 'Error al agregar la noticia: ' . $stmt->error;
    }

    // Cerrar la declaración
    $stmt->close();
}

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Noticia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
         body {
            background-image: url('https://images7.alphacoders.com/108/1087509.jpg'); 
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #fff; 
        }
        .container {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="mb-4">
            <a href="../admin.php"><button class="btn btn-secondary">Volver</button></a>
        </div>
        
        <h1 class="text-center mb-4">Agregar Noticia</h1>
        <form action="" method="POST" class="bg-white p-4 rounded shadow-sm text-black">
            <div class="mb-3">
                <label for="title" class="form-label">Título</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="subtitle" class="form-label">Subtítulo</label>
                <input type="text" name="subtitle" id="subtitle" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="thumbnail" class="form-label">Thumbnail (URL de la imagen)</label>
                <input type="text" name="thumbnail" id="thumbnail" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Agregar Noticia</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
