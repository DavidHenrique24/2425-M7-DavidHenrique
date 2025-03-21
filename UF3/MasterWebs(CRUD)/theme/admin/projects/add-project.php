<?php
session_start();
require_once '/workspaces/2425-M7-DavidHenrique/UF3/MasterWebs(CRUD)/theme/config.php';

// 1. Verificar si el usuario es administrador
if (!isset($_SESSION['user_rol']) || $_SESSION['user_rol'] !== 'admin') {
    echo 'No tienes permisos para acceder a esta página';
    echo '<img src="https://i.blogs.es/d86db0/meme-fry-1/1366_2000.jpg" alt="">';
    exit;
}

// 2. Comprobar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 3. Recoger datos del formulario y validar que existan
    $title = isset($_POST['title']) ? trim($_POST['title']) : '';
    $url = isset($_POST['url']) ? trim($_POST['url']) : '';
    $thumbnail = isset($_POST['thumbnail']) ? trim($_POST['thumbnail']) : '';
    $description = isset($_POST['description']) ? trim($_POST['description']) : '';

    // 4. Validar que los campos no estén vacíos
    if (empty($title) || empty($url) || empty($thumbnail) || empty($description)) {
        echo 'Todos los campos son obligatorios.';
    } else {
        // 5. Preparar la consulta para evitar SQL injection
        $stmt = $mysqli->prepare(
            "INSERT INTO Projects (title, url, thumbnail, description) 
            VALUES (?, ?, ?, ?)"
        );

        // 6. Comprobar si la preparación fue exitosa
        if (!$stmt) {
            echo 'Error en la preparación de la consulta: ' . $mysqli->error;
            exit;
        }

        // 7. Bindear los parámetros
        $stmt->bind_param('ssss', $title, $url, $thumbnail, $description);

        // 8. Ejecutar la consulta
        if ($stmt->execute()) {
            // Realiza la redirección inmediatamente después de ejecutar la consulta
            header('Location: ../admin.php'); 
            exit; 
        } else {
            echo 'Error al agregar el proyecto: ' . $mysqli->error;
        }

        // 9. Cerrar la declaración y la conexión
        $stmt->close();
    }
}

// 10. Cerrar la conexión con la base de datos
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Proyecto</title>
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
            background-color: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="mb-4">
            <button class="btn btn-secondary" onclick="window.history.back();">Volver</button>
        </div>
        
        <h1 class="text-center mb-4">Agregar Proyecto</h1>
        <form action="" method="POST" class="bg-white p-4 rounded shadow-sm text-black">
            <div class="mb-3">
                <label for="title" class="form-label">Título</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="url" class="form-label">URL</label>
                <textarea name="url" id="url" class="form-control" rows="4" required></textarea>
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
                <button type="submit" class="btn btn-primary">Agregar Proyecto</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
