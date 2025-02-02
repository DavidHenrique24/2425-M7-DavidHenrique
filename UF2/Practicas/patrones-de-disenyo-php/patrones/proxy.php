<?php include '../header.php'; ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proxy</title>
    <link rel="stylesheet" href="../estilos.css">
</head>
<body>
<div class="container mt-5">
<h1 class="Titulo text-center">Proxy</h1>
    <p><strong class="color">Proxy</strong> es un patrón de diseño estructural que proporciona un objeto que actúa como sustituto de otro objeto para controlar el acceso a este. Puede añadir funcionalidades adicionales, como control de acceso, carga diferida o caching.</p>
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/content/proxy/proxy.png" alt="Proxy">
    </div><br><br>
    
    <h3 class="color">Problemas que resuelve</h3>
    <p>El patrón Proxy es útil cuando se necesita controlar el acceso a un objeto real, proporcionando una capa intermedia para gestionar funciones como autenticación, carga diferida, o almacenamiento en caché.</p>
    <ul>
        <li>Controla el acceso al objeto real.</li>
        <li>Permite la carga diferida de objetos costosos en recursos.</li>
        <li>Implementa funcionalidades como logging o caching sin modificar el objeto real.</li>
    </ul>
    
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/diagrams/proxy/solution-es.png" alt="Problema del patrón Proxy">
    </div>
    
    <h3 class="color">Ejemplo de Código</h3>
    <p>Este es un ejemplo de cómo se puede implementar el patrón Proxy en Pseudocódigo:</p>
    <figure class="code">
<pre class="codigo" lang="pseudocode">// Objeto Real
class ServicioReal is
    method realizarOperacion() is
        print("Realizando operación costosa")

// Proxy que controla el acceso al objeto real
class ProxyServicio is
    private field servicioReal: ServicioReal
    private field usuarioAutenticado: Boolean
    
    constructor ProxyServicio(usuarioAutenticado) is
        this.usuarioAutenticado = usuarioAutenticado
    
    method realizarOperacion() is
        if this.usuarioAutenticado then
            if this.servicioReal is null then
                this.servicioReal = new ServicioReal()
            this.servicioReal.realizarOperacion()
        else
            print("Acceso denegado. Usuario no autenticado.")

// Uso del patrón Proxy
proxy = new ProxyServicio(true)
proxy.realizarOperacion()

proxy2 = new ProxyServicio(false)
proxy2.realizarOperacion()</pre>
    </figure>
    
    <h3 class="color mt-5">Estructura</h3>
    <div class="d-flex justify-content-center mt-5">
        <img src="https://refactoring.guru/images/patterns/diagrams/proxy/structure-indexed.png" alt="Estructura Proxy">
    </div>
    <br>
    <div class="separacion"></div>
</body>
</html>
