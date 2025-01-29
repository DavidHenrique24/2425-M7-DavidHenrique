<?php
class Persona {
public string $nombre;
public int $edad;

public function __construct($nombre, $edad) {
$this->nombre = $nombre;
$this->edad = $edad;
}

public function saludar(){
    return "Hola " . $this->nombre . "tienes " . $this->edad . " años";
}

}

$persona1 = new Persona("Jesus Dayehk ", 20);
$persona2 = new Persona("Yehor Fal ", 21);
echo $persona1->saludar() . "<br>";
echo $persona2->saludar();

?>