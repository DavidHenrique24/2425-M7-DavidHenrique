<?php
session_start();

$usuarios = [
    ["usuario" => "admin", "contraseña" => "1234",],
    ["usuario" => "usuario", "contraseña" => "usu"]
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['nombre'];  
    $contrasena = $_POST['contraseya'];  


    foreach ($usuarios as $usuarioArray) {
        if ($usuarioArray['usuario'] == $usuario && $usuarioArray['contraseña'] == $contrasena) {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['contrasena'] = $contrasena;
            $_SESSION['urlFoto'] = $_POST['urlFoto'];  
            header('Location: home.php');
            exit;
        }
    }
    $error = 'Usuario o contraseña incorrectos';
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <section>
        <!-- Sección de inicio de sesión -->
        <div class="signin">
            <div class="content text-center">
                <h2>Inicia sesión</h2>
                <form method="POST" action="login.php">
                    <div class="inputBox">
                        <input class="p-2 m-2" placeholder="Usuario" type="text" name="nombre" required>
                    </div>
                    <div class="inputBox">
                        <input class="p-2 m-2" placeholder="Contraseña" type="password" name="contraseya" required>
                    </div>
                    <div class="inputBox">
                        <input class="p-2 m-2" placeholder="Foto" type="text" name="urlFoto" required>
                    </div>

                    <?php if (!empty($error)) : ?>
                        <div class="alert alert-danger"><?= $error ?></div>
                    <?php endif; ?>

                    <div class="inputBox">
                        <input class="bg-warning btn mt-2" type="submit" value="Iniciar sesión">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
