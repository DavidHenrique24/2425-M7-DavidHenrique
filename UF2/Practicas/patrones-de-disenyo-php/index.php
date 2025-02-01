<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>

<!-- Introducción -->
<h1>Patrones de Diseño</h1>
<p>¡Bienvenido a nuestra aplicación web sobre patrones de diseño! Los patrones de diseño son soluciones reutilizables para problemas comunes en el desarrollo de software. A continuación, encontrarás tres tipos de patrones:</p>

<!-- Cards para cada tipo de patrón -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <a href="estructurals.php" class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Patrones Estructurales</h5>
                    <p class="card-text">Patrones que ayudan a organizar las clases y objetos de manera eficiente.</p>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="creacion.php" class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Patrones de Creación</h5>
                    <p class="card-text">Patrones que se enfocan en la creación de objetos de manera flexible.</p>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="comportament.php" class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Patrones de Comportamiento</h5>
                    <p class="card-text">Patrones que gestionan la interacción y la responsabilidad entre objetos.</p>
                </div>
            </a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
