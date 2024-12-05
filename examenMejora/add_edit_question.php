<?php
session_start();
include('data.php');
$pregunta = '';
$respuestaCorrecta = '';
$opciones = ['', '', '', ''];

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($preguntas[$id])) {
        $pregunta = $preguntas[$id]['question'];
        $respuestaCorrecta = $preguntas[$id]['answer'];
        $opciones = $preguntas[$id]['options'];
    } else {
        header('Location: manage.php');
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nuevaPregunta = $_POST['pregunta'];
    $nuevaRespuesta = $_POST['respuesta'];
    $nuevasOpciones = [$_POST['opcion1'], $_POST['opcion2'], $_POST['opcion3'], $_POST['opcion4']];

    // Si es una edición, actualizamos la pregunta existente
    if (isset($_GET['id'])) {
        $preguntas[$id] = [
            'id' => $id,
            'question' => $nuevaPregunta,
            'answer' => $nuevaRespuesta,
            'options' => $nuevasOpciones
        ];
    } else {
        $nuevaId = count($preguntas); 
        $preguntas[$nuevaId] = [
            'id' => $nuevaId,
            'question' => $nuevaPregunta,
            'answer' => $nuevaRespuesta,
            'options' => $nuevasOpciones
        ];
    }

    file_put_contents('data.php', '<?php $preguntas = ' . var_export($preguntas, true) . ';');
    header('Location: manage.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($_GET['id']) ? 'Editar Pregunta' : 'Añadir Nueva Pregunta'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="text-center mt-4"><?php echo isset($_GET['id']) ? 'Editar Pregunta' : 'Añadir Nueva Pregunta'; ?></h2>
        <form method="POST">
            <div class="mb-3">
                <label for="pregunta" class="form-label">Pregunta</label>
                <input type="text" class="form-control" id="pregunta" name="pregunta" value="<?php echo htmlspecialchars($pregunta); ?>" required>
            </div>
            <div class="mb-3">
                <label for="respuesta" class="form-label">Respuesta Correcta</label>
                <input type="text" class="form-control" id="respuesta" name="respuesta" value="<?php echo htmlspecialchars($respuestaCorrecta); ?>" required>
            </div>
            <div class="mb-3">
                <label for="opcion1" class="form-label">Opción 1</label>
                <input type="text" class="form-control" id="opcion1" name="opcion1" value="<?php echo htmlspecialchars($opciones[0]); ?>" required>
            </div>
            <div class="mb-3">
                <label for="opcion2" class="form-label">Opción 2</label>
                <input type="text" class="form-control" id="opcion2" name="opcion2" value="<?php echo htmlspecialchars($opciones[1]); ?>" required>
            </div>
            <div class="mb-3">
                <label for="opcion3" class="form-label">Opción 3</label>
                <input type="text" class="form-control" id="opcion3" name="opcion3" value="<?php echo htmlspecialchars($opciones[2]); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary"><?php echo isset($_GET['id']) ? 'Guardar Cambios' : 'Añadir Pregunta'; ?></button>
            <a href="manage.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
