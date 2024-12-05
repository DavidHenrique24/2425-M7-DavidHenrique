<?php
session_start();
include('data.php');

$pregunta_actual = $_SESSION['pregunta_actual'];
$pregunta = $preguntas[$pregunta_actual];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $respuestaUsuario = $_POST['respuesta'];
    if ($respuestaUsuario === $pregunta['answer']) {
        $_SESSION['puntuacion']++; //incrementa la puntuacion si es correcta
        $_SESSION['pregunta_actual']++; //avanza a la otra pregunta
        
        if ($_SESSION['pregunta_actual'] < count($preguntas)) {
            header('Location: ' . $_SERVER['PHP_SELF']); // Recargar para cargar la siguiente pregunta
            exit;
        } else {
            echo "¡Felicidades! Has terminado el trivial. Tu puntuación es: " . $_SESSION['puntuacion'];
            session_destroy();
            exit;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego Trivial</title>
</head>
<body>
    <h1>Pregunta: <?php echo $pregunta['question']; ?></h1>
    <form method="POST">
        <?php foreach ($pregunta['options'] as $opcion): ?>
            <input type="radio" name="respuesta" value="<?php echo $opcion; ?>" required> <?php echo $opcion; ?><br>
        <?php endforeach; ?>
        <input type="submit" value="Responder">
    </form>
</body>
</html>
