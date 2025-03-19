<?php
session_start();
require_once 'config.php';

// 1. Comprobar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 2. Recoger datos del formulario en variables
    $email = $_POST['email'];
    $password = $_POST['password'];

    // 3. Ejecutar la consulta
    $result = mysqli_query($mysqli, "SELECT * FROM Users WHERE email = '$email' LIMIT 1");

    // 4. Comprobar si hay resultados
    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // 5. Comprobar si la contraseña es correcta
        if (password_verify($password, $user['password'])) {
            // 6. Guardar el usuario en la sesión
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_surname'] = $user['surname'];
            $_SESSION['user_avatar'] = $user['avatar'];
            $_SESSION['user_rol'] = $user['rol'];
            $_SESSION['user_age'] = $user['age'];
            $_SESSION['user_date_register'] = $user['date_register'];

            // 7. Redirigir al usuario a la página de inicio
            header('Location: index.php');
            exit;
        } else {
            $error = 'Contraseña incorrecta.';
        }
    } else {
        $error = 'Usuario no encontrado.';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100" style="background-color: rgba(26, 15, 87, 0.99);">
    <div class="bg-white p-4 rounded shadow text-center" style="width: 400px;">
        <h1 class="text-dark">Inicio de Sesión</h1>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label fw-bold">Correo electrónico</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label fw-bold">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>

            <input type="submit" value="Iniciar sesión" class="btn btn-primary w-100">
        </form>

        <!-- Mensaje de error -->
        <?php if (!empty($error)) : ?>
              <div class="alert alert-danger mt-4"><?php echo $error; ?></div>
        <?php endif; ?>
    </div>
</body>
</html>
