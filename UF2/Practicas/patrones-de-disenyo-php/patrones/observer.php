<?php include '../header.php'; ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Observer</title>
    <link rel="stylesheet" href="../estilos.css">
</head>
<body>
<div class="container mt-5">
<h1 class="Titulo text-center">Observer</h1>
    <p><strong class="color">Observer</strong> es un patrón de diseño de comportamiento que te permite definir un mecanismo de suscripción para notificar a varios objetos sobre cualquier evento que le suceda al objeto que están observando.</p>
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/content/observer/observer.png" alt="Observer">
    </div><br><br>
    
    <h3 class="color">Problemas que resuelve</h3>
    <p>El patrón Observer resuelve el problema de mantener múltiples objetos actualizados cuando el estado de un objeto cambia, sin acoplar directamente los objetos entre sí.</p>
    <ul>
        <li>Permite la notificación automática a múltiples objetos sin que estos dependan explícitamente de uno de ellos.</li>
        <li>Facilita la adición de nuevos observadores sin modificar los objetos sujetos.</li>
        <li>Reduce el acoplamiento entre los objetos observados y los observadores.</li>
    </ul>
    
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/diagrams/observer/solution1-es.png" alt="Problema del patrón Observer">
    </div>
    
    <h3 class="color">Ejemplo de código</h3>
    <p>Este es un ejemplo de cómo se puede implementar el patrón Observer en código:</p>
    <figure class="code">
<pre class="codigo" lang="php">
// Interfaz del Observador
interface Observador {
    public function actualizar($estado);
}

// Clase Sujeto
class Sujeto {
    private $observadores = [];

    public function agregarObservador(Observador $observador) {
        $this->observadores[] = $observador;
    }

    public function eliminarObservador(Observador $observador) {
        $key = array_search($observador, $this->observadores);
        if ($key !== false) {
            unset($this->observadores[$key]);
        }
    }

    public function notificar() {
        foreach ($this->observadores as $observador) {
            $observador->actualizar($this);
        }
    }
}

// Clase Observador concreto
class ObservadorConcreto implements Observador {
    private $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function actualizar($sujeto) {
        echo "El observador {$this->nombre} ha sido notificado.\n";
    }
}

// Uso del patrón Observer
$sujeto = new Sujeto();

$observador1 = new ObservadorConcreto("Observador 1");
$observador2 = new ObservadorConcreto("Observador 2");

$sujeto->agregarObservador($observador1);
$sujeto->agregarObservador($observador2);

$sujeto->notificar();  // Se notifica a todos los observadores
</pre>
    </figure>
    
    <h3 class="color mt-5">Estructura</h3>
    <div class="d-flex justify-content-center mt-5">
        <img src="https://refactoring.guru/images/patterns/diagrams/observer/structure-indexed.png" alt="Estructura Observer">
    </div>
    <br>
    <div class="separacion"></div>
</body>
</html>
