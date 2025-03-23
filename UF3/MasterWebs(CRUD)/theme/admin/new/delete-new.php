<?php
session_start();
require_once '../../config.php';

// Verificamos que el ID esté presente
if (!isset($_GET['id'])) {
    header('Location: ../../login.php');
    exit();
}

// Recuperamos el ID del usuario
$id = (int)$_GET['id']; 

// Verificamos que la conexión a la base de datos esté activa
if (!$mysqli) {
    die("Error de conexión a la base de datos: " . $mysqli->connect_error);
}

// Preparamos la consulta para eliminar la noticia
$stmt = $mysqli->prepare("DELETE FROM News WHERE id = ?");
if (!$stmt) {
    die("Error al preparar la consulta: " . $mysqli->error);
}

// Vinculamos el parámetro
$stmt->bind_param("i", $id);

// Ejecutamos la consulta
if ($stmt->execute()) {
    // Si la ejecución es exitosa, redirigimos al administrador
    header('Location: ../admin.php');
    exit();
} else {
    // Si hay un error al eliminar, mostramos un mensaje de error
    echo 'Error al eliminar la noticia: ' . $stmt->error;
}

// Cerramos la declaración y la conexión
$stmt->close();
$mysqli->close();
?>
