<?php
session_start();

// Verifica si el usuario ha iniciado sesión; si no, redirige a login.php
if (!isset($_SESSION['nombreUsu'])  && !isset($_SESSION['rol'])) {
    header("Location: login.php");
    exit;
}

// Verifica el rol del usuario
if ($_SESSION['rol'] == "admin") {
    $rolUsu = "admin";
} else {
    $rolUsu = "reader";
}
// Obtener la lista de libros desde la sesión
include "functions.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca Virtual - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

    <!-- Encabezado del usuario -->
    <header class="bg-light py-3 mb-4 shadow-sm">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img src="<?= $_SESSION['urlFoto'] ?>" alt="Foto de perfil" class="w-25 me-3">
                <div>
                    <h4 class="m-0">👋 Bienvenido, <?= $_SESSION['nombreUsu'] ?>  </h4>

                    <?php if ($rolUsu == "admin"): ?>
                        <!-- SI ES ADMIN.... -->
                        <p class="text-muted m-0"><i class="fas fa-user-shield text-success"></i> Admin ✏️</p>
                    <?php else: ?>
                        <!-- SINO.... -->
                        <p class="text-muted m-0">Lector 📚</p>
                    <?php endif; ?>
                </div>
            </div>
            <a href="" class="btn btn-warning btn-sm">
               Cerrar sesión ❌
            </a>
        </div>
    </header>

    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold">Biblioteca Virtual</h1>
            <p class="lead">Disfruta explorando nuestra colección de libros</p>
        </div>

        <!-- Botón de agregar libro (solo visible para el admin) -->
        <?php if ($rolUsu == "admin"): ?>
            <div class="text-center mb-4">
                <a href="add_edit_book.php" class="btn btn-outline-success btn-lg">
                    <i class="fas fa-plus-circle me-2"></i>Agregar Nuevo Libro
                </a>
            </div>
        <?php endif ?>

        <!-- Mostrar lista de libros en un grid de tarjetas con tamaño uniforme -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php foreach ($libros as $libro): ?>
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="<?= $libro['src']; ?>" class="card-img-top" alt="<?= $libro['titulo']; ?>" style="height: 400px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $libro['titulo']; ?></h5>
                            <p class="card-text"><strong>Autor:</strong> <?= $libro['autor']; ?></p>
                            <p class="card-text"><?= $libro['descripcion']; ?></p>
                        </div>
                    </div>
                    <!-- Botones de editar y eliminar (solo visible para el admin) -->
                    <?php if ($rolUsu == "admin"): ?>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="" class="btn btn-outline-primary btn-sm">
                                <i class="fas fa-edit"></i> Editar
                            </a>
                            <a href="" class="btn btn-outline-danger btn-sm">
                                <i class="fas fa-trash-alt"></i> Eliminar
                            </a>
                        </div>
                    <?php endif ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

   
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script></body>
</html>
