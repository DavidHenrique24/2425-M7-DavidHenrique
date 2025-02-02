<?php include '../header.php'; ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chain of Responsibility</title>
    <link rel="stylesheet" href="../estilos.css">
</head>
<body>
<div class="container mt-5">
<h1 class="Titulo text-center">Chain of Responsibility</h1>
    <p><strong class="color">Chain of Responsibility</strong> es un patrón de diseño de comportamiento que permite pasar una solicitud a lo largo de una cadena de manejadores. Cada manejador en la cadena puede procesar la solicitud o pasarla al siguiente manejador en la cadena, permitiendo que múltiples objetos tengan la oportunidad de manejar la solicitud.</p>
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/content/chain-of-responsibility/chain-of-responsibility.png" alt="Chain of Responsibility">
    </div><br><br>
    
    <h3 class="color">Problemas que resuelve</h3>
    <p>El patrón Chain of Responsibility es útil cuando se necesita delegar solicitudes a diferentes objetos de manera flexible y desacoplar el emisor de la solicitud de los objetos que la procesan.</p>
    <ul>
        <li>Permite que varias clases manejen una solicitud sin que el emisor sepa cuál clase la manejará.</li>
        <li>Reduce el acoplamiento entre el emisor y los receptores de la solicitud.</li>
        <li>Permite que las solicitudes sean procesadas por una cadena de objetos hasta que se maneje o se alcance el final.</li>
    </ul>
    
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/diagrams/chain-of-responsibility/problem2-es.png" alt="Problema del patrón Chain of Responsibility">
    </div>
    
    <h3 class="color">Ejemplo de Código</h3>
    <p>Este es un ejemplo de cómo se puede implementar el patrón Chain of Responsibility en Pseudocódigo:</p>
    <figure class="code">
<pre class="codigo" lang="pseudocode">// Manejador abstracto
class Manejador is
    private field siguiente: Manejador

    method setSiguiente(manejador: Manejador) is
        this.siguiente = manejador

    abstract method procesar(solicitud)

// Manejadores concretos
class ManejadorConcretoA is
    inherit Manejador

    method procesar(solicitud) is
        if solicitud es de tipo A then
            print("Manejando solicitud A")
        else
            if this.siguiente is not null then
                this.siguiente.procesar(solicitud)

class ManejadorConcretoB is
    inherit Manejador

    method procesar(solicitud) is
        if solicitud es de tipo B then
            print("Manejando solicitud B")
        else
            if this.siguiente is not null then
                this.siguiente.procesar(solicitud)

// Uso del patrón Chain of Responsibility
manejadorA = new ManejadorConcretoA()
manejadorB = new ManejadorConcretoB()

manejadorA.setSiguiente(manejadorB)

manejadorA.procesar("Tipo A")
manejadorA.procesar("Tipo B")</pre>
    </figure>
    
    <h3 class="color mt-5">Estructura</h3>
    <div class="d-flex justify-content-center mt-5">
        <img src="https://refactoring.guru/images/patterns/diagrams/chain-of-responsibility/structure-indexed.png" alt="Estructura Chain of Responsibility">
    </div>
    <br>
    <div class="separacion"></div>
</body>
</html>
