<?php
class Calculadora{
    public $numero1;
    public $numero2;

public function __construct($numero1, $numero2){
    $this->numero1 = $numero1;
    $this->numero2 = $numero2;
}

public function sumar(){
    return $this->numero1 + $this->numero2;
}

}

$calculadora1= new Calculadora(2, 2);  

echo "La suma es: " . $calculadora1->sumar() . "<br>"; 


?>