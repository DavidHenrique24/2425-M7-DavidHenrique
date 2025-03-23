<?php
require_once '../../config.php';

if (!isset($_GET['id'])) {
    header('Location: ../admin.php');
    exit();
}

$id = (int) $_GET['id'];
$result = $mysqli->query("SELECT * FROM Projects WHERE id = $id");

$project = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $url = $_POST['url'];
    $thumbnail = $_POST['thumbnail'];
    $description = $_POST['description'];

    $query = "UPDATE Projects SET title = ?, url = ?, thumbnail = ?, description = ? WHERE id = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('ssssi', $title, $url, $thumbnail, $description, $id);
    $stmt->execute();

    header('Location: ../admin.php');
    exit();
}
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://images7.alphacoders.com/108/1087509.jpg'); 
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
        
        <h1 class="text-center mb-4">Editar Proyecto <?= ($project['title']) ?></h1>
        <form action="" method="POST" class="bg-white p-4 rounded shadow-sm text-black">
            <div class="mb-3">
                <label for="title" class="form-label">Título</label>
                <input type="text" name="title" id="title" class="form-control" value="<?= ($project['title']) ?>" required>
            </div>

            <div class="mb-3">
                <label for="url" class="form-label">URL</label>
                <textarea name="url" id="url" class="form-control" rows="2" required><?= ($project['url']) ?></textarea>
            </div>

            <div class="mb-3">
                <label for="thumbnail" class="form-label">Thumbnail (URL de la imagen)</label>
                <input type="text" name="thumbnail" id="thumbnail" class="form-control" value="<?= ($project['thumbnail']) ?>" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea name="description" id="description" class="form-control" rows="4" required><?= ($project['description']) ?></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>