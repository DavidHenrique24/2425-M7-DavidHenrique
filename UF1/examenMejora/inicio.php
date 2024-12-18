<?php
session_start();

$usuarioLogueado = isset($_SESSION['user']);
$esAdmin = $usuarioLogueado && $_SESSION['user']['role'] === 'admin';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida al Trivial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 3rem;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .gear-icon {
            font-size: 1.5rem;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header text-center">
            <h1>Bienvenido al Trivial</h1>
            <a href="<?php echo $usuarioLogueado ? ($esAdmin ? 'manage.php' : '#') : 'login.php'; ?>" class="gear-icon">⚙️</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-7mAtNCa/1peO6BvXpiv3zztYttbxxyyIq/fUlr+zyXK8Q+fz3qO7X1+MNq/oVGig" crossorigin="anonymous"></script>
</body>
</html>
