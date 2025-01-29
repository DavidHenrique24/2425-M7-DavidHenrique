<?php
class Persona {
public string $nombre;
public string $edad;

public function __construct($nombre, $edad) {
$this->nombre = $nombre;
$this->edad = $edad;
}

public function saludar(){
    return "Hola " . $this->nombre . "tienes " . $this->edad . " años";
}

}

$persona1 = new Persona("Sebastian Dayehk ", "22");
echo $persona1->saludar();

?>