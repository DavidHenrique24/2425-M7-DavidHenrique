<?php include '../header.php'; ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract Factory</title>
    <link rel="stylesheet" href="../estilos.css">

</head>
<body>
<div class="container mt-5">
<h1 class="Titulo text-center">Abstract Factory</h1>
    <p><strong class="color">Abstract Factory</strong> Abstract Factory es un patrón de diseño creacional que nos permite producir familias de objetos relacionados sin especificar sus clases concretas.</p>
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/content/abstract-factory/abstract-factory-es.png"style="width="50px" " alt="">
    </div><br><br>
    <h3 class="color">Problemas que resuelve</h3>
    <p>Imagina que estás creando un simulador de tienda de muebles. Tu código está compuesto por clases que representan lo siguiente:</p>
    <ul>
        <li>Una familia de productos relacionados, digamos: Silla + Sofá + Mesilla.</li>
        <li>Algunas variantes de esta familia. Por ejemplo, los productos Silla + Sofá + Mesilla están disponibles en estas variantes: Moderna, Victoriana, ArtDecó.</li>
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/diagrams/abstract-factory/problem-es.png"style="width="50px" " alt="">
    </div>
    <p>Necesitamos una forma de crear objetos individuales de mobiliario para que combinen con otros objetos de la misma familia. Los clientes se enfadan bastante cuando reciben muebles que no combinan.</p>
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/content/abstract-factory/abstract-factory-comic-1-es.png"style="width="50px" " alt="">
    </div><br>
    <p>Además, no queremos cambiar el código existente al añadir al programa nuevos productos o familias de productos. Los comerciantes de muebles actualizan sus catálogos muy a menudo, y debemos evitar tener que cambiar el código principal cada vez que esto ocurra.</p>
    <br><br>

    <h3 class="color">Ejemplo de Código</h3>
    <p>Este ejemplo ilustra cómo puede utilizarse el patrón Abstract Factory para crear elementos de interfaz de usuario (UI) multiplataforma sin acoplar el código cliente a clases UI concretas, mientras se mantiene la consistencia de todos los elementos creados respecto al sistema operativo seleccionado.</p>
    <figure class="code">
<pre class="codigo" lang="pseudocode">// El uso del patrón Builder sólo tiene sentido cuando tus
// productos son bastante complejos y requieren una
// configuración extensiva. Los dos siguientes productos están
// relacionados, aunque no tienen una interfaz común.
class Car is
    // Un coche puede tener un GPS, una computadora de
    // navegación y cierto número de asientos. Los distintos
    // modelos de coches (deportivo, SUV, descapotable) pueden
    // tener distintas características instaladas o habilitadas.

class Manual is
    // Cada coche debe contar con un manual de usuario que se
    // corresponda con la configuración del coche y explique
    // todas sus características.


// La interfaz constructora especifica métodos para crear las
// distintas partes de los objetos del producto.
interface Builder is
    method reset()
    method setSeats(...)
    method setEngine(...)
    method setTripComputer(...)
    method setGPS(...)

// Las clases constructoras concretas siguen la interfaz
// constructora y proporcionan implementaciones específicas de
// los pasos de construcción. Tu programa puede tener multitud
// de variaciones de objetos constructores, cada una de ellas
// implementada de forma diferente.
class CarBuilder implements Builder is
    private field car:Car

    // Una nueva instancia de la clase constructora debe
    // contener un objeto de producto en blanco que utiliza en
    // el montaje posterior.
    constructor CarBuilder() is
        this.reset()

    // El método reset despeja el objeto en construcción.
    method reset() is
        this.car = new Car()

    // Todos los pasos de producción funcionan con la misma
    // instancia de producto.
    method setSeats(...) is
        // Establece la cantidad de asientos del coche.

    method setEngine(...) is
        // Instala un motor específico.

    method setTripComputer(...) is
        // Instala una computadora de navegación.

    method setGPS(...) is
        // Instala un GPS.

    // Los constructores concretos deben proporcionar sus
    // propios métodos para obtener resultados. Esto se debe a
    // que varios tipos de objetos constructores pueden crear
    // productos completamente diferentes de los cuales no todos
    // siguen la misma interfaz. Por lo tanto, dichos métodos no
    // pueden declararse en la interfaz constructora (al menos
    // no en un lenguaje de programación de tipado estático).
    //
    // Normalmente, tras devolver el resultado final al cliente,
    // una instancia constructora debe estar lista para empezar
    // a generar otro producto. Ese es el motivo por el que es
    // práctica común invocar el método reset al final del
    // cuerpo del método `getProduct`. Sin embargo, este
    // comportamiento no es obligatorio y puedes hacer que tu
    // objeto constructor espere una llamada reset explícita del
    // código cliente antes de desechar el resultado anterior.
    method getProduct():Car is
        product = this.car
        this.reset()
        return product

// Al contrario que otros patrones creacionales, Builder te
// permite construir productos que no siguen una interfaz común.
class CarManualBuilder implements Builder is
    private field manual:Manual

    constructor CarManualBuilder() is
        this.reset()

    method reset() is
        this.manual = new Manual()

    method setSeats(...) is
        // Documenta las características del asiento del coche.

    method setEngine(...) is
        // Añade instrucciones del motor.

    method setTripComputer(...) is
        // Añade instrucciones de la computadora de navegación.

    method setGPS(...) is
        // Añade instrucciones del GPS.

    method getProduct():Manual is
        // Devuelve el manual y rearma el constructor.


// El director sólo es responsable de ejecutar los pasos de
// construcción en una secuencia particular. Resulta útil cuando
// se crean productos de acuerdo con un orden o configuración
// específicos. En sentido estricto, la clase directora es
// opcional, ya que el cliente puede controlar directamente los
// objetos constructores.
class Director is
    // El director funciona con cualquier instancia de
    // constructor que le pase el código cliente. De esta forma,
    // el código cliente puede alterar el tipo final del
    // producto recién montado. El director puede construir
    // multitud de variaciones de producto utilizando los mismos
    // pasos de construcción.
    method constructSportsCar(builder: Builder) is
        builder.reset()
        builder.setSeats(2)
        builder.setEngine(new SportEngine())
        builder.setTripComputer(true)
        builder.setGPS(true)

    method constructSUV(builder: Builder) is
        // ...


// El código cliente crea un objeto constructor, lo pasa al
// director y después inicia el proceso de construcción. El
// resultado final se extrae del objeto constructor.
class Application is

    method makeCar() is
        director = new Director()

        CarBuilder builder = new CarBuilder()
        director.constructSportsCar(builder)
        Car car = builder.getProduct()

        CarManualBuilder builder = new CarManualBuilder()
        director.constructSportsCar(builder)

        // El producto final a menudo se extrae de un objeto
        // constructor, ya que el director no conoce y no
        // depende de constructores y productos concretos.
        Manual manual = builder.getProduct()
</pre>
</figure>


    <h3 class="color mt-5">Estructura</h3>
        <div class="d-flex justify-content-center mt-5">
            <img src="https://refactoring.guru/images/patterns/diagrams/builder/structure-indexed.png" alt="Estructura Singleton">
        </div>
        <br>
    <div class="separacion"></div>
</body>
</html>

