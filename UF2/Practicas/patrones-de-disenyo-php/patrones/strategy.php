<?php include '../header.php'; ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strategy</title>
    <link rel="stylesheet" href="../estilos.css">
</head>
<body>
<div class="container mt-5">
<h1 class="Titulo text-center">Strategy</h1>
    <p><strong class="color">Strategy</strong> es un patrón de diseño de comportamiento que permite seleccionar el algoritmo a utilizar en tiempo de ejecución. El patrón permite a un objeto cambiar su comportamiento, dependiendo del algoritmo seleccionado.</p>
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/content/strategy/strategy.png" alt="Strategy">
    </div><br><br>
    
    <h3 class="color">Problemas que resuelve</h3>
    <p>El patrón Strategy permite definir una familia de algoritmos, encapsular cada uno y hacerlos intercambiables. De este modo, se puede cambiar el algoritmo de un objeto sin modificar su código.</p>
    <ul>
        <li>Permite cambiar el comportamiento de un objeto en tiempo de ejecución sin modificar su código.</li>
        <li>Elimina el uso de condicionales complejos en el código cliente.</li>
        <li>Facilita la adición de nuevos algoritmos sin afectar el código existente.</li>
    </ul>
    
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/diagrams/strategy/solution.png" alt="Problema del patrón Strategy">
    </div>
    
    <h3 class="color">Ejemplo de código</h3>
    <p>Este es un ejemplo de cómo se puede implementar el patrón Strategy en código:</p>
    <figure class="code">
<pre class="codigo" lang="php">
// Estrategia
interface Estrategia {
    public function ejecutarAlgoritmo();
}

// Estrategia concreta 1
class EstrategiaConcretaA implements Estrategia {
    public function ejecutarAlgoritmo() {
        echo "Estrategia A: Ejecutando algoritmo A.\n";
    }
}

// Estrategia concreta 2
class EstrategiaConcretaB implements Estrategia {
    public function ejecutarAlgoritmo() {
        echo "Estrategia B: Ejecutando algoritmo B.\n";
    }
}

// Contexto
class Contexto {
    private $estrategia;

    public function __construct(Estrategia $estrategia) {
        $this->estrategia = $estrategia;
    }

    public function cambiarEstrategia(Estrategia $estrategia) {
        $this->estrategia = $estrategia;
    }

    public function ejecutar() {
        $this->estrategia->ejecutarAlgoritmo();
    }
}

// Uso del patrón Strategy
$contexto = new Contexto(new EstrategiaConcretaA());
$contexto->ejecutar();  // Estrategia A: Ejecutando algoritmo A.

$contexto->cambiarEstrategia(new EstrategiaConcretaB());
$contexto->ejecutar();  // Estrategia B: Ejecutando algoritmo B.
</pre>
    </figure>
    
    <h3 class="color mt-5">Estructura</h3>
    <div class="d-flex justify-content-center mt-5">
        <img src="https://refactoring.guru/images/patterns/diagrams/strategy/example.png" alt="Estructura Strategy">
    </div>
    <br>
    <div class="separacion"></div>
</body>
</html>
