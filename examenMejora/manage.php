<?php
session_start();
include('data.php');

if (isset($_GET['edit'])) {
    $idEditar = $_GET['edit'];
    header('Location: edit_question.php?id=' . $idEditar);
    exit;
}

if (isset($_GET['delete'])) {
    $idEliminar = $_GET['delete'];
    // Confirmación previa a la eliminación
    header('Location: delete_question.php?id=' . $idEliminar);
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Preguntas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 2rem;
        }
        .table {
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Gestión de Preguntas</h2>
        <a href="add_edit_question.php" class="btn btn-primary mb-3">Añadir Nueva Pregunta</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Pregunta</th>
                    <th>Respuesta Correcta</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($preguntas as $index => $pregunta): ?>
                    <tr>
                        <td><?php echo $pregunta['id']; ?></td>
                        <td><?php echo $pregunta['question']; ?></td>
                        <td><?php echo $pregunta['answer']; ?></td>
                        <td>
                            <a href="" class="btn btn-warning btn-sm">Editar</a>
                            <a href="" class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
