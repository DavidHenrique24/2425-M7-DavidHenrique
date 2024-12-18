<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['apellidos'] = $_POST['apellidos'];
    $_SESSION['dificultat'] = $_POST['dificultat'];
    $_SESSION['urlFoto']=$_POST['urlFoto'];
    header('Location: room1.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Inici</title>
</head>
<body class="d-flex justify-content-center align-items-center vh-100" style="background-image: url('https://basementescaperoom.com/los-angeles/template/images/room-header-bg-thebasement.jpg'); background-size:cover; background-repeat: no-repeat;">
    <div class="card p-4 bg-dark text-white" style="width: 22rem;">
        <h2 class="card-title text-center">Benvingut!</h2>

        <form action="index.php" method="POST">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos:</label>
                <input type="text" name="apellidos" id="apellidos" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="apellidos" class="form-label">Url de Foto:</label>
                <input type="text" name="urlFoto" id="urlFoto" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="dificultat" class="form-label">Nivell de Dificultat:</label>
                <select name="dificultat" id="dificultat" class="form-select" required>
                    <option value="">Selecciona un nivell</option>
                    <option value="facil">Fàcil</option>
                    <option value="mig">Mig</option>
                    <option value="dificil">Difícil</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100">Comença el Joc</button>
        </form>
    </div>
</body>
</html>
