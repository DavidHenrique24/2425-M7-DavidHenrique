<?php
$peliculas = [
    ["nombre" => "Spirited Away", 
    "urlyoutube" => "https://www.youtube.com/watch?v=ByXuk9QqQkk"],

    ["nombre" => "My Neighbor Totoro",
     "urlyoutube" => "https://www.youtube.com/watch?v=92a7Hj0ijLs"],

    ["nombre" => "Princess Mononoke", 
    "urlyoutube" => "https://www.youtube.com/watch?v=4OiMOHRDs14"],

    ["nombre" => "Howl's Moving Castle",
     "urlyoutube" => "https://www.youtube.com/watch?v=yFASVoEQijc"],

    ["nombre" => "The Secret World of Arrietty", 
    "urlyoutube" => "https://www.youtube.com/watch?v=u8gCNCjCO2w"],

    ["nombre" => "Kiki's Delivery Service",
     "urlyoutube" => "https://www.youtube.com/watch?v=4bG17OYs-GA"],

    ["nombre" => "Ponyo", 
    "urlyoutube" => "https://www.youtube.com/watch?v=pfGDfDjAdSE"],

    ["nombre" => "The Tale of the Princess Kaguya",
     "urlyoutube" => "https://www.youtube.com/watch?v=W71mtorCZDw"],

    ["nombre" => "The Wind Rises", 
    "urlyoutube" => "https://www.youtube.com/watch?v=RzSpDgiF5y8"]
];

if (isset($_GET['nombre'])) {
    $nombrePelicula = $_GET['nombre'];
    
    $peliculaSeleccionada; //Busca la peli en el array
    foreach ($peliculas as $pelicula) {
        if ($pelicula['nombre'] == $nombrePelicula) {
            $peliculaSeleccionada = $pelicula;
        }
    }
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tráiler </title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #dc3545;
    color: white;
    text-align: center;
    padding: 20px;
    margin: 0;
}

.container {
    max-width: 800px;
    margin: auto;
}

.titulo {
    margin-bottom: 20px;
    font-weight: bold;
}

.video-container {
    margin: 20px 0;
}

.btn-back {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #f8f9fa;
    color: #dc3545; 
    text-decoration: none;
    border-radius: 5px;
}



</style>
</head>
<body>
    <div class="container">
        <?php if ($peliculaSeleccionada): ?>
            <h1 class="titulo">Tráiler de <?= ($peliculaSeleccionada['nombre']) ?></h1>
            <div class="video-container">
                <!-- Extrae el ID del video de la URL -->
                <?php
                // Obtener el ID del video de YouTube de la URL
                $urlVideo = $peliculaSeleccionada['urlyoutube'];
                parse_str(parse_url($urlVideo, PHP_URL_QUERY), $query);
                $idVideo = $query['v'];  //Segun necesario por el video de youtube
                ?>
                <iframe width="800" height="400" src="https://www.youtube.com/embed/<?= ($idVideo) ?>?autoplay=1&mute=1" allow="autoplay" allowfullscreen></iframe> 
            </div>
        <?php endif; ?>

        <a href="index1.php" class="btn btn-back">Volver a la Cartelera</a>
    </div>
</body>
</html>