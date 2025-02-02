<?php include '../header.php'; ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mediator</title>
    <link rel="stylesheet" href="../estilos.css">
</head>
<body>
<div class="container mt-5">
<h1 class="Titulo text-center">Mediator</h1>
    <p><strong class="color">Mediator</strong> es un patrón de diseño de comportamiento que define un objeto que encapsula cómo interactúan un conjunto de objetos, promoviendo el desacoplamiento al evitar que los objetos se refieran entre sí explícitamente, y permitiendo que sus interacciones sean gestionadas por el mediador.</p>
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/content/mediator/mediator.png" alt="Mediator">
    </div><br><br>
    
    <h3 class="color">Problemas que resuelve</h3>
    <p>El patrón Mediator es útil cuando se tiene un grupo de objetos que interactúan entre sí, y se desea reducir la complejidad y el acoplamiento de las interacciones.</p>
    <ul>
        <li>Promueve el desacoplamiento al evitar que los objetos se refieran entre sí directamente.</li>
        <li>Facilita el mantenimiento al centralizar la lógica de interacción en un único objeto.</li>
        <li>Reduce la complejidad en sistemas con muchos objetos que deben colaborar entre sí.</li>
    </ul>
    
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/diagrams/mediator/solution1-es.png" alt="Problema del patrón Mediator">
    </div>
    
    <h3 class="color">Ejemplo de código</h3>
    <p>Este es un ejemplo de cómo se puede implementar el patrón Mediator en código:</p>
    <figure class="code">
<pre class="codigo" lang="php">
// Interfaz Mediator
interface Mediator {
    public function comunicar($origen, $mensaje);
}

// Clase concreta Mediator
class MediadorConcreto implements Mediator {
    private $componente1;
    private $componente2;

    public function setComponente1($componente) {
        $this->componente1 = $componente;
    }

    public function setComponente2($componente) {
        $this->componente2 = $componente;
    }

    public function comunicar($origen, $mensaje) {
        if ($origen == $this->componente1) {
            $this->componente2->recibir($mensaje);
        } else {
            $this->componente1->recibir($mensaje);
        }
    }
}

// Componente 1
class Componente1 {
    private $mediador;

    public function __construct(Mediator $mediador) {
        $this->mediador = $mediador;
    }

    public function enviar($mensaje) {
        echo "Componente 1 enviando: $mensaje\n";
        $this->mediador->comunicar($this, $mensaje);
    }

    public function recibir($mensaje) {
        echo "Componente 1 recibió: $mensaje\n";
    }
}

// Componente 2
class Componente2 {
    private $mediador;

    public function __construct(Mediator $mediador) {
        $this->mediador = $mediador;
    }

    public function enviar($mensaje) {
        echo "Componente 2 enviando: $mensaje\n";
        $this->mediador->comunicar($this, $mensaje);
    }

    public function recibir($mensaje) {
        echo "Componente 2 recibió: $mensaje\n";
    }
}

// Uso del patrón Mediator
$mediador = new MediadorConcreto();

$componente1 = new Componente1($mediador);
$componente2 = new Componente2($mediador);

$mediador->setComponente1($componente1);
$mediador->setComponente2($componente2);

$componente1->enviar("¡Hola desde Componente 1!");
$componente2->enviar("¡Hola desde Componente 2!");
</pre>
    </figure>
    
    <h3 class="color mt-5">Estructura</h3>
    <div class="d-flex justify-content-center mt-5">
        <img src="https://refactoring.guru/images/patterns/diagrams/mediator/example.png" alt="Estructura Mediator">
    </div>
    <br>
    <div class="separacion"></div>
</body>
</html>
