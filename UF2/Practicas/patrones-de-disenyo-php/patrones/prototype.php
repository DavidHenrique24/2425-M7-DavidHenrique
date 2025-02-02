<?php include '../header.php'; ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prototype</title>
    <link rel="stylesheet" href="../estilos.css">

</head>
<body>
<div class="container mt-5">
<h1 class="Titulo text-center">Prototype</h1>
    <p>Prototype es un patrón de diseño creacional que nos permite copiar objetos existentes sin que el código dependa de sus clases.</p>
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/content/prototype/prototype.png"style="width="50px" " alt="">
    </div>
    <h3 class="color">Problemas que resuelve</h3>
    <p>Digamos que tienes un objeto y quieres crear una copia exacta de él. ¿Cómo lo harías? En primer lugar, debes crear un nuevo objeto de la misma clase. Después debes recorrer todos los campos del objeto original y copiar sus valores en el nuevo objeto.<br><br>

¡Bien! Pero hay una trampa. No todos los objetos se pueden copiar de este modo, porque algunos de los campos del objeto pueden ser privados e invisibles desde fuera del propio objeto.</p>

    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/content/prototype/prototype-comic-1-es.png"style="width="50px" " alt="">
    </div>
    <br>
    <h3 class="color">Pseudocodigo</h3>
    <p>En este ejemplo, el patrón Prototype nos permite producir copias exactas de objetos geométricos sin acoplar el código a sus clases.</p>
    <figure class="code">
<pre class="codigo" lang="pseudocode">// Prototipo base.
abstract class Shape is
    field X: int
    field Y: int
    field color: string

    // Un constructor normal.
    constructor Shape() is
        // ...

    // El constructor prototipo. Un nuevo objeto se inicializa
    // con valores del objeto existente.
    constructor Shape(source: Shape) is
        this()
        this.X = source.X
        this.Y = source.Y
        this.color = source.color

    // La operación clonar devuelve una de las subclases de
    // Shape (Forma).
    abstract method clone():Shape


// Prototipo concreto. El método de clonación crea un nuevo
// objeto y lo pasa al constructor. Hasta que el constructor
// termina, tiene una referencia a un nuevo clon. De este modo
// nadie tiene acceso a un clon a medio terminar. Esto garantiza
// la consistencia del resultado de la clonación.
class Rectangle extends Shape is
    field width: int
    field height: int

    constructor Rectangle(source: Rectangle) is
        // Para copiar campos privados definidos en la clase
        // padre es necesaria una llamada a un constructor
        // padre.
        super(source)
        this.width = source.width
        this.height = source.height

    method clone():Shape is
        return new Rectangle(this)


class Circle extends Shape is
    field radius: int

    constructor Circle(source: Circle) is
        super(source)
        this.radius = source.radius

    method clone():Shape is
        return new Circle(this)


// En alguna parte del código cliente.
class Application is
    field shapes: array of Shape

    constructor Application() is
        Circle circle = new Circle()
        circle.X = 10
        circle.Y = 10
        circle.radius = 20
        shapes.add(circle)

        Circle anotherCircle = circle.clone()
        shapes.add(anotherCircle)
        // La variable `anotherCircle` (otroCírculo) contiene
        // una copia exacta del objeto `circle`.

        Rectangle rectangle = new Rectangle()
        rectangle.width = 10
        rectangle.height = 20
        shapes.add(rectangle)

    method businessLogic() is
        // Prototype es genial porque te permite producir una
        // copia de un objeto sin conocer nada de su tipo.
        Array shapesCopy = new Array of Shapes.

        // Por ejemplo, no conocemos los elementos exactos de la
        // matriz de formas. Lo único que sabemos es que son
        // todas formas. Pero, gracias al polimorfismo, cuando
        // invocamos el método `clonar` en una forma, el
        // programa comprueba su clase real y ejecuta el método
        // de clonación adecuado definido en dicha clase. Por
        // eso obtenemos los clones adecuados en lugar de un
        // grupo de simples objetos Shape.
        foreach (s in shapes) do
            shapesCopy.add(s.clone())

        // La matriz `shapesCopy` contiene copias exactas del
        // hijo de la matriz `shape`.
