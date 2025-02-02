<?php include '../header.php'; ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bridge</title>
    <link rel="stylesheet" href="../estilos.css">
</head>
<body>
<div class="container mt-5">
<h1 class="Titulo text-center">Bridge</h1>
    <p><strong class="color">Bridge</strong> es un patrón de diseño estructural que permite dividir una clase grande o un conjunto de clases estrechamente relacionadas en dos jerarquías separadas (abstracción e implementación) que pueden desarrollarse independientemente.</p>
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/content/bridge/bridge.png" alt="Ejemplo de Bridge">
    </div><br><br>
    <h3 class="color">Problemas que resuelve</h3>
    <p>El patrón Bridge es útil cuando:</p>
    <ul>
        <li>Deseas evitar una explosión de clases debido a múltiples combinaciones de abstracciones e implementaciones.</li>
        <li>Quieres extender una jerarquía sin afectar las clases existentes.</li>
    </ul>
    <p>Por ejemplo, imagina que estás desarrollando una aplicación con diferentes plataformas (Windows, Linux) y distintas formas de representar una ventana (diálogos, ventanas emergentes). En lugar de crear clases para cada combinación, puedes usar Bridge para separar la abstracción (ventanas) de la implementación (plataforma).</p>
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/diagrams/bridge/problem-es.png" alt="Problema resuelto por Bridge">
    </div>
    <br><br>
    <h3 class="color">Pseudocódigo</h3>
    <p>Ejemplo de cómo el patrón Bridge separa la abstracción de la implementación:</p>
    <figure class="code">
<pre class="codigo" lang="pseudocode">// Interfaz para la implementación
interface Dispositivo is
    method encender()
    method apagar()
    method ajustarVolumen(nivel)

// Implementación concreta: Radio
class Radio implements Dispositivo is
    method encender() is
        print("Radio encendida")
    method apagar() is
        print("Radio apagada")
    method ajustarVolumen(nivel) is
        print("Volumen de la radio: " + nivel)

// Implementación concreta: TV
class TV implements Dispositivo is
    method encender() is
        print("TV encendida")
    method apagar() is
        print("TV apagada")
    method ajustarVolumen(nivel) is
        print("Volumen de la TV: " + nivel)

// Abstracción: Control Remoto
class ControlRemoto is
    protected field dispositivo: Dispositivo
    constructor ControlRemoto(dispositivo: Dispositivo) is
        this.dispositivo = dispositivo
    method encender() is
        this.dispositivo.encender()
    method apagar() is
        this.dispositivo.apagar()

// Abstracción refinada: Control Remoto Avanzado
class ControlRemotoAvanzado extends ControlRemoto is
    method ajustarVolumen(nivel) is
        this.dispositivo.ajustarVolumen(nivel)

// Uso del patrón
Dispositivo radio = new Radio()
ControlRemotoAvanzado controlRadio = new ControlRemotoAvanzado(radio)
controlRadio.encender()
controlRadio.ajustarVolumen(10)
controlRadio.apagar()</pre>
    </figure>
    <h3 class="color mt-5">Estructura</h3>
    <div class="d-flex justify-content-center mt-5">
        <img src="https://refactoring.guru/images/patterns/diagrams/bridge/structure-es.png" alt="Estructura del patrón Bridge">
    </div>
    <br>
    <div class="separacion"></div>
</body>
</html>
