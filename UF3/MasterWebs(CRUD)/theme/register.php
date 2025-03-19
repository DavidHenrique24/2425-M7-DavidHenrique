<?php 
session_start();
require_once 'config.php';

// 0. Comprobar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Recoger datos del formulario
    $name = $_POST['name'];
    $surname = $_POST['surname'];  // Recoger apellido
    $email = $_POST['email'];
    $password = $_POST['password'];
    $avatar = $_POST['avatar'];    // Recoger avatar (opcional)
    $age = $_POST['age'];          // Recoger edad
}

// 2. Cifrar la contraseña con password_hash
$passwordHashed = password_hash($password, PASSWORD_DEFAULT);

// 3. Preparar la consulta antes de insertar para evitar SQL injection
$stmt = $mysqli->prepare(
    "INSERT INTO Users (name, surname, email, avatar, password, rol, age, date_register) 
     VALUES (?, ?, ?, ?, ?, 'user', ?, NOW())"
);

// 4. Comprobar que la preparación de la consulta tuvo éxito
if (!$stmt) {
    echo 'Error en la preparación de la consulta: ' . $mysqli->error;
    exit;
}

// 5. Bindear los parámetros
$stmt->bind_param('sssssi', $name, $surname, $email, $avatar, $passwordHashed, $age);

// 6. Ejecutar la consulta
if ($stmt->execute()) {
    echo 'Usuario registrado con éxito';
 
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
                <label for="name" class="form-label fw-bold">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="surname" class="form-label fw-bold">Apellido</label>
                <input type="text" name="surname" id="surname" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label fw-bold">Correo electrónico</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label fw-bold">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="avatar" class="form-label fw-bold">Avatar</label>
                <input type="text" name="avatar" id="avatar" class="form-control">
            </div>

            <div class="mb-3">
                <label for="age" class="form-label fw-bold">Edad</label>
                <input type="number" name="age" id="age" class="form-control" required>
            </div>

            <input type="submit" value="Registrarse" class="btn btn-primary w-100">
        </form>
    </div>
</body>
</html>


