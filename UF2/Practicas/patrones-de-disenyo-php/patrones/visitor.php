<?php include '../header.php'; ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor</title>
    <link rel="stylesheet" href="../estilos.css">
</head>
<body>
<div class="container mt-5">
<h1 class="Titulo text-center">Visitor</h1>
    <p><strong class="color">Visitor</strong> es un patrón de diseño de comportamiento que permite definir nuevas operaciones sobre objetos sin cambiar sus clases. Este patrón se utiliza para separar una operación de la estructura de objetos sobre la que opera, permitiendo que el código de la operación se agregue sin modificar las clases existentes.</p>
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/content/visitor/visitor.png" alt="Visitor">
    </div><br><br>
    
    <h3 class="color">Problemas que resuelve</h3>
    <p>El patrón Visitor es útil cuando tienes una estructura de objetos complejos y deseas realizar operaciones sobre estos objetos sin modificar sus clases. Facilita la adición de nuevas funcionalidades sin alterar las clases existentes, lo cual puede ser muy útil en sistemas con clases estables.</p>
    <ul>
        <li>Permite añadir nuevas operaciones a una estructura de objetos sin cambiar las clases de los objetos.</li>
        <li>Fomenta la separación de las operaciones del objeto que las recibe.</li>
        <li>Es útil en estructuras de objetos complejos que necesitan múltiples operaciones.</li>
    </ul>
    
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/content/visitor/visitor-comic-1.png" alt="Problema del patrón Visitor">
    </div>
    
    <h3 class="color">Ejemplo de código</h3>
    <p>Este es un ejemplo de cómo se puede implementar el patrón Visitor en código:</p>
    <figure class="code">
<pre class="codigo" lang="php">
// Elemento base (interfaz común)
interface Elemento {
    public function aceptar(Visitor $visitor);
}

// Elementos concretos
class Libro implements Elemento {
    public function aceptar(Visitor $visitor) {
        $visitor->visitarLibro($this);
    }
}

class Revista implements Elemento {
    public function aceptar(Visitor $visitor) {
        $visitor->visitarRevista($this);
    }
}

// Visitor (interfaz común para los visitantes)
interface Visitor {
    public function visitarLibro(Libro $libro);
    public function visitarRevista(Revista $revista);
}

// Visitor concreto
class VisitorConcreto implements Visitor {
    public function visitarLibro(Libro $libro) {
        echo "Visitando un libro\n";
    }

    public function visitarRevista(Revista $revista) {
        echo "Visitando una revista\n";
    }
}

// Uso del patrón
$libro = new Libro();
$revista = new Revista();

$visitor = new VisitorConcreto();

// Los elementos aceptan el visitante
$libro->aceptar($visitor);  // Visitando un libro
$revista->aceptar($visitor);  // Visitando una revista
</pre>
    </figure>
    
    <h3 class="color mt-5">Estructura</h3>
    <div class="d-flex justify-content-center mt-5">
        <img src="https://refactoring.guru/images/patterns/diagrams/visitor/structure-es-indexed.png" alt="Estructura Visitor">
    </div>
    <br>
    <div class="separacion"></div>
</body>
</html>
