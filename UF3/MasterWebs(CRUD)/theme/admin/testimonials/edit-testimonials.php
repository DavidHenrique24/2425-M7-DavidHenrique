<?php
require_once '../../config.php';

if (!isset($_GET['id'])) {
    header('Location: ../admin.php');
    exit();
}

$id = (int) $_GET['id'];
$result = $mysqli->query("SELECT * FROM Testimonials WHERE id = $id");

$testimonial = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $description = $_POST['description'];
    $rating = $_POST['rating'];
    $query = "UPDATE Testimonials SET name = ?, surname = ?, description = ?, rating = ? WHERE id = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('sssii', $name, $surname, $description, $rating, $id);
    $stmt->execute();

    header('Location: ../admin.php');
    exit();
}
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Testimonio</title>
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
        
        <h1 class="text-center mb-4">Editar Testimonio de <?= ($testimonial['name']) ?></h1>
        <form action="" method="POST" class="bg-white p-4 rounded shadow-sm text-black">
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="<?= ($testimonial['name']) ?>" required>
            </div>

            <div class="mb-3">
                <label for="surname" class="form-label">Apellido</label>
                <input type="text" name="surname" id="surname" class="form-control" value="<?= ($testimonial['surname']) ?>" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea name="description" id="description" class="form-control" rows="4" required><?= ($testimonial['description']) ?></textarea>
            </div>

            <div class="mb-3">
                <label for="rating" class="form-label">Valoración (1-5)</label>
                <input type="number" name="rating" id="rating" class="form-control" min="1" max="5" value="<?= ($testimonial['rating']) ?>" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
