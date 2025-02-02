<?php include 'header.php'; ?>

<div class="container mt-5">
    <h1 class="Titulo text-center">Patrones de Creación</h1>
    <p>Los patrones de creación se enfocan en cómo crear objetos de manera flexible y reutilizable. Estos patrones ayudan a abstraer el proceso de creación de objetos, permitiendo que el código sea más flexible y fácilmente extensible.</p>
    
    <h3>Selecciona un patrón de creación</h3>
    <form method="POST" action="">
        <div class="form-group">
            <select id="patron" name="patron" class="form-control">
                <option value="">Selecciona un patrón</option>
                <option value="abstract_factory">Abstract Factory</option>
                <option value="builder">Builder</option>
                <option value="factory_method">Factory Method</option>
                <option value="prototype">Prototype</option>
                <option value="singleton">Singleton</option>
            </select>
        </div>
        <button type="submit" class="btn btn-rojo mt-3">Ver Información</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['patron']) && $_POST['patron'] != "") {
        $patron = $_POST['patron'];
        header("Location: patrones/{$patron}.php");
        exit(); 
    }
    ?>

    <div class="d-flex justify-content-center mt-5">
        <img src="https://refactoring.guru/images/patterns/content/index-design-patterns.png" alt="" style="width: 700px;">
    </div>
</div>

<?php include 'footer.php'; ?>
