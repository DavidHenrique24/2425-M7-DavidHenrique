<?php
session_start();

$usuarios = [
    ["usuario" => "admin", "contraseña" => "1234"],
    ["usuario" => "jugador", "contraseña" => "5678"]
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['nombre'];  
    $contrasena = $_POST['contraseya'];  

    foreach ($usuarios as $usuarioArray) {
        if ($usuarioArray['usuario'] == $usuario && $usuarioArray['contraseña'] == $contrasena) {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['contrasena'] = $contrasena; 
            if ($usuario === 'admin') {
                $_SESSION['rol'] = 'admin';
            } else {
                $_SESSION['rol'] = 'jugador';
            }

            if ($_SESSION['rol'] === 'admin') {
                header('Location: manage.php');  
            } else {
                header('Location: trivial.php'); 
            }
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background: #f2f2f2;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .signin {
            background: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .signin h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        .inputBox {
            margin-bottom: 1rem;
        }
        .inputBox input {
            width: 100%;
            padding: 0.75rem;
            border-radius: 4px;
            border: 1px solid #ccc;
            margin: 0.5rem 0;
        }
        .inputBox input:focus {
            border-color: #007bff;
            outline: none;
        }
        .alert {
            margin-top: 1rem;
        }
        .btn {
            width: 100%;
        }
    </style>
</head>

<body>
    <section>
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
