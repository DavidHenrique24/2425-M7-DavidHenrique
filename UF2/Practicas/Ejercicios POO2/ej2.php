<?php
class Coche{
    public string $marca = 'Kart';
    public string $modelo = 'Luigi';

    public function descripcion(){
        return "Este auto es marca " . $this->marca . " Y es el modelo " . $this->modelo;

    }


}

$coche1= new Coche();
echo $coche1->descripcion();