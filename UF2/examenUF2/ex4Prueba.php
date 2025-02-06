
<!-- Codigo 1 Esta bien -->
<?php
class Cotxe {
    public $marca;
    public $model;
    
    function __construct($marca, $model) {
        $this->marca = $marca;
        $this->model = $model;
    }

    function descripcio() {
        return "Aquest cotxe és un " . $this->marca . " " . $this->model;
    }
}
$cotxe = new Cotxe("Toyota", "Corolla");
echo $cotxe->descripcio();


//codigo 2 esta mal porque esta entre comillas el 30 cuando ya se ha inicializado como numero entero osea int


class Persona {
    public string $nom;
    public int $edat;

    function __construct(string $nom, int $edat) {
        $this->nom = $nom;
        $this->edat = $edat;
    }
}
$persona = new Persona("Maria", "30");
echo $persona->edat;


//Codigo 3 No tiene nigun error

class Calculadora {
    function sumar($a, $b) {
        return $a + $b;
    }
    function restar($a, $b) {
        return $a - $b;
    }
}
$calc = new Calculadora();
echo $calc->sumar(5, 3);
echo $calc->restar(10, 4);


//Codigo 4 Esta perfecto el codigo

class Animal {
    public $nom;
    
    function __construct($nom) {
        $this->nom = $nom;
    }
    function getNom() {
        return $this->nom;
    }
}
$gos = new Animal("Toby");
echo $gos->getNom();





?>