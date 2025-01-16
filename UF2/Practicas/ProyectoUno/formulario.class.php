<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Formulario</title>
    <style>
        .video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1; 
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">

    <!-- Video de fondo -->
    <video autoplay muted loop class="video-background">
        <source src="cartas_uno/cartas_uno/video_fondo_uno.mp4" type="video/mp4">
    </video>

    <div class="card p-4 bg-dark text-white" style="width: 22rem;">
        <h2 class="card-title text-center">Bienvenido al juego del Uno!</h2>

        <form action="index.php" method="POST">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="apellidos" class="form-label">Numero de Cartas</label>
                <input type="number" name="apellidos" id="apellidos" class="form-control" required>
            </div>
    
            <button type="submit" class="btn btn-primary w-100">Comenzar Juego</button>
        </form>
    </div>
</body>
</html>
