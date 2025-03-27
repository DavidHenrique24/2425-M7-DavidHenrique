<?php
session_start();
require_once '../../config.php';
if (!isset($_SESSION['user_rol']) || $_SESSION['user_rol'] !== 'admin') {
    echo 'No tienes permisos para acceder a esta página';
    echo '<img src="https://i.blogs.es/d86db0/meme-fry-1/1366_2000.jpg" alt="No tienes permisos">';
    exit;
}

if (!isset($_GET['id'])) {
    header('Location: ../../login.php');
    exit();
}

$id = (int)$_GET['id']; 


$stmt = $mysqli->prepare("DELETE FROM VEHICLES WHERE id = ?");
$stmt->bind_param("i", $id);
// Ejecutamos la consulta
if ($stmt->execute()) {
  
    header('Location: ../admin.php');
    exit();
} else {
   
    echo 'Error al eliminar el Vehicle';
}

// Cerramos la declaración y la conexión
$stmt->close();
$mysqli->close();
?>
