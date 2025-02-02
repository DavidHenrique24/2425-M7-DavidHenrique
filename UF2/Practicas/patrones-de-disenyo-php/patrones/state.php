<?php include '../header.php'; ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>State</title>
    <link rel="stylesheet" href="../estilos.css">
</head>
<body>
<div class="container mt-5">
<h1 class="Titulo text-center">State</h1>
    <p><strong class="color">State</strong> es un patrón de diseño de comportamiento que permite a un objeto cambiar su comportamiento cuando cambia su estado interno. El objeto parecerá cambiar de clase.</p>
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/content/state/state-es.png" alt="State">
    </div><br><br>
    
    <h3 class="color">Problemas que resuelve</h3>
    <p>El patrón State resuelve el problema de gestionar diferentes comportamientos de un objeto en función de su estado, sin necesidad de utilizar una gran cantidad de condicionales o cambiar el objeto en sí.</p>
    <ul>
        <li>Permite cambiar el comportamiento de un objeto según su estado interno sin modificar su clase.</li>
        <li>Evita el uso de grandes bloques de código condicional para gestionar el comportamiento en función del estado.</li>
        <li>Facilita la adición de nuevos estados y comportamientos sin afectar el código existente.</li>
    </ul>
    
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/diagrams/state/solution-es.png" alt="Problema del patrón State">
    </div>
    
    <h3 class="color">Ejemplo de código</h3>
    <p>Este es un ejemplo de cómo se puede implementar el patrón State en código:</p>
    <figure class="code">
<pre class="codigo" lang="php">
// Interfaz Estado
interface Estado {
    public function manejarSolicitud();
}

// Estado concreto 1
class EstadoConcretoA implements Estado {
    public function manejarSolicitud() {
        echo "Estado A: Procesando solicitud.\n";
    }
}

// Estado concreto 2
class EstadoConcretoB implements Estado {
    public function manejarSolicitud() {
        echo "Estado B: Procesando solicitud.\n";
    }
}

// Clase Contexto
class Contexto {
    private $estado;

    public function __construct(Estado $estado) {
        $this->estado = $estado;
    }

    public function cambiarEstado(Estado $estado) {
        $this->estado = $estado;
    }

    public function solicitar() {
        $this->estado->manejarSolicitud();
    }
}

// Uso del patrón State
$contexto = new Contexto(new EstadoConcretoA());
$contexto->solicitar();  // Estado A: Procesando solicitud.

$contexto->cambiarEstado(new EstadoConcretoB());
$contexto->solicitar();  // Estado B: Procesando solicitud.
</pre>
    </figure>
    
    <h3 class="color mt-5">Estructura</h3>
    <div class="d-flex justify-content-center mt-5">
        <img src="https://refactoring.guru/images/patterns/diagrams/state/structure-es-indexed.png" alt="Estructura State">
    </div>
    <br>
    <div class="separacion"></div>
</body>
</html>
