<?php 
class Producto{
    public string $;
    public string $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function saludar(){
        return "Hola, soy " . $this->nombre . "Y tengo " . $this->edad . " años";
    }




}




?>