</pre>
</figure>
<h3 class="color mt-5">Estructura</h3>
        <div class="d-flex justify-content-center mt-5">
            <img src="https://refactoring.guru/images/patterns/diagrams/prototype/structure-indexed.png" alt="Estructura Singleton">
        </div>
        <br>

         <br>
        <div>
            <h2 class="color"> Aplicabilidad</h2>
            <div class="applicability">
                <div class="applicability-problem">
                    <p><i class="fa fa-fw fa-bug" aria-hidden="true"></i> Utiliza el patrón Prototype cuando tu código no deba depender de las clases concretas de objetos que necesites copiar. </p>
                </div>
                <div class="applicability-solution">
                    <p><i class="fa fa-fw fa-bolt" aria-hidden="true"> Esto sucede a menudo cuando tu código funciona con objetos pasados por código de terceras personas a través de una interfaz. Las clases concretas de estos objetos son desconocidas y no podrías depender de ellas aunque quisieras.</i></p>
                </div>
                <div class="applicability-problem">
                    <p><i class="fa fa-fw fa-bug" aria-hidden="true">Utiliza el patrón cuando quieras reducir la cantidad de subclases que solo se diferencian en la forma en que inicializan sus respectivos objetos. Puede ser que alguien haya creado estas subclases para poder crear objetos con una configuración específica.</i> Utiliza el patrón Singleton cuando necesites un control más estricto de las variables globales.</p>
                </div>
                <div class="applicability-solution">
                    <p><i class="fa fa-fw fa-bolt" aria-hidden="true"></i> El patrón Prototype te permite utilizar como prototipos un grupo de objetos prefabricados, configurados de maneras diferentes.

En lugar de instanciar una subclase que coincida con una configuración, el cliente puede, sencillamente, buscar el prototipo adecuado y clonarlo.</p>
                </div>
            </div>
        </div>
        <br>

        <div">
            <h2 class="color">¿Como implementarlo?</h2>
            <ol>
                <li>Crea la interfaz del prototipo y declara el método clonar en ella, o, simplemente, añade el método a todas las clases de una jerarquía de clase existente, si la tienes.</li><br>
                <li>Una clase de prototipo debe definir el constructor alternativo que acepta un objeto de dicha clase como argumento. El constructor debe copiar los valores de todos los campos definidos en la clase del objeto que se le pasa a la instancia recién creada. Si deseas cambiar una subclase, debes invocar al constructor padre para permitir que la superclase gestione la clonación de sus campos privados.</li><br>
                <li>Normalmente, el método de clonación consiste en una sola línea que ejecuta un operador new con la versión prototípica del constructor. Observa que todas las clases deben sobreescribir explícitamente el método de clonación y utilizar su propio nombre de clase junto al operador new. De lo contrario, el método de clonación puede producir un objeto a partir de una clase madre.</li><br>
                <li>Opcionalmente, puedes crear un registro de prototipos centralizado para almacenar un catálogo de prototipos de uso frecuente.
Puedes implementar el registro como una nueva clase de fábrica o colocarlo en la clase base de prototipo con un método estático para buscar el prototipo. Este método debe buscar un prototipo con base en el criterio de búsqueda que el código cliente pase al método. El criterio puede ser una etiqueta tipo string o un grupo complejo de parámetros de búsqueda. Una vez encontrado el prototipo adecuado, el registro deberá clonarlo y devolver la copia al cliente.</li><br>
            </ol>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <img src="https://refactoring.guru/images/patterns/content/prototype/prototype-comic-3-es.png" alt="Estructura Singleton">
        </div>
    </div>
    <div class="separacion"></div>
</body>
</html>

