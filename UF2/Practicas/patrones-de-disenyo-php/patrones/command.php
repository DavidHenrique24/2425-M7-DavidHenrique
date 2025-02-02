<?php include '../header.php'; ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Command</title>
    <link rel="stylesheet" href="../estilos.css">
</head>
<body>
<div class="container mt-5">
<h1 class="Titulo text-center">Command</h1>
    <p><strong class="color">Command</strong>Command es un patrón de diseño de comportamiento que convierte una solicitud en un objeto independiente que contiene toda la información sobre la solicitud. Esta transformación te permite parametrizar los métodos con diferentes solicitudes, retrasar o poner en cola la ejecución de una solicitud y soportar operaciones que no se pueden realizar.</p>
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/content/command/command-es.png" alt="Command">
    </div><br><br>
    
    <h3 class="color">Problemas que resuelve</h3>
    <p>El patrón Command es útil cuando se desea encapsular una solicitud como un objeto, permitiendo la ejecución de acciones de manera desacoplada y flexible.</p>
    <ul>
        <li>Desacopla el emisor de la solicitud del receptor.</li>
        <li>Permite la parametrización de objetos con diferentes solicitudes.</li>
        <li>Facilita la implementación de operaciones de deshacer y rehacer.</li>
    </ul>
    
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/diagrams/command/solution1-es.png" alt="Problema del patrón Command">
    </div>
    
    <h3 class="color">Ejemplo de código</h3>
    <p>Este es un ejemplo de cómo se puede implementar el patrón Command en código:</p>
    <figure class="code">
<pre class="codigo" lang="php">
// Interfaz Command
interface Command {
    public function ejecutar();
}

// Comandos concretos
class ComandoEncender implements Command {
    private $luz;
    
    public function __construct(Luz $luz) {
        $this->luz = $luz;
    }
    
    public function ejecutar() {
        $this->luz->encender();
    }
}

class ComandoApagar implements Command {
    private $luz;
    
    public function __construct(Luz $luz) {
        $this->luz = $luz;
    }
    
    public function ejecutar() {
        $this->luz->apagar();
    }
}

// Receptor
class Luz {
    public function encender() {
        echo "La luz se ha encendido.\n";
    }

    public function apagar() {
        echo "La luz se ha apagado.\n";
    }
}

// Invocador
class ControlRemoto {
    private $comando;

    public function setComando(Command $comando) {
        $this->comando = $comando;
    }

    public function presionarBoton() {
        $this->comando->ejecutar();
    }
}

// Uso del patrón Command
$luz = new Luz();
$comandoEncender = new ComandoEncender($luz);
$comandoApagar = new ComandoApagar($luz);

$control = new ControlRemoto();
$control->setComando($comandoEncender);
$control->presionarBoton(); // La luz se ha encendido.

$control->setComando($comandoApagar);
$control->presionarBoton(); // La luz se ha apagado.
</pre>
    </figure>
    
    <h3 class="color mt-5">Estructura</h3>
    <div class="d-flex justify-content-center mt-5">
        <img src="https://refactoring.guru/images/patterns/diagrams/command/structure-indexed.png" alt="Estructura Command">
    </div>
    <br>
    <div class="separacion"></div>
</body>
</html>
