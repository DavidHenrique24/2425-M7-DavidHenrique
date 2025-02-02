<?php include '../header.php'; ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adapter</title>
    <link rel="stylesheet" href="../estilos.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="Titulo text-center">Adapter</h1>
    <p><strong class="color">Adapter</strong> es un patrón de diseño estructural que permite que objetos con interfaces incompatibles trabajen juntos mediante un intermediario.</p>
    <div class="d-flex justify-content-center mt-5">
        <img src="https://refactoring.guru/images/patterns/content/adapter/adapter-es.png" alt="Adapter Pattern">
    </div><br><br>
    
    <h3 class="color">Problemas que resuelve</h3>
    <p>El patrón Adapter se utiliza cuando se necesita integrar una clase existente con una nueva interfaz sin modificar su código fuente.</p>
    <ul>
        <li>Permite reutilizar código sin modificar la implementación original.</li>
        <li>Facilita la interoperabilidad entre sistemas heredados y nuevos.</li>
    </ul>
    <div class="d-flex justify-content-center mt-5">
        <img src="https://refactoring.guru/images/patterns/diagrams/adapter/problem-es.png" alt="Problema Adapter">
    </div>
    <br><br>
    
    <h3 class="color">Ejemplo de Código</h3>
    <p>Este ejemplo muestra cómo se puede utilizar el patrón Adapter para hacer que una interfaz incompatible funcione con una clase existente.</p>
    <figure class="code">
<pre class="codigo" lang="php">// Interfaz esperada por el cliente
interface Objetivo {
    public function solicitar();
}

// Clase existente con una interfaz incompatible
class Adaptee {
    public function operacionEspecifica() {
        return "Resultado de Adaptee";
    }
}

// Adaptador que convierte la interfaz de Adaptee a la esperada por el cliente
class Adaptador implements Objetivo {
    private $adaptee;
    
    public function __construct(Adaptee $adaptee) {
        $this->adaptee = $adaptee;
    }
    
    public function solicitar() {
        return $this->adaptee->operacionEspecifica();
    }
}

// Uso del patrón Adapter
$adaptee = new Adaptee();
$adaptador = new Adaptador($adaptee);
echo $adaptador->solicitar();</pre>
    </figure>
    
    <h3 class="color mt-5">Estructura</h3>
    <div class="d-flex justify-content-center mt-5">
        <img src="https://refactoring.guru/images/patterns/diagrams/adapter/structure-object-adapter-indexed.png" alt="Estructura Adapter">
    </div>
    <br>
    <div class="separacion"></div>
</div>
</body>
</html>
