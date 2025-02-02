<?php include '../header.php'; ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singlenton</title>
    <link rel="stylesheet" href="../estilos.css">

</head>
<body>
<div class="container mt-5">
<h1 class="Titulo text-center">Singlenton</h1>
    <p>Singleton es un patrón de diseño creacional que nos permite asegurarnos de que una clase tenga una única instancia, a la vez que proporciona un punto de acceso global a dicha instancia.</p>

    <h3 class="color">Problemas que resuelve</h3>
    <p>El patrón Singleton resuelve dos problemas:</p>
    <ol>
        <li>
            <strong class="color">Garantizar que una clase tenga una única instancia</strong>.
            <p>¿Por qué querría alguien controlar cuántas instancias tiene una clase? El motivo más habitual es controlar el acceso a algún recurso compartido, como una base de datos o un archivo.</p>
            <p>Funciona así: imagina que has creado un objeto y, al cabo de un tiempo, decides crear otro nuevo. En lugar de recibir un objeto nuevo, obtendrás el que ya habías creado.</p>
            <p>Ten en cuenta que este comportamiento es imposible de implementar con un constructor normal, ya que una llamada al constructor siempre  <strong class="color">debe</strong> devolver un nuevo objeto por diseño.</p>
        </li>
        <li>
        <strong class="color">Proporcionar un punto de acceso global a dicha instancia</strong>.
            <p>¿Recuerdas esas variables globales que utilizaste para almacenar objetos esenciales? Aunque son muy útiles, también son poco seguras, ya que cualquier código podría sobrescribir el contenido de esas variables y descomponer la aplicación.</p>
            <p>Al igual que una variable global, el patrón Singleton nos permite acceder a un objeto desde cualquier parte del programa. No obstante, también evita que otro código sobreescriba esa instancia.</p>
            <p>Este problema tiene otra cara: no queremos que el código que resuelve el primer problema se encuentre disperso por todo el programa. Es mucho más conveniente tenerlo dentro de una clase, sobre todo si el resto del código ya depende de ella.</p>
        </li>
    </ol>
    
    <p>Hoy en día el patrón Singleton se ha popularizado tanto que la gente suele llamar <em>singleton</em> a cualquier patrón, incluso si solo resuelve uno de los problemas mencionados anteriormente.</p>
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/content/singleton/singleton-comic-1-es.png"style="width="50px" " alt="">
    </div>

    <h3 class="color">Ejemplo de Código</h3>
    <p>En este ejemplo, la clase de conexión de la base de datos actúa como Singleton. Esta clase no tiene un constructor público, por lo que la única manera de obtener su objeto es invocando el método <strong class="color">obtenerInstancia</strong>. Este método almacena en caché el primer objeto creado y lo devuelve en todas las llamadas siguientes.</p>
    <figure class="code">
<pre class="codigo" lang="pseudocode">// La clase Base de datos define el método `obtenerInstancia`
// que permite a los clientes acceder a la misma instancia de
// una conexión de la base de datos a través del programa.
class Database is
    // El campo para almacenar la instancia singleton debe
    // declararse estático.
    private static field instance: Database

    // El constructor del singleton siempre debe ser privado
    // para evitar llamadas de construcción directas con el
    // operador `new`.
    private constructor Database() is
        // Algún código de inicialización, como la propia
        // conexión al servidor de una base de datos.
        // ...

    // El método estático que controla el acceso a la instancia
    // singleton.
    public static method getInstance() is
        if (Database.instance == null) then
            acquireThreadLock() and then
                // Garantiza que la instancia aún no se ha
                // inicializado por otro hilo mientras ésta ha
                // estado esperando el desbloqueo.
                if (Database.instance == null) then
                    Database.instance = new Database()
        return Database.instance

    // Por último, cualquier singleton debe definir cierta
    // lógica de negocio que pueda ejecutarse en su instancia.
    public method query(sql) is
        // Por ejemplo, todas las consultas a la base de datos
        // de una aplicación pasan por este método. Por lo
        // tanto, aquí puedes colocar lógica de regularización
        // (throttling) o de envío a la memoria caché.
        // ...

class Application is
    method main() is
        Database foo = Database.getInstance()
        foo.query(&quot;SELECT ...&quot;)
        // ...
        Database bar = Database.getInstance()
        bar.query(&quot;SELECT ...&quot;)
        // La variable `bar` contendrá el mismo objeto que la
        // variable `foo`.
</pre>
</figure>
<h3 class="text-center color mt-5">Estructura</h3>
        <div class="d-flex justify-content-center mt-5">
            <img src="https://refactoring.guru/images/patterns/diagrams/singleton/structure-es-indexed.png" alt="Estructura Singleton">
        </div>

        <div>
            <h2 class="color"> Aplicabilidad</h2>
            <div class="applicability">
                <div class="applicability-problem">
                    <p><i class="fa fa-fw fa-bug" aria-hidden="true"></i> Utiliza el patrón Singleton cuando una clase de tu programa tan solo deba tener una instancia disponible para todos los clientes...</p>
                </div>
                <div class="applicability-solution">
                    <p><i class="fa fa-fw fa-bolt" aria-hidden="true"></i> El patrón Singleton deshabilita el resto de las maneras de crear objetos de una clase...</p>
                </div>
                <div class="applicability-problem">
                    <p><i class="fa fa-fw fa-bug" aria-hidden="true"></i> Utiliza el patrón Singleton cuando necesites un control más estricto de las variables globales.</p>
                </div>
                <div class="applicability-solution">
                    <p><i class="fa fa-fw fa-bolt" aria-hidden="true"></i> Al contrario que las variables globales, el patrón Singleton garantiza que haya una única instancia de una clase...</p>
                </div>
            </div>
        </div>

        <div">
            <h2 class="color">¿Como implementarlo?</h2>
            <ol>
                <li>Añade un campo estático privado a la clase para almacenar la instancia Singleton.</li>
                <li>Declara un método de creación estático público para obtener la instancia Singleton.</li>
                <li>Implementa una inicialización diferida dentro del método estático.</li>
                <li>Declara el constructor de clase como privado.</li>
                <li>Repasa el código cliente y sustituye las llamadas directas al constructor.</li>
            </ol>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <img src="https://refactoring.guru/images/patterns/content/singleton/singleton.png?id=108a0b9b5ea5c4426e0afa4504491d6f" alt="Estructura Singleton">
        </div>
    </div>
    <div class="separacion"></div>
</body>
</html>

