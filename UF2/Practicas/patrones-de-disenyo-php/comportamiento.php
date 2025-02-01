<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>

<div class="container mt-5">
    <h1 class="Titulo text-center">Patrones de Comportamiento</h1>
    <p>Los patrones de comportamiento se centran en cómo los objetos interactúan entre sí y cómo sus responsabilidades están distribuidas. Estos patrones ayudan a gestionar la comunicación entre objetos y la toma de decisiones dentro de una aplicación.</p>
    
    <h3>Selecciona un patrón de comportamiento</h3>
    <form action="informacion_patron.php" method="GET">
        <div class="form-group">
            <select id="patron" name="patron" class="form-control">
                <option value="chain_of_responsibility">Chain of Responsibility</option>
                <option value="command">Command</option>
                <option value="interpreter">Interpreter</option>
                <option value="iterator">Iterator</option>
                <option value="mediator">Mediator</option>
                <option value="memento">Memento</option>
                <option value="observer">Observer</option>
                <option value="state">State</option>
                <option value="strategy">Strategy</option>
                <option value="visitor">Visitor</option>
            </select>
        </div>
        <button type="submit" class="btn btn-rojo mt-3">Ver Información</button>
    </form>

    <div class="d-flex justify-content-center mt-5">
        <img src="https://refactoring.guru/images/patterns/content/chain-of-responsibility/chain-of-responsibility.png" alt="" style="width: 700px;">
    </div>
</div>

