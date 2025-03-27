<?php 
session_start();
require_once 'config.php';

// 0. Comprobar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Recoger datos del formulario
    $nom = $_POST['nom'];  
    $email = $_POST['email'];
    $contrasenya = $_POST['contrasenya'];
    $imatge_perfil = $_POST['imatge_perfil'];    

}

// 2. Cifrar la contraseña con password_hash
$passwordHashed = password_hash($contrasenya, PASSWORD_DEFAULT);

$stmt = $mysqli->prepare(
    "INSERT INTO USUARIS (nom, email, imatge_perfil, contrasenya, rol) 
        VALUES (?, ?, ?, ?, 'user')"
         );
// 3. Comprobar que la preparación de la consulta tuvo éxito
if (!$stmt) {
    echo 'Error en la preparación de la consulta: ' . $mysqli->error;
    exit;
}

// 4. Bindear los parámetros
$stmt->bind_param('ssss', $nom, $email, $imatge_perfil, $passwordHashed);

// 6. Ejecutar la consulta
if ($stmt->execute()) {
    header('Location: login.php'); 
} 

// 7. Cerrar la declaración
$stmt->close();
$mysqli->close();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100" style="background-color: rgb(22, 11, 87);">
    <div class="bg-white p-4 rounded shadow " style="width: 600px;">
        <h1 class="text-center">Registro</h1>

        <form action="" method="POST">
            <div class="mb-3">
                <label for="nom" class="form-label fw-bold">Nombre</label>
                <input type="text" name="nom" id="nom" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label fw-bold">Correo electrónico</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="contrasenya" class="form-label fw-bold">Contraseña</label>
                <input type="password" name="contrasenya" id="contrasenya" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="imatge_perfil" class="form-label fw-bold">Avatar</label>
                <input type="text" name="imatge_perfil" id="imatge_perfil" class="form-control">
            </div>
            

            <input type="submit" value="Registrarse" class="btn btn-primary w-100">
        </form>
    </div>
</body>
</html>