<?php include '../header.php'; ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flyweight</title>
    <link rel="stylesheet" href="../estilos.css">
</head>
<body>
<div class="container mt-5">
<h1 class="Titulo text-center">Flyweight</h1>
    <p><strong class="color">Flyweight</strong> es un patrón de diseño estructural que permite compartir el estado común de objetos de manera eficiente para reducir el uso de memoria, mientras que mantiene el comportamiento individual de cada uno.</p>
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/content/flyweight/flyweight.png" alt="Flyweight">
    </div><br><br>
    
    <h3 class="color">Problemas que resuelve</h3>
    <p>El patrón Flyweight es útil cuando se necesita reducir la cantidad de objetos en memoria, especialmente cuando hay una gran cantidad de objetos similares que comparten el mismo estado.</p>
    <ul>
        <li>Reduce el uso de memoria compartiendo el estado común entre objetos similares.</li>
        <li>Mejora el rendimiento al evitar la duplicación de datos.</li>
        <li>Facilita la creación y mantenimiento de grandes cantidades de objetos similares.</li>
    </ul>
    
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/diagrams/flyweight/solution1-es.png" alt="Problema del patrón Flyweight">
    </div>
    
    <h3 class="color">Pseudocódigo</h3>
    <p>Este es un ejemplo de cómo se puede implementar el patrón Flyweight en Pseudocódigo:</p>
    <figure class="code">
<pre class="codigo" lang="pseudocode">// Flyweight compartido
class Arbol is
    private field tipo: String // Estado interno compartido
    
    constructor Arbol(tipo) is
        this.tipo = tipo
    
    method mostrar(x, y) is
        print("Mostrando árbol de tipo " + this.tipo + " en las coordenadas (" + x + ", " + y + ")")

// Factoría de Flyweight que maneja la reutilización de objetos
class ArbolFactory is
    private field arboles: Map<String, Arbol> // Almacena los objetos Flyweight
    
    method obtenerArbol(tipo) is
        if tipo no está en this.arboles then
            this.arboles[tipo] = new Arbol(tipo)
        return this.arboles[tipo]

// Uso del patrón Flyweight
arbolFactory = new ArbolFactory()

arbol1 = arbolFactory.obtenerArbol("Pino")
arbol1.mostrar(10, 20)

arbol2 = arbolFactory.obtenerArbol("Roble")
arbol2.mostrar(30, 40)

arbol3 = arbolFactory.obtenerArbol("Pino")
arbol3.mostrar(50, 60)</pre>
    </figure>
    
    <h3 class="color mt-5">Estructura</h3>
    <div class="d-flex justify-content-center mt-5">
        <img src="https://refactoring.guru/images/patterns/diagrams/flyweight/structure-indexed.png" alt="Estructura Flyweight">
    </div>
    <br>
    <div class="separacion"></div>
</body>
</html>
