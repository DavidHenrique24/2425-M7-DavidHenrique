<?php include '../header.php'; ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facade</title>
    <link rel="stylesheet" href="../estilos.css">
</head>
<body>
<div class="container mt-5">
<h1 class="Titulo text-center">Facade</h1>
    <p><strong class="color">Facade</strong> es un patrón de diseño estructural que proporciona una interfaz simplificada para un conjunto de interfaces en un subsistema, facilitando su uso y reduciendo la complejidad.</p>
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/content/facade/facade.png" alt="Facade">
    </div><br><br>
    
    <h3 class="color">Problemas que resuelve</h3>
    <p>El patrón Facade es útil cuando se necesita simplificar la interacción con sistemas complejos proporcionando una interfaz única y accesible.</p>
    <ul>
        <li>Reduce la complejidad del subsistema al proporcionar una interfaz unificada.</li>
        <li>Mejora la modularidad y la separación de responsabilidades.</li>
        <li>Facilita el mantenimiento y la escalabilidad del sistema.</li>
    </ul>
    
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/diagrams/facade/live-example-es.png" alt="Problema del patrón Facade">
    </div>
    
    <h3 class="color">Pseudocódigo</h3>
    <p>Este es un ejemplo de cómo se puede implementar el patrón Facade en Pseudocódigo:</p>
    <figure class="code">
<pre class="codigo" lang="pseudocode">// Subsistema complejo con varias clases
class SistemaAudio is
    method configurarAudio() is
        print("Configurando audio")

class SistemaVideo is
    method configurarVideo() is
        print("Configurando video")

class SistemaRed is
    method configurarRed() is
        print("Configurando red")

// Fachada que simplifica la interacción con el subsistema
class FachadaEntretenimiento is
    private field audio: SistemaAudio
    private field video: SistemaVideo
    private field red: SistemaRed
    
    constructor FachadaEntretenimiento() is
        this.audio = new SistemaAudio()
        this.video = new SistemaVideo()
        this.red = new SistemaRed()
    
    method iniciarEntretenimiento() is
        this.audio.configurarAudio()
        this.video.configurarVideo()
        this.red.configurarRed()
        print("Sistema de entretenimiento listo para usarse")

// Uso del patrón
FachadaEntretenimiento sistema = new FachadaEntretenimiento()
sistema.iniciarEntretenimiento()</pre>
    </figure>
    
    <h3 class="color mt-5">Estructura</h3>
    <div class="d-flex justify-content-center mt-5">
        <img src="https://refactoring.guru/images/patterns/diagrams/facade/example.png" alt="Estructura Facade">
    </div>
    <br>
    <div class="separacion"></div>
</body>
</html>

