<?php include '../header.php'; ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decorator</title>
    <link rel="stylesheet" href="../estilos.css">
</head>
<body>
<div class="container mt-5">
<h1 class="Titulo text-center">Decorator</h1>
    <p><strong class="color">Decorator</strong> es un patrón de diseño estructural que permite añadir funcionalidad a un objeto de manera flexible sin modificar su estructura original.</p>
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/content/decorator/decorator.png" alt="Decorator">
    </div><br><br>
    
    <h3 class="color">Problemas que resuelve</h3>
    <p>El patrón Decorator es útil cuando se necesita extender la funcionalidad de los objetos de manera dinámica, evitando la proliferación de subclases y manteniendo un código más limpio y flexible.</p>
    <ul>
        <li>Permite añadir funcionalidades sin modificar las clases base.</li>
        <li>Facilita la combinación de múltiples decoradores en diferentes configuraciones.</li>
        <li>Reduce la necesidad de crear múltiples subclases para cada variación.</li>
    </ul>
    
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/diagrams/decorator/problem2.png" alt="Problema del patrón Decorator">
    </div>
    
    <h3 class="color">Pseudocodigo</h3>
    <p>Este es un ejemplo de cómo se puede implementar el patrón Decorator en Pseudocódigo:</p>
    <figure class="code">
<pre class="codigo" lang="pseudocode">// Interfaz común para los objetos originales y los decoradores
interface Componente is
    method operar()

// Implementación concreta del componente
class ComponenteConcreto implements Componente is
    method operar() is
        print("Ejecutando operación base")

// Decorador base
class DecoradorBase implements Componente is
    protected field componente: Componente
    
    constructor DecoradorBase(componente: Componente) is
        this.componente = componente
    
    method operar() is
        this.componente.operar()

// Decorador concreto que añade funcionalidad
class DecoradorConcretoA extends DecoradorBase is
    method operar() is
        super.operar()
        print("Añadiendo funcionalidad extra A")

class DecoradorConcretoB extends DecoradorBase is
    method operar() is
        super.operar()
        print("Añadiendo funcionalidad extra B")

// Uso del patrón
Componente objeto = new ComponenteConcreto()
Componente decoradoA = new DecoradorConcretoA(objeto)
Componente decoradoB = new DecoradorConcretoB(decoradoA)
decoradoB.operar()</pre>
    </figure>
    
    <h3 class="color mt-5">Estructura</h3>
    <div class="d-flex justify-content-center mt-5">
        <img src="https://refactoring.guru/images/patterns/diagrams/decorator/structure-indexed.png" alt="Estructura Decorator">
    </div>
    <br>
    <div class="separacion"></div>
</body>
</html>

