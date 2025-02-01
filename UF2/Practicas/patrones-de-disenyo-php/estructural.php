<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>

<div class="container mt-5">
    <h1 class="Titulo">Patrones Estructurales</h1>
    <p>Los patrones estructurales se enfocan en cómo organizar las clases y objetos de manera eficiente para formar estructuras que puedan crecer sin problemas. Estos patrones ayudan a facilitar la comunicación entre objetos de manera que los componentes del sistema no tengan que estar tan estrechamente acoplados.</p>
    
    <h3>Selecciona un patrón estructural</h3>
    <form method="POST" action="pagCambio.php">
        <div class="form-group">
            <select id="patron" name="patron" class="form-control">
                <option value="">Selecciona un patrón</option>
                <option value="adapter">Adapter</option>
                <option value="bridge">Bridge</option>
                <option value="composite">Composite</option>
                <option value="decorator">Decorator</option>
                <option value="facade">Facade</option>
                <option value="flyweight">Flyweight</option>
                <option value="proxy">Proxy</option>
            </select>
        </div>
        <button type="submit" class="btn btn-rojo mt-3">Ver Información</button>
    </form>

    <div class="d-flex justify-content-center mt-5">
        <img src="https://refactoring.guru/images/patterns/content/index-design-patterns.png" alt="Patrones de Diseño" style="width: 700px;">
    </div>
</div>


