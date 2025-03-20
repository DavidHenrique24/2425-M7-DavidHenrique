<?php
require_once '../../config.php';

if (!isset($_GET['id'])) {
    header('Location:../admin.php');
    exit();
}

$id = (int) $_GET['id'];
$result = $mysqli->query("SELECT * FROM Users WHERE id = $id");

$user = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los valores del formulario de forma correcta
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $avatar = $_POST['avatar'];
    $rol = $_POST['rol'];
    $age = $_POST['age'];

    // Preparar la consulta SQL para evitar inyecciones
    $query = "UPDATE Users SET name = ?, surname = ?, email = ?, avatar = ?, rol = ?, age = ? WHERE id = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('ssssssi', $name, $surname, $email, $avatar, $rol, $age, $id);
    $stmt->execute();

    // Redirigir después de actualizar
    header('Location: ../admin.php'); // Cambia la URL de destino si es necesario
    exit();
}
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <!-- Incluir Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Fondo de pantalla */
        body {
            background-image: url('https://images7.alphacoders.com/108/1087509.jpg'); 
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #fff; /* Asegura que el texto sea legible sobre el fondo */
        }
        .container {
            background-color: rgba(0, 0, 0, 0.6); /* Fondo oscuro semitransparente para mejorar la visibilidad del texto */
            padding: 20px;
            border-radius: 8px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container mt-5">
    <div class="mb-4">
            <button class="btn btn-secondary" onclick="window.history.back();">Volver</button>
        </div>
        
        <h1 class="text-center mb-4">Editar Usuario <?= ($user['name']) ?></h1>
        <form action="" method="POST" class="bg-white p-4 rounded shadow-sm text-black">
            <div class="mb-3 text-black">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="<?= ($user['name']) ?>" required>
            </div>

            <div class="mb-3">
                <label for="surname" class="form-label">Apellido</label>
                <input type="text" name="surname" id="surname" class="form-control" value="<?= ($user['surname']) ?>" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" name="email" id="email" class="form-control" value="<?= ($user['email']) ?>" required>
            </div>

            <div class="mb-3">
                <label for="avatar" class="form-label">Avatar</label>
                <input type="text" name="avatar" id="avatar" class="form-control" value="<?= ($user['avatar']) ?>" required>
            </div>

            <div class="mb-3">
                <label for="rol" class="form-label">Rol</label>
                <input type="text" name="rol" id="rol" class="form-control" value="<?= ($user['rol']) ?>" required>
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">Edad</label>
                <input type="number" name="age" id="age" class="form-control" value="<?= ($user['age']) ?>" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
        </form>
    </div>

    <!-- Incluir Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQdp9JpMzBl5l8dOT+EhvGkJ9t3M5j6i4n74HgZZgu2tNAltyISjQOowhJdhCgp5" crossorigin="anonymous"></script>
</body>
</html>
