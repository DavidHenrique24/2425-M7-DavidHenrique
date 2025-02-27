<?php 
session_start();
require_once '/workspaces/2425-M7-DavidHenrique/UF3/MasterWebs(CRUD)/theme/config.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarjeta de Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<header class="container-fluid bg-light py-3 bg-dark text-white p-2">
    <div class="container">
        <div class="row align-items-center ">
            <div class="col-md-6">
                <h1 class="h3">Tarjeta de Datos</h1>
            </div>
            <div class="col-md-6 text-md-end">
                <nav class="d-flex align-items-center justify-content-end gap-3">
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <div class="d-flex align-items-center gap-2">
                            <img src="<?= !empty($_SESSION['user_avatar']) ? $_SESSION['user_avatar'] : 'ruta-a-imagen-por-defecto.jpg'; ?>" 
                                 alt="Avatar de <?= htmlspecialchars($_SESSION['user_name']); ?>" 
                                 class="rounded-circle" 
                                 style="width: 40px; height: 40px; object-fit: cover;">
                            <span class="fw-bold"><?= htmlspecialchars($_SESSION['user_name']); ?></span>
                       
                            <?php if ($_SESSION['user_rol'] === 'admin') : ?>
                                <a href="./admin/admin.php" class="ms-2">
                                    <img src="https://cdn-icons-png.flaticon.com/512/58/58308.png" 
                                         alt="Icono de administrador" 
                                         class="rounded" 
                                         style="width: 40px; height: 40px; object-fit: cover;">
                                </a>
                            <?php endif; ?>
                            <a href="logout.php" class="btn btn-outline-danger btn-sm">Cerrar Sesión</a>
                        </div>
                    <?php else: ?>
                        <a href="login.php" class="btn btn-primary btn-sm">Iniciar Sesión</a>
                        <a href="register.php" class="btn btn-success btn-sm">Registrarse</a>
                    <?php endif; ?>
                </nav>
            </div>
        </div>
    </div>
</header>
</body>
</html>
