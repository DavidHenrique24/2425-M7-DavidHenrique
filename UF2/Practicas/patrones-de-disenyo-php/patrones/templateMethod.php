<?php include '../header.php'; ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Method</title>
    <link rel="stylesheet" href="../estilos.css">
</head>
<body>
<div class="container mt-5">
<h1 class="Titulo text-center">Template Method</h1>
    <p><strong class="color">Template Method</strong> es un patrón de diseño de comportamiento que define el esqueleto de un algoritmo en un método, permitiendo que algunas etapas del algoritmo sean redefinidas por las subclases sin cambiar la estructura general del algoritmo.</p>
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/content/template-method/template-method.png" alt="Template Method">
    </div><br><br>
    
    <h3 class="color">Problemas que resuelve</h3>
    <p>El patrón Template Method es útil cuando se tiene un algoritmo que debe seguir un esquema general pero algunos pasos deben ser definidos por las subclases. Permite la reutilización de código común mientras se permite a las subclases personalizar ciertas etapas del proceso.</p>
    <ul>
        <li>Permite definir la estructura general de un algoritmo sin modificar los pasos concretos que lo componen.</li>
        <li>Facilita la reutilización de código y la personalización de pasos específicos en las subclases.</li>
        <li>El código común se encuentra en la clase base, mientras que los detalles específicos se delegan a las subclases.</li>
    </ul>
    
    <div class="d-flex justify-content-center mt-5">
    <img src="https://refactoring.guru/images/patterns/diagrams/template-method/solution-es.png" alt="Problema del patrón Template Method">
    </div>
    
    <h3 class="color">Ejemplo de código</h3>
    <p>Este es un ejemplo de cómo se puede implementar el patrón Template Method en código:</p>
    <figure class="code">
<pre class="codigo" lang="php">
// Clase abstracta que define el algoritmo
abstract class PreparacionBebida {
    // Método plantilla
    public function preparar() {
        $this->hervirAgua();
        $this->prepararBebida();
        $this->verterEnTaza();
        $this->agregarAdicionales();
    }

    abstract protected function prepararBebida(); // Método que las subclases deben implementar
    abstract protected function agregarAdicionales(); // Método que las subclases deben implementar

    private function hervirAgua() {
        echo "Herviendo agua...\n";
    }

    private function verterEnTaza() {
        echo "Vertiendo en la taza...\n";
    }
}

// Subclase para preparar té
class PrepararTe extends PreparacionBebida {
    protected function prepararBebida() {
        echo "Preparando té...\n";
    }

    protected function agregarAdicionales() {
        echo "Agregando limón al té...\n";
    }
}

// Subclase para preparar café
class PrepararCafe extends PreparacionBebida {
    protected function prepararBebida() {
        echo "Preparando café...\n";
    }

    protected function agregarAdicionales() {
        echo "Agregando azúcar al café...\n";
    }
}

// Uso del patrón Template Method
$te = new PrepararTe();
$te->preparar();  // Herviendo agua... Preparando té... Vertiendo en la taza... Agregando limón al té...

$cafe = new PrepararCafe();
$cafe->preparar();  // Herviendo agua... Preparando café... Vertiendo en la taza... Agregando azúcar al café...
</pre>
    </figure>
    
    <h3 class="color mt-5">Estructura</h3>
    <div class="d-flex justify-content-center mt-5">
        <img src="https://refactoring.guru/images/patterns/diagrams/template-method/structure-indexed.png?id=4ced6107519bc66710d2f05c0f4097a1" alt="Estructura Template Method">
    </div>
    <br>
    <div class="separacion"></div>
</body>
</html>
