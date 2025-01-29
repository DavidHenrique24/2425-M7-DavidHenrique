<?php
class Coche{
    public string $marca;
    public string $modelo;

    public function __construct($marca, $modelo){
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function descripcion(){
        return "Este auto es marca " . $this->marca . " Y es el modelo " . $this->modelo;

    }


}

$coche1= new Coche("Ford", "Fiesta");
echo $coche1->descripcion();