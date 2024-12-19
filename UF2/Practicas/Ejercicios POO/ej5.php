<?php 
class Persona {
    public string $nombre;
    public string $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function saludar(){
        return "Hola, soy " . $this->nombre . "Y tengo " . $this->edad . " años";
    }

}

$persona = new Persona("Sebastian Dayehk", "22");

echo $persona ->saludar();



?>