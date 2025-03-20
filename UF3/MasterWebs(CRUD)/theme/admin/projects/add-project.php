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
            echo 'Proyecto agregado con éxito';
            $stmt->close();
            $mysqli->close();
            header("Location: proyectos.php"); // Redirigir después de agregar el proyecto
            exit;
        } else {
            echo 'Error al agregar el proyecto: ' . $mysqli->error;
        }

        // 9. Cerrar la declaración y la conexión
        $stmt->close();
    }
}

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Proyecto</title>
</head>
<body>

<h1>Agregar Proyecto</h1>
<form action="" method="POST">
    <label for="title">Título</label><br>
    <input type="text" name="title" id="title" required><br><br>

    <label for="url">URL</label><br>
    <textarea name="url" id="url" cols="30" rows="4" required></textarea><br><br>

    <label for="thumbnail">Thumbnail (URL de la imagen)</label><br>
    <input type="text" name="thumbnail" id="thumbnail" required><br><br>

    <label for="description">Descripción</label><br>
    <textarea name="description" id="description" rows="4" required></textarea><br><br>

    <input type="submit" value="Agregar proyecto">
</form>

</body>
</html>
