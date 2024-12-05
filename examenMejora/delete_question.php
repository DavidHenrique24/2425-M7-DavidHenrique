<?php
session_start();
include('data.php');


if (isset($_GET['id'])) {
    $idEliminar = $_GET['id'];

    if (isset($preguntas[$idEliminar])) {
        unset($preguntas[$idEliminar]);
        $preguntas = array_values($preguntas);
        file_put_contents('data.php', '<?php $preguntas = ' . var_export($preguntas, true) . ';');
        header('Location: manage.php');
        exit;
    } else {
        header('Location: manage.php');
        exit;
    }
} else {
    header('Location: manage.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Pregunta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="text-center mt-4">Confirmar Eliminación</h2>
        <div class="alert alert-danger text-center" role="alert">
            ¿Estás seguro de que deseas eliminar esta pregunta? Esta acción no se puede deshacer.
        </div>
        <div class="text-center">
            <a href="manage.php" class="btn btn-secondary">Cancelar</a>
            <a href="delete_question.php?id=<?php echo $_GET['id']; ?>" class="btn btn-danger">Eliminar</a>
        </div>
    </div>
</body>
</html>
