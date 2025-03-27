<?php
session_start();
require_once '../../config.php';

if (!isset($_SESSION['user_rol']) || $_SESSION['user_rol'] !== 'admin') {
    echo 'No tienes permisos para acceder a esta página';
    echo '<img src="https://i.blogs.es/d86db0/meme-fry-1/1366_2000.jpg" alt="No tienes permisos">';
    exit;
}


$id = (int) $_GET['id'];
$result = $mysqli->query("SELECT * FROM VEHICLES WHERE id = $id");

$user = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $model = $_POST['model'];
    $categoria = $_POST['categoria'] ;
    $imatge = $_POST['imatge'] ;
    $disponible = $_POST['disponible'] ;

    $query = "UPDATE VEHICLES SET model = ?, categoria = ?, preu_dia = ?, imatge = ?, disponible = ? WHERE id = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('ssdsii', $model, $categoria, $preu_dia, $imatge, $disponible, $id);
    $stmt->execute();

    header('Location: ../admin.php'); 
    exit();
}
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta model="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Vehiculo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url('https://img.freepik.com/fotos-premium/fondo-pantalla-coleccion-autos-deportivos_970779-1408.jpg'); 
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #fff; 
        }
        .container {
            background-color: rgba(0, 0, 0, 0.6); 
            padding: 20px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="mb-4">
            <a href="../admin.php"><button class="btn btn-secondary">Volver</button></a>
        </div>
        
        <h1 class="text-center mb-4">Editar Auto</h1>
        <form action="" method="POST" class="bg-white p-4 rounded shadow-sm text-black">
            <div class="mb-3">
                <label for="model" class="form-label">Modelo: </label>
                <input type="text" name="model" id="model" class="form-control" value="<?= htmlspecialchars($user['model']) ?>" required>
            </div>

            <div class="mb-3">
                <label for="categoria" class="form-label">Categoria: </label>
                <textarea name="categoria" id="categoria" class="form-control" rows="4"><?= htmlspecialchars($user['categoria']) ?></textarea>
            </div>

            <div class="mb-3">
                <label for="preu_dia" class="form-label">Precio actual: </label>
                <input type="number" step="0.01" name="preu_dia" id="preu_dia" class="form-control" value="<?= htmlspecialchars($user['preu_dia']) ?>" required>
            </div>

            <div class="mb-3">
                <label for="imatge" class="form-label">Imagen: </label>
                <textarea name="imatge" id="imatge" class="form-control" rows="4"><?= htmlspecialchars($user['imatge']) ?></textarea>
            </div>

            <div class="mb-3">
                <label for="disponible" class="form-label">Disponibilidad: </label>
                <select name="disponible" id="disponible" class="form-control" required>
                    <option value="1">Sí</option>
                </select>
            </div>

                <button type="submit" class="btn btn-primary">Actualizar Vehiculo</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
