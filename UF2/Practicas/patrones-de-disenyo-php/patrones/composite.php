<?php include '../header.php'; ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Composite</title>
    <link rel="stylesheet" href="../estilos.css">
</head>
<body>
<div class="container mt-5">
<h1 class="Titulo text-center">Composite</h1>
    <p><strong class="color">Composite</strong> es un patrón de diseño estructural que permite componer objetos en estructuras de árbol y trabajar con ellas como si fueran objetos individuales.</p>
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/content/composite/composite.png" alt="Composite">
    </div><br><br>
    
    <h3 class="color">Problema que resuelve</h3>
    <p>Supongamos que estás desarrollando una aplicación para representar estructuras organizativas, donde cada empleado puede ser un trabajador individual o un gerente que supervisa a otros empleados.</p>
    <p>El patrón Composite permite tratar de manera uniforme tanto a objetos individuales como a grupos de objetos.</p>
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/diagrams/composite/problem-es.png" alt="Problema Composite">
    </div><br>
    
    <h3 class="color">Pseudocódigo</h3>
    <p>Ejemplo de implementación del patrón Composite:</p>
    <figure class="code">
<pre class="codigo" lang="pseudocode">// La interfaz Componente declara operaciones comunes para elementos simples y complejos.
interface Componente is
    method mostrar()

// La clase Hoja representa objetos finales de la estructura. 
// Una hoja no puede tener subelementos.
class Hoja implements Componente is
    method mostrar() is
        print("Elemento hoja")

// La clase Contenedor representa objetos complejos con subelementos.
class Contenedor implements Componente is
    field hijos: list<Componente>
    
    method agregar(Componente c) is
        hijos.add(c)
    
    method mostrar() is
        print("Contenedor:")
        foreach (hijo in hijos) do
            hijo.mostrar()

// Cliente
component1 = new Hoja()
component2 = new Hoja()
composite = new Contenedor()
composite.agregar(component1)
composite.agregar(component2)
composite.mostrar()</pre>
    </figure>
    
    <h3 class="color mt-5">Estructura</h3>
    <div class="d-flex justify-content-center mt-5">
        <img src="https://refactoring.guru/images/patterns/diagrams/composite/structure-es-indexed.png" alt="Estructura Composite">
    </div>
    <br>
    <div class="separacion"></div>
</body>
</html>
