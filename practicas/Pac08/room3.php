<?php
session_start();
include "array.php";


if ($_SESSION['dificultat'] == 'facil') {
    $preguntasFa = $preguntas['facil'][2]['pregunta'];
    $respuestasFa = $preguntas['facil'][2]['respuesta'];

} elseif ($_SESSION['dificultat'] == 'mig') {
    $preguntasFa = $preguntas['mig'][2]['pregunta'];
    $respuestasFa = $preguntas['mig'][2]['respuesta'];

} elseif ($_SESSION['dificultat'] == 'dificil') { 
    $preguntasFa = $preguntas['dificil'][2]['pregunta'];
    $respuestasFa = $preguntas['dificil'][2]['respuesta'];
}

if(isset($_POST['answer'])) {
    if($_POST['answer'] == $respuestasFa){
        $message = "FELICIDADEEEES";
        header("Location: index.php");

    }else{
        $message = "MAL";
        echo '<a href="room3.php" class="btn btn-danger w-10">PRUEBA DE NUEVO</a>';
    }
}
include "header.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Habitacion 3</title>
    <style>
        .cuerpo{
            background-image: url(https://wallpapers.com/images/hd/jigsaw-hollywood-movie-p0m16pbxfoi4fvvg.jpg);
        }
    </style>
</head>


<body class="cuerpo d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4" style="width: 22rem;">
        <h2 class="card-title text-center">Habitación 3</h2>    
        <p class="card-text"></p>
        <form method="POST">
            <div class="mb-3">
                <label for="question"><h4><?php echo $preguntasFa; ?></h4></label>
                <input type="text" name="answer" class="form-control" required placeholder="Respuesta">
                <button type="submit" class="btn mt-4 btn-success w-100 ">Enviar</button>
            </div>
            <?= $message; ?> 
        </form>
      
    </div>
</body>
</html>
