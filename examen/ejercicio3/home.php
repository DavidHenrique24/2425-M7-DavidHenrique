<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light text-dark">
<img src="<?php echo $_SESSION['urlFoto']?>" alt="" style="width: 70px;">
    <h1 class="mb-4">Hola, <?= $_SESSION['usuario']; ?></h1>
    <div class="container text-center mt-4 ">
    <img src="https://media.tenor.com/URFDMCokt3EAAAAM/jigsaw-saw.gif" class="img-fluid " alt="">
    </div>
    <div class="d-flex justify-content-center">
            <form action="logout.php" method="POST">
                <button type="submit" class="btn btn-danger">Cerrar Sesión</button>
            </form>
        </div>
    </div>
    </div>
</body>

</html>