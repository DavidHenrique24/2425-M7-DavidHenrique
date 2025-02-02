<?php include '../header.php'; ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iterator</title>
    <link rel="stylesheet" href="../estilos.css">
</head>
<body>
<div class="container mt-5">
<h1 class="Titulo text-center">Iterator</h1>
    <p><strong class="color">Iterator</strong> es un patrón de diseño de comportamiento que permite acceder a los elementos de un objeto agregado secuencialmente sin exponer su representación interna.</p>
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/content/iterator/iterator-es.png" alt="">
    </div><br><br>
    
    <h3 class="color">Problemas que resuelve</h3>
    <p>El patrón Iterator es útil cuando se necesita recorrer una colección de objetos sin exponer los detalles internos de su implementación.</p>
    <ul>
        <li>Permite acceder a los elementos de una colección sin exponer su estructura interna.</li>
        <li>Facilita el recorrido de colecciones de diferentes tipos de manera uniforme.</li>
        <li>Desacopla la lógica de iteración de la estructura de datos que se recorre.</li>
    </ul>
    
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/diagrams/iterator/solution1.png" alt="">
    </div>
    
    <h3 class="color">Ejemplo de código</h3>
    <p>Este es un ejemplo de cómo se puede implementar el patrón Iterator en código:</p>
    <figure class="code">
<pre class="codigo" lang="php">
// Interfaz Iterator
interface Iterator {
    public function hasNext(): bool;
    public function next();
}

// Clase concreta Iterator
class ColeccionIterator implements Iterator {
    private $coleccion;
    private $posicion;

    public function __construct(Coleccion $coleccion) {
        $this->coleccion = $coleccion;
        $this->posicion = 0;
    }

    public function hasNext(): bool {
        return $this->posicion < count($this->coleccion->getItems());
    }

    public function next() {
        return $this->coleccion->getItems()[$this->posicion++];
    }
}

// Clase Colección
class Coleccion {
    private $items = [];

    public function agregarItem($item) {
        $this->items[] = $item;
    }

    public function getItems() {
        return $this->items;
    }

    public function getIterator(): Iterator {
        return new ColeccionIterator($this);
    }
}

// Uso del patrón Iterator
$coleccion = new Coleccion();
$coleccion->agregarItem("Elemento 1");
$coleccion->agregarItem("Elemento 2");
$coleccion->agregarItem("Elemento 3");

$iterator = $coleccion->getIterator();

while ($iterator->hasNext()) {
    echo $iterator->next() . "\n";
}
</pre>
    </figure>
    
    <h3 class="color mt-5">Estructura</h3>
    <div class="d-flex justify-content-center mt-5">
        <img src="https://refactoring.guru/images/patterns/diagrams/iterator/structure-indexed.png" alt="Estructura Iterator">
    </div>
    <br>
    <div class="separacion"></div>
</body>
</html>
