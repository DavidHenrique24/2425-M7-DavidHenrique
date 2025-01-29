<?php
class Producto{
    public string $nombre;
    public string $precio;
 
    public function __construct($nombre, $precio){
        $this->nombre = $nombre;
        $this->precio = $precio;
   
    }
    
    public function mostrarPrecio(){
        return "Nombre: " . $this->nombre . " " . " Precio: " . $this->precio ;
    }

}

$producto1 = new Producto("Empanadas", "40");

echo $producto1 ->mostrarPrecio();





?>