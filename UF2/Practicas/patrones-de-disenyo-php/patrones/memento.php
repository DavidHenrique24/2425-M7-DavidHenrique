<?php include '../header.php'; ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memento</title>
    <link rel="stylesheet" href="../estilos.css">
</head>
<body>
<div class="container mt-5">
<h1 class="Titulo text-center">Memento</h1>
    <p><strong class="color">Memento</strong> es un patrón de diseño de comportamiento que te permite guardar y restaurar el estado previo de un objeto sin revelar los detalles de su implementación.</p>
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/content/memento/memento-es.png" alt="Memento">
    </div><br><br>
    
    <h3 class="color">Problemas que resuelve</h3>
    <p>El patrón Memento es útil cuando se desea guardar y restaurar el estado de un objeto, sin exponer su implementación interna.</p>
    <ul>
        <li>Permite realizar operaciones de deshacer.</li>
        <li>Evita violar la encapsulación del objeto guardando su estado sin exponer los detalles internos.</li>
        <li>Facilita la restauración de objetos a un estado anterior sin afectar a otros objetos.</li>
    </ul>
    
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/diagrams/memento/solution-es.png" alt="Problema del patrón Memento">
    </div>
    
    <h3 class="color">Ejemplo de código</h3>
    <p>Este es un ejemplo de cómo se puede implementar el patrón Memento en código:</p>
    <figure class="code">
<pre class="codigo" lang="php">
// Originador
class EditorTexto {
    private $texto = "";

    public function escribir($nuevoTexto) {
        $this->texto .= $nuevoTexto;
    }

    public function getTexto() {
        return $this->texto;
    }

    public function crearMemento() {
        return new Memento($this->texto);
    }

    public function restaurarMemento(Memento $memento) {
        $this->texto = $memento->getEstado();
    }
}

// Memento
class Memento {
    private $estado;

    public function __construct($estado) {
        $this->estado = $estado;
    }

    public function getEstado() {
        return $this->estado;
    }
}

// Caretaker
class Conservador {
    private $memento;

    public function guardarMemento(Memento $memento) {
        $this->memento = $memento;
    }

    public function obtenerMemento() {
        return $this->memento;
    }
}

// Uso del patrón Memento
$editor = new EditorTexto();
$editor->escribir("Hola ");
$editor->escribir("Mundo!");

echo "Texto actual: " . $editor->getTexto() . "\n";

$conservador = new Conservador();
$conservador->guardarMemento($editor->crearMemento());

$editor->escribir(" ¿Cómo estás?");
echo "Texto después de cambios: " . $editor->getTexto() . "\n";

// Restauramos el estado anterior
$editor->restaurarMemento($conservador->obtenerMemento());
echo "Texto después de restaurar: " . $editor->getTexto() . "\n";
</pre>
    </figure>
    
    <h3 class="color mt-5">Estructura</h3>
    <p>La implementación clásica del patrón se basa en el soporte de clases anidadas, disponible en varios lenguajes de programación populares (como C++, C# y Java).</p>
    <div class="d-flex justify-content-center mt-5">
        <img src="https://refactoring.guru/images/patterns/diagrams/memento/structure1-indexed.png" alt="Estructura Memento">
    </div>
    <br>
    <div class="separacion"></div>
</body>
</html>
