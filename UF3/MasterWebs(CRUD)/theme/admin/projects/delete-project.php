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

// Preparamos la consulta para eliminar el usuario
$stmt = $mysqli->prepare("DELETE FROM Projects WHERE id = ?");
$stmt->bind_param("i", $id);
// Ejecutamos la consulta
if ($stmt->execute()) {
    // Si la ejecución es exitosa, redirigimos al administrador
    header('Location: ../admin.php');
    exit();
} else {
    // Si hay un error al eliminar, mostramos un mensaje de error
    echo 'Error al eliminar el usuario';
}

// Cerramos la declaración y la conexión
$stmt->close();
$mysqli->close();
?>